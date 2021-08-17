<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package calihomes
 */

get_header();
$obj = get_queried_object();
?>

	<div id="main" class="nh-row">

<div id="content-row-5" class="nh-row  breadcum-page ">
  <div class="container">
	<div class="row">
	  <div class="col-md-12 col-xs-12">
		<div class="title-main bottom clearfix">
		  <div class="pull-left">
			<ol class="breadcrumb">
			  <li><a href="http://calihomes.vn/">Trang chủ</a></li>
			  <li class="active"><?php echo $obj->name ?></li>
			</ol>
		  </div>
		  <div class="pull-right hide">
			<p><?php echo $obj->name ?></p>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>

<div id="content-row" class="nh-row   ">
  <div class="container">
	<div class="row">
	  <div class="col-sm-8 col-xs-12">
		<div class="top-list-blogs-subpage clearfix col-xs-12" style="margin-bottom: 30px;">
		  <div class="row">
			<div class="col-sm-6 no-padding">
			  <h2 class="title-sub-category"> <?php echo $obj->name ?></h2>
			</div>
			<div class="col-sm-6 no-padding ">
			  <div class="clearfix">
				<div class="view-style Foatright"><a href="javascript:void(0)" data-key-view="list_view_news"
													 data-type="grid" class="btn-view btn-view-gird "> <i
					class="demo-icon icon-th-large-3"></i> </a> <a href="javascript:void(0)"
																   data-key-view="list_view_news" data-type="list"
																   class="btn-view btn-view-list active"> <i
					class="demo-icon icon-th-4"></i> </a></div>
				<div class="sort-by-product Foatright">
				  <div class="item-dropdown"><span> Hiển thị </span></div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="clear-both"></div>
		<div class="wrap-list">
		  <div class="row">
			  <?php
		  	while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();
			?>
		  </div>
		</div>
		<!-- <nav class="nav-page" aria-label="Page navigation navigation-page">
		  <center>
			<ul class="pagination">
			  <li class="prev disabled"><a>&laquo;</a></li>
			  <li class="active"><a>1</a></li>
			  <li><a href="/dieu-tri-sac-to-da/2" plugin="news" currentLink="1">2</a></li>
			  <li><a href="/dieu-tri-sac-to-da/3" plugin="news" currentLink="1">3</a></li>
			  <li><a href="/dieu-tri-sac-to-da/4" plugin="news" currentLink="1">4</a></li>
			  <li class="next"><a href="/dieu-tri-sac-to-da/2" rel="next">&raquo;</a></li>
			</ul>
		  </center>
		</nav> -->
	  </div>
	  <?php get_sidebar();?>
	  <!--# include file="/layout/sidebar.html" -->

	</div>
  </div>
</div>
</div>

<?php

get_footer();
