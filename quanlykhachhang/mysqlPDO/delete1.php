<?php
// Kết nối MySQL qua PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlykhachhang";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Xóa dữ liệu
    $sql = "DELETE FROM KhachHang WHERE ID=1";
    
    // Thực thi câu lệnh
    $conn->exec($sql);
    echo "Xóa dữ liệu thành công";
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

$conn = null;
?>