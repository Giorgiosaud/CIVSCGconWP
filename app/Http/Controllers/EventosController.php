<?php namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests;
use Carbon\Carbon;

class EventosController extends Controller {

    public function todos()
    {
        $eventos = Evento::leftJoin('postmeta', function ($join)
        {
            $join->on('posts.id', '=', 'postmeta.post_id');
        })
            ->where('meta_key', 'fecha_evento')
            ->where('meta_value', '>=', Carbon::now())
            ->orderBy('meta_value', 'ASC')
            ->paginate(5);

        //dd($eventos);
        return view('Eventos.all', compact('eventos'));

    }

    public function individual($slug)
    {
        $evento = Evento::wherePostName($slug)->first();
        if ($evento->postType == 'curso')
        {
            $curso = $evento;

            return view('Cursos.show', compact('curso'));
        }
        $noticia = $evento;

        return view('Noticias.show', compact('noticia'));

    }

}
