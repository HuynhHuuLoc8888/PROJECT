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
    $result=$CategoryRelated->showCateRelate_Business();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div class="gioithieu" style="background: rgb(251, 255, 251);">
    <h3 style="color: green; text-align: center;">TƯ VẤN PHÁP LUẬT DOANH NGHIỆP</h3>
    <p>
        Một doanh nghiêp muốn tồn tại và phát triển tốt thì phải dựa trên các quy phạm pháp luật để tạo dựng nên một cơ
        sở nền
        móng vững chắc về nguồn lực trong quá trình thực hiện các hoạt động kinh doanh. Tất các các nguồn lực cốt lõi
        như nguồn nhân lực,
        tài chính, cơ sở hạ tầng, máy móc, trang thiết bị, nhà xưởng, công nghệ, sản phẩm trí tuệ, bí quyết kinh doanh
        …đều được xây dựng
        có sự ràng buộc pháp lý… Để xây dựng các mối quan hệ chặt chẽ cho các nguồn lực của doanh nghiệp, doanh nghiệp
        phải dựa trên các quy
        phạm pháp luật để điều chỉnh các muốn quan hệ pháp luật đó để phục vụ tốt nhất cho quá trình hoạt động kinh
        doanh.
        <br>
        Công ty luật Việt An với kinh nghiệm chuyên sâu và chuyên nghiệp chúng tôi sẽ cung cấp cho doanh nghiệp những
        giải pháp pháp ly tối ưu nhất,
        qua đó giúp cho doanh nghiệp có sự ổn định trong kinh doanh, tránh được những rui ro pháp lý có thể xẩy ra trong
        tương lai cũng như xây dựng
        phát triển bền vững cho doanh nghiệp trên con đường kinh doanh tại Việt Nam cũng như hội nhập thị trường quốc
        tế.
    </p>
    <img src="./Assets/front/images/doanhnghiep_trangchu.jpg" style="width: 100%;">
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">DỊCH VỤ TƯ VẤN PHÁP LUẬT DOANH NGHIỆP</a>
        </span>
    </div>
    <!--Phần hiển thị thông tin database-->
    <div class="row">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryBusiness();
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
            <a href="<?php echo $set['url']?>" class="link" title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
        </div>
        <?php
          endwhile;
        ?>
    </div>
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">BÀI VIẾT LIÊN QUAN ĐẾN TƯ VẤN DOANH NGHIỆP</a>
        </span>
    </div>
    <div class="relate">
      <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->Business_pagination($start,$limit);
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
            <li class="prev"><a href="tu-van-doanh-nghiep-page<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="tu-van-doanh-nghiep-page1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="tu-van-doanh-nghiep-page<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="tu-van-doanh-nghiep-page<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="tu-van-doanh-nghiep-page<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-doanh-nghiep-page<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-doanh-nghiep-page<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="tu-van-doanh-nghiep-page<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="tu-van-doanh-nghiep-page<?php echo $current_page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>
</div>