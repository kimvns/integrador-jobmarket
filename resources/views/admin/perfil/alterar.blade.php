@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    
@stop

@section('content')



	<form action="{{ url('atualizar') }}" method="POST" enctype="multipart/form-data">
		
		{{ csrf_field() }}

		<div class="card-header bg-dark text-white text-center my-2">
				<h4>Dados</h4>
		</div>
		
	<div class="form-row">
	  <div class="form-group col-md-7">
		<label for="name">Nome</label>
		<input type="text"  class="form-control" id="name"  value="{{ auth()->user()->name }} "name="name" placeholder="nome"  required="" >
	  </div>
	  <div class="form-group col-md-7">
		<label for="email">Email</label>
		<input type="email" class="form-control"  value="{{ auth()->user()->email }} " id="email" name="email" placeholder=""  required="">
	  </div>
	  <div class="form-group col-md-7">
		<label for="password">Senha</label>
		<input type="password" class="form-control"   id="password" name="password" placeholder="" >
      </div>   
     
                       
	    <div class="form-row">
            <div class="form-group col-md-7">
            <label for="image">Fotos</label>
            <input type="file" class="form-control" id="image" name="image">
            </div>
                        
                        
			<div class="form-row">
				<div class="form-group col-md-10">
					<button type="submit" class="btn btn-primary" value="Inserir"  >Entrar</button>
				</div>

	
  </form>
	@stop