@extends('templetes.home')

@section('titulo', 'Inicio');

@section('conteudo')
    </br></br>
    <div class="row">
        <div class="container">
            <div class="text-center mt-2 mb-5">
                <img src="image/caneta.png" class="rounded" alt="logo">
                <p style="font-size: 29px">Entre agora no Project</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container border border-secondary rounded col-md-4 mb-3">
            <form method="post" action="{{route('user.login')}}">
                {{csrf_field()}}
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="email" placeholder="Login: chico@mail.com">
                </div>
                <div class="form-group">
                    <div class="text-right"><a href="#">Esqueceu sua senha?<a></div>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div class="form-group custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="checkbox" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Lembrar-me</label>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="container border border-secondary rounded col-md-4 mb-3">
            <div class="text-center pt-4 pb-3">
                <p>Você é novo no Project?<a href="#">Crie uma conta agora!</a></p>
            </div>
        </div>
    </div>
    </br></br></br></br></br></br>
@endsection
