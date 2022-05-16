<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    public function index(){       
       
        return view('admin.Clientes.cadastro');

    }


    public function editar( $id_cliente ) {       
        
        $cliente = resolve("App\Models\Cliente");

        $cliente = $cliente->getAllEdit ( $id_cliente );
        dd ( $cliente );
        $dadosToView = [
            'cliente'   => $cliente
        ];
        return view('admin.Clientes.editar' , $dadosToView );

    }


    public function lista(){    
        
        
        $objcliente = resolve("App\Models\cliente");
        $clientes = $objcliente->getAll();
        $dadosContext = [
           'clientes' => $clientes,
       
        ];     
        return view('admin.Clientes.lista', $dadosContext);

        

    }

    public function inserir( Request $request ){
            
        \DB::beginTransaction();
        
        try {

            $cliente = resolve("App\Models\cliente");
            $telefone = resolve("App\Models\Telefone");
            $endereco = resolve("App\Models\Endereco");
            $estados = resolve("App\Models\Estado");
            $cidade = resolve("App\Models\Cidade");
            

            $cliente->nomecli = $request->input('input_nome_cli');
            $cliente->dncli = $request->input('input_datan');  
            $cliente->sexocli = $request->input('input_sexo');
            $cliente->cpfcli = $request->input('input_cpf');
            $cliente->save();


            $estados->siglaest = $request->input('inputestados');
            $estados->save();

            $cidade->idcid = (int) $estados->idest ;
            $cidade->estados_idest=(int) $estados->idest;
            $cidade->nomecid=$request->input('inputcidade');
            $cidade->save();
     
            $endereco->clientes_idcli =(int) $cliente->idcli; 
            $endereco->cidades_idcid =(int) $cidade->idcid; 
            $endereco->logend =$request->input('inputRua');
            $endereco->baiend =$request->input('inputBairo'); 
            $endereco->numend =$request->input('inputnumero'); 
            $endereco->compend =$request->input('inputcomplemento'); 
            $endereco->cepend =$request->input('inputcep'); 
            $endereco->save();
          
           
            $telefone->clientes_idcli = (int) $cliente->idcli;
            $telefone->telefone = $request->input("input_Telefone");
            $telefone->save();  

            $dadosView = [
                "mensagem"      => "Cliente inserido com sucesso" 
            ];            
            \DB::commit();
            return view( 'admin.Clientes.cadastro' , $dadosView );
            
        } catch (\Exception $e ) {
            \DB::rollback();
            dd ( $e );

        }       

    }
}
