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

// Xóa dữ liệu
$sql = "DELETE FROM KhachHang WHERE ID=1";

if ($conn->query($sql) === TRUE) {
    echo "Xóa dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>