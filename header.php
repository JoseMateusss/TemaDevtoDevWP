<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="" />
        <title><?php bloginfo('title'); ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/assets/favicon.ico" />
        <?php wp_head(); ?>

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body <?php body_class(); ?>>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#!">Dev to Dev</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item"><a class="nav-link active" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Membros</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Sugestões</a></li>
                        <li class="">
                            <label>
                                <input type="checkbox" id="switch">
                                <span class="check"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>