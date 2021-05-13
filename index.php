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
    //$user = new User(); // -> gọi đến hàm khởi tạo __contruct
    // Thêm người dùng
    //$user->add('Nguyen Van C','nguyenvanC@gmail.com','123456');

    // Cập nhật
    // $user->update(5,'Nguyen Van BD','nguyenvanbd@gmail.com','12345678');

    // Xóa
    //$user->delete(4);
?>

<?php include_once 'Banner.php'; ?>

<?php
    $banner = new Banner();
    // Thêm
    //$banner->add('Samsung Khuyến Mại', 'samsung-khuyen-mai');
    ///$banner->create();
    //$banner->methodProtected();
    $banner->methodPublic();
    //$banner->methodProtectedPrivated();
    // KL: Không thể sử dụng biến, hàm có phậm vị protected,privated ngoại lớp

    // Ví dụ phạm vi của Biến
    //echo $banner->test;
    //echo $banner->protected_test;
    //echo $banner->test3;
    //echo $banner->ext();

    // Ví dụ phạm vi của Hàm
    //$banner->methodProtected();
    //$banner->methodPrivate();
    //$banner->ext();

    // => KẾT LUẬN :  Biến hoặc Hàm có phạm vi là protected ,privated không thể truy cập bên ngoài
    // Class, nhưng có thể truy cập thông qua hàm có phạm vi là Public




?>
