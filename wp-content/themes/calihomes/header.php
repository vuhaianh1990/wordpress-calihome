<?php
  $options_redux = get_option('calihomes_redux');
  // var_dump($options_redux);
?>


<!DOCTYPE html>
<html lang="vi">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>CALIHOMES | TRANG CHỦ</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <meta content="<?php echo $options_redux['calihomes_meta_description'] ?>" name="description" />
  <meta content="<?php echo $options_redux['calihomes_meta_keywords'] ?>" name="keywords" />

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- HEADER -->
<div id="header" class="l-head">
  <div class="container">
    <div class="row">
      <div class="hd-logo col-8 col-md-2">
          <h1 class="hdg-lv-1"><a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_calihomes.png" alt="<?php bloginfo('name'); ?>" /></a> CALIHOMES</h1>
      </div>
      <!-- MAIN MENU -->
      <a href="javascript:void(0)" class="menu-control" onclick="openMenu()"><i class="fa fa-bars"></i></a>
      <!-- Menu Primay -->
      <?php
        if ( has_nav_menu( 'primary-menu' ) ) {
          $calihomes_menu_walker = new WP_Bootstrap_Navwalker;
          wp_nav_menu( array(
            'theme_location'  => 'primary-menu',
            'container_id'    => 'primary-menu',
            'container_class' => 'primary-menu col-md-9 offset-md-1',
            'menu_class'     => 'nav justify-content-end',
            'menu_id'        => 'nav-menu',
            // 'items_wrap'      => '<ul class="nav justify-content-end">%3$s</ul>',
            'walker'          => $calihomes_menu_walker
          ));
        }
      ?>
    </div>
  </div>
</div>

