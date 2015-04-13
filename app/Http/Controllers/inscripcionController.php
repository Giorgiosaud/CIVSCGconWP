<?php namespace App\Http\Controllers;

use App\Http\Requests;

class inscripcionController extends Controller {


    public function index()
    {
        return view('Paginas.inscripciones');
    }

}
