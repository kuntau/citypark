<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Purchase;

class PurchasesController extends Controller
{
    public function index(User $user)
    {
      // $purchases = Purchase::all();
      $purchases = $user->purchases;
      return $purchases;
    }
}
