<?php 
    $server= "localhost";
    $user="root";
    $pass="";
    $database="quanlykhachhang";
    $conn=new mysqLi($server,$user,$pass,$database);
    if ($conn)
    { 
        mysqLi_query($conn, "SET NAMES 'utf8'" );
        echo 'Đã kết nối thành công';
    }
    else
    {
        echo 'Kết nối thất bại';
    }
?>