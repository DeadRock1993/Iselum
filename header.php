<!DOCTYPE html>
<html lang="ru">
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cловари и энциклопедии</title>
        <meta property="og:title" content="Термины и Словари">
        <meta name="description" content="Термины и Словари.">
        <meta property="og:description" content="Термины и Словари. Ваш личный путеводитель в мире энциклопедий и словарей.">
        <meta name="device-detect" content="desktop">
        <meta property="og:url" content="">
        <link href="./index.html" rel="canonical">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
        <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/mobile.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/jquery-ui.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/typeaheadjs.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta property="og:site_name" content="https:site.tj">
        <meta property="og:type" content="article">
        <meta property="og:locale" content="ru">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta name="apple-mobile-web-app-title" content="Словари">

    </head>

    <body id="top">
    
        <header class="header hidden-print">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <a href="<?php echo get_template_directory_uri() ?>/index.php" title="Cловари и энциклопедии"><i class="logo"></i></a>
                        </div>
                        <div class="col">
                            <div class="header-search-form">
                                <!--Задать ACTION для фукционала поиска-->
                                <form action="" method="get">
                                    <div class="input-group">
                                        <span class="header-search-field">
                                            <input type="text" class="form-control-lg" name="term" value="" id="search-word" data-provide="typeahead" data-toggle="tooltip" data-placement="bottom" data-trigger="manual" title="Запрос должен быть длиннее 2 символов...">
                                        </span>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary btn-lg" type="submit" id="search-submit" style="cursor: pointer;" title="Найти">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>