<!DOCTYPE html>
    <?php
        if(isset($_COOKIE["theme"]) and $_COOKIE["theme"] == "dark") {
            $background = "dark-mode";
        } else {
            $background = "";
        }
    ?>
<html lang="pt-br" class="<?php echo $background ?>">
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

    <!-- Verificando se tem cookie de dark-mode -->
    
    <body <?php body_class(); ?>>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Dev to Dev</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                 <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
            </div>
        </nav>

       