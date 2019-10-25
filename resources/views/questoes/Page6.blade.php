<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-dark mb-5 text-center shadow p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <h5 class="card-title">Quais tipos de segurança é utilizado na proteção dos seus dados?</h5>
                <h6 class="card-subtitle mb-2 text-muted">Política de retenção</h6>
                <label class="switch">
                    <input id="retencao" name="retencao" type="checkbox" value="1" {{ isset($questao->questao_10_1) ? $questao->questao_10_1 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Backup</h6>
                <label class="switch">
                    <input id="backup" name="backup" type="checkbox" value="1" {{ isset($questao->questao_10_2) ? $questao->questao_10_2 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Criptografia</h6>
                <label class="switch">
                    <input id="criptografia" name="criptografia" type="checkbox" value="1" {{ isset($questao->questao_10_3) ? $questao->questao_10_3 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Disaster Recovery</h6>
                <label class="switch">
                    <input id="disaster_recovery" name="disaster_recovery" type="checkbox" value="1" {{ isset($questao->questao_10_4) ? $questao->questao_10_4 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
                <h6 class="card-subtitle mb-2 text-muted">Controle de Acesso</h6>
                <label class="switch">
                    <input id="controle_acesso" name="controle_acesso" type="checkbox" value="1" {{ isset($questao->questao_10_5) ? $questao->questao_10_5 == 1 ? 'checked' : '' : '' }}>
                    <span class="slider round"></span>
                    <span class="absolute-no">Não</span>
                </label>
            </div>
        </div>

    </div>
</div>
<div class="row justify-content-center" style="margin-bottom: 22%">
    <button type="submit" class="btn btn-primary" >Finalizar</button>
</div>
