<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealizadosController extends Controller
{
    public function index(){
        $objrealizados = resolve("App\Models\Concluido");        
        $realizados = $objrealizados->getAll();        

        $dadosContext = [
           'realizados' => $realizados
        ];
        return view('admin.realizados.index' , $dadosContext );
      

    }


    
    

}
