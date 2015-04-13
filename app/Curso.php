<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Carbon\Carbon;
use Corcel\Post;
use Illuminate\Contracts\Pagination\Presenter;
class Curso extends Post{
    //use Presenter;
    protected $orderedbypost='no';
    protected $postType = 'curso';
    public function getFechaDeCursoAttribute(){
        $r=Carbon::createFromFormat('Y-m-d',$this->meta->fecha_evento);
        return $r;
    }
}