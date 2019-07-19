@extends('layouts.master')

@section('content')

<!-- Vericação de erros -->




<div class="container-contact100" id="formulario">
		<div class="cadastroEvento">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
			<form class="contact100-form validate-form"  action="/feed/{{ $modalidade->slug }}" method="post">
                @csrf
                <legend><b>{{ Auth::user()->name }}</b> crie um grupo de <b>{{ $modalidade->nome }}.</b> </legend>
                <h4><em>Match Sports, o melhor jeito de encontrar companhia para praticar esportes.</em></h4>
                <input type="text" name="slug" hidden value="{{$modalidade->slug}}"></input>
                <input type="hidden" name="modalidade_fk" value="{{ $modalidade->id_modalidade }}"></input>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"  class="form-control"></input>

                <br>
                <div class="wrap-input100 validate-input" data-validate="Nome do evento obrigatório">
                  <span class="label-input100" for="nome">Nome do Evento</span>
                  <input class="input100" type="text" name="nome" value="{{ old('nome') }}" placeholder="Escreva o nome do seu evento..." id="nome">
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Descreva o seu evento">
                  <span class="label-input100" for="Descrição">Descreva um pouco mais sobre seu evento</span>
                  <textarea class="input100" type="text" name="descricao" value="{{ old('descricao') }}" placeholder="O seu nível, como será o evento, jogo com número especifico de pessoas, etc.. " id="descrição"></textarea>
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome do evento obrigatório">
                  <span class="label-input100" for="inputAddress">Local do evento.</span>
                  <input class="input100" type="text" name="local" value="{{ old('local') }}" placeholder="Parque, Praça, Clube, rua, etc..." id="inputAddress">
                  <span class="focus-input100"></span>
                </div>


                <div class="wrap-input50 validate-input" data-validate="Coloque uma cidade valida.">
                  <span class="label-input100" for="inputCity">Cidade</span>
                  <input class="input100" type="text" name="cidade_uf" value="{{ old('cidade_uf') }}" id="inputCity">
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input50 validate-input">
                  <span class="label-input100" for="inputRegiao">Região</span>
                  <select class="input100" type="text" name="regiao" id="inputEstado">
                    <option value="Região">Selecione sua região:</option>
                    <option value="Centro">Centro</option>
                    <option value="Zona Norte">Zona Norte</option>
                    <option value="Zona Sul">Zona Sul</option>
                    <option value="Zona Leste">Zona Leste</option>
                    <option value="Zona Norte">Zona Oeste</option>
                  </select>
                </div>

                <div class="wrap-input50 validate-input" data-validate="Coloque data.">
                  <span class="label-input100" for="inputDate">Data:</span>
                  <input class="input100" type="text" name="data"  id="datepicker">
                  <span class="focus-input100"></span>
                </div>

                <div class="wrap-input50 validate-input" data-validate="Coloque data de nascimento.">
                  <span class="label-input100" for="inputHora">Hora:</span>
                  <input class="input100" type="text" name="hora" value="{{ old('hora') }}" id="inputHora">
                  <span class="focus-input100"></span>
                </div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
                            Crie o seu evento!!
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '0:+1',
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
  $("#inputHora").mask("00:00");
  $("#datepicker").mask("00/00/0000");
  </script>



@endsection
