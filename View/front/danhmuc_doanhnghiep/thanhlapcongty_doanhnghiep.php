<style>
<?php include "./Assets/front/css/style.css";
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
</style>
<?php
    $CategoryRelated=new CategoryRelated();
    $result=$CategoryRelated->showCateRelate_TLCTDN();
    $count=$result->rowCount();
    $limit=8;
    $p=new pagination();
    $page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
<section>
    <div>
        <p class="title-first">Thành lập công ty</p>
    </div>
    <div class="div-row">
        <div class="div-left">
            <p class="p-div-left">
                “Phi thương bất phú”! Để tham gia vào hoạt động kinh doanh thì thành lập công ty là thủ tục đầu tiên để
                thương nhân bước chân gia nhập thị trường. Theo đó, để một công ty được ra đời cần phải thực hiện thủ
                tục xin cấp Giấy chứng nhận đăng ký doanh nghiệp tại Phòng Đăng ký kinh doanh – Sở Kế hoạch và Đầu tư
                nơi doanh nghiệp đặt trụ sở chính và thực hiện các thủ tục pháp lý, kế toán liên quan.
            </p>
            <p>
                Sau gần 20 năm hoạt động trong lĩnh vực tư vấn pháp luật doanh nghiệp, kinh doanh thương mại và với đội
                ngũ luật sư, chuyên gia thuế, kế toán có chứng chỉ hành nghề, kiến thức chuyên sâu cùng kinh nghiệm lâu
                năm, Công ty luật Việt An đã hỗ trợ hàng ngàn lượt doanh nhân khởi nghiệp, thành lập công ty/ thành lập
                doanh nghiệp mỗi năm. Chúng tôi tự hào là công ty luật cung cấp dịch vụ thành lập công ty chuyên nghiệp
                nhất, với chi phí hợp lý nhất và thời gian nhanh nhất tại 63 tỉnh thành trong cả nước.
            </p>
            <div class="img-div-left">
                <img src="./Assets/front/images/Tu-van-thanh-lap-cong-ty.jpg" width="980" height="435" alt="">
            </div>
            <h4 class="div-left-h4" style="margin-top:10px;"
                id="Tại_sao_cần_sử_dụng_một_công_ty_luật_uy_tín_để_hỗ_trợ_thủ_tục_thành_lập_công_ty?">
                Tại sao cần sử dụng một công ty luật uy tín để hỗ trợ thủ tục thành lập công ty?
            </h4>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Hiện nay, chỉ cần một nhấp chuột doanh nghiệp có thể thấy vô vàn các lời chào mời quảng cáo hấp dẫn, với
                chi phí vô cùng rẻ để tiến hành thành lập công ty? Nhưng doanh nghiệp vẫn cố gắng đi tìm một công ty
                luật uy tín để hỗ trợ thành lập công ty cho mình là vì:
            </p>
            <ul class="div-left-ul">
                <li>
                    Công ty luật có uy tín sẽ tư vấn cho doanh nghiệp tất cả các vấn đề phát sinh khi thành lập và hoạt
                    động doanh nghiệp mà không chỉ thuần túy là hỗ trợ xin Giấy phép kinh doanh, đăng ký doanh nghiệp.
                </li>
                <li>
                    Công ty luật uy tín, với các luật sư có kinh nghiệm và chuyên môn, cùng đội ngũ tư vấn kế toán có
                    chứng chỉ hành nghề, hỗ trợ nhiều doanh nghiệp sẽ lưu ý được cho doanh nghiệp các công việc cần phải
                    thực hiện sau khi thành lập công ty, cũng như trong quá trình hoạt động để doanh nghiệp không gặp
                    phải các rắc rối, thậm chí bị xử lý vi phạm do không thực hiện các nghĩa vụ theo quy định, xấu hơn
                    nữa nhiều trường hợp doanh nghiệp còn bị cơ quan quản lý kinh doanh, có quan thuế treo mã số doanh
                    nghiệp do không thực hiện các nghĩa vụ mà đôi khi là doanh nghiệp không nắm được quy định.
                </li>
                <li>
                    Khi doanh nghiệp lựa chọn được công ty luật uy tín, chuyên trách về tư vấn doanh nghiệp và các dịch
                    vụ pháp lý liên quan thì các chi phí luôn rất rõ ràng và được cụ thể thông qua hợp đồng dịch vụ pháp
                    lý do đó không phát sinh các chi phí khác (đôi khi là cố tình tách nhỏ, chia nhỏ) để câu kéo khách
                    hàng, ví dụ quảng cáo thành lập công ty trọn gói là 500.000 đòng nhưng chưa bao gồm tiền lệ phí,
                    tiền khắc con dấu, tiền công bố, tiền abc…. Tính ra, chắc chắn doanh nghiệp phải trả cao gấp nhiều
                    lần so với chi phí thông qua một công ty luật uy tín mà chi phí rõ ràng ngay từ ban đầu.
                </li>
                <li>
                    Khi sử dụng dịch vụ của một công ty luật uy tín khách hàng còn được hỗ trợ nhiều lĩnh vực khác liên
                    quan đến hoạt động doanh nghiệp và liên quan khác miễn phí, dự liệu được các tình huống pháp lý có
                    thể xảy ra, đảm bảo được quyền lợi tối đa của doanh nghiệp.
                </li>
                <li>
                    Khi thành lập công ty qua công ty luật uy tín doanh nghiệp nhận được dịch vụ một cách chuyên nghiệp,
                    theo đúng hợp đồng tư vấn đã được cam kết, chi phí dịch vụ phải trả rất hợp lý thậm chí còn rẻ hơn
                    nhiều so với các đơn vị tư vấn nhưng không có chức năng luật sư thường “treo đầu dê bán thịt chó”.
                    Tưởng rẻ mà đôi khi đắt gấp nhiều lần.
                </li>
                <li>
                    Thương nhân có nhu cầu thành lập công ty, đừng ngần ngại liên hệ với Luật Việt An để được tư vấn
                    toàn diện, hỗ trợ thủ tục thành lập công ty.
                </li>
            </ul>
            <h4 class="div-left-h4" id="Khi_nào_nên_thành_lập_công_ty?">
                Khi nào nên thành lập công ty?
            </h4>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Nếu bạn có nhu cầu liên quan đến hoạt động kinh doanh như sau thì nên thành lập công ty:
            </p>
            <ul class="div-left-ul">
                <li>
                    Có nhiều khách hàng có yêu cầu xuất hóa đơn giá trị gia tăng khấu trừ cho hoạt động kinh doanh của
                    mình;
                </li>
                <li>
                    Các đối tác, nhà cung cấp, khách hàng cần ký hợp đầu với đơn vị có tư cách pháp nhân.
                </li>
                <li>
                    Hạch toán hoạt động kinh doanh rõ ràng, bài bản, có lợi nhuận để đảm bảo hoạt động kinh doanh theo
                    quy định.
                </li>
            </ul>
            <p>
                Trên thực tế khi thành lập công ty sẽ có lợi cho chủ công ty hơn các loại hình kinh doanh khác vì rất rõ
                ràng. Đặc biệt, khi công ty chưa có lãi thì chưa phải nộp các loại thuế (trừ thuế môn bài cho từ năm thứ
                hai thành lập trở đi), thuế VAT là thu hộ nộp hộ. Công ty có quyền chuyển lỗ liên tiếp trong vòng 05
                năm. Khó khăn nhất của công ty là kê khai, báo cáo thuế nhưng hiện nay với dịch vụ đại lý thuế, dịch vụ
                kế toán chỉ với một số tiền dịch vụ khá khiêm tốn công ty đã yên tâm về hoạt động báo cáo thuế của mình
                (không nhất thiết phải tuyển dụng kế toán thuê đọc lập, vừa chưa có kinh nghiệm vừa tốn kém không cần
                thiết).
            </p>
            <h4 class="div-left-h4" id="Điều_kiện_thành_lập_công_ty">
                Điều kiện thành lập công ty
            </h4>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Điều kiện để thành lập công ty khá đơn giản:
            </p>
            <ul class="div-left-ul">
                <li>
                    Đủ 18 tuổi;
                </li>
                <li>
                    Không thuộc đối tượng cấm thành lập doanh nghiệp;
                </li>
                <li>
                    Có thể thành lập công ty ở bất cứ tỉnh thành nào bạn muốn mà không bị hạn chế về việc đăng ký hộ
                    khẩu hay thường trú.
                </li>
            </ul>
            <p>
                Trừ một số trường hợp đặc biệt pháp luật không hạn chế số lượng công ty một người muốn thành lập. Theo
                đó, nếu bạn đã sẵn sàng khởi nghiệp đừng ngần ngại liên hệ với Luật Việt An để được hỗ trợ, tư vấn thành
                lập công ty.
            </p>
            <h4 class="div-left-h4" id="Tài_liệu_cần_chuẩn_bị_để_thành_lập_công_ty">
                Tài liệu cần chuẩn bị để thành lập công ty
            </h4>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Những câu hỏi mà luật sư tư vấn thường xuyên nhận được từ Quý khách hàng là khi thành lập công ty thì
                cần chuẩn bị những tài liệu, thông tin gì? Theo quy định của Luật Doanh nghiệp 2020, Nghị định số
                01/2021/NĐ-CP về đăng ký kinh doanh, để xin cấp giấy chứng nhận đăng ký doanh nghiệp thì doanh nghiệp
                cần chuẩn bị những thông tin tài liệu sau đây:
            </p>
            <ul class="div-left-ul">
                <li>
                    Bản sao công chứng chứng minh thư nhân dân hoặc Thẻ căn cước công dân hoặc hộ chiếu còn thời hạn của
                    các thành viên, cổ đông sáng lập công ty, người đại diện theo pháp luật của công ty (đối với người
                    đại diện được thuê không đồng thời là cổ đông, thành viên công ty). </li>
                <li>
                    Các thông tin liên quan đến tên công ty, địa chỉ, vốn, ngành nghề kinh doanh,… để Luật Việt An tư
                    vấn cụ thể và soạn thảo hồ sơ, đại diện cho quý khách hàng thực hiện mọi thủ tục thành lập công ty.
                </li>
                <li>
                    Các giấy tờ quan trọng nhất là bản sao giấy chứng minh thư nhân dân/hộ chiếu/căn cước công dân của
                    danh sách thành viên công ty, cổ đông sáng lập và người đại diện công ty.
                </li>
                <li>
                    Các giấy tờ liên quan đến trụ sở công ty như hợp đồng thuê nhà, mượn nhà, quyền sở hữu nhà đất của
                    chủ doanh nghiệp hoặc các giấy tờ có giá trị pháp lý tương đương với quyền sử dụng đất, toà nhà, văn
                    phòng cho thuê. (Các giấy tờ này chỉ để lưu tại công ty để phục vụ các công tác kiểm tra trong quá
                    trình hoạt động mà không phải cung cấp khi nộp hồ sơ thành lập công ty).
                </li>
            </ul>
            <p>
                Trên cở các thông tin khách hàng cung cấp nêu trên, Luật Việt An sẽ tư vấn chi tiết và hỗ trợ trọn gói
                các thủ tục thành lập công ty, hướng dẫn doanh nghiệp các thủ tục sau thành lập cũng như hoàn thiện các
                điều kiện để thực hiện hoạt động kinh doanh theo quy định.
            </p>
            <h3 class="div-left-h3" id="Hồ_sơ_thành_lập_công_ty">
                Hồ sơ thành lập công ty
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p class="p-div-left">
                Hồ sơ thành lập doanh nghiệp/công ty: Theo quy định Luật Doanh nghiệp 2020, Chương IV Nghị định số
                01/20121 về trình tự, thủ tục đăng ký doanh nghiệp cho các loại hình kinh doanh. Tùy thuộc vào loại hình
                công ty khách hàng mong muốn thành lập: công ty TNHH, công ty cổ phần, hoặc loại hình doanh nghiệp khác,
                Luật Việt An sẽ soạn thảo hồ sơ tương ứng, thông thường hồ sơ thành lập công ty gồm các tài liệu sau:
            </p>
            <ul class="div-left-ul">
                <li>
                    Giấy đề nghị đăng ký doanh nghiệp.
                </li>
                <li>
                    Dự thảo điều lệ doanh nghiệp;
                </li>
                <li>
                    Danh sách thành viên đối với công ty TNHH hai thành viên hoặc danh sách cổ đông sáng lập đối với
                    công ty cổ phần;
                </li>
                <li>
                    Bản sao hợp lệ một trong các giấy tờ chứng thực cá nhân.
                </li>
                <li>
                    Văn bản uỷ quyền cho người đại diện phần vốn nếu là tổ chức góp vốn vào thành lập công ty.
                </li>
                <li>
                    Tài liệu khác trong các trường hợp đặc biệt (Công ty Luật Việt An sẽ tư vấn để Quý khách hàng chuẩn
                    bị theo quy định của pháp luật);
                </li>
                <li>
                    Hợp đồng cung cấp dịch vụ pháp lý (Hợp đồng ủy quyền) để ủy quyền cho Công ty Luật Việt An thực hiện
                    dịch vụ thành lập doanh nghiệp.
                </li>
            </ul>
            <h3 class="div-left-h3" id="Lưu_ý_về_giấy_tờ_của_thành_viên_công_ty_TNHH,_cổ_đông_công_ty_cổ_phần">
                Lưu ý về giấy tờ của thành viên công ty TNHH, cổ đông công ty cổ phần
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đối với cá nhân: Chứng minh thư nhân dân hoặc hộ chiếu hoặc thẻ căn cước công dân còn hiệu lực.
                </li>
                <li>
                    Đối với tổ chức: Giấy chứng nhận đăng ký doanh nghiệp đối với tổ chức và kèm theo giấy tờ chứng thực
                    cá nhân của người đại diện theo uỷ quyền của tổ chức.
                </li>
            </ul>
            <h3 class="div-left-h3" id="Lưu_ý_đối_với_cán_bộ_công_chức_viên_chức_nhà_nước_muốn_thành_lập_công_ty">
                Lưu ý đối với cán bộ công chức viên chức nhà nước muốn thành lập công ty
            </h3>
            <p>
                Đối với cán bộ công chức, viên chức chỉ được góp vốn vào công ty cổ phần do được nhận chuyển nhượng như
                việc đầu tư chứng khoán trên thị trường chứng khoán. Theo đó, cán bộ công chức nhà nước không được đứng
                tên trong công ty TNHH và kê khai hồ sơ thành lập công ty cổ phần.
            </p>
            <h3 class="div-left-h3" id="So_sánh_các_loại_hình_công_ty_phổ_biến">
                So sánh các loại hình công ty phổ biến
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Để Quý khách hàng có thể lựa chọn loại hình công ty phù hợp, Công ty Luật Việt An lập bảng so sánh các
                loại hình công ty chủ yếu được các khách hàng thành lập trên thực tế để doanh nhân mới có lựa chọn hợp
                lý cho mình.
            </p>
            <table style="width:100%;" border="1" width="100%" cellpadding="5">
                <tbody>
                    <tr>
                        <td width="50">
                            <strong>STT</strong>
                        </td>
                        <td width="130">
                            <strong>Tiêu chí</strong>
                        </td>
                        <td width="151">
                            <strong>Công ty TNHH 1 thành viên</strong>
                        </td>
                        <td width="151">
                            <strong>Công ty TNHH 2 thành viên trở lên</strong>
                        </td>
                        <td width="152">
                            <strong>Công ty cổ phần</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>1</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Thành viên</em>
                            </strong>
                        </td>
                        <td width="151">
                            Chỉ có 1 thành viên
                        </td>
                        <td width="151">
                            Từ 2 thành viên đến 50 thành viên
                        </td>
                        <td width="152">
                            Từ đủ 3 cổ đông và không hạn chế
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>2</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Huy động vốn trên thị trường chứng khoán</em>
                            </strong>
                        </td>
                        <td width="151">
                            Không
                        </td>
                        <td width="151">
                            Không
                        </td>
                        <td width="152">
                            Có
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>3</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Cơ cấu quản lý</em>
                            </strong>
                        </td>
                        <td width="151">
                            Đơn giản
                        </td>
                        <td width="151">
                            Khá phức tạp
                        </td>
                        <td width="152">
                            Rất phức tạp
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>4</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Chuyển đổi loại hình</em>
                            </strong>
                        </td>
                        <td width="151">
                            Có
                        </td>
                        <td width="151">
                            Có
                        </td>
                        <td width="152">
                            Có
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>5</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Chịu trách nhiệm</em>
                            </strong>
                        </td>
                        <td width="151">
                            Theo vốn điều lệ
                        </td>
                        <td width="151">
                            Theo tỷ lệ góp vốn
                        </td>
                        <td width="152">
                            Theo tỷ lệ cổ phần sở hữu
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>6</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Tư cách pháp nhân</em>
                            </strong>
                        </td>
                        <td width="151">
                            Có
                        </td>
                        <td width="151">
                            Có
                        </td>
                        <td width="152">
                            Có
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>7</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Chuyển nhượng vốn</em>
                            </strong>
                        </td>
                        <td width="151">
                            Chuyển nhượng bán cho chủ sở hữu mới hoặc chuyển đổi loại hình công ty
                        </td>
                        <td width="151">
                            Chuyển nhượng nội bộ hoặc ra bên ngoài nếu không có ai mua
                        </td>
                        <td width="152">
                            3 năm đầu chỉ được chuyển nhượng cho cổ đông sáng lập, chỉ được chuyển nhượng ra bên ngoài
                            nếu được cổ đông sáng lập đồng ý. Sau 3 tự do chuyển nhượng.
                        </td>
                    </tr>
                    <tr>
                        <td width="50">
                            <strong>8</strong>
                        </td>
                        <td width="130">
                            <strong>
                                <em>Thông qua cuộc họp</em>
                            </strong>
                        </td>
                        <td width="151">
                            Theo quyết định của chủ sở hữu </td>
                        <td width="151">
                            Quan trọng 75, khác là 65% </td>
                        <td width="152">
                            Quan trọng 65% biểu quyết, khác 51%, 50/50 thì bên có ý kiến của Chủ tịch HĐQT
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 class="div-left-h3" id="Thủ_tục_thành_lập_công_ty">
                Thủ tục thành lập công ty
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Để thành lập công ty thành công và đảm bảo các điều kiện theo quy định của pháp luật thì thủ tục thành
                lập công ty cần thực hiện bởi các bước như sau:
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_1:_Chuẩn_bị_hồ_sơ_thành_lập_công_ty">
                <em>Bước 1: Chuẩn bị hồ sơ thành lập công ty</em>
            </h3>
            <p>
                Ngay sau khi luật sư tiếp nhận đủ thông tin và tư vấn các vấn đề liên quan đến tên công ty, trụ sở công
                ty, ngành nghề kinh doanh dự kiến của công ty, thông tin về thành viên, cổ đông sáng lập của công ty,
                vốn điều lệ công ty, thông tin người đại diện theo pháp luật của công ty. Trên cơ sở các thông tin Quý
                khách hàng cung cấp, Công ty Luật Việt An tư vấn các vấn đề pháp lý liên quan, soạn thảo hồ sơ thành lập
                công ty để chuyển Quý khách hàng trong thời gian 01 ngày làm việc kể từ ngày nhận đủ thông tin của khách
                hàng.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_2:_Nộp_hồ_sơ_thành_lập_công_ty_và_nộp_lệ_phí_công_bố_thông_tin_doanh_nghiệp">
                <em>Bước 2: Nộp hồ sơ thành lập công ty và nộp lệ phí công bố thông tin doanh nghiệp</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Sau khi chuẩn bị đầy đủ hồ sơ tại bước 1, Công ty Luật Việt An tiến hành nộp hồ sơ cấp Giấy chứng
                    nhận đăng ký doanh nghiệp qua Cổng thông tin điện tử quốc gia về đăng ký doanh nghiệp.
                </li>
                <li>
                    Khác với trước đây, thủ tục nộp lệ phí công bố thông tin đăng ký doanh nghiệp sẽ được thực hiện song
                    song với thủ tục nộp hồ sơ thành lập công ty.
                </li>
                <li>
                    Do đó, ngay khi công ty được cấp Giấy chứng nhận đăng ký doanh nghiệp thì cũng đồng thời được công
                    bố thông tin doanh nghiệp trên Cổng thông tin quốc gia về đăng ký doanh nghiệp.
                </li>
                <li>
                    Thời gian hoàn thành: 03 ngày làm việc.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_3:_Cấp_Giấy_chứng_nhận_đăng_ký_doanh_nghiệp">
                <em>Bước 3: Cấp Giấy chứng nhận đăng ký doanh nghiệp</em>
            </h3>
            <p>
                Sau 03 ngày làm việc Quý khách hàng sẽ được cấp Giấy chứng nhận đăng ký doanh nghiệp. Tuy nhiên, do Giấy
                chứng nhận hiện nay 100% được trả theo đường bưu điện nên thường khách hàng sẽ được nhận chậm hơn chút
                do quá trình chuyển phát.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_4:_Khắc_con_dấu_(mộc_tròn)_công_ty">
                <em>Bước 4: Khắc con dấu (mộc tròn) công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Ngay khi có Giấy chứng nhận đăng ký doanh nghiệp đồng thời là mã số thuế công ty, Luật Việt An sẽ
                    tiến hành khắc dấu cho doanh nghiệp.
                </li>
                <li>
                    Thời gian thực hiện: 01 ngày.
                </li>
                <li>
                    Theo quy định của Luật Doanh nghiệp năm 2020 có hiệu lực từ ngày 01/01/2021 thì doanh nghiệp tự khắc
                    con dấu, tự chịu trách nhiệm về việc sử dụng con dấu pháp nhân của công ty. Do dó, công ty không
                    phải đăng bố cáo thông báo mẫu dấu như trước đây. Đây cũng là một điểm rất mới của Luật Doanh nghiệp
                    2020 nhưng cũng là điểm lo ngại của nhiều doanh nghiệp trong vấn đề tự quản lý và sử dụng dấu của
                    doanh nghiệp không có sự giám sát từ phía cơ quan quản lý nhà nước liên quan đến con dấu.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_5:_Hoàn_thiện_chuyển_kết_quả_cho_khách_hàng_và_hướng_dẫn_khách_hàng_thủ_tục_thực_hiện_sau_thành_lập_công_ty">
                Bước 5:
                <strong><em>Hoàn thiện chuyển kết quả cho khách hàng và hướng dẫn khách hàng thủ tục thực hiện sau thành
                        lập công ty</em></strong>
            </h3>
            <p>
                Sau khi đã thực hiện các thủ tục xin giấy chứng nhận đăng ký kinh doanh cho doanh nghiệp, công ty Luật
                Việt An chuyển các kết quả dịch vụ cho khách hàng như Giấy chứng nhận đăng ký doanh nghiệp, con dấu,
                công bố thông tin đăng ký doanh nghiệp. Đồng thời, tư vấn các thủ tục và những lưu ý sau khi thành lập
                doanh nghiệp.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_6:_Hỗ_trợ,_tư_vấn_cho_khách_hàng_các_vấn_đề_pháp_lý_liên_quan_đến_hoạt_động_công_ty_và_kê_khai_thuế_theo_yêu_cầu_của_khách_hàng">
                <em>
                    Bước 6: Hỗ trợ, tư vấn cho khách hàng các vấn đề pháp lý liên quan đến hoạt động công ty và kê khai
                    thuế theo yêu cầu của khách hàng
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Kết quả dịch vụ thành lập công ty được chuyển tới khách khách hàng, luật sư, chuyên gia tư vấn thuế
                    của Công ty luật Việt An có những lưu ý với Quý khách hàng về thuế (kê khai thuế), những lưu ý liên
                    quan đến công việc cần thực hiện sau khi được cấp giấy chứng nhận đăng ký doanh nghiệp: Bảng biển
                    công ty, thuế, kế toán, lao động và sở hữu trí tuệ.
                </li>
                <li>
                    Luật Việt An sẽ cung cấp dịch vụ liên quan đến dịch vụ kế toán thuế, kê khai thuế, tư vấn các vấn đề
                    liên quan đến tư vấn tài chính, thương hiệu, soạn thảo hợp đồng và tranh chấp công ty.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Bước_7:_Xin_các_giấy_phép_đủ_điều_kiện_hoạt_động_của_doanh_nghiệp">
                <em>
                    Bước 7: Xin các giấy phép đủ điều kiện hoạt động của doanh nghiệp
                </em>
            </h3>
            <p>
                Chỉ áp dụng đối với các ngành nghề có yêu cầu điều kiện sau thành lập công ty và giấy phép con như: vận
                tải, du lịch, nhà hàng, cho thuê lao động, giáo dục, y tế, xây dựng, chuyển phát nhanh, bưu chính,….
            </p>
            <p>
                Trên đây là các bước cơ bản nhất để thực hiện thành lập công ty. Quý khách hàng vui lòng liên hệ với
                Công ty luật Việt An để được tư vấn cụ thể vào cung cấp phí dịch vụ thành lập doanh nghiệp tốt nhất.
            </p>
            <h3 class="div-left-h3"
                id="Ưu_nhược_điểm_khi_thành_lập_công_ty/doanh_nghiệp_so_với_thành_lập_hộ_kinh_doanh.">
                Ưu nhược điểm khi thành lập công ty/doanh nghiệp so với thành lập hộ kinh doanh.
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <div class="img-div-left">
                <a href="#">
                    <img src="./Assets/front/images/Ban-thanh-lap-ho-kinh-doanh-hay-cong-ty-e1632112215810.jpg"
                        width="1000" height="277" alt="">
                </a>
            </div>
            <p>
                Câu hỏi đặt ra cho các nhà kinh doanh là lựa chọn loại hình kinh doanh nào cho phù hợp với tình hình
                thực tế? Nhà đầu tư sẽ lựa chọn thành lập hộ kinh doanh cá thể hay thành lập công ty? Luật sư tư vấn
                Luật Việt An đưa ra những ưu nhược điểm để bạn lựa chọn loại hình kinh doanh một các tối ưu nhất.
            </p>
            <ul class="div-left-ul">
                <li>
                    <strong>Tư cách pháp nhân:</strong>
                    Hộ kinh doanh cá thể, doanh nghiệp tư nhân không có tư cách pháp nhân, công ty có tư cách pháp nhân
                    và chỉ phải chịu trách nhiệm hữu hạn trong phạm vi vốn gó Trong khi đó, hộ kinh doanh cá thể phải
                    chịu trách nhiệm hoạt động kinh doanh bằng cả tài sản dân sự của mình.
                </li>
                <li>
                    <strong>Phát hành hoá đơn:</strong>
                    Công ty được phát hành và xuất hóa đơn giá trị gia tăng (VAT) khấu trừ còn hộ kinh doanh thì không,
                    đây có thể coi là ưu việt rất lớn khi thành lập công ty.
                </li>
                <li>
                    <strong>Kê khai kế toán thuế:</strong>
                    Nhiều doanh nhân cho rằng khi thành lập công ty sẽ có nhiều khó khăn trong các thủ tục thực hiện về
                    nghĩa vụ thuế cho công ty. Tuy nhiên, hiện nay có rất nhiều đại lý thuế, công ty dịch vụ kế toán.
                    Các doanh nghiệp vừa và nhỏ có thể sử dụng chọn gói dịch vụ kế toán thuế, các công ty không phải
                    tuyển các nhân sự liên quan đến kế toán thuế qua đó tích kiệm được rất nhiều chi phí và giải quyết
                    về bài toán tối ưu nhất cho các công việc liên quan đến thuế của công ty như kê khai thuế, kế toán
                    và tài chính.
                </li>
                <li>
                    <strong>Thuế khoán:</strong>
                    Công ty không bị áp thuế theo doanh thu như hộ kinh doanh nên dù công ty có rất nhiều doanh thu
                    nhưng chưa có lãi thì cũng chưa phải nộp thuế. Còn hộ kinh doanh cứ có doanh thu (dù chưa có lãi)
                    vẫn bị áp thuế theo định mức.
                </li>
                <li>
                    <strong>Thuế VAT:</strong>
                    Công ty là thuế khấu trừ, thuế gián thu nên công ty khi xuất VAT thì tiền thuế là thu được từ khách
                    hàng, sau đó nộp lại cho nhà nước chứ không phải khoản thuế công ty không kinh doanh cũng phải nộp.
                    Lưu ý: khi xuất hóa đơn đầu ra thì doanh nghiệp phải có hóa đơn đầu vào tương ứng;
                </li>
                <li>
                    <strong>Thành lập công ty:</strong>
                    Việc thành lập công ty khá dễ dàng, chi phí thành lập cũng khá thấp tuy nhiên việc vận hành và quản
                    lý công ty thì cần nhiều yếu tố, hoặc khi cần đóng cửa công ty thì cũng tốn chi phí và thời gian khá
                    lâu nên khách hàng cần cân nhắc kỹ trước khi thành lập công ty;
                </li>
                <li>
                    <strong>Nhu cầu xuất hoá đơn:</strong>
                    Nếu đối tượng khách hàng của bạn là cá nhân, nhu cầu xuất hóa đơn giá trị gia tăng khấu trừ không
                    cao, bạn nên cân nhắc việc thành lập công ty.
                </li>
                <li>
                    <strong>Thành viên công ty:</strong>
                    Khi khởi nghiệp để công ty có khách hàng, có doanh thu là điều quan trọng nhất, do đó cần sự đồng
                    lòng, đồng sức của các thành viên công ty, cổ đông công ty để công ty sớm đi vào hoạt động hiệu quả…
                </li>
            </ul>
            <p>
                Những ưu, nhược điểm của mỗi loại hình doanh nghiệp cần được xem xét thật kỹ lưỡng. Đặc biệt tham vấn
                những ý kiên tư vấn của luật sư chuyên trách về doanh nghiệp. Sau đó đưa ra quyết định phù hợp với năng
                tài chính, quản lý doanh nghiệp cho công ty của mình.
            </p>
            <h3 class="div-left-h3" id="Một_số_tư_vấn,_lưu_ý_quan_trọng_khi_thành_lập_công_ty">
                Một số tư vấn, lưu ý quan trọng khi thành lập công ty
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Khi thành lập doanh nghiệp cần lưu ý những gì? Những lưu ý sẽ giúp doanh nghiệp không gặp phải những khó
                khăn trong pháp lý trong quá trình kinh doanh. Đó là tiền đề tốt để phát triển doanh nghiệp/công ty uy
                tín, bền vững, lớn mạnh sau này.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Lưu_ý_về_trụ_sở_công_ty:_Theo_quy_định_tại_Điều_42,_Luật_Doanh_nghiệp_2020:">
                <em>Lưu ý về trụ sở công ty: Theo quy định tại Điều 42, Luật Doanh nghiệp 2020:</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Trụ sở công ty không được ở nhà tập thể, nhà chung cư.
                </li>
                <li>
                    Để bảo đảm hoạt động kinh doanh khi thuê nhà, mượn nhà làm trụ sở công ty Quý khách hàng nên ký kết
                    hợp đồng thuê nhà, mượn nhà và yêu cầu chủ nhà cung cấp cho 02 bản sao Giấy chứng nhận quyền sử dụng
                    đất hoặc giấy tờ tương đương.
                </li>
                <li>
                    Trụ sở công ty phải liên hệ được, có người nhận thư báo, tránh trường hợp cơ quan thuế, cơ quan đăng
                    ký doanh nghiệp gửi thư phát không có người nhận sẽ bị liệt vào công ty không kinh doanh tại trụ sở
                    và bị đóng mã số thuế, khóa mã số doanh nghiệp.
                </li>
                <li>
                    Doanh nghiệp nên cố định trụ sở theo quận huyện vì khi thay đổi trụ sở khác quận, huyện đang đăng ký
                    phải thực hiện thủ tục chốt thuế chuyển quận trước khi thay đổi đăng ký doanh nghiệp.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Lựa_chọn_loại_hình_doanh_nghiệp">
                <em>Lựa chọn loại hình doanh nghiệp</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Theo ghi nhận của Luật Doanh nghiệp hiện hành (Luật Doanh nghiệp 2020), Quý khách hàng có thể lựa
                    chọn các loại hình doanh nghiệp: Công ty TNHH một thành viên, công ty TNHH hai thành viên trở lên,
                    Công ty cổ phần, doanh nghiệp tư nhân, Công ty hợp danh. Tuy nhiên, căn cứ vào thực tế thì nếu Quý
                    khách hàng kinh doanh các ngành nghề thông thường nên lựa chọn 3 loại hình doanh nghiệp phổ biến là
                    Công ty TNHH một thành viên, công ty TNHH hai thành viên trở lên, Công ty cổ phần.
                </li>
                <li>
                    Trên thực tế sự khác biệt lớn nhất của công ty cổ phần so với công ty TNHH là ở chỗ công ty cổ phần
                    có thể huy động vốn linh hoạt và tham gia thị trường chứng khoán. Theo đó, số lượng cổ đông của công
                    ty cổ phần tối thiểu có 03 người và không hạn chế tối đa, dễ dàng chuyển nhượng sau khi không còn là
                    cổ đông sáng lập. Còn ưu việt lớn nhất của công ty TNHH là sự tham gia của các thành viên vào công
                    ty là rất chặt chẽ, số lượng người tham gia hạn chế từ 01 đến 50 người.
                </li>
                <li>
                    Ngoài ra, chỉ khi công ty có nhu cầu tham gia thị trường chứng khoán sau này mới nên lựa chọn loại
                    hình công ty cổ phần bởi hoạt động của công ty cổ phần, cơ cấu tổ chức và các quy định về vấn đề nội
                    bộ của công ty cổ phần tương đối phức tạp mà doanh nghiệp chỉ sơ suất nhỏ có thể đã vi phạm các quy
                    định của pháp luật liên quan đến các vấn đề pháp lý nội bộ của công ty cổ phần.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Đặt_tên_công_ty:_Theo_quy_định_tại_Điều_37,_Điều_38,_Điều_39,_Điều_40,_Điều_41_Luật_Doanh_nghiệp_2020:">
                <em>
                    Đặt tên công ty: Theo quy định tại Điều 37, Điều 38, Điều 39, Điều 40, Điều 41 Luật Doanh nghiệp
                    2020:
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Trên thực tế tên công ty ngày càng hạn chế do số lượng doanh nghiệp ngày một nhiều. Tuy nhiên, để có
                    thể đặt được tên công ty theo mong muốn rất đơn giản bằng cách thêm các tiền tố hoặc hậu tố vào tên
                    công ty là có thể đăng ký được.
                </li>
                <li>
                    Khi đặt tên công ty cần tránh các tên riêng có thành tố riêng nổi tiếng ví dụ như: Samsung, Nokia,
                    Honda,… hoặc các nhãn hiệu đã đăng ký độc quyền vì có thể doanh nghiệp có nguy cơ bị yêu cầu đổi tên
                    do trùng với nhãn hiệu đã được bảo hộ độc quyền tại Việt Nam trước thời điểm doanh nghiệp đăng ký
                    tên công ty bị trùng lặp.
                </li>
                <li>
                    Ngoài ra, đặt tên công ty cũng nên tính đến việc tên riêng công ty có khả năng đăng ký nhãn hiệu,
                    tên miền để nhận diện thương hiệu doanh nghiệp trong tương lai mang tính đồng bộ, chuyên nghiệp.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="_Vốn_điều_lệ:_Theo_khoản_34_Điều_4,_Khoản_2.c_Điều_24_Luật_Doanh_nghiệp_2020:">
                <em>
                    Vốn điều lệ: Theo khoản 34 Điều 4, Khoản 2.c Điều 24 Luật Doanh nghiệp 2020:
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Theo quy định của Luật Doanh nghiệp thì vốn điều lệ do doanh nghiệp tự kê khai và tự chịu trách
                    nhiệm (kể cả các ngành nghề có yêu cầu vốn pháp định thì doanh nghiệp cũng chỉ cần kê khai đủ mức
                    vốn quy định mà không cần chứng minh hay xác nhận nguồn vốn thực tế).
                </li>
                <li>
                    Căn cứ vào nhu cầu hoạt động như: mức hợp đồng ký kết với đối tác, sự tham gia vào dự án, số vốn
                    phải ký quỹ đối với một số ngành đặc thù, mức thuế môn bài muốn đóng mà doanh nghiệp lựa chọn mức
                    vốn điều lệ hợp lý, phù hợp và tính đến tính chịu trách nhiệm của các chủ sở hữu doanh nghiệp/công
                    ty khi cam kết mức vốn của mình.
                </li>
                <li>
                    Thời hạn góp vốn là 90 ngày, kể từ ngày được cấp Giấy chứng nhận đăng ký doanh nghiệp. Đối với cá
                    nhân thành lập công ty có thể lựa chọn góp vốn bằng hình thức hoặc chuyển khoản vào tài khoản của
                    công ty. Tuy nhiên, đối với tổ chức là thành viên/cổ đông công ty thì việc góp vốn phải thực hiện
                    bằng hình thức chuyển khoản vốn góp vào tài khoản của công ty có đăng ký với cơ quan đăng ký doanh
                    nghiệp (Tham khảo quy định tại Nghị định 222/2013/NĐ – CP và Thông tư 09/2015/BTC ngày 29/01/2015).
                </li>
                <li>
                    Theo quy định của pháp luật, thủ tục tăng vốn điều lệ công ty tương đối đơn giản, trong khi đó thủ
                    tục giảm vốn điều lệ công ty lại tương đối nhiều điều kiện và cần thời gian nhất định trừ trường hợp
                    thành viên, cổ đông không góp đủ vốn trong vòng 90 ngày thì công ty phải hoạt động đủ 02 năm mới có
                    thể đăng ký giảm vốn điều lệ cùng một số điều kiện nhất định. Do đó, công ty nên cân nhắc mức vốn
                    khi kê khai vốn điều lệ trong hồ sơ thành lập công ty để đảm bảo việc góp vốn cũng như cân bằng lợi
                    ích các thành viên/cổ đông trong công ty.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Ngành_nghề_kinh_doanh:_Theo_Điều_7_Nghị_định_số_01/2021_về_đăng_ký_kinh_doanh:">
                <em>
                    Ngành nghề kinh doanh: Theo Điều 7 Nghị định số 01/2021 về đăng ký kinh doanh:
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Hiện nay, doanh nghiệp được kinh doanh các ngành nghề pháp luật không cấm. Tuy nhiên, doanh nghiệp
                    chỉ được phép kinh doanh các ngành nghề mà mình đã đăng ký và kê khai trong hồ sơ đăng ký doanh
                    nghiệp, doanh nghiệp nên lựa chọn phạm vi rộng khi đăng ký các ngành nghề kinh doanh cho công ty
                    trong hồ sơ đăng thành lập công ty.
                </li>
                <li>
                    Có thể nói điểm ưu việt của Luật Doanh nghiệp hiện hành là doanh nghiệp chưa cần xuất trình các điều
                    kiện đối với các ngành nghề yêu cầu chứng chỉ hành nghề. Do đó, tùy thuộc vào nhu cầu hoạt động
                    doanh nghiệp có thể lựa chọn mở rộng các ngành nghề kinh doanh để tránh sau khi hoạt động phát sinh
                    thêm thủ tục bổ sung ngành nghề do khi thành lập chưa bao quát các ngành nghề dự định kinh doanh.
                </li>
                <li>
                    Việc áp mã ngành nghề kinh doanh của công ty thực hiện theo mã ngành cấp 4 theo quy định tại hệ
                    thống ngành nghề kinh tế Việt Nam <em>(Áp dụng theo Quyết định số: 27/2018/QĐ-TTg ngày 06 tháng 7
                        năm 2018 của Thủ tướng Chính phủ)</em>. Luật Việt An sẽ hỗ trợ phân ngành và áp mã ngành nghề
                    cho quý công ty.
                </li>
            </ul>
            <p>
                Trước khi thành lập công ty, thương nhân nắm được những lưu ý trên để đưa ra lựa chọn phù hợp nhất.
                Trình tự thành lập công ty phải được hình thành từ khâu lựa chọn tên doanh nghiệp đến khâu lựa chọn và
                đăng ký ngành nghề kinh doanh lựa chọn nào là tối ưu nhất và đúng quy định của pháp luật doanh nghiệp
                quy định.
            </p>
            <h3 class="div-left-h3" id="Các_loại_thuế_cơ_bản_công_ty_phải_nộp">
                Các loại thuế cơ bản công ty phải nộp
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Khi thành lập công ty, doanh nghiệp phải thực hiện đóng các loại thuế nào? Mức thuế phải đóng là bao
                nhiêu? Dưới đây là những lưu ý về thuế và các loại thuế doanh nghiệp phải thực hiện nghĩa vụ khi thành
                lập doanh nghiệp trong năm 2023.
            </p>
            <div class="img-div-left">
                <a href="#">
                    <img src="./Assets/front/images/nhung-luu-y-sau-khi-thanh-lap-cong-ty-Tu-van-luat-Viet-An-e1632111797152.jpg"
                        width="1000" height="330" alt="">
                </a>
            </div>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Các_loại_thuế_công_ty_phải_nộp">
                <em>
                    Các loại thuế công ty phải nộp
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thuế môn bài (theo mức vốn điều lệ đăng ký), vốn điều lệ dưới 10 tỷ đồng nộp 2tr/năm, từ 10 tỷ trở
                    lên là 3tr/năm;
                </li>
                <li>
                    Thuế giá trị gia tăng (theo cân đối đầu ra, đầu vào của công ty);
                </li>
                <li>
                    Thuế thu nhập doanh nghiệp (chỉ phải nộp khi công ty có lãi, 20% lợi nhuận công ty);
                </li>
                <li>
                    Thuế xuất khẩu, nhập khẩu (nếu có hoạt động xuất nhập khẩu);
                </li>
                <li>
                    Thuế tài nguyên (nếu có sử dụng tài nguyên);
                </li>
                <li>
                    Thuế tiêu thụ đặc biệt (nếu kinh doanh ngành nghề đặc biệt hạn chế kinh doanh).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Các_mốc_thời_gian_nộp_tờ_khai_thuế_và_nộp_thuế">
                <em>
                    Các mốc thời gian nộp tờ khai thuế và nộp thuế
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đối với thuế môn bài: Căn cứ Nghị định số Nghị định 22/2020/NĐ-CP sửa đổi, bổ sung một số điều của
                    Nghị định 139/2016/NĐ-CP có hiệu lực từ ngày 25/02/2020 thì doanh nghiệp thành lập năm 2023 sẽ được
                    miễn lệ phí môn bài, tuy nhiên doanh nghiệp vẫn phải kê khai và nộp tờ thuế môn bài.
                </li>
                <li>
                    Thời gian kê khai lệ phí môn bài và nộp tờ khai: Người nộp lệ phí mới ra hoạt động sản xuất, kinh
                    doanh hoặc mới thành lập; doanh nghiệp nhỏ và vừa chuyển từ hộ kinh doanh thực hiện khai lệ phí môn
                    bài và nộp Tờ khai cho cơ quan thuế quản lý trực tiếp trước ngày 30 tháng 01 năm sau năm mới ra hoạt
                    động sản xuất, kinh doanh hoặc mới thành lập.
                </li>
                <li>
                    Trong năm 2023 khi doanh nghiệp thành lập công ty cũng đồng thời thành lập thêm địa điểm kinh doanh,
                    chi nhánh công ty trên toàn quốc cũng được miễn thuế môn bài cho các đơn vị trực thuộc này.
                </li>
            </ul>
            <em>Thời hạn nộp tờ khai và nộp thuế giá trị gia tăng (nếu có), báo cáo tình hình sử dụng hóa đơn</em>
            <ul class="div-left-ul">
                <li>
                    Tờ khai quý 1: Hạn chậm nhất là ngày 30/04;
                </li>
                <li>
                    Tờ khai quý 2: Hạn chậm nhất là ngày 30/07;
                </li>
                <li>
                    Tờ khai quý 3: Hạn chậm nhất là ngày 30/10;
                </li>
                <li>
                    Tờ khai quý 4: Hạn chậm nhất là ngày 30/01 năm sau;
                </li>
            </ul>
            <em>Thời hạn nộp tiền thuế thu nhập doanh nghiệp tạm tính (nếu có) không phải nộp tờ khai</em>
            <ul class="div-left-ul">
                <li>
                    Quý 1: Hạn chậm nhất là ngày 30/04;
                </li>
                <li>
                    Quý 2: Hạn chậm nhất là ngày 30/07;
                </li>
                <li>
                    Quý 3: Hạn chậm nhất là ngày 30/10;
                </li>
                <li>
                    Quý 4: Hạn chậm nhất là ngày 30/01 năm sau.
                </li>
                <li>
                    Doanh nghiệp tự cân đối mức thuế thu nhập doanh nghiệp tạm tính và sau đó cuối năm tổng hợp doanh
                    thu,
                    chi phí để quyết toán tổng số thuế thu nhập doanh nghiệp phải nộp trong năm (nếu có).

                </li>
                <li>
                    Thời hạn nộp báo cáo tài chính năm: Hạn nộp chậm nhất báo cáo tài chính năm trước là ngày 30/03 năm
                    sau.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Những_lưu_ý_về_kê_khai_thuế_khi_mới_thành_lập_công_ty">
                <em>
                    Những lưu ý về kê khai thuế khi mới thành lập công ty
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đối với kê khai thuế giá trị gia tăng: Doanh nghiệp không phát sinh hóa đơn đầu vào và đầu ra thì
                    đến thời hạn kê khai và nộp thuế công ty vẫn phải nộp tờ khai thuế giá trị gia tăng (VAT).
                </li>
                <li>
                    Đối với báo cáo tình hình sử dụng hóa đơn: Doanh nghiệp vẫn cần phải kê khai dù chưa xuất hóa đơn
                    giá trị gia tăng của công ty (nếu Công ty đã thực hiện thủ tục thông báo phát hành hóa đơn giá trị
                    gia tăng).
                </li>
                <li>
                    Đối với báo cáo tài chính cuối năm: Doanh nghiệp lưu ý dù công ty không phát sinh hoạt động kinh
                    doanh vẫn phải lập và nộp báo cáo tài chính cuối năm cho năm hoạt động.
                </li>
            </ul>
            <p>
                Thực hiện nghĩa vụ thuế là quyền và nghĩa vụ của doanh nghiệp. Doanh nghiệp phải thực hiện đầy đủ các
                thủ tục liên quan kê khai thuế, thực hiện các nghĩa thuế sau khi được thành lập. Doanh nghiệp cần đặc
                biệt lưu ý về các mốc thời gian kê khai và nộp các loại thuế để tránh phát sinh vi phạm dẫn tới bị phạt
                và gia tăng số tiền phạt theo thời gian.
            </p>
            <h3 class="div-left-h3" id="Các_thủ_tục_sau_khi_thành_lập_công_ty">
                Các thủ tục sau khi thành lập công ty
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Doanh nghiệp cần làm những gì sau khi đã nhận được đăng ký kinh doanh? Các thủ tục phải thực hiện và
                thời hạn thực hiên theo quy định của Luật doanh nghiệp 2020 sau khi có đăng ký kinh doanh như sau:
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Mở_tài_khoản_ngân_hàng_của_công_ty">
                <em>Mở tài khoản ngân hàng của công ty</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thủ tục này do người đại diện theo pháp luật của doanh nghiệp tiến hành. Hồ sơ chuẩn bị đăng ký mở
                    tài khoản ngân hàng bao gồm:
                    <ul class="div-left-ul2">
                        <li>
                            01 bản công chứng “Giấy chứng nhận đăng ký doanh nghiệp”;
                        </li>
                        <li>
                            01 bản công chứng “Chứng minh nhân dân” của người đại diện pháp luật ghi trên giấy phép;
                        </li>
                        <li>
                            01 bản sao điều lệ công ty.
                        </li>
                    </ul>
                </li>
                <li>
                    Năm 2023, doanh nghiệp không cần phải thực hiện công bố mẫu dấu theo quy định của Luật Doanh nghiệp
                    2020. Tuy nhiên, nhiều ngân hàng sẽ chưa cập nhật nội dung này nên Quý khách cần lưu ý và trao đổi
                    nội dung này để thực hiện thủ tục mở tài khoản dễ dàng nhất.
                </li>
                <li>
                    Doanh nghiệp cần mang theo con dấu doanh nghiệp khi đến làm thủ tục hoặc ủy quyền cho Luật Việt An
                    hỗ trợ thực hiện.
                </li>
                <li>
                    Từ ngày 01/05/2021 khi Thông tư 01/2021/TT- BKHĐT hướng dẫn về đăng ký doanh nghiệp bắt đầu có hiệu
                    lực thì không còn mẫu hồ sơ kê khai tài khoản ngân hàng với Phòng Đăng ký kinh doanh – Sở Kế hoạch
                    và Đầu tư. Do đó, được hiểu rằng từ thời điểm 01/05/2021 doanh nghiệp sau khi mở tài khoản không
                    phải thực hiện thủ tục kê kê khai số tài khoản ngân hàng của doanh nghiệp mới mở với Phòng Đăng ký
                    kinh doanh – Sở Kế hoạch và Đầu tư.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Đăng_ký_chữ_ký_số_để_nộp_thuế_điện_tử_và_báo_cáo_thuế_qua_mạng_Internet">
                <em>
                    Đăng ký chữ ký số để nộp thuế điện tử và báo cáo thuế qua mạng Internet
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Đăng ký nộp thuế điện tử từ một ngân hàng mà doanh nghiệp đã đăng ký mở tài khoản.
                </li>
                <li>
                    Hiện nay, đối với các khách hàng thành lập doanh nghiệp/thành lập công ty tại Hà Nội có thể đăng ký
                    xin cấp số tài khoản ngay trong hồ sơ đăng ký thành lập doanh nghiệp/công ty sẽ không phải thực hiện
                    mở tài khoản và thực hiện thông báo tài khoản ngân hàng theo thủ tục hướng dẫn kế tiếp. Có thể nói
                    Hà Nội đang tiên phong trong việc hỗ trợ doanh nghiệp và các tiện ích cho doanh nghiệp khi thực hiện
                    thủ tục thành lập doanh nghiệp/công ty tại Hà Nội. Tuy nhiên, hiện nay số lượng ngân hàng có thể
                    đăng ký online tài khoản cho doanh nghiệp còn hạn chế nên doanh nghiệp có ít lựa hơn.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="">
                <em>
                    Nộp tờ khai thuế môn bài và nộp thuế môn bài
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Miễn lệ phí môn bài đối với doanh nghiệp thành lập năm 2023: Trước diễn biến phức tạp của dịch bệnh
                    covid Chính phủ Việt Nam đã có chính sách miễn tiền thuế môn bài năm đầu thành lập cho công ty thành
                    lập mới từ năm 2020 nhằm khuyến khích doanh nghiệp gia nhập thị trường trong giai đoạn khó khăn này.
                    Theo quy định tại Nghị định 22/2020/NĐ-CP sửa đổi, bổ sung một số điều của Nghị định 139/2016/NĐ-CP
                    có hiệu lực từ ngày 25/02/2020. Do đó, công ty/doanh nghiệp thành lập mới năm 2023 sẽ được miễn lệ
                    phí (thuế) môn bài, tuy nhiên doanh nghiệp vẫn phải kê khai và nộp tờ khai thuế môn bài.
                </li>
                <li>
                    Thời gian kê khai lệ phí môn bài và nộp tờ khai: Người nộp lệ phí mới ra hoạt động sản xuất, kinh
                    doanh hoặc mới thành lập; doanh nghiệp nhỏ và vừa chuyển từ hộ kinh doanh thực hiện khai lệ phí môn
                    bài và nộp Tờ khai cho cơ quan thuế quản lý trực tiếp trước ngày 30 tháng 01 năm sau năm mới ra hoạt
                    động sản xuất, kinh doanh hoặc mới thành lập.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="">
                <em>
                    Làm biển và treo biển công ty tại trụ sở chính
                </em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Doanh nghiệp bắt buộc phải treo biển công ty tại trụ sở với các nội dung như sau: Tên cơ quan chủ
                    quản (cơ quan cấp Giấy chứng nhận đăng ký doanh nghiệp tức Sở Kế hoạch và Đầu tư), tên công ty, địa
                    chỉ trụ sở, số điện thoại hoặc email (nếu có).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Mua_chữ_ký_số_điện_tử_để_thực_hiện_nộp_thuế_điện_tử">
                Mua chữ ký số điện tử để thực hiện nộp thuế điện tử
            </h3>
            <ul class="div-left-ul">
                <li>
                    Doanh nghiệp có thể thông qua Luật Việt An để có mức phí sử dụng chữ ký số giá ưu đãi và dịch vụ hỗ
                    trợ tốt nhất.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Đề_nghị_phát_hành_hóa_đơn_điện_tử">
                Đề nghị phát hành hóa đơn điện tử
            </h3>
            <p>
                <em>
                    Hồ sơ đề nghị phát hành hóa đơn điện tử nộp qua mạng bao gồm:
                </em>
                Quyết định phát hành hóa đơn, Mẫu hóa đơn.
            </p>
            <ul class="div-left-ul">
                <li>
                    Sau khi nộp hồ sơ đề nghị đặt in hóa đơn trong vòng 2-3 ngày, cơ quan thuế sẽ tiến hành đánh giá hồ
                    sơ để xem xét chấp thuận hay không? (Ngoài ra, có một số Chi cục thuế yêu cầu nộp bản gốc hồ sơ nộp
                    qua mạng. Cơ quan thuế có thể đi kiểm tra địa chỉ trụ sở trước hoặc sau khi ra quyết định chấp thuận
                    cho phép phát hành hóa đơn, việc đi kiêm tra có thể có hẹn trước hoặc đột xuất, do đó doanh nghiệp
                    cần thu xếp có nhân sự túc trực tại Văn phòng trong thời gian nộp hồ sơ phát hành hóa đơn).
                </li>
                <li>
                    Theo quy định tại Điều 60 Nghị định 123/2020/NĐ-CP doanh nghiệp, tổ chức kinh tế đã thông báo phát
                    hành hóa đơn đặt in, hóa đơn tự in, hóa đơn điện tử không có mã của cơ quan thuế hoặc đã đã đăng ký
                    sử dụng hóa đơn điện tử có mã của cơ quan thuế, đã mua hóa đơn của cơ quan thuế trước ngày
                    19/10/2020 thì được tiếp tục sử dụng đến hết 30/6/2022. Theo đó đầu năm 2022 không bắt buộc sử dụng
                    hóa đơn điện tử mà chỉ bắt buộc doanh nghiệp phải sử dụng hóa đơn điện tử từ 01/7/2022. Như vậy,
                    doanh nghiệp, tổ chức kinh tế vẫn được sử dụng hóa đơn giấy đến hết 30/6/2022 nếu đã phát hành trước
                    ngày 19/10/2020. Tuy vậy, theo Quyết định số 1417/QĐ-TCT ngày 27/9/2021 của Tổng cục Thuế về việc
                    ban hành kế hoạch triển khai áp dụng hóa đơn điện tử tại 6 tỉnh, thành phố: Hà Nội, TP.Hồ Chí Minh,
                    Hải Phòng, Quảng Ninh, Bình Định, Phú Thọ từ tháng 11/2021 đến tháng 3/2022. Do đó năm 2023 đối với
                    các doanh nghiệp thành lập tại các tỉnh Hà Nội, TP.Hồ Chí Minh, Hải Phòng, Quảng Ninh, Bình Định,
                    Phú Thọ bắt buộc phải phát hành hóa đơn điện tử.
                </li>
            </ul>
            <p>
                <em>
                    Về thủ tục đăng ký sử dụng hóa đơn điện tử có mã hoặc không có mã như sau
                </em>
            </p>
            <ul class="div-left-ul">
                <li>
                    Tờ khai Đăng ký/thay đổi thông tin sử dụng hóa đơn điện tử theo mẫu 01;
                </li>
                <li>
                    Các cá nhân/tổ chức truy cập vào Cổng thông tin điện tử của Tổng cục Thuế để đăng ký sử dụng hóa đơn
                    điện tử có mã của cơ quan thuế.
                </li>
            </ul>
            <p>
                <em>
                    Các nội dung cần chuẩn bị khi cơ quan thuế xuống kiểm tra để phát hành hóa đơn VAT
                </em>
            </p>
            <ul class="div-left-ul">
                <li>
                    Treo biển tại trụ sở chính;
                </li>
                <li>
                    Hợp đồng thuê nhà; Chứng minh thư nhân dân+ hộ khẩu của chủ nhà;
                </li>
                <li>
                    Giấy chứng nhận quyền sử dụng đất (bản công chứng);
                </li>
                <li>
                    Giấy chứng nhận đăng ký doanh nghiệp;
                </li>
                <li>
                    Con dấu của doanh nghiệp;
                </li>
                <li>
                    Bố trí văn phòng làm việc để thể hiện doanh nghiệp có hoạt động;
                </li>
                <li>
                    Nhân viên/ Người đại diện theo pháp luật để tiếp cán bộ đại diện cơ quan thuế.
                </li>
                <li>
                    Tư vấn mọi thủ tục pháp lý miễn phí phát sinh trong quá trình hoạt động.
                </li>
            </ul>
            <p>
                Từ những bước tư vấn, nhận đăng được giấy chứng nhận doanh nghiệp đến những bước liên quan đến thuế, kế
                toán. Doanh nghiệp có thể sử dụng các dịch liên quan mà Công ty luật Việt An đang cung cấp.
            </p>
            <h3 class="div-left-h3" style="font-size:19px;line-height:26px;"
                id="Các_lý_do_Quý_khách_hàng_nên_lựa_chọn_sử_dụng_dịch_vụ_thành_lập_doanh_nghiệp/thành_lập_công_ty_tại_Luật_Việt_An">
                <strong>Các lý do Quý khách hàng nên lựa chọn sử dụng dịch vụ thành lập doanh nghiệp/thành lập công ty
                    tại Luật Việt An</strong>
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Công ty luật Việt An được thành lập từ những năm 2007, Luật Việt An đã thành lập công ty và tư vấn pháp
                luật doanh nghiệp cho hàng chục nghìn khách hàng trong và ngoài nước, các gói dịch vụ tư vấn của luật
                Việt An rất đa dạng và luôn đặt quyền lợi của khách hàng lên hàng đầu, chính vì vậy gần 20 năm qua Công
                ty luật Việt An được nhiều khách hàng lựa chọn bởi dịch vụ uy tín đúng như tiêu chí câu định vị của
                chúng tôi “
                <em>Find Viet An Law. Find Answers – Tìm đến Luật Việt An – Tìm đến câu trả lời</em>
                ”.
            </p>
            <ul class="div-left-ul">
                <li>
                    <em>Thứ nhất,</em>
                    Công ty Luật Việt An là công ty luật, tổ chức đại diện sở hữu trí tuệ, có chức năng hoạt động đại
                    lý thuế, dịch vụ kế toán với các luật sư, luật gia, chuyên gia, người có chứng chỉ hành nghề thuế
                    không chỉ am hiểm pháp luật, có nhiều kinh nghiệm trong hoạt động tư vấn thành lập doanh nghiệp/công
                    ty mà còn có kiến thức chuyên sâu về pháp luật doanh nghiệp, thuế, kế toán thấu hiểu các khó khăn,
                    vướng mắc trong quá trình khởi nghiệp, hoạt động của doanh nghiệp do đó chúng tôi sẽ hỗ trợ tư vấn
                    được tất cả các vấn đề pháp luật phát sinh trong hoạt động của doanh nghiệp.
                </li>
                <li>
                    <em>Thứ hai,</em>
                    Công ty luật Việt An luôn sẵn sàng hỗ trợ các thủ tục pháp lý liên quan đến các lĩnh vực tài chính,
                    kế toán, lao động, tiền lương, hợp đồng, đầu tư, sở hữu trí tuệ, kế toán thuế, tư vấn pháp lý nội bộ
                    doanh nghiệp, tranh chấp phát sinh trong quá trình kinh doanh, các vấn đề liên quan đến cơ cấu tổ
                    chức hoạt động của doanh nghiệp;
                </li>
                <li>
                    <em>Thứ ba,</em>
                    Công ty Luật Việt An cung cấp dịch vụ trọn gói sau thành lập cho doanh nghiệp bao gồm các vấn đề
                    pháp lý và kê khai thuế, tư vấn tài chính kế toán thuế, lao động, bảo hiểm, tiền lương cho doanh
                    nghiệp với chi phí hợp lý và thời gian nhanh nhất;
                </li>
                <li>
                    <em>Thứ tư,</em>
                    hiện nay nhiều khách hàng có nhu cầu kinh doanh online, không cần văn phòng cố định, mặt bằng kinh
                    doanh hoặc sử dụng nhà chung cư kết hợp kinh doanh. Đáp ứng nhu cầu đó, Luật Việt An có sẵn hệ thống
                    văn phòng ảo sẵn sàng hỗ trợ dịch vụ cho thuê văn phòng ảo để đảm bảo điều kiện đăng ký kinh doanh
                    cho doanh nghiệp.
                </li>
                <li>
                    <em>Thứ năm,</em>
                    với hệ thống văn phòng của Công ty Luật Việt An tại hai đầu của đất nước: Văn phòng Hà Nội, thành
                    phố Hồ Chí Minh chúng tôi tin tưởng rằng đó là một lợi thế để đáp ứng các nhu cầu pháp lý cao nhất
                    của khách hàng trong cả nước.
                </li>
            </ul>
            <p>
                Luật Việt An luôn mong muốn cung cấp dịch pháp lý tốt nhất cho khách hàng và dựa trên những nghiên cứu,
                cũng như kinh nghiệm chuyên sâu, công ty luật Việt An sẽ tư vấn và tìm ra những vấn đề pháp lý hiện tại
                của doanh nghiệp để đưa ra giải pháp tối ưu nhất cho khách hàng khi thành lập doanh nghiệp.
            </p>
            <h3 class="div-left-h3" id="Loại_hình_công_ty_mà_Công_ty_luật_Việt_An_thường_thành_lập_cho_khách_hàng">
                Loại hình công ty mà Công ty luật Việt An thường thành lập cho khách hàng
            </h3>
            <div class="gioithieu-full-2" style="margin-right:800px; margin-top:10px;"></div>
            <table width="100%">
                <tbody>
                    <tr>
                        <td width="430" style="border:1px solid #fff">
                            <ul class="div-left-ul">
                                <li>
                                    Thành lập hộ kinh doanh cá thể
                                </li>
                                <li>
                                    <a href="#">Thành lập doanh nghiệp tư nhân</a>
                                </li>
                                <li>
                                    <a href="#">Thành lập công ty TNHH một thành viên</a>
                                </li>
                                <li>
                                    <a href="#">Thành lập công ty TNHH hai thành viên trở lên</a>
                                </li>
                                <li>
                                    <a href="#">Thành lập công ty cổ phần (JSC)</a>
                                </li>
                            </ul>
                        </td>
                        <td width="430" style="border:1px solid #fff">
                            <ul class="div-left-ul">
                                <li>
                                    Thành lập công ty hợp danh.
                                </li>
                                <li>
                                    Thành lập công ty có vốn đầu tư nước ngoài.
                                </li>
                                <li>
                                    Thành lập công ty ở nước ngoài.
                                </li>
                                <li>
                                    Thành lập công ty có vốn nhà nước.
                                </li>
                                <li>
                                    Thành lập công ty liên doanh.
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Top_10_tỉnh,_thành_có_số_lượng_công_ty_/_doanh_nghiệp_thành_lập_lớn_nhất">
                <em>
                    Top 10 tỉnh, thành có số lượng công ty / doanh nghiệp thành lập lớn nhất
                </em>
            </h3>
            <table width="100%">
                <tbody>
                    <tr>
                        <td width="430" style="border:1px solid #fff">
                            <ul class="div-left-ul">
                                <li>
                                    Thành doanh nghiệp tại Hà Nội
                                </li>
                                <li>
                                    Thành doanh nghiệp tại thành phố Hồ Chí Minh
                                </li>
                                <li>
                                    Thành doanh nghiệp tại Đà Nẵng
                                </li>
                                <li>
                                    Thành lập công ty tại Bình Dương
                                </li>
                                <li>
                                    Thành lập công ty tại Đắc Lắc
                                </li>
                            </ul>
                        </td>
                        <td width="430" style="border:1px solid #fff">
                            <ul class="div-left-ul">
                                <li>
                                    Thành lập công ty tại Thừa Thiên Huế
                                </li>
                                <li>
                                    Thành lập doanh nghiệp tại Nam Định
                                </li>
                                <li>
                                    Thành lập doanh nghiệp tại Hà Nam
                                </li>
                                <li>
                                    Thành lập doanh nghiệp Bắc Ninh
                                </li>
                                <li>
                                    Thành lập doanh nghiệp tại Bắc Giang.
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3 class="div-left-h3" id="Các_câu_hỏi_thường_gặp_khi_thực_hiện_thủ_tục_thành_lập_công_ty">
                Các câu hỏi thường gặp khi thực hiện thủ tục thành lập công ty
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Công ty luật Việt An nhận được nhiều câu hỏi liên quan đến thành lập doanh nghiệp. Dưới đây là những câu
                hỏi luật sư tư vấn thường gặp trong quá trình tư vấn pháp luật doanh nghiệp.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Có_thể_lựa_chọn_ngày_hiển_thị_trên_đăng_ký_doanh_nghiệp_không?">
                <em>Có thể lựa chọn ngày hiển thị trên đăng ký doanh nghiệp không?</em>
            </h3>
            <p>
                Công ty có thể căn ngày nộp hồ sơ để hiển thị ngày cấp đăng ký doanh nghiệp hiển thị trên Giấy chứng
                nhận đăng ký doanh nghiệp. Tuy nhiên, có thể căn nếu ngày đó không là ngày nghỉ, ngày lễ. Và việc căn
                ngày cũng không thể chính xác 100% mà vẫn có những rủi ro nhất định. Quý khách muốn chọn ngày có thể
                liên hệ Luật Việt An để được tư vấn, hỗ trợ tốt nhất.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;" id="Nộp_hồ_sơ_thành_lập_công_ty_tại_đâu?">
                <em>Nộp hồ sơ thành lập công ty tại đâu?</em>
            </h3>
            <p>
                Nếu như thành lập hộ kinh doanh cá thể Quý khách hàng nộp tại Ủy ban nhân dân quận/huyện nơi hộ kinh
                doanh đặt trụ sở thì khi thành lập công ty Quý khách hàng nộp tại Phòng đăng ký kinh doanh – Sở Kế hoạch
                và Đầu tư nơi doanh nghiệp đặt trụ sở chính.
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Thành_lập_công_ty_có_cần_hộ_khẩu_thường_trú_hay_không?">
                <em>Thành lập công ty có cần hộ khẩu thường trú hay không?</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Việc thành lập công ty không căn cứ vào hộ khẩu thường trú của người thành lập mà người khởi nghiệp
                    có thể thành lập công ty ở bất cứ tỉnh nào khi có nhu cầu kinh doanh tại tỉnh đó.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Có_bao_nhiêu_vốn_mới_có_thể_thành_lập_công_ty?">
                <em>Có bao nhiêu vốn mới có thể thành lập công ty?</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Theo quy định của Luật Doanh nghiệp hiện hành, việc kê khai vốn bao nhiêu là quyền của doanh nghiệp,
                    doanh nghiệp tự kê khai và tự chịu trách nhiệm về vốn điều lệ của công ty.
                </li>
                <li>
                    Các ngành nghề có yêu cầu vốn pháp định doanh nghiệp phải đăng ký mức vốn theo quy định của pháp
                    luật nhưng cũng không cần chứng minh nguồn vốn mà chỉ đảm bảo chịu trách nhiệm đối với nguồn vốn kê
                    khai và đủ nguồn vốn ký quỹ theo quy định một số ngành nghề cụ thể.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Có_thể_đăng_ký_chung_cư_làm_trụ_sở_công_ty_hay_không?">
                <em>Có thể đăng ký chung cư làm trụ sở công ty hay không?</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Theo quy định của pháp luật hiện hành, chung cư và nhà tập thể không được đăng ký làm trụ sở
                    công ty cũng như địa chỉ của chi nhánh, văn phòng đại diện, địa điểm kinh doanh của công ty.
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Các_loại_thuế_cơ_bản_phải_kê_khai_và_đóng_sau_khi_thành_lập_công_ty?">
                <em>Các loại thuế cơ bản phải kê khai và đóng sau khi thành lập công ty?</em>
            </h3>
            <ul class="div-left-ul">
                <li>
                    Thuế môn bài nộp mức cố định theo vốn điều lệ đăng ký (Công ty thành lập trong năm 2023 được miễn
                    thuế môn bài);
                </li>
                <li>
                    Thuế Giá trị gia tăng (thông thường là 10%, doanh nghiệp chỉ phải đóng thuế nếu phát sinh đầu ra
                    nhiều hơn đầu vào).
                </li>
                <li>
                    Thuế thu nhập doanh nghiệp: thông thường 20% của lợi nhuận (doanh nghiệp chỉ phải đóng khi công ty
                    có lãi).
                </li>
            </ul>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Công_ty_chưa_có_doanh_thu,_chi_phí_có_phải_kê_khai_và_nộp_thuế_hay_không?">
                Công ty chưa có doanh thu, chi phí có phải kê khai và nộp thuế hay không?
            </h3>
            <p>
                Sau khi thành lập công ty dù không phát sinh doanh thu và chi phí thì doanh nghiệp chưa phải nộp thuế
                (trừ thuế môn bài các năm sau năm đầu thành lập) tuy nhiên hàng quý doanh nghiệp vẫn phải kê khai thuế
                như sau:
            </p>
            <ul class="div-left-ul">
                <li>
                    Đối với kê khai thuế giá trị gia tăng: Doanh nghiệp không phát sinh hóa đơn đầu vào và đầu ra thì
                    đến thời hạn kê khai và nộp thuế công ty vẫn phải nộp tờ khai thuế giá trị gia tăng (VAT).
                </li>
                <li>
                    Đối với báo cáo tình hình sử dụng hóa đơn: Doanh nghiệp vẫn cần phải kê khai dù chưa xuất hóa đơn
                    giá trị gia tăng của công ty (nếu Công ty đã thực hiện thủ tục thông báo phát hành hóa đơn giá trị
                    gia tăng).
                </li>
                <li>
                    Đối với báo cáo tài chính cuối năm: Doanh nghiệp lưu ý dù công ty không phát sinh hoạt động kinh
                    doanh vẫn phải lập và nộp báo cáo tài chính cuối năm cho năm hoạt động.
                </li>
            </ul>
            <p style="text-align:center;">
                <em>
                    Trong quá trình thành lập doanh nghiệp, Quý khách hàng có vướng mắc gì về các vấn đề pháp lý, còn
                    băn khoăn gì về các vấn đền liên quan đến trình tự, thủ tục, thủ tục phải thực hiện sau thành lập
                    doanh nghiệp, hãy đặt câu hỏi tới luật sư Việt An qua số điện thoại: 09 33 11 33 66 hoặc email:
                    info@luatvietan.vn.
                </em>
            </p>
            <h3 class="div-left-h3" style="font-size:18px;line-height:24px;"
                id="Kết_quả_dịch_vụ_khách_hàng_nhận_được_khi_sử_dụng_dịch_vụ_thành_lập_công_ty_của_Luật_Việt_An">
                Kết quả dịch vụ khách hàng nhận được khi sử dụng dịch vụ thành lập công ty của Luật Việt An
            </h3>
            <div class="gioithieu-full" style="margin-right:800px; margin-top:10px;"></div>
            <p>
                Quý khách hàng sẽ được nhận những kết quả theo các gói hợp đồng dịch vụ pháp lý, do vậy mà mỗi khách
                hàng có những kết quả thực hiện phụ thuộc vào thoả thuận công việc thực hiện giữa hai bên. Đây là những
                kết quả thông thường khách hàng nhận được sau khi sử dụng dịch vụ thành lập doanh nghiệp tại Công ty
                luật Việt An.
            </p>
            <div class="img-div-left">
                <a href="#">
                    <img src="./Assets/front/images/ket-qua-phap-ly-sau-khi-thanh-lap-cong-ty-moi-e1632112393509.jpg"
                        width="893" height="308" alt="">
                </a>
            </div>
            <ul class="div-left-ul">
                <li>
                    Giấy chứng nhận đăng ký doanh nghiệp đồng thời là mã số thuế;
                </li>
                <li>
                    Dấu tròn công ty;
                </li>
                <li>
                    Hồ sơ nội bộ doanh nghiệp;
                </li>
                <li>
                    Điều lệ công ty;
                </li>
                <li>
                    Hướng dẫn các thủ tục sau thành lập doanh nghiệp: mở tài khoản, đặt in hoá đơn; Tư vấn đăng ký chữ
                    ký số nộp thuế qua mạng
                </li>
                <li>
                    Hướng dẫn tư vấn các thủ tục kê khai thuế, nộp tờ khai thuế, nộp thuế, nộp bảo hiểm xã hội;
                </li>
                <li>
                    Dịch vụ sau thành lập: tài khoản ngân hàng, thiết lập hồ sơ thuế, đăng ký phương pháp thuế, kê khai
                    thuế ban đầu, đặt in hoá đơn giá trị gia tăng;
                </li>
                <li>
                    Hỗ trợ kê khai thuế trong quá trình hoạt động;
                </li>
                <li>
                    Dịch vụ kế toán thuế trọn gói;
                </li>
                <li>
                    Tư vấn xây dựng website; logo, nhãn hiệu, các giấy phép và điều kiện đảm bảo hoạt động kinh doanh
                    sau thành lập doanh nghiệp….
                </li>
            </ul>
            <p style="text-align:center;">
                <em>
                    Công ty luật Việt An luôn sẵn sàng đồng hành, hỗ trợ thủ tục thành lập doanh nghiệp/thành lập công
                    ty và các thủ tục sau thành lập cho doanh nhân trong nước và nước ngoài. Mọi khó khăn, vướng mắc Quý
                    khách hàng vui lòng liên hệ
                </em>
                <em>qua điện thoại, Zalo, Viber, WhatssAp </em>
                <em>hoặc gửi email để được chúng tôi hỗ trợ nhanh nhất và kịp thời nhất!</em>
            </p>
            <div class="gioithieu-full" style="text-align:center;">
                <span class="gioithieu-tv" id="CÁC_BÀI_VIẾT_LIÊN_QUAN_ĐẾN_THÀNH_LẬP_DOANH_NGHIỆP">
                    <a style=" color:#ff6600; font-weight:600;font-size:22px;line-height:30px;">CÁC BÀI VIẾT
                        CÁC BÀI VIẾT LIÊN QUAN ĐẾN THÀNH LẬP DOANH NGHIỆP
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
                            <li>
                                <a
                                    href="#Tại_sao_cần_sử_dụng_một_công_ty_luật_uy_tín_để_hỗ_trợ_thủ_tục_thành_lập_công_ty?">
                                    Tại sao cần sử dụng một công ty luật uy tín để hỗ trợ thủ tục thành lập công ty?
                                </a>
                            </li>
                            <li>
                                <a href="#Khi_nào_nên_thành_lập_công_ty?">
                                    Khi nào nên thành lập công ty?
                                </a>
                            </li>
                            <li>
                                <a href="#Điều_kiện_thành_lập_công_ty">
                                    Điều kiện thành lập công ty
                                </a>
                            </li>
                            <li>
                                <a href="#Tài_liệu_cần_chuẩn_bị_để_thành_lập_công_ty">
                                    Tài liệu cần chuẩn bị để thành lập công ty
                                </a>
                            </li>
                            <li>
                                <a href="#Hồ_sơ_thành_lập_công_ty">
                                    Hồ sơ thành lập công ty
                                </a>
                                <ol>
                                    <li>
                                        <a
                                            href="#Lưu_ý_về_giấy_tờ_của_thành_viên_công_ty_TNHH,_cổ_đông_công_ty_cổ_phần">
                                            Lưu ý về giấy tờ của thành viên công ty TNHH, cổ đông công ty cổ phần
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Lưu_ý_đối_với_cán_bộ_công_chức_viên_chức_nhà_nước_muốn_thành_lập_công_ty">
                                            Lưu ý đối với cán bộ công chức viên chức nhà nước muốn thành lập công ty
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#So_sánh_các_loại_hình_công_ty_phổ_biến">
                                    So sánh các loại hình công ty phổ biến
                                </a>
                            </li>
                            <li>
                                <a href="#Thủ_tục_thành_lập_công_ty">
                                    Thủ tục thành lập công ty
                                </a>
                                <ol>
                                    <li>
                                        <a href="#Bước_1:_Chuẩn_bị_hồ_sơ_thành_lập_công_ty">
                                            Bước 1: Chuẩn bị hồ sơ thành lập công ty
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Bước_2:_Nộp_hồ_sơ_thành_lập_công_ty_và_nộp_lệ_phí_công_bố_thông_tin_doanh_nghiệp">
                                            Bước 2: Nộp hồ sơ thành lập công ty và nộp lệ phí công bố thông tin doanh
                                            nghiệp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Bước_3:_Cấp_Giấy_chứng_nhận_đăng_ký_doanh_nghiệp">
                                            Bước 3: Cấp Giấy chứng nhận đăng ký doanh nghiệp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Bước_4:_Khắc_con_dấu_(mộc_tròn)_công_ty">
                                            Bước 4: Khắc con dấu (mộc tròn) công ty
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Bước_5:_Hoàn_thiện_chuyển_kết_quả_cho_khách_hàng_và_hướng_dẫn_khách_hàng_thủ_tục_thực_hiện_sau_thành_lập_công_ty">
                                            Bước 5: Hoàn thiện chuyển kết quả cho khách hàng và hướng dẫn khách hàng thủ
                                            tục thực hiện sau thành lập công ty
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Bước_6:_Hỗ_trợ,_tư_vấn_cho_khách_hàng_các_vấn_đề_pháp_lý_liên_quan_đến_hoạt_động_công_ty_và_kê_khai_thuế_theo_yêu_cầu_của_khách_hàng">
                                            Bước 6: Hỗ trợ, tư vấn cho khách hàng các vấn đề pháp lý liên quan đến hoạt
                                            động công ty và kê khai thuế theo yêu cầu của khách hàng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Bước_7:_Xin_các_giấy_phép_đủ_điều_kiện_hoạt_động_của_doanh_nghiệp">
                                            Bước 7: Xin các giấy phép đủ điều kiện hoạt động của doanh nghiệp
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a
                                    href="#Ưu_nhược_điểm_khi_thành_lập_công_ty/doanh_nghiệp_so_với_thành_lập_hộ_kinh_doanh.">
                                    Ưu nhược điểm khi thành lập công ty/doanh nghiệp so với thành lập hộ kinh doanh.
                                </a>
                            </li>
                            <li>
                                <a href="#Một_số_tư_vấn,_lưu_ý_quan_trọng_khi_thành_lập_công_ty">
                                    Một số tư vấn, lưu ý quan trọng khi thành lập công ty
                                </a>
                                <ol>
                                    <li>
                                        <a
                                            href="#Lưu_ý_về_trụ_sở_công_ty:_Theo_quy_định_tại_Điều_42,_Luật_Doanh_nghiệp_2020:">
                                            Lưu ý về trụ sở công ty: Theo quy định tại Điều 42, Luật Doanh nghiệp 2020:
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Lựa_chọn_loại_hình_doanh_nghiệp">
                                            Lựa chọn loại hình doanh nghiệp
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Đặt_tên_công_ty:_Theo_quy_định_tại_Điều_37,_Điều_38,_Điều_39,_Điều_40,_Điều_41_Luật_Doanh_nghiệp_2020:">
                                            Đặt tên công ty: Theo quy định tại Điều 37, Điều 38, Điều 39, Điều 40, Điều
                                            41 Luật Doanh nghiệp 2020:
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#_Vốn_điều_lệ:_Theo_khoản_34_Điều_4,_Khoản_2.c_Điều_24_Luật_Doanh_nghiệp_2020:">
                                            Vốn điều lệ: Theo khoản 34 Điều 4, Khoản 2.c Điều 24 Luật Doanh nghiệp 2020:
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Ngành_nghề_kinh_doanh:_Theo_Điều_7_Nghị_định_số_01/2021_về_đăng_ký_kinh_doanh:">
                                            Ngành nghề kinh doanh: Theo Điều 7 Nghị định số 01/2021 về đăng ký kinh
                                            doanh:
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#Các_loại_thuế_cơ_bản_công_ty_phải_nộp">
                                    Các loại thuế cơ bản công ty phải nộp
                                </a>
                                <ol>
                                    <li>
                                        <a href="#Các_loại_thuế_công_ty_phải_nộp">
                                            Các loại thuế công ty phải nộp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Các_mốc_thời_gian_nộp_tờ_khai_thuế_và_nộp_thuế">
                                            Các mốc thời gian nộp tờ khai thuế và nộp thuế
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Những_lưu_ý_về_kê_khai_thuế_khi_mới_thành_lập_công_ty">
                                            Những lưu ý về kê khai thuế khi mới thành lập công ty
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#Các_thủ_tục_sau_khi_thành_lập_công_ty">
                                    Các thủ tục sau khi thành lập công ty
                                </a>
                                <ol>
                                    <li>
                                        <a href="#Mở_tài_khoản_ngân_hàng_của_công_ty">
                                            Mở tài khoản ngân hàng của công ty
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Đăng_ký_chữ_ký_số_để_nộp_thuế_điện_tử_và_báo_cáo_thuế_qua_mạng_Internet">
                                            Đăng ký chữ ký số để nộp thuế điện tử và báo cáo thuế qua mạng Internet
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Nộp_tờ_khai_thuế_môn_bài_và_nộp_thuế_môn_bài">
                                            Nộp tờ khai thuế môn bài và nộp thuế môn bài
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Làm_biển_và_treo_biển_công_ty_tại_trụ_sở_chính">
                                            Làm biển và treo biển công ty tại trụ sở chính
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Mua_chữ_ký_số_điện_tử_để_thực_hiện_nộp_thuế_điện_tử">
                                            Mua chữ ký số điện tử để thực hiện nộp thuế điện tử
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Đề_nghị_phát_hành_hóa_đơn_điện_tử">
                                            Đề nghị phát hành hóa đơn điện tử
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#Các_lý_do_Quý_khách_hàng_nên_lựa_chọn_sử_dụng_dịch_vụ_thành_lập_doanh_nghiệp">
                                    Các lý do Quý khách hàng nên lựa chọn sử dụng dịch vụ thành lập doanh nghiệp/thành
                                    lập công ty tại Luật Việt An
                                </a>
                            </li>
                            <li>
                                <a href="#Loại_hình_công_ty_mà_Công_ty_luật_Việt_An_thường_thành_lập_cho_khách_hàng">
                                    Loại hình công ty mà Công ty luật Việt An thường thành lập cho khách hàng
                                </a>
                                <ol>
                                    <li>
                                        <a
                                            href="#Top_10_tỉnh,_thành_có_số_lượng_công_ty_/_doanh_nghiệp_thành_lập_lớn_nhất">
                                            Top 10 tỉnh, thành có số lượng công ty / doanh nghiệp thành lập lớn nhất
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a href="#Các_câu_hỏi_thường_gặp_khi_thực_hiện_thủ_tục_thành_lập_công_ty">
                                    Các câu hỏi thường gặp khi thực hiện thủ tục thành lập công ty
                                </a>
                                <ol>
                                    <li>
                                        <a href="#Có_thể_lựa_chọn_ngày_hiển_thị_trên_đăng_ký_doanh_nghiệp_không">
                                            Có thể lựa chọn ngày hiển thị trên đăng ký doanh nghiệp không?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Nộp_hồ_sơ_thành_lập_công_ty_tại_đâu">
                                            Nộp hồ sơ thành lập công ty tại đâu?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Thành_lập_công_ty_có_cần_hộ_khẩu_thường_trú_hay_không">
                                            Thành lập công ty có cần hộ khẩu thường trú hay không?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Có_bao_nhiêu_vốn_mới_có_thể_thành_lập_công_ty">
                                            Có bao nhiêu vốn mới có thể thành lập công ty?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Có_thể_đăng_ký_chung_cư_làm_trụ_sở_công_ty_hay_không?">
                                            Có thể đăng ký chung cư làm trụ sở công ty hay không?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#Các_loại_thuế_cơ_bản_phải_kê_khai_và_đóng_sau_khi_thành_lập_công_ty?">
                                            Các loại thuế cơ bản phải kê khai và đóng sau khi thành lập công ty?
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#Công_ty_chưa_có_doanh_thu,_chi_phí_có_phải_kê_khai_và_nộp_thuế_hay_không?">
                                            Công ty chưa có doanh thu, chi phí có phải kê khai và nộp thuế hay không?
                                        </a>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <a
                                    href="#Kết_quả_dịch_vụ_khách_hàng_nhận_được_khi_sử_dụng_dịch_vụ_thành_lập_công_ty_của_Luật_Việt_An">
                                    Kết quả dịch vụ khách hàng nhận được khi sử dụng dịch vụ thành lập công ty của Luật
                                    Việt An
                                </a>
                            </li>
                            <li>
                                <a href="#CÁC_BÀI_VIẾT_LIÊN_QUAN_ĐẾN_THÀNH_LẬP_DOANH_NGHIỆP">
                                    CÁC BÀI VIẾT LIÊN QUAN ĐẾN THÀNH LẬP DOANH NGHIỆP
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
        $result=$CategoryRelated->TLCTDN_pagination($start,$limit);
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
                        border: 1px solid #ddd;"><a href="tu-van-thanh-lap-cong-ty-doanh-nghiep-page'.($current_page-1).'">Prev</a></li>';
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
                        <a href="tu-van-thanh-lap-cong-ty-doanh-nghiep-page<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        }
                        // nút next
                        if($current_page < $page && $page > 1){
                            echo '<li style="color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                            border: 1px solid #ddd;"><a href="tu-van-thanh-lap-cong-ty-doanh-nghiep-page'.($current_page+1).'">Next</a></li>';
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