<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mensagem;
use App\Evento;

class PostController extends Controller
{
    
    public function inicio($id){
        // vai lá em tarefas onde a coluna done é igual a false
        $tarefasPendentes = Mensagem::where('evento_fk','=',$id)->get();
        $evento = Evento::find($id);
        // get importa a tarde para o inicio
        return view('post')
            ->with('tarefasPendentes',$tarefasPendentes)
            ->with('evento', $evento);

    }

    public function novaTarefa(Request $request){
        // carrega uma nova tarefa no banco de dados
        $tarefa = new Mensagem;
        $tarefa->description = $request->input('description');
        $tarefa->done=false;
        // pegar o usuario q esta logado a partir do auth
        $tarefa->user_id= auth()->user()->id;
        $tarefa->evento_fk = $request->input('evento_fk');
        $tarefa->save();
        // depois que salva volta para a pagina principal
        return redirect("/post/" . $request->input('evento_fk'));
    }

    public function concluirTarefa($id_mensagem){
        // pega a tarefa e troca o done para true
        $tarefa=Mensagem::find($id_mensagem);
        $tarefa->done=true;
        $tarefa->save();
        return redirect ('/post');
    }
}
