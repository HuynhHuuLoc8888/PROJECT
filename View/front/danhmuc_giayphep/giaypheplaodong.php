<style>
<?php 
include "./Assets/front/css/style.css";
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
    $Category=new Category();
    $result=$Category->showCategoryGPLĐ();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<section>
    <div>
        <p class="title-first">Giấy phép lao động</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p>
                Với nhu cầu tuyển dụng người lao động nước ngoài vào Việt Nam làm
                việc ngày càng nhiều, pháp luật Việt Nam cho phép doanh nghiệp, cơ quan,
                tổ chức, cá nhân, nhà thầu tuyển dụng người lao động nước ngoài vào làm vị
                trí công việc quản lý, điều hành, chuyên gia và lao động kỹ thuật mà người lao
                động Việt Nam chưa đáp ứng được theo nhu cầu sản xuất, kinh doanh. Để người lao
                động nước ngoài làm việc hợp pháp tại Việt Nam thì người lao động nước ngoài cần
                có giấy phép lao động. Công ty luật Việt An xin gửi tới quý khách hàng tổng hợp
                các thông tin pháp lý cần biết về liên quan đến thủ tục cấp giấy phép lao động tại Việt Nam.
            </p>
            <h3 class="div-left-h3" id="Văn_bản_pháp_luật_hướng_dẫn_thủ_tục_cấp_giấy_phép_lao_động">
                Văn bản pháp luật hướng dẫn thủ tục cấp giấy phép lao động
            </h3>
            <ul class="div-left-ul">
                <li>Bộ luật Lao động 2019 có hiệu lực từ ngày 1/1/2021;</li>
                <li>Nghị định 152/2020 NĐ-CP ngày 30/12/2020 quy định về người lao động nước ngoài làm việc tại Việt Nam
                    và tuyển dụng, quản lý người lao động Việt Nam làm việc cho tổ chức, cá nhân nước ngoài tại Việt
                    Nam.</li>
            </ul>
            <h3 class="div-left-h3" id="Điều_kiện_người_nước_ngoài_được_cấp_giấy_phép_lao_động_tại_Việt_Nam">
                Điều kiện người nước ngoài được cấp giấy phép lao động tại Việt Nam
            </h3>
            <ul class="div-left-ul">
                <li>Đủ 18 tuổi trở lên và có năng lực hành vi dân sự đầy đủ;</li>
                <li>Có trình độ chuyên môn, kỹ thuật, tay nghề, kinh nghiệm làm việc; có đủ sức khỏe theo quy định của
                    Bộ trưởng Bộ Y tế;</li>
                <li>Không phải là người đang trong thời gian chấp hành hình phạt hoặc chưa được xóa án tích hoặc đang
                    trong thời gian bị truy cứu trách nhiệm hình sự theo quy định của pháp luật nước ngoài hoặc pháp
                    luật Việt Nam;</li>
                <li>Có giấy phép lao động do cơ quan nhà nước có thẩm quyền của Việt Nam cấp, trừ trường hợp người lao
                    động nước ngoài làm việc tại Việt Nam không thuộc diện cấp giấy phép lao động theo Điều 154 Bộ luật
                    Lao động năm 2019.</li>
            </ul>
            <p>
                Bên cạnh đó, người lao động nước ngoài làm việc tại Việt Nam phải tuân
                theo pháp luật lao động Việt Nam và được pháp luật Việt Nam bảo vệ,
                trừ trường hợp điều ước quốc tế mà nước Cộng hòa xã hội chủ nghĩa
                Việt Nam là thành viên có quy định khác.
            </p>
            <h3 class="div-left-h3" id="Đối_tượng_người_nước_ngoài_nào_được_cấp_giấy_phép_lao_động_tại_Việt_Nam">Đối
                tượng người nước ngoài nào được cấp giấy phép lao động tại Việt Nam</h3>
            <p>Việc cấp giấy phép lao động nước ngoài được áp dụng cho người nước ngoài làm việc tại Việt Nam, cụ thể
                gồm các đối tượng như sau:</p>
            <ul class="div-left-ul">
                <li>Thực hiện hợp đồng lao động;</li>
                <li>Di chuyển trong nội bộ doanh nghiệp;</li>
                <li>Nhà đầu tư góp vốn vào công ty Việt Nam, thành lập công ty Việt Nam nhưng góp vốn dưới 3 tỷ đồng
                    Việt Nam;</li>
                <li>Thực hiện các loại hợp đồng hoặc thỏa thuận về kinh tế, thương mại, tài chính, ngân hàng, bảo hiểm,
                    khoa học kỹ thuật, văn hóa, thể thao, giáo dục, giáo dục nghề nghiệp và y tế;</li>
                <li>Nhà cung cấp dịch vụ theo hợp đồng;</li>
                <li>Chào bán dịch vụ;</li>
                <li>Làm việc cho tổ chức phi chính phủ nước ngoài, tổ chức quốc tế tại Việt Nam được phép hoạt động theo
                    quy định của pháp luật Việt Nam;</li>
                <li>Tình nguyện viên;</li>
                <li>Người chịu trách nhiệm thành lập hiện diện thương mại;</li>
                <li>Nhà quản lý, giám đốc điều hành, chuyên gia, lao động kỹ thuật;</li>
                <li>Tham gia thực hiện các gói thầu, dự án tại Việt Nam;</li>
                <li>Thân nhân thành viên cơ quan đại diện nước ngoài tại Việt Nam được phép làm việc tại Việt Nam theo
                    quy định tại điều ước quốc tế mà nước Cộng hòa xã hội chủ nghĩa Việt Nam là thành viên.</li>
            </ul>
            <h3 class="div-left-h3" id="Danh_mục_hồ_sơ_cấp_giấy_phép_lao_động_và_lưu_ý_về_hồ_sơ_cấp_giấy_phép_lao_động">
                Danh mục hồ sơ cấp giấy phép lao động và lưu ý về hồ sơ cấp giấy phép lao động</h3>
            <h4 class="div-left-h4" id="Hồ_sơ_cấp_giấy_phép_lao_động_cần_chuẩn_bị"><em>Hồ sơ cấp giấy phép lao động cần
                    chuẩn bị</em></h4>
            <ul class="div-left-ul">
                <li>Giấy chứng nhận sức khỏe hoặc giấy khám sức khỏe do cơ quan, tổ chức y tế có thẩm quyền của nước
                    ngoài hoặc của Việt Nam cấp có giá trị trong thời hạn 12 tháng, kể từ ngày ký kết luận sức khỏe đến
                    ngày nộp hồ sơ hoặc giấy chứng nhận có đủ sức khỏe theo quy định của Bộ trưởng Bộ Y tế. Danh mục các
                    bệnh viện đủ điều kiện khám sức khỏe xin cấp giấy phép lao động xin vui lòng tham khảo tại bài viết:
                    https://luatvietan.vn/cac-benh-vien-kham-suc-khoe-cap-giay-phep-lao-dong.html</li>
                <li>Phiếu lý lịch tư pháp hoặc văn bản xác nhận người lao động nước ngoài không phải là người đang trong
                    thời gian chấp hành hình phạt hoặc chưa được xóa án tích hoặc đang trong thời gian bị truy cứu trách
                    nhiệm hình sự của nước ngoài hoặc của Việt Nam cấp.</li>
            </ul>
            <h4 class="div-left-h4" id="Lưu_ý_về_phiếu_lý_lịch_tư_pháp_trong_hồ_sơ_cấp_giấy_phép_lao_động"><em>Lưu ý về
                    phiếu lý lịch tư pháp trong hồ sơ cấp giấy phép lao động</em></h4>
            <ul class="div-left-ul">
                <li>Đối với phiếu lý lịch tư pháp cấp tại nước ngoài: phiếu lý lịch tư pháp cấp hoặc văn bản xác nhận
                    người lao động nước ngoài không phải là người đang trong thời gian chấp hành hình phạt hoặc chưa
                    được xóa án tích hoặc đang trong thời gian bị truy cứu trách nhiệm hình sự được cấp tại nước ngoài
                    không quá 06 tháng, kể từ ngày cấp đến ngày nộp hồ sơ.</li>
                <li>Đối với phiếu lý lịch tư pháp cấp tại Việt Nam: Nếu người lao động có xác nhận tạm trú tại Việt Nam
                    và đang cư trú tại Việt Nam có thể xin cấp phiếu lý lịch tư pháp tại Sở Tư pháp nơi người nước ngoài
                    đang cư trú tại Việt Nam để nộp hồ sơ cấp giấy phép lao động. Thời hạn của lý lịch tư pháp được cấp
                    tại Việt Nam cho người nước ngoài cũng không quá 06 tháng, kể từ ngày cấp đến ngày nộp hồ sơ.</li>
            </ul>
            <h4 class="div-left-h4"
                id="Văn_bản,_giấy_tờ_chứng_minh_là_nhà_quản_lý,_giám_đốc_điều_hành,_chuyên_gia,_lao_động_kỹ_thuật">
                <em>Văn bản, giấy tờ chứng minh là nhà quản lý, giám đốc điều hành, chuyên gia, lao động kỹ thuật</em>
            </h4>
            <ul class="div-left-ul">
                <li>Có bằng đại học trở lên hoặc tương đương và có ít nhất 3 năm kinh nghiệm làm việc trong chuyên ngành
                    được đào tạo phù hợp với vị trí công việc mà người lao động nước ngoài dự kiến làm việc tại Việt
                    Nam;</li>
                <li>Có ít nhất 5 năm kinh nghiệm và có chứng chỉ hành nghề phù hợp với vị trí công việc mà người lao
                    động nước ngoài dự kiến làm việc tại Việt Nam;</li>
                <li>Nhà quản lý là người quản lý doanh nghiệp theo quy định tại khoản 24 Điều 4 Luật Doanh nghiệp hoặc
                    là người đứng đầu, cấp phó của người đứng đầu của cơ quan, tổ chức.</li>
                <li>Giám đốc điều hành là người đứng đầu và trực tiếp điều hành đơn vị trực thuộc cơ quan, tổ chức,
                    doanh nghiệp.</li>
                <li>Lao động kỹ thuật thuộc một trong các trường hợp sau đây:</li>
                <li>Được đào tạo chuyên ngành kỹ thuật hoặc chuyên ngành khác ít nhất 01 năm và làm việc ít nhất 03 năm
                    trong chuyên ngành được đào tạo;</li>
                <li>Có ít nhất 5 năm kinh nghiệm làm công việc phù hợp với vị trí công việc mà người lao động nước ngoài
                    dự kiến làm việc tại Việt Nam.</li>
            </ul>
            <p><em>Lưu ý: Giấy tờ chứng minh là chuyên gia, lao động kỹ thuật theo quy định, gồm: văn bằng, chứng chỉ,
                    văn bản xác nhận của cơ quan, tổ chức, doanh nghiệp tại nước ngoài về số năm kinh nghiệm của chuyên
                    gia, lao động kỹ thuật;</em></p>
            <h4 class="div-left-h4" id="Ảnh_nộp_cùng_hồ_sơ"><em>Ảnh nộp cùng hồ sơ</em></h4>
            <p>02 ảnh màu (kích thước 4 cm x 6 cm, phông nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu),
                ảnh chụp không quá 06 tháng tính đến ngày nộp hồ sơ.</p>
            <h4 class="div-left-h4" id="Bản_sao_giấy_tờ_cá_nhân"><em>Bản sao giấy tờ cá nhân</em></h4>
            <p>Bản sao có chứng thực hộ chiếu còn giá trị theo quy định của pháp luật. Bao gồm tất cả các trang của hộ
                chiếu.</p>
            <h4 class="div-left-h4" id="Các_giấy_tờ_khác"><em>Các giấy tờ khác</em></h4>
            <ul class="div-left-ul">
                <li>Đối với người lao động nước ngoài di chuyển trong nội bộ doanh nghiệp cần có các văn bản sau:</li>
                <li>Văn bản của doanh nghiệp nước ngoài cử sang làm việc tại hiện diện thương mại của doanh nghiệp nước
                    ngoài đó trên lãnh thổ Việt Nam;</li>
                <li>Văn bản chứng minh người lao động nước ngoài đã được doanh nghiệp nước ngoài đó tuyển dụng trước khi
                    làm việc tại Việt Nam ít nhất 12 tháng liên tục;</li>
                <li>Đối với người lao động nước ngoài thực hiện các loại hợp đồng hoặc thỏa thuận theo quy định phải các
                    văn bản:</li>
            </ul>
            <h4 class="div-left-h4" id="Hợp_đồng_hoặc_thỏa_thuận_ký_kết_giữa_đối_tác_phía_Việt_Nam_và_phía_nước_ngoài,">
                <em>Hợp đồng hoặc thỏa thuận ký kết giữa đối tác phía Việt Nam và phía nước ngoài,</em></h4>
            <p>Hợp đồng trong đó phải có thỏa thuận về việc người lao động nước ngoài làm việc tại Việt Nam;</p>
            <ul class="div-left-ul">
                <li>Đối với người lao động nước ngoài là nhà cung cấp dịch vụ theo hợp đồng phải các văn bản:</li>
                <li>Hợp đồng cung cấp dịch vụ ký kết giữa đối tác phía Việt Nam và phía nước ngoài và văn bản chứng minh
                    người lao động nước ngoài đã làm việc cho doanh nghiệp nước ngoài không có hiện diện thương mại tại
                    Việt Nam được ít nhất 02 năm;</li>
                <li>Đối với người lao động nước ngoài chào bán dịch vụ phải có văn bản:</li>
                <li>Văn bản của nhà cung cấp dịch vụ cử người lao động nước ngoài vào Việt Nam để đàm phán cung cấp dịch
                    vụ;</li>
                <li>Đối với người lao động nước ngoài làm việc cho tổ chức phi chính phủ nước ngoài, tổ chức quốc tế tại
                    Việt Nam phải các văn bản:</li>
            </ul>
            <h4 class="div-left-h4" id="Văn_bản_của_cơ_quan,_tổ_chức_cử_người_lao_động_nước_ngoài_đến_làm_việc"><em>Văn
                    bản của cơ quan, tổ chức cử người lao động nước ngoài đến làm việc</em></h4>
            <ul class="div-left-ul">
                <li>Văn bản của cơ quan, tổ chức cử người lao động nước ngoài đến làm việc cho tổ chức phi chính phủ
                    nước ngoài, tổ chức quốc tế tại Việt Nam và giấy phép hoạt động của tổ chức phi chính phủ nước
                    ngoài, tổ chức quốc tế tại Việt Nam theo quy định của pháp luật;</li>
                <li>Đối với người lao động nước ngoài là nhà quản lý, giám đốc điều hành, chuyên gia, lao động kỹ thuật
                    thì phải các văn bản: Văn bản của doanh nghiệp, cơ quan, tổ chức nước ngoài cử người lao động nước
                    ngoài sang làm việc tại Việt Nam và phù hợp với vị trí dự kiến làm việc.</li>
            </ul>
            <h4 class="div-left-h4" id="Một_số_lưu_ý_khi_chuẩn_bị_hồ_sơ_cấp_giấy_phép_lao_động"><em>Một số lưu ý khi
                    chuẩn bị hồ sơ cấp giấy phép lao động</em></h4>
            <ul class="div-left-ul">
                <li>Các loại giấy tờ, hồ sơ cần phải hợp pháp hóa lãnh sự và dịch công chứng</li>
                <li>Toàn bộ các giấy tờ nêu trên của người nước ngoài được cấp tại nước ngoài đều phải được hợp pháp hóa
                    lãnh sự, sau đó dịch sang tiếng Việt và công chứng, chứng thực trước khi nộp hồ sơ trừ cá giấy tờ,
                    tài liệu được miễn hợp pháp hóa lãnh sự theo quy định của pháp luật Việt Nam hoặc theo điều ước quốc
                    tế mà Việt Nam và nước ngoài liên quan đều là thành viên, hoặc theo nguyên tắc có đi có lại.</li>
            </ul>
            <h3 class="div-left-h3" id="Quy_trình_cấp_giấy_phép_lao_động_cho_người_lao_động_nước_ngoài_tại_Việt_Nam">Quy
                trình cấp giấy phép lao động cho người lao động nước ngoài tại Việt Nam</h3>
            <p><em>Bước 1. Xin chấp thuận nhu cầu sử dụng lao động là người nước ngoài</em></p>
            <p>Trước ít nhất 30 ngày kể từ ngày dự kiến sử dụng người lao động nước ngoài, người sử dụng lao động (trừ
                nhà thầu) gửi báo cáo giải trình về nhu cầu sử dụng người lao động nước ngoài đến Bộ Lao động – Thương
                binh và Xã hội hoặc Chủ tịch Ủy ban nhân dân cấp tỉnh.</p>
            <ul class="div-left-ul">
                <li>Trong vòng 10 ngày kể từ ngày nhận được tờ khai và báo cáo giải trình nhu cầu sử dụng lao động nước
                    ngoài hợp lệ, cơ quan chấp thuận sẽ gửi kết quả qua thư điện tử của người sử dụng lao động. Nếu hồ
                    sơ nộp chưa hợp lệ, cơ quan chấp thuận sẽ ra thông báo chỉnh sửa.</li>
                <li>Hồ sơ bao gồm: Mẫu báo cáo giải trình nhu cầu sử dụng lao động nước ngoài (theo mẫu số 01 Phụ lục 01
                    Nghị định số 152/2020/NĐ-CP) kèm bản sao đăng ký doanh nghiệp.</li>
            </ul>
            <h4 class="div-left-h4" id="Bước_2:_Nộp_hồ_sơ_cấp_giấy_phép_lao_động"><em>Bước 2: Nộp hồ sơ cấp giấy phép
                    lao động</em></h4>
            <p>Trước ít nhất 15 ngày làm việc, kể từ ngày người lao động nước ngoài dự kiến bắt đầu làm việc cho người
                sử dụng lao động thì người sử dụng lao động phải khai thông tin vào tờ khai và nộp hồ sơ đề nghị cấp
                giấy phép lao động theo quy định đến cơ quan cấp giấy phép lao động qua cổng thông tin điện tử.</p>
            <ul class="div-left-ul">
                <li>Số lượng hồ sơ: 01 bộ</li>
                <li>Nộp hồ sơ tại: Nộp trực tiếp tại Bộ phận 1 cửa của cơ quan chấp thuận hoặc hệ thống cổng thông tin
                    điện tử http://dvc.vieclamvietnam.gov.vn</li>
                <li>Thời gian giải quyết: 05 ngày làm việc</li>
            </ul>
            <h4 class="div-left-h4"
                id="Bước_3:_Ký_kết_hợp_đồng_lao_động_và_báo_cáo_tình_hình_sử_dụng_lao_động_nước_ngoài_với_Sở_Lao_động_–_Thương_binh_và_Xã_hội_hoặc_Ban_quản_lý_các_khu_công_nghiệp_và_chế_xuất_của_tỉnh">
                <em>Bước 3: Ký kết hợp đồng lao động và báo cáo tình hình sử dụng lao động nước ngoài với Sở Lao động –
                    Thương binh và Xã hội hoặc Ban quản lý các khu công nghiệp và chế xuất của tỉnh</em></h4>
            <p>Sau khi người nước ngoài được cấp giấy phép lao động thì Doanh nghiệp (Người sử dụng lao động) phải thực
                hiện các thủ tục như sau:</p>
            <ul class="div-left-ul">
                <li>Ký kết hợp đồng lao động với người được cấp giấy phép lao động;</li>
                <li>Đóng bảo hiểm y tế, bảo hiểm xã hội cho người lao động nước ngoài. Kể từ ngày 01/01/2018 người lao
                    động nước ngoài nếu đã được cấp giấy phép lao động, chứng chỉ hành nghề hoặc giấy phép hành nghề bởi
                    cơ quan có thẩm quyền của Việt Nam cũng là đối tượng bắt buộc tham gia bảo hiểm xã hội theo quy định
                    của Luật Bảo hiểm xã hội 2014.</li>
                <li>Báo cáo tình hình sử dụng lao động nước ngoài: Hiện tại người sử dụng lao động (trừ nhà thầu) không
                    phải thực hiện thực hiện chế độ báo cáo định kỳ. Thay vào đó, người sử dụng lao động sẽ báo cáo khi
                    có yêu cầu của cơ quan nhà nước có thẩm quyền.</li>
            </ul>
            <h4 class="div-left-h4"
                id="Bước_4:_Cấp_thẻ_tạm_trú_theo_thời_hạn_của_giấy_phép_lao_động_cho_người_nước_ngoài"><em>Bước 4: Cấp
                    thẻ tạm trú theo thời hạn của giấy phép lao động cho người nước ngoài</em></h4>
            <p>Sau khi Người lao động nước ngoài được cấp Giấy phép lao động tại Việt Nam, thì việc tiếp theo là xin cấp
                Thẻ tạm trú theo thời hạn của Giấy phép lao đông. Tại Việt Nam thời hạn của Giấy phép lao động tối đa là
                02 năm vì vậy thời gian tối đa của thẻ tạm trú cũng là 02 năm theo giấy phép lao động.</p>
            <p><em>Hồ sơ xin cấp thẻ tạm trú </em></p>
            <ul class="div-left-ul">
                <li>Văn bản đề nghị của cơ quan, tổ chức, cá nhân làm thủ tục mời, bảo lãnh (thường là người sử dụng lao
                    động)</li>
                <li>Tờ khai đề nghị cấp thẻ tạm trú có dán ảnh: Mẫu NA8 được ban hành kèm theo Thông tư số
                    04/2015/TT-BCA Quy định mẫu giấy tờ liên quan đến việc Nhập cảnh, xuất cảnh, cư trú của người nước
                    ngoài tại Việt Nam. Tờ khai này được người đề nghị cấp thể tạm trú ký, ghi rõ họ tên. Cơ quan, tổ
                    chức bảo lãnh đóng dấu giáp lai ảnh và tờ khai và đóng dấu treo ở bên còn lại;</li>
                <li>Hộ chiếu của người đề nghị cấp thẻ tạm trú;</li>
                <li>Giấy phép lao động của người đề nghị cấp thẻ tạm trú;</li>
                <li>03 ảnh mầu (kích thước 2cm x 3cm, phông nền trắng, mặt nhìn thẳng, đầu để trần, không đeo kính màu),
                    ảnh chụp không quá 06 tháng tính đến ngày nộp hồ sơ;</li>
                <li>Giấy xác nhận tạm trú do Công an xã/phường nơi người nước ngoài tạm trú xác nhận;</li>
                <li>Tài liệu chứng minh tư cách pháp nhân của đơn vị bảo lãnh.</li>
            </ul>
            <p><em>Lưu ý</em><em> về sử dụng giấy phép lao động, thẻ tạm trú</em></p>
            <p>Trường hợp người lao động chấm dứt hợp đồng lao động với doanh nghiệp, tổ chức cần thực hiện thu hồi lại
                giấy phép lao động và thẻ tạm trú đã cấp cho người nước ngoài với tư cách là người lao động tại doanh
                nghiệp, tổ chức để tránh các trách nhiệm pháp lý của doanh nghiệp, tổ chức xảy ra (nếu có).</p>
            <h3 class="div-left-h3" id="Một_số_câu_hỏi_liên_quan">Một số câu hỏi liên quan</h3>
            <p><strong><em>Thời hạn của giấy phép lao động là bao lâu?</em></strong></p>
            <p>Thời hạn của giấy phép lao động tối đa là 02 năm, trường hợp gia hạn thì chỉ được gia hạn một lần với
                thời hạn tối đa là 02 năm.</p>
            <p><strong><em>Tài liệu phải hợp pháp hoá lãnh sự?</em></strong></p>
            <p>Các tài liệu do cơ quan, tổ chức, doanh nghiệp nước ngoài cấp/ban hành mà người lao động nước ngoài nộp
                trong hồ sơ để nghị cấp giấy phép lao động phải được hợp pháp hóa lãnh sự, dịch ra tiếng Việt và chứng
                thực theo quy định của pháp luật Việt Nam.</p>
            <p><strong><em>Các đơn vị được sử dụng người nước ngoài?</em></strong></p>
            <p>Mọi công ty, doanh nghiệp, tổ chức hoặt động hợp pháp tại Việt Nam đều được phép sử dụng người lao động
                nước ngoài. Đơn vị sử dụng người lao động nước ngoài phải tuân thủ đầy đủ quy định của pháp luật.</p>
            <h3 class="div-left-h3"
                id="Dịch_vụ_tư_vấn_cấp_giấy_phép_lao_động_cho_người_nước_ngoài_của_Công_ty_luật_Việt_An">Dịch vụ tư vấn
                cấp giấy phép lao động cho người nước ngoài của Công ty luật Việt An</h3>
            <ul class="div-left-ul">
                <li>Tư vấn các thủ tục cấp phiếu lý lịch tư pháp cho người nước ngoài tại Việt Nam (để có thể thực hiện
                    thủ tục cấp phiếu lý lịch tư pháp người nước ngoài cần có xác nhận tạm trú tại Việt Nam);</li>
                <li>Tư vấn hồ sơ xin cấp giấy phép lao động cho người nước ngoài theo qui định;</li>
                <li>Tư vấn thủ tục khám sức khỏe tại Việt Nam để xin giấy phép lao động;</li>
                <li>Dịch, công chứng dịch, hợp pháp lãnh sự các tài liệu phục vụ cho việc cấp giấy phép lao động;</li>
                <li>Tư vấn điều kiện để được cấp giấy phép lao động tại Việt Nam;</li>
                <li>Hoàn thiện hồ sơ cấp giấy phép lao động tại Việt Nam cho khách hàng;</li>
                <li>Tư vấn các trường hợp không thuộc diện phải cấp giấy phép lao động và thực hiện thủ tục cấp xác nhận
                    thuộc trường hợp không phải xin cấp giấy phép lao động;</li>
                <li>Đại diện doanh nghiệp và người lao động thực hiện thủ tục xin cấp giấy phép lao động tại cơ quan nhà
                    nước có thẩm quyền.</li>
                <li>Tư vấn, hướng dẫn chuẩn bị hồ sơ cấp thẻ tạm trú cho người nước ngoài sau khi được cấp giấy phép lao
                    động.</li>
            </ul>
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
                            <li><a href="#Văn_bản_pháp_luật_hướng_dẫn_thủ_tục_cấp_giấy_phép_lao_động">Văn bản pháp luật
                                    hướng dẫn thủ tục cấp giấy phép lao động</a></li>
                            <li><a href="#Điều_kiện_người_nước_ngoài_được_cấp_giấy_phép_lao_động_tại_Việt_Nam">Điều kiện
                                    người nước ngoài được cấp giấy phép lao động tại Việt Nam</a></li>
                            <li><a href="#Đối_tượng_người_nước_ngoài_nào_được_cấp_giấy_phép_lao_động_tại_Việt_Nam">Đối
                                    tượng người nước ngoài nào được cấp giấy phép lao động tại Việt Nam</a></li>
                            <li><a
                                    href="#Danh_mục_hồ_sơ_cấp_giấy_phép_lao_động_và_lưu_ý_về_hồ_sơ_cấp_giấy_phép_lao_động">Danh
                                    mục hồ sơ cấp giấy phép lao động và lưu ý về hồ sơ cấp giấy phép lao động</a>
                                <ol>
                                    <li><a href="#Hồ_sơ_cấp_giấy_phép_lao_động_cần_chuẩn_bị">Hồ sơ cấp giấy phép lao
                                            động cần chuẩn bị</a></li>
                                    <li><a href="#Lưu_ý_về_phiếu_lý_lịch_tư_pháp_trong_hồ_sơ_cấp_giấy_phép_lao_động">Lưu
                                            ý về phiếu lý lịch tư pháp trong hồ sơ cấp giấy phép lao động</a></li>
                                    <li><a
                                            href="#Văn_bản,_giấy_tờ_chứng_minh_là_nhà_quản_lý,_giám_đốc_điều_hành,_chuyên_gia,_lao_động_kỹ_thuật">Văn
                                            bản, giấy tờ chứng minh là nhà quản lý, giám đốc điều hành, chuyên gia, lao
                                            động kỹ thuật</a></li>
                                    <li><a href="#Ảnh_nộp_cùng_hồ_sơ">Ảnh nộp cùng hồ sơ</a></li>
                                    <li><a href="#Bản_sao_giấy_tờ_cá_nhân">Bản sao giấy tờ cá nhân</a></li>
                                    <li><a href="#Các_giấy_tờ_khác">Các giấy tờ khác</a></li>
                                    <li><a
                                            href="#Hợp_đồng_hoặc_thỏa_thuận_ký_kết_giữa_đối_tác_phía_Việt_Nam_và_phía_nước_ngoài,">Hợp
                                            đồng hoặc thỏa thuận ký kết giữa đối tác phía Việt Nam và phía nước
                                            ngoài,</a></li>
                                    <li><a
                                            href="#Văn_bản_của_cơ_quan,_tổ_chức_cử_người_lao_động_nước_ngoài_đến_làm_việc">Văn
                                            bản của cơ quan, tổ chức cử người lao động nước ngoài đến làm việc</a></li>
                                    <li><a href="#Một_số_lưu_ý_khi_chuẩn_bị_hồ_sơ_cấp_giấy_phép_lao_động">Một số lưu ý
                                            khi chuẩn bị hồ sơ cấp giấy phép lao động</a></li>
                                </ol>
                            </li>
                            <li><a href="#Quy_trình_cấp_giấy_phép_lao_động_cho_người_lao_động_nước_ngoài_tại_Việt_Nam">Quy
                                    trình cấp giấy phép lao động cho người lao động nước ngoài tại Việt Nam</a>
                                <ol>
                                    <li><a href="#Bước_2:_Nộp_hồ_sơ_cấp_giấy_phép_lao_động">Bước 2: Nộp hồ sơ cấp giấy
                                            phép lao động</a></li>
                                    <li><a
                                            href="#Bước_3:_Ký_kết_hợp_đồng_lao_động_và_báo_cáo_tình_hình_sử_dụng_lao_động_nước_ngoài_với_Sở_Lao_động_–_Thương_binh_và_Xã_hội_hoặc_Ban_quản_lý_các_khu_công_nghiệp_và_chế_xuất_của_tỉnh">Bước
                                            3: Ký kết hợp đồng lao động và báo cáo tình hình sử dụng lao động nước ngoài
                                            với Sở Lao động – Thương binh và Xã hội hoặc Ban quản lý các khu công nghiệp
                                            và chế xuất của tỉnh</a></li>
                                    <li><a
                                            href="#Bước_4:_Cấp_thẻ_tạm_trú_theo_thời_hạn_của_giấy_phép_lao_động_cho_người_nước_ngoài">Bước
                                            4: Cấp thẻ tạm trú theo thời hạn của giấy phép lao động cho người nước
                                            ngoài</a></li>
                                </ol>
                            </li>
                            <li><a href="#Một_số_câu_hỏi_liên_quan">Một số câu hỏi liên quan</a></li>
                            <li><a
                                    href="#Dịch_vụ_tư_vấn_cấp_giấy_phép_lao_động_cho_người_nước_ngoài_của_Công_ty_luật_Việt_An">Dịch
                                    vụ tư vấn cấp giấy phép lao động cho người nước ngoài của Công ty luật Việt An</a>
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

<?php
        $Category=new Category();
        $result=$Category->GPLĐ_pagination($start,$limit);
        while($set=$result->fetch()):
    ?>
    <div class="d-related">
        <a href="<?php echo $set['url']?>" class="a-related" title="<?php echo $set['name']?>">
            <img src="./Assets/back/images/<?php echo $set['image']?>" width="200" height="120" alt=""
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
<div class="col-md-12 col-lg-12 col-sm-12" width="100%" style="margin-right:300px;">
    <?php if (ceil($count / $limit) > 0): ?>
        <ul class="pagination" style="margin-left:400px;">
                <?php if ($current_page > 1): ?>
            <li class="prev"><a href=" tu-van-giay-phep-lao-dong-page<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href=" tu-van-giay-phep-lao-dong-page1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href=" tu-van-giay-phep-lao-dong-page<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href=" tu-van-giay-phep-lao-dong-page<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href=" tu-van-giay-phep-lao-dong-page<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href=" tu-van-giay-phep-lao-dong-page<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href=" tu-van-giay-phep-lao-dong-page<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href=" tu-van-giay-phep-lao-dong-page<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href=" tu-van-giay-phep-lao-dong-page<?php echo $current_page+1 ?>">Next</a></li>
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