<?php
    $act="FrontendController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'gioithieu':
            include "./View/front/gioithieu_trangchu.php";
            break;
        case 'doanhnghiep':
            include "./View/front/doanhnghiep_trangchu.php";
            break;
        case 'dautu':
            include "./View/front/dautu_trangchu.php";
            break;
        case 'giayphep':
            include "./View/front/giayphep_trangchu.php";
            break;
        case 'sohuutritue':
            include "./View/front/sohuutritue_trangchu.php";
            break;
        case 'vuviecvuan':
            include "./View/front/vuviec-vuan_trangchu.php";
            break;
        case 'ketoan-thue':
            include "./View/front/ketoan-thue.php";
            break;
            //danh muc trang con ( giới thiệu )
        case 'gioithieu_thuonghieuluatvietan':
            include "./View/front/danhmuc_gioithieu/thuonghieuluatvietan.php";
            break;
        case 'gioithieu_chinhsachbaomatthongtin':
            include "./View/front/danhmuc_gioithieu/chinhsachbaomatthongtin.php";
            break;
        case 'gioithieu_congtyluattaivietnam':
            include "./View/front/danhmuc_gioithieu/congtyluattaivietnam.php";
            break;
        case 'gioithieu_danhgiacuacoquanquanly':
            include "./View/front/danhmuc_gioithieu/danhgiacuacoquanquanly.php";
            break;
        case 'gioithieu_tuyendung':
            include "./View/front/danhmuc_gioithieu/tuyendung.php";
            break;
        case 'gioithieu_lienhe':
            include "./View/front/danhmuc_gioithieu/lienhe.php";
            break;
            //danh muc trang con ( doanh nghiep )
        case 'doanhnghiep_thanhlapcongtydoanhnghiep':
            include "./View/front/danhmuc_doanhnghiep/thanhlapcongty_doanhnghiep.php";
            break;
        case 'doanhnghiep_thaydoidangkykinhdoanh':
            include "./View/front/danhmuc_doanhnghiep/thaydoidangkykinhdoanh.php";
            break;
        case 'doanhnghiep_thanhlapchinhanhcongty':
            include "./View/front/danhmuc_doanhnghiep/thanhlapchinhanhcongty.php";
            break;
        case 'doanhnghiep_thutucchuyendoiloaihinhdoanhnghiep':
            include "./View/front/danhmuc_doanhnghiep/thutucchuyendoiloaihinhdoanhnghiep.php";
            break;
        //danh mục trang con (sở hữu trí tuệ)
        case 'sohuutritue_dangkisangche':
            include "./View/front/danhmuc_sohuutritue/dangkisangche.php";
            break;
        case 'sohuutritue_tuvandangkynhanhieu':
            include "./View/front/danhmuc_sohuutritue/tuvandangkynhanhieu.php";
            break;
        case 'sohuutritue_trinhtudangkynhanhieu':
            include "./View/front/danhmuc_sohuutritue/trinhtudangkynhanhieu.php";
            break;
        case 'sohuutritue_dangkychidandialy':
            include "./View/front/danhmuc_sohuutritue/dangkychidandialy.php";
            break;
        case 'sohuutritue_kieudangcongnghiep':
            include "./View/front/danhmuc_sohuutritue/kieudangcongnghiep.php";
            break;
        case 'sohuutritue_baohoquyentacgia':
            include "./View/front/danhmuc_sohuutritue/baohoquyentacgia.php";
            break;
        //danh mục con ( giấy phép)
        case 'giayphep_giaypheplaodong':
            include "./View/front/danhmuc_giayphep/giaypheplaodong.php";
            break;
        case 'giayphep_giayphepkinhdoanhluhanhquocte':
            include "./View/front/danhmuc_giayphep/giayphepkinhdoanhluhanhquocte.php";
            break;
        case 'giayphep_giayphepkinhdoanhluhanhnoidia':
            include "./View/front/danhmuc_giayphep/giayphepkinhdoanhluhanhnoidia.php";
            break;
        //danh mục con (kế toán thuế)
        case 'ketoanthue_tuvanketoanthue':
            include "./View/front/danhmuc_ketoanthue/tuvanketoanthue.php";
            break;
        case 'ketoanthue_dichvubaocaothue':
            include "./View/front/danhmuc_ketoanthue/dichvubaocaothue.php";
            break;
        // danh mục con ( đầu tư)
        case 'dautu_dieuchinhgiaychungnhan':
            include "./View/front/danhmuc_dautu/dieuchinhgiaychungnhan.php";
            break;
        case 'dautu_nhadautunuocngoaigopvaoVN':
            include "./View/front/danhmuc_dautu/nhadautunuocngoaigopvaoVN.php";
            break;
        case 'dautu_thanhlapcongty100vonnuocngoai':
            include "./View/front/danhmuc_dautu/thanhlapcongty100vonnuocngoai.php";
            break;
    }
?>