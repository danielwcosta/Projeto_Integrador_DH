@extends('layouts.master')

@section('content')

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

<div class="container" id="wrap">
    <div id="formulario">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/feed/{{ $modalidade->slug }}" method="POST" accept-charset="utf-8" class="form" role="form">
                @csrf
                    <legend><b>{{ Auth::user()->name }}</b> crie um grupo de <b>{{ $modalidade->nome }}.</b> </legend>
                    <h4><em>Match Sports, o melhor jeito de encontrar seu parceiro.</em></h4>
                    <input type="text" name="slug" hidden value="{{$modalidade->slug}}">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="name">Nome do Evento</label>
                            <input type="text" name="nome" class="form-control" id="name" placeholder="Name"></input>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="Descrição">Descreva um pouco mais sobre seu evento</label>
                            <input type="text" name="descricao" class="form-control" id="descrição" placeholder="Detalhes do Evento"></input>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress">Local do evento.</label>
                            <input type="text" name="local" class="form-control" id="inputAddress"
                                placeholder="Ex: Parque, Praça, Clube, etc..."></input>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputCity">Cidade-UF</label>
                            <input type="text" name="cidade_uf" class="form-control" id="inputCity"></input>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="inputRegiao">Região da cidade</label>
                            <select name="regiao" class="form-control">
                                <option value="Região">Selecione sua região:</option>
                                <option value="Centro">Centro</option>
                                <option value="Zona Norte">Zona Norte</option>
                                <option value="Zona Sul">Zona Sul</option>
                                <option value="Zona Leste">Zona Leste</option>
                                <option value="Zona Norte">Zona Oeste</option>
                            </select>

                        </div>
                        <div class="form-group col-md-6">

                          <label>Data:</label>
                          <input type="text" name="data" id="datepicker" class="form-control"></input>

                        </div>
                        <div class="form-group col-md-6">

                          <label>Hora</label>
                          <input type="text" name="hora" class="form-control"></input>




                        </div>
                        <div class="form-group col-md-6">

                                <input type="hidden" name="modalidade_fk" value="{{ $modalidade->id_modalidade }}" class="form-control"></input>

                        </div>
                        <div class="form-group col-md-6">

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"  class="form-control"></input>
                        </div>
                    </div>


                        <div class="form-group col-md-12">
                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                            Crie seu Evento
                        </button>
                    </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
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
    dateFormat: 'yy-mm-dd',
      dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
      dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
      dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
      monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
  });

} );
</script>

@endsection
