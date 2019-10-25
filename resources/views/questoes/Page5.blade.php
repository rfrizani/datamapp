<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-dark mb-5 text-center shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <h5 class="card-title">De que forma são coletadas as informações da pergunta anterior?</h5>
                <h6 class="card-subtitle mb-2 text-muted">Formulário Digital</h6>
                <label class="switch">
                    <input id="formulario_digital" name="formulario_digital" type="checkbox" value="1" {{ isset($questao->questao_8_10) ? $questao->questao_8_10 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Assinatura de Contrato de Trabalho </h6>
                <label class="switch">
                    <input id="contrato" name="contrato" type="checkbox" value="1" {{ isset($questao->questao_8_11) ? $questao->questao_8_11 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
        <div class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body text-center">
                <h5 class="card-title">Como a empresa recebe currículos?</h5>
                <h6 class="card-subtitle mb-2 text-muted">Email</h6>
                <label class="switch">
                    <input id="email" name="email" type="checkbox" value="1" {{ isset($questao->questao_9_1) ? $questao->questao_9_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Redes Sociais</h6>
                <label class="switch">
                    <input id="rede_social" name="rede_social" type="checkbox" value="1" {{ isset($questao->questao_9_2) ? $questao->questao_9_2 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Presencial </h6>
                <label class="switch">
                    <input id="presencial" name="presencial" type="checkbox" value="1" {{ isset($questao->questao_9_3) ? $questao->questao_9_3 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Sites de terceiros </h6>
                <label class="switch">
                    <input id="site" name="site" type="checkbox" value="1" {{ isset($questao->questao_9_4) ? $questao->questao_9_4 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
        <div id="tipo_internet_cabeado" class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Existe alguma política de armazenamento e exclusão desses currículos?</h5>
                <label class="switch">
                    <input id="armazenamento_crv" name="armazenamento_crv" type="checkbox" value="1" {{ isset($questao->questao_9_5) ? $questao->questao_9_5 == 1 ? 'checked' : '' : '' }}>
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
