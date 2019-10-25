<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-dark mb-5 text-center shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <h5 class="card-title">Voce tem acesso a internet?</h5>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <label class="switch">
                    <input id="internet" name="internet" type="checkbox" value="1" {{ isset($questao->questao_1) ? $questao->questao_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>

            </div>
        </div>
        <div id="tipo_internet_wifi" class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" style="display:{{ isset($questao->questao_1_1) ? $questao->questao_1_1 == 1 ? 'show' : 'none' : 'none' }};">
            <div class="card-body text-center">
                <h5 class="card-title">Tipo WI-FI</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tem algum controle de acesso? </h6>
                <label class="switch">
                    <input id="wifi" name="wifiControle" type="checkbox" value="1" {{ isset($questao->questao_1_1) ? $questao->questao_1_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>

                <h6 class="card-subtitle mb-2 text-muted">A senha é trocada periodicamente? </h6>
                <label class="switch">
                    <input id="cabeado" name="wifiSenha" type="checkbox" value="1" {{ isset($questao->questao_1_2) ? $questao->questao_1_2 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
        <div id="tipo_internet_cabeado" class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" style="display:{{ isset($questao->questao_1_3) ? $questao->questao_1_3 == 1 ? 'show' : 'none' : 'none' }};">
            <div class="card-body text-center">
                <h5 class="card-title">Tipo Cabeado</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tem algum controle de acesso? </h6>
                <label class="switch">
                    <input id="wifi" name="caboControle" type="checkbox" value="1" {{ isset($questao->questao_1_3) ? $questao->questao_1_3 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>

                <h6 class="card-subtitle mb-2 text-muted">A senha é trocada periodicamente? </h6>
                <label class="switch">
                    <input id="cabeado" name="caboSenha" type="checkbox" value="1" {{ isset($questao->questao_1_4) ? $questao->questao_1_4 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center" style="margin-bottom: 22%">
    <button type="submit" class="btn btn-primary">Avançar</button>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
