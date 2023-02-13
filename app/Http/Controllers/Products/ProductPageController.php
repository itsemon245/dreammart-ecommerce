<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductPageController extends Controller
{
    public function viewProduct($id)
    {
        $product = Product::with(['category', 'brand'])->find($id);
        $prod = Product::find($id);

        if ($prod->isFavorited()) {
            $isFavorite = true;
        } else {
            $isFavorite = false;
        }
        return Inertia::render('Product/Product', [
            'product' => $product,
            'isFavorite' => $isFavorite
        ]);
    }

    public function addFavorite($id)
    {
        $favorite = Favorite::create([
            'user_id' => auth()->user()->id,
            'product_id' => $id,
        ]);
        $product = Product::find($id);
        $product->favorite_id = $favorite->id;
        $product->save();
        return json_encode(auth()->id());
    }

    public function viewFavorites($user_id)
    {
        $user = User::find($user_id);
        $favorites = $user->favorites;
        return Inertia::render('Product/Favorites', [
            'favorites' => $favorites
        ]);
    }
}
