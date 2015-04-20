<?php namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Noticia;
use jorgelsaud\Corcel\Page;
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
    public function paginas($slug){
        $pagina=Page::slug($slug)->first();
        return view('Paginas.show',compact('pagina'));
    }
    public function requisitos(){
        $pagina=Page::slug('requisitos')->first();
        return view('Paginas.show',compact('pagina'));
    }
    public function solvencias(){
        $pagina=Page::slug('solvencias')->first();
        return view('Paginas.show',compact('pagina'));

    }
    public function quienesSomos(){
        $pagina=Page::slug('quienes-somos')->first();
        return view('Paginas.show',compact('pagina'));
    }
    public function prueba(){
        $pagina=Page::slug('inscripciones')->first();
        //$noticias=Noticia::published()->take(4)->get();
        return view('prueba',compact('pagina'));
    }


}
