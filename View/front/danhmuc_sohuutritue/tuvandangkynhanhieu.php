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
    $result=$CategoryRelated->showCateRelate_TVKDNH();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<section>
    <div>
        <p class="title-first">Tư vấn đăng ký nhãn hiệu</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p>
                Công ty luật Việt An là tổ chức hành nghề luật sư, đồng thời cũng là Tổ chức Đại diện Sở hữu trí tuệ tại
                Việt Nam. Với mã số đại diện Sở hữu trí tuệ là 83 do Cục Sở hữu trí tuệ ghi nhận tư cách hoạt động theo
                Quyết định số 1448/QĐ – SHTT năm 2007. Sau 15 năm hoạt động Luật Việt An đã hỗ trợ thủ tục xác lập quyền
                sở hữu trí tuệ nói chung, quyền đăng ký nhãn hiệu nói riêng cho hàng chục ngàn lượt khách hàng trong và
                ngoài nước. Bên cạnh, đó Luật Việt An còn hỗ trợ khách hàng trong việc sửa đổi đơn, sửa đổi bằng bảo hộ,
                chuyển nhượng, gia hạn, cấp phó bản, xử lý vi phạm đối với nhãn hiệu của khách hàng tại Việt Nam và nước
                ngoài.
            </p>
            <div class="img-div-left">
                <img src="./Assets/front/images/Dang-ky-so-huu-tri-tue-Viet-An.jpg" width="977" height="344" alt="">
            </div>
            <h3 class="div-left-h3" style="margin-top:0;" id="Đăng_ký_nhãn_hiệu_tại_Việt_Nam">
                Đăng ký nhãn hiệu tại Việt Nam
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <ul class="div-left-ul" style="list-style-type: square">
                <li>Công ty luật Việt An hỗ trợ chủ đơn tra cứu sơ bộ nhãn hiệu miễn phí.</li>
                <li>Tra cứu đăng ký nhãn hiệu chính thức để có kết quả toàn diện xác định phương án nộp đơn đăng ký nhãn
                    hiệu tại Cục Sở hữu trí tuệ Việt Nam.</li>
                <li>Tư vấn các điều kiện đăng ký, thủ tuc đăng ký nhãn hiệu tại Việt Nam.</li>
                <li>Tư vấn các dấu hiệu tương tự, trùng lặp, gây nhầm lẫn dẫn tới nhãn hiệu không được cấp văn bằng bảo
                    hộ;</li>
                <li>Tư vấn xác định nhóm, phân nhóm cho nhãn hiệu để tránh bị từ chối về mặt hình thức, nội dung trong
                    quá trình xét nghiệm đơn nhãn hiệu tại Cục Sở hữu trí tuệ.</li>
                <li>Tư vấn phương án sửa đổi đăng ký nhãn hiệu để có khả năng đăng ký cấp văn bằng cho chủ đơn đăng ký.
                </li>
                <li>Tư vấn hướng dẫn thời điểm xác lập quyền đối với nhãn hiệu: Theo qui định của pháp luật Việt Nam và
                    một số nước nhãn hiệu chỉ được xác lập quyền trên cơ sở quyết định cấp văn bằng bảo hộ độc quyền
                    hoặc công nhận đăng ký quốc tế của Cục Sở hữu trí tuệ. Đây chính là nguyên tắc ưu tiên người đăng ký
                    trước khác với luật sở hữu trí tuệ của Mỹ và một số quốc gia khác nhãn hiệu được xác lập trên cơ sở
                    chứng minh ưu tiên người sử dụng trước.</li>
                <li>Tư vấn phạm vi bảo hộ của giấy chứng nhận đăng ký nhãn hiệu: Quyền đối với nhãn hiệu nói riêng và
                    quyền sở hữu trí tuệ nói chung được xác nhận phạm vi bảo hộ theo lãnh thổ quốc gia, tức là nhãn hiệu
                    khi đăng ký bảo hộ tại quốc gia nào sẽ được bảo hộ tại quốc gia đó mà không phải cứ đăng ký một quốc
                    gia đương nhiên được bảo hộ trên toàn thế giới. Do vậy, doanh nghiệp có nhu cầu kinh doanh sản phẩm
                    dịch vụ của mình ở các quốc gia khác nhau cần tiến hành đăng ký bảo hộ nhãn hiệu của doanh nghiệp
                    mình ở các quốc gia đó để hàng hóa, dịch vụ của mình không bị tranh chấp về việc sử dụng nhãn hiệu
                    trong quá trình kinh doanh.</li>
                <li>Đại diện cho khách hàng, doanh nghiệp, chủ đơn là người nước ngoài trong việc nộp đơn xin cấp giấy
                    chứng nhận đăng ký nhãn hiệu, ghi nhận sửa đổi, gia hạn văn bằng bảo hộ nhãn hiệu ở Việt Nam.</li>
                <li>Đàm phán, soạn thảo, thẩm định, đăng ký hợp đồng chuyển giao quyền sử dụng hoặc quyền sở hữu nhãn
                    hiệu ở Việt Nam.</li>
                <li>Tư vấn chiến lược xây dựng, phát triển thương hiệu.</li>
                <li>Xử lý vi phạm nhãn hiệu.</li>
                <li>Phản đối đơn đăng ký nhãn hiệu.</li>
                <li>Phúc đáp đơn đăng ký nhãn hiệu bị từ chối cấp văn bằng bảo hộ.</li>
                <li>Khiếu nại các vấn đề liên quan đến xác lập, bảo vệ quyền nhãn hiệu.</li>
                <li>Hủy bỏ hiệu lực giấy chứng nhận đăng ký nhãn hiệu theo qui định của pháp luật.</li>
            </ul>
            <h3 class="div-left-h3" style="margin-top:0;" id="Đăng_ký_nhãn_hiệu_tại_nước_ngoài">
                Đăng ký nhãn hiệu tại nước ngoài
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <ul class="div-left-ul" style="margin-top:0;" style="list-style-type: square">
                <li>Tư vấn cá nhân, doanh nghiệp, tổ chức Việt Nam có nhu cầu đăng ký nhãn hiệu tại nước ngoài hoặc theo
                    vùng lãnh thổ hoặc theo thỏa ước Madrid.</li>
                <li>Tư vấn cá nhân, doanh nghiệp nước ngoài có nhu cầu đăng ký nhãn hiệu tại các quốc gia khác nhau hoặc
                    theo các phương thức đăng ký nhãn hiệu quốc tế khác.</li>
                <li>Tư vấn cách thức nộp đơn đăng ký nhãn hiệu ở các quốc gia khác nhau khi doanh nghiệp có nhu cầu: tư
                    vấn cách thức xác lập quyền đối với nhãn hiệu tại các nước trên thế giới vì tùy thuộc vào luật pháp
                    của mỗi nước quy định quyền đối với nhãn hiệu phát sinh thông qua đăng ký hay sử dụng nhãn hiệu.
                </li>
                <li>Tư vấn đăng ký nhãn hiệu trực tiếp ở từng nước hoặc đăng ký qua hệ đăng ký quốc tế Madrid bằng cách
                    nộp một đơn duy nhất trong đó có chỉ định các nước xin đăng ký. Khi đăng ký theo Madrid, trước hết
                    nhãn hiệu phải đã được nộp đơn đăng ký hoặc đã được đăng ký tại Việt Nam tùy thuộc vào các nước xin
                    bảo hộ thuộc khối Madrid Protocol hay khối Madrid Agreement.</li>
                <li>Đánh giá hiệu lực giấy chứng nhận đăng ký nhãn hiệu và khả năng vi phạm các quyền nhãn hiệu đang
                    được bảo hộ ở nước ngoài.</li>
                <li>Thực thi các quyền nhãn hiệu đang được bảo hộ: điều tra, giám sát, thương lượng, hòa giải, khởi kiện
                    ra tòa hoặc yêu cầu cơ quan có thẩm quyền khác xử lý xâm phạm ở nước ngoài.</li>
            </ul>
            <h3 class="div-left-h3" style="margin-top:0;"
                id="Tài_liệu_khách_hàng_cần_chuẩn_bị_khi_đăng_ký_nhãn_hiệu_thông_qua_Luật_Việt_An">
                Tài liệu khách hàng cần chuẩn bị khi đăng ký nhãn hiệu thông qua Luật Việt An
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <p>
                Công ty luật Việt An là một tổ chức Đại diện Sở hữu trí tuệ nên quý khách hàng sẽ được đảm bảo mọi quyền
                lợi khi sử dụng dịch vụ về đăng ký nhãn hiệu của chúng tôi. Để thực hiện đăng ký nhãn hiệu thông qua
                Luật Việt An dù tại Việt Nam hay nước ngoài quý khách hàng chỉ cần chuẩn bị các tài liệu sau:
            </p>
            <ul class="div-left-ul" style="list-style-type: square;margin-top:0;">
                <li>Mẫu nhãn hiệu;</li>
                <li>Danh mục sản phẩm dịch vụ cần tra cứu và đăng ký nhãn hiệu.</li>
                <li>Ký Giấy ủy quyền theo mẫu của Luật Việt An.</li>
                <li>Tài liệu xin hưởng quyền ưu tiên (nếu có).</li>
                <li>Đóng lệ phí theo quy định.</li>
            </ul>
            <h3 class="div-left-h3" style="margin-top:0;" id="Quy_định_về_Bảng_phân_loại_quốc_tế_về_nhãn_hiệu">
                Quy định về Bảng phân loại quốc tế về nhãn hiệu
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <ul class="div-left-ul" style="list-style-type: square">
                <li>Phân nhóm nhãn hiệu được căn cứ theo Bảng phân loại quốc tế về nhãn hiệu (Bảng phân loại Ni-xơ). Hầu
                    hết các quốc gia trên thế giới đều sử dụng Bảng phân loại quốc tế về nhãn hiệu làm căn cứ phân nhóm
                    đơn đăng ký nhãn hiệu.</li>
                <li>Việc phân nhóm nhãn hiệu có thể giống nhưng cũng có thể khác so với danh mục ngành nghề đăng ký kinh
                    doanh của doanh nghiệp. Vì có các ngành nghề giống nhau nhưng được phân nhóm khác nhau, và ngược lại
                    có các ngành nghề khác nhau lại được phân cùng nhóm hàng hóa, dịch vụ khi đăng ký nhãn hiệu.</li>
                <li>Tất cả hàng hóa, dịch vụ trên thị trường có rất nhiều loại nhưng theo Bảng&nbsp;phân loại nhãn hiệu
                    cũng chỉ có tất cả 45 nhóm. Trong đó, từ nhóm 1 đến nhóm 34 phân cho sản phẩm, hàng hóa và từ nhóm
                    35 đến nhóm 45 (11 nhóm) cho các dịch vụ.</li>
                <li>Tại Việt Nam và hầu hết các nước trên thế giới đều áp dụng phí đăng ký nhãn hiệu căn cứ theo nhóm
                    hàng hóa, dịch vụ đăng ký nhãn hiệu. Khi một đơn đăng ký nhãn hiệu càng nhiều nhóm hàng hóa, dịch vụ
                    thì phí đăng ký sẽ càng nhiều.</li>
                <li>Một đơn đăng ký nhãn hiệu có thể đăng ký từ 01 nhóm hàng hóa, dịch vụ đến 45 nhóm hàng hóa, dịch vụ
                    theo nhu cầu của người nộp đơn. Một số nước như Myanma một đơn đăng ký nhãn hiệu lại chỉ đăng ký cho
                    01 nhóm.</li>
            </ul>
            <h3 class="div-left-h3" style="margin-top:0;" id="Thời_hạn_bảo_hộ_nhãn_hiệu">
                Thời hạn bảo hộ nhãn hiệu
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <p style="margin-top:0;">
                Quy định của Việt Nam cũng như hầu hết các nước trên thế giới về thời hạn bảo hộ nhãn hiệu là 10 năm kể
                từ ngày nộp đơn.
            </p>
            <h3 class="div-left-h3" style="margin-top:0;font-weight:600;"
                id="Quy_trình,_thủ_tục_đăng_ký_nhãn_hiệu_bao_gồm:">
                <a href="#">Quy trình, thủ tục đăng ký nhãn hiệu bao gồm:</a>
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <ul class="div-left-ul" style="list-style-type: square;margin-top:0;">
                <li>Lựa chọn nhãn hiệu và sản phẩm, dịch vụ cho nhãn hiệu</li>
                <li>Tra cứu nhãn hiệu</li>
                <li>Nộp hồ sơ đăng ký</li>
                <li>Thẩm định hình thức đơn đăng ký</li>
                <li>Công bố đơn</li>
                <li>Thẩm định nội dung đơn</li>
                <li>Nộp lệ phí cấp văn bằng bảo hộ</li>
                <li>Cấp Giấy chứng nhận đăng ký nhãn hiệu</li>
            </ul>
            <h3 class="div-left-h3" id="Một_số_câu_hỏi_liên_quan">
                Một số câu hỏi liên quan
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px; margin-bottom:0;"></div>
            <p><strong><em>Ai có quyền đăng ký nhãn hiệu tại Việt Nam?</em></strong></p>
            <ul class="div-left-ul" style="list-style-type: square">
                <li>Cá nhân, tổ chức, doanh nghiệp Việt Nam;</li>
                <li>Cá nhân, tổ chức nước ngoài. (Đối với cá nhân, tổ chức, doanh nghiệp nước ngoài muốn đăng ký nhãn
                    hiệu tại Việt Nam buộc phải tiến hành nộp đơn đăng ký nhãn hiệu thông qua các công ty đại diện Sở
                    hữu trí tuệ như Công ty luật Việt An).</li>
            </ul>
            <p><strong><em>Tại sao cần đăng ký nhãn hiệu?</em></strong></p>
            <p>
                Đăng ký nhãn hiệu đối với chủ thể mới sử dụng trước tiên là để tránh không vi phạm nhãn hiệu của người
                khác. Nhưng quan trọng nữa là việc đăng ký nhãn hiệu cho doanh nghiệp bên cạnh việc thúc đầy hoạt động
                quảng bá thương hiệu của doanh nghiệp, tạo sự tin tưởng trong quan hệ với khách hàng mà doanh nghiệp còn
                có căn cứ pháp lý bảo vệ cho quyền lợi của mình trước những hành vi sử dụng trái phép nhãn hiệu đó.
            </p>
            <p style="text-align: center">
                <em>Công ty luật Việt An tư vấn, đại diện khách hàng đăng ký nhãn hiệu tại
                    Việt Nam, theo Thỏa ước Madrid, đăng ký nhãn hiệu ở nước ngoài như: các nước ASEAN, Nhật Bản,
                    Trung Quốc, Hàn Quốc, Cộng đồng Châu Âu, Úc, Nam Phi, Hoa Kỳ và các quốc gia khác.
                </em>
            </p>
            <div class="gioithieu-full" style="text-align:center;margin-top:0;">
                <span class="gioithieu-tv" id="CÁC_BÀI_VIẾT_LIÊN_QUAN_ĐẾN_TƯ_VẤN_ĐẰNG_KÝ_NHÃN_HIỆU">
                    <a style=" color:#ff9900; font-weight:600;font-size:22px;line-height:30px;">
                        CÁC BÀI VIẾT LIÊN QUAN ĐẾN TƯ VẤN ĐẰNG KÝ NHÃN HIỆU
                    </a>
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
                        <ol  id="at-item" type="I">
                            <li><a href="#Đăng_ký_nhãn_hiệu_tại_Việt_Nam">Đăng ký nhãn hiệu tại Việt Nam</a></li>
                            <li><a href="#Đăng_ký_nhãn_hiệu_tại_nước_ngoài">Đăng ký nhãn hiệu tại nước ngoài</a></li>
                            <li><a
                                    href="#Tài_liệu_khách_hàng_cần_chuẩn_bị_khi_đăng_ký_nhãn_hiệu_thông_qua_Luật_Việt_An">Tài
                                    liệu khách hàng cần chuẩn bị khi đăng ký nhãn hiệu thông qua Luật Việt An</a></li>
                            <li><a href="#Quy_định_về_Bảng_phân_loại_quốc_tế_về_nhãn_hiệu">Quy định về Bảng phân loại
                                    quốc tế về nhãn hiệu</a></li>
                            <li><a href="#Thời_hạn_bảo_hộ_nhãn_hiệu">Thời hạn bảo hộ nhãn hiệu</a></li>
                            <li><a href="#Quy_trình,_thủ_tục_đăng_ký_nhãn_hiệu_bao_gồm:">Quy trình, thủ tục đăng ký nhãn
                                    hiệu bao gồm:</a></li>
                            <li><a href="#Một_số_câu_hỏi_liên_quan">Một số câu hỏi liên quan</a></li>
                            <li><a href="#CÁC_BÀI_VIẾT_LIÊN_QUAN_ĐẾN_TƯ_VẤN_ĐẰNG_KÝ_NHÃN_HIỆU">CÁC BÀI VIẾT LIÊN QUAN
                                    ĐẾN TƯ VẤN ĐẰNG KÝ NHÃN HIỆU</a></li>
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
        $result=$CategoryRelated->TVKDNH_pagination($start,$limit);
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
            <li class="prev"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="tu-van-dang-ky-nhan-hieu-page1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="tu-van-dang-ky-nhan-hieu-page<?php echo $current_page+1 ?>">Next</a></li>
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