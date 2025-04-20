<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $userId = Auth::id();
    $sessionId = session()->getId();

    if ($userId) {
        // For authenticated users
        $cartItems = CartItem::with('product')
            ->where('user_id', $userId)
            ->get()
            ->map(function ($item) {
                $sizeStock = \App\Models\SizeStock::where('product_id', $item->product_id)
                    ->where('size', $item->size)
                    ->first();

                return [
                    'product' => $item->product,
                    'quantity' => $item->amount,
                    'size' => $sizeStock ? $sizeStock->size : $item->size,
                    'stock_left' => $sizeStock ? $sizeStock->stock_left : 0,
                ];
            });
    } else {
        // For guest users
        $cartItems = CartItem::with('product')
            ->where('session_id', $sessionId)
            ->get()
            ->map(function ($item) {
                $sizeStock = \App\Models\SizeStock::where('product_id', $item->product_id)
                    ->where('size', $item->size)
                    ->first();

                return [
                    'product' => $item->product,
                    'quantity' => $item->amount,
                    'size' => $sizeStock ? $sizeStock->size : $item->size,
                    'stock_left' => $sizeStock ? $sizeStock->stock_left : 0,
                ];
            });
    }

    // Calculate total price
    $total = $cartItems->sum(function ($item) {
        return $item['product']->price * $item['quantity'];
    });

    return view('checkout.index', compact('cartItems', 'total'));
}

public function completeOrder(Request $request)
{
    // Uložíme hodnoty do session
    $coupon = $request->input('coupon');
    $deliveryMethod = $request->input('deliveryMethod');
    $paymentMethod = $request->input('paymentMethod');
    
    $request->session()->put('coupon', $coupon);
    $request->session()->put('deliveryMethod', $deliveryMethod);
    $request->session()->put('paymentMethod', $paymentMethod);


    
    // Spracovanie objednávky
    // Tu môžete pridať logiku na uloženie objednávky, zníženie zásob a podobne.

    // Vytvorte flash správu pre úspešnú objednávku
    $request->session()->flash('order_success', 'Your order has been successfully placed!');

    // Log for debugging
    Log::info('Order success message flashed: ' . $request->session()->get('order_success'));

    // Presmerovanie na stránku prehliadania produktov
    return redirect()->route('checkout');
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }






    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
