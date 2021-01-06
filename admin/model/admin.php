<?php
class Admin
{
    public $id;
    public $ten_dang_nhap;
    public $mat_khau;
    public $level;

    public function __construct($id, $ten_dang_nhap, $mat_khau, $level)
    {
        $this->id = $id;
        $this->ten_dang_nhap = $ten_dang_nhap;
        $this->mat_khau = $mat_khau;
        $this->level = $level;
    }

    static function getUserByUsername($username)
    {
        $data = [];
        $db = DB::getInstance();

        $query = "SELECT * FROM admin WHERE ten_dang_nhap = '" . $username . "' LIMIT 1";

        $rs = mysqli_query($db, $query);

        foreach (mysqli_fetch_all($rs) as $user) {
            $data[] = new Admin($user[0], $user[1], $user[2], $user[3]);
        }

        return $data;
    }
}
