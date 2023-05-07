<style>
    <?php
        include "./Assets/front/css/style.css";
    ?>
.pagination {
list-style-type: none;
padding: 10px 0;
display: inline-flex;
justify-content: space-between;
box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_License();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<hr>
<div class="gioithieu" style="background: rgb(251, 255, 251);">
    <h3 style="color: green; text-align: center;">DỊCH VỤ XIN GIẤY PHÉP CON</h3>
    <p class="p-title">
        Thành lập công ty, doanh nghiệp là bước khởi đầu cho quá trình thực hiện hoạt động kinh doanh cho doanh nghiệp.
        Có rất nhiều ngành nghề
        không cần phải xin phép hoạt động cho ngành nghề kinh doanh mà chỉ cần có giấy phép đăng ký kinh doanh là có thể
        thực hiện được các hoạt
        động kinh doanh. Theo quy định của pháp luật Việt Nam có 243 ngành nghề kinh doanh có điều kiện, trong số đó có
        rất nhiều ngành nghề phải
        thực hiện xin giấy phép con mới đủ điều kiện để kinh doanh theo quy định của pháp luật.
    </p>
    <p class="p-title">
        Doanh nghiệp muốn xin được các giấy phép con phải đáp ứng đủ các điều kiện do luật định và phải thực hiện đúng
        trình tự thủ tục xin được
        cấp phép giấy phép con từ các cơ quan chức năng có thẩm quyền quản lý trực tiếp ngành nghề kinh doanh đó. Trên
        cơ sở nhu cầu xin giấy phép
        của doanh nghiệp, Công ty Luật Việt An cung cấp dịch vụ xin giấy phép con dưới đây.
    </p>
    <img style="padding-bottom:30px;" src="./Assets/front/images/Giay-phep-con_trangchu.jpg" style="width: 100%;">
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">DỊCH VỤ GIẤY PHÉP KINH DOANH (GIẤY PHÉP CON)</a>
        </span>
    </div>
    <!--Phần hiển thị thông tin database-->
    <div class="row">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryLicense();
          while($set=$result->fetch()):
        ?>
        <div class="col-lg-3 col-md-4 mb-3 text-left form-all">
            <!--Thẻ hình ảnh-->
            <div class="view overlay z-depth-1-half">
                <img width="380" height="280" style="max-width:100%"
                    src="./Assets/back/images/<?php echo $set['image']?>" alt="">
            </div>
            <!--Thẻ tên-->
            <p class="font-weight-bold form-name"><?php echo $set['name']?></p>
            <div class="form-in4">
                <p>
                    <strong><?php echo $set['description']?></strong>
                </p>
                <p>Phone:<?php echo $set['phone']?></p>
                <p>Email:<?php echo $set['email']?></p>
            </div>
            <a href="#" class="link" title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
        </div>
        <?php
          endwhile;
        ?>
    </div>
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">TIN TỨC LIÊN QUAN</a>
        </span>
    </div>
    <div class="relate" style="text-align:left;">
      <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->License_pagination($start,$limit);
        while($set=$result->fetch()):
      ?>
      <div class="cate-related">
          <div class="title">
              <a href="<?php echo $set['url']?>" title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
          </div>
          <div class="desc">
              <p><?php echo $set['description']?></p>
          </div>
          <div class="more">
              <a href="<?php echo $set['url']?>" title="<?php echo $set['name']?>">Xem chi tiết</a>
          </div>  
      </div>
      <?php
        endwhile;
      ?>
    </div>
<div class="col-md-12 col-lg-12 col-sm-12" width="100%" style="margin-right:300px;">
    <?php if (ceil($count / $limit) > 0): ?>
        <ul class="pagination" style="margin-left:400px;">
                <?php if ($current_page > 1): ?>
            <li class="prev"><a href="tu-van-giay-phep-page<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="tu-van-giay-phep-page1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="tu-van-giay-phep-page<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="tu-van-giay-phep-page<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="tu-van-giay-phep-page<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-giay-phep-page<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-giay-phep-page<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="tu-van-giay-phep-page<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="tu-van-giay-phep-page<?php echo $current_page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>
</div>