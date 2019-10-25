<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-dark mb-5 text-center shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <h5 class="card-title">Há cameras de segurança interna?</h5>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <label class="switch">
                    <input id="camera" name="camera" type="checkbox" value="1" {{ isset($questao->questao_2) ? $questao->questao_2 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>

            </div>
        </div>
        <div class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body text-center">
                <h5 class="card-title">É permitido o uso de dispositivos pessoas para fins de trabalho? </h5>
                <label class="switch">
                    <input id="dispositivo" name="dispositivo" type="checkbox" value="1" {{ isset($questao->questao_3) ? $questao->questao_3 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
        <div class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body text-center">
                <h5 class="card-title">Possuí algum canal de denúncia anonima?</h5>
                <label class="switch">
                    <input id="denuncia" name="denuncia" type="checkbox" value="1" {{ isset($questao->questao_4) ? $questao->questao_4 == 1 ? 'checked' : '' : '' }}>
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

