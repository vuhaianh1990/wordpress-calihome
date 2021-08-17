<?php
/**
 * The front page template file
 * Learn more: https://w3dev.com
 *
 * @package calihomes
 * @subpackage calihomes
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
  $options_redux = get_option('calihomes_redux');
//   var_dump($options_redux);
?>

<!-- CONTENT -->
<main class="l-main fp">
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

  <section class="whoami animatedParent animateOnce">
    <div class="container">
      <div class="row">
        <figure class="col-md-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ind_01.jpg" class="img-thumbnail" alt="CALIHOMES"></figure>
        <div class="body col-md-5">
          <h2 class="hdg-lv-2 pt-1 fadeInDownShort animated delay-500" >CALI HOMES LÀ AI?</h2>
          <p class="txt txt-title"><b class="txt-or">CALI HOMES</b> <b class="txt-blue">- CÔNG TY MÔI GIỚI BĐS CAO CẤP VÀ NGHỈ DƯỠNG UY TÍN HÀNG ĐẦU VIỆT NAM</b></p>
          <p class="txt">Được thành lập từ tháng 5/2013. CALI HOMES là một đơn vị môi giới chuyên nghiệp về dòng sản phẩm nhà ở cao cấp và nghỉ dưỡng. Chúng tôi được khách hàng tín nhiệm bởi dịch vụ môi giới uy tín, chuyên nghiệp và tinh tế trong cách thức phục vụ khách hàng.</p>
          <p class="txt-title">TRIẾT LÝ KINH DOANH</p>
          <ul class="lst-lv-1">
            <li>Đối với khách hàng: Chúng tôi cam kết chất lượng phục vụ và uy tín sản phẩm do mình phân phối.</li>
            <li>Đối với đối tác: Trở thành đối tác đáng tin và hợp tác lâu dài đôi bên cùng có lợi.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="about-company animatedParent animateOnce">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="lst-lv-2">
            <li class="fadeIn animated delay-500">
              <figure class="thumbnail"><img  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.png" alt=""></figure>
              <div class="body">
                 <p><span class="number n100">0</span><span class="number">+</span><br>Dự án phân phối</p>
              </div>
            </li>
            <li class="fadeIn animated delay-500">
              <figure class="thumbnail "><img  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" alt=""></figure>
              <div class="body">
                <p><span class="number n50">0</span><br>Đối tác</p>
              </div>
            </li>
            <li class="fadeIn animated delay-500"> 
              <figure class="thumbnail"><img  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon3.png" alt=""></figure>
              <div class="body">
                <p><span class="number n200">0</span><span class="number">+</span><br>Nhân viên và công sự</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="hdg-lv-2 pt-2">DỰ ÁN ĐƯỢC QUAN TÂM NHẤT</h2>
          <p class="txt-desc">Triết lý kinh doanh của chúng tôi hướng tới sự phát triển bền vững, Vì vậy, Cali Homes luôn lựa chọn đồng hành cùng đối tác uy tín, nỗ lực nhằm mang đến những sản phẩm tốt nhất, những cơ hội đầu tư triển vọng nhất tạo nên những thương vụ hấp dẫn nhất.</p>
          <ul class="nav nav-pills mb-3" id="product-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-vincity" role="tab" aria-controls="pills-vincity" aria-selected="true">VINCITY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-vinpearl" role="tab" aria-controls="pills-vinpearl" aria-selected="false">VINPEARL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-namlong" role="tab" aria-controls="pills-namlong" aria-selected="false">NAM LONG</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-vincity" role="tabpanel" aria-labelledby="pills-vincity-tab">
              <ul class="lst-product">
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan1.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan2.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan3.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan4.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
              </ul>
              <a href="#" class="btn-more pt-1">XEM TẤT CẢ DỰ ÁN</a>
            </div>
            <div class="tab-pane fade" id="pills-vinpearl" role="tabpanel" aria-labelledby="pills-vinpearl-tab">
              <ul class="lst-product">
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan1.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan2.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan3.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan4.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
              </ul>
              <a href="#" class="btn-more pt-1">XEM TẤT CẢ DỰ ÁN</a>
            </div>
            <div class="tab-pane fade" id="pills-namlong" role="tabpanel" aria-labelledby="pills-namlong-tab">
              <ul class="lst-product">
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan1.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan2.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan3.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure class="thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_duan4.jpg" alt="">
                      <img class='bg_hover' src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_tintuc.png" alt="">
                    </figure>
                    <div class="body">
                      <p class="txt-title">VinCity Grand Pack</p>
                      <p class="txt">Nguyễn Xiển, P.Long Bình, Quận 9, TP.Hồ Chí Minh Căn Hộ, Nhà Phố, Shophouse</p>
                      <div class="btn"><span class="btn-price">Từ 200.000.000 VNĐ</span></div>
                    </div>
                  </a>
                </li>
              </ul>
              <a href="#" class="btn-more pt-1">XEM TẤT CẢ DỰ ÁN</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="hdg-lv-2 pt-2">TIN TỨC</h2>
          <p class="txt-desc">Triết lý kinh doanh của chúng tôi hướng tới sự phát triển bền vững, Vì vậy, Cali Homes luôn lựa chọn đồng hành cùng đối tác uy tín, nỗ lực nhằm mang đến những sản phẩm tốt nhất, những cơ hội đầu tư triển vọng nhất tạo nên những thương vụ hấp dẫn nhất.</p>
          <ul class="lst-news">
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_tintuc1.jpg" alt=""></figure>
              <div class="body">
                <p class="txt">Cali Homes chính thức kí hợp tác phân phối dự án VINCITY GRAND PACK QUẬN 9</p>
                <p class="link-more"><a href="#">Chi tiết</a></p>
              </div>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_tintuc2.jpg" alt=""></figure>
              <div class="body">
                <p class="txt">Cali Homes chính thức chính thức khai trương văn phòng mới tại Bình Phước</p>
                <p class="link-more"><a href="#">Chi tiết</a></p>
              </div>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_tintuc3.jpg" alt=""></figure>
              <div class="body">
                <p class="txt">Cali Homes chính thức chính thức khai trương văn phòng mới tại Đồng Tháp và Cần Thơ</p>
                <p class="link-more"><a href="#">Chi tiết</a></p>
              </div>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_tintuc4.jpg" alt=""></figure>
              <div class="body">
                <p class="txt">Vì sao bạn lại chọn VinCity Grand Pack tại Quận 9?</p>
                <p class="link-more"><a href="#">Chi tiết</a></p>
              </div>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_tintuc5.jpg" alt=""></figure>
              <div class="body">
                <p class="txt">Thiết kế căn hộ VinCity Grand Pack Quận 9</p>
                <p class="link-more"><a href="#">Chi tiết</a></p>
              </div>
            </li>
            <li>
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hinh_tintuc6.jpg" alt=""></figure>
              <div class="body">
                <p class="txt">Hơn 100+ sales tham gia đào tạo định hướng VinPearl</p>
                <p class="link-more"><a href="#">Chi tiết</a></p>
              </div>
            </li>
          </ul>
          <a href="#" class="btn-more pt-2">XEM TẤT CẢ DỰ ÁN</a>
        </div>
      </div>
    </div>
  </section>
  <section class="partnership">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <h2 class="hdg-lv-2 pt-3">ĐỐI TÁC CHIẾN LƯỢC</h2>
            <p class="txt-desc">Là thương hiệu phân phối bất động sản nhà ở cao cấp & nghỉ dưỡng uy tín trên thị trường bất động sản Việt Nam, Cali Homes đã trở thành đối tác tin cậy của rất nhiều những công ty, tập đoàn hàng đầu trong lĩnh vực. <br>
              Triết lý kinh doanh của chúng tôi hướng tới sự phát triển bền vững, vì vậy, Cali Homes luôn lựa chọn đồng hành cùng các đối tác uy tín, nổ lực nhằm mang đến những sản phẩm tốt nhất, những cơ hội đầu tư triển vọng nhất tạo nên những thương vụ hấp dẫn nhất.</p>
            <div class="lst-partnership">
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_1.png" alt=""></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_2.png" alt=""></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_4.png" alt=""></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_5.png" alt=""></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_6.png" alt=""></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_7.png" alt=""></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/doitac_8.png" alt=""></div>
            </div>
        </div>
      </div>
    </div>
  </section>
</main>


<!-- SCRIPT -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.animateNumber.min.js"></script>
<script>
  $('.lst-partnership').slick({
    autoplay: true,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          slidesToShow: 5,
          centerMode: true,
          variableWidth: true,
          centerMode: true,
          centerPadding: '40px',
        }
      },
    ]
  });

  $('.n50').animateNumber({ number: 50, easing: 'swing' },5000);
  $('.n100').animateNumber({ number: 100 , easing: 'swing'},5000);
  $('.n200').animateNumber({ number: 200 , easing: 'swing'},5000);
</script>

<?php get_footer();
