@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<section class="content-header">
        <h1>
          Cancelados
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
          <li><a href="#">Pedidos</a></li>
          <li class="active">Cancelados</li>
        </ol>
      </section>
@stop

@section('content')
   
@if ( isset($cancelados) )

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
            <th>Categoria</th>            
            <th>Descrição</th>
            <th>Lançamentos</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ( $cancelados as $obj )
           <tr id="row_{{  $obj->canceladoid }}" >

                <td> {{  $obj->canceladoid }}</td>
               <td> {{  $obj->canceladocat }}</td>
               <td> {{  $obj->canceladoservi }}</td>
               <td> {{  $obj->canceladodata }}</td>

              
                
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