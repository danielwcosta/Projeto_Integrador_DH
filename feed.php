<?php
    include "head.php";
    include "header.php";
?>
<!-- Page Content -->
<div id="feed">
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Eventos
                <small>Corrida</small>
            </h1>

            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crie um novo evento
            </button>
            <!-- Blog Post -->
            <div class="card mb-4 evento">
                <div class="card-body">
                    <h2 class="card-title">Corrida marota</h2>

                    <div class="img-feed">
                      <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                    </div>

                    <div class="descricao-feed">
                      <p class="card-text"><b>Local do evento:</b> Parque Ibirapuera.</p>

                      <p class="card-text"><b>Data e hora:</b>  Todas as quartas as 18:30.</p>

                      <p class="card-text"><b>Descrição do evento:</b>Uma corridinha marota para queimar as cervejinhas do fim de semana.</p>

                      <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                    </div>

                </div>
                    <div class="card-footer text-muted">
                        Postado em 17 de Maio 2017 por
                        <a href="#">Douglas</a>
                    </div>
                </div>

                <div class="card mb-4 evento">
                    <div class="card-body">
                        <h2 class="card-title">Vamos maratonar!!</h2>

                        <div class="img-feed">
                          <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                        </div>

                        <div class="descricao-feed">
                          <p class="card-text"><b>Local do evento:</b> Cidade Universitária.</p>

                          <p class="card-text"><b>Data e hora:</b>  Domingo as 8:00.</p>

                          <p class="card-text"><b>Descrição do evento:</b>Treino para maratonas. Se você quer correr até acabar a sola do tênis?? Aqui é o lugar!!</p>

                          <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                        </div>

                    </div>
                        <div class="card-footer text-muted">
                            Postado em 17 de Maio 2017 por
                            <a href="#">Douglas</a>
                        </div>
                    </div>

                    <div class="card mb-4 evento">
                        <div class="card-body">
                            <h2 class="card-title">Só os Usain Bolt aqui!</h2>

                            <div class="img-feed">
                              <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                            </div>

                            <div class="descricao-feed">
                              <p class="card-text"><b>Local do evento:</b> Estadio Olimpico.</p>

                              <p class="card-text"><b>Data e hora:</b>  Sabado as 9:00.</p>

                              <p class="card-text"><b>Descrição do evento:</b>Corrida para velocistas. Vamos treinar para deixar o Bolt comendo poeira!!</p>

                              <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                            </div>

                        </div>
                            <div class="card-footer text-muted">
                                Postado em 17 de Maio 2017 por
                                <a href="#">Douglas</a>
                            </div>
                        </div>


                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Antigos</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Novos &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Procure o seu evento:</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite aqui...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Match Sports!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Navegue pelo Site</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="index.php#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="index.php#saiba-mais">Saiba Mais</a>
                                    </li>
                                    <li>
                                        <a href="index.php#modalidades">Modalidades</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="index.php#fale-conosco">Fale Conosco</a>
                                    </li>
                                    <li>
                                        <a href="cadastroFinal.php">Cadastro</a>
                                    </li>
                                    <li>
                                        <a href="#">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h3 class="card-header">Como funciona: </h3>
                    <div class="card-body nav-lateral">
                        <p>Escolha um evento que mais te agrade e faça novas amizades praticando de esportes.</p>
                        <p>Nesta parte você escolhe o seu esporte conforme o seu nivel, localização e horario que mais se adeque a suas necessidades.</p>
                        <p>Mas caso você não encontre nenhum evento que te atenda crie o seu proprio evento!!</p>
                        <p>Dê um Match Sports!!!! </p>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
</div>

    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <!-- Bootstrap core JavaScript -->

<script src="js/feed/jquery/jquery.min.js"></script>
<script src="js/feed/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>
