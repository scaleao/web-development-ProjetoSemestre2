@extends('templetes.timeline')

@section('titulo', 'Inicio')

@section('conteudo')
    <h2>Encontre suas solicitações aqui:</h2>
    <div class="list-group">
        @foreach ($solicitacoes as $solicitacao)
            <a href="#" class="list-group-item list-group-item-action list-group-item-success">{{$solicitacao->user_id .' - '. $solicitacao->documento_id}}</a>
        @endforeach
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
    </div>
@endsection
