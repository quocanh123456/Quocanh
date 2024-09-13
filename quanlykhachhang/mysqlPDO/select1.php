<?php
// Kết nối MySQL qua PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlykhachhang";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Lấy dữ liệu
    $sql = "SELECT ID, HoTen, NgaySinh, DiaChi, SoDienThoai, Email FROM KhachHang";
    
    // Thực thi và lấy kết quả
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Thiết lập chế độ lấy dữ liệu thành mảng kết hợp
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $row) {
        echo "ID: " . $row["ID"]. " - Họ Tên: " . $row["HoTen"]. " - Ngày Sinh: " . $row["NgaySinh"]. " - Địa chỉ: " . $row["DiaChi"]. " - SĐT: " . $row["SoDienThoai"]. " - Email: " . $row["Email"]. "<br>";
    }
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

$conn = null;
?>