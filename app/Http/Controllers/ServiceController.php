<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function service()
  {
    return view('service.service');
  }
}
