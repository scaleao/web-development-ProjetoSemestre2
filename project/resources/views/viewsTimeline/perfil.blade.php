@extends('templetes.timeline')

@section('titulo', 'Perfil')

@section('conteudo')
    <h2>Atualize suas informações</h2>
    <div class="row">
        <div class="container border border-secondary">
            <form action="{{route('user.update')}}" method="post" class="needs-validation" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-row">
                    <div class="col-md-7 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">Adicione uma foto</label>
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <label for="validationTooltip01">Nome completo</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="{{Auth::user()->name}}" name="name" placeholder="Exemplo: Chico Buarque de Holanda" disabled>
                        <div class="valid-tooltip">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltipUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationTooltipUsername" value="{{Auth::user()->username}}" name="username" placeholder="Usuário" aria-describedby="validationTooltipUsernamePrepend" disabled>
                            <div class="invalid-tooltip">
                                Por favor, escolha um usuário válido e único.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Rua</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="rua" placeholder="Rua" value="{{isset($data->rua) ? $data->rua : old('rua')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe uma Rua válida.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Numero</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="numero" placeholder="Numero" value="{{isset($data->numero) ? $data->numero : old('numero')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um Numero válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Bairro</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="bairro" placeholder="Bairro" value="{{isset($data->bairro) ? $data->bairro : old('bairro')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um Bairro válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Cidade</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="cidade" placeholder="Cidade" value="{{isset($data->cidade) ? $data->cidade : old('cidade')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe uma cidade válida.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Estado</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="estado" placeholder="Estado" value="{{isset($data->estado) ? $data->estado : old('estado')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">CEP</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="cep" placeholder="CEP" value="{{isset($data->cep) ? $data->cep : old('cep')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um CEP válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Profissão</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="profissao" placeholder="Ex: Secretario" value="{{isset($data->profissao) ? $data->profissao : old('profissao')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Nome no cartão</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="nomeC" placeholder="Mesmo nome no cartão" value="{{isset($data->nomeC) ? $data->nomeC : old('nomeC')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Numero no cartão</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="numeroC" placeholder="XXXX XXXX XXXX XXXX" value="{{isset($data->numeroC) ? $data->numeroC : old('numeroC')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Data de validade</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="dataValiC" placeholder="MM/AA" value="{{isset($data->dataValiC) ? $data->dataValiC : old('dataValiC')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um CEP válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Digitos</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="digitoC" placeholder="XXX" value="{{isset($data->digitoC) ? $data->digitoC : old('digitoC')}}" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um CEP válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault06">CPF</label>
                            <input type="text" class="form-control" id="validationDefault06" value="{{Auth::user()->cpf}}" name="cpf" placeholder="xxx.xxx.xxx-xx" disabled>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault06">Email</label>
                            <input type="text" class="form-control" id="validationDefault07" value="{{Auth::user()->email}}" name="email" placeholder="chico@mail.com.br" disabled>
                        </div>
                </div>
                <button class="btn btn-primary" type="submit">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
