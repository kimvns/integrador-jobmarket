<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CanceladosController extends Controller
{
    
        public function index(){
            $objcancelados = resolve("App\Models\Cancelado");

            
            $cancelados = $objcancelados->getAll();
           
    
            $dadosContext = [
               'cancelados' => $cancelados
            ];
    
            return view('admin.cancelados.index' , $dadosContext );
}


   

}


    
