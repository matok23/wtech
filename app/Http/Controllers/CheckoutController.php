<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CheckoutController extends Controller
{
   
    public function index()
    {
        $userId = Auth::id();
        $sessionId = session()->getId();

        if ($userId) {
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

  
        if(!count($cartItems)){
            return back()->with('message','No items in cart');
        }

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

    $request->session()->flash('order_success', 'Your order has been successfully placed!');

    return redirect()->route('checkout');
}


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

  
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
