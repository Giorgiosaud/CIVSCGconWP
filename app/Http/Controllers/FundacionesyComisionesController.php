<?php namespace App\Http\Controllers;

use App\Fundacion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FundacionesyComisionesController extends Controller {

public function todas(){
    $Fundaciones=Fundacion::all();
    return view('FundacionesYComisiones.all',compact('Fundaciones'));
}
public function individual($slug){
        $fundacion=Fundacion::wherePostName($slug)->first();
        return view('FundacionesYComisiones.show',compact('fundacion'));

}
}
