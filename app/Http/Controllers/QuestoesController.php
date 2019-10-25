<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Statu;
use App\Questao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestoesController extends Controller
{

    public function TabQuestao(){
        $questao = new Questao();
        $questao = DB::table('questaos')->where('id_cliente', Auth::user()->id)->orderBy('id', 'desc')->first();
        return $questao;
    }

    public function Progresso(){

        $questaos = $this->TabQuestao();

        $soma = $media = 0;
        $soma = ($questaos->questao_1 + $questaos->questao_1_1 + $questaos->questao_1_2 + $questaos->questao_1_3 + $questaos->questao_1_4 +
                 $questaos->questao_2 + $questaos->questao_3 + $questaos->questao_4 + $questaos->questao_5_1 + $questaos->questao_5_2 +
                 $questaos->questao_5_3 + $questaos->questao_6 + $questaos->questao_6_1 + $questaos->questao_7 + $questaos->questao_8_1 +
                 $questaos->questao_8_2 + $questaos->questao_8_3 + $questaos->questao_8_4 + $questaos->questao_8_5 + $questaos->questao_8_6 +
                 $questaos->questao_8_7 + $questaos->questao_8_8 + $questaos->questao_8_9 + $questaos->questao_8_10 + $questaos->questao_8_11 +
                 $questaos->questao_9_1 + $questaos->questao_9_2 + $questaos->questao_9_3 + $questaos->questao_9_4 + $questaos->questao_9_5 +
                 $questaos->questao_10_1 + $questaos->questao_10_2 + $questaos->questao_10_3 + $questaos->questao_10_4 + $questaos->questao_10_5);

        $media = $soma/36;

        $statu = DB::table('status')->where('id_cliente', Auth::user()->id)->orderBy('id', 'desc')->first();
        $statu = !isset($statu) ? new Statu() : $statu;

        $statu->id_cliente = Auth::user()->id;
        $statu->porcentagem = number_format($media * 100, 2, '.', '');
        $statu->pontuacao   = $soma;
        $statu->observacao  = '';

        if(!isset($statu->id)){
            $statu->save();
        }else{
            $statu = new Statu();
            $statu::where('id_cliente', Auth::user()->id)
                    ->update([
                            'porcentagem' => number_format($media * 100, 2, '.', ''),
                            'pontuacao'   => $soma,
                            'observacao'  => '']);
        }
    }

    public function index(){
        redirect('');
    }

    public function Page1(){
        $questao = $this->TabQuestao();
        return view('Forms.Page1', ['questao' => $questao]);
    }

    public function SalvaPage1(Request $req){

        $questao = new Questao();
        $statu = new Statu();
        // $req->validate([
        //     'internet' => 'required'
        // ]);
        $questao->id_status     = '';
        $questao->id_cliente    = Auth::user()->id;
        $questao->questao_1     = isset($req->internet)     ? $req->internet        : 0;
        $questao->questao_1_1   = isset($req->wifiControle) ? $req->wifiControle    : 0;
        $questao->questao_1_2   = isset($req->wifiSenha)    ? $req->wifiSenha       : 0;
        $questao->questao_1_3   = isset($req->caboControle) ? $req->caboControle    : 0;
        $questao->questao_1_4   = isset($req->caboSenha)    ? $req->caboSenha       : 0;

        $questao = $this->TabQuestao();

        if(!isset($questao)){
            $questao->save();
        }else{
            $questao = new Questao();
            $questao::where('id_cliente', Auth::user()->id)
                    ->update([
                            'questao_1'   => isset($req->internet)     ? $req->internet        : 0,
                            'questao_1_1' => isset($req->wifiControle) ? $req->wifiControle    : 0,
                            'questao_1_2' => isset($req->wifiSenha)    ? $req->wifiSenha       : 0,
                            'questao_1_3' => isset($req->caboControle) ? $req->caboControle    : 0,
                            'questao_1_4' => isset($req->caboSenha)    ? $req->caboSenha       : 0]);
        }
        $this->Progresso();
        $questao = $this->TabQuestao();
        return view('Forms.Page2', ['questao' => $questao]);
    }

    public function SalvaPage2(Request $req){
        $questao = new Questao();

        $questao->questao_2 = isset($req->camera)       ? $req->camera      : 0;
        $questao->questao_3 = isset($req->dispositivo)  ? $req->dispositivo : 0;
        $questao->questao_4 = isset($req->denuncia)     ? $req->denuncia    : 0;

        $questao::where('id_cliente', Auth::user()->id)
                    ->update([
                            'questao_2' => $questao->questao_2,
                            'questao_3' => $questao->questao_3,
                            'questao_4' => $questao->questao_4]);
        return view('Forms.Page3');
    }

    public function SalvaPage3(Request $req){
        $questao = new Questao();

        $questao->questao_5_1 = isset($req->local)      ? $req->local       : 0;
        $questao->questao_5_2 = isset($req->nuvem)      ? $req->nuvem       : 0;
        $questao->questao_5_3 = isset($req->hibrido)    ? $req->hibrido     : 0;
        $questao->questao_6   = isset($req->codigo)     ? $req->codigo      : 0;
        $questao->questao_6_1 = isset($req->treinados)  ? $req->treinados   : 0;

        $questao::where('id_cliente', Auth::user()->id)
                    ->update([
                            'questao_5_1' => $questao->questao_5_1,
                            'questao_5_2' => $questao->questao_5_2,
                            'questao_5_3' => $questao->questao_5_3,
                            'questao_6' => $questao->questao_6,
                            'questao_6_1' => $questao->questao_6_1,]);
        $this->Progresso();
        $questao = $this->TabQuestao();
        return view('Forms.Page4', ['questao' => $questao]);
    }

    public function SalvaPage4(Request $req){
        $questao = new Questao();

        $questao->questao_7     = isset($req->eliminacao)           ? $req->eliminacao          : 0;
        $questao->questao_8_1   = isset($req->cpf)                  ? $req->cpf                 : 0;
        $questao->questao_8_2   = isset($req->nome)                 ? $req->nome                : 0;
        $questao->questao_8_3   = isset($req->rg)                   ? $req->rg                  : 0;
        $questao->questao_8_4   = isset($req->endereco)             ? $req->endereco            : 0;
        $questao->questao_8_5   = isset($req->estado_civil)         ? $req->estado_civil        : 0;
        $questao->questao_8_6   = isset($req->idade)                ? $req->idade               : 0;
        $questao->questao_8_7   = isset($req->religiao)             ? $req->religiao            : 0;
        $questao->questao_8_8   = isset($req->orientacao_sexual)    ? $req->orientacao_sexual   : 0;
        $questao->questao_8_9   = isset($req->time)                 ? $req->time                : 0;

        $questao::where('id_cliente', Auth::user()->id)
                    ->update([
                            'questao_7' => $questao->questao_7,
                            'questao_8_1' => $questao->questao_8_1,
                            'questao_8_2' => $questao->questao_8_2,
                            'questao_8_3' => $questao->questao_8_3,
                            'questao_8_4' => $questao->questao_8_4,
                            'questao_8_5' => $questao->questao_8_5,
                            'questao_8_6' => $questao->questao_8_6,
                            'questao_8_7' => $questao->questao_8_7,
                            'questao_8_8' => $questao->questao_8_8,
                            'questao_8_9' => $questao->questao_8_9]);
        $this->Progresso();
        $questao = $this->TabQuestao();
        return view('Forms.Page5', ['questao' => $questao]);
    }

    public function SalvaPage5(Request $req){
        $questao = new Questao();
        $questao->questao_8_10  = isset($req->formulario_digital)   ? $req->formulario_digital  : 0;
        $questao->questao_8_11  = isset($req->contrato)             ? $req->contrato            : 0;
        $questao->questao_9_1   = isset($req->email)                ? $req->email               : 0;
        $questao->questao_9_2   = isset($req->rede_social)          ? $req->rede_social         : 0;
        $questao->questao_9_3   = isset($req->presencial)           ? $req->presencial          : 0;
        $questao->questao_9_4   = isset($req->site)                 ? $req->site                : 0;
        $questao->questao_9_5   = isset($req->armazenamento_crv)    ? $req->armazenamento_crv   : 0;

        $questao::where('id_cliente', Auth::user()->id)
                    ->update([
                            'questao_8_10' => $questao->questao_8_10,
                            'questao_8_11' => $questao->questao_8_11,
                            'questao_9_1' => $questao->questao_9_1,
                            'questao_9_2' => $questao->questao_9_2,
                            'questao_9_3' => $questao->questao_9_3,
                            'questao_9_4' => $questao->questao_9_4,
                            'questao_9_5' => $questao->questao_9_5]);
        $this->Progresso();
        $questao = $this->TabQuestao();
        return view('Forms.Page6', ['questao' => $questao]);
    }

    public function SalvaPage6(Request $req){
        $questao = new Questao();
        $questao->questao_10_1  = isset($req->retencao)           ? $req->retencao          : 0;
        $questao->questao_10_2  = isset($req->backup)             ? $req->backup            : 0;
        $questao->questao_10_3  = isset($req->criptografia)       ? $req->criptografia      : 0;
        $questao->questao_10_4  = isset($req->disaster_recovery)  ? $req->disaster_recovery : 0;
        $questao->questao_10_5  = isset($req->controle_acesso)    ? $req->controle_acesso   : 0;


        $questao::where('id_cliente', Auth::user()->id)
                    ->update([
                            'questao_10_1' => $questao->questao_10_1,
                            'questao_10_2' => $questao->questao_10_2,
                            'questao_10_3' => $questao->questao_10_3,
                            'questao_10_4' => $questao->questao_10_4,
                            'questao_10_5' => $questao->questao_10_5]);
        $this->Progresso();
        return redirect()->route('home');
    }

    public function Dashboard(Request $req){

        $questaos = DB::table('questaos')->where('id_cliente', Auth::user()->id)->orderBy('id', 'desc')->first();

        return view('dashboard.Page1',['questaos' => $questaos]);
    }
}
