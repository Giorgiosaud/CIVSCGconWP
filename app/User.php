<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

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
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
