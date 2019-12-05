@extends('templetes.timeline')

@section('titulo', 'Add Documento')

@section('conteudo')
    <h2>Visualize seus documentos</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($documentos as $documento)
        <tr>
            <th scope="row">{{$documento->id}}</th>
            <td>{{$documento->name}}</td>
            <td>{{$documento->type}}</td>
            <td>{{$documento->description}}</td>
            <td>
                <a class="btn btn-sm btn-info" href="#">Alterar</a>
                <a class="btn btn-sm btn-danger" href="{{route('user.del_documento', $documento->id)}}">Remover</a>
                <a class="btn btn-sm btn-secondary" href="#">Visualizar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
