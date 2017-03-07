<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
</head>
<body>
        <header class="row">
            <div class="three columns">
                <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                    <?php bloginfo('name'); ?></a></h1>
            </div>

            <div class="six columns">
                <h3><?php bloginfo('description'); ?></h3>
            </div>

            <div class="three columns" id="socialmedia">
                <?php dynamic_sidebar('header-two'); ?>
            </div>

            <div class = "row" id="id-padding">
                <div class="twelve columns" id= "header-menu">
                    <nav>
                        <?php wp_nav_menu(array(
                                'sort_column'        =>  'menu_order',
                                'container_class'    =>  'blank-menu-header'
                            ));
                        ?>
                    </nav>
                <div>
            </div>

            <div class = "row">
                <div class="three columns">
                </div>
                <div class="three columns">
                        <?php dynamic_sidebar('header-one'); ?>
                </div>
                <div class="six columns">
                </div>
            </div>

        </header>
