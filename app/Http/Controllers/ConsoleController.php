<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ConsoleController extends Controller {

  public function index() {
    return view('pages/console');
  }

}
