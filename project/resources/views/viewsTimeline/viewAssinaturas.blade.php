@extends('templetes.timeline')

@section('titulo', 'Assinaturas')

@section('conteudo')
    <h2>Suas assinaturas:</h2>
    <div class="list-group">
        @foreach ($assinaturas as $assinatura)
            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">{{$assinatura->created_at .' - '. $assinatura->username .' - '. $assinatura->name .' - '. $assinatura->type}}</a>
        @endforeach
    </div>
@endsection
