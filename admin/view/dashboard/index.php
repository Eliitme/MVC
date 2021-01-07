<div class="row mt-3 shadow-sm p-3 bg-white">
    <div class="col-sm-4 text-center">
        <div class="logo">
            <a href="?"><img id="logo" src="assets/img/logo.png" class="img-fluid"></a>
        </div>
    </div>
    <div class="col-sm-4">
        <form class="mt-3">
            <div class="row">
                <div class="col-sm-8 mb-3">
                    <input type="text" class="form-control" placeholder="Tìm Kiếm">
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-outline-success">Tìm Kiếm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mt-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="?">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=loai&a=index">Quản Lí Loại Chó/Mèo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=hang&a=index">Quản Lí Chó/Mèo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=hoa_don&a=index" tabindex="-1">Quản Lí Hóa Đơn</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand disable">Welcome, <?= $_SESSION['admin_login']['username'] ?></a>
            <div class="dropdown">
                <button class="dropbtn"><i class="fas fa-angle-down"></i></button>
                <div class="dropdown-content">
                    <a href="?a=logout&c=dashboard">Đăng xuất</a>
                </div>
            </div>
        </div>
    </nav>
</div>