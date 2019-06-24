<?php

use Illuminate\Database\Seeder;
use App\Modalidades;

class ModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $modalidade   = new Modalidades;
      $modalidade->nome = 'Badminton';
      $modalidade->logotipo = 'logobadminton.png';
      $modalidade->slug = 'badminton';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Basquete';
      $modalidade->logotipo = 'logobasquete.png';
      $modalidade->slug = 'basquete';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Bicicleta';
      $modalidade->logotipo = 'logobicicleta.png';
      $modalidade->slug = 'bicicleta';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Boliche';
      $modalidade->logotipo = 'logoboliche.png';
      $modalidade->slug = 'boliche';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Caminhada';
      $modalidade->logotipo = 'logocaminhada.png';
      $modalidade->slug = 'caminhada';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Capoeira';
      $modalidade->logotipo = 'logocapoeira.png';
      $modalidade->slug = 'capoeira';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Corrida';
      $modalidade->logotipo = 'logocorrida.png';
      $modalidade->slug = 'corrida';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Funcional';
      $modalidade->logotipo = 'logofuncional.png';
      $modalidade->slug = 'funcional';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Futebol Americano';
      $modalidade->logotipo = 'logofuteamericano.png';
      $modalidade->slug = 'futebol_americano';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Futebol';
      $modalidade->logotipo = 'logofutebol.png';
      $modalidade->slug = 'futebol';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Handeball';
      $modalidade->logotipo = 'logohandeball.png';
      $modalidade->slug = 'handeball';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Rugby';
      $modalidade->logotipo = 'logorugby.png';
      $modalidade->slug = 'rugby';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Sinuca';
      $modalidade->logotipo = 'logosinuca.png';
      $modalidade->slug = 'sinuca';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Skate';
      $modalidade->logotipo = 'logoskate.png';
      $modalidade->slug = 'skate';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Slackline';
      $modalidade->logotipo = 'logoslackline.png';
      $modalidade->slug = 'slackline';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Bicicleta';
      $modalidade->logotipo = 'logobicicleta.png';
      $modalidade->slug = 'bicicleta';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Stand Up Paddle';
      $modalidade->logotipo = 'logostandup.png';
      $modalidade->slug = 'stand_up';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Surf';
      $modalidade->logotipo = 'logosurf.png';
      $modalidade->slug = 'surf';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Tênis';
      $modalidade->logotipo = 'logotenis.png';
      $modalidade->slug = 'tenis';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Tênis de mesa';
      $modalidade->logotipo = 'logotenismesa.png';
      $modalidade->slug = 'tenis_mesa';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Volei';
      $modalidade->logotipo = 'logovoley.png';
      $modalidade->slug = 'volei';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Volei de Praia';
      $modalidade->logotipo = 'logovoleypraia.png';
      $modalidade->slug = 'volei_praia';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Xadrez';
      $modalidade->logotipo = 'logoxadrez.png';
      $modalidade->slug = 'xadrez';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Yoga';
      $modalidade->logotipo = 'logoyoga.png';
      $modalidade->slug = 'yoga';
      $modalidade->save();

      $modalidade   = new Modalidades;
      $modalidade->nome = 'Outros';
      $modalidade->logotipo = 'logooutros.png';
      $modalidade->slug = 'outros';
      $modalidade->save();
    }
}
