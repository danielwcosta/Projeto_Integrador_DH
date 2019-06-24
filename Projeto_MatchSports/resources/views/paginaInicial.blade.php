@extends('layouts.master')

@section('content')
<!-- Menu -->
<div id="home" class="container-fluid">
    <div id="paginaInicial" class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/carousel1.jpg" class="img-responsive" alt="foto1" style="width:100%;">
                    <div class="carousel-caption">
                        <a href="/cadastroUsuario"> <button class="btn">Cadastre-se aqui!</button></a>
                        <p>Cadastre-se na melhor rede social de esportes do planeta!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel2.jpg" class="img-responsive" alt="foto2" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn">Cadastre-se aqui!</button>
                        <p>Se você não gosta de praticar esportes sozinho, encontrou o lugar certo.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel3.jpg" class="img-responsive" alt="foto3" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn">Cadastre-se aqui!</button>
                        <p>Aqui, você encontra pessoas como você!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel4.jpg" class="img-responsive" alt="foto4" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn">Cadastre-se aqui!</button>
                        <p>Num clique, você acha os grupos mais próximos de onde mora ou trabalha!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel5.jpg" class="img-responsive" alt="foto5" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn">Cadastre-se aqui!</button>
                        <p>Crie novos amigos e cuide da saúde se divertindo!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel6.jpg" class="img-responsive" alt="foto6" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn">Cadastre-se aqui!</button>
                        <p>Divulgue a MatchSports e espalhe esta idéia!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<section id="saiba-mais">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 texto-sm">
                <h1>Saiba mais...</h1>
                <hr>
                <p class="text-justify">Seja bem-vindo à MatchSports, a comunidade de esportes em grupo que conecta
                    pessoas buscando companhia para praticar atividade física. </p>
                 
                <p class="text-justify"> MatchSports é a solução para quem deseja fazer novos amigos enquanto movimenta
                    o corpo e cuida da saúde. Aqui, você encontra os grupos esportivos da modalidade de seu interesse. E
                    mais: localiza os mais próximos da sua residência, trabalho ou de onde estiver. </p>
                 
                <p class="text-justify">Correr, pedalar, jogar bola, caminhar... Participe dos chats, junte-se a um
                    grupo e bora gastar energia. Agora exercitar-se ficou ainda mais divertido! </p>

            </div>

            <div class="imagens-sm">
                <div class="col-lg-3 imagem-sm1">
                    <img class="img-fluid" src="img/ms04.jpg" alt="Imagem Basket">
                </div>
                <div class="col-lg-3 imagem-sm2">
                    <img class="img-fluid" src="img/ms02.jpg" alt="Imagem Natação">
                </div>
                <div class="col-lg-3 imagem-sm2">
                    <img class="img-fluid" src="img/ms01.jpg" alt="Imagem Futebol Americano">
                </div>
            </div>
        </div>
    </div>
</section>



<div id="modalidades" class="container">
    <div class="dropdown menu-suspenso">
      <h2>Modalidades</h2>
      <h4>Encontre um grupo da sua modalidade favorita aqui!!</h4>
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Modalidades
            <span class="caret"></span></button>
        <ul class="dropdown-menu scrollDropdown">


        @foreach ( $modalidades as $modalidade )
            <li><a href="/feed/{{ $modalidade->slug }}">{{ $modalidade->nome }}</a></li>
        @endforeach

        </ul>
    </div>
</div>

<section class="sectionModalidades">
  <h4>Ou por aqui...</h4>
    <div class="owl-carousel owl-theme carrossel">

    @foreach ( $modalidades as $modalidade )

        <div class="item logo">
            <a href="/feed/{{ $modalidade->slug }}">
                <img src="img/{{ $modalidade->logotipo }}" alt="{{ $modalidade->nome }}">
                <div class="caption">
                    <h3>{{ $modalidade->nome }}</h3>
                </div>
            </a>
        </div>
    @endforeach

    </div>
</section>
<section id="fale-conosco">
    <div class="container container-fc">
        <h3>Escolha a melhor forma de falar com a gente:</h3>
        <div id="panel" class="panel panel-default no-padding">
            <div class="panel-body no-padding">
                <form role="form" class="form-horizontal">
                    <div class="row-fluid">
                        <div class="col-md-7 col-sm-12 col-xs-12 banner">
                            <!-- Background image -->
                        </div>

                    </div>

                    <div class="col-md-5 col-sm-12 col-xs-12  padding border-left">
                        <p class="lead">Mensagem</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label label-default="" for="">Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label label-default="" for="">Assunto</label>
                                <input type="text" name="assunto" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label label-default="" for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label label-default="" for="">Telefone</label>
                                <input type="text" name="telefone" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <label label-default="" for="">Mensagem</label>
                                <textarea name="mensagem" rows="3" style="resize: none" class="form-control"></textarea>

                            </div>
                        </div>
                        <div class="row-fluid">
                            <button class="btn btn-primary enviar">Enviar</button>
                            <button class="btn btn-default limpar">Limpar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>

@stop
