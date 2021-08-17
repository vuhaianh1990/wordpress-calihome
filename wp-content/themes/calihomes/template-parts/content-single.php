<?php
/**
 * The template part for displaying single posts
 *
 * @package calihomes
 * @subpackage calihomes
 * @since calihomes
 */

$id = get_the_ID();
$categoryId = wp_get_post_categories($id);
$category = get_category($categoryId);
$args = array(
    'numberposts' => 6,
    'category' => $categoryId,
    'orderby' => 'date',
    'order' => 'DESC',
    'exclude' => $id
  );

  $latest_post = get_posts( $args );
//   echo "<pre>";
//   var_dump($category);
?>

<div class="nh-row  breadcum-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="title-main bottom clearfix">
            <div class="pull-left">
              <ol class="breadcrumb">
                <li><a href="http://calihomes.vn/">Trang chủ</a></li>
                <li><a href="http://calihomes.vn/<?php echo $category->slug ?>"><?php echo get_cat_name($categoryId); ?></a></li>
                <li class="active"> <?php echo get_the_title() ?></li>
              </ol>
            </div>
            <div class="pull-right hide">
              <p><?php echo get_the_title() ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div id="content-row" class="nh-row">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-xs-12">
          <div class="detail-post">
            <div class="box-detail-post top-post">
              <h1 class="title-blogs-item"><strong><?php echo get_the_title() ?></strong>
              </h1>
              <p class="more-blogs"> <span class="time"> <i
                  class="fa fa-clock-o" aria-hidden="true"></i> <?php calihomes_posted_on(); ?></span></p>
            </div>

            <div class="ckeditor-post">
                <?php the_content() ?>
            </div>
            <div class="box-detail-post link-lien-quan">
              <div class="title">Bài viết liên quan</div>
                <?php foreach($latest_post as $item){ ?>
                    <a href="<?php $item->guid; ?>"
                        class="item-link-lienquan"> <img
                        src="<?php echo get_the_post_thumbnail_url() ?>"
                        alt="<?php $item->post_name ?>"> <?php echo $item->post_title ?>
                    </a>
                <?php } ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
        <!--# include file="/layout/sidebar.html" -->

      </div>
    </div>
  </div>