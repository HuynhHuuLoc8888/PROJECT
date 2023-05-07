<style>
    h1 {
        color: #008543;
        font-size: 30px;
        line-height: 36px;
        font-weight: 400;
        text-align: center;
    }

    p.ctvn-title{
        color: #000000;
        font-family: Times New Roman, serif;
        font-size: 18.6667px;
    }
    <?php
        include "./Assets/front/css/style.css";
    ?>
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_CTTVN();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<div>
    <h1>CÔNG TY LUẬT TẠI VIỆT NAM</h1>
    <p class="ctvn-title">Hơn một thập kỷ qua (2007 đến nay) tổ chức hành nghề, nghề luật
        sư là một trong những nghề quan trọng trong đời sống xã hội của
        người dân Việt Nam. Các tổ chức cá nhân trong và ngoài nước khi
        bước chân vào thị trường kinh doanh tại Việt Nam, một trong
        những công việc quan trọng là tìm hiểu các thông tin, các văn
        bản pháp luật quy định liên quan đến lĩnh vực mà nhà đầu tư sẽ
        tiến hành hoạt động kinh doanh. Do vậy hơn thập kỷ qua có nhiều
        tổ chức hành nghề, luật sư được thành lập và đã một phần nào đáp
        ứng được nhu cầu tư vấn pháp luật tại Việt Nam. Để cung cấp
        thông tin đa chiều công ty luật Việt An được thành lập năm 2007
        cung cấp tới bạn đọc thêm những thông tin các công ty luật, văn
        phòng luật sư và
        <a href="https://luatvietan.vn/luat-su-tai-viet-nam" style="text-decoration: none;"><b>luật sư uy tín tại Việt Nam</b></a>
    </p>
    <p>
        <img src="./Assets/front/images/Viet-An_gth_gthchung.jpg" style="text-align:justify;">
    </p>
    <div class="gioithieu-full" style="text-align:center;">
        <span class="gioithieu-tv">
            <a href="">TƯ VẤN LUẬT TRÊN TOÀN QUỐC</a>
        </span>
    </div>
    <div class="row">
        <?php
          $Category=new Category();
          $result=$Category->showCategoryCTTVN();
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
            <a href="">CÁC BÀI VIẾT LIÊN QUAN</a>
        </span>
    </div>
    <div class="relate">
      <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->CTTVN_pagination($start,$limit);
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
    <div class="col-md-12 col-lg-12 col-sm-12 col-md-offset-3" style="margin-left:450px;">
        <ul class="pagination">
        <?php
                    // nút lùi
                    if($current_page > 1 && $page > 1){
                        echo '<li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="cong-ty-luat-tai-viet-nam-page'.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                    <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;"><a href="cong-ty-luat-tai-viet-nam-page<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="cong-ty-luat-tai-viet-nam-page'.($current_page+1).'">Next</a></li>';
                        }
                    ?>
        </ul>
    </div>
</div>