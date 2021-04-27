<h1>Lập trình hướng đối tượng - OPP</h1>

<!-- Bước 1 : Kết nối ĐB -->
<?php include_once 'Connection.php'; ?>

<?php
    // Cách 1: Khởi tạo trực tiếp đối tượng Connect
     //$ketnoi = new Connection();
     //$ketnoi->conn();

    // Cách 2 : SỬ dụng tính chất của hàm  khởi tạo
    // $ketnoi = new Connection();


?>
<!-- Bước 2 : Thao tác - Thêm / Hiển thị / Sửa / Xóa ( CRUD ) -->
<?php include_once 'User.php'; ?>

<?php
    // Cách 3 : Sử dụng tính chất kế thừa
    $user = new User();
    // Thêm người dùng
    // $user->add('Nguyen Van B','nguyenvanb@gmail.com','123456');

    // Cập nhật
    // $user->update(5,'Nguyen Van BD','nguyenvanbd@gmail.com','12345678');

    // Xóa
    //$user->delete(4);
?>
