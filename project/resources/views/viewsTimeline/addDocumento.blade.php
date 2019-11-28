@extends('templetes.timeline')

@section('titulo', 'Add Documento')

@section('conteudo')
    <h2>Cadastre seus documentos aqui</h2>
    <div class="row">
        <div class="container border border-secondary">
            <form action="{{route('user.update')}}" method="post" class="needs-validation" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-row">
                    <div class="col-md-7 mb-3">
                        <label for="validationTooltip01">Nome do documento</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="" name="name" placeholder="Insira o nome do documento" required>
                        <div class="valid-tooltip">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Tipo</label>
                        <div class="input-group">
                            <select name="tipo" class="form-control" id="exampleFormControlSelect1" aria-describedby="validationTooltipUsernamePrepend">
                                <option>Contrato de Serviço</option>
                                <option>Acordo Judicial</option>
                                <option>Escritura de Residencia</option>
                                <option>Ordem de serviço</option>
                                <option>Ordem judicial</option>
                                <option>Fiança</option>
                                <option>Certidão de Casamento</option>
                                <option>Certidao de Divorcio</option>
                                <option>Petição</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Descrição</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="descricao" placeholder="Insira um pequena descricao" value="" required>
                        <div class="invalid-tooltip">
                            Por favor, informe uma Rua válida.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-7 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">Adicione o documento</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection
