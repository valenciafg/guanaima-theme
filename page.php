<?php
if (!is_front_page()) {
  while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile;
}else {
  echo "AQUI SE MOSTRARA EL SLIDER Y BUSCADOR DE IMAGENES";
//get_template_part('templates/content', 'page');
  get_template_part('templates/searchform', 'media');
}
?>
