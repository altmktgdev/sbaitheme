<?php

function homeBanner($atts){
  // Atributos por defecto
  $a = shortcode_atts( array(
      'url' => '#', // URL por defecto
      'dk'  => '',   // No hay imagen por defecto para desktop
      'mb'  => ''    // No hay imagen por defecto para móvil
  ), $atts );

  $html = '
  <section class="home-banner">
    <a class="home-banner__anchor" href="'.$a['url'].'">
      <picture>
        <source class="home-banner__image" srcset="'.$a['dk'].'" alt="" media="(min-width:768px)">
        <img class="home-banner__image" src="'.$a['mb'].'" alt="">
      </picture>
    </a>
  </section>';

  return $html;
}
add_shortcode('home_banner', 'homeBanner');
