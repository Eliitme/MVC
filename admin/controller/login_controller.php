<?php
require_once('controller/base_controller.php');
require_once('model/admin.php');

class LoginController extends BaseController
{
    function __construct()
    {
        $this->folder = 'login';
    }

    public function login()
    {
        $this->render('login');
    }

    public function processLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $users = Admin::getUserByUsername($username);

        if (!$users) {
            $name = "error_login";
            $value = "Tên đăng nhập không đúng hoặc không tồn tại";
            setcookie($name, $value, time() + (60), "/");
            header('location: index.php?a=login&c=login');
        } else {
            if ($users[0]->mat_khau == $password) {
                $_SESSION['admin_login']['username'] = $username;
                $_SESSION['admin_login']['id'] = $users[0]->id;
                $_SESSION['admin_login']['level'] = $users[0]->level;

                header('location: index.php?c=dashboard&a=index');
            } else {
                $name = "error_login";
                $value = "Mật khẩu không chính xác, vui lòng thử lại";
                setcookie($name, $value, time() + (60), "/");
                header('location: index.php?a=login&c=login');
            }
        }
    }

    public function error()
    {
        $this->render('error');
    }
}
