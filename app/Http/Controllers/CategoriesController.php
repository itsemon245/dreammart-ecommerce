<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function viewCategories()
    {
        return view('backend.views.viewCategories');
    }
}
