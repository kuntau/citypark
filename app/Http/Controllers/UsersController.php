<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('users.index');
  }

  public function profile(User $user)
  {
    // return $user;
    return view('users.profile', compact('user'));
    // return view('users.profile')->with('user', $theUser->name);
  }

  public function create()
  {
    return view('users.create');
  }
}
