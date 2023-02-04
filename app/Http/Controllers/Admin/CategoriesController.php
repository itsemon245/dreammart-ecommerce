<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function viewCategories()
    {
        return view('backend.views.viewCategories');
    }

    public function storeCategory()
    {
        return view('backend.views.viewCategories');
    }

    public function storeBrand()
    {
        return view('backend.views.viewCategories');
    }
}
