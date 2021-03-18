<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    public function index(){
        $Beer=Beer::all();

        return view('home', ['Beer'=>$Beer]);//colleghiamo il file home estiamo stmpando la variabile sopra
    }
}
