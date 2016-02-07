<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestsController extends Controller
{
  public function index()
  {
    $guests = Guest::all();

    return view('guests.index', compact('guests'));
  }


  public function show($id)
  {
    $guest = Guest::findOrFail($id);

    return view('guests.show', compact('guest'));
  }
}
