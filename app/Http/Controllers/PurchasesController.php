<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\User;
use App\Purchase;
use App\Product;
use Carbon\Carbon;

class PurchasesController extends Controller
{
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

    public function store() {
      $request = Request::all();
      $product = Product::findOrFail($request['product_id']);
      $user = User::findOrFail($request['user_id']);
      $from_at = Carbon::createFromFormat('d/m/Y', $request['from_at']);
      $until_at = Carbon::createFromFormat('d/m/Y', $request['until_at']);
      $diff = $until_at->diffInDays($from_at);
      $total_price = ($diff + 1) * $product->price;
      $purchase = new Purchase;
      $purchase->product_id = $product->id;
      $purchase->quantity = 1;
      // $purchase->user_id = $user->id;
      $purchase->total_price = $total_price;
      $purchase->from_at = $from_at->toDateString();
      $purchase->until_at = $until_at->toDateString();
      $user->purchases()->save($purchase);
      return redirect()->action('PurchasesController@history', [$user]);
    }

    public function history(User $user) {
      // $purchases = Purchase::all();
      $purchases = $user->purchases;
      return $purchases;
    }
}
