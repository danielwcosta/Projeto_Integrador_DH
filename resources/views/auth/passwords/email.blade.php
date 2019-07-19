@extends('layouts.master')

@section('content')

<div class="container-contact100" id="paginaResetEmail">
		<div class="wrap-contact100">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
			<form class="contact100-form validate-form" action="{{ route('password.email') }}" method="post">
                @csrf
                <h3 class="contact100">
                <b>Esqueceu a sua senha???</b>
                </h3>
                <br>
                <div class="wrap-input100" data-validate="Email obrigatório: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Escreva seu email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
                            {{ __('Solicitar link para recuperar senha') }}
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

    <!-- <div id="dropDownSelect1"></div> -->

    <!--===============================================================================================-->
    <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <!-- =============================================================================================== -->
    <!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/select2/select2.min.js"></script> -->
    <!-- <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
    <!-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script> -->
@endsection
