<?php namespace App;

use App\Pago;
use App\CuotasAgremiado;
use App\HistorialSolvencia;
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
	protected $table = 'usuarios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	// protected $fillable = ['user_login', 'user_email', 'user_pass'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	protected $fillable=['name','email','password'];

	// protected $dates=['updated_at'];

	
	public function datosPersonales() {

		return $this->hasOne('App\Persona','usuario_id');
	}

	public function agremiado(){

		return $this->hasOne('App\Agremiado','usuario_id');

	}
	public function pago(){
		return $this->hasMany(Pago::class,'usuario_id');
	}
	public function GuardarPago($cuota){
		if($cuota instanceof CuotasAgremiado){
			$pago=new Pago;
			$pago->descripcion='Migracion';
			$pago->monto_pago=$cuota->Cag_Monto;
			$pago->nro_cuotas=$cuota->Cag_Cuotas;
			$pago->created_at=$cuota->Cag_Emision;
			return $this->pago()->save($pago);
		}
	}

	public function getNumeroDeCuotasPagadasAttribute(){

		return $this->pago->sum('nro_cuotas');	

	}

	public function getUltimoMesPagadoAttribute(){
		return $this->agremiado->fecha_inscripcion->addMonths($this->NumeroDeCuotasPagadas)->startOfMonth();

	}

	public function getCuotasAPagarDelHistoricoAttribute(){
		$cuotasAPagarHistoricoFuturo=HistorialSolvencia::where('fecha_desde','>=',$this->ultimoMesPagado)->get();
		$cuotasAPagarUltimoHistorico=HistorialSolvencia::where('fecha_desde','<=',$this->ultimoMesPagado)->get()->last();
		$cuotasAPagarHistoricoFuturo->prepend($cuotasAPagarUltimoHistorico);
		return $cuotasAPagarHistoricoFuturo;
	}

	public function getDeudaUsuarioAttribute(){
		$ultimoMesPagado=$this->ultimoMesPagado;
		$CuotasAPagarDelHistorico=$this->cuotasAPagarDelHistorico;
		$longitudArrayCuotasAPagar=$CuotasAPagarDelHistorico->count();
		$hoy=\Carbon\Carbon::now();
		$montoAdeudado=0;
		if($hoy<=$ultimoMesPagado){
			return null;
		}
		if($longitudArrayCuotasAPagar==1){
			$CuotasDeuda=$ultimoMesPagado->diff($hoy)->m;
			$montoAdeudado=$CuotasDeuda*$CuotasAPagarDelHistorico[0]->monto;
			
			return $montoAdeudado;
		}
		foreach ($CuotasAPagarDelHistorico as $index => $cuota) {
			
			if($index==0){
//				$mesesAPAgar=$ultimoMesPagado->diff($CuotasAPagarDelHistorico[1]->fecha_desde->startOfMonth())->m+1;
//				$aPagarPorPeriodo=$mesesAPAgar*$cuota->monto;
//				$montoAdeudado+=$aPagarPorPeriodo;
				continue;
			}
			if($index==$longitudArrayCuotasAPagar-1){
//				$CuotasDeuda=$ultimoMesPagado->diff($hoy->startOfMonth())->m;
//				$aPagarPorPeriodo=$CuotasDeuda*$cuota->monto;
//				$montoAdeudado+=$aPagarPorPeriodo;
				continue;	
			}
//
			$mesesAPAgar=$cuota->fecha_desde->startOfMonth()->diff($CuotasAPagarDelHistorico[$index+1]->fecha_desde->startOfMonth())->m;
			$aPagarPorPeriodo=$cuota->monto*$mesesAPAgar;
			$montoAdeudado+=$aPagarPorPeriodo;
		}
		return $montoAdeudado;
	}



}
