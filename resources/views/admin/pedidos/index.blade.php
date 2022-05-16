@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<section class="content-header">
        <h1>
          Novas Solicitações
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
          <li><a href="#">Pendentes</a></li>
          <li class="active">Novas Solicitações</li>
        </ol>
      </section>
@stop

@section('content')
   

    @if ( isset($solicitacoes) )

        <input id="urlApiAceitarSolicitacoes" type="hidden" value="{{  url("api/aceitar/solicitacoes") }}" />
        <div class="input-group input-group-sm col-md-4">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Pesquisar</button>
                    </span>
              </div></br>
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
   
            <tbody>
                @foreach ( $solicitacoes as $obj )
                    <tr id="row_{{  $obj->idsolicitacoes }}" >
                        <td> {{  $obj->idsolicitacoes }}</td>
                        <td> {{  $obj->nomecliente }}</td>
                        <td> {{  $obj->nomecategoria }}</td>
                        <td> {{  $obj->descricao }}</td>
                        <td > {{  $obj->tipostatus }}</td>
                        <td> 

     
                            <a href="{{ url("aceitar/" . $obj->idsolicitacoes ) }}" type="button" class="btn btn-success btn-sm btnAceitar" data-chave-solicatao="{{  $obj->idsolicitacoes }}">
                                <i class="fa fa-check-square-o"></i>
                            </a>



                            <a href="{{ url("cancelar/" . $obj->idsolicitacoes ) }}" type="button" class="btn btn-danger btn-sm" data-chave-solicatao="{{  $obj->idsolicitacoes }}">
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