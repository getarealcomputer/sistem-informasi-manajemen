<?php

namespace App\Controllers;

class StBController extends BaseController
{
  public function index(){
    return view('stb/dashboard');
  }
}
