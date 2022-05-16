<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    public function index( $key ){

        $objConcluido = resolve("App\Models\Concluido");
        $objCliente = resolve("App\Models\Cliente");
        

        $id_cliente = $objConcluido->where( 'idconc', $key)->first()->value( 'solicitacoes_servicos_subcategorias_categorias_clientes_idcli' );
        $descconc = $objConcluido->where( 'idconc', $key)->first()->value( 'descconc' );
        
        $cliente = $objCliente->where( "idcli" , $id_cliente )->first();


        $dadosToView = [
            "cliente" => $cliente,
            "descricao" => $descconc,
            "idconcluido" => $key
        ];


        return view('admin.financeiro.index' , $dadosToView );

    }


    public function inserir( Request $request ){
            
        \DB::beginTransaction();
        
        try {

            $cliente = resolve("App\Models\cliente");
            $financeiro = resolve("App\Models\Financeiro");
         

            $financeiro->datafin=$request->input("input_data");
            $financeiro->valorfin=$request->input("input_valor");
            $financeiro->totalfin=$request->input("input_hora");
            $financeiro->concluidos_idconc=$request->input("input_id_concluido");
            $financeiro->save();
            

           
            $telefone->clientes_idcli = (int) $cliente->idcli;
            $telefone->telefone = $request->input("input_Telefone");
            $telefone->save();  

            $dadosView = [
                "mensagem"      => "Dados inserido com sucesso" 
            ];            
            \DB::commit();
            return view( 'admin' , $dadosView );
            
        } catch (\Exception $e ) {
            \DB::rollback();
            dd ( $e );

        }       
}
}
