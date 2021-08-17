<?php
/**
 * Template Name: About template
 *
 * @package WordPress
 * @subpackage Calihomes
 * @since Calihomes 1.0
 */

get_header(); ?>

<?php
  $options_redux = get_option('calihomes_redux');
//   var_dump($options_redux);
?>

<!-- CONTENT -->
<main class="l-main ab">
  <!-- <div id="slider" class="clearfix">
    <div id="slideshow" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="ico-circle" data-target="#slideshow" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/ab_slide1.jpg" alt="Calihomes">
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

    <div class="slide-contact">
      <div class="container">
        <div class="row">
          <a class="phone" href="tel:+849031313179">0903 131 31 79</a>
          <a class="register" href="#">ĐĂNG KÝ THÔNG TIN</a>
        </div>
      </div>
    </div>
  </div> -->

  <div class="ab-wrap-img">
    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/ab_slide1.jpg" alt="Calihomes">
    <div class="ab-wrap-txt">
      <div class="container">
        <div class="row">
        <div class="col-12 col-md-12 box_text_about">
          <p class="txt-title">ĐƠN VỊ MÔI GIỚI BẤT ĐỘNG SẢN NHÀ Ở CAO CẤP VÀ NGHỈ DƯỠNG UY TÍN HÀNG ĐẦU</p>
          <p class="txt text-justify">Chúng tôi là một đại gia đình hơn 200 người phân bổ ở 06 chi nhánh khắp Miền nam Việt Nam. Chúng tôi có niềm đam mê yêu thích đặc biệt đối với bất động sản. <br>
            Chúng tôi luôn cố gắng gần gũi để thấu hiểu khách hàng và giúp họ chọn lựa một nơi để xây dựng tổ ấm cũng như thực hiện thành công một thương vụ đầu tư có giá trị. </p>
        </div>
      </div>
    </div>

    </div>
  </div>

  <section class="wrap-sumenh animatedParent animateOnce">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="hdg-lv-2 pt-3">SỨ MỆNH, TẦM GIÁ, GIÁ TRỊ CỐT LÕI</h2>
          <ul class="lst-sumenh">
            <li>
              <img class='fadeInDownShort animated delay-500' src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_giatri.png" alt="">
              <div class="wrap-txt">
                <p class="txt">Chính trực, Uy tín, Tiên Phong, Chuyên nghiệp theo tiêu chuẩn quốc tế là những giá trị quan trọng nhất của chúng tôi. <br>
                  Chúng tôi nổ lực tạo ra một môi trường làm việc tốt nhất trong không gian thỏa mái nhất – nơi các thành viên được sống như một gia đình thật sự, phát huy tối đa cùng hướng đến những giá trị chung.</p>
              </div>
            </li>
            <li>
              <img class='fadeInDownShort animated delay-500' src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_tamnhin.png" alt="">
              <div class="wrap-txt">
                <p class="txt">Trở thành nhà cung cấp dịch vụ môi giới bất động sản cao cấp và nghỉ dưỡng hàng đầu tại Việt Nam, được biết đến như đơn vị môi giới chuyên nghiệp theo tiêu chuẩn quốc tế, đáng tin cậy và gần gũi, luôn lấy sự hài lòng của khách hàng làm nền tảng phục vụ. Thúc đẩy phát triển những giá trị có ý nghĩa cho khách hàng và đối tác.. </p>
              </div>
            </li>
            <li>
              <img class='fadeInDownShort animated delay-500' src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_sumenh.png" alt="">
              <div class="wrap-txt">
                <p class="txt">Cung cấp dịch vụ môi giới bất động sản uy tín & chuyên nghiệp đến mọi đối tác, khách hàng là chủ đầu, nhà phát triển dự án, người tiêu dùng..vv, bằng cách xây dựng mạng lưới liên kết nhân lực vững mạnh luôn cam kết hướng đến những giá trị chung.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="about_tgd">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class='img-left'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_sep.png" alt="" />
            </div>
            <div class='tgd-right'>
              <h2 class="hdg-lv-2">TỔNG GIÁM ĐỐC<br>ÔNG. LÊ HỒNG THỊNH</h2>
              <ul class="lst-lv-3">
                <li>Tốt nghiệp cử nhân QTKD, DK Kinh Tế TP.HCM. Hơn 11 năm kinh nghiệm làm quản lý cao cấp về kinh doanh, phân phối bất động sản trong và ngoài nước tại Sacomreal, CBRE, Kusto GroupGroup, MLAND Vietnamietnam... </li>
                <li>Khả năng thông thạo 2 ngoại ngữ Anh - Hoa, tiên phong áp dụng rất thành công các mô hình phân phối, tiếp thị BĐS tiên tiến của các quốc gia phát triển vào thị trường Việt Nam.  </li>
                <li>Chúng tôi xác định "Tài sản vô giá của mình là uy tín, vì vậy chúng tôi chạy đua với thời gian để tạo nên giá trị. Cam kết "càn quét" đến tận căn cuối cùng của mỗi dự án mà Cali Homes được trao cơ hội."  </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </section>
  <section id='calihomelife'>
    <div class='container'>
      <div class='row'>
        <div class='col-12'>
          <h2 class="hdg-lv-2">CALIHOMESLIFE</h2>
          <div class='box_img'>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_1.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_2.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_3.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_4.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_5.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_6.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_7.jpg" alt=""/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calihome_8.jpg" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<!-- SCRIPT -->
<script>

</script>

<?php get_footer();
