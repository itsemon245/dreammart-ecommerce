<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductPageController extends Controller
{
    public function viewProduct($id)
    {
        $userId = auth()->user()->id;
        $productId = $id;
        $isFavorite = Favorite::where('user_id', $userId)->where('product_id', $productId)->count();
        $product = Product::with(['category', 'brand'])->find($id);
        return Inertia::render('Product/Product', [
            'product' => $product,
            'isFavorite' => $isFavorite
        ]);
    }

    public function addFavorite($id)
    {
        $userId = auth()->user()->id;
        $productId = $id;
        $isFavorite = Favorite::where('user_id', $userId)->where('product_id', $productId)->get();

        if ($isFavorite->count() > 0) {
            $deleted = $isFavorite->first()->delete();
            $success = "deleted";
        } else {
            $favorite = Favorite::create([
                'user_id' => $userId,
                'product_id' => $productId
            ]);
            $success = 'added';
        }
        return json_encode($success);
    }
}
