<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Carbon\Carbon;

use Illuminate\Contracts\Pagination\Presenter;
use jorgelsaud\Corcel\Post;

/**
 * App\Curso
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
 * @property-read mixed $fecha_de_curso 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\PostMeta[] $meta 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\TermTaxonomy[] $taxonomies 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Comment[] $comments 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $attachment 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $revision 
 * @property-read mixed $the_content 
 * @method static \Illuminate\Database\Query\Builder|\App\Curso whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostDateGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso whereCommentStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePingStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostPassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso whereToPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePinged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostModified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostModifiedGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostContentFiltered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostParent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso whereMenuOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso wherePostMimeType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Curso whereCommentCount($value)
 * @method static \jorgelsaud\Corcel\Post taxonomy($taxonomy)
 */
class Curso extends Post{

	protected $orderedByPostDate=false;
	protected $postType = 'curso';
	public function getFechaDeCursoAttribute(){
		$r=Carbon::createFromFormat('Ymd',$this->meta->fecha_evento);
		return $r;
	}
	public function getProfesorAttribute(){
		return $this->meta->profesor;
	}
	public function getDuracionAttribute(){
                return $this->meta->duracion;
        }
	public function getPrecioAttribute(){
                return $this->meta->precio;
        }

}
