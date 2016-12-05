<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  /**
   * display user data
   *
   * @return void
   */
  public function store(User $user)
  {
    return null;
  }

  public function index() {
    return view('users.index');
  }

  public function profile(User $user) {
    return view('users.profile', compact('user'));
  }

  public function edit(Request $request) {
    return $request->all();
  }

  public function update(Request $request) {
    // $user = $request->user();
    $request->user()->update($request->all());
    return view('home');
  }

  public function create() {
    return view('users.create');
  }
}
