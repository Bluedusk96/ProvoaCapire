<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;

class PagesController extends Controller {
    /*
      public function __construct() {

      $this->middleware('auth',['except' => 'about']);
      }
     */

    public function home() {
        return view('index');
    }

  
}
