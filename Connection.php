<?php
class Connection
{
    // property
    public $host = 'localhost';
    public $username = 'root';
    public $password = '';
    public $db = 'webshop';
    public $con; // đại diện cho connect tới db

    // hàm khởi tạo
    public function __construct()
    {
        $this->conn();
    }

    // method
    public function conn()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->db);

        if (!$this->con) {
            die('Kết noi that bai');
        }

        // echo 'kêt nối thành công';
        // kết nối thành công và thiết lập charset
        // $this->con->set_charset("utf8");

        return $this->con;
    }
}