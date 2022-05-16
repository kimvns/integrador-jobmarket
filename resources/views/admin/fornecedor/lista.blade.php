@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    <h1>Solicitações</h1>
    <ol class="breadcrumb">
    </li><a href="">Dashboard</a></li>        
        </li><a href="">Consulta</a></li>
    </ol>
@stop

@section('content')
   

    @if ( isset($solicitacoes) )

        <input id="urlApiAceitarSolicitacoes" type="hidden" value="{{  url("api/aceitar/solicitacoes") }}" />

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th >Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            //colorir uma linha  style="background-color: red"
            <tbody>
                @foreach ( $solicitacoes as $obj )
                    <tr id="row_{{  $obj->idsolicitacoes }}" >
                        <td> {{  $obj->idsolicitacoes }}</td>
                        <td> {{  $obj->nomecliente }}</td>
                        <td> {{  $obj->nomecategoria }}</td>
                        <td> {{  $obj->descricao }}</td>
                        <td > {{  $obj->tipostatus }}</td>
                        <td> 

                            <button class="btn btn-success btn-sm btnAceitar" data-chave-solicatao="{{  $obj->idsolicitacoes }}">
                                <i class="fa fa-check-square-o"></i>
                            </button>

                            <a href="{{ url("aceitar/" . $obj->idsolicitacoes ) }}" type="button" class="btn btn-danger btn-sm" data-chave-solicatao="{{  $obj->idsolicitacoes }}">
                                <i class="fa fa-ban"></i>
                            </a>

                            <button id="btn_eye_{{  $obj->idsolicitacoes }}" class="btn btn-info btn-sm" data-chave-solicatao="{{  $obj->idsolicitacoes }}">
                                    <i class="fa fa-eye"></i>
                            </button>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else 
        
        <div class="col-12 alert alert-info text-center font-weight-bold">
            Não encontramos solicitações pendentes.
        </div>
    @endif
    
@stop