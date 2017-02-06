<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Requests;

// use App\User;

class PublicController extends Controller
{
  public function index()
  {
    $nombre = "Andreu";

    return view('welcome')->with('nombre', $nombre);
  }
}
