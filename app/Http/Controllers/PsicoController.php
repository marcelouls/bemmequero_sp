<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsicoModel;
use App\Models\Paciente;

class PsicoController extends Controller
{
    private $objPsicoModel;
    private $objPaciente;

    public function __construct()
    {
        $this->ObjPsicoModel=new PsicoModel();
        $this->objPaciente=new Paciente();
        $this->middleware('auth');
    }

    public function index(){
        return view('\psicologia\create');
    }

    public function edit(Request $request,$id)
    {

        $paciente=$this->objPaciente->find($id);
        return view('\psicologia\create', compact('paciente'));

    }

    public  function create(Request $request){




        // return view('psicologia');

    }

    public function show($id)
    {


        $paciente=$this->objPaciente->find($id);
        return view('\psicologia\show', compact('paciente'));


    }

    public function store(Request $request)
    {
        $reg=$this->objPsicoModel->create([

            'motivo_consulta'=>$request->motivo_consulta,
            'inicio_queixa'=>$request->inicio_queixa,
            'mudanca_queixa'=>$request->mudanca_queixa,
            'sintomas_queixa'=>$request->sintomas_queixa,
            'sintomas_queixa'=>$request->sintomas_queixa,
            'tipo_sono'=>$request->tipo_sono,
            'horas_sono'=>$request->horas_sono,
            'dif_inicio'=>$request->dif_inicio,
            'acorda_noite'=>$request->acorda_noite,
            'acorda_manha'=>$request->acorda_manha,
            'exceso_sono'=>$request->exceso_sono,
            'pesadelos'=>$request->pesadelos,
            'camina'=>$request->camina,
            'tipo_alimentacao'=>$request->tipo_alimentacao,
            'outro_tipo_alimentacao'=>$request->outro_tipo_alimentacao,
            'descontrole_alimentar'=>$request->descontrole_alimentar,
            'ingesta_variavel'=>$request->ingesta_variavel,
            'medicamentos'=>$request->medicamentos,
            'vomitos'=>$request->vomitos,
            'atividade_fisica'=>$request->atividade_fisica,
            'frequencia_atividade'=>$request->frequencia_atividade,
            'esforco'=>$request->esforco,
            'objetivo_fisico'=>$request->objetivo_fisico,
            'outro_objetivo'=>$request->outro_objetivo,
            'ant_med_psiq'=>$request->ant_med_psiq,
            'antecedentes_familiares'=>$request->antecedentes_familiares,
            'relacionamento_social'=>$request->relacionamento_social,
            'iniciar_desistir'=>$request->iniciar_desistir,
            'concientizacao'=>$request->concientizacao,
            'percepcao_corporal'=>$request->percepcao_corporal,
            'historico_dietas'=>$request->historico_dietas,
            'hipotese_diagnostica'=>$request->hipotese_diagnostica,
            'objetivo_terapeutico'=>$request->objetivo_terapeutico,
            'plano_intervencao'=>$request->plano_intervencao,
            'observacoes'=>$request->observacoes,
            'id_paciente'=>$request->id_paciente,
        ]);

        if($reg){
            return redirect('paciente');
        }
    }
}
