<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    function updateQty(Request $request, Cart $cart) {
        try {
            $request->validate([
                'qty' => 'required|integer'
            ]);
        } catch (ValidationException $exception) {
            return response()->json([
                'errors' => $exception->errors()
            ], 433);
        }

        $cart->qty = $request->qty;
        $updated = $cart->update();
        if ($updated) {
            return response()->json([
                'success' => true,
                'data' => $cart,
                'message' => 'Action performed successfully'
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Something went wrong'
            ]);
        }
    }
}
