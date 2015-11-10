<?php namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactanosRequest;
use App\Noticia;
use Illuminate\Support\Facades\Mail;
use jorgelsaud\Corcel\Page;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class PaginasController extends Controller {

    public function inicio()
    {
        // return 'hola';
        $pagina = Page::slug('inicio')->first();
        $noticias = Noticia::published()->orderBy('post_date', 'desc')->take(4)->get();
        return view('Paginas.inicio', compact('pagina', 'noticias'));
    }

    public function contacto()
    {
        return view('Paginas.contacto');
    }

    public function enviarContacto(ContactanosRequest $request)
    {
        Flash::success('Mensaje Enviado Correctamente');
        Mail::send('Paginas.extras.contactanos', $request->all(), function ($message)
        {
            $message->from('contacto@civscg.com.ve', 'Contacto Colegio de Ingenieros');
            $email = get_theme_mod('email_contacto', 'jorgelsaud@gmail.com');
            $message->to($email, 'Contacto')->subject('Contacto A Travez de La Página ');
        });

        return view('Paginas.contacto');
    }

    public function inscripciones()
    {
        $pagina = Page::slug('inscripciones')->first();
        $noticias = Noticia::published()->take(4)->get();

        return view('Paginas.inscripciones', compact('pagina', 'noticias'));
    }

    public
    function paginas($slug)
    {
        $pagina = Page::slug($slug)->first();

        return view('Paginas.show', compact('pagina'));
    }

    public
    function requisitos()
    {
        $pagina = Page::slug('requisitos')->first();

        return view('Paginas.show', compact('pagina'));
    }

    public
    function solvencias()
    {
        $pagina = Page::slug('solvencias')->first();

        return view('Paginas.show', compact('pagina'));

    }

    public
    function quienesSomos()
    {
        $pagina = Page::slug('quienes-somos')->first();

        return view('Paginas.show', compact('pagina'));
    }

    public
    function prueba()
    {
        $pagina = Page::slug('inscripciones')->first();

        //$noticias=Noticia::published()->take(4)->get();
        return view('prueba', compact('pagina'));
    }


}
