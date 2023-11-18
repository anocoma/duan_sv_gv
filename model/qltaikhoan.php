<?php
    function loadall_dstaikhoan(){
        $sql = SELECT * FROM taikhoan;
        $dstaikhoan = pdo_query($sql);
        return $dstaikhoan;
    }