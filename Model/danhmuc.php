<?php
//load tất cả danh mục
   function pdo_all_danhmuc(){
    $sql=   "select * 
            from danhmuc 
            order by dm_id";
    $all_danhmuc=pdo_query($sql);
    return $all_danhmuc;
}
?>