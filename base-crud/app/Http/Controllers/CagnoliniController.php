<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolino;

class CagnoliniController extends Controller
{
    public function index(){

        $cagnolini = Cagnolini::all();
        return view("home", compact("cagnolini"));
    }
}
