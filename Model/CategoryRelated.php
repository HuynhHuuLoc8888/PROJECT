<?php
    class CategoryRelated{
        public function __construct(){

        }
        public function CategoryRelatedAll(){
            $db=new Connect();
            $sql="select * from category_related";
            $result=$db->getList($sql);
            return $result;
        }
        public function CategoryRelatedAll_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục doanh nghiệp
        public function showCateRelate_Business(){
            $db=new Connect();
            $sql="select * from category_related where note='doanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        //phân trang danh mục doanh nghiệp
        public function Business_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='doanhnghiep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục sở hữu trí tuệ
        public function showCateRelate_IntellectualProperty(){
            $db=new Connect();
            $sql="select * from category_related where note='sohuutritue'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục sở hữu trí tuệ
        public function IntellectualProperty_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='sohuutritue' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục đầu tư
        public function showCateRelate_Invest(){
            $db=new Connect();
            $sql="select * from category_related where note='dautu'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục đầu tư
        public function Invest_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='dautu' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục giấy phép
        public function showCateRelate_License(){
            $db=new Connect();
            $sql="select * from category_related where note='giayphep'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục giấy phép
        public function License_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='giayphep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục vụ việc vụ án
        public function showCateRelate_VVVA(){
            $db=new Connect();
            $sql="select * from category_related where note='vuviec-vuan'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục vụ việc vụ án
        public function VVVA_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='vuviec-vuan' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục  kế toán- thuế
        public function showCateRelate_KTT(){
            $db=new Connect();
            $sql="select * from category_related where note='ketoan-thue'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục kế toán- thuế
        public function KTT_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='ketoan-thue' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục thành lập công ty doanh nghiệp
        public function showCateRelate_TLCTDN(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongtydoanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục thành lập công ty doanh nghiệp
        public function TLCTDN_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongtydoanhnghiep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục thay đổi đăng ký kinh doanh
        public function showCateRelate_TDDKKD(){
            $db=new Connect();
            $sql="select * from category_related where note='thaydoidangkykinhdoanh'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục thay đổi đăng ký kinh doanh
        public function TDDKKD_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='thaydoidangkykinhdoanh' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục bài viết liên quan thành lập chi nhánh công ty 
        public function showCateRelate_TLCNCT(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapchinhanhcongty'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục thành lập công ty (trong thành lập chi nhánh công ty)
        public function showCateRelate_TLCT(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongty'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục văn bản pháp luật (trong thành lập chi nhánh công ty)
        public function showCateRelate_VBPL(){
            $db=new Connect();
            $sql="select * from category_related where note='vanbanphapluat'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục tư vấn pháp luật (trong thành lập chi nhánh công ty)
        public function showCateRelate_TVPL(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvanphapluat'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục thủ tục chuyển đổi loại hình doanh nghiệp
        public function showCateRelate_TTCĐLHDN(){
            $db=new Connect();
            $sql="select * from category_related where note='thu-tuc-chuyen-doi-loai-hinh-doanh-nghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục công ty luật tại việt nam (trong mục giới thiệu)
        public function showCateRelate_CTTVN(){
            $db=new Connect();
            $sql="select * from category_related where note='congtytaivietnam'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục phân trang công ty luật tại việt nam (trong mục giới thiệu)
        public function CTTVN_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='congtytaivietnam' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục tư vấn sở hữu trí tuệ ( trong mục sở hữu trí tuệ)
        public function showCateRelate_TVSHTT(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvansohuutritue'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục bài viết liên quan đăng ký sáng chế ( trong mục sở hữu trí tuệ)
        public function showCateRelate_DKSC(){
            $db=new Connect();
            $sql="select * from category_related where note='dangkysangche'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục tư vấn đăng ký nhãn hiệu 
        public function showCateRelate_TVKDNH(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvandangkynhanhieu'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục tư vấn đăng ký nhãn hiệu (trong mục trình tự đăng ký nhãn hiệu)
        public function showCateRelate_TVKDNH2(){
            $db=new Connect();
            $sql="select * from category_related where note='tvdangkynhanhieu'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục phân trang công ty luật tại việt nam (trong mục giới thiệu)
        public function TVKDNH_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='tuvandangkynhanhieu' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan danh mục trình tự đăng ký nhãn hiệu
        public function showCateRelate_TTDKNH(){
            $db=new Connect();
            $sql="select * from category_related where note='trinhtudangkynhanhieu'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan danh mục liên hệ
        public function showCateRelate_LH(){
            $db=new Connect();
            $sql="select * from category_related where note='lienhe'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết công ty luật việt an (danh mục liên hệ)
        public function showCateRelate_CTLVA(){
            $db=new Connect();
            $sql="select * from category_related where note='congtyluatvietan'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan mục trình tự đăng ký chỉ dẫn địa lý 
        public function showCateRelate_DKCDDL(){
            $db=new Connect();
            $sql="select * from category_related where note='dangkychidandialy'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan mục giấy phép lao động (giấy phép) 
        public function showCateRelate_GPLD(){
            $db=new Connect();
            $sql="select * from category_related where note='giaypheplaodong'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan giay phep kinh doanh lu hanh quoc te (giấy phép)  
        public function showCateRelate_GPKDLHQT(){
            $db=new Connect();
            $sql="select * from category_related where note='giayphepkinhdoanhluhanhquocte'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan giay phep kinh doanh lu hanh nội địa (giấy phép)  
        public function showCateRelate_GPKDLHND(){
            $db=new Connect();
            $sql="select * from category_related where note='luhanhnoidia'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan giay phep kinh doanh lu hanh (giấy phép)  
        public function showCateRelate_GPKDLH(){
            $db=new Connect();
            $sql="select * from category_related where note='giayphepkinhdoanhluhanh'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan giay phep mạng xã hội (giấy phép)  
        public function showCateRelate_GPMXH(){
            $db=new Connect();
            $sql="select * from category_related where note='giayphepmangxahoi'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục tư vấn giấy phep (giấy phép)  
        public function showCateRelate_TVGP(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvangiayphep'";
            $result=$db->getList($sql);
            return $result;
        }
        //show bài viết liên quan tư vấn kế toán thuế ( kế toán- thuế)
        public function showCateRelate_TVKTT(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvanketoanthue'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục dịch vụ kế toán ( kế toán- thuế)
        public function showCateRelate_DVKT(){
            $db=new Connect();
            $sql="select * from category_related where note='dichvuketoan'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục dịch vụ báo cáo thuế( kế toán- thuế)
        public function showCateRelate_DVBCT(){
            $db=new Connect();
            $sql="select * from category_related where note='dichvubaocaothue'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục dịch vụ bảo hiểm xã hội( kế toán- thuế)
        public function showCateRelate_DVBHXH(){
            $db=new Connect();
            $sql="select * from category_related where note='dichvubaohiemxahoi'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục bài viết liên quan dịch vụ quyết toán thuế thu nhập cá nhân( kế toán- thuế)
        public function showCateRelate_DVQTTTNCN(){
            $db=new Connect();
            $sql="select * from category_related where note='dichvuquyettoanthuethunhapcanhan'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục điều chỉnh giấy chứng nhận (đầu tư)
        public function showCateRelate_DCGCN(){
            $db=new Connect();
            $sql="select * from category_related where note='dieuchinhgiaychungnhan'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục tư vấn đầu tư (đầu tư)
        public function showCateRelate_TVDT(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvandautu'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục thành lập công ty 100% vốn nước ngoài(đầu tư)
        public function showCateRelate_100VDTNN(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongty100%vonnuocngoai'";
            $result=$db->getList($sql);
            return $result;
        }
        //show mục thành lập doanh nghiệp có vốn đầu tư nước ngoài(đầu tư)
        public function showCateRelate_TLDNCVDTNN(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapdoanhnghiepcovondautunuocngoai'";
            $result=$db->getList($sql);
            return $result;
        }
        public function CategoryRelatedId($id){
            $db=new Connect();
            $sql="select * from category_related where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$description,$note,$url){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="insert into category_related(id,name,description,note,url,created_at)
            values (NULL,'$name','$description','$note','$url','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$description,$note,$url){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $dateupdate=$date->format('Y-m-d H:i:s');
            $sql="update category_related set 
            name='$name',
            description='$description',
            note='$note',
            url='$url',
            updated_at='$dateupdate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from category_related where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function getsearch($timkiem){
            $db=new Connect();
            $sql="select * from category_related where note like '%$timkiem%' or name like '%$timkiem%'";
            $result=$db->getList($sql);
            return $result;
        }
    }   
?>