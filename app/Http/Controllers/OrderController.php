<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\SizeStock;



class OrderController extends Controller
{public function checkout(Request $request)
    {
        // Skontrolujeme, či je používateľ prihlásený
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    
        // Začneme transakciu, aby sme zabezpečili, že všetky operácie prebehnú úspešne.
        DB::beginTransaction();
    
        try {
            // 1. Vytvorenie objednávky
            $order = Order::create([
                'user_id' => Auth::user()->id,  // Ak je používateľ prihlásený
                'status' => 'pending', // alebo akýkoľvek iný status
            ]);
    
            // 2. Získame položky z košíka
            $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
    
            // 3. Pripravíme dáta pre `order_items`
            $orderItems = [];
            foreach ($cartItems as $cartItem) {
                $orderItems[] = [
                    'amount' => $cartItem->amount,
                    'product_id' => $cartItem->product_id,
                    'order_id' => $order->id,
                    'size' => $cartItem->size, // Pridáme veľkosť k položke objednávky
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
    
                // Získame zásoby pre konkrétnu veľkosť produktu
                $sizeStock = SizeStock::where('product_id', $cartItem->product_id)
                                      ->where('size', $cartItem->size) // Predpokladám, že veľkosť je k dispozícii v košíku
                                      ->first();
    
                // Znížime počet kusov na sklade pre konkrétnu veľkosť
                if ($sizeStock) {
                    $sizeStock->stock_left -= $cartItem->amount;
                    $sizeStock->save();
                } else {
                    DB::rollBack();
                    return response()->json(['error' => 'Product size not found'], 500);
                }
            }
    
            // 5. Pridáme položky do `order_items` v dávke
            OrderItem::insert($orderItems);
    
            // 6. Odstránime položky z košíka
            CartItem::where('user_id', Auth::user()->id)->delete();
    
            // Uložíme transakciu
            DB::commit();
    
            // Získame info o produktoch a zásobách
            $productSummaries = [];
            foreach ($orderItems as $item) {
                // Získame produkt podľa product_id
                $product = Product::find($item['product_id']);
                
                // Skontrolujeme, či produkt existuje
                if ($product) {
                    // Získame zásoby pre konkrétnu veľkosť produktu
                    $sizeStock = SizeStock::where('product_id', $item['product_id'])
                                          ->where('size', $item['size'])  // Teraz máme správnu veľkosť
                                          ->first();
    
                    $productSummaries[] = [
                        'name' => $product->name,
                        'ordered' => $item['amount'],
                        'stock_left' => $sizeStock ? $sizeStock->stock_left : 0,
                    ];
                } else {
                    Log::error('Product not found for order item', ['order_item_id' => $item['product_id']]);
                }
            }
    
            // Flashni dáta do session
            session()->flash('order_success', 'Your order has been placed successfully!');
            session()->flash('order_products', $productSummaries);
    
            return redirect()->route('cart.index'); // alebo checkout.complete
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Something went wrong.',
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
    public function completeOrder(Request $request)
{
    // Validate and process order logic
    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'city' => 'required|string',
        'postal_code' => 'required|string',
    ]);

    // Process the order, e.g., create an order, reduce stock, etc.
    // This is just an example, adapt it based on your business logic.

    // Example of saving order
    $order = Order::create([
        'user_id' => auth()->id(),
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'address' => $validated['address'],
        'city' => $validated['city'],
        'postal_code' => $validated['postal_code'],
        'total' => session('total'),
    ]);

    // After processing the order, set a success message
    session()->flash('order_success', 'Your order has been successfully placed!');

    // Clear cart after successful order
    Cart::clear();

    // Redirect back to the checkout page with the success message
    return redirect()->route('checkout');
}

    
}
