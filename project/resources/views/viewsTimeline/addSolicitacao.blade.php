@extends('templetes.timeline')

@section('titulo', 'Enviar Solicitação')

@section('conteudo')
    <h2>Envie sua solicitação</h2>
    <div class="row">
        <div class="container border border-secondary col-md-5">
            @if ($errors->any())
                <div>
                    <ul class="bg-danger">
                        @foreach ($errors->all() as $error)
                            <li class="text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('user.add_solicitacao')}}" method="post" class="needs-validation" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip01">De:</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="email" placeholder="" value="{{Auth::user()->email}}" disabled>
                        <div class="valid-tooltip">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip01">Para:</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="destino" placeholder="Insira o email do destinatário" required>
                        <div class="valid-tooltip">
                            Tudo certo!
                        </div>
                        @error('destino')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-7 mb-3">
                        <label>Informe o documento</label>
                        <div class="input-group">
                            <select name="documento" class="form-control" id="exampleFormControlSelect1" aria-describedby="validationTooltipUsernamePrepend">
                                <option></option>
                                @foreach ($documentos as $documento)
                                    <option value="{{$documento->id}}">{{$documento->id .' - '.$documento->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('documento')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>

@endsection
