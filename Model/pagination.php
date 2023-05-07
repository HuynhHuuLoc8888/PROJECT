<?php
    class Pagination{
        // viết phương thức tính số trang
        function findPage($count,$limit){
            $page = (($count % $limit) == 0 )?$count/$limit:floor($count/$limit+1);
            return $page;
        }
        // viết phương thức tính start dựa vào currentPage chính là URL, biến tự đặt là page    
        function findStart($limit){
            if(!isset($_GET['page']) || $_GET['page'] == 1){
                $start = 0;
                $_GET['page'] = 1;
            }else{
                $start = ($_GET['page'] - 1) * $limit;
            }
            return $start; 
        } 
    }
?>