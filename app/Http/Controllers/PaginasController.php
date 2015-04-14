<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Noticia;
use jorgelsaud\Corcel\Page;
use Corcel\Post;
use Illuminate\Http\Request;

class PaginasController extends Controller {

	public function inicio(){
        $pagina=Page::slug('inicio')->first();
        $noticias=Noticia::published()->take(4)->get();
        return view('Paginas.inicio',compact('pagina','noticias'));
    }
    public function inscripciones(){
        $pagina=Page::slug('inscripciones')->first();
        $noticias=Noticia::published()->take(4)->get();
        return view('Paginas.inscripciones',compact('pagina','noticias'));
    }
    public function beneficios(){

    }
    public function requisitos(){

    }
    public function solvencias(){

    }
    public function prueba(){
        $pagina=Page::slug('inscripciones')->first();
        //$noticias=Noticia::published()->take(4)->get();
        return view('prueba',compact('pagina'));
    }

}
