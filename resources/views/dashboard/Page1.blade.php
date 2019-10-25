@extends('layouts.app')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{-- <div class="col-md-3">
                <div class="card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers">12</span>
                <span class="count-name">Flowz</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter danger">
                <i class="fa fa-ticket"></i>
                <span class="count-numbers">599</span>
                <span class="count-name">Instances</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter success">
                <i class="fa fa-database"></i>
                <span class="count-numbers">6875</span>
                <span class="count-name">Data</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter info">
                <i class="fa fa-users"></i>
                <span class="count-numbers">35</span>
                <span class="count-name">Users</span>
                </div>
            </div> --}}

                <table class="table table-sm">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Questão</th>
                    <th scope="col">Resposta</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($questaos->questao_1))
                        <tr>
                            <th scope="row">Você tem acesso a internet?</th>
                            <td>{{$questaos->questao_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">WI-FI: Tem algum controle de acesso?</th>
                            <td>{{$questaos->questao_1_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">WI-FI: A senha é trocada periodicamente?</th>
                            <td>{{$questaos->questao_1_2 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Cabeado: Tem algum controle de acesso?</th>
                            <td>{{$questaos->questao_1_3 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Cabeado: A senha é trocada periodicamente?</th>
                            <td>{{$questaos->questao_1_4 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Há câmeras de segurança interna?</th>
                            <td>{{$questaos->questao_2 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">É permitido o uso de dispositivos pessoas para fins de trabalho?</th>
                            <td>{{$questaos->questao_3 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Possui algum canal de denúncia anônima?</th>
                            <td>{{$questaos->questao_4 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Seus arquivos ficam salvos em: Local</th>
                            <td>{{$questaos->questao_5_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Seus arquivos ficam salvos em: Nuvem</th>
                            <td>{{$questaos->questao_5_2 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Seus arquivos ficam salvos em: Híbrido</th>
                            <td>{{$questaos->questao_5_3 == 2 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Possui código de conduta ética?</th>
                            <td>{{$questaos->questao_6 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Seus funcionários são treinados periodicamente nesse código?</th>
                            <td>{{$questaos->questao_6_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Possui algum procedimento de eliminação de arquivos?</th>
                            <td>{{$questaos->questao_7 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? CPF</th>
                            <td>{{$questaos->questao_8_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Nome</th>
                            <td>{{$questaos->questao_8_2 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? RG</th>
                            <td>{{$questaos->questao_8_3 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Endereço</th>
                            <td>{{$questaos->questao_8_4 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Estado Civil</th>
                            <td>{{$questaos->questao_8_5 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Idade</th>
                            <td>{{$questaos->questao_8_6 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Religião</th>
                            <td>{{$questaos->questao_8_7 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Orientação Sexual</th>
                            <td>{{$questaos->questao_8_8 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais dados de funcionários são coletados na empresa  obrigatoriamente? Time</th>
                            <td>{{$questaos->questao_8_9 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">De que forma são coletadas as informações acima? Formulário Digitar</th>
                            <td>{{$questaos->questao_8_10 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">De que forma são coletadas as informações acima? Assinatura de Contrato de Trabalho</th>
                            <td>{{$questaos->questao_8_11 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Como a empresa recebe currículos? E-mail</th>
                            <td>{{$questaos->questao_9_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Como a empresa recebe currículos? Redes Sociais</th>
                            <td>{{$questaos->questao_9_2 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Como a empresa recebe currículos? Presencial</th>
                            <td>{{$questaos->questao_9_3 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Como a empresa recebe currículos? Sites de terceiros</th>
                            <td>{{$questaos->questao_9_4 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Existe alguma política de armazenamento e exclusão desses currículos?</th>
                            <td>{{$questaos->questao_9_5 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais tipos de segurança é utilizado na proteção dos seus dados? Política de retenção</th>
                            <td>{{$questaos->questao_10_1 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais tipos de segurança é utilizado na proteção dos seus dados? Backup</th>
                            <td>{{$questaos->questao_10_2 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais tipos de segurança é utilizado na proteção dos seus dados? Criptografia</th>
                            <td>{{$questaos->questao_10_3 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais tipos de segurança é utilizado na proteção dos seus dados? Disaster Recovery</th>
                            <td>{{$questaos->questao_10_4 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Quais tipos de segurança é utilizado na proteção dos seus dados? Controle de Acesso</th>
                            <td>{{$questaos->questao_10_5 == 1 ? 'Sim' : 'Não'}}</td>
                        </tr>
                    @else
                        <tr>
                            <th scope="row">Sem registro</th>
                        </tr>
                    @endif
                </tbody>
                </table>

        </div>
    </div>
</div>
@endsection
