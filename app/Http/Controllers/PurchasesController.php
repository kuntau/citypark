<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Purchase;
use App\Product;

class PurchasesController extends Controller
{
    public function index(User $user)
    {
      // $purchases = Purchase::all();
      $purchases = $user->purchases;
      return $purchases;
    }

    public function purchase(Product $product)
    {
      // $purchases = Purchase::all();
      return view('purchase')->with('product', $product);
      $purchases = $user->purchases;
      return $purchases;
    }

    public function history(User $user)
    {
      // $purchases = Purchase::all();
      $purchases = $user->purchases;
      return $purchases;
    }
}
