@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<section class="content-header">
        <h1>
          Serviços Realizados
        </h1>
        <ol class="breadcrumb">
          <li><a href= "#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
          <li><a href="#">Pedidos</a></li>
          <li class="active">Serviços Realizados</li>
        </ol>
      </section>
@stop

@section('content')
  
@if ( isset($realizados) )

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
            <th>Serviço</th>
            <th>Lançamentos</th>
            <th>ações</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ( $realizados as $obj )
            <tr id="row_{{  $obj->concluidosid }}" >
                <td> {{  $obj->concluidosid }}</td>
                <td> {{  $obj->concluidoscliete }}</td>  
                <td> {{  $obj->concluidosservi }}</td>
                <td> {{  $obj->concluidoscat }}</td>
                              
                <td> {{  $obj->concluidosdata}}</td>
                
                <td> 
                    <a role="button" href="{{ url("admin/financeiro/" . $obj->concluidosid ) }}" class="btn btn-success btn-sm btnAceitar">
                        <i class="fa fa-check-square-o"></i>
                    </a>

                    
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