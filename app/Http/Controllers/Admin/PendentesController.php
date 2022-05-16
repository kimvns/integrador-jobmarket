<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendentesController extends Controller
{
    public function index(){

        $objPendencias = resolve("App\Models\Pendencia");        
        $pendencias = $objPendencias->getAll();  
        
        $dadosContext = [
           'pendencias' => $pendencias
        ];

        return view('admin.pendentes.index' , $dadosContext );

    }

    public function aceitarPendencia( Request $request , $key ) {
        try {  

            $objsolicitacoes = resolve("App\Models\Solicitaco"); 
            $objConcluidos = resolve("App\Models\Concluido"); 

            # MUDAR STATUS PARA CONCLUID


            $solicitacoes = $objsolicitacoes->where('idsol' , $key )->first(); 

            if ( $solicitacoes == null ):
                throw new \Exception ("Não encontramos resultados.");
            endif;            

            $solicitacoes->status_idstatus = 2;
            $solicitacoes->save();
            
            # --- fim do mudar status ----

            $objConcluidos->descconc = $solicitacoes->descsol;
            $objConcluidos->solicitacoes_idsol = $solicitacoes->idsol;
            $objConcluidos->solicitacoes_status_idstatus = $solicitacoes->status_idstatus;
            $objConcluidos->solicitacoes_servicos_idserv = $solicitacoes->servicos_idserv;
            $objConcluidos->solicitacoes_servicos_subcategorias_idsubc = $solicitacoes->servicos_subcategorias_idsubc;
            $objConcluidos->solicitacoes_servicos_subcategorias_categorias_idcat = $solicitacoes->servicos_subcategorias_categorias_idcat;
            $objConcluidos->solicitacoes_servicos_subcategorias_categorias_clientes_idcli = $solicitacoes->servicos_subcategorias_categorias_clientes_idcli;
            $objConcluidos->solicitacoes_servicos_fornecedores_idfor = $solicitacoes->servicos_fornecedores_idfor;
            $objConcluidos->save();

            return redirect('admin/realizados');
            
        } catch ( \Exception $e ) {
            dd ( $e );
        }
    }




public function cancelarPendencia ( Request $request , $key ) {
    try {  
        $objsolicitacoes = resolve("App\Models\Solicitaco"); 
        $objcancelar = resolve("App\Models\Cancelado"); 
        $solicitacoes = $objsolicitacoes->where('idsol' , $key )->first(); 
        if ( $solicitacoes == null ):
            throw new \Exception ("Não encontramos resultados.");
        endif;            
        $solicitacoes->status_idstatus = 3;
        $solicitacoes->save();          
        $objcancelar->solicitacoes_idsol= $solicitacoes->idsol;

        $objcancelar->solicitacoes_status_idstatus = $solicitacoes->status_idstatus=3;
        $objcancelar->desccanc =$solicitacoes->descsol ;
        $objcancelar->solicitacoes_servicos_idserv=$solicitacoes->servicos_idserv;
        $objcancelar->solicitacoes_servicos_subcategorias_idsubc=$solicitacoes->servicos_subcategorias_idsubc;
        $objcancelar->solicitacoes_servicos_subcategorias_categorias_idcat=$solicitacoes->servicos_subcategorias_categorias_idcat;
        $objcancelar->solicitacoes_servicos_subcategorias_categorias_clientes_idcli=$solicitacoes->servicos_subcategorias_categorias_clientes_idcli;
        $objcancelar->solicitacoes_servicos_fornecedores_idfor=$solicitacoes->servicos_fornecedores_idfor;
        $objcancelar->save();
        return redirect('admin/cancelados');
    } catch ( \Exception $e ) {
        dd ( $e );
    }
}




    
}
