<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package calihomes
 */

?>

<div class="col-md-12 col-sm-12 col-xs-6 list-item box-blogs view-list">
	<div class="item-blogs clearfix">
	<div class="img-blogs"><a class="img-news"
								href="<?php esc_url( get_permalink() ) ?>">
		<img src="<?php echo get_the_post_thumbnail_url() ?>">
	</a></div>
	<div class="info">
		<p class="more-blogs"> <span class="time"> <i
			class="fa fa-clock-o" aria-hidden="true"></i> <?php calihomes_posted_on(); ?></span></p>
		<h2 class="title-blogs-item"><a
			href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title() ?></a>
		</h2>
		<p class="desc-blogs"><?php the_content() ?></p>
		<a href="http://calihomes.vn/shark-hung-va-thuong-vu-trieu-do-vao-tham-my-calihomes.html"
			class="btn btn-view-more"> Xem thêm <i
			class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
	</div>
	</div>
</div>
