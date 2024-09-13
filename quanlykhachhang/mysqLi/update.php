<?php
// Kết nối MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlykhachhang";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cập nhật dữ liệu
$sql = "UPDATE KhachHang SET DiaChi='Ho Chi Minh' WHERE ID=1";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>