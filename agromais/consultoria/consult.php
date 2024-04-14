<!DOCTYPE html>
<html>
<head>
    <title>Página inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_consult.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<!-- barra de navegação -->
<nav class="navbar navbar-expand-sm  justify-content-center">
    <!-- Logo -->
    <a class="navbar-brand" href='../home.php'>
        <img class="logo" src="../agromais2.png" height="35">
    </a>
    <button class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">
        <ul class="navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link" href="/" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">Produtos</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                    style="margin-top: 10px; margin-left: 55px; border-radius: 0px">
                    <li class="nav-item dropdown">

                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Coelhos</a>


                    </li>
                    <li class="nav-item dropdown">

                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Aves</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Comedouros</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Jaulas e Galinheiros</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Galinhas</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Codornizes</a>
                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Coelhos</a>
                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Galinheiros e Cercas</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">

                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Incubadoras</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Rações</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Aves</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Bovino</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Caprino</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Suinos</a>


                            </li>

                        </ul>
                    <li class="nav-item dropdown">

                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Ninhos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Ninhos para Galinhas</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"">Ninhos para Coelhos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"">Acessórios</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Controlador de Temperatura e Humidade </a>
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Motor de Rolagem </a>
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Ternómetro e Higrômetro</a>

                            </li>
                        </ul>
                    </li>
                </ul>


            <li class="nav-item">
                <a class="nav-link" href="../empresa/about_us.php">Empresa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">Serviços</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                    style="margin-left: 50px; border-radius: 0px; margin-top: 10px">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../servicos/courses.php">Cursos</a>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../manutenção_incubadoras/incubadoras.php">Manutenção de Incubadoras</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../consultoria/consult.php">Consultoria</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
    </div>
    </div>
</nav>
<div style="height: 500px;background-image: url(../consult.jpg);background-position: center;background-size: cover">
</div>
<div id="description">
    <div class="container site-section">
    <h1>Consultadoria Empresarial</h1>
    <br>
    <p>A consultadoria empresarial tem como objetivo propor, junto da empresa cliente, soluções e novos modelos de gestão, de forma a melhorar o processo de tomada de decisão e os resultados a obter.
        A nossa metodologia permite o acelerar da performance das empresas, mesmo em situações conjunturais adversas. Desta forma são apresentadas soluções que permitam
        que a empresa possa obter ganhos de eficiência e de rentabilidade dos seus investimentos.
        No âmbito da consultoria empresarial, são propostos os seguintes objetivos gerais:
        <br>
        <br>
        Elaboração de um diagnóstico de necessidades, problemas e prioridades da empresa, com o objetivo de estabelecer recomendações de alteração de determinados procedimentos e de decisões a serem tomadas;
        Implementação de instrumentos de avaliação do desempenho da empresa;
        Análise da estrutura da empresa;
        Elaboração de estudos de organização estrutural da empresa, e de gestão financeira e operacional da mesma;
        Aconselhamento da melhor fonte de financiamento no âmbito de programas de apoios e incentivos para expansão ou criação de projetos;
        Com a acelaração do mercado, a necessidade de rapidez na tomada de decisão, a consultoria cada vez mais assume um papel fundamental para o sucesso empresarial.
    </p>
</div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Sobre</h6>
                <p class="text-justify">   Fundada recentemente em 2021 em São Tomé e Principe,  somos
                    uma empresa dedicada á venda de produtos agrícolas
                    como rações, aves e etc.  </p>
            </div>

            <div class="col-6 col-md-3">
                <h6>Empresa</h6>
                <ul class="footer-links ">
                    <li><a href="#">Morada:São Tomé e Principe</a></li>
                    <li><a href="#">Telefone:xxxxxxxx</a></li>
                    <li><a href="#">Email:xxxxx@gmail.com</a></li>
                    <li><a href="#">Horário:Seg-Sex:09:00H-18:00H</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-3">
                <h6>Links Rápidos</h6>
                <li><a href="#">Empresa</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Mapa</a></li>
                </ul>
            </div>
        </div>
        <hr class="small">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-12">
                <p class="copyright-text">Copyright © 2021 Todos os Direitos Reservados pela
                    <a href="#">AgroMais</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="consult_java.js"></script>

<script>

    $(function () {
        $('#main_navbar').bootnavbar({
            //option
            //animation: false
        });
    })
</script>
</body>
