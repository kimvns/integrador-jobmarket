@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
<section class="content-header">
		<h1>
			Editar Clientes
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
			<li><a href="#">Clientes</a></li>
			<li class="active">Editar Clientes</li>
		</ol>
	</section>
@stop

@section('content')





<form action="{{ url('/Cliente/inserir') }}" method="POST">
		
		{{ csrf_field() }}

		<div class="card-header bg-dark text-white text-center my-2">
				<h4>Dados Do Clientes</h4>
		</div>
		
	<div class="form-row">
	  <div class="form-group col-md-6 col-12">
		<label for="input_nome_cli">Nome/Razao social</label>
		<input type="text" class="form-control" id="input_nome_cli" name="input_nome_cli" placeholder="nome"  required="" value="{{ isset($cliente->nomecli) ? $cliente->nomecli : "" }}">
	  </div>
	  <div class="form-group col-md-3">
		<label for="input_cpf">CPF/CNPJ</label>
		<input type="text" class="form-control" id="input_cpf" name="input_cpf" placeholder=""  required="">
	  </div>
	  <div class="form-group col-md-3">
		<label for="input_Telefone">Telefone</label>
		<input type="text" class="form-control" id="input_Telefone" name="input_Telefone" placeholder=""  required="">
      </div>
    
    <div class="form-group col-md-4">
		<label for="input_sexo">Sexo</label>
		<select class="form-control" name="input_sexo" id="input_sexo"  required="" >
		  <option selected>Escolher o Sexo</option>
          <option>Masculino</option>
          <option>Feminino</option>

		</select>
	  </div>

		<div class="form-group col-md-4">
		  <label for="input_datan">Data Nacimentos</label>
		  <input type="date" class="form-control"  name="input_datan" id="input_datan"  required="" >
        </div>
        
        <div class="form-group col-md-4">
            <label for="inputPassword4">campo</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
          </div>
	  </div>

	<div class="form-group col-md-6"  >
	  <label for="inputAddress">campo</label>
	  <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
	</div>
	<div class="form-group col-md-6">
	  <label for="inputAddress2">campo</label>
	  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
	</div>
	<div class="form-row">
	  <div class="form-group col-md-6">
		<label for="inputCity">campo</label>
		<input type="text" class="form-control" id="inputCity">
	  </div>
	  <div class="form-group col-md-4">
		<label for="inputEstado">Estado</label>
		<select id="inputEstado" class="form-control">
		  <option selected>Escolher...</option>
		  <option>...</option>
		</select>
	  </div>
	  <div class="form-group col-md-2">
		<label for="inputCEP">campo</label>
		<input type="text" class="form-control" id="inputCEP">
	  </div>
	</div>
	<div class="form-group">
	  <div class="form-check">
		<input class="form-check-input" type="checkbox" id="gridCheck">
		<label class="form-check-label" for="gridCheck">
		  Clique em mim
		</label>
	  </div>
	</div>
	<button type="submit" class="btn btn-primary" value="Inserir"  >Entrar</button>
  </form>
	@stop
	
	