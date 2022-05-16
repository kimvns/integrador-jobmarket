<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class FornedoController extends Controller
{
    public function index(){
        return view('admin.fornecedor.index');

    }


    public function lista(){
        return view('admin.fornecedor.lista');

    }


    public function mostrar_inserir() {
        return view('Fornecedores.inserir');
    }

    public function mostrar_update( $id ) {

        $Fornecedor = resolve("App\Models\Fornecedore");
        $Fornecedor = $Fornecedor->where("idfor", $id)->first();

        $dadosView = [
            'fornecedor' => $Fornecedor
        ];

        return view('admin.fornecedor.index' , $dadosView);
    }


    public function inserir( Request $request ){
            
        try {

            
            $Fornecedor = resolve("App\Models\Fornecedore");
            $Fornecedor->nomefor = $request->input('input_nome_forn');
            $Fornecedor->cpf_cnpjfor = $request->input('input_cpf_cnpj');        
            $Fornecedor->save();
            $telefone = resolve("App\Models\Telefone");    
            
            $dadosView = [
                "mensagem"      => "Produto inserido com sucesso" 
            ];

            return view('admin.fornecedor.index' , $dadosView);
            
        } catch (\Exception $e ) {
            dd ( $e );
        }
        

    }





    

}
