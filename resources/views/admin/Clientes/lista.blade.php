@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
<section class="content-header">
        <h1>
          Listar Clientes
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
          <li><a href="#">Clientes</a></li>
          <li class="active">Listar Clientes</li>
        </ol>
      </section>
@stop

@section('content')
   

    @if ( isset($clientes) )

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
                    <th>Data Nacimento</th>
                    <th >CPF</th>  
                    <th>Sexo</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                    
                </tr>
            </thead>
   
            <tbody>
                @foreach ( $clientes as $obj )
                    <tr id="row_{{  $obj->clienteid }}" >
                        <td> {{  $obj->clienteid }}</td>
                        <td> {{  $obj->clientenome }}</td>


                        
                        <td> {{  \FormatarDatas::formatDate($obj->clientedata) }}</td>
                        <td> {{  $obj->clientecpf }}</td>
                        <td > {{  $obj->clientesexo }}</td>
                        {{--  <td > {{  $obj->enderecorua }}</td> --}}
                        <td > {{ $obj->telefone }}</td>
                        <td> 
     
                            <a href="{{ url("editar/" . $obj->clienteid ) }}" type="button" class="btn btn-warning btn-sm btnAceitar" >
                                <i class="fa fa-edit"></i>
                            </a>

                      

                            <a href="{{ url("visualizar/" . $obj->clienteid ) }}" type="button" class="btn btn-info btn-sm" data-chave-solicatao="{{  $obj->clienteid }}">
                                <i class="fa fa-eye"></i>                            
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