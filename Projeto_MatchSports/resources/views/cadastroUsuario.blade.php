@extends('layouts.master')

@section('content')


<div class="container" id="wrap">
    
<!-- Vericação de erros -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
        @endif
    </div> 


    <div class="row" id="formulario">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="{{ route('register') }}" accept-charset="utf-8" class="form" role="form">
                @csrf
                <legend><b>Cadastre-se</b></legend>
                <h4><em>Match Sports, o melhor jeito de encontrar seu parceiro.</em></h4>

                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="name">Nome Completo</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="inputPassword4"
                                placeholder="Senha">
                            <span class="input-group-btn">
                                <button class="btn btn-default toggle-password" type="button">
                                    <span class="glyphicon glyphicon-eye-close field-icon" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirmar Senha</label>
                        <input id="password-field-confirm" type="password" class="form-control"
                            name="password_confirmation" value="secret">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="inputAddress"
                            placeholder="Avenida/Rua">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="inputCity">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputCEP">CEP</label>
                        <input type="text" name="cep" class="form-control" id="inputCEP" maxlength="8">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="inputEstado">Estado</label>
                        <select name="estado" id="estado">
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
                </div>

                <div class="form-group col-md-12">
                    <label>Data de Nascimento</label>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <input type="text" name="data_nascimento" id="datepicker" class="form-control"></<input>

                        </div>
                        <label>Sexo : </label> <label class="radio-inline">
                            <input type="radio" name="sexo" value="M" id=male /> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sexo" value="F" id=female /> Female
                        </label>
                    </div>
                </div>

                <div class="form-group col-md-12">
                </div>

                <div class="form-group col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Eu aceito os termos e condições.</label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <a href="{{ url('/auth/facebook')}}" class="btn btn-fb btn-block"><i
                            class="fa fa-facebook"></i>Cadastre com Facebook</a>
                </div>

                <div class="form-group col-md-6">
                    <a href="{{ url('/auth/google')}}" class="btn btn-tw btn-block"><i
                            class="fa fa-google+"></i>Cadastre com Google+</a>

                </div>

                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                    Criar minha conta</button>
        </div>
    </form>
    
</div>
</div>


</div>
<br>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
    
  } );
  </script>

@endsection