<style>
<?php include "./Assets/front/css/style.css";
?>
</style>
<section>
    <div>
        <p class="title-first">Liên hệ Công ty Luật Việt An</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p style="text-align: justify;">
                Công ty luật , Đại diện sở hữu trí tuệ, Đại lý thuế Việt An là một trong
                nhưng <a data-autolink-id="25" target="_self" href="#" title="công ty luật">Công ty
                    Luật</a> hàng đầu tại Việt Nam trong lĩnh vực tư vấn pháp luật Doanh nghiệp – Đầu tư – Kinh doanh-
                Sở hữu trí tuệ – Lao động – Thuế- Giấy phép – Dân sự… Quý khách hàng vui lòng liên hệ với chúng tôi để
                nhận được sự hỗ trợ tận tình từ những Luật sư và Chuyên gia tư vấn hàng đầu tại Hà Nội và TP. Hồ Chí
                Minh cũng như các tỉnh thành trong cả nước..
            </p>
            <img src="./Assets/front/images/Viet-An-Law-GioiThieu.jpg" width="1257" height="360">
            <p>
                Đội ngũ luật sư và chuyên viên tư vấn pháp luật Việt An nhiều năm kinh nghiệm chuyên sâu trong pháp luật
                kinh doanh thương mại và pháp luật dân sự, sở hữu trí tuệ &amp; Tư vấn xin các giấy phép con. Chúng tôi
                luôn lắng nghe và sẽ đưa ra hướng tư vấn cũng như thực hiện giải pháp pháp lý để giải quyết các vấn đề
                pháp lý mà khách hàng đang cần tư vấn và hỗ trợ.
            </p>
            <div class="box-main">
                <div class="box-title">
                    TÌM ĐẾN CÔNG TY LUẬT VIỆT AN, TÌM ĐẾN NHỮNG CÂU TRẢ LỜI - FIND VIET AN LAW, FIND ANSWERS
                </div>
                <div class="box-content">
                    <div class="box-list" style="margin-left:0px">
                        <p style="text-align: center;">
                            <span style="color: #339966;">
                                <strong>
                                    GIÁM ĐỐC – TIẾN SỸ, LUẬT SƯ, NGƯỜI ĐẠI DIỆN SỞ HỮU TRÍ TUỆ: ĐỖ THỊ THU HÀ:
                                    <span style="color: #ff9900;">
                                        09 33 11 33 66
                                    </span>
                                </strong>
                            </span>
                        </p>
                        <h3 class="div-left-h3" id="VĂN_PHÒNG_TƯ_VẤN_TẠI_HÀ_NỘI">VĂN PHÒNG TƯ VẤN TẠI HÀ NỘI</h3>
                        <ul>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Tầng 3, Tòa nhà Hoàng Ngân Plaza, số 125 Hoàng Ngân, Phường Trung Hòa,<br>
                                Quận Cầu Giấy, TP. Hà Nội
                            </li>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Điện thoại : (024) 66 64 06 06 – (024) 66 64 05 05
                            </li>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Phone : 09 3311 3366
                            </li>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Email : <a href="#">hanoi@luatvietan.vn</a>
                            </li>

                        </ul>
                        <h2 class="div-left-h3" id="VĂN_PHÒNG_TƯ_VẤN_TẠI_TP_HỒ_CHÍ_MINH">VĂN PHÒNG TƯ VẤN TẠI TP HỒ CHÍ
                            MINH</h2>
                        <ul>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                P. 04.68, Tầng 4, Tòa nhà RiverGate Residence, 151-155 Bến Vân Đồn, Phường 6,<br>
                                Quận 4, TP. Hồ Chí Minh

                            </li>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Điện thoại : (028) 36 36 29 65 – (028) 36 36 29 75

                            </li>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Phone : 09 61 67 55 66
                            </li>
                            <li>
                                <img width="19" height="18" src="./Assets/front/images/check18_04.png" />
                                Email : <a href="#">saigon@luatvietan.vn</a>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="title-postrelated" style="margin-top:40px;">
                <i class="icon fa-newspaper"></i>
                <h3 class="type-postrelated">Bài viết liên quan</h3>
                <span class="sub-related"></span>
            </div>
            <div>
                <?php
                $CategoryRelated=new CategoryRelated();
                $result=$CategoryRelated->showCateRelate_LH();
                while($set=$result->fetch()):
                ?>
                <div class="<?php echo $set['description']?>">
                    <div class="title-post-related">
                        <a class="a-post-related" href="<?php echo $set['url']?>"
                            title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
                    </div>
                </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
        <div class="btn-mucluc">
            <i class="icon fa-bars"></i>
            <div class="type-mucluc">Mục lục</div>
        </div>
        <div class="sticky-div">
            <div class="d-right">
                <div id="section_at" class="div-right-editor block">
                    <div id="divright-at" class="div-right-at">
                        <div class="bt-close">
                            <i class="fa-times"></i>
                        </div>
                        <div class="div-right-title">Mục lục</div>
                        <div class="sh-at" data-show="Hiện" data-hide="Ẩn">Ẩn</div>
                        <ol id="at-item" type="I">
                            <li><a href="#VĂN_PHÒNG_TƯ_VẤN_TẠI_HÀ_NỘI">VĂN PHÒNG TƯ VẤN TẠI HÀ NỘI</a></li>
                            <li><a href="#VĂN_PHÒNG_TƯ_VẤN_TẠI_TP_HỒ_CHÍ_MINH">VĂN PHÒNG TƯ VẤN TẠI TP HỒ CHÍ MINH</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="title-right">
                    <h3 class="type-title-right">
                        Công ty luật việt an 
                    </h3>
                    <span class="sub-right"></span>
                    <a href="#" title="Công ty luật việt an" class="link">Công ty luật việt an</a>
                </div>
                <?php
                $CategoryRelated=new CategoryRelated();
                $result=$CategoryRelated->showCateRelate_CTLVA();
                while($set=$result->fetch()):
                ?>
                <div>
                    <div class="<?php echo $set['description']?>">
                        <div class="title-post-related">
                            <a class="a-post-related" href="<?php echo $set['url']?>"
                                title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
            ?>
                <div class="title-right">
                    <h3 class="type-title-right-2">
                        Văn bản pháp luật
                    </h3>
                    <span class="sub-right"></span>
                    <a href="#" title="Văn bản pháp luật" class="link">Văn bản pháp luật</a>
                </div>
                <?php
                $CategoryRelated=new CategoryRelated();
                $result=$CategoryRelated->showCateRelate_VBPL();
                while($set=$result->fetch()):
                ?>
                <div>
                    <div class="<?php echo $set['description']?>">
                        <div class="title-post-related">
                            <a class="a-post-related" href="<?php echo $set['url']?>"
                                title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
            ?>
                <div class="title-right">
                    <h3 class="type-title-right-2">
                        tư vấn pháp luật
                    </h3>
                    <span class="sub-right"></span>
                    <a href="#" title="tư vấn pháp luật" class="link">tư vấn pháp luật</a>
                </div>
                <?php
                $CategoryRelated=new CategoryRelated();
                $result=$CategoryRelated->showCateRelate_TVPL();
                while($set=$result->fetch()):
                ?>
                <div>
                    <div class="<?php echo $set['description']?>">
                        <div class="title-post-related">
                            <a class="a-post-related" href="<?php echo $set['url']?>"
                                title="<?php echo $set['name']?>"><?php echo $set['name']?></a>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
            ?>
            </div>
        </div>
    </div>

</section>
<script>
jQuery(document).ready(function($) {
    $("#at-item").toc({
        content: "div.div-left",
        headings: "h2,h3,h4,h5,h6"
    });
    $(".sh-at").click(function() {
        $("#at-item").toggle("slide");
    });
    $(".sh-at").on("click", function() {
        var second = $(this).data("show");
        var start = $(this).data("hide");
        if (second === $(this).text()) {
            $(this).text(start);
        } else {
            $(this).text(second);
        }
    });
});
jQuery(document).on("click", ".btn-mucluc", function() {
    jQuery("#section_at").addClass("active");
});
jQuery(document).on("click", ".bt-close", function() {
    jQuery("#section_at").removeClass("active");
});
</script>