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
    $guest = Request::all();


    // Store guests
    // Guest::create($guest);


    // Send them to "Thanks" site with link to add a new guests, mailing henrik
    return view('thanks')->with('guest', $guest);
  }

}
