<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   function __construct()
   {

   }

   public function index()
   {
       //return "Welcome to Bebrands Website";
       return view('home');
   }
}