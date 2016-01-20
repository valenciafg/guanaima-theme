<?php
if (!is_front_page()) {
  while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile;
}else {
  //echo "AQUI SE MOSTRARA EL SLIDER Y BUSCADOR DE IMAGENES";
  //get_template_part('templates/content', 'page');

  ?>
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?= get_template_directory_uri(); ?>/dist/images/margarita.jpg" />
        <p class="flex-caption">Adventurer Cheesecake Brownie</p>
      </li>
      <li>
        <img src="<?= get_template_directory_uri(); ?>/dist/images/llovizna12.jpg" />
        <p class="flex-caption">Adventurer Lemon</p>
      </li>
      <li>
        <img src="<?= get_template_directory_uri(); ?>/dist/images/roraima.jpg" />
        <p class="flex-caption">Adventurer Donut</p>
      </li>
    </ul>
    <?php
    get_template_part('templates/searchform', 'media');
    ?>
  </div>
  <?php
}
?>
