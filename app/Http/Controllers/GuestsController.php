<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class GuestsController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

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

  public function create()
  {
    return view('guests.create');
  }

  public function store()
  {
    // Store guests
    Guest::create(Request::all());

    // send them to "Thanks" site with url to edit their company and text: "you can edit until date X"
    return redirect('guests');
  }
}
