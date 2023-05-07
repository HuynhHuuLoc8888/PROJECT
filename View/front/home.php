<style>
<?php include "../../Assets/front/css/home.css";

?>* {
    box-sizing: border-box;
}

.title-right-4 {
    display: inline-flex;
}

.title-right-4 h5 {
    font-size: 24px;
    font-weight: 600;
}

blockquote {
    position: relative;
    margin: 0 0 1.25em;
    padding: 10px 10px 0;
    border-left: 2px solid #00578a;
    background: #f9f9f9;
}
.title-right{
  display: flex;
    flex-flow: wrap;
    position: relative;
    transition: all 500ms ease;
}
.home-right-editor {
    background: transparent url("./Assets/front/images/quote-bottom.png") bottom right/24px auto no-repeat scroll;
    padding-right: 30px;
}

.home-right-element {
    background: transparent url("./Assets/front/images/quote-top.png") top 5px left/24px auto no-repeat scroll;
    padding-left: 36px;
    margin-top: 20px;
}

.homeright-elm {
    float: left;
    width: 100%;
}

.bz-img {
    background: linear-gradient(rgba(0, 0, 0, 0.30), rgba(0, 0, 0, 0.30)),
        transparent url("./Assets/front/images/Ts.Ls-Do-Thi-Thu-Ha-768x496.jpg") center center/cover no-repeat scroll;
    height:350px;
}

.home-left {
    min-height: 1px;
    position: relative;
    padding-right: 15px;
    padding-left: 15px;
    float: left;
}

.homeleft-title {
    display: flex;
    align-items: flex-end;
    position: relative;
    float: left;
    width: 100%;
}

.homeleft-title .h2-type {
    color: #00578a;
    font-size: 24px;
    line-height: 24px;
    font-weight: 600;
    margin: 0;
    padding: 0;
}

