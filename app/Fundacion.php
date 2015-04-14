<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Illuminate\Contracts\Pagination\Presenter;
use jorgelsaud\Corcel\Post;

class Fundacion extends Post{
    //use Presenter;
    protected $postType = 'fundaciones';
    protected $orderedbypost='no';

}