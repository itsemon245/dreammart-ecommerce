<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Generate an unique slug 
     * 
     * 
     * @param string $title
     * @return string $slug
     */
    public function uniSlug($title)
    {
        $slug = str()->slug($title);
        $count = Product::where('slug', 'LIKE', "%$slug%")->count();
        if ($count > 0) {
            $slug = $slug . '-' . $count++;
        }
        return $slug;
    }

    public function addProduct()
    {
        $categories = Category::get();
        $brands = Brand::get();
        // dd($categories);
        return view('backend.views.addProduct', compact('brands', 'categories'));
    }

    public function storeProduct(Request $request)
    {
        // dd($request);
        $request->validate([
            'product_name' => 'required|min:5',
            'product_price' => 'required',
            'product_discount' => 'required',
            'product_category' => 'required',
            'product_brand' => 'required',
            'product_detail' => 'required',
            'product_in_stock' => 'required',
            'product_image' => 'bail|required|image|max:1024',
        ]);
        $slug = $this->uniSlug($request->product_name);
        $ext = $request->product_image->extension();
        $fileName = "$slug.$ext";
        $path = $request->product_image->storeAs('uploads/products', $fileName, 'public');
        $product = Product::create([
            'name' => $request->product_name,
            'slug' => $slug,
            'price' => $request->product_price,
            'discount' => $request->product_discount,
            'in_stock' => $request->product_in_stock,
            'category_id' => $request->product_category,
            'brand_id' => $request->product_brand,
            'detail' => $request->product_detail,
            'image' => $path,
        ]);
        return back()->with('success', 'New Product Added');
    }

    public function viewProduct()
    {
        $products = Product::with(['category', 'brand'])->latest()->get();
        return view('backend.views.viewProduct', compact('products'));
    }
}
