<?php

namespace Market\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
         return view('dashboard');
   }

   public function modelweb()
   {
      return view('modelweb');
   }

}
