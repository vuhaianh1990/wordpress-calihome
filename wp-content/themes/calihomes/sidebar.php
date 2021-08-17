<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calihomes
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php
	//  dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="col-sm-4 col-xs-12">
  <div id="nav_menu-2" class="widget_nav_menu">
    <h3>Dịch vụ thế mạnh</h3>
    <ul class="menu">
      <li id="menu-item-69" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69"><a
          href="#">Chăm sóc da mặt</a></li>
      <li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a
          href="#">Chăm sóc toàn thân</a></li>
      <li id="menu-item-71" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-71"><a
          href="#">Thẩm mỹ công nghệ cao</a></li>
      <li id="menu-item-1425" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1425"><a
          href="">Dịch vụ thẩm mỹ khác</a></li>
      <li id="menu-item-72" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-72"><a
          href="#">Mỹ phẩm cao cấp</a></li>
    </ul>
  </div>
  <div id="box-video-home" class="widget_nav_menu">
    <h3>Khách hàng nói gì về Calihomes</h3>
    <div class="video-home">
      <iframe width="100%" height="215" src="https://www.youtube.com/embed/yRcCWhR4FvU"
              frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
  <div class="item_block" data-action="news/NewsBlock/newsBlock/83" data-method="get"></div>
  <div class="item_block" data-action="gallery/GalleryBlock/galleryBlock/84" data-method="get"></div>
  <div class="fan-xml widget_nav_menu" id="connect-fanpage">
    <h2 class="">Kết nối Facebook calihomes</h2>
    <div class="fanpage">
      <iframe
          src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcalihomes%2F&tabs=timeline&width=350&height=255&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
          width="100%" height="255" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
          allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
  </div>
  <div class="item_block" data-action="news/NewsBlock/newsBlock/86" data-method="get"></div>
  <div class="banner-km"><a href=""><img
      src="/uploads/plugin/custom_img/2018-06-07/custom-banner-off-50-370x500.png" alt="Chương trình khuyến mại"></a>
  </div>
</div>
</aside><!-- #secondary -->
