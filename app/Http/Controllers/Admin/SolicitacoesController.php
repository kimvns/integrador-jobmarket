<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitacoesController extends Controller
{
    public function index(){
        $objsolicitacoes = resolve("App\Models\Solicitaco");
        $solicitacoes = $objsolicitacoes->getAll( 1 );
        $dadosContext = [
           'solicitacoes' => $solicitacoes,
           "view"           => "solicitacoes"
        ];
        return view('admin.pedidos.index', $dadosContext);
    }


    public function aceitarSolicitacoes ( Request $request , $key ) {
            try {  
                $objsolicitacoes = resolve("App\Models\Solicitaco"); 
                $objpendetes = resolve("App\Models\Pendencia"); 
                $objstatus = resolve("App\Models\Status"); 

                $solicitacoes = $objsolicitacoes->where('idsol' , $key )->first(); 
                if ( $solicitacoes == null ):
                    throw new \Exception ("Não encontramos resultados.");
                endif;            
                $solicitacoes->status_idstatus =1 ;
                $solicitacoes->save();      
                
                
                $objpendetes->solicitacoes_status_idstatus =$objstatus->idstatus=1 ;
                $objpendetes->descpen =$solicitacoes->descsol ;
                $objpendetes->solicitacoes_idsol=$key;
                $objpendetes->solicitacoes_servicos_idserv=$solicitacoes->servicos_idserv;
                $objpendetes->solicitacoes_servicos_subcategorias_idsubc=$solicitacoes->servicos_subcategorias_idsubc;
                $objpendetes->solicitacoes_servicos_subcategorias_categorias_idcat=$solicitacoes->servicos_subcategorias_categorias_idcat;
                $objpendetes->solicitacoes_servicos_subcategorias_categorias_clientes_idcli=$solicitacoes->servicos_subcategorias_categorias_clientes_idcli;
                $objpendetes->solicitacoes_servicos_fornecedores_idfor=$solicitacoes->servicos_fornecedores_idfor;
                $objpendetes->save();
                return redirect('admin/pendentes');
            } catch ( \Exception $e ) {
                dd ( $e );
            }
        }



    
    public function cancelarSolicitacoes ( Request $request , $key ) {
        try {  
            $objsolicitacoes = resolve("App\Models\Solicitaco"); 
            $objcancelar = resolve("App\Models\Cancelado"); 
            $solicitacoes = $objsolicitacoes->where('idsol' , $key )->first(); 
            if ( $solicitacoes == null ):
                throw new \Exception ("Não encontramos resultados.");
            endif;            
            $solicitacoes->status_idstatus =3 ;
            $solicitacoes->save();          
            $objcancelar->solicitacoes_status_idstatus =$solicitacoes->status_idstatus =3 ;
            $objcancelar->desccanc =$solicitacoes->descsol ;
            $objcancelar->solicitacoes_idsol=$key;
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
