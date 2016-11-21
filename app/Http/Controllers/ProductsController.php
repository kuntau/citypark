<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Product $id)
    {
      if ($id->exists) {
        return $id;
        $products = Product::where('id', $id)->get();
      }
      return Product::all();
    }
}
