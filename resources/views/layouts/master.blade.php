<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <meta name="description" content="Rede Social de Esportes para encontrar companhias para a prática de um esporte"> -->
        <!-- <meta name="keywords" content="Esportes Coletivos","Amigos Esportistas" > -->
        <title>Match Sports</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="shortcut icon" href="img/Logo Match Sports.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
        <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link href="{{ url('css/feed/blog-home.css') }}" rel="stylesheet">

        <!-- Configuração dos Formularios -->
        <link rel="icon" type="image/png" href="{{ url('images/icons/favicon.ico') }}" />
        <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}"> -->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css') }}"> -->
        <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}"> -->
        <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css') }}"> -->
        <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css') }}"> -->
        <!--===============================================================================================-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css') }}"> -->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('css/utilFaleConosco.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/mainFaleConosco.css') }}">
        <!--===============================================================================================-->

    </head>

    <body>
    <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="/#home"><img src="{{ url('img/nome.png') }}" title="MatchSports" /></a>

        </div>
        <button class="menu-mobile" title="menu" data-toggle="collapse" data-target=".menu-principal">&#9776;</button>
        <div class="collapse navbar-collapse menu-principal" id="myNavbar">
            <ul class="nav navbar-nav nav-responsive">
                <li class="active">
                <li><a href="/#saiba-mais">Saiba Mais</a></li>
                <li><a href="/#modalidades">Modalidades</a></li>
                <li><a href="/#fale-conosco">Fale Conosco</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

        @guest
                <li><a href="/cadastroUsuario"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span
                            class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Login via
                                    <div class="social-buttons">
                                        <a href="{{ url('/auth/facebook')}}" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="{{ url('/auth/google')}}" class="btn btn-tw"><i class="fa fa-google+"></i> Google+</a>
                                    </div>
                                    ou
                                    <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8"
                                        id="login-nav">
                                        @csrf

                                        <div class="form-group">
                                            <label for="email"
                                                class="sr-only">{{ __('E-Mail Address') }}</label>
                                                  e-mail
                                            <div class="col-md-12">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail cadastrado" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password"
                                                class="sr-only">{{ __('Password') }}</label>

                                            <div class="col-md-12">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                                    required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu sua senha?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                            <div class="bottom text-left">
                                                Novo por aqui? <a href="/cadastroUsuario"><b>Cadastre-se</b></a>
                                            </div>
                                    </form>
                                </div>

                            </div>
                        </li>
                    </ul>

    @else
                        <li class="nav-item dropdown">
                          <div class="navbar-header">
                            <img class="foto-login" src="{{ auth()->user()->photo }}" alt="">

                          </div>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div id="login-dp" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <ul class="menu-logado">
                              <li>{{ Auth::user()->name }}</li>
                              <li>{{ Auth::user()->email }}</li>
                            </ul>


                                <a class="dropdown-item btn btn-primary btn-danger btn-block btn-logout" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
  @endguest

        </div>

        <!-- <ul class="nav navbar-nav navbar-right"> -->

</nav>


@yield('content')


<footer id="rodapé" class="text-center">
        <div class="d-flex flex-row">
            <p>Copyright &copy; MatchSports</p>
        </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- <script src="js/owl.carousel.min.js"></script> -->


<!-- <script>
$('.owl-carousel').owlCarousel({
 loop: true,
 margin: 10,
 nav: true,
 responsive: {
     0: {
         items: 3
     },
     600: {
         items: 6
     },
     1000: {
         items: 10
     }
 }
})
</script> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });

  } );
  </script>
<script src="{{ url('js/main.js') }}"></script>

</body>

</html>
