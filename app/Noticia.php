<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Corcel\Post;
use Illuminate\Contracts\Pagination\Presenter;

class Noticia extends Post{
    //use Presenter;
    protected $postType = 'noticias';
}