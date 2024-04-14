<?php
//index.php

use PHPMailer\PHPMailer\PHPMailer;

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $error .= '<p><label includes="text-danger">Por favor, coloque o seu nome</label></p>';
    } else {
        $name = clean_text($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error .= '<p><label includes="text-danger">Somente letras e espaços em branco são permitidos </label></p>';
        }
    }
    if (empty($_POST["subject"])) {
        $error .= '<p><label includes="text-danger">Por favor, coloque o seu assunto</label></p>';
    } else {
        $subject = clean_text($_POST["subject"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
            $error .= '<p><label includes="text-danger">Somente letras e espaços em branco são permitidos </label></p>';
        }
    }
    if (empty($_POST["email"])) {
        $error .= '<p><label includes="text-danger">Please Enter your Email</label></p>';
    } else {
        $email = clean_text($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= '<p><label includes="text-danger">Invalid email format</label></p>';
        }
    }

    if (empty($_POST["message"])) {
        $error .= '<p><label includes="text-danger">Message is required</label></p>';
    } else {
        $message = clean_text($_POST["message"]);
    }
    if ($error == '') {
        require 'includes/Exception.php';
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
        $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
        $mail->Port = '';                                //Sets the default SMTP server port
        $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = '';                    //Sets SMTP username
        $mail->Password = '';                    //Sets SMTP password
        $mail->SMTPSecure = '';                            //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = $_POST["email"];                    //Sets the From email address for the message
        $mail->FromName = $_POST["name"];                //Sets the From name of the message
        $mail->AddAddress('', 'Name');        //Adds a "To" address
        $mail->AddCC($_POST["email"], $_POST["name"]);    //Adds a "Cc" address
        $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);                            //Sets message type to HTML
        $mail->Subject = $_POST["subject"];                //Sets the Subject of the message
        $mail->Body = $_POST["message"];                //An HTML or plain text message body
        if ($mail->Send())                                //Send an Email. Return true on success or false on error
        {
            $error = '<label includes="text-success">Thank you for contacting us</label>';
        } else {
            $error = '<label includes="text-danger">There is an Error</label>';
        }
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Página inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_home.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
<div class="loader_bg">
    <div class="loader">
    </div>
</div>
<!-- barra de navegação -->
<nav class="navbar navbar-expand-sm  justify-content-center">
    <!-- Logo -->
    <a class="navbar-brand" href='home.php'>
        <img class="logo" src="agromais2.png">
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
                <a class="nav-link" href="empresa/about_us.php">Empresa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown">Serviços</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                    style="margin-left: 50px; border-radius: 0px; margin-top: 10px">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="servicos/courses.php">Cursos</a>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="manutenção_incubadoras/incubadoras.php">Manutenção de
                            Incubadoras</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="consultoria/consult.php">Consultoria</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"
                            style="margin-top: -8.5px; border-radius: 0px">
                        </ul>
                    </li>
    </div>
</nav>
<div id="rectangle_about">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-5 offset-xl-1" id="text_image">
            <p style="font-family: 'Times New Roman'">Seja bem-vindos a</p>
            <img style="width: 200px; height: 60px" src="agromais2.png">
            <br>
            <p style="font-family: 'Times New Roman'">Uma empresa dedicada<br>á venda de rações e <br>acessórios.</p>

        </div>
        <div class="col-md-5 col-lg-5 offset-lg-1" id="text_image1">
            <h1 style="font-family: Arial;font-size: 28px;padding-bottom: 60px">Cursos</h1>
            <p style="font-family: 'Times New Roman'">Aqui poderá consultar os cursos que estão disponibilizados<br>
                no nosso site é só clicar no botão abaixo.</p>
            <div class="btn-courses mr-auto ml-auto" onclick="window.location.href='../agromais/servicos/courses.php'">
                Ver
                Cursos
            </div>
        </div>
    </div>
</div>
<h1 style="text-align:center;font-size:35px;margin-top:20px;font-family: 'Open Sans'">Os nossos parceiros</h1>
<div class="brands">
    <a href="#">
        <img class="imgLogo" src="parceiro_marca.jpeg">
        <img class="imgLogo" src="parceiro_marca.jpeg">
        <img class="imgLogo" src="parceiro_marca.jpeg">
        <img class="imgLogo" src="parceiro_marca.jpeg">
    </a>
</div>
<section class="contact-clean">
    <div class="contact_form_blocks">
        <div class="contact_form">
            <div class="form_top">
                <h3> Contactos</h3>
            </div>
            <div class="form_bottom">
                <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                </div>
                <form method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-box">
                                <div class="input-inner"><span class="wpcf7-form-control-wrap ownname"><input
                                                type="text" name="name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                                                aria-required="true" aria-invalid="false" placeholder="Nome"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box">
                                <div class="input-inner"><span class="wpcf7-form-control-wrap email"><input
                                                type="email" name="email" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input-text"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Email:"></span></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="input-inner"><span class="wpcf7-form-control-wrap telephone"><input
                                                type="text" name="subject" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Telefone:"></span></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box">
                                <div class="input-inner">
                                        <span class="wpcf7-form-control-wrap message"><textarea
                                                    name="message" cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required input-text"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Digite a sua mensagem..."></textarea></span></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-submit">
                                <button id="submit" class="wpcf7-form-control wpcf7-submit">Enviar mensagem</button>
                                <span class="ajax-loader"></span></div>
                        </div>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form>
</section>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Sobre</h6>
                <p class="text-justify"> Fundada recentemente em 2021 em São Tomé e Principe, somos
                    uma empresa dedicada á venda de produtos agrícolas
                    como rações, aves e etc. </p>
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
<script src="home_java.js"></script>
<script>
    setTimeout(function () {
        $('.loader_bg').fadeToggle();
    }, 5000);
</script>
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