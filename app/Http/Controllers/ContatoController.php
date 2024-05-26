<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contact(){
        var_dump($_POST);
        return view('contact', ['título'=>'Contact (contact)']);
    }

}
