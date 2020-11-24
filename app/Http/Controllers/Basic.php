<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basic extends Controller
{
  public function index1()
  {
      return [
                "token"=>"sefsd",
                "id"=> 2,
                "name"=> "Kavi",
                "mobile"=> "9303232111",
                "email"=> "kavi@gmail.com"
        ];
    
  
}
}