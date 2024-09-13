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

// Hiển thị dữ liệu
$sql = "SELECT ID, HoTen, NgaySinh, DiaChi, SoDienThoai, Email FROM KhachHang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Xuất dữ liệu mỗi hàng
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Họ Tên: " . $row["HoTen"]. " - Ngày Sinh: " . $row["NgaySinh"]. " - Địa chỉ: " . $row["DiaChi"]. " - SĐT: " . $row["SoDienThoai"]. " - Email: " . $row["Email"]. "<br>";
    }
} else {
    echo "Không có dữ liệu";
}

$conn->close();
?>