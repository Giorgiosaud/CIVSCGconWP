<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Curso {}
}

namespace App{
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
	class Evento {}
}

namespace App{
/**
 * App\Fundacion
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\PostMeta[] $meta
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\TermTaxonomy[] $taxonomies
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $attachment
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $revision
 * @property-read mixed $the_content
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostDateGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereCommentStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePingStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostPassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereToPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePinged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostModified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostModifiedGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostContentFiltered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostParent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereMenuOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostMimeType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereCommentCount($value)
 * @method static \jorgelsaud\Corcel\Post taxonomy($taxonomy)
 */
	class Fundacion {}
}

namespace App{
/**
 * App\Noticia
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\PostMeta[] $meta
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\TermTaxonomy[] $taxonomies
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $attachment
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $revision
 * @property-read mixed $the_content
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostDateGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia whereCommentStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePingStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostPassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia whereToPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePinged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostModified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostModifiedGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostContentFiltered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostParent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia whereMenuOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia wherePostMimeType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Noticia whereCommentCount($value)
 * @method static \jorgelsaud\Corcel\Post taxonomy($taxonomy)
 */
	class Noticia {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $ID
 * @property string $user_login
 * @property string $user_pass
 * @property string $user_nicename
 * @property string $user_email
 * @property string $user_url
 * @property string $user_registered
 * @property string $user_activation_key
 * @property integer $user_status
 * @property string $display_name
 * @method static \Illuminate\Database\Query\Builder|\App\User whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserPass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserNicename($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserRegistered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserActivationKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDisplayName($value)
 */
	class User {}
}

