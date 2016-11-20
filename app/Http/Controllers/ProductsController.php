<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
      $products = DB::table('products')->get();
      return $products;
    }
}
