<?php

namespace App\Http\Controllers\FrontSite;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    /*
     * Page with products in selected category todo view
     */
    public function categoryPage($slug){

        $category = Category::where('slug', $slug)->first();

        dd($category);
    }
}
