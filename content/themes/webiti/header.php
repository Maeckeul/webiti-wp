<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta prefix="og: http://ogp.me/ns#" property="og:image" content="https://www.web-iti.com/content/themes/webiti/public/images/logo-web-iti-linkedin.png" />

	<?php wp_head(); ?>

</head>
<body>
  <div class="wrapper">
    <div class="home">
      <section class="scene">
        <div class="logo">
          <img src="<?= get_template_directory_uri(); ?>/public/images/logo-webiti.png" alt="" class="logo-img">
          <span class="text1">Développement Web</span>
          <span class="text2">Création de site web<br /> et Application</span>
          <span class="text3">Web Design</span>
          <span class="text4">Besoin d'une fonctionnalité<br /> spécialisée pour votre site ?</span>
          <span class="text5">Besoin d'un site web ou<br /> d'une application ?</span>
          <span class="text6">Besoin d'une interface<br /> unique pour vos sites<br /> ou applications ?</span>
        </div>
        <div class="sun"></div>
        <div class="description">
          <span class="description-clic">Evite le coup de soleil !<br /><i class="bi bi-arrow-return-left"></i></span>
        </div>
        <div class="description2">
          <span class="description2-clic">On y voit plus rien ?<br /><i class="bi bi-arrow-return-right"></i></span>
        </div>
        <div class="bg"></div>
      </section>
    </div>
    <div class="scrollex"></div>
    <div id="presentation"></div>
    <header class="header" id="nav_bar">
      <div class="header-mobile">
        <div class="container">
          <div class="logo-header">
            <a href="<?= home_url() ?>" class="logo-header-link">
              <img src="<?= get_template_directory_uri(); ?>/public/images/logo-web-iti.png" alt="Logo Web'iti" class="logo-header-link-image">
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
                <a href="<?= home_url(); ?>" class="item-link">
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


