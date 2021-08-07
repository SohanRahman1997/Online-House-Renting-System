<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

    public function index(){
        return view('pages.index');
    }

    // public function home1(){
    //     return view('pages.home1');
    // }

    // public function about(){
    //     return view('pages.about');
    // }
}
