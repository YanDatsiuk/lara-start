<?php

namespace App\Http\Controllers\FrontSite;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /*
    * Page with product todo view
    */
    public function productPage($slug){

        $product = Product::where('slug', $slug)->first();

        dd($product);
    }
}
