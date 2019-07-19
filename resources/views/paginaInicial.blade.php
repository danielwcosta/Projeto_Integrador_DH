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
                        <a href="{{ url('/cadastroUsuario') }}"> <button class="btn">Cadastre-se aqui!</button></a>
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
                <h2>Faça amigos e pratique esportes!</h2>
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
      <h4>Encontre um grupo da sua modalidade favorita aqui!!</h4>
    <button class="botao_modalidades btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"> Modalidades
            <span class="caret"></span></button>

        <ul class="dropdown-menu scrollDropdown">

        @foreach ( $modalidades as $modalidade )
            <li><a href="/feed/{{ $modalidade->slug }}">{{ $modalidade->nome }}</a></li>
        @endforeach

        </ul>

    </div>
</div>

<section class="sectionModalidades ">
    <!-- <div class="owl-carousel owl-theme carrossel"> -->

    <div class = "container row">

        @foreach ( $modalidades as $modalidade )
            <div class="col-xs-2">
                <div class="item logo">
                    <a href="/feed/{{ $modalidade->slug }}">
                        @php
                            $path = '/img/' . $modalidade->logotipo;
                        @endphp
                        <img src="{{ url($path) }}" alt="{{ $modalidade->nome }}">
                        <div class="caption">
                            <h3>{{ $modalidade->nome }}</h3>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section id="fale-conosco">
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="{{ route('postContact') }}" method="post">
                @csrf
                @include('mensagem')
                <span class="contact100-form-title">
					Dúvidas ou sugestões, fale conosco!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nome obrigatório">
					<span class="label-input100">Nome</span>
					<input class="input100" type="text" name="name" placeholder="Escreva seu nome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Email obrigatório: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Escreva seu email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Mensagem obrigatória">
					<span class="label-input100">Messagem</span>
					<textarea class="input100" name="mensagem" placeholder="Sua mensagem . . ."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Enviar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <!-- <script type="text/javascript" src="{{ url('vendor/jquery/jquery-3.2.1.min.js') }}"></script> -->
    <!--===============================================================================================-->
    <!-- <script type="text/javascript" src="{{ url('vendor/animsition/js/animsition.min.js') }}"></script> -->
    <!--===============================================================================================-->
    <!-- <script type="text/javascript" src="{{ url('vendor/bootstrap/js/popper.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script> -->
    <!--===============================================================================================-->
    <!-- <script type="text/javascript" src="{{ url('vendor/select2/select2.min.js') }}"></script> -->
    <!-- <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script> -->
    <!--===============================================================================================-->
    <!-- <script type="text/javascript" src="{{ url('vendor/daterangepicker/moment.min.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ url('vendor/daterangepicker/daterangepicker.js') }}"></script> -->
    <!--===============================================================================================-->
    <!-- <script type="text/javascript" src="{{ url('vendor/countdowntime/countdowntime.js') }}"></script> -->
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('js/main.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</section>

@stop
