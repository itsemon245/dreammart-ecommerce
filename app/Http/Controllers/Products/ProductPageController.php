<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductPageController extends Controller
{
    public function viewProduct($id)
    {
        $product = Product::find($id);
        return Inertia::render('Product/Product', [
            'product' => $product
        ]);
    }
}
