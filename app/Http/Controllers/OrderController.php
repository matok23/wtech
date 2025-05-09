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
{
    public function checkout(Request $request)
{
    $userId = Auth::id(); 
    $sessionId = session()->getId();

    // Načítaj položky z košíka podľa user_id alebo session_id
    $cartItems = CartItem::where(function ($query) use ($userId, $sessionId) {
        if ($userId) {
            $query->where('user_id', $userId);
        } else {
            $query->where('session_id', $sessionId);
        }
    })->get();

    if ($cartItems->isEmpty()) {
        return response()->json(['error' => 'Cart is empty'], 400);
    }

    DB::beginTransaction();

    try {
        // 1. Vytvor objednávku
        $order = Order::create([
    'user_id' => $userId, 
    'session_id' => $sessionId,
    'status' => 'pending',
]);

        $orderItems = [];
        foreach ($cartItems as $cartItem) {
            $orderItems[] = [
                'amount' => $cartItem->amount,
                'product_id' => $cartItem->product_id,
                'order_id' => $order->id,
                'size' => $cartItem->size,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $sizeStock = SizeStock::where('product_id', $cartItem->product_id)
                                  ->where('size', $cartItem->size)
                                  ->first();

            if ($sizeStock && $sizeStock->stock_left >= $cartItem->amount) {
                $sizeStock->stock_left -= $cartItem->amount;
                $sizeStock->save();
            } else {
                DB::rollBack();
                return response()->json(['error' => 'Insufficient stock for product size'], 500);
            }
        }

        OrderItem::insert($orderItems);

        // Vymaž položky z košíka podľa toho, kto objednáva
        CartItem::where(function ($query) use ($userId, $sessionId) {
            if ($userId) {
                $query->where('user_id', $userId);
            } else {
                $query->where('session_id', $sessionId);
            }
        })->delete();

        DB::commit();

            // Získame info o produktoch a zásobách
            $productSummaries = [];
            foreach ($orderItems as $item) {
                $product = Product::find($item['product_id']);
                
                if ($product) {
                    // Získame zásoby pre konkrétnu veľkosť produktu
                    $sizeStock = SizeStock::where('product_id', $item['product_id'])
                                          ->where('size', $item['size'])  
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
    

        
        session()->flash('order_success', 'Your order has been placed successfully!');
        session()->flash('order_success', 'Your order has been placed successfully!');
        session()->flash('order_products', $productSummaries);

        return redirect()->route('cart.index');
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json([
                    'error' => 'Something went wrong.',
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ], 500);
            }
        }


    
}
