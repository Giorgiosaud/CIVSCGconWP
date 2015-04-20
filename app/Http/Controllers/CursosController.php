<?php namespace App\Http\Controllers;

use App\Curso;
use App\Http\Requests;
use Carbon\Carbon;
use jorgelsaud\Corcel\Term;
use jorgelsaud\Corcel\TermRelationship;
use jorgelsaud\Corcel\TermTaxonomy;

class CursosController extends Controller {

    public function index()
    {
        $cursos = Curso::published()->leftJoin('postmeta', function ($join)
        {
            $join->on('posts.id', '=', 'postmeta.post_id');
        })
            ->where('meta_key', 'fecha_evento')
            ->where('meta_value', '>=', Carbon::now())
            ->orderBy('meta_value', 'ASC')
            ->paginate(5);
        $taxs = TermTaxonomy::whereTaxonomy('tipo_de_curso')->where('count', '>', '0')->get();

        //dd($taxs);
        if($cursos->count()>0){
        return view('Cursos.all', compact('cursos', 'taxs'));
        }
        else{
            return view('Cursos.noHay');

        }
    }

    public function tipos($tipos)
    {
        $taxonomiId = Term::whereSlug($tipos)->first();
        $cursosRelated = TermRelationship::whereTermTaxonomyId($taxonomiId->term_id)->get();
        $taxs = TermTaxonomy::whereTaxonomy('tipo_de_curso')->where('count', '>', '0')->get();
        $cursosId = [];
        foreach ($cursosRelated as $cursoRelated)
        {
            array_push($cursosId, $cursoRelated->object_id);
        }
        //dd($cursosId);


        $cursos = Curso::whereIn('ID', $cursosId)->paginate(5);

        return view('Cursos.all', compact('cursos', 'taxs'));

    }
    public function detalles($id){
        $curso=Curso::wherePostName($id)->first();
        //$cursoFecha=Carbon::createFromFormat('Y-m-d',$curso->meta->fecha_del_curso);
        return view('Cursos.show',compact('curso'));
    }

}
