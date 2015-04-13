<?php namespace App\Http\Controllers;

use App\Curso;
use App\Http\Requests;
use Carbon\Carbon;
use Corcel\Term;
use Corcel\TermRelationship;
use Corcel\TermTaxonomy;

class CursosController extends Controller {

    public function index()
    {
        $cursos = Curso::leftJoin('postmeta', function ($join)
        {
            $join->on('posts.id', '=', 'postmeta.post_id');
        })
            ->where('meta_key', 'fecha_del_curso')
            ->where('meta_value', '>=', Carbon::now())
            ->orderBy('meta_value', 'ASC')
            ->paginate(5);
        $taxs = TermTaxonomy::whereTaxonomy('tipo_de_curso')->where('count', '>', '0')->get();

        //dd($taxs);
        return view('Cursos.all', compact('cursos', 'taxs'));
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
        $cursoFecha=Carbon::createFromFormat('Y-m-d',$curso->meta->fecha_del_curso);
        return view('Cursos.show',compact('curso','cursoFecha'));
    }

}
