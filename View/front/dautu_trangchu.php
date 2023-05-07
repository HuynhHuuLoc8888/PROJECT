<style>
  .gioithieu ul{
    text-align:left;
  }
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
    $result=$CategoryRelated->showCateRelate_Invest();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div class="gioithieu" style="background: rgb(251, 255, 251);text-align:center;">
      <h3 style="color: green; text-align: center;">TƯ VẤN ĐẦU TƯ</h3>
      <p style="font-size: 15px;">
        Kinh tế Việt Nam ngày càng hội nhập sâu rộng trên thị trường quốc tế. Chính vì vậy lĩnh vực đầu tư là một trong những thành phần cơ cấu
        quan trọng để các nhà đầu tư nước ngoài đầu tư vốn (FDI) vào Việt Nam và các nhà đầu tư Việt Nam đầu tư ra nước ngoài qua kênh đầu tư này
        sẽ góp phần thúc đầy nền kinh tế thế giới ngày càng phát triển vững mạnh. Nắm bắt những thông tin, cơ hội đầu tư, hành lang pháp lý quy
        định tại Luật pháp Việt Nam, luật pháp quốc tế liên quan đến lĩnh vực đầu tư là một lợi thế kinh doanh lớn.
        <br>
        Trên cơ sở đáp ứng những yêu cầu pháp lý của nhà đầu tư trong và ngoài nước, công ty Luật Việt An cung cấp dịch vụ tư vấn pháp luật 
        đầu tư chuyên sâu trong suốt hơn một thập kỉ qua, những dịch vụ đầu tư Luật Việt An đang cung cấp cho nhà đầu tư:
        <br>
      </p>
      <h3 style="color: orange; font-family:Arial, Helvetica, sans-serif; text-decoration: underline;">TƯ VẤN ĐẦU TƯ</h3>
      <ul style="font-size: 15px;">
        <li>
          Đầu tư thành lập doanh nghiệp có vốn đầu tư nước ngoài bao gồm: Doanh nghiệp 100% vốn nước ngoài hoặc doanh nghiệp có một phần vốn của
           nhà đầu tư nước ngoài (hay còn gọi là doanh nghiệp liên doanh):
        </li>
        <li>
          Nhà đầu tư nước ngoài đầu tư vào Việt Nam theo hình thức góp vốn, mua cổ phần, phần vốn góp doanh nghiệp đã thành lập tại Việt Nam;
        </li>
        <li>
          Đầu tư theo hình thức hợp đồng PPP;
        </li>
        <li>
          Đầu tư theo hình thức hợp đồng BCC.
        </li>
        <li>
          Xin giấy phép cho nhà thầu nước ngoài tại Việt Nam.
        </li>
        <li>
          Xin giấy phép liên quan đến thẻ cư trú, tạm trú và visa cho người nước ngoài làm việc và công tác tại Việt Nam.
        </li>
        <li>
          Thay đổi các thông tin liên quan đến nhà đầu tư nước ngoài, giấy phép đầu tư và giấy chứng nhận đăng ký doanh nghiệp.
        </li>
        <li>
          Thực hiện các thủ tục chuyển nhượng phần vốn góp của nhà đầu tư nước ngoài.
        </li>
        <li>
          Mua bán công ty, sáp nhập công ty có vốn nước ngoài tại Việt Nam
        </li>
        <li>
          Tạm dừng, giải thể: Văn phòng đại diện, chi nhánh, công ty nước ngoài tại Việt Nam.
        </li>
        <li>
          Tư vấn cho các nhà đầu tư nước ngoài thực hiện các nghĩa vụ thuế, hoàn thuế và các nghĩa vụ khác khi làm việc và đầu tư tại Việt Nam.
        </li>
        <li>
          Tư vấn cho nhà đầu tư Việt Nam đầu tư ra nước ngoài: Xin chấp thuận chủ trương đầu tư, giấy phép đầu tư ra nước ngoài.
        </li>
      </ul>
      <img src="./Assets/front/images/Tu-van-dau-tu-2_trangchu.jpg" style="width: 100%;">
      <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">DỊCH VỤ TƯ VẤN ĐẦU TƯ</a>
        </span>
    </div>
       <!--Phần hiển thị thông tin database-->
       <div class="row" style="text-align:left;">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryInvest();
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
        $result=$CategoryRelated->Invest_pagination($start,$limit);
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
        <ul class="pagination">
                <?php if ($current_page > 1): ?>
            <li class="prev"><a href="tu-van-dau-tu-page<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="tu-van-dau-tu-page1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="tu-van-dau-tu-page<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="tu-van-dau-tu-page<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="tu-van-dau-tu-page<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-dau-tu-page<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-dau-tu-page<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="tu-van-dau-tu-page<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="tu-van-dau-tu-page<?php echo $current_page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>
  </div>