<?php
//load tất cả danh mục
   function pdo_all_danhmuc(){
    $sql=   "select * 
            from danhmuc 
            where is_active = 1
            order by dm_id";
    $all_danhmuc=pdo_query($sql);
    return $all_danhmuc;
}
?>