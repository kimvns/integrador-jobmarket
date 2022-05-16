<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerfilController extends Controller
{
    public function index(){
        return view('admin.perfil.index');

    }


    public function alterar(){
        return view('admin.perfil.alterar');


    }


    public function atualizar(Request $request){
      

       $user = $request->user();

        $data = $request->all();

        if($data['password'] !=null)
            $data['password'] = bcrypt($data['password']);
            else
            unset($data['password']);

         $data['image'] = $user->image;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            
                $name = $user->id.kebab_case($user->name);

                $extensition = $request->image->extension();
                $nameFile ="{$name}.{$extensition}";
                $data['image'] = $nameFile;

                $upload = $request->image->storeAS("user",$nameFile);
             
              
                if(!$upload)
                return redirect()
                ->back()
                ->with('error','Falha ao atualizar informaçoes ');
            }
        

        $update= $user->update($data);
    if($update)
    return redirect()
            ->route('admin.perfil')
            ->with('success','Sucesso ao atualizar');
    return redirect()
    ->back()
    ->with('error','Falha ao atualizar informaçoes ');

    }
}
