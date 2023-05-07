<style>
  .click{
    color:#ff9800;
  }
  body .header-content.fixed .logo-img img {
  max-height: 50px;
  width: auto;
  transition: all 365ms ease
}
.header-content.fixed {
  position: fixed;
  top: 0;
  max-width:1200px;
  width:100%;
  left: 50%;
  transform: translatex(-50%);
  z-index: 999;
  box-shadow: 0 5px 5px 0 rgba(0,0,0,.25);

}
</style>
<section id="main_header" class="head-menu  hide-col">
  <div class="menu-container-row head-col header-content">
    <div class="menu-head-logo logo-img">
      <div class="thumb">
        <img width="186" height="90" src="./Assets/front/images/logocopy.png" alt="">
      </div>
      <a href="#" class="link" title="Công ty Cổ phần Vinasimex">
        <span class="link-title">Công ty Cổ phần Vinasimex</span>
      </a>
    </div>
    <div id="menu_header" class="vnsm-elm menu-header vnsm-menu">
      <a href="#" class="close-menu" onclick data-toggle="modal" data-target="#menu_header">
        <i class="fa-times"></i>
      </a>
      <ul class="vnsm-title prog-container" id="nav_header">
        <li class="menu-item menu-item-post-type menu-li1">
          <a class="hasub menu_link a-ac nav-link active" style="color:#00578a;" href="trangchu">TRANG CHỦ</a>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="luat-viet-an" class="hasub menu_link" >GIỚI THIỆU</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
              $categoryPost=new CategoryPost();
              $result=$categoryPost->showCategoryGT();
              while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
                <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="<?php echo $set['slug']?>" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php endwhile; ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="tu-van-doanh-nghiep" class="hasub menu_link a-ac">DOANH NGHIỆP</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
                $categoryPost=new CategoryPost();
                $result=$categoryPost->showCategoryDN();
                while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
              <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="<?php echo $set['slug']?>" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php
              endwhile;
              ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="so-huu-tri-tue" class="hasub menu_link a-ac">SỞ HỮU TRÍ TUỆ</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
                $categoryPost=new CategoryPost();
                $result=$categoryPost->showCategorySHTT();
                while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
                <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="<?php echo $set['slug']?>" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php
              endwhile;
              ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="tu-van-dau-tu" class="hasub menu_link a-ac">ĐẦU TƯ</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
                $categoryPost=new CategoryPost();
                $result=$categoryPost->showCategoryDT();
                while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
                <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="<?php echo $set['slug']?>" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php
              endwhile;
              ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="tu-van-giay-phep" class="hasub menu_link a-ac">GIẤY PHÉP</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
                $categoryPost=new CategoryPost();
                $result=$categoryPost->showCategoryGP();
                while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
                <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="<?php echo $set['slug']?>" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php
              endwhile;
              ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="tu-van-phap-luat-thue" class="hasub menu_link a-ac">KẾ TOÁN-THUẾ</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
            <div class="mngt-elm vnsm-list">
              <?php
                $categoryPost=new CategoryPost();
                $result=$categoryPost->showCategoryKTT();
                while($set=$result->fetch()):
              ?>
              <div class="item item-1 current">
                <i class="<?php echo $set['icon']?>"></i>
                <div class="title"><?php echo $set['name']?></div>
                <a href="<?php echo $set['slug']?>" title="<?php echo $set['title']?>" class="link"><?php echo $set['title']?></a>
              </div>
              <?php
              endwhile;
              ?>
            </div>
          </section>
        </li>
        <li class="menu-item menu-item-toxonomy menu-item-cate">
          <a href="giai-quyet-tranh-chap" class="hasub menu_link a-ac">VỤ VIỆC-VỤ ÁN</a>
          <section id="menu_gioithieu" class="vnsm-elm vnsm-row hide-col">
          </section>
        </li>
      </ul>
    </div>
  </div>
</section>
<script>
  if (document.getElementById("main_header") != null) {
    setInterval(function () {
      var MenuHeight = document.getElementById("main_header").offsetHeight;
      $("#main_header").css("height", MenuHeight + "px");
      var scroll_position = jQuery("#main_header").offset().top;
      var screen_height = jQuery(window).height();
      var activation_offset = 0;
      var max_scroll_height = jQuery("body").height() + screen_height;
      var scroll_activation_point =
        scroll_position - screen_height * activation_offset;
      $(window).scroll(function () {
        var y_scroll_pos = window.pageYOffset;
        var element_in_view = y_scroll_pos > scroll_activation_point;
        var has_reached_bottom_of_page =
          max_scroll_height <= y_scroll_pos && !element_in_view;
        if (element_in_view || has_reached_bottom_of_page) {
          jQuery(".header-content").addClass("fixed").fadeIn();
        } else {
          jQuery(".header-content").removeClass("fixed");
        }
      });
    }, 500);
  }
</script>
