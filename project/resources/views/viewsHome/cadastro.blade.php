@extends('templetes.home');

@section('titulo', 'Cadastre-se');

@section('conteudo')
</br>
</br>
<div class="row">
    <div class="container border border-secondary">
        @if ($errors->any())
            <div>
                <ul class="bg-danger">
                    @foreach ($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('user.register')}}" method="post" class="needs-validation" novalidate>
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-7 mb-3">
                    <label for="validationTooltip01">Nome completo</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="name" placeholder="Exemplo: Chico Buarque de Holanda" required>
                    <div class="valid-tooltip">
                        Tudo certo!
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationTooltipUsername" name="username" placeholder="Usuário" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Por favor, escolha um usuário válido e único.
                        </div>
                    </div>
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div><!--
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
            </div> -->
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault06">CPF</label>
                        <input type="text" class="form-control" id="validationDefault06" name="cpf" placeholder="xxx.xxx.xxx-xx" required>
                        @error('cpf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault06">Email</label>
                        <input type="text" class="form-control" id="validationDefault07" name="email" placeholder="chico@mail.com.br" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault07">Senha</label>
                        <input type="password" class="form-control" name="password" id="validationDefault08" required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            <div class="form-group custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="checkbox" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Concordo com os <a href="#">termos</a> de uso</label>
                @error('checkbox')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
@endsection
