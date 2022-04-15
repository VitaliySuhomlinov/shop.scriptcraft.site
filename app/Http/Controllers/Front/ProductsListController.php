<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsListController extends Controller
{
    public function show_products_list($category = null, $sub_category = null)
    {
        return view('front.products-list');
    }
}
