<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Add a product to the cart session and redirect to cart.
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id'   => 'required|integer',
            'product_name' => 'required|string|max:255',
            'product_img'  => 'required|string|max:255',
            'product_tag'  => 'nullable|string|max:100',
            'product_price'=> 'required|integer|min:0',
            'qty'          => 'required|integer|min:1|max:99',
        ]);

        $cart = session()->get('cart', []);

        $id = (int) $request->product_id;

        if (isset($cart[$id])) {
            // Already in cart — increase qty
            $cart[$id]['qty'] += (int) $request->qty;
        } else {
            $cart[$id] = [
                'id'    => $id,
                'name'  => $request->product_name,
                'tag'   => $request->product_tag ?? '',
                'price' => (int) $request->product_price,
                'img'   => $request->product_img,
                'qty'   => (int) $request->qty,
            ];
        }

        session()->put('cart', $cart);

        // AJAX request → return JSON
        if ($request->expectsJson()) {
            return response()->json([
                'success'    => true,
                'cart_count' => array_sum(array_column($cart, 'qty')),
            ]);
        }

        return redirect()->route('cart');
    }

    /**
     * Add to cart then immediately redirect to checkout (Buy It Now).
     */
    public function buyNow(Request $request)
    {
        $this->add($request);
        return redirect()->route('checkout');
    }

    /**
     * Remove a single item from the cart.
     */
    public function remove(Request $request, int $id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    /**
     * Update qty of a cart item (called from cart page form).
     */
    public function update(Request $request, int $id)
    {
        $request->validate(['qty' => 'required|integer|min:1|max:99']);

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['qty'] = (int) $request->qty;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }

    /**
     * Clear the entire cart.
     */
    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart');
    }
}
