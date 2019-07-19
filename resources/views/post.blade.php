@extends('layouts.master')

@section('content')


<div class="container-fluid post-responsive">
    <div class="row">
        <div class="col-xs-9 view-post view-chat">
            @if (count($tarefasPendentes) > 0)
            <div class="panel panel-primary painel-primario">

                <div class="panel-body panel-chat" id="scrollbarBottom">

                    <ul class="chat" id="aFazer">

                        @foreach($tarefasPendentes as $tarefa)
                        <li class="left clearfix">
                            <div class="pull-left">
                                <img class="photo-chat img-circle"src="{{$tarefa->UserLogado->photo}}" alt="User Avatar"
                                    class="img-circle">
                            </div>
                            <div class="chat-body clearfix dentrochat">

                                <div class="header">

                                    <small class=" text-muted pull-right"><span
                                            class="glyphicon glyphicon-time"></span>{{ $tarefa->data_hora }}</small>


                                    @isset($tarefa->UserLogado)
                                    <strong class="primary-font texto-chat"> {{ $tarefa->UserLogado->name }}</strong>
                                    @endisset
                                </div>

                                <p texto-chat2>{{ $tarefa->description }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @else
                <div class="panel panel-primary painel-primario">

                    <div class="panel-body panel-chat " id="scrollbarBottom">

                        <ul class="chat">

                            <li class="left clearfix">
                                <div class="pull-left">
                                    <img class="photo-chat img-circle"src="\img\{{ $logoModalidade }}" alt="User Avatar"
                                        class="img-circle">
                                </div>
                                <div class="chat-body clearfix dentrochat">

                                    <div class="header">

                                        <strong class="primary-font texto-chat"> Match Sports</strong>
                                    </div>

                                    <p texto-chat2>Converse por aqui com os seus amigos...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endif
                <form action="/nova-tarefa" method="POST" id="formulario-post">
                    <div class="panel-footer footer-painel">
                        <div class="input-group">
                            @csrf
                            <input type="hidden" name="evento_fk" value="{{ $evento->id_evento }}">
                            <!-- <label class="form-control">Tarefa</label> -->
                            <textarea style="resize: none" name="description" class="form-control input-sm" placeholder="Escreva aqui sua mensagem..." id="textArea"></textarea>
                            <span class="input-group-btn span-btn-enviar">
                                <button class="btn btn-chat btn-lg btn-enviar" type="submit" onclick="return validar()">Enviar</button>
                            </span>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        <div class="col-xs-2 view-post view-logo">
          <a href="/feed/{{ $slugModalidade }}">
          <h1 class="post">{{ $nomeModalidade }}</h1>
      <img class="chat-logo img-circle"src="\img\{{ $logoModalidade }}" alt="Logo MatchSports"
          class="img-circle">
          <p class="post-evento">Clique aqui e volte aos eventos de {{ $nomeModalidade }}</p>
          </a>
        </div>
      </div>


  </div>
</div>

<script type="text/javascript" src="{{ url('js/post.js') }}"></script>
@endsection
