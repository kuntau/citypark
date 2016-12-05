<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Auth;
use App\User;
use App\Purchase;
use App\Product;
use Carbon\Carbon;

class PurchasesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(User $user) {
      // $purchases = Purchase::all();
      $purchases = $user->purchases;
      return $purchases;
    }

    public function purchase(Product $product) {
      // $purchases = Purchase::all();
      return view('purchase')->with('product', $product);
      $purchases = $user->purchases;
      return $purchases;
    }

    public function store(Request $request) {
      // return $request->all();
      // save the purchase
      $request->user()->purchases()->save(new Purchase($request->all()));
      return redirect()->action('PurchasesController@history');
    }

    public function history(User $user) {
      $purchases = \Auth::user()->purchases;

      // return compact('purchases');
      return view('history', compact('purchases'));
    }
}
