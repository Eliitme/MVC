<?php
require_once('controller/base_controller.php');
require_once('model/admin.php');
require_once('helper/helper.php');

class DashboardController extends BaseController
{
    function __construct()
    {
        $this->folder = 'dashboard';
    }

    public function login()
    {
        if (isset($_SESSION['admin_login'])) {
            return $this->index();
        } else {
            $this->render('login');
        }
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
            header('location: ?a=login&c=dashboard');
        } else {
            if (Helper::comparePassword($password, $users[0]->mat_khau)) {
                $_SESSION['admin_login']['username'] = $username;
                $_SESSION['admin_login']['id'] = $users[0]->id;
                $_SESSION['admin_login']['level'] = $users[0]->level;

                header('location: ?c=dashboard&a=index');
            } else {
                $name = "error_login";
                $value = "Mật khẩu không chính xác, vui lòng thử lại";
                setcookie($name, $value, time() + (60), "/");
                header('location: ?a=login&c=dashboard');
            }
        }
    }

    public function logout() {
        session_destroy();

        header('location: ?a=index&c=dashboard');
    }

    public function index() {
        if (empty($_SESSION['admin_login'])) {
            return $this->login();
        } else {
            $this->render('index');
        }
    }
    public function error()
    {
        $this->render('error');
    }
}
