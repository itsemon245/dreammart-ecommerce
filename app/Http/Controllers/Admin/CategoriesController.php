<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Faker\Guesser\Name;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        return view('backend.views.viewCategories', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|max:20'
        ]);
        $slug = $this->uniSlug($request->category);
        $category = new Category();
        $category->name = $request->category;
        $category->slug = $slug;
        $category->save();
        return back()->with('success', 'Category Added');
    }

    public function storeBrand()
    {
        return view('backend.views.viewCategories');
    }
}
