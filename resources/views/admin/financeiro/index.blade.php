@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
<section class="content-header">
  <h1>
    Financeiro
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
    <li><a href="#">Financeiro</a></li>
    <li class="active">Dedução de Serviço</li>
  </ol>
</section>
@stop

@section('content')


<div class="box box-success">
    <div class="box-body">

<form role="form" method="POST" action="{{ url('/financeiro/inserir') }}">

  <div class="form-group has-warning col-md-6">
    <label>Cliente:</label>
    <input type="hidden" value="{{ $idconcluido }}" name="input_id_concluido" />
    <input type="text" class="form-control" placeholder="Nome do Cliente" value="{{  $cliente->nomecli }}" readonly></br>
    <label>Serviço Efetuado:</label>
    <textarea class="form-control" rows="3" readonly >{{  $descricao }}</textarea>   
  </div>
  <div class="pull-right col-xs-4">
    <label>Data de Encerramento:</label>
      <div class="input-group col-md-6">
          
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          
          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="input_data">
      </div>
      </br>
      <label>Hora de Encerramento:</label>
            <div class="input-group col-md-6">
                <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                    
                  </div>
              <input type="text" class="form-control timepicker" name="input_hora">
            
              
            </div>
          </br>
          <label>Valor do Serviço:</label>
          <div class="input-group col-md-6">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control" name="input_valor">
              <span class="input-group-addon">.00</span>
            </div>
          </br>
          
        </div>            
</div>
          <div class="input-group">
              <button class="btn btn-app bg-olive" value="Inserir">
                  <i class="fa fa-save"></i> Salvar
              </button>
  </div>
</div>
</form>


@stop