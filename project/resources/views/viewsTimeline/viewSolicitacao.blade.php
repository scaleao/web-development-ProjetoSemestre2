@extends('templetes.timeline')

@section('titulo', 'Solicitacao')

@section('conteudo')
    <h2>Solicitação</h2>
    <div class="row">
        <div class="container border border-secondary col-md-5">
            <form action="#" method="post" class="needs-validation" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label><b>De: </b>{{$info_solici->email}}</label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label><b>Nome do documento: </b>{{$info_solici->name}}</label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label><b>Tipo do documento: </b>{{$info_solici->type}}</label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p class="text-justify"><b>Descrição: </b>{{$info_solici->description}}</p>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Assinar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
