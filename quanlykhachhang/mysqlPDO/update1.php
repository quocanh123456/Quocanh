<?php
// Kết nối MySQL qua PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlykhachhang";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cập nhật dữ liệu
    $sql = "UPDATE KhachHang SET DiaChi='Ho Chi Minh' WHERE ID=1";
    
    // Thực thi câu lệnh
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "Cập nhật dữ liệu thành công";
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

$conn = null;
?>