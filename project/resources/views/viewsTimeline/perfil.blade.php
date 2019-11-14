@extends('templetes.timeline')

@section('titulo', 'Perfil')

@section('conteudo')
    <h2>Atualize suas informações</h2>
    <div class="row">
        <div class="container border border-secondary">
            <form action="{{route('user.update')}}" method="post" class="needs-validation" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
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
                        <input type="text" class="form-control" id="validationTooltip03" name="rua" placeholder="Rua" required>
                        <div class="invalid-tooltip">
                            Por favor, informe uma Rua válida.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Numero</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="numero" placeholder="Numero" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um Numero válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Bairro</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="bairro" placeholder="Bairro" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um Bairro válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Cidade</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="cidade" placeholder="Cidade" required>
                        <div class="invalid-tooltip">
                            Por favor, informe uma cidade válida.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Estado</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="estado" placeholder="Estado" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">CEP</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="cep" placeholder="CEP" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um CEP válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Profissão</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="Profissao" placeholder="Ex: Secretario" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Nome no cartão</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="nomeCartao" placeholder="Mesmo nome no cartão" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Numero no cartão</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="numeroCartao" placeholder="XXXX XXXX XXXX XXXX" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Data de validade</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="dataCartao" placeholder="MM/AA" required>
                        <div class="invalid-tooltip">
                            Por favor, informe um CEP válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Digitos</label>
                        <input type="text" class="form-control" id="validationTooltip05" name="digitoCartao" placeholder="XXX" required>
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
