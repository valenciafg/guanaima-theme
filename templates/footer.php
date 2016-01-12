<!--<footer class="content-info">
  <div class="container">
    <?php //dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>-->
<footer class="footer-distributed">
  <div class="footer-left">
    <h3>Company<span>logo</span></h3>
    <p class="footer-links">
      <?php
      $menu_name = 'primary_navigation';
      if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ( (array) $menu_items as $key => $menu_item ) {
          $title = $menu_item->title;
          $url = $menu_item->url;
          $menu_list .= ' <a href="' . $url . '">' . $title . '</a> -';
        }
        $menu_list = rtrim($menu_list,'-');
      } else {
        $menu_list = '<a href="#">Menu "' . $menu_name . '" not defined.</a>';
      }
      echo $menu_list;
      ?>
    </p>
    <p class="footer-company-name"><?php bloginfo('name'); ?> &copy; 2015 - <?php echo date('Y'); ?></p>
  </div>
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>99 Location Street</span> Zurich, Switzerland</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>+41 555 555555</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@guanaima.ch">support@guanaima.ch</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About <?php bloginfo('name'); ?></span>
      Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>
    <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>
  </div>
</footer>