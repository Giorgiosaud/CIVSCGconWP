<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Carbon\Carbon;
use jorgelsaud\Corcel\Post;

/**
 * App\Evento
 *
 * @property integer $ID 
 * @property integer $post_author 
 * @property \Carbon\Carbon $post_date 
 * @property string $post_date_gmt 
 * @property string $post_content 
 * @property string $post_title 
 * @property string $post_excerpt 
 * @property string $post_status 
 * @property string $comment_status 
 * @property string $ping_status 
 * @property string $post_password 
 * @property string $post_name 
 * @property string $to_ping 
 * @property string $pinged 
 * @property \Carbon\Carbon $post_modified 
 * @property string $post_modified_gmt 
 * @property string $post_content_filtered 
 * @property integer $post_parent 
 * @property string $guid 
 * @property integer $menu_order 
 * @property string $post_type 
 * @property string $post_mime_type 
 * @property integer $comment_count 
 * @property-read mixed $fecha_de_evento 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\PostMeta[] $meta 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\TermTaxonomy[] $taxonomies 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Comment[] $comments 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $attachment 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $revision 
 * @property-read mixed $the_content 
 * @method static \Illuminate\Database\Query\Builder|\App\Evento whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostDateGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento whereCommentStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePingStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostPassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento whereToPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePinged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostModified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostModifiedGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostContentFiltered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostParent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento whereMenuOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento wherePostMimeType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Evento whereCommentCount($value)
 * @method static \jorgelsaud\Corcel\Post taxonomy($taxonomy)
 */
class Evento extends Post {

    //use Presenter;
    protected $orderedByPostDate = false;

    public function getFechaDeEventoAttribute()
    {
        $r = Carbon::createFromFormat('Y-m-d', $this->meta->fecha_evento);

        return $r;
    }
}