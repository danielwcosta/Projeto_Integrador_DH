@extends('layouts.master')

@section('content')



<!-- Vericação de erros -->

  <div class="container-contact100" id="formulario">
		<div class="cadastroUsuario">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
			<form class="contact100-form validate-form"  action="{{ route('register') }}" method="post">
                @csrf
                <h3><legend><b>Cadastre-se</b></legend></h3>
                <h4 class="contact100">
                <b><em>Match Sports, encontre seu amigo no esporte.</em></b></h4>
                <br>

                <div class="wrap-input100 social-buttons">
                  <span class="label-input100" >Cadastre-se via:</span>
                  <div class="input100">

                    <a href="{{ url('/auth/facebook')}}" class="btn btn-fb btn-group-lg"><i class="fa fa-facebook"></i>
                        Facebook</a>
                    <a href="{{ url('/auth/google')}}" class="btn btn-tw btn-group-lg"><i class="fa fa-google+"></i>
                        Google+</a>
                        <span class="focus-input100"></span>

                      </div>
                </div>

                <span class="label-input100" >Ou cadastre-se no site:</span>


                <div class="wrap-input100 validate-input" data-validate="Nome obrigatório">
                  <span class="label-input100" for="name">Nome Completo</span>
                  <input class="input100" type="text" name="name" value="{{ old('name') }}" placeholder="Escreva seu nome" id="name" >
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100" data-validate="Email obrigatório: ex@abc.xyz">
					<span class="label-input100" for="inputEmail4" >Email</span>
					<input class="input100 @error('email') is-invalid @enderror" id="inputEmail4" type="email" name="email" value="{{ old('email') }}" placeholder="Escreva seu email" autocomplete="email">
                    <span class="focus-input100"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="wrap-input50" data-validate="Senha obrigatória: Mín 8 caracteres.">

					<span class="label-input100" for="inputPassword4">Senha</span>
					<input class="input100 @error('password') is-invalid @enderror" id="inputPassword4" type="password" name="password" placeholder="Digite sua senha com 8 caracteres" >
          <!-- <span class="input-group-btn">
              <button class="btn toggle-password" type="button">
                  <span class="glyphicon glyphicon-eye-close field-icon" aria-hidden="true"></span>
              </button>
          </span> -->
                    <span class="focus-input100"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

        <div class="wrap-input50" data-validate="Precisa ser igual asenha.">
          <span class="label-input100" for="inputPassword4">Confirmar Senha</span>
          <input class="input100 @error('password') is-invalid @enderror" id="password-field-confirm" type="password" name="password_confirmation" placeholder="Confirme a senha" >
                            <span class="focus-input100"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
        </div>


                <div class="wrap-input100 validate-input" data-validate="Coloque um endereço valido.">
                  <span class="label-input100" for="inputAddress">Endereço</span>
                  <input class="input100" type="text" name="endereco" value="{{ old('endereco') }}"  placeholder="Avenida/Rua" id="inputAddress">
                  <span class="focus-input100"></span>
                </div>


                <div class="wrap-input50 validate-input" data-validate="Coloque uma cidade valida.">
                  <span class="label-input100" for="inputCity">Cidade</span>
                  <input class="input100" type="text" name="cidade" value="{{ old('cidade') }}" id="inputCity">
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input50 validate-input" data-validate="Selecione um Estado">
                  <span class="label-input100" for="inputEstado">Estado</span>
                  <select class="input100" type="text" name="estado" value="{{ old('estado') }}" id="inputEstado">
                    <option value="estado">Selecione o Estado</option>
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="am">Amazonas</option>
                    <option value="ap">Amapá</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="ro">Rondônia</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="se">Sergipe</option>
                    <option value="sp">São Paulo</option>
                    <option value="to">Tocantins</option>
                  </select>

                </div>

                <div class="wrap-input50 validate-input" data-validate="Coloque um CEP valido: xxxxx-xxx">
                  <span class="label-input100" for="inputCEP">CEP</span>
                  <input class="input100" type="text" name="cep" value="{{ old('cep') }}" id="inputCEP">
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input50 validate-input" data-validate="Coloque data de nascimento.">
                  <span class="label-input100" for="inputCity">Data de Nascimento</span>
                  <input class="input100" type="text" name="data_nascimento" value="{{ old('estado') }}" id="datepicker">
                  <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Coloque seu sexo.">
                  <span class="label-input100" for="inputCity">Sexo</span>
                  <div class="input100">

                    <input class="radio-inline" type="radio" name="sexo" value="M" id="male" checked> Masculino
                    <input class="radio-inline" type="radio" name="sexo" value="F" id="female"> Feminino
                  </div>

                </div>

                <!-- <div class="wrap-input100 validate-input" data-validate="Escolha sua foto">
                  <span class="label-input100" for="inputPhoto">Foto</span>
                  <div class="input-group">
                    <input type="text" class="input100 form-control" name="photo" placeholder="Escolha sua foto..." id="inputPhoto">
                    <span class="input-group-btn">
                      <span class="btn btn-default " style="font-family: Poppins-Regular;"> Upload</span>
                    </span>
                  </div>
                </div> -->



				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
                            {{ __('Criar minha conta') }}
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
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
    <!--===============================================================================================-->
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
    <!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
    <!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
    <!--===============================================================================================-->
    <!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script> -->


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '-90:-16',
      dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });

  } );
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script type="text/javascript">
  $("#inputCEP").mask("00000-000");
  $("#datepicker").mask("00/00/0000");
  </script>

@endsection
