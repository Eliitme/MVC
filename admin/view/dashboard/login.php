<style>
    #login {
        position: relative;
        margin-top: 120px;
    }
</style>
<div id="login">
    <h3 class="text-center text-info pt-5">ADMIN MANAGEMENT</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="?a=processLogin&c=dashboard" method="post" onsubmit="return checkLogin()">
                        <div class="form-group mb-3 ">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="alert alert-danger <?= isset($_COOKIE['error_login']) ? '' : 'd-none' ?>" role="alert">
                            <span><?= isset($_COOKIE['error_login']) ? $_COOKIE['error_login'] : '' ?></span>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <input type="submit" name="login" class="btn btn-info btn-md" value="Đăng Nhập">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>