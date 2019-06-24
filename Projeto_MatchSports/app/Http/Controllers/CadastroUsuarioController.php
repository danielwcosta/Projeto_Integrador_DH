<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // para chamar o modal user.php

class CadastroUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exibirCadastroUsuario()
    {
        return view('cadastroUsuario');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function novoUsuario(Request $request){
        //validando os dados informados pelo usuario
        $request->validate([
             'name'=> 'required|max:100',
             'email'=> 'required|max:100|unique:users',
             'password'=> 'required|min:8|max:100',
             'endereco'=> 'max:1000',
             'cidade'=> 'max:45',
             'cep' => 'string|max:9',
             'estado'=>'max:22',
             'data_nascimento'=>'max:11',
             'sexo'=>'max:10'
         ]);
        
        // criando novo usuario
        $usuario = new User;
        
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->endereco = $request->input('endereco');
        $usuario->cidade = $request->input('cidade');
        $usuario->cep = $request->input('cep');
        $usuario->estado = $request->input('estado');
        $usuario->data_nascimento = $request->input('data_nascimento');
        $usuario->sexo = $request->input('sexo');
        $usuario->save();
        
        return redirect('/paginaInicial');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
