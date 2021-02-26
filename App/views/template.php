<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - GoDev</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <!-- Estrutura Dropdown -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="<?php URL_BASE; ?>/alunos/cadastrar">Alunos</a></li>
        <li class="divider"></li>
        <li><a href="<?php URL_BASE; ?>/salas_aula/cadastrar">Sala de Aula</a></li>
        <li class="divider"></li>
        <li><a href="<?php URL_BASE; ?>/salas_cafe/cadastrar">Sala de Café</a></li>
    </ul>
    <nav class="blue">
        <div class="nav-wrapper container">
            <a href="<?php URL_BASE; ?>/home/index" class="brand-logo">Desafio GoDev</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php URL_BASE; ?>/home/index"> Home </a></li>
                <?php if (isset($_SESSION['logado'])) : ?>
                    <!-- Ativar Dropdown -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Cadastrar<i class="material-icons right">arrow_drop_down</i></a></li>

                <?php endif; ?>
                <?php if (!isset($_SESSION['logado'])) : ?>
                    <li><a href="<?php URL_BASE; ?>/home/login"> Login </a></li>
                <?php else : ?>
                    <li><a href="<?php URL_BASE; ?>/home/logout"> Sair </a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <?php require_once '../App/views/' . $view . '.php'; ?>