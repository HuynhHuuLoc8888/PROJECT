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
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_TDDKKD();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<section>
    <div>
        <p class="title-first">Thay đổi đăng ký kinh doanh</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p>
                Khi doanh nghiệp có sự thay đổi thông tin trong hồ sơ đang ký doanh nghiệp hoặc thông tin ghi nhận trên
                Giấy chứng nhận đăng ký doanh nghiệp cần thực hiện thủ tục thay đổi đăng ký kinh doanh tại Phòng đăng ký
                kinh doanh – Sở Kế hoạch và Đầu tư nơi doanh nghiệp đặt trụ sở chính.
            </p>
            <div class="img-div-left">
                <img src="./Assets/front/images/Thay-doi-dang-ky-KD.jpg" width="1174" height="359" alt="">
            </div>
            <p style="text-align:center;margin:10px 0;">
                <strong>
                    <span style="font-family: tahoma, arial, helvetica, sans-serif;color: #008000">
                        CÔNG TY LUẬT VIỆT AN, LUẬT SƯ TƯ VẤN:
                    </span>
                    <span style="color: #ff6600">
                        0979 05 77 68
                    </span>
                </strong>
            </p>
            <h3 class="div-left-h3" id="Các_doanh_nghiệp_phải_thực_hiện_thủ_tục_thay_đổi_đăng_ký_doanh_nghiệp">
                Các doanh nghiệp phải thực hiện thủ tục thay đổi đăng ký doanh nghiệp
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <ul class="div-left-ul">
                <li>
                    Công ty vốn Việt Nam có các thay đổi so với hồ sơ đăng ký doanh nghiệp và Giấy chứng nhận đăng ký
                    doanh nghiệp (trừ công ty cổ phần chuyển nhượng vốn).
                </li>
                <li>
                    Công ty có vốn đầu tư nước ngoài có thay đổi các nội dung trong Giấy chứng nhận đăng ký doanh nghiệp
                    và hồ sơ đăng ký doanh nghiệp tương tự như thủ tục của công ty vốn Việt Nam. Trường hợp, nếu công ty
                    có vốn nước ngoài được cấp Giấy chứng nhận đăng ký đầu tư có thay đổi tương ứng các nội dung trên hồ
                    sơ đăng ký doanh nghiệp: ngành nghề kinh doanh (tương ứng mục tiêu dự án), tên công ty (nếu trùng
                    với tên dự án), địa chỉ thực hiện dự án (nếu cùng là địa chỉ công ty), tăng vốn điều lệ (tăng vốn
                    góp trong tổng vốn đầu tư), thay đổi nhà đầu tư,…thì cũng phải đồng thời phải thực hiện thủ tục điều
                    chỉnh Giấy chứng nhận đầu tư. Trường hợp, có thêm nhà đầu tư mới góp vốn, mua cổ phần thì công ty
                    còn phải thực hiện thêm thủ tục đăng ký mua phần vốn góp.
                </li>
                <li>
                    Lưu ý: Giấy chứng nhận đăng ký kinh doanh là thuật ngữ cũ nay được gọi là Giấy chứng nhận đăng ký
                    doanh nghiệp. Văn bản pháp lý này khác với Giấy phép kinh doanh cấp cho công ty có vốn đầu tư nước
                    ngoài hoạt động trong lĩnh vực bán lẻ hàng hóa.
                </li>
            </ul>
            <h3 class="div-left-h3" id="Tài_liệu_cần_chuẩn_bị_khi_thay_đổi_đăng_ký_kinh_doanh">
                Tài liệu cần chuẩn bị khi thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Khi doanh nghiệp có nhu cầu thay đổi đăng ký kinh doanh và thông qua dịch vụ của Công ty Luật Việt An,
                Quý khách hàng chỉ cần chuyển cho Công ty Luật Việt An các thông tin thay đổi và giấy tờ liên quan và ký
                hồ sơ. Các công việc còn lại: soạn thảo hồ sơ, thực hiện thủ tục tại cơ quan nhà nước có thẩm quyền,
                nhận kết quả theonooij dung thay đổi sẽ do các luật sư Công ty luật Việt An sẽ thực hiện toàn bộ.
            </p>
            <h3 class="div-left-h3" id="Thủ_tục_thay_đổi_đăng_ký_kinh_doanh_năm_2023">
                Thủ tục thay đổi đăng ký kinh doanh năm 2023
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Thủ tục thay đổi đăng ký kinh doanh được thực hiện theo các bước cụ thể là:
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Bước_1:_Xác_nhận_nghĩa_vụ_thuế">
                <em>Bước 1: Xác nhận nghĩa vụ thuế</em>
            </h3>
            <p>
                <em>Công ty chỉ phải thực hiện bước 1 khi có thay đổi trụ sở công ty khác quận, khác tỉnh.</em>
            </p>
            <p>
                Khi công ty thay đổi địa chỉ trụ sở khác quận hoặc khác tỉnh trước khi thực hiện thủ tục thay đổi đăng
                ký kinh doanh tại Phòng đăng ký kinh doanh. Công ty cần thực hiện thủ tục chốt nghĩa vụ thuế với cơ quan
                quản lý thuế cũ. Sau khi có xác nhận của cơ quan thuế công ty thực hiện thay đổi đăng ký kinh doanh tại
                cơ quan đăng ký kinh doanh nơi đăng ký trụ sở mới của công ty.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_2:_Soạn_thảo_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">
                <em>Bước 2: Soạn thảo hồ sơ thay đổi đăng ký kinh doanh</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Luật Việt An tư vấn điều kiện, quy trình, thủ tục pháp lý liên quan đến mỗi nội dung thay đổi để
                    doanh nghiệp chuẩn bị.
                </li>
                <li>
                    Nếu khách hàng sử dụng dịch vụ của Luật Việt An luật sư của chúng tôi sẽ hỗ trợ soạn thảo hồ sơ
                    chuyển khách hàng ký để chúng tôi thực hiện các bước tiếp theo.
                </li>
                <li>
                    Nếu khách hàng tự nộp hồ sơ thì chuẩn bị hồ thay đổi tương ứng với nội dung thay đổi để nộp Phòng
                    Đăng ký kinh doanh.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_3:_Nộp_hồ_sơ_thay_đổi,_lệ_phí_công_bố_thông_tin">
                <em>Bước 3: Nộp hồ sơ thay đổi, lệ phí công bố thông tin</em>
            </h3>
            <p>
                Công ty nộp hồ tại Phòng Đăng ký kinh doanh – Sở Kế hoạch và Đầu tư nơi doanh nghiệp đặt trụ sở chính:
            </p>
            <ul class="div-left-ul">
                <li>
                    Doanh nghiệp nộp 01 bộ hồ sơ và nộp lệ phí công bố thông tin doanh nghiệp.
                </li>
            </ul>
            <h3 class="div-left-h3" id="Phương_thức_nộp_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">
                <em>Phương thức nộp hồ sơ thay đổi đăng ký kinh doanh</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Nộp hồ sơ trực tuyến: tại website Cổng thông tin quốc gia về đăng ký doanh nghiệp:
                    https://dangkyquamang.dkkd.gov.vn. Hiện nay, tại Hà Nội và thành phố Hồ Chí Minh 100% các hồ sơ thay
                    đổi đăng ký kinh doanh phải nộp thông qua hình thức trực tuyến, cơ quan đăng ký kinh doanh không
                    nhận hồ sơ trực tiếp cho thủ tục thay đổi đăng ký doanh nghiệp. Mọi thông tin thực hiện thủ tục được
                    thực hiện qua tài khoản đăng ký kinh doanh nghiệp và kết quả thay đổi được gửi về doanh nghiệp theo
                    đường bưu chính, doanh nghiệp nộp lệ phí thay đổi và lệ phí công bố thông tin bằng hình thức chuyển
                    khoản qua thẻ ATM.
                </li>
                <li>
                    Nộp hồ sơ trực tiếp: Hiện tại, chỉ có một số trường hợp đặc biệt do doanh nghiệp chưa gộp mã số thuế
                    với mã số doanh nghiệp thì Phòng Đăng ký kinh doanh mới tiếp nhận hồ sơ giấy của doanh nghiệp trực
                    tiếp. Khi nhận hồ sơ trực tiếp, Phòng Đăng ký kinh doanh trao Giấy biên nhận, kiểm tra tính hợp lệ
                    của hồ sơ và tiến hành thủ tục hành chính liên quan.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_4:_Nhận_kết_quả_thay_đổi_đăng_ký_kinh_doanh">
                <em>Bước 4: Nhận kết quả thay đổi đăng ký kinh doanh</em>
            </h3>
            <p>
                Trong vòng 03 ngày làm việc kể từ khi nhận hồ sơ, Phòng Đăng ký kinh doanh xử lý hồ sơ hợp lệ sẽ bổ
                sung, thay đổi thông tin của doanh nghiệp trong Cơ sở dữ liệu quốc gia về đăng ký doanh nghiệp. Đồng
                thời, Phòng Đăng ký kinh doanh thực hiện cấp một trong các giấy tờ pháp lý sau cho doanh nghiệp:
            </p>
            <ul class="div-left-ul">
                <li>
                    Giấy chứng nhận đăng ký doanh nghiệp mới với các nội dung thay đổi.
                </li>
                <li>
                    Giấy xác nhận thay đổi thông tin đăng ký doanh nghiệp.
                </li>
            </ul>
            <p>
                Trường hợp hồ sơ chưa hợp lệ, Phòng Đăng ký kinh doanh ra Thông báo để công ty sửa đổi, bổ sung hồ sơ
                theo yêu cầu cụ thể và nêu rõ lý do.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Bước_5:_Khắc_lại_dấu_công_ty">
                <em>Bước 5: Khắc lại dấu công ty</em>
            </h3>
            <p>
                Công ty chỉ phải thực hiện bước này nếu doanh nghiệp có sự thay đổi thông tin con dấu. Các trường hợp
                doanh nghiệp cần thay đổi con dấu cho khớp với nội dung đăng ký kinh doanh bao gồm:
            </p>
            <ul class="div-left-ul">
                <li>
                    Công ty thay đổi tên Tiếng Việt;
                </li>
                <li>
                    Doanh nghiệp thay đổi loại hình công ty;
                </li>
                <li>
                    Công ty thay đổi trụ sở khác tỉnh;
                </li>
                <li>
                    Công ty thay đổi trụ sở khác quận (nếu trên dấu vẫn còn địa chỉ quận).
                </li>
            </ul>
            <p>
                Doanh nghiệp khắc con dấu và tự quản lý con dấu mà không phải thực hiện bất kỳ thủ tục nào liên quan đến
                con dấu với cơ quan nhà nước có thẩm quyền.
            </p>
            <h3 class="div-left-h3" id="Hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">
                Hồ sơ thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <div class="img-div-left">
                <img src="./Assets/front/images/Thay-doi-dang-ky-inh-doanh-cho-doanh-nghiep-viet-nam.jpg" width="1012"
                    height="481" alt="">
            </div>
            <p style="margin-top:10px;">
                Tùy từng nội dung thay đổi, hồ sơ thay đổi sẽ bao gồm một trong các hồ sơ như sau:
            </p>
            <ul class="div-left-ul">
                <li>
                    Thông báo thay đổi nội dung đăng ký doanh nghiệp: tùy theo nội dung thay đổi của doanh nghiệp sẽ
                    thực hiện soạn thảo thông báo tương ứng như: Thông báo thay đổi người đại diện theo pháp luật; Thông
                    báo thay đổi chủ doanh nghiệp tư nhân; Thông báo thay đổi chủ sở hữu công ty TNHH một thành viên;
                    Thông báo về việc bổ sung, cập nhật thông tin đăng ký doanh nghiệp.

                </li>
                <li>
                    Danh sách thành viên công ty TNHH hai thành viên trở lên khi thay đổi vốn của thành viên trong công
                    ty TNHH hai thành viên trở lên;
                </li>
                <li>
                    Danh sách người đại diện theo ủy quyền đối với thay đổi cổ đông/ thành viên là tổ chức vốn đầu tư
                    nước ngoài.
                </li>
                <li>
                    Biên bản họp Đại hội đồng cổ đông đối với công ty cổ phần hoặc Biên bản họp Hội đồng thành viên đối
                    với công ty TNHH hai thành viên trở lên.
                </li>
                <li>
                    Quyết định của Đại hội đồng cổ đông đối với công ty cổ phần hoặc Hội đồng thành viên đối với công ty
                    TNHH hai thành viên trở lên, chủ sở hữu đối với công ty một thành viên.
                </li>
                <li>
                    Điều lệ trong trường hợp thay đổi chủ sở hữu công ty TNHH một thành viên.
                </li>
                <li>
                    Giấy tờ chứng thực cá nhân (căn cước công dân, chứng minh thư dân nhân, hộ chiếu) công chứng đối với
                    thành viên mới, cổ đông nước ngoài, thay đổi người đại diện theo pháp luật.
                </li>
            </ul>
            <p>
                Hướng dẫn chi tiết hồ sơ thay đổi theo nội dung cụ thể:
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Hồ_sơ_thay_đổi_tên_công_ty">
                <em>Hồ sơ thay đổi tên công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thông báo thay đổi tên công ty được thực hiện thep Thông báo thay đổi nội dung đăng ký doanh nghiệp
                    do người đại diện theo pháp luật của doanh nghiệp ký theo mẫu Phụ lục II-1;
                </li>
                <li>
                    Biên bản họp Đại hội đồng cổ đông đối với công ty cổ phần hoặc Biên bản họp Hội đồng thành viên đối
                    với công ty TNHH hai thành viên trở lên về việc thay đổi tên công ty.
                </li>
                <li>
                    Quyết định của Đại hội đồng cổ đông đối với công ty cổ phần hoặc Hội đồng thành viên đối với công ty
                    TNHH hai thành viên trở lên, chủ sở hữu đối với công ty một thành viên về việc thay đổi tên công ty.
                </li>
                <li>
                    Điều lệ công ty theo thông tin tên công ty mới (lưu).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Hồ_sơ_thay_đổi_địa_chỉ_công_ty">
                <em>Hồ sơ thay đổi địa chỉ công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thông báo thay địa chỉ trụ sở công ty được thực hiện thep Thông báo thay đổi nội dung đăng ký doanh
                    nghiệp do người đại diện theo pháp luật của doanh nghiệp ký theo mẫu Phụ lục II-1;
                </li>
                <li>
                    Biên bản họp Đại hội đồng cổ đông đối với công ty cổ phần hoặc Biên bản họp Hội đồng thành viên đối
                    với công ty TNHH hai thành viên trở lên về việc thay đổi trụ sở công ty.
                </li>
                <li>
                    Quyết định của Đại hội đồng cổ đông đối với công ty cổ phần hoặc Hội đồng thành viên đối với công ty
                    TNHH hai thành viên trở lên, chủ sở hữu đối với công ty một thành viên về việc thay đổi trụ sở công
                    ty.
                </li>
                <li>
                    Điều lệ công ty theo thông tin địa chỉ trụ sở công ty mới (lưu).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Hồ_sơ_thay_đổi_người_đại_diện_theo_pháp_luật_của_công_ty">
                <em>Hồ sơ thay đổi người đại diện theo pháp luật của công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thông báo thay đổi người đại diện theo pháp luật mẫu Phụ lục II-1;
                </li>
                <li>
                    Bản sao giấy tờ pháp lý của cá nhân đối với người đại diện theo pháp luật mới;
                </li>
                <li>
                    Nghị quyết và bản sao biên bản họp Đại hội đồng cổ đông đối với công ty cổ phần về việc thay đổi
                    người đại diện theo pháp luật trong trường hợp việc thay đổi người đại diện theo pháp luật làm thay
                    đổi nội dung Điều lệ công ty;<br>

                    Hoặc Nghị quyết, quyết định và bản sao biên bản họp Hội đồng quản trị đối với công ty cổ phần trong
                    trường hợp việc thay đổi người đại diện theo pháp luật không làm thay đổi nội dung của Điều lệ công
                    ty ngoài nội dung họ, tên, chữ ký của người đại diện theo pháp luật của công ty quy định tại Điều 24
                    Luật Doanh nghiệp.
                </li>
                <li>
                    Lưu ý: Người ký thông báo thay đổi người đại diện theo pháp luật là một trong các cá nhân sau đây:
                    Chủ tịch Hội đồng quản trị đối với công ty cổ phần. Trường hợp Chủ tịch Hội đồng quản trị là người
                    đại diện theo pháp luật thì người ký thông báo là Chủ tịch Hội đồng quản trị mới được Hội đồng quản
                    trị bầu. Áp dụng tương tự đối với Chủ tịch Hội đồng thành viên công ty TNHH.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Hồ_sơ_tăng_vốn_điều_lệ_công_ty">
                <em>Hồ sơ tăng vốn điều lệ công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thông báo tăng vốn điều lệ công ty được thực hiện theo Thông báo thay đổi nội dung đăng ký doanh
                    nghiệp do người đại diện theo pháp luật của doanh nghiệp ký theo mẫu Phụ lục II-1;
                </li>
                <li>
                    Biên bản họp Đại hội đồng cổ đông đối với công ty cổ phần hoặc Biên bản họp Hội đồng thành viên đối
                    với công ty TNHH hai thành viên trở lên về việc thay đổi tăng vốn điều lệ công ty.
                </li>
                <li>
                    Quyết định của Đại hội đồng cổ đông đối với công ty cổ phần hoặc Hội đồng thành viên đối với công ty
                    TNHH hai thành viên trở lên, chủ sở hữu đối với công ty một thành viên về việc tăng vốn điều lệ công
                    ty.
                </li>
                <li>
                    Điều lệ công ty theo thông tin vốn điều lệ mới (để lưu).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Hồ_sơ_giảm_vốn_điều_lệ_công_ty">
                <em>Hồ sơ giảm vốn điều lệ công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Trường hợp giảm vốn điều lệ, doanh nghiệp phải cam kết bảo đảm thanh toán đủ các khoản nợ và các
                    nghĩa vụ tài sản khác sau khi giảm vốn.
                </li>
                <li>
                    Thông báo thay đổi nội dung đăng ký doanh nghiệp do người đại diện theo pháp luật của doanh nghiệp
                    ký mẫu Phụ lục II-1;
                </li>
                <li>
                    Nghị quyết, quyết định và bản sao biên bản họp của Hội đồng thành viên đối với công ty trách nhiệm
                    hữu hạn hai thành viên trở lên về việc thay đổi vốn điều lệ;
                </li>
                <li>
                    Báo cáo tài chính gần nhất với thời điểm quyết định giảm vốn điều lệ trong trường hợp giảm vốn điều
                    lệ theo quy định tại điểm a và điểm b khoản 3 Điều 68 Luật Doanh nghiệp 2020.
                </li>
                <li>
                    Điều lệ công ty theo thông tin vốn điều lệ mới (để lưu).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Hồ_sơ_thay_đổi_ngành_nghề_công_ty">
                Hồ sơ thay đổi ngành nghề công ty
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thông báo thay đổi nội dung đăng ký doanh nghiệp (mẫu Phụ lục II-1 ban hành kèm theo Thông tư
                    01/2021/TT-BKHĐT);
                </li>
                <li>
                    Biên bản họp về việc thay đổi, bổ sung ngành, nghề kinh doanh của công ty (đối với công ty TNHH và
                    Công ty cổ phần);
                </li>
                <li>
                    Quyết định về việc thay đổi, bổ sung ngành, nghề kinh doanh của công ty.
                </li>
                <li>
                    Điều lệ công ty theo thông tin ngành nghề kinh doanh mới (để lưu).
                </li>
            </ul>
            <h3 class="div-left-h3" id="Thẩm_quyền_thụ_ký_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">
                Thẩm quyền thụ ký hồ sơ thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px"></div>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;margin-bottom:0 0 10px 0;"
                id="Thay_đổi_đăng_ký_kinh_doanh_của_công_ty">
                Thay đổi đăng ký kinh doanh của công ty
            </h3>
            <p>
                Khi công ty có sự thay đổi nội dung đăng ký doanh nghiệp bắt buộc phải thay đổi đăng ký kinh doanh. Công
                ty thực hiện thủ tục thay đổi tại Phòng Đăng ký kinh doanh – Sở Kế hoạch và Đầu tư nơi doanh nghiệp đặt
                trụ sở chính.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;margin-bottom:0 0 10px 0;"
                id="Thay_đổi_đăng_ký_kinh_doanh_của_chi_nhánh,_văn_phòng_đại_diện,_địa_điểm_kinh_doanh:">
                Thay đổi đăng ký kinh doanh của chi nhánh, văn phòng đại diện, địa điểm kinh doanh:
            </h3>
            <p>
                Trường hợp công ty thay đổi đăng ký kinh doanh của chi nhánh/văn phòng đại diện/địa điểm kinh doanh:
                Công ty thực hiện tại Phòng Đăng ký kinh doanh – Sở Kế hoạch và Đầu tư nơi doanh nghiệp đặt trụ sở của
                chi nhánh, văn phòng đại diện, địa điểm kinh doanh.
            </p>
            <h3 class="div-left-h3" id="Các_trường_hợp_bắt_buộc_phải_nộp_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">
                Các trường hợp bắt buộc phải nộp hồ sơ thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <ul class="div-left-ul">
                <li>
                    Thay đổi tên công ty (bao gồm: thay đổi tên bằng tiếng Việt, thay đổi tên tiếng nước ngoài, thay đổi
                    tên viết tắt).
                </li>
                <li>
                    Thay đổi loại hình doanh nghiệp của công ty (bao gồm: Thay đổi từ TNHH một thành viên sang TNHH hai
                    thành viên trở lên; thay đổi từ công ty TNHH sang công ty cổ phần, thay đổi từ công ty cổ phần thành
                    công ty TNHH, thay đổi doanh nghiệp tư nhân thành công ty).
                </li>
                <li>
                    Thay đổi trụ sở chính của công ty.
                </li>
                <li>
                    Thay đổi thông tin số điện thoại, số fax; email, website công ty.
                </li>
                <li>
                    Thay đổi ngành, nghề kinh doanh của công ty.
                </li>
                <li>
                    Thay đổi vốn điều lệ công ty (bao gồm thay đổi tăng vốn điều lệ công ty hoặc thay đổi giảm vốn điều
                    lệ công ty).
                </li>
                <li>
                    Thay đổi cơ cấu vốn của các thành viên công ty.
                </li>
                <li>
                    Thay đổi thông tin cổ đông là người nước ngoài: Thay đổi cổ đông là người nước ngoài; thay đổi tỷ lệ
                    góp vốn của cổ đông nước ngoài; thay đổi thông tin về Hộ chiếu, Hộ khẩu của cổ đông là người nước
                    ngoài.
                </li>
                <li>
                    Thay đổi người đại diện theo pháp luật công ty.
                </li>
                <li>
                    Thay đổi thông tin người đại diện theo pháp luật của công ty (bao gồm: thay đổi chức danh của người
                    đại diện theo pháp luật; thay đổi chứng minh thư/thẻ căn cước/số hộ chiếu; thay đổi hộ khẩu, chỗ ở
                    hiện tại của người đại diện theo pháp luật).
                </li>
                <li>
                    Thay đổi thông tin của chủ sở hữu công ty TNHH một thành viên: bao gồm chuyển nhượng chủ sở hữu,
                    thay đổi giấy phép kinh doanh của chủ sở hữu (nếu là pháp nhân), thay đổi thông tin cá nhân của chủ
                    sở hữu (nếu là cá nhân).
                </li>
                <li>
                    Thay đổi thông tin đăng ký thuế: người phụ trách kế toán; thông tin địa chỉ nhận thông báo thuế.
                </li>
            </ul>
            <h3 class="div-left-h3" id="Các_trường_hợp_không_phải_nộp_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">
                Các trường hợp không phải nộp hồ sơ thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <ul class="div-left-ul">
                <li>
                    Thay đổi thông tin cổ đông trong công ty cổ phần;
                </li>
                <li>
                    Thay đổi cổ đông sáng lập (Trừ trường hợp thay đổi cổ đông sáng lập do chưa thanh toán hoặc chỉ
                    thanh toán một phần số cổ phần đã đăng ký mua theo quy định).
                </li>
            </ul>
            <h3 class="div-left-h3"
                id="Các_trường_hợp_doanh_nghiệp_không_được_thực_hiện_đăng_ký_thay_đổi_đăng_ký_kinh_doanh">
                Các trường hợp doanh nghiệp không được thực hiện đăng ký thay đổi đăng ký kinh doanh
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đã bị Phòng Đăng ký kinh doanh ra Thông báo về việc vi phạm của doanh nghiệp thuộc trường hợp thu
                    hồi Giấy chứng nhận đăng ký doanh nghiệp hoặc đã bị ra Quyết định thu hồi Giấy chứng nhận đăng ký
                    doanh nghiệp.
                </li>
                <li>
                    Đang trong quá trình giải thể theo quyết định giải thể của doanh nghiệp.
                </li>
            </ul>
            <p>
                Theo yêu cầu của Tòa án hoặc Cơ quan thi hành án hoặc cơ quan công an.
            </p>
            <h3 class="div-left-h3" id="Lưu_ý_khi_thay_đổi_đăng_ký_kinh_doanh">
                Lưu ý khi thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;margin-top:0;"
                id="Lưu_ý_về_tên_công_ty_muốn_thay_đổi">
                <em>Lưu ý về tên công ty muốn thay đổi</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Tên mới của doanh nghiệp không được trùng hoặc gây nhầm lẫn với doanh nghiệp khác đã đăng ký.
                </li>
                <li>
                    Nếu công ty thực hiện chuyển đổi loại hình doanh nghiệp về cơ bản vẫn giữ được tên cũ.
                </li>
                <li>
                    Doanh nghiệp thay đổi tên cần chú ý các dấu hiệu nhận diện thương hiệu doanh nghiệp như: đăng ký
                    nhãn hiệu, tên miền phù hợp với tên công ty thay đổi.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_thay_đổi_trụ_sở_chính_công_ty">
                <em>Lưu ý khi thay đổi trụ sở chính công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Địa chỉ mới phải rõ ràng, cụ thể, có thể liên hệ được trong mọi hình thức: trực tiếp, thư tín. Trong
                    trường hợp không thể liên lạc được với doanh nghiệp cơ quan đăng ký kinh doanh, cơ quan thuế có thể
                    khóa mã số doanh nghiệp.
                </li>
                <li>
                    Địa chỉ mới phải rõ ràng, cụ thể, có thể liên hệ được trong mọi hình thức: trực tiếp, thư tín. Trong
                    trường hợp không thể liên lạc được với doanh nghiệp cơ quan đăng ký kinh doanh, cơ quan thuế có thể
                    khóa mã số doanh nghiệp.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_bổ_sung_thêm_ngành_nghề_kinh_doanh_mới">
                <em>Lưu ý khi bổ sung thêm ngành nghề kinh doanh mới</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đối với các ngành nghề cũ chưa áp mã ngành nghề phải thực hiện mã hóa ngành nghề cho các ngành nghề
                    cũ theo mã ngành cấp 4.
                </li>
                <li>
                    Đối với các ngành nghề bổ sung mới cũng cần áp mã ngành nghề theo mã ngành cấp 4 theo Quyết định
                    27/2018/QĐ-TTg.
                </li>
                <li>
                    Đối với ngành nghề chưa có mã ngành nhưng có văn bản chuyên ngành ghi nhận ngành nghề thì áp mã
                    ngành tương tự và trích dẫn chi tiết theo quy định của văn bản pháp luật liên quan.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_thay_đổi_tăng_vốn_điều_lệ_công_ty">
                <em>Lưu ý khi thay đổi tăng vốn điều lệ công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đối với các ngành nghề cũ chưa áp mã ngành nghề phải thực hiện mã hóa ngành nghề cho các ngành nghề
                    cũ theo mã ngành cấp 4.
                </li>
                <li>
                    Đối với các ngành nghề bổ sung mới cũng cần áp mã ngành nghề theo mã ngành cấp 4 theo Quyết định
                    27/2018/QĐ-TTg.
                </li>
                <li>
                    Đối với ngành nghề chưa có mã ngành nhưng có văn bản chuyên ngành ghi nhận ngành nghề thì áp mã
                    ngành tương tự và trích dẫn chi tiết theo quy định của văn bản pháp luật liên quan.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_thay_đổi_tăng_vốn_điều_lệ_công_ty">
                <em>Lưu ý khi thay đổi tăng vốn điều lệ công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Doanh nghiệp được phép tăng vốn theo nhu cầu và phải thông báo thay đổi đăng ký doanh nghiệp trong
                    thời hạn 10 ngày kể từ ngày tăng vốn.
                </li>
                <li>
                    Khi tăng vốn điều lệ doanh nghiệp là tổ chức phải góp vốn tăng bằng hình thức chuyển khoản qua tài
                    khoản công ty. Đối với cá nhân góp vốn thì có thể lựa chọn hình thức góp vốn bằng chuyển khoản hoặc
                    nộp tiền mặt.
                </li>
                <li>
                    Khi tăng vốn có thể sẽ ảnh hưởng đến mức thuế môn bài, doanh nghiệp cần kê khai và nộp thuế môn bài
                    bổ sung theo quy định.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_thay_đổi_giảm_vốn_điều_lệ_công_ty">
                <em>Lưu ý khi thay đổi giảm vốn điều lệ công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Doanh nghiệp chỉ được giảm vốn khi đã hoạt động từ 02 năm trở lên, phải đáp ứng điều kiện và chỉ
                    được giảm theo tỷ lệ phần trăm đang sở hữu.
                </li>
                <li>
                    Doanh nghiệp giảm vốn điều lệ cần lưu ý ngành nghề yêu cầu vốn pháp định.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_thay_đổi_thêm_thành_viên_của_công_ty_TNHH_1_thành_viên">
                <em>Lưu ý khi thay đổi thêm thành viên của công ty TNHH 1 thành viên</em>
            </h3>
            <p>
                Khi công ty TNHH 1 thành viên thêm thành viên thì bên cạnh việc thực hiện thủ tục thay đổi phải nộp song
                song hồ sơ chuyển đổi loại hình doanh nghiệp. Thành viên mới phải cung cấp giấy tờ tùy thân công chứng
                và còn hạn theo quy định. Thành viên chuyển nhượng cũng cần đảm bảo giấy tờ tùy thân còn thời hạn theo
                quy định.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Lưu_ý_khi_chuyển_nhượng_cổ_phần">
                <em>Lưu ý khi chuyển nhượng cổ phần</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Khi công ty cổ phần chuyển nhượng vốn không phải thực hiện thủ tục tại Phòng Đăng ký kinh doanh.
                </li>
                <li>
                    Công ty cần kê khai và nộp thuế thu nhập cá nhân do chuyển nhượng cổ phần với mức thuế suất cố định
                    như chuyển nhượng chứng khoán là 0,1%/tổng giá trị chuyển nhượng không phụ thuộc công ty có lãi hay
                    không có lãi.
                </li>
                <li>
                    Trường hợp tặng cho cổ phần (hay chuyển nhượng = 0 đồng) thì người được tặng cho, nhận chuyển nhượng
                    phải đóng thuế thu nhập cá nhân là 10%.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_chuyển_nhượng_vốn_công_ty_TNHH">
                <em>Lưu ý khi chuyển nhượng vốn công ty TNHH</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Khi công ty TNHH chuyển nhượng vốn ngoài phải thực hiện thủ tục tại Phòng đăng ký kinh doanh công ty
                    cần thực hiện kê khai thuế thu nhập cá nhân cho bên chuyển nhượng.
                </li>
                <li>
                    Bên chuyển nhượng cần nộp thuế khi có chênh lệnh. Dù khi chuyển nhượng ngang giá nhưng báo cáo tài
                    chính gần nhất công ty có lãi, chi Cục thuế vẫn áp thuế chuyển nhượng theo tỷ lệ lãi theo báo cáo
                    tài chính gần nhất của công ty.
                </li>
                <li>
                    Tương tự như công ty cổ phần, trường hợp tặng cho vốn góp (hay chuyển nhượng = 0 đồng) thì người
                    được tặng cho, nhận chuyển nhượng phải đóng thuế thu nhập cá nhân là 10%.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_khi_thay_đổi_người_đại_diện_theo_pháp_luật_công_ty">
                <em>Lưu ý khi thay đổi người đại diện theo pháp luật công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Công ty có thể có một hoặc nhiều người đại diện theo pháp luật.
                </li>
                <li>
                    Trường hợp có trên hai người đại diện theo pháp luật thì ngoài hai chức danh: Chủ tịch HĐQT/Chủ tịch
                    HĐTV, Tổng giám đốc/Giám đốc thì doanh nghiệp có thể lựa chọn bất kỳ các chức danh nào cho người đại
                    diện theo pháp luật từ thứ 3 trở đi như: Phó Giám đốc, Giám đốc điều hành, Trưởng phòng,…Tuy nhiên,
                    doanh nghiệp cần nêu rõ chức năng, quyền hạn cụ thể của từng người đại diện theo pháp luật trong
                    điều lệ của doanh nghiệp.
                </li>
                <li>
                    Một người có thể làm người đại diện theo pháp luật của nhiều công ty (trừ một số trường hợp đặc thù
                    liên quan đến công ty đại chúng).
                </li>
                <li>
                    Trường hợp người đại diện theo pháp luật cũ đang bị treo mã số thuế thì doanh nghiệp không được thay
                    đổi người đại diện theo pháp luật.
                </li>
                <li>
                    Người đang quản lý doanh nghiệp hiện đang bị treo mã số thuế thì cũng không thể đăng ký làm người
                    đại diện pháp luật mới của doanh nghiệp khác.
                </li>
                <li>
                    Cá nhân từng là người đại diện pháp luật của doanh nghiệp bị tuyên bố phá sản trong thời hạn từ một
                    đến ba năm, kể từ ngày doanh nghiệp bị tuyên bố phá sản thì cũng không được làm người đại diện pháp
                    luật mới cho công ty.
                </li>
                <li>
                    Người đại diện là người đi thuê công ty cần lưu giữ Hợp đồng lao động và quyết định bổ nhiệm với
                    người đại diện mới.
                </li>
                <li>
                    Trường hợp việc thay đổi người đại diện theo pháp luật của doanh nghiệp làm thay đổi nội dung điều
                    lệ thì trong biên bản họp phải ghi rõ nội dung được thay đổi trong điều lệ doanh nghiệp.
                </li>
                <li>
                    Khi thay đổi người đại diện theo pháp luật cần lưu ý việc thay đổi đăng ký thông tin chủ tài khoản
                    ngân hàng, thông báo việc thay đổi cho đối tác và cơ quan bảo hiểm.
                </li>
                <li>
                    Đối với doanh nghiệp có giấy phép con liên quan đến thông tin người đại diện thì phỉ làm thủ tục
                    thay đổi cho phù hợp với thồn tin người đại diện mới.
                </li>
                <li>
                    Khi thay đổi người đại diện có gắn liền với việc chuyển nhượng vốn cho người đại diện mới cần lưu ý
                    thủ tục kê khai thế thu nhập cá nhân của người chuyển nhượng.
                </li>
            </ul>
            <h3 class="div-left-h3" id="Một_số_thủ_tục_cần_thực_hiện_sau_khi_thay_đổi_đăng_ký_kinh_doanh">
                Một số thủ tục cần thực hiện sau khi thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <ul class="div-left-ul">
                <li>
                    Thông báo với ngân hàng, cơ quan bảo hiểm xã hội, cơ quan chức năng liên quan, đối tác, bạn hàng nếu
                    thay đổi các thông tin: tên công ty, địa chỉ công ty, người đại diện theo pháp luật.
                </li>
                <li>
                    Thay đổi biển công ty: nếu thay đổi tên công ty, trụ sở công ty;
                </li>
                <li>
                    Thay đổi thông tin trên chữ ký số điện tử, hóa đơn nếu thay đổi tên công ty, thay đổi trụ sở công
                    ty…
                </li>
                <li>
                    Thay đổi thông tin doanh nghiệp trên Giấy chứng nhận hoạt động của địa điểm, chi nhánh, văn phòng
                    đại diện công ty.
                </li>
                <li>
                    Thay đổi thông tin doanh nghiệp thay đổi nếu doanh nghiệp có các giấy phép đủ điều kiện kinh doanh:
                    Giấy phép lữ hành, Giấy phép kinh doanh, Giấy phép vận tải, Văn bằng bảo hộ đăng ký nhãn hiệu, …
                </li>
            </ul>
            <h3 class="div-left-h3" id="Một_số_câu_hỏi_khi_thay_đổi_đăng_ký_kinh_doanh">
                Một số câu hỏi khi thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Khi_thay_đổi_có_phải_quyết_toán_thuế_và_phát_hành_lại_hóa_đơn_VAT_không?">
                <em>Khi thay đổi có phải quyết toán thuế và phát hành lại hóa đơn VAT không?</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Khi thay đổi trụ sở khác quận, khác tỉnh doanh nghiệp cần thực hiện thủ tục chốt thuế chuyển quận
                    nhưng không phải thực hiện thủ tục quyết toán thuế.
                </li>
                <li>
                    Khi chuyển đổi loại hình doanh nghiệp mà bên tiếp nhận kế thừa toàn bộ nghĩa vụ về thuế của doanh
                    nghiệp trước chuyển đổi thì không phải thực hiện thủ tục quyết toán thuế trước khi chuyển đổi loại
                    hình doanh nghiệp;
                </li>
                <li>
                    Khi doanh nghiệp thay đổi tên công ty, thay đổi địa chỉ trụ sở cần liên hệ với cơ quan thuế để thay
                    đổi thông tin của công ty trên hóa đơn đã phát hành.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Khi_thay_đổi_nội_dung_nào_doanh_nghiệp_cần_khắc_lại_con_dấu_(mộc)_công_ty?">
                <em>Khi thay đổi nội dung nào doanh nghiệp cần khắc lại con dấu (mộc) công ty?</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thay đổi tên công ty;
                </li>
                <li>
                    Thay đổi loại hình doanh nghiệp của công ty;
                </li>
                <li>
                    Trường hợp thay đổi trụ sở khác quận, tỉnh của công ty: tuy không thuộc trường hợp bắt buộc đổi dấu
                    nhưng để thống nhất với quận/tỉnh mới doanh nghiệp nên cấp đổi con dấu nếu con dấu cũ có thể hiện
                    quận/ tỉnh cũ.
                </li>
            </ul>
            <p>
                Theo quy định tại Luật Doanh nghiệp năm 2020, khi doanh nghiệp có nhu cầu khắc dấu pháp nhân mới với tên
                công ty mới thì doanh nghiệp có quyền lựa chọn số lượng, hình thức con dấu thống nhất, nội dung con dấu
                (chỉ bắt buộc có thông tin tên công ty và mã số doanh nghiệp) và thậm chí được quyền giữ lại con dấu cũ
                với tên công ty cũ.
            </p>
            <p>
                Năm 2023, doanh nghiệp thực hiện khắc dấu và sử dụng con dấu mà không phải thực hiện Thông báo sử dụng
                mẫu dấu của doanh nghiệp tới Sở Kế hoạch và Đầu tư để Sở Kế hoạch như trước đây.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Tra_cứu_thông_tin_thay_đổi_đăng_ký_kinh_doanh_tại_đâu?">
                <em>Tra cứu thông tin thay đổi đăng ký kinh doanh tại đâu?</em>
            </h3>
            <p>Thông tin thay đổi sẽ được tra cứu tại cổng thông tin đăng ký doanh nghiệp quốc gia về doanh nghiệp.</p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Có_thể_nộp_hồ_sơ_thay_đổi_qua_mạng_không?">
                <em>Có thể nộp hồ sơ thay đổi qua mạng không?</em>
            </h3>
            <p>Hồ sơ thay đổi sẽ được nộp qua mạng bởi 2 bước như sau:</p>
            <ul class="div-left-ul">
                <li>
                    Nộp hồ sơ trực tuyến qua cổng thông tin quốc gia về doanh nghiệp.
                </li>
                <li>
                    Nộp hồ sơ trực tiếp (hồ sơ giấy) tới cơ quan đăng ký sau khi được chấp thuận hồ sơ trực tuyến.
                </li>
            </ul>
            <p>
                Do đó, công ty có thể nộp hồ sơ thay đổi đăng ký kinh doanh qua mạng được, hiện tại nhiều tỉnh thành
                việc nộp hồ sơ thay đổi qua mạng là thủ tục bắt buộc và không còn nhận hồ sơ trực tiếp, trong đó Hà Nội
                là một ví dụ.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Thời_gian_thay_đổi_đăng_ký_kinh_doanh_hết_bao_lâu?">
                <em>Thời gian thay đổi đăng ký kinh doanh hết bao lâu?</em>
            </h3>
            <p>Thời gian thay đổi tính từ ngày hồ sơ thay đổi được nộp và chấp nhận hợp lệ là 03 ngày làm việc.</p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lệ_phí_thay_đổi_đăng_ký_kinh_doanh_công_ty_như_thế_nào?">
                Lệ phí thay đổi đăng ký kinh doanh công ty như thế nào?
            </h3>
            <p>
                Lệ phí thay đổi công ty là miễn phí, doanh nghiệp chỉ cần nộp chi phí công bố thông tin thay đổi trên
                cổng thông tin quốc gia: 100.000 VND và phí thay đổi con dấu công ty: 200.000 VND (trường hợp thay đổi
                thêm dấu công ty) khi thay đổi .
            </p>
            <h3 class="div-left-h3" id="Dịch_vụ_của_Công_ty_Luật_Việt_An_về_thay_đổi_đăng_ký_kinh_doanh">
                Dịch vụ của Công ty Luật Việt An về thay đổi đăng ký kinh doanh
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <ul class="div-left-ul">

                <li>Tư vấn, chuẩn bị hồ sơ, thay mặt khách hàng thực hiện các thủ tục với cơ quan nhà nước để thay đổi
                    địa chỉ trụ sở.
                </li>
                <li>Tư vấn, chuẩn bị hồ sơ, thay mặt khách hàng thực hiện các thủ tục với cơ quan nhà nước để thay đổi
                    tên công ty.
                </li>
                <li>Tư vấn, chuẩn bị hồ sơ, thay mặt khách hàng thực hiện các thủ tục với cơ quan nhà nước để thay đổi
                    vốn điều lệ.
                </li>
                <li>Tư vấn điều kiện, chuẩn bị hồ sơ, thay mặt khách hàng thực hiện các thủ tục với cơ quan nhà nước để
                    thay đổi người đại diện theo pháp luật.
                </li>
                <li>Tư vấn, chuẩn bị hồ sơ, thay mặt khách hàng thực hiện các thủ tục với cơ quan nhà nước để thay đổi
                    ngành nghề đăng ký kinh doanh.
                </li>
                <li>Tư vấn, chuẩn bị hồ sơ, thay mặt khách hàng thực hiện các thủ tục với cơ quan nhà nước để chuyển
                    nhượng vốn, thay đổi tỷ lệ sở hữu vốn trong công ty.
                </li>
                <li>Tư vấn các thủ tục sau thay đổi ;

                </li>
                <li>Tư vấn đăng ký tài khoản của doanh nghiệp với Sở Kế hoạch và đầu tư nơi doanh nghiệp đặt trụ sở
                    chính.
                </li>
                <li>Hướng dẫn khách hàng viết hóa đơn, thay đổi thông tin hóa đơn đã phát hành.

                </li>
                <li>Xác nhận nghĩa vụ thuế khi thay đổi trụ sở khác quận, khác tỉnh….

                </li>
                <li>Tư vấn các vấn đề pháp lý phát sinh trong hoạt động của doanh nghiệp.

                </li>
            </ul>
            <p style="text-align: center">
                <em>Quý khách hàng có nhu cầu thay đổi đăng ký kinh doanh xin vui lòng liên hệ
                    tới Luật Việt An để được hỗ trợ tốt nhất!
                </em>
            </p>
            <div class="gioithieu-full" style="text-align:center;margin-top:0;">
                <span class="gioithieu-tv" id="CÁC_BÀI_VIẾT_LIÊN_QUAN_ĐẾN_THÀNH_LẬP_DOANH_NGHIỆP">
                    <a style=" color:#ff6600; font-weight:600;font-size:22px;line-height:30px;">
                        CÁC BÀI VIẾT LIÊN QUAN ĐẾN THAY ĐỔI ĐĂNG KÝ KINH DOANH

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
                        <ol id="at-item" type="I">
                            <li><a href="#Các_doanh_nghiệp_phải_thực_hiện_thủ_tục_thay_đổi_đăng_ký_doanh_nghiệp">Các
                                    doanh nghiệp phải thực hiện thủ tục thay đổi đăng ký doanh nghiệp</a></li>
                            <li><a href="#Tài_liệu_cần_chuẩn_bị_khi_thay_đổi_đăng_ký_kinh_doanh">Tài liệu cần chuẩn bị
                                    khi thay đổi đăng ký kinh doanh</a></li>
                            <li><a href="#Thủ_tục_thay_đổi_đăng_ký_kinh_doanh_năm_2023">Thủ tục thay đổi đăng ký kinh
                                    doanh năm 2023</a>
                                <ol>
                                    <li><a href="#Bước_1:_Xác_nhận_nghĩa_vụ_thuế">Bước&nbsp;1:&nbsp;Xác nhận nghĩa vụ
                                            thuế</a></li>
                                    <li><a href="#Bước_2:_Soạn_thảo_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">Bước&nbsp;2:&nbsp;Soạn
                                            thảo hồ sơ thay đổi đăng ký kinh doanh</a></li>
                                    <li><a href="#Bước_3:_Nộp_hồ_sơ_thay_đổi,_lệ_phí_công_bố_thông_tin">Bước&nbsp;3: Nộp
                                            hồ sơ thay đổi, lệ phí công bố thông tin</a></li>
                                    <li><a href="#Phương_thức_nộp_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">Phương thức nộp hồ
                                            sơ thay đổi đăng ký kinh doanh</a></li>
                                    <li><a href="#Bước_4:_Nhận_kết_quả_thay_đổi_đăng_ký_kinh_doanh">Bước&nbsp;4: Nhận
                                            kết quả thay đổi đăng ký kinh doanh</a></li>
                                    <li><a href="#Bước_5:_Khắc_lại_dấu_công_ty">Bước&nbsp;5: Khắc&nbsp;lại dấu công
                                            ty</a></li>
                                </ol>
                            </li>
                            <li><a href="#Hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">Hồ sơ thay đổi đăng ký kinh doanh</a>
                                <ol>
                                    <li><a href="#Hồ_sơ_thay_đổi_tên_công_ty">Hồ sơ thay đổi tên công ty</a></li>
                                    <li><a href="#Hồ_sơ_thay_đổi_địa_chỉ_công_ty">Hồ sơ thay đổi địa chỉ công ty</a>
                                    </li>
                                    <li><a href="#Hồ_sơ_thay_đổi_người_đại_diện_theo_pháp_luật_của_công_ty">Hồ sơ thay
                                            đổi người đại diện theo pháp luật của công ty</a></li>
                                    <li><a href="#Hồ_sơ_tăng_vốn_điều_lệ_công_ty">Hồ sơ tăng vốn điều lệ công ty</a>
                                    </li>
                                    <li><a href="#Hồ_sơ_giảm_vốn_điều_lệ_công_ty">Hồ sơ giảm vốn điều lệ công ty</a>
                                    </li>
                                    <li><a href="#Hồ_sơ_thay_đổi_ngành_nghề_công_ty">Hồ sơ thay đổi ngành nghề công
                                            ty</a></li>
                                </ol>
                            </li>
                            <li><a href="#Thẩm_quyền_thụ_ký_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">Thẩm quyền thụ ký hồ sơ
                                    thay đổi đăng ký kinh doanh</a>
                                <ol>
                                    <li><a href="#Thay_đổi_đăng_ký_kinh_doanh_của_công_ty">Thay đổi đăng ký kinh doanh
                                            của công ty</a></li>
                                    <li><a
                                            href="#Thay_đổi_đăng_ký_kinh_doanh_của_chi_nhánh,_văn_phòng_đại_diện,_địa_điểm_kinh_doanh:">Thay
                                            đổi đăng ký kinh doanh của chi nhánh, văn phòng đại diện, địa điểm kinh
                                            doanh:</a></li>
                                </ol>
                            </li>
                            <li><a href="#Các_trường_hợp_bắt_buộc_phải_nộp_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">Các trường
                                    hợp bắt buộc phải nộp hồ sơ thay đổi đăng ký kinh doanh</a></li>
                            <li><a href="#Các_trường_hợp_không_phải_nộp_hồ_sơ_thay_đổi_đăng_ký_kinh_doanh">Các trường
                                    hợp không phải nộp hồ sơ thay đổi đăng ký kinh doanh</a></li>
                            <li><a
                                    href="#Các_trường_hợp_doanh_nghiệp_không_được_thực_hiện_đăng_ký_thay_đổi_đăng_ký_kinh_doanh">Các
                                    trường hợp doanh nghiệp không được thực hiện đăng ký thay đổi đăng ký kinh doanh</a>
                            </li>
                            <li><a href="#Lưu_ý_khi_thay_đổi_đăng_ký_kinh_doanh">Lưu ý khi thay đổi đăng ký kinh
                                    doanh</a>
                                <ol>
                                    <li><a href="#Lưu_ý_về_tên_công_ty_muốn_thay_đổi">Lưu ý về tên công ty muốn thay
                                            đổi</a></li>
                                    <li><a href="#Lưu_ý_khi_thay_đổi_trụ_sở_chính_công_ty">Lưu ý khi thay đổi trụ sở
                                            chính công ty</a></li>
                                    <li><a href="#Lưu_ý_khi_bổ_sung_thêm_ngành_nghề_kinh_doanh_mới">Lưu ý khi bổ sung
                                            thêm ngành nghề kinh doanh mới</a></li>
                                    <li><a href="#Lưu_ý_khi_thay_đổi_tăng_vốn_điều_lệ_công_ty">Lưu ý khi thay đổi tăng
                                            vốn điều lệ công ty</a></li>
                                    <li><a href="#Lưu_ý_khi_thay_đổi_giảm_vốn_điều_lệ_công_ty">Lưu ý khi thay đổi giảm
                                            vốn điều lệ công ty</a></li>
                                    <li><a href="#Lưu_ý_khi_thay_đổi_thêm_thành_viên_của_công_ty_TNHH_1_thành_viên">Lưu
                                            ý khi thay đổi&nbsp;thêm thành viên của công ty TNHH 1 thành viên</a></li>
                                    <li><a href="#Lưu_ý_khi_chuyển_nhượng_cổ_phần">Lưu ý khi chuyển nhượng cổ phần</a>
                                    </li>
                                    <li><a href="#Lưu_ý_khi_chuyển_nhượng_vốn_công_ty_TNHH">Lưu ý khi chuyển nhượng vốn
                                            công ty TNHH</a></li>
                                    <li><a href="#Lưu_ý_khi_thay_đổi_người_đại_diện_theo_pháp_luật_công_ty">Lưu ý khi
                                            thay đổi người đại diện theo pháp luật công ty</a></li>
                                </ol>
                            </li>
                            <li><a href="#Một_số_thủ_tục_cần_thực_hiện_sau_khi_thay_đổi_đăng_ký_kinh_doanh">Một số thủ
                                    tục cần thực hiện sau khi thay đổi đăng ký kinh doanh</a></li>
                            <li><a href="#Một_số_câu_hỏi_khi_thay_đổi_đăng_ký_kinh_doanh">Một số câu hỏi khi thay đổi
                                    đăng ký kinh doanh</a>
                                <ol>
                                    <li><a
                                            href="#Khi_thay_đổi_có_phải_quyết_toán_thuế_và_phát_hành_lại_hóa_đơn_VAT_không?">Khi
                                            thay đổi có phải quyết toán thuế và phát hành lại hóa đơn VAT không?</a>
                                    </li>
                                    <li><a
                                            href="#Khi_thay_đổi_nội_dung_nào_doanh_nghiệp_cần_khắc_lại_con_dấu_(mộc)_công_ty?">Khi
                                            thay đổi nội dung nào doanh nghiệp cần khắc lại con dấu (mộc) công ty?</a>
                                    </li>
                                    <li><a href="#Tra_cứu_thông_tin_thay_đổi_đăng_ký_kinh_doanh_tại_đâu?">Tra cứu thông
                                            tin thay đổi đăng ký kinh doanh&nbsp;tại&nbsp;đâu?</a></li>
                                    <li><a href="#Có_thể_nộp_hồ_sơ_thay_đổi_qua_mạng_không?">Có thể nộp hồ sơ thay đổi
                                            qua mạng không?</a></li>
                                    <li><a href="#Thời_gian_thay_đổi_đăng_ký_kinh_doanh_hết_bao_lâu?">Thời gian thay đổi
                                            đăng ký kinh doanh&nbsp;hết&nbsp;bao lâu?</a></li>
                                    <li><a href="#Lệ_phí_thay_đổi_đăng_ký_kinh_doanh_công_ty_như_thế_nào?">Lệ phí thay
                                            đổi đăng ký kinh doanh công ty&nbsp;như thế nào?</a></li>
                                </ol>
                            </li>
                            <li><a href="#Dịch_vụ_của_Công_ty_Luật_Việt_An_về_thay_đổi_đăng_ký_kinh_doanh">Dịch vụ của
                                    Công ty Luật Việt An về thay đổi đăng ký kinh doanh</a></li>
                            <li><a href="#CÁC_BÀI_VIẾT_LIÊN_QUAN_ĐẾN_THAY_ĐỔI_ĐĂNG_KÝ_KINH_DOANH">CÁC BÀI VIẾT LIÊN QUAN
                                    ĐẾN THAY ĐỔI ĐĂNG KÝ KINH DOANH</a></li>
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
        $result=$CategoryRelated->TDDKKD_pagination($start,$limit);
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
                        border: 1px solid #ddd;"><a href="thay-doi-dang-ky-kinh-doanh-page'.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
                        <li style="color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        transition: background-color .3s;
                        border: 1px solid #ddd;">
                        <a href="thay-doi-dang-ky-kinh-doanh-page<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="thay-doi-dang-ky-kinh-doanh-page'.($current_page+1).'">Next</a></li>';
                        }
                    ?>
    </ul>
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