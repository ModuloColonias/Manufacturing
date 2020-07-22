<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medidaController extends Controller
{
    public function index(){
    	return view("medida.index");
    }
}