.homeleft-title .h2-type-2 {
    color: #268c52;
    font-size: 24px;
    line-height: 24px;
    font-weight: 600;
    margin-left: 9px;
}
.div-left-title{
  text-align:justify;
  margin-top: 20px;
  float:left;
}
.bz-img .ovelay{
    /* position: absolute; */
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 55;
    border: 0;
    background: repeat;
    outline: none;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff0000;
    font-size: 50px;

}
.fa-youtube{
  font-family: "Font Awesome 5 Pro","Font Awesome 5 Brands","FontAwesome";
    font-style: inherit;
    display: inline-block;
    text-rendering: auto;
    speak: none;
    font-weight: 400;
    position: absolute;

}
.link-center{
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    font-size: 0;
    z-index: 55;
    border: 0;
    background: repeat;
    outline: none;
    cursor: pointer;
    text-decoration: none;
    transition: all 300ms ease;
}
a.link-center2{
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    font-size: 0;
    z-index: 55;
    border: 0;
    background: repeat;
    outline: none;
    cursor: pointer;
    text-decoration: none;
    transition: all 300ms ease;
}
.sub-2{
    display:block;
    width: 100%;
    height: 1px;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0), rgba(0, 87, 138, 0.84), rgba(255, 255, 255, 0));
    margin-top: 5px;
    margin-bottom: 10px;
}
</style>
<section>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-right:15px;">
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./Assets/front/images/slide1.jpg" alt="Los Angeles" class="img-slide1"
                    style="width: 100%; height: 450px; filter: brightness(60%);">
                <div class="home-div1-elm home-div3-css bz-title fadeInUp animated" data-animation-in="fadeInUp"
                    data-delay-in="0.3" style="opacity: 1; animation-delay: 0.3s;">
                    <div class="type">Tư vấn đầu tư</div>
                    <span class="sub">INVESTMENT CONSULTANCY</span>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="./Assets/front/images/So-Huu-Tri-Tue.jpg" alt="Chicago" class="img-slide1"
                    style="width: 100%; height: 450px; filter: brightness(60%);">
                <div class="home-div1-elm home-div3-css bz-title fadeInUp animated" data-animation-in="fadeInUp"
                    data-delay-in="0.3" style="opacity: 1; animation-delay: 0.3s;">
                    <div style="font-size:25px;" class="type">Tư vấn sở hữu trí tuệ</div>
                    <span style="font-size:25px;" class="sub">INTELLECTUAL PROPERTY CONSULTANCY</span>
                </div>
            </div>
            <div class="carousel-item active" >
                <img src="./Assets/front/images/Tu-van-doanh-nghiep.jpg" alt="Chicago" class="img-slide1"
                    style="width: 100%; height: 450px; filter: brightness(60%);">
                <div class="home-div1-elm home-div3-css bz-title fadeInUp animated" data-animation-in="fadeInUp"
                    data-delay-in="0.3" style="opacity: 1; animation-delay: 0.3s;">
                    <div style="font-size:25px;" class="type">Tư vấn Kinh doanh & Thương Mại</div>
                    <span style="font-size:25px;" class="sub">Business & Trade Law Consultacy</span>
                </div>
            </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <div class="row" style="margin-top:30px;">
        <div class="col-sm-4 bg-light home-left" style="text-align: center;">
            <div class="homeleft-title">
                <h2 class="h2-type">CÔNG TY</h2>
                <span class="h2-type-2">LUẬT VIỆT AN</span>
            </div>
            <div class="div-left-title">
                    <p style="text-align:justify;font-weight:400;font-size:14.5px;">
                        Công ty luật Việt An đồng thời là Tổ chức Đại diện sở hữu trí tuệ Việt An được thành lập theo
                        Giấy chứng nhận đăng ký hoạt động số 01010266/TP/ĐKTP cấp năm 2007 của Sở Tư pháp thành phố HN,
                        Giấy chứng nhận hoạt động số 41.06.2504/TP/ĐKHĐ của Sở Tư pháp thành phố HCM, QĐ số: 1448/QĐ –
                        SHTT cấp năm 2007 của Cục Sở hữu trí tuệ Việt Nam và Văn bản xác nhận số 9316/XN-CT-TTHT của Cục
                        thuế Hà Nội về đủ điều kiện kinh doanh dịch vụ về thuế năm 2020, trên cơ sở quan niệm chính
                        thống về nghề luật, nghề dịch vụ đại diện sở hữu trí tuệ, nghề kế toán, dịch vụ thuế của những
                        luật sư sáng lập, các luật sư, các cộng sự của Luật Việt An…
                        <em>
                          <a style="font-style:italic;" href="./View/front/gioithieu_trangchu.php">Chi tiết</a>
                        </em>
                    </p>
                  
                </div>
        </div>
        <div class="col-sm-4 bg-light bz-img" style="text-align: center;">
            <div class="ovelay">
                <i class="ovelay_cont fa-youtube"></i>
                <a href="#" title="Video: Luật Việt An Tivi (Tube)" class="link-center">
              <span class="link-title">Video: Luật Việt An Tivi (Tube)</span>
              </a>
            </div>
            
        </div>
        <div class="col-sm-4 bg-light" style="text-align: center;">
            <div class="title-right-4">
                <h5 style="color: #f58634;">16 NĂM&nbsp;</h5>
                <h5 style="color: #268c52;">KINH NGHIỆM</h5>
            </div>
            <div class=" homeright-elm home-right-element">
                <div class="homeright-elm home-right-editor">
                    <p style="text-align:justify;margin:0 0 8px 0;font-size:15px">
                        Hoạt động
                        <a href="#" style="text-decoration:none;color:#005790;">tư vấn pháp luật</a>
                        , dịch vụ đại diện sở hữu trí tuệ, dịch vụ kế toán thuế đã khẳng định được uy tín, tín nhiệm,
                        niềm tin của khách hàng trong và ngoài nước về dịch vụ tư vấn pháp luật doanh nghiệp, sở hữu trí
                        tuệ, kinh doanh, thương mại, đầu tư,
                        <a href="#" style="text-decoration:none;color:#005790;">tư vấn pháp luật lao động</a>
                        , pháp luật thuế, dịch vụ kế toán thuế, giải quyết tranh chấp thương mại trong nước và quốc tế…
                    </p>
                    <p style="text-align:center;">
                        <span style="color: #339966;">
                            <em style="font-style:italic;">"Find Viet An Law. Find Answers!</em>
                        </span>
                    </p>
                    <blockquote>
                        <p style="text-align:center;">
                            <a href="#">
                                <span style="font-family: 'comic sans ms', sans-serif;color:#005790;">Nhận xét về công
                                    ty luật
                                    Việt An
                                </span>
                            </a>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-6 bg-light" >
            <a href="http://" style="text-decoration: none; color:blue;">
                <h5><i class="fa fa-newspaper" style="color:orange"></i> TƯ VẤN PHÁP LUẬT DOANH NGHIỆP</h5>
            </a>
            <span class="sub-2"></span>
            <div class="row">
                <div class="col-sm-4 bg-light" style="">
                    <a href=""><img width="200" height="150" src="././Assets/front/images/Tu-van-doanh-nghiep-mt_trangchu.jpg"></a>
                </div>
                <div class="col-sm-8 bg-light" style="">
                    <a href="" style="text-decoration: none; font-size:15px; color:black">
                        Công ty Luật Việt An không chỉ trợ giúp khách hàng trong việc thành lập doanh nghiệp,
                        thành lập công ty, thay đổi đăng kí kinh doanh... mà còn là tư vấn và trọ giúp khách hàng là các
                        doanh nghiệp trong và ngoài nước,
                        giải quyết các vấn đề pháp lí phát sinh trong quá trình hoạt động của doanh nghiệp tại Viêt Nam.
                    </a>
                </div>
            </div>
        </div>

          <div class="col-sm-6 bg-light title-right">
            <div href="http://" style="text-decoration: none; color:blue;">
                <h5><i class="bi bi-person-hearts" style="color:orange"></i> TƯ VẤN PHÁP LUẬT SỞ HỮU TRÍ TUỆ</h5>
            </div>
            <span class="sub-2"></span>
            <div class="row">
                <div class="col-sm-4 bg-light" style="">
                    <img width="200" height="150" src="././Assets/front/images/Tu-van-so-huu-tri-tue_trangchu.jpg">
                    <noscript>
                    <img width="200" height="150" src="././Assets/front/images/Tu-van-so-huu-tri-tue_trangchu.jpg">
                    </noscript>
                </div>
                <div class="col-sm-8 bg-light" style="font-size:15px;text-align:justify;flex:1;">
                    <p href="" style="text-decoration: none;">
                        Là một tổ chức đại diện sở hữu trí tuệ, Công ty Luật Việt An không chỉ có đầy đủ tư cách pháp lí
                        mà còn có một đội ngũ luật sư, người
                        đại diện sở hữu trí tuệ có trình độ chuyên môn cao để đem đến cho khách hàng dịch vụ tư vấn và
                        dịch vụ đại diện sở hữu trí tuệ chuyên
                        sâu các vấn đề pháp lý liên quan đến lĩnh vực sở hữu trí tuệ.
                    </p>
                </div>
            </div>
            <a href="#" class="link-center" title="Tư vấn pháp luật sở hữu trí tuệ">Tư vấn pháp luật sở hữu trí tuệ</a>
        </div>
    </div>
    <!-- <br> -->
    <div class="row">
        <div class="col-sm-6 bg-light" style=" font-size: 16px;">
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thành lập công ty</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thay đổi đăng kí kinh doanh</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thành lập chi nhánh công ty</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thủ tục thành lập văn phòng đại diên</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thành lập địa điểm kinh doanh</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thủ tục chuyển đổi loại hình doanh nghiệp</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thủ tục tạm ngừng kinh doanh</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Giải thể doanh nghiệp</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Tư vấn hợp đồng</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Tư vấn giải quyết tranh chấp công ty</a>
        </div>
        <div class="col-sm-6 bg-light" style=" font-size: 16px;">
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thành lập công ty</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thay đổi đăng kí kinh doanh</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thành lập chi nhánh công ty</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thủ tục thành lập văn phòng đại diên</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thành lập địa điểm kinh doanh</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thủ tục chuyển đổi loại hình doanh nghiệp</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Thủ tục tạm ngừng kinh doanh</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Giải thể doanh nghiệp</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Tư vấn hợp đồng</a><br>
            <a href="" style="color: black; text-decoration: none;"><i class="bi bi-check-lg" style="color:orange"></i>
                Tư vấn giải quyết tranh chấp công ty</a><br>
        </div>
    </div>
</section>