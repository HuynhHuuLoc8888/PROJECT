<style>
    <?php 
        include "./Assets/front/css/style.css";
    ?>
 .call-green{
    color: #086637;
    font-size: 16px;
    line-height: 16px;
}
.call-orange{
    color: #f0a83c;
    font-size: 16px;
    line-height: 16px;
}
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
    $result=$CategoryRelated->showCateRelate_KTT();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<section>
    <div>
        <p class="title-first">Dịch vụ kế toán</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p class="p-div-left">
                Hiện nay, Doanh nghiệp thường tự kê khai hoặc thuê kê toán ít kinh nghiệm nhằm giảm thiểu chi phí nhưng
                lại gặp rất nhiều khó khăn khi cơ quan thuế thanh tra quyết toán thuế. Với tiêu chí: “<strong>Giảm thiểu
                    rủi ro và chi phí cho doanh nghiệp</strong>,Đại lý thuế Việt An cung cấp dịch vụ kế toán nhằm hỗ trợ
                doanh nghiệp về thủ tục thuế trong suốt quá trình thành lập và hoạt động, giúp doanh nghiệp yên tâm phát
                triển kinh doanh.
            </p>
            <div class="img-div-left">
                <img src="./Assets/front/images/Tu-van-dich-vu-thue-e1603340051684.jpg" width="1000" height="219"
                    alt="">
            </div>
            <div class="gioithieu-full" style="text-align:center;">
                <span class="gioithieu-tv">
                    <a href="">DỊCH VỤ KẾ TOÁN THUẾ</a>
                </span>
            </div>
            <ul class="div-left-ul">
                <li>Tư vấn thủ tục và các quy định của nhà nước về các lĩnh vực mà doanh nghiệp hoạt động;</li>
                <li>Hướng dẫn, thực hiện kê khai hồ sơ thuế cho doanh nghiệp mới thành lập bao gồm: Nộp tờ khai lệ phí
                    môn bài, nộp thuế môn bài, Đăng ký trao đổi thông tin với cơ quan thuế; Đăng ký tài khoản ngân hàng,
                    đăng ký nộp thuế điện tử, Thông báo phát hành hóa đơn, Thay mặt doanh nghiệp làm việc trực tiếp với
                    cơ quan Thuế.
                </li>
            </ul>
            <h4 class="div-left-h4" id="Nội_dung_công_việc_dịch_vụ_kế_toán_thuế_trọn_gói_bao_gồm">Nội dung công việc dịch vụ kế toán thuế trọn gói bao gồm</h4>
            <ul class="div-left-ul">
                <li>Tư vấn và hoàn thiện hệ thống sổ sách kế toán cho doanh nghiệp, tư vấn cách lưu giữ sổ sách, chứng
                    từ kế toán theo quy định của pháp luật hiện hành;
                </li>
                <li>
                    Tư vấn tổng thể các kiến thức sơ bộ cho doanh nghiệp liên quan đến thuế giá trị gia tăng, thuế thu
                    nhập doanh nghiệp, thuế thu nhập cá nhân;
                </li>
                <li>
                    Tư vấn hoạch định chiến lược tài chính, cân đối chi phí hợp lý trong hoạt động kinh doanh của doanh
                    nghiệp;
                </li>
                <li>
                    Đại diện cho doanh nghiệp làm việc và giải trình với cơ quan nhà nước.
                </li>
            </ul>
            <h4 class="div-left-h4" id="Công_việc_hàng_tháng,_quý">Công việc hàng tháng, quý</h4>
            <ul class="div-left-ul">
                <li>
                    Nhận hóa đơn chứng từ của doanh nghiệp, tư vấn tính hợp lý, hợp lệ, hợp pháp của chứng từ phát sinh;
                </li>
                <li>
                    Hoàn thiện chứng từ và hạch toán các nghiệp vụ phát sinh nhằm cân đối thuế GTGT, TNCN, nhập xuất
                    tồn, tình hình công nợ cho doanh nghiệp;
                </li>
                <li>
                    Kê khai và nộp báo cáo thuế giá trị gia tăng;
                </li>
                <li>
                    Kê khai và nộp báo cáo tình hình sử dụng hoá đơn;
                </li>
                <li>
                    Kê khai và nộp báo cáo thuế thu nhập cá nhân (nếu trong kỳ có phát sinh khấu trừ thuế TNCN);
                </li>
                <li>
                    Nộp thuế TNDN tạm tính.
                </li>
            </ul>
            <h4 class="div-left-h4" id="Công_việc_cuối_năm">Công việc cuối năm</h4>
            <ul class="div-left-ul">
                <li>
                    Lập và nộp báo cáo tài chính và quyết toán thuế thu nhập cá nhân, thuế thu nhập doanh nghiệp;
                </li>
                <li>
                    In và hoàn thiện hệ thống sổ sách theo quy định bàn giao cho doanh nghiệp.
                </li>
            </ul>
            <p class="p-desc">
                Quý doanh nghiệp có khó khăn trong việc kê khai, thực hiện thủ tục thuế vui lòng liên hệ Đại lý thuế
                Việt An để được hỗ trợ dịch vụ kế toán thuế trọn gói nhanh chóng, chính xác nhất!
            </p>
            <h3 class="div-left-h3" id="Tại_sao_bạn_nên_sử_dụng_dịch_đại_lý_thuế,_kế_toán_Luật_Việt_An?">
                Tại sao bạn nên sử dụng dịch đại lý thuế, kế toán Luật Việt An?
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p class="p-div-left" style="font-size:16px; font-weight:400">
                Dịch vụ đại lý thuế là khái niệm ít phổ biến so với dịch vụ kế toán, kiểm toán nhưng giữ vai trò quan
                trọng, là cầu nối giữa cơ quan thuế và người nộp thuế; hỗ trợ, tạo điều kiện thuận lợi cho người nộp
                thuế tuân thủ pháp luật thuế; giảm chi phí về thời gian, nguồn lực cho cả cơ quan thuế và người nộp thuế
                thực thi pháp luật thuế.
            </p>
            <h3 class="div-left-h3" id="Vậy_Đại_lý_thuế_là_gì?">
                Vậy Đại lý thuế là gì?
            </h3>
            <p class="p-div-left" style="font-size:16px; font-weight:400">
                Đại lý thuế là một đơn vị cung cấp các dịch vụ thực hiện các thủ tục về thuế, là doanh nghiệp đáp ứng đủ
                các điều kiện để kinh doanh dịch vụ làm các thủ tục về thuế theo quy định tại Luật Quản lý thuế và những
                quy định khác của pháp luật có liên quan.
            </p>
            <h3 class="div-left-h3" id="Vậy_dịch_vụ_đại_lý_thuế_có_những_ưu_điểm_gì_?_Việc_sử_dụng_dịch_vụ_đại_lý_thuế_sẽ_mang_lại_những_hiệu_quả_thiết_thực_gì_cho_doanh_nghiệp?_">
                Vậy dịch vụ đại lý thuế có những ưu điểm gì ? Việc sử dụng dịch vụ đại lý thuế sẽ mang lại những hiệu
                quả thiết thực gì cho doanh nghiệp?
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <ol>
                <li>
                    <strong>Chuyên môn, nghiệp vụ</strong>
                </li>
            </ol>
            <p>
                Đại lý thuế là ngành nghề kinh doanh có điều kiện. Trước khi hoạt động, đại lý thuế phải làm thủ tục xin
                cấp Giấy xác nhận đủ điều kiện kinh doanh dịch vụ làm thủ tục về thuế và
            </p>
            <p>
                nhân viên đại lý thuế phải có chứng chỉ hành nghề dịch vụ làm thủ tục về thuế do Tổng cục Thuế cấp.
            </p>
            <p>
                Do đó, đại lý thuế hoàn toàn có trình độ chuyên môn, có kỹ năng, tránh rủi ro về thuế.
            </p>
            <ol class="ol-title" start="2">
                <li>
                    <strong>Chịu trách nhiệm, giảm thiểu rủi ro thuế cho doanh nghiệp</strong>
                </li>
            </ol>
            <p>
                Thông tư 51/2017/TT-BTC của Bộ Tài Chính quy định:
            </p>
            <p>
                Đại lý thuế chịu trách nhiệm khai, ký tên, đóng dấu trên tờ khai thuế, hồ sơ thuế, chứng từ nộp thuế, hồ
                sơ quyết toán thuế, hồ sơ hoàn thuế, hồ sơ miễn thuế, giảm thuế theo quy định của Luật Quản lý thuế và
                có trách nhiệm cung cấp chính xác, kịp thời theo yêu cầu của cơ quan quản lý thuế các tài liệu, chứng từ
                để chứng minh tính chính xác của việc khai thuế, nộp thuế, quyết toán thuế, đề nghị số tiền thuế được
                miễn, số tiền thuế được giảm, số tiền thuế được hoàn của người nộp thuế.
            </p>
            <p>
                Trường hợp đại lý thuế có hành vi thông đồng với người nộp thuế hoặc tự thực hiện các hành vi trốn thuế,
                khai thiếu thuế, vi phạm thủ tục về thuế thì người nộp thuế vẫn phải chịu trách nhiệm trước pháp luật về
                các nội dung sai phạm trên. Đại lý thuế phải liên đới chịu trách nhiệm và phải chịu bồi thường cho tổ
                chức, cá nhân nộp thuế theo hợp đồng đã ký kết với tổ chức, cá nhân nộp thuế.
            </p>
            <ol class="ol-title" start="3">
                <li>
                    <strong>Doanh nghiệp yên tâm sản xuất kinh doanh</strong>
                </li>
            </ol>
            <p>
                Khi sử dụng đại lý thuế, doanh nghiệp sẽ rất thuận lợi về thủ tục kê khai, nộp và hoàn thuế theo đúng
                quy định của pháp luật quản lý thuế. Tất cả những thủ tục có liên quan đến thuế sẽ do đại lý thuế tiến
                hành thực hiện. Công ty không phải mất thời gian và nhân lực vào việc thực hiện thủ tục kê khai, nộp,
                hoàn thuế.
            </p>
            <p>
                Điều này có ý nghĩa rất lớn đối với các Doanh nghiệp vừa và nhỏ cũng như các doanh nghiệp lớn. Sử dụng
                dịch vụ đại lý thuế sẽ giúp doanh nghiệp có thời gian, không phải lo lắng về các luật thuế, hay các quy
                định về thuế với doanh nghiệp để tập trung, in tâm vào kinh doanh.
            </p>
            <ol class="ol-title" start="4">
                <li>
                    <strong>Tiết kiệm chi phí</strong>
                </li>
            </ol>
            <p>
                Chi phí sử dụng dịch vu đại lý thuế thấp hơn so với việc sử dụng dịch vụ kế toán, hoặc thuê một kế toán
                có kinh nghiệm làm thủ tục khai thuế.
            </p>
            <h3 class="div-left-h3">
                Vậy, tại sao nên sử dụng dịch vụ Đại lý thuế Việt An?
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Theo thống kê năm 2019 của Tổng Cục Thuế cả nước có khoảng hơn 500 đại lý thuế. Đại lý thuế Việt An tự
                hào khi có thể cung cấp dịch vụ thuế, hỗ trợ doanh nghiệp cho nhiều doanh nghiệp lớn, nhỏ trên cả nước,
                đặc biệt tại hai thành phố lớn là Hà Nội và Hồ Chí Minh.
            </p>
            <p>
                Ngoài những lợi ích chung khi sử dụng dịch vụ đại lý thuế, doanh nghiệp sử dụng dịch vụ đại lý thuế Việt
                An còn được hưởng nhiều lợi ích khác như:
            </p>
            <ul class="div-left-ul">
                <li>
                    Được ưu đãi khi sử dụng các dịch vụ tư vấn pháp luật uy tín của Luật Việt An như: Thành lập doanh
                    nghiệp, thay đổi đăng ký doanh nghiệp, xin cấp giấy phép, sở hữu trí tuệ…;
                </li>
                <li>
                    Đội ngũ nhân viên đại lý thuế, Luật sư am hiểu pháp luật, thủ tục pháp lý luôn luôn đồng hành cùng
                    doanh nghiệp trong suốt quá trình hoạt động sản xuất kinh doanh;
                </li>
                <li>
                    Việt An luôn cam kết chịu trách nhiệm tối đa về dịch vụ đã cung cấp.
                </li>
            </ul>
            <blockquote>
                <p style="margin-left:10px;">
                    <em>
                        Quý doanh nghiệp, nếu có nhu cầu sử dụng dịch vụ đại lý thuế, xin vui lòng liên hệ Đại lý thuế
                        Việt
                        An để được hỗ trợ, tư vấn nhanh chóng, kịp thời!
                    </em>
                </p>
            </blockquote>
            <div class="gioithieu-full" style="text-align:center;">
                <span class="gioithieu-tv" id="CÁC_BÀI_VIẾT_LIÊN_QUAN_DỊCH_VỤ_KẾ_TOÁN_THUẾ_">
                    <a style=" color:#f58634; font-weight:600;font-size:22px;line-height:30px;">CÁC BÀI VIẾT
                        LIÊN QUAN DỊCH VỤ KẾ TOÁN THUẾ </a>
                </span>
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
                            <li>
                                <a href="#">DỊCH VỤ KẾ TOÁN THUẾ</a>
                                <ol>
                                    <li>
                                        <a href="#Nội_dung_công_việc_dịch_vụ_kế_toán_thuế_trọn_gói_bao_gồm">
                                            Nội dung công việc dịch vụ kế toán thuế trọn gói bao gồm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Công_việc_hàng_tháng,_quý">Công việc hàng tháng, quý</a>
                                    </li>
                                    <li>
                                        <a href="#Công_việc_cuối_năm">Công việc cuối năm</a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#Tại_sao_bạn_nên_sử_dụng_dịch_đại_lý_thuế,_kế_toán_Luật_Việt_An?">
                                    Tại sao bạn nên sử dụng dịch đại lý thuế, kế toán Luật Việt An?
                                </a>
                                <ol>
                                    <li>
                                        <a href="#Vậy_Đại_lý_thuế_là_gì?">
                                            Vậy Đại lý thuế là gì?
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#Vậy_dịch_vụ_đại_lý_thuế_có_những_ưu_điểm_gì_?_Việc_sử_dụng_dịch_vụ_đại_lý_thuế_sẽ_mang_lại_những_hiệu_quả_thiết_thực_gì_cho_doanh_nghiệp?_">
                                    Vậy dịch vụ đại lý thuế có những ưu điểm gì ? Việc sử dụng dịch vụ đại lý thuế sẽ mang
                                    lại những hiệu quả thiết thực gì cho doanh nghiệp?
                                </a>
                            </li>
                            <li>
                                <a href="#Vậy,_tại_sao_nên_sử_dụng_dịch_vụ_Đại_lý_thuế_Việt_An?">
                                    Vậy, tại sao nên sử dụng dịch vụ Đại lý thuế Việt An?
                                </a>
                            </li>
                            <li>
                                <a href="#CÁC_BÀI_VIẾT_LIÊN_QUAN_DỊCH_VỤ_KẾ_TOÁN_THUẾ_">
                                    CÁC BÀI VIẾT LIÊN QUAN DỊCH VỤ KẾ TOÁN THUẾ
                                </a>
                            </li>
                        </ol>
                    </div>
                    
                </div>
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
<!--danh mục bài mục liên quan-->
<div class="relate">
    <?php
        $CategoryRelated=new CategoryRelated();
        $result=$CategoryRelated->KTT_pagination($start,$limit);
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
            <li class="prev"><a href="tu-van-phap-luat-thue-page<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="tu-van-phap-luat-thue-page1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="tu-van-phap-luat-thue-page<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="tu-van-phap-luat-thue-page<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="tu-van-phap-luat-thue-page<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-phap-luat-thue-page<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-phap-luat-thue-page<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="tu-van-phap-luat-thue-page<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="tu-van-phap-luat-thue-page<?php echo $current_page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>
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