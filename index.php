<?php
    include "head.php";
    include "header.php";
?>

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
                        <a href="cadastroFinal.php"> <button class="btn">Cadastre-se aqui!</button></a>
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



<?php
    include "saibaMais.php";
    include "modalidades.php";
    include "faleConosco.php";
    include "footer.php";
?>