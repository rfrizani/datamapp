<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-dark mb-5 text-center shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <h5 class="card-title">Seus arquivos ficam salvos em?</h5>
                <h6 class="card-subtitle mb-2 text-muted">Local </h6>
                <label class="switch">
                    <input id="local" name="local" type="checkbox" value="1" {{ isset($questao->questao_5_1) ? $questao->questao_5_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Nuvem</h6>
                <label class="switch">
                    <input id="nuvem" name="nuvem" type="checkbox" value="1" {{ isset($questao->questao_5_2) ? $questao->questao_5_2 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Híbrido </h6>
                <label class="switch">
                    <input id="hibrido" name="hibrido" type="checkbox" value="2" {{ isset($questao->questao_5_3) ? $questao->questao_5_3 == 2 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>

            </div>
        </div>
        <div class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body text-center">
                <h5 class="card-title">Possui código de conduta e ética? </h5>
                <label class="switch">
                    <input id="codigo" name="codigo" type="checkbox" value="1" {{ isset($questao->questao_6) ? $questao->questao_6 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
        <div id="treinados" class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" style="display:{{ isset($questao->questao_6_1) ? $questao->questao_6_1 == 1 ? 'show' : 'none' : 'none' }};">
            <div class="card-body text-center">
                <h5 class="card-title">Seus funcionários são treinados periodicamente nesse código?</h5>
                <label class="switch">
                    <input id="treinados" name="treinados" type="checkbox" value="1" {{ isset($questao->questao_6_1) ? $questao->questao_6_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center" style="margin-bottom: 22%">
    <button type="submit" class="btn btn-primary" >Avançar</button>
</div>

