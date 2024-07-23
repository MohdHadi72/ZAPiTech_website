<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ITProjectIndexController extends Controller
{
  public   function ITindex()
   {
       return view('ITproject.index');
   }
  public   function Laptop()
   {
       return view('ITproject.mobilesize');
   }
  public   function contact()
   {
       return view('ITProject.contact');
   }
  public   function ScreenSize()
   {
       return view('ITProject.ScreenSize');
   }
  
   public function aboutpage()
   {
       return view('ITProject.about');
   }
   public function companyprofile()
   {
       return view('ITProject.companyprofile');
   }

}
