<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Noticia;
use jorgelsaud\Corcel\Page;
use jorgelsaud\Corcel\Post;

class NoticiasController extends Controller {

    public function index()
    {
        $noticias=Noticia::published()->paginate(5);
        //dd($noticias);
        return view('Noticias.all',compact('noticias'));

    }
    public function show($slug){
        $noticia=Noticia::wherePostName($slug)->first();
        return view('Noticias.show',compact('noticia'));
    }
}

