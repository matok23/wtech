<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Models\SizeStock;


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
    
        // Načítaj zásobu pre daný produkt a veľkosť
        $stockItem = SizeStock::where('product_id', $validated['product_id'])
            ->where('size', $validated['size'])
            ->first();
    
        if (!$stockItem) {
            return redirect()->back()->with('error', 'Niečo sa pokazilo!');
        }
    
        // Získaj existujúci CartItem alebo vytvor nový
        $cartItem = CartItem::firstOrNew([
            'product_id' => $validated['product_id'],
            'user_id' => $userId,
            'session_id' => $userId ? null : $sessionId,
            'size' => $validated['size'],
        ]);
    
        $newTotal = $cartItem->amount + $validated['amount'];
    
        if ($newTotal > $stockItem->stock_left) {
            return back()->with('error', 'Na sklade je len ' . $stockItem->stock_left . ' ks v tejto veľkosti.');
        }
    
        $cartItem->amount = $newTotal;
        $cartItem->save();
    
        return back()->with('success', 'Produkt bol pridaný do košíka.');
    }
    
    public function index()
    {
        $userId = Auth::id();
        $sessionId = session()->getId();

        // Načítaj všetky položky v košíku so všetkými veľkosťami
        $cartItems = CartItem::with('product.stock')  
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

    public function updateQuantity(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'size' => 'required|integer',
            'amount' => 'required|integer|min:1'
        ]);
    
        $userId = Auth::id();
        $sessionId = session()->getId();
    
        $query = CartItem::where('product_id', $validated['product_id'])
                         ->where('size', $validated['size']);
    
        if ($userId) {
            $query->where('user_id', $userId);
        } else {
            $query->where('session_id', $sessionId);
        }
    
        $cartItem = $query->first();
    
        if (!$cartItem) {
            return back()->with('error', 'Produkt sa v košíku nenašiel.');
        }
    
        // Skontroluj, či máme toľko skladom
        $stockItem = SizeStock::where('product_id', $validated['product_id'])
                              ->where('size', $validated['size'])
                              ->first();
    
        if ($validated['amount'] > $stockItem->stock_left) {
            return back()->with('error', 'Na sklade je len ' . $stockItem->stock_left . ' ks.');
        }
    
        $cartItem->amount = $validated['amount'];
        $cartItem->save();
    
        return back()->with('success', 'Množstvo bolo aktualizované.');
    }
    
    

    
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

