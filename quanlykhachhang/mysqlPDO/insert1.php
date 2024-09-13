<?php
// Kết nối MySQL qua PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlykhachhang";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập PDO để ném ngoại lệ khi có lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thêm dữ liệu
    $sql = "INSERT INTO KhachHang (HoTen, NgaySinh, DiaChi, SoDienThoai, Email) 
            VALUES ('Nguyen Van A', '1990-01-01', 'Hanoi', '0987654321', 'nva@example.com')";
    
    // Sử dụng exec() vì không cần lấy kết quả trả về
    $conn->exec($sql);
    echo "Thêm dữ liệu thành công";
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

$conn = null;
?>