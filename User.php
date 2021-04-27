<?php
class User extends Connection
{
    private $id;
    private $name;
    private $email;
    private $pwd;

    public function __construct()
    {
        // gọi phương thức __construct của lớp Cha
        parent::__construct();
    }

    // danh sách
    public function index()
    {

    }

    // thêm dữ liệu
    public function add($name, $email, $pwd)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pwd')";

        //print_r($sql);

        $this->con->query($sql);
    }

    // cập nhật
    public function update($id, $name, $email, $pwd)
    {
        $sql = "UPDATE users SET name= '$name',email = '$email', password='$pwd' WHERE id = $id ";

        //print_r($sql);

        $this->con->query($sql);
    }

    // xóa
    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = $id";

        // run command sql
        $this->con->query($sql);
    }
}