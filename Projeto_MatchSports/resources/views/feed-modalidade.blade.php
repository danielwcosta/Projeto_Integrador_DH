@extends('layouts.master')

@section('content')

<!-- Page Content -->
<div id="feed">
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <?php $eventos = $modalidade->evento; ?>



            <h1 class="my-4">Eventos
              <small>{{ $modalidade->nome }}</small>
            </h1>


            <a href="/cadastroEvento/{{ $modalidade->id_modalidade }}" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crie um novo evento
            </a>
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

                        <a href="/post/{{$evento->id_evento}}" class="btn btn-primary">Entre no evento &rarr;</a>
                    </div>

                </div>
                    <div class="card-footer text-muted">
                        Postado em {{ $evento->created_at }} por
                        <a href="#">Douglas</a>
                    </div>
                </div>
                @endforeach

      <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Antigos</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Novos &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Procure o seu evento:</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite aqui...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Match Sports!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h3 class="card-header">Como funciona: </h3>
                    <div class="card-body nav-lateral">
                        <p>Escolha um evento que mais te agrade e faça novas amizades praticando de esportes.</p>
                        <p>Nesta parte você escolhe o seu esporte conforme o seu nivel, localização e horario que mais se adeque a suas necessidades.</p>
                        <p>Mas caso você não encontre nenhum evento que te atenda crie o seu proprio evento!!</p>
                        <p>Dê um Match Sports!!!! </p>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
</div>

 @endsection
