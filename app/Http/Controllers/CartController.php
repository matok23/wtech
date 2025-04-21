<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|integer|min:1',
            'size' => 'required|integer'
        ]);

        $userId = Auth::id();
        $sessionId = session()->getId();

        // Načítaj produkt so všetkými jeho veľkosťami
        $product = Product::with('stock')->findOrFail($validated['product_id']);
        
        $cartItem = CartItem::firstOrNew([
            'product_id' => $validated['product_id'],
            'user_id' => $userId,
            'session_id' => $userId ? null : $sessionId,
            'size' => $validated['size'],
        ]);

        $cartItem->amount += $validated['amount'];
        $cartItem->save();

        return back()->with('success', 'Product added to cart.');
    }
    
    public function index()
    {
        $userId = Auth::id();
        $sessionId = session()->getId();

        // Načítaj všetky položky v košíku so všetkými veľkosťami
        $cartItems = CartItem::with('product.stock')  // Použi 'stock', nie 'size'
            ->where(function ($query) use ($userId, $sessionId) {
                $query->when($userId, fn ($q) => $q->where('user_id', $userId))
                    ->when(!$userId, fn ($q) => $q->where('session_id', $sessionId));
            })
            ->get();

        return view('cart.index', compact('cartItems'));
    }

    public function removeFromCart($product,$size)
    {
        $query = CartItem::where('product_id', $product)->where('size', $size);

        if (Auth::check()) {
            $query->where('user_id', Auth::id());
        } else {
            $query->where('session_id', session()->getId());
        }

        $query->delete();

        return redirect()->route('cart.index');
    }



    // CartController.php
public function updateCoupon(Request $request)
{
    session()->put('coupon', $request->input('coupon'));
    return response()->json(['success' => true]);
}

public function updateDelivery(Request $request)
{
    session()->put('deliveryMethod', ['method' => $request->input('delivery')]);
    return response()->json(['success' => true]);
}

public function updatePayment(Request $request)
{
    session()->put('paymentMethod', ['type' => $request->input('payment')]);
    return response()->json(['success' => true]);
}

}

