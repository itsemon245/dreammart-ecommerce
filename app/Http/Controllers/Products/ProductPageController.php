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
    public function generateLikeState($product_id)
    {
        $prod = Product::find($product_id);

        if ($prod->isFavorited()) {
            $isFavorite = true;
        } else {
            $isFavorite = false;
        }
    }
    public function viewProduct($id)
    {
        $prod = Product::find($id);

        if ($prod->isFavorited()) {
            $isFavorite = true;
        } else {
            $isFavorite = false;
        }
        $product = Product::with(['category', 'brand'])->find($id);
        return Inertia::render('Product/Product', [
            'product' => $product,
            'isFavorite' => $isFavorite
        ]);
    }

    public function toggleFavorite($id)
    {

        $product = Product::find($id);
        if ($product->isFavorited()) {
            $delete = Favorite::where('user_id', auth()->user()->id)->where('product_id', $id)->delete();
            return json_encode('deleted');
        } else {
            $favorite = Favorite::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ]);
            $product->favorite_id = $favorite->id;
            $product->save();
            return json_encode('added');
        }
    }

    public function viewFavorites()
    {
        $user = User::find(auth()->id());
        $favorites = $user->products()->with(['category', 'brand'])->get();

        return Inertia::render('Product/Favorites', [
            'favorites' => $favorites
        ]);
    }
}
