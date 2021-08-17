<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calihomes
 */

?>

<footer class="l-foot">
<div class="container">
    <ul class="lst-foot row">
      <li class="col-md-3">
        <figure class="foot-logo"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/f_logo.png" alt=""></a></figure>
        <ul class="lst-address">
          <li class="email">Email: </li>
          <li class="web">Website: <a href="http://calihomes.vn">http://calihomes.vn</a></li>
          <li class="phone"><a href="tel:0931313179">Hotline: 093 131 31 79</a></li>
        </ul>
      </li>
      <li class="col-md-6">
        <ul class="lst-footer">
          <li class="ico-home">
            <p class="txt-title">CALI HOMES TP.HỒ CHÍ MINH</p>
            <p class="txt"><b class="txt-or">Trụ sở chính: </b>59 đường Song Hành, Phường Phú Hữu, Q.2</p>
            <p class="txt"><b class="txt-or">Chi nhánh Nam Sài Gòn: </b>167 Phạm Thái Bường, Khu Nam Thiên 3, Phú Mỹ Hưng, Q.7</p>
            <p class="txt"><b class="txt-or">Chi nhánh Đông Sài Gòn: </b>74 Đường D, KĐT Lakeview City, Q.2</p>
          </li>
          <li class="ico-home">
            <p class="txt-title">CALI HOMES BÌNH PHƯỚC</p>
            <p class="txt">59 đường Song Hành, Phường Phú Hữu, Q.2</p>
          </li>
          <li class="ico-home">
            <p class="txt-title">CALI HOMES ĐỒNG THÁP</p>
          </li>
          <li class="ico-home">
            <p class="txt-title">CALI HOMES CẦN THƠ</p>
          </li>
        </ul>
      </li>
      <li class="col-md-3">
        <ul class="lst-footer">
          <li><p class="txt-title">DỰ ÁN VINCITY</p></li>
          <li><p class="txt-title">DỰ ÁN VINPEARL</p></li>
          <li><p class="txt-title">TUYỂN DỤNG</p></li>
          <li><p class="txt-title">TIN TỨC</p></li>
          <li><p class="txt-title">LIÊN HỆ</p></li>
        </ul>
        <p class="btn-connect">KẾT NỐI CHÚNG TÔI</p>
        <ul class="lst-social">
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ico_fb.png" alt=""></a></li>
        </ul>
      </li>
    </ul>
</div>

<!-- Modal -->
<div id="myForm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?>
      </div>

    </div>

  </div>
</div>
<div class="slide-contact">
      <div class="">
        <div class="row">
          <a class="phone" href="tel:+849031313179">0903 131 31 79</a>
          <a class="register" href="#" data-toggle="modal" data-target="#myForm">ĐĂNG KÝ THÔNG TIN</a>
        </div>
      </div>
    </div>
</footer>

<script>
  function openMenu() {
    var x = document.getElementById("primary-menu");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  var leftInit = $("#header").offset().left;

  $(window).scroll(function(event) {
      var x = 0 - $(this).scrollLeft();
      var y = $(this).scrollTop();
      $("#header").offset({
          left: x + leftInit
      });
      if(y > 100){
        $('#header').css('background-color','#fff');
      } else {
        $('#header').css('background-color','rgba(255, 255, 255, 0.5)');
      }
  });
</script>

<?php wp_footer() ?>
</body>
</html>