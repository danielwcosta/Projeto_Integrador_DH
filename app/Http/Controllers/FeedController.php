<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modalidades;
use App\Evento; // para chamar o modal evento.php
use App\User;



class feedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function exibirFeed()
    // {
    //     return view('feed');
    // }
    //
    // public function exibirEventos()
    // {
    //     $eventos = Eventos::all();
    //     return view('feed-modalidade')->with('eventos',$eventos);
    // }

    public function exibirDetalhes($slug)
    {
      $modalidades = Modalidades::all();
      $modalidade = Modalidades::where('slug', '=',$slug)->get(); // find() procura obrigatoriamente pelo id PK

      return view('feed-modalidade')
      ->with('modalidades',$modalidades)
      ->with('modalidade',$modalidade[0]);
    }

 public function salvarEvento(Request $request)
 {
     $request->validate([
         'nome'=> 'required|max:100',
         'descricao'=> 'required|max:1000',
         'regiao'=> 'required|max:45',
         'local'=> 'required|max:45',
         'cidade_uf'=> 'required|max:45',
         'data'=>'required|max:11',
         'hora'=>'required|max:8',
         'modalidade_fk'=>'required',
         'user_id'=>'required'
     ]);

     // criando novo evento
        $evento = new Evento;

        $evento->nome = $request->input('nome');
        $evento->descricao = $request->input('descricao');
        $evento->regiao = $request->input('regiao');
        $evento->local = $request->input('local');
        $evento->cidade_uf = $request->input('cidade_uf');

        $origDate = $request->input('data');
        $date = str_replace('/', '-', $origDate );
        $newDate = date("Y-m-d", strtotime($date));
        $evento->data = $newDate;

        $evento->hora = $request->input('hora');
        $evento->modalidade_fk = $request->input('modalidade_fk');
        $evento->user_id = $request->input('user_id');

        $evento->save();

     // return redirect()->withInput();
     // $this->exibirDetalhes("capoeira");

     return redirect()->action("FeedController@exibirDetalhes", ['slug'=>$request->slug]);
     ;
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
    public function store(Request $request)
    {
        //
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
