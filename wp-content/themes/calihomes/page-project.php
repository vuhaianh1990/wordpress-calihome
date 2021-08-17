<?php
/**
 * Template Name: Dự Án Page
 *
 * @package WordPress
 * @subpackage Calihomes
 * @since Calihomes 1.0
 */

$options_redux = get_option('calihomes_redux');
//   var_dump($options_redux);

get_header();
?>

<main class="l-main pro">

  <div id="slider" class="clearfix">
    <div id="slideshow" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="ico-circle" data-target="#slideshow" data-slide-to="0" class="active"></li>
        <li class="ico-circle" data-target="#slideshow" data-slide-to="1"></li>
        <li class="ico-circle" data-target="#slideshow" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="First slide">
          <div class="wrap-txt">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/text_banner-1.png" alt=""></figure>
            <p class="btn-more pt-3"><a class="" href="#">TÌM HIỂU THÊM</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Second slide">
          <div class="wrap-txt">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/text_banner-2.png" alt=""></figure>
            <p class="btn-more pt-3"><a class="" href="#">TÌM HIỂU THÊM</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Third slide">
          <div class="wrap-txt">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/text_banner-1.png" alt=""></figure>
            <p class="btn-more pt-3"><a class="" href="#">TÌM HIỂU THÊM</a></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</main>

<?php get_footer();