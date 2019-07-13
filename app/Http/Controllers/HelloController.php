<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController
{
   public function hello()
   {
 $name= "Thang";
 
  return view('hello',[
    'ten'=>$name,
    
  ]);

  }
}
