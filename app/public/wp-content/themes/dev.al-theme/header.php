<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
  </head>
  <body>
  <header class="site-header container"> 
        <h1 class="logo-text">
          <a href="#"><strong class="go">Go</strong> Travel</a>
        </h1>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul class="header-links">
              <li><a href="#"><?php
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
            ));
            ?></a></li>

            </ul>
          </nav>
        </div>
    </header>