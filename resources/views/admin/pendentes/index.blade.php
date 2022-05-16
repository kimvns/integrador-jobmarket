@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<section class="content-header">
        <h1>
          Pendentes
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
          <li><a href="#">Pedidos</a></li>
          <li class="active">Pendentes</li>
        </ol>
      </section>
@stop

@section('content')

@if ( isset($pendencias) )

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
        </tr>
    </thead>
    
    <tbody>
        @foreach ( $pendencias as $obj )
            <tr id="row_{{  $obj->pendenciasid }}" >
                <td> {{  $obj->pendenciasid }}</td>
                <td> {{  $obj->pendenciascliete }}</td>
                <td> {{  $obj->pendenciascat }}</td>                
                <td> {{  $obj->pendenciasservi}}</td>
                <td> 
                    <?php 
                        if (isset( $obj->pendenciasdata )):
                            $data = \FormatarDatas::formatDateTimeStamp( $obj->pendenciasdata );
                        endif;
                    ?>
                    {{ isset( $obj->pendenciasdata ) ? $data['data'] . ' às ' . $data['hora'] : "Indefinido" }}                    
                </td>
                <td> 
                        <a href="{{ url("aceitar_pendencia/" . $obj->pendenciasid ) }}" type="button" class="btn btn-success btn-sm btnAceitar" data-chave-solicatao="{{  $obj->pendenciasid }}">
                            <i class="fa fa-check-square-o"></i>
                        </a>



                        <a href="{{ url("cancelar_pendencia/" . $obj->pendenciasid ) }}" type="button" class="btn btn-danger btn-sm" data-chave-solicatao="{{  $obj->pendenciasid }}">
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