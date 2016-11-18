<?php

namespace App\Http\Controllers;

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

  public function profile()
  {
    return view('users.profile');
  }

  public function create()
  {
    return view('users.create');
  }
}
