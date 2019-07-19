@extends('layouts.master')

@section('content')


<div class="container-contact100" id="paginaLogin">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="{{ route('login') }}" method="post">
                @csrf
                <h3 class="contact100">
                <b>Faça login para acessar os eventos!</b>
                </h3>
                <br>
                <div class="wrap-input100" data-validate="Email obrigatório: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Escreva seu email" value="{{ old('email') }}" autocomplete="email">
                    <span class="focus-input100"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Senha</span>
					<input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Digite sua senha" autocomplete="current-password">
                    <span class="focus-input100"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                        @endif
                    </div>
                </div>
                Login via
                <div class="social-buttons">
                    <a href="{{ url('/auth/facebook')}}" class="btn btn-fb"><i class="fa fa-facebook"></i>
                        Facebook</a>
                    <a href="{{ url('/auth/google')}}" class="btn btn-tw"><i class="fa fa-google+"></i>
                        Google+</a>
                </div>
                <div class="bottom text-left">
                        Novo por aqui? <a href="/cadastroUsuario"><b>Cadastre-se</b></a>
                </div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
                            {{ __('Login') }}
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
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

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

@endsection