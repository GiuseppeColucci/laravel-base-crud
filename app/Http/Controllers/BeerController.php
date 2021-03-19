<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    public function index(){
        $beers=Beer::all();// è un collegamento al Beer.phpin APP

        return view('home', compact('beers'));//colleghiamo il file home estiamo stmpando la variabile sopra(praticamente cerca la variabile sopra)
        //['Beer'=>$Beer]metodo precedente

        /*
        $Beer=Beer::all();
        return view('home', compact('Beer')); copialo e incollalo nella index della crud
        */
    }
}
