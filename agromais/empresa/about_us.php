<!DOCTYPE html>
<html>
<head>
    <title>Página inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_about.css">
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
        <img class="logo" src="../agromais2.png">
    </a>
    <button class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">
        <ul class="navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link" href="/" id="navbarDropdown" role="button" data-toggle="dropdown">Produtos</a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                    style="margin-top: 10px; margin-left: 55px; border-radius: 0px">

                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Coelhos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Aves</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Comedouros</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Jaulas e Galinheiros</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Jaulas para Galinhas</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Jaulas para Codornizes</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Jaulas para Coelhos</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Galinheiros e Cercas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Incubadoras</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Rações</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                            <li class="nav-item dropdown">

                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Aves</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Bovino</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Caprino</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Suinos</a>
                            </li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Ninhos</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Galinhas</a>

                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Coelhos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">Acessórios</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">

                            <li class="nav-item dropdown">
                                <a class="dropdown-item " href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Controlador de Temperatura e Humidade </a>

                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Motor de Rolagem </a>

                                <a class="dropdown-item" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown">Ternómetro e Higrômetro</a>

                            </li>
                        </ul>
                    </li>
                </ul>
            <li class="nav-item">
                <a class="nav-link" href="../empresa/about_us.php">Empresa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown">Serviços</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                    style="margin-left: 50px; border-radius: 0px; margin-top: 10px">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../servicos/courses.php">Cursos</a>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../manutenção_incubadoras/incubadoras.php"">Manutenção de Incubadoras</a>
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
</nav>

<div id="rectangle_about">
    <div class="jumbotron">
                <h5>Quem Somos</h5>
                <p>Com a AGRO+ pode contar com um parceiro comprometido é capaz de
                oferecer um serviço completo, desde o dimensionamento de projeto agrícola,
                assistência técnica até ao escoamento final do produto</p>
            </div>
        </div>
        <div class="row" id="col_services">
            <div class="col-md-4" id="services">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="2em" width="2em" style="margin-left: 30px;margin-bottom: 13px">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h1>Assessoria técnica</h1>
                <p>Oferecemos aos nossos clientes um aconselhamento técnico personalizado,de
                    forma a conseguir a maior rentabilidade e qualidade dos seus cultivos.</p>
                                </div>
            <div class="col-md-4" id="services">
                <i class="fa fa-leaf" style="font-size:25px; margin-bottom: 20px;text-align: center" ></i>
                <h1>Plantações</h1>
                <p>Fazemos um estudo a cada propriedade e preparamos o terreno para a plantação do cultivo que
                    avaliamos como mais adequado.</p>
            </div>
            <div class="col" id="services_tecnical" style="text-align: center; margin-top: 40px">
                <i class="fa fa-headphones" style="font-size:30px" ></i>
                <h1>Assistência técnica</h1>
                <p>Através do nosso corpo técnico
                conseguimos garantir um apoio constante e sempre que necessário a todos os nossos clientes.</p>
            </div>
        </div>
<div class="col-md-12">
        <div class="row" id="description">
            <div class="container site-section">
                <h1>Missão</h1>
                <p>Recolher e processar resíduos agroindustriais com recurso a uma tecnologia bioindustrial inovadora, contribuindo para a sustentabilidade do sector
                agro-alimentar resolvendo dois grandes problemas nacional, a escassez dos alimentos compostos para animais e os desperdícios alimentares.</p>
                                </div>
        </div>
                    </div>
<div class="row" id="col_values">
    <div class="col-md-3" id="values">
        <img src="../certificate.png" id="image">
        <h1>Excelência</h1>
</div>
    <div class="col-md-3" id="values">
        <img src="../medal.png" id="image">
        <h1>Qualidade</h1>
    </div>
    <div class="col-md-3" id="values">
        <img src="../light-bulb.png" id="image">
        <h1>Inovação</h1>
    </div>
    <div class="col-md-3" id="values">
        <img src="../leafs.png" id="image">
        <h1>Eficiência</h1>
    </div>
</div>
<div class="col-md-12">
<div class="row">
<div class="embed-responsive embed-responsive-16by9" >
    <video class="embed-responsive-item" controls style="padding: 15px 40px 20px;">
        <source src="../video_company.mp4" type="video/mp4">>
    </video>
</div>
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
<script src="about_us_java.js"></script>
<script>

    $(function () {
        $('#main_navbar').bootnavbar({
            //option
            //animation: false
        });
    })
</script>
</body>
</html>