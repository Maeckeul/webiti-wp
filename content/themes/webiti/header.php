<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>

</head>
<body>
  <div class="wrapper">
    <div class="home">
      <div class="home-content">
        <div class="container">
          <h1 class="home-content-title">
            <img src="<?= get_template_directory_uri(); ?>/public/images/logo-web-iti.png" alt="Logo Web'Iti" class="home-content-title-img">
            <div class="text-content" id="home-content">
              <span class="text">Développement Web</span>
              <span class="text">Création de sites & Applications</span>
              <span class="text">Design Web</span>
              <p class="typewrite" data-period="1000" data-type='[ "Tahiti et ses îles","Nous vous proposons nos services", "N&#39;hésitez pas à nous contacter!", ":)"]'>
                <span class="wrap"></span>
              </p>
            </div>
          </h1>
          <div class="arrow" id="arrow">
            <a href="#presentation" class="arrow-link scroll">
              <i class="fa fa-long-arrow-down"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="scrollex"></div>
    <div id="presentation"></div>
    <header class="header">
      <div class="header-mobile">
        <div class="container">
          <div class="logo">
            <a href="#" class="logo-link">
              <img src="<?= get_template_directory_uri(); ?>/public/images/logo-web-iti.png" alt="Logo Web'iti" class="logo-image">
            </a>
          </div>
          <div class="menu" id="menu-button"></div>
        </div>
      </div>
      <div class="header-laptop">
        <div class="container">
          <nav class="header-laptop-nav">
            <ul class="header-left">
              <li class="item">
                <a href="#presentation" class="item-link scroll">A propos</a>
              </li>
              <li class="item">
                <a href="#skills" class="item-link scroll">Compétences</a>
              </li>
            </ul>
            <ul class="header-center">
              <li class="item">
                <a href="#" class="item-link">
                  <img src="<?= get_template_directory_uri(); ?>/public/images/logo-web-iti.png" alt="Logo Web'iti" class="logo-image">
                </a>
              </li>
            </ul>
            <ul class="header-right">
              <li class="item">
                <a href="#services" class="item-link scroll">Services</a>
              </li>
              <li class="item">
                <a href="#contacts" class="item-link scroll">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>


