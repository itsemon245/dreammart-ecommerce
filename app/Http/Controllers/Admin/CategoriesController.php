<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
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
        $count = Category::where('slug', 'LIKE', "%$slug%")->count();
        if ($count > 0) {
            $slug = $slug . '-' . $count++;
        }
        return $slug;
    }

    public function viewCategories()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.views.viewCategories', compact('categories'));
    }
    public function viewBrands()
    {
        $brands = Brand::all();
        return view('backend.views.viewBrands', compact('brands'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|max:20'
        ]);
        $slug = $this->uniSlug($request->category);
        $category = Category::where('name', $request->category)->first();
        if ($category === null) {
            $category = Category::create([
                'name' => $request->category,
                'slug' => $slug
            ]);
            return back()->with('success', 'New Category Added');
        } else {
            return back()->with('error', 'Category already exists');
        }
    }
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|max:20'
        ]);
        $category = Category::find($id);
        $category->name = $request->category;
        $category->slug = $this->uniSlug($request->category);
        $category->update();
        if (!$category->wasChanged('name')) {
            return back()->with('error', 'Category already exists');
        } else {
            return back()->with('success', 'Category Updated');
        }
    }

    public function destroyCategory($id)
    {
        $category = Category::find($id)->delete();

        return back()->with('success', 'Category Deleted');
    }


    public function storeBrand(Request $request)
    {
        $ext = $request->logo->extension();
        $fileName = "$request->brand.$ext";
        $path = $request->logo->storeAs('uploads/brands', $fileName, 'public');
        // dd($path);

        $request->validate([
            'brand' => 'required|max:20',
            'logo'  => 'bail|required|image|max:1024'
        ]);
        $brand = Brand::create([
            'name' => $request->brand,
            'logo' => $path
        ]);
        return back()->with('success', 'New Brand Added');
    }


    public function updateBrand(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|max:20',
            'logo'  => 'bail|image|max:1024'
        ]);

        $brand = Brand::find($id);
        $brand->name = $request->brand;

        if ($request->hasFile('logo')) {
            $ext = $request->logo->extension();
            $fileName = "$request->brand.$ext";
            $deleted = File::delete(asset('storage/' . $request->old_logo));
            $path = $request->logo->storeAs('uploads/brands', $fileName, 'public');
            $brand->logo = $path;
        }
        $brand->update();

        return back()->with('success', 'Brand Updated');
    }

    public function destroyBrand($id)
    {
        $brand = Brand::find($id);
        $file_path = storage_path('app/public/' . $brand->logo);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $brand->delete();
        return back()->with('success', 'Brand Deleted');
    }
}
