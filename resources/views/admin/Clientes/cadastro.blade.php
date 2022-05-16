@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
<section class="content-header">
		<h1>
			Cadastrar Clientes
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
			<li><a href="#">Clientes</a></li>
			<li class="active">Cadastrar Clientes</li>
		</ol>
	</section>
		
	
	<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('inputRua').value=("");
            document.getElementById('inputBairo').value=("");
            document.getElementById('inputcidade').value=("");
            document.getElementById('inputestados').value=("");
          //  document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('inputRua').value=(conteudo.logradouro);
            document.getElementById('inputBairo').value=(conteudo.bairro);
            document.getElementById('inputcidade').value=(conteudo.localidade);
            document.getElementById('inputestados').value=(conteudo.uf);
           // document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('inputRua').value="...";
                document.getElementById('inputBairo').value="...";
                document.getElementById('inputcidade').value="...";
                document.getElementById('inputestados').value="...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

		</script>
		
@stop

@section('content')

@if( isset($mensagem) && $mensagem != "" )
		<div class="alert alert-success">{{ $mensagem }}</div>
@endif


<form action="{{ url('/Cliente/inserir') }}" method="POST"  class="p-0"> 
		
		{{ csrf_field() }}
		<div class="callout callout-success">
				<h4>Cadastrar Cliente</h4>
		
				<p>Preencha os dados do cliente a seguir .</p>
			</div>

		<div class="box box-success">
				<div class="box-body">
		<div class="card-header bg-dark text-white text-center my-2">
				<h3>Dados do Cliente</h3></br></br>
		</div>
	
		
	<div class="form-row">
		<div class="form-group col-md-12">
			<label class="font-weight-bold">NOME</label>
			<input type="text" class="form-control" id="input_nome_cli" name="input_nome_cli"  required="" value="{{ isset($fornecedor->nomefor) ? $fornecedor->nomefor : "" }}">
		</div>
	</div>
	
	<div class="form-row">
		<div class="form-group col-md-12">
			<label class="font-weight-bold">CPF</label>
			<input type="text" class="form-control" id="input_cpf" name="input_cpf"  required="">
		</div>
	</div>

	<div class="form-row">

		<div class="form-group col-md-4">
			<label class="font-weight-bold">SEXO</label>
			<select class="form-control" name="input_sexo" id="input_sexo"  required="" >
					<option selected>Escolha uma opção</option>
							<option>Masculino</option>
							<option>Feminino</option>
		
				</select>
		</div>

		<div class="form-group col-md-4">
			<label class="font-weight-bold">DATA DE NASCIMENTO</label>
			<input type="date" class="form-control"  name="input_datan" id="input_datan"  required="" >
		</div>

		<div class="form-group col-md-4">
			<label class="font-weight-bold">TELEFONE</label>
			<input type="text" class="form-control" id="input_Telefone" name="input_Telefone"  required="">
		</div>

	</div>
	

		<div class="form-group col-md-12"  >
				<label for="inputcep">CEP:</label>
			<input class="form-control" name="inputcep" type="text" id="inputcep" value=""  
			onblur="pesquisacep(this.value);" /></label><br />
			</div>

	<div class="form-group col-md-12"  >
	  <label for="inputRua">Logradouro:</label>
	  <input type="text" class="form-control" id="inputRua" name="inputRua" >
	</div>
	<div class="form-group col-md-12">
	  <label for="inputBairo">Bairro:</label>
	  <input type="text" class="form-control" id="inputBairo"  name="inputBairo">
	</div>
	<div class="form-row">
	  <div class="form-group col-md-12">
		<label for="inputnumero">Número:</label>
		<input type="text" class="form-control" id="inputnumero" name="inputnumero" >
	  </div>
		<div class="form-row">
				<div class="form-group col-md-4">
				<label for="inputcomplemento">Complemento:</label>
				<input type="text" class="form-control" id="inputcomplemento" name="inputcomplemento">
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
					<label for="inputcidade">Cidade:</label>
					<input type="text" class="form-control" id="inputcidade" name="inputcidade" >
					</div>		

					<div class="form-row">
						<div class="form-group col-md-4">
						<label for="inputestados">Estado:</label>
						<input type="text"  class="form-control"  id="inputestados" name="inputestados">
						</div>
			<div class="form-row">
				<div class="form-group col-md-2">
					
					<button type="submit" class="btn btn-block btn-success btn-lg"value="Inserir">Salvar</button>					

				</div>
				
				<div class="form-group col-md-2">
					
					<button type="submit" class="btn btn-block btn-danger btn-lg"value="limpar">Limpar</button>					

				</div>
				
				
			</div>
		</div>
	
  </form>
	@stop

	

      
      
   
      