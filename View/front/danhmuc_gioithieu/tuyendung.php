<style>
<?php include "./Assets/front/css/style.css";

?>
.call-green {
    color: #086637;
    font-size: 16px;
    line-height: 16px;
}

.call-orange {
    color: #f0a83c;
    font-size: 16px;
    line-height: 16px;
}
</style>
<section>
    <div>
        <p class="title-first">Tuyển dụng</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p>
                Công ty Luật Việt An là đơn vị tư vấn pháp lý quan tâm đặc biệt đến đạo đức nghề nghiệp, phong cách làm
                việc
                chuyên nghiệp, sự nhạy bén, tận tụy và hòa đồng trong môi trường làm việc. Đó chính là những yếu tố quan
                trọng để chúng tôi quyết định việc tuyển dụng nhân sự.
            </p>
            <div class="img-div-left">
                <img src="./Assets/front/images/Viet-An-Law-Firm-Team-in-Vietnam-4-e1603349489179.jpg" width="1257"
                    height="360" alt="">
            </div>
        </div>
        <div class="stick-div">
            <div class="d-right">
                <div class="div-hotline">
                    <div class="div-title">
                        <h3 class="type-title">Luật sư chuyên trách</h3>
                    </div>
                    <?php
                            $Hotline=new Hotline();
                            $result=$Hotline->HotlineAll();
                            while($set=$result->fetch()):
                        ?>
                    <div class="div-title-hotline">
                        <i class="<?php echo $set['icon']?>"></i>
                        <div class="col">
                            <div class="type-title-hl"><?php echo $set['name']?></div>
                            <span class="sub"><?php echo $set['phone']?></span>
                        </div>
                        <a href="<?php echo $set['link']?>" class="link"
                            title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
                    </div>
                    <?php
                            endwhile;
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <?php
        $Category=new Category();
        $result=$Category->showCategoryTuyendung();
        while($set=$result->fetch()):
    ?>
    <div class="d-related">
        <a href="<?php echo $set['url']?>" class="a-related" title="<?php echo $set['name']?>">
            <img src="./Assets/front/images/<?php echo $set['image']?>" width="200" height="120" alt=""
                class="img-related-left">
        </a>
        <div class="col-related">
            <div class="div-right-title">
                <a href="<?php echo $set['url']?>" title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
            </div>
            <div class="div-right-desc">
                <?php echo $set['description']?>
            </div>
            <div class="more">
                <a href="<?php echo $set['url']?>" title="<?php echo $set['name']?>">Xem chi tiết</a>
            </div>
        </div>
    </div>
    <?php
        endwhile;
    ?>
</section>