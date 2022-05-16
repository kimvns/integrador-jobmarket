@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    
@stop

@section('content')

@if( isset($mensagem) && $mensagem != "" )
		<div class="alert alert-success">{{ $mensagem }}</div>
@endif


<form action="{{ url('/fornecedor/inserir') }}" method="POST">
		
		{{ csrf_field() }}

		<div class="card-header bg-dark text-white text-center my-2">
				<h4>Dados Do Fornecedor</h4>
		</div>
		
	<div class="form-row">
	  <div class="form-group col-md-6 col-12">
		<label for="input_nome_forn">Nome/Razao social</label>
		<input type="text" class="form-control" id="input_nome_forn" name="input_nome_forn" placeholder="nome"  value="{{ isset($fornecedor->nomefor) ? $fornecedor->nomefor : "" }}">
	  </div>
	  <div class="form-group col-md-3">
		<label for="input_cpf_cnpj">CPF/CNPJ</label>
		<input type="text" class="form-control" id="input_cpf_cnpj" name="input_cpf_cnpj" placeholder="">
	  </div>
	  <div class="form-group col-md-3">
		<label for="input_Telefone">Telefone</label>
		<input type="text" class="form-control" id="input_Telefone" name="input_Telefone" placeholder="">
	  </div>
	</div>
	<div class="card-header bg-dark text-white text-center my-2">
		<h4>Endereço  Fornecedor</h4>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Email</label>
		  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Senha</label>
		  <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
		</div>
	  </div>

	<div class="form-group col-md-6"  >
	  <label for="inputAddress">Endereço</label>
	  <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
	</div>
	<div class="form-group col-md-6">
	  <label for="inputAddress2">Endereço 2</label>
	  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
	</div>
	<div class="form-row">
	  <div class="form-group col-md-6">
		<label for="inputCity">Cidade</label>
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
		<label for="inputCEP">CEP</label>
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
	
	