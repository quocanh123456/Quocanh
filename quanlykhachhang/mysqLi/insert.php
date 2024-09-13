<?php
    $conn = mysqli_connect('localhost', 'root', "",'quanlykhachhang'); 
    // Kết nối với MySQL Server

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Thông báo lỗi nếu kết nối thất bại 
    $sql = "INSERT INTO KhachHang (HoTen, NgaySinh, DiaChi, SoDienThoai, Email) 
    VALUES ('Nguyen Van A', '1990-01-01', 'Hanoi', '0987654321', 'nva@example.com')";

if ($conn->query($sql) === TRUE) {
echo "Thêm dữ liệu thành công";
} else {
echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

    mysqli_close($conn); // Đóng kết nối CSDL 

?>