@extends('layouts.master')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-10">

            <h1 class="post">Post
                <small>Corrida</small>
            </h1>


            @if (count($tarefasPendentes) > 0)

            <div class="panel panel-primary">

                <div class="panel-body panel-chat">

                    <ul class="chat">
                        @foreach($tarefasPendentes as $tarefa)

                        <li class="left clearfix">
                            <div class="pull-left">
                                <img src="http://placehold.it/50/55C1E7/fff&amp;text=U" alt="User Avatar"
                                    class="img-circle">
                            </div>
                            <div class="chat-body clearfix dentrochat">

                                <div class="header">
                                    <small class=" text-muted pull-right"><span
                                            class="glyphicon glyphicon-time"></span>{{ $tarefa->created_at }}</small>
                                    <strong class="primary-font texto-chat"> {{ Auth::user()->name }}</strong>
                                </div>
                                <small class="pull-right text-muted">
                                    <a href="/concluir-tarefa/{{ $tarefa->id }}">Excluir</a>
                                </small>

                                <p texto-chat2>{{ $tarefa->description }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                
                
                
                
                
                
                @endif
                <form action="/nova-tarefa" method="POST">
                <div class="panel-footer">
                    <div class="input-group">
                        @csrf
                        <input type="hidden" name="evento_fk" value="{{ $evento->id_evento }}">
                        <!-- <label class="form-control">Tarefa</label> -->
                        <textarea style="resize: none" name="description" class="form-control input-sm"></textarea>
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-lg" type="submit">
                                Enviar</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    </div>
    
    @endsection