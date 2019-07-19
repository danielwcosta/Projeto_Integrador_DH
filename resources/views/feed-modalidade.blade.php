@extends('layouts.master')

@section('content')

<!-- Page Content -->
<div id="feed">
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <?php $eventos = $modalidade->evento; ?>



              <h1 class="my-4">Eventos de
            {{ $modalidade->nome }}
            </h1>
            @if (count($eventos) > 0)

            <!-- Blog Post -->
            @foreach ($eventos as $evento)


            <div class="card mb-4 evento">
                <div class="card-body">
                    <h2 class="card-title">{{ $evento->nome }}</h2>

                    <div class="img-feed">
                      <img class="card-img-top foto-post" src="{{ url('img') . '/' . $modalidade->logotipo }}" alt="{{ $modalidade->logotipo }}">
                    </div>

                    <div class="descricao-feed">
                        <p class="card-text"><b>Região:</b> {{ $evento->regiao }}</p>

                        <p class="card-text"><b>Local do evento:</b> {{ $evento->local }}</p>

                        <p class="card-text"><b>Data e hora:</b>  {{ $evento->data }} às {{ $evento->hora }}</p>

                        <p class="card-text"><b>Descrição do evento:</b>  {{ $evento->descricao }}</p>

                        <a href="/post/{{$evento->id_evento}}" class="botao_eventos btn dropdown-toggle">Entre no evento &rarr;</a>
                    </div>

                </div>
                    <div class="card-footer text-muted">
                        Postado em {{ $evento->created_at }} por
                        <a href="#"> {{ $evento->UserLogado->name }}</a>
                    </div>
                </div>
                @endforeach

                @else

                <p>Ainda não tem nenhum evento criado para {{ $modalidade->nome }}. = (</p>
                <p>Seja o primeiro criar um evento clicando no logo abaixo ou no botão ao lado.</p>

                <a href="/cadastroEvento/{{ $modalidade->id_modalidade }}">
                <div class="img-feedVazio">
                  <img class="card-img-top foto-feed-vazio" src="{{ url('img') . '/' . $modalidade->logotipo }}" alt="{{ $modalidade->logotipo }}">
                </div>
                </a>

                @endif
      <!-- Pagination -->

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Side Widget -->
                <div class="card my-4">
                    <h2 class="card-header">Como funciona: </h2>
                    <div class="card-body nav-lateral">
                        <p>Escolha um evento que mais te agrade e faça novas amizades praticando de esportes.</p>
                        <p>Nesta parte você escolhe o seu esporte conforme o seu nivel, localização e horario que mais se adeque a suas necessidades.</p>
                        <p>Mas caso você não encontre nenhum evento que te atenda crie o seu proprio evento!!</p>
                        <p>Dê um Match Sports!!!! </p>
                    </div>
                    <a href="/cadastroEvento/{{ $modalidade->id_modalidade }}" class="botao_criar-eventos btn btn-light dropdown-toggle">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crie um novo evento
                    </a>
                </div>

                <div class="card my-4">
                    <h4 class="card-header">Procure por outras modalidades:</h4>
                    <div class="dropup menu-suspenso menu-suspenso-feed">
                    <button class="botao_modalidades btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"> Modalidades
                            <span class="caret"></span></button>

                        <ul class="dropdown-menu scrolldropup">

                        @foreach ( $modalidades as $modalidade )
                            <li><a href="/feed/{{ $modalidade->slug }}">{{ $modalidade->nome }}</a></li>
                        @endforeach

                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
</div>



 @endsection
