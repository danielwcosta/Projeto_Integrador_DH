<?php $modalidades = [
        "Badminton"         => "logobadminton.png",
        "Basquete"          => "logobasquete.png",
        "Bicicleta"         =>"logobicicleta.png",
        "Boliche"           => "logoboliche.png",
        "Caminhada"         => "logocaminhada.png",
        "Capoeira"          => "logocapoeira.png",
        "Corrida"           => "logocorrida.png",
        "Funcional"         => "logofuncional.png",
        "Futebol Americano" => "logofuteamericano.png",
        "Futebol"           => "logofutebol.png",
        "Handebol"          => "logohandeball.png",
        "Rugby"             => "logorugby.png",
        "Sinuca"            => "logosinuca.png",
        "Skate"             => "logoskate.png",
        "Slackline"         => "logoslackline.png",
        "Stand Up Paddle"   => "logostandup.png",
        "Surf"              => "logosurf.png",
        "Tênis"             => "logotenis.png",
        "Tênis de mesa"     => "logotenismesa.png",
        "Volei"             => "logovoley.png",
        "Volei de Praia"    => "logovoleypraia.png",
        "Xadrez"            => "logoxadrez.png",
        "Yoga"              => "logoyoga.png",
        "Outros"            => "logooutros.png",
];
?>


<div id="modalidades" class="container">
    <div class="dropdown menu-suspenso">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Modalidades
            <span class="caret"></span></button>
        <ul class="dropdown-menu scrollDropdown">

            <?php foreach ($modalidades as $nomeModalidade => $logoModalidade) : ?>
            <li><a href="#"><?php echo$nomeModalidade; ?></a></li>

            <?php endforeach; ?>

        </ul>
    </div>
    <div class="procura">
        <input type="text" name="search" placeholder="Localize o bairro...">
    </div>
</div>

<section class="sectionModalidades">
    <div class="owl-carousel owl-theme carrossel">

        <?php foreach ($modalidades as $nomeModalidade => $logoModalidade) : ?>
        <div class="item logo">
            <a href="feed.php">
                <img src="<?php echo"img/$logoModalidade";?>" alt="<?php echo$nomeModalidade; ?>">
                <div class="caption">
                    <h3><?php echo$nomeModalidade; ?></h3>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>