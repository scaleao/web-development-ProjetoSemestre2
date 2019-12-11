@extends('templetes.timeline')

@section('titulo', 'Dados assinatura')

@section('conteudo')
    <h2>Dados na assinaturas</h2>
    <div class="row">
        <div class="container border border-secondary col-md-6">
            <h3>Enviado por:</h3>
            <p>{{$dados->name .' - '. $dados->cpf .' - '. $dados->profissao}}</p>
            <h3>Solicitacao feita às:</h3>
            <p>{{$dados->solicitacao_created}}</p>
            <h3>Documento</h3>
            <p>{{$dados->documento_name .' - '. $dados->type}}</p>
            <p>{{$dados->description}}</p>
            <h3>Assinado por:</h3>
            <p>{{Auth::user()->name .' - às: '. $dados->assinatura_created}}</p>
        </div>
    </div>

@endsection
