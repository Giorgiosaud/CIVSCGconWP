<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Carbon\Carbon;
use jorgelsaud\Corcel\Post;

class Evento extends Post {

    //use Presenter;
    protected $orderedByPostDate = false;

    public function getFechaDeEventoAttribute()
    {
        $r = Carbon::createFromFormat('Y-m-d', $this->meta->fecha_evento);

        return $r;
    }
}