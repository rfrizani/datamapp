<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-dark mb-5 text-center shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <h5 class="card-title">Possui algum procedimento de eliminação de arquivos?</h5>
                <label class="switch">
                    <input id="eliminacao" name="eliminacao" type="checkbox" value="1" {{ isset($questao->questao_7) ? $questao->questao_7 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>
        <div class="card border-dark mb-12 shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body text-center">
                <h5 class="card-title">Quais dados de funcionários são coletados na empresa  obrigatoriamente?</h5>
                <h6 class="card-subtitle mb-2 text-muted">CPF</h6>
                <label class="switch">
                    <input id="cpf" name="cpf" type="checkbox" value="1" {{ isset($questao->questao_8_1) ? $questao->questao_8_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Nome</h6>
                <label class="switch">
                    <input id="nome" name="nome" type="checkbox" value="1" {{ isset($questao->questao_8_2) ? $questao->questao_8_2 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">RG </h6>
                <label class="switch">
                    <input id="rg" name="rg" type="checkbox" value="1" {{ isset($questao->questao_8_3) ? $questao->questao_8_3 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Endereço </h6>
                <label class="switch">
                    <input id="endereco" name="endereco" type="checkbox" value="1" {{ isset($questao->questao_8_4) ? $questao->questao_8_4 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Estado Civil </h6>
                <label class="switch">
                    <input id="estado_civil" name="estado_civil" type="checkbox" value="1" {{ isset($questao->questao_8_5) ? $questao->questao_8_5 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Idade </h6>
                <label class="switch">
                    <input id="idade" name="idade" type="checkbox" value="1" {{ isset($questao->questao_8_6) ? $questao->questao_8_6 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Religião </h6>
                <label class="switch">
                    <input id="religiao" name="religiao" type="checkbox" value="1" {{ isset($questao->questao_8_7) ? $questao->questao_8_7 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Orientação Sexual</h6>
                <label class="switch">
                    <input id="orientacao_sexual" name="orientacao_sexual" type="checkbox" value="1" {{ isset($questao->questao_8_8) ? $questao->questao_8_8 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Time</h6>
                <label class="switch">
                    <input id="time" name="time" type="checkbox" value="1" {{ isset($questao->questao_8_9) ? $questao->questao_8_9 == 1 ? 'checked' : '' : '' }}>
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
