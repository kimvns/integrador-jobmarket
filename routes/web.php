<?php
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){ 
    $this->get('financeiro/{id}', 'FinanceiroController@index')->name('admin.financeiro');
    $this->get('solicitacoes', 'SolicitacoesController@index')->name('admin.solicitacoes');
    $this->get('perfil', 'PerfilController@index')->name('admin.perfil');
        
    $this->get('realizados', 'RealizadosController@index')->name('admin.realizados');
    $this->get('cancelados', 'CanceladosController@index')->name('admin.cancelados');
    $this->get('pendentes', 'PendentesController@index')->name('admin.pendentes');
    $this->get('relatorio', 'RelatorioController@index')->name('admin.relatorio');
    $this->get('fornecedor', 'FornedoController@index')->name('admin.fornecedor');
    $this->get('Clientes/cadastro', 'ClientesController@index')->name('admin.Clientes');
    $this->get('Clientes/lista', 'ClientesController@lista')->name('admin.Clientes');
    $this->get('fornecedor/lista', 'FornedoController@lista')->name('admin.fornecedor');

    $this->get("Clientes/editar", 'ClientesController@editar')->name('admin.Clientes');


    $this->get('/', 'AdminController@index')->name('admin');
        
});


$this->post('atualizar', 'Admin\PerfilController@atualizar')->name('atualizar');

$this->get('alterar', 'Admin\PerfilController@alterar')->name('editar');

//route::get('concluido', 'RealizadosController@index')->name('admin.realizados');



$this->get('/', function () {
    return redirect("admin");
});

//Route::get('clientes/cadastrar', "App\Clientes\ControllerCliente@cadastrar");

Route::post("financeiro/inserir", 'Admin\FinanceiroController@inserir');


Route::get("/fornecedor/inserir", 'FornedoController@mostrar_inserir');

Route::get("/admin/fornecedor/{id}", 'Admin\FornedoController@mostrar_update');

Route::post("/fornecedor/inserir", 'Admin\FornedoController@inserir');

Route::post("/Cliente/inserir", 'Admin\ClientesController@inserir');




Route::post ( "api/aceitar/solicitacoes" , function () {   
    
    return response()->json([
        "status" => false,
        "mensagem" => "deu certo",
        "chave" => $chave
    ]);
});

Route::get("aceitar/{key}" , "Admin\SolicitacoesController@aceitarSolicitacoes");
Route::get("cancelar/{key}" , "Admin\SolicitacoesController@cancelarSolicitacoes");

Route::get("aceitar_pendencia/{key}" , "Admin\PendentesController@aceitarPendencia");
Route::get("cancelar_pendencia/{key}" , "Admin\PendentesController@cancelarPendencia");




Route::get("visualizar/{key}" , function ( $key ) {   

    Route::get("/admin/pendentes/", 'Admin\PendentesController@cancelados');

   // return redirect("admin/cancelados");
   
});




Route::get("editar/{key}" , "Admin\ClientesController@editar");

/*Route::get("editar/{key}" , function ( $key ) {   

    return redirect("admin/Clientes/editar");
   
});*/







Auth::routes();


Route::get("update/{id}/{nome}", function ( $id , $nome ) {
    
    $Fornecedor = resolve("App\Models\Fornecedore");
    /*$Fornecedor = $Fornecedor->where("idfor", $id)->first();
    $Fornecedor->nomefor = $nome;
    $Fornecedor->save();*/
    
    $Fornecedor->where(
        'idfor' , $id
    )->update([
        'nomefor' => $nome
    ]);
});

