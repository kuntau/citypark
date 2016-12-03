<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
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

    public function store() {
      $request = Request::all();

      $product = Product::findOrFail($request['product_id']);
      $user = Auth::user();

      // prepare the data for purchase collection
      $from_at = Carbon::createFromFormat('d/m/y', $request['start']);
      $until_at = Carbon::createFromFormat('d/m/y', $request['end']);
      $diff = $until_at->diffInDays($from_at);
      $quantity_lot = $request['purchase-quantity-lot'];
      $total_price = ($diff + 1) * $product->price * $quantity_lot;

      // create new purchase collection
      $purchase = new Purchase;
      $purchase->product_id = $product->id;
      $purchase->price = $total_price;

      // purchase application details
      $purchase->purpose = $request['purchase-purpose'];
      $purchase->location = $request['purchase-location'];
      $purchase->quantity_lot = $request['purchase-quantity-lot'];
      $purchase->from_at = $from_at->toDateString();
      $purchase->until_at = $until_at->toDateString();
      $purchase->duration = ($diff + 1);

      // save the purchase
      $user->purchases()->save($purchase);
      return redirect()->action('PurchasesController@history', [$user]);
    }

    public function history(User $user) {
      $purchases = $user->purchases;

      return view('applications', compact('purchases'));
      return $purchases;
    }
}
