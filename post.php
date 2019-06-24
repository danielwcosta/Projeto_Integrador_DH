<?php
    include "head.php";
    include "header.php";
?>

<body>
    <section class="post">
        <div class="form-group col-md-12">
            <div class="container-post">
                <h3>Evento - Corrida das Estações - 5KM.</h3>
                <p>Data: 21/05/2019 - Local : Pacaembu</p><br>
            </div>

            <!-- Left-aligned media object -->
            <div class="media">
                <div class="media-left">
                    <img src="img/foto.jpg" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Douglas Martins</h4>
                    <p>Olá Pessoal observei que todos estão aptos para nosso encontro, podemos nos encontrar uma hora
                        antes?
                        Alguém tem alguma sugestão de local para nos encontrar para o aquecimento?
                    </p>
                </div>
            </div>
            <hr>

            <!-- Left-aligned media object -->
            <div class="media">
                <div class="media-left">
                    <img src="img/Marcia.jpg" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Marcia</h4>
                    <p>Podemos nos encontrar no mercado Extra uma antes, tudo bem para vocês?.</p>
                </div>
            </div>
            <hr>

            <!-- Left-aligned media object -->
            <div class="media">
                <div class="media-left">
                    <img src="img/Giseli.jpg" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Giseli</h4>
                    <p>Ok,Levo água para todos até lá!</p>
                </div>
            </div>
            <hr>

            <!-- Left-aligned media object -->
            <div class="media">
                <div class="media-left">
                    <img src="img/daniel.jpg" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Daniel</h4>
                    <p>Combinado!.</p>
                </div>
            </div>
            <hr>


            <!-- Left-aligned media object -->
            <div class="media">
                <div class="media-left">
                    <img src="img/Edu.jpg" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Eduardo- Motoca</h4>
                    <p>Galera, vou de motoca devo chegar antes de vocês Até!.</p>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
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
    </script>
</body>