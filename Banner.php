<?php
class Banner extends Connection
{
    public $test = 'Test';
    protected $protected_test = 'protected test';
    private $test3 = 'Test3';

    // Thêm dữ liệu
    public function add($title, $slug)
    {
        $sql = "INSERT INTO banners (title, slug) VALUES ('$title', '$slug')";

        $this->con->query($sql);
    }

    public function ext()
    {
        //echo $this->protected_test;
        //echo $this->test3;
        $this->methodProtected();
        $this->methodPrivate();
    }

    protected function methodProtected()
    {
        echo 'test method protected';
    }

    private function methodPrivate()
    {
        echo 'test pahm vi hàm là private';
    }

    public function methodPublic()
    {
        echo 'test pham vi cua hàm là public';
    }
}
