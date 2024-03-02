<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Latihan 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style type="text/css">
    body {
        background: rgba(185, 150, 180, 0.42);
        background-blend-mode: saturation;
        /* Font */
        font-size: medium;
        font-family: sans-serif;
        font-weight: normal;
        font-style: normal;
    }
    </style>
</head>

<body onload="startTime()">
    <div class="appLayout">
        <div class="Layout">
            <nav class="navbar navbar-expand-lg bg-light">
                <header class="container-fluid">
                    <a href="index.php" class="navbar-brand">
                        Dashboard Latihan 5 - Login
                    </a>
                    <button type="button" class="navbar-toggler" aria-controls="navbarSupportToggle"
                        data-bs-target="#navbarSupportToggle" data-bs-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportToggle">
                        <ul class="navbar-nav ms-auto mx-3 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="index.php" aria-current="page" class="nav-link hover">
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" aria-current="page" class="nav-link hover">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="home.php" aria-current="page" class="nav-link hover">
                                    <span>Log In</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
            </nav>
            <div style="display:flex; 
            justify-content: center; 
            align-items:center; 
            flex-wrap: wrap;
            padding-top: 10%;">
                <div style="min-width: 25%; width:360px;">
                    <div class="card bg-light border border-transparent border-0 opacity-75">
                        <div class="card-header border border-0 border-transparent opacity-75">
                            <h3 class="card-title text-center">Login Halaman</h3>
                        </div>
                        <div class="card-body border border-0 border-transparent opacity-75">
                            <form action="act-signin.php" method="post">
                                <div class="row align-items-center form-group mb-2 mb-lg-0">
                                    <label for="userMail" class="input-group-addon">Email / Username</label>
                                    <div class="input-group-text form-control">
                                        <div class="input-group">
                                            <input type="text" name="userMail" id="userMail" class="form-control"
                                                placeholder="masukkan username atau email anda ..." required
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="mb-2"></div>
                                    <label for="passMail" class="input-group-addon">Kata Sandi</label>
                                    <div class="input-group-text form-control">
                                        <div class="input-group">
                                            <input type="password" name="password" id="passMail" class="form-control"
                                                placeholder="masukkan kata sandi anda ..." required
                                                aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-center flex-wrap">
                                        <button type="submit" name="submit" class="btn btn-info">
                                            <span>Log In</span>
                                            <i class="fa fa-sign-in-alt"></i>
                                        </button>
                                        <button type="reset" class="btn btn-danger">
                                            <span>Cancel</span>
                                            <i class="fa fa-eraser"></i>
                                        </button>
                                    </p>
                                </div>
                            </form>
                            <p class="text-center">
                                <a href="" data-bs-target="#modalSignUp" data-bs-toggle="modal"
                                    aria-controls="modalSignUp" class="text-decoration-none text-primary">Buat Akun</a>
                                <br>
                                <br>
                                <small id="time" class="fs-5 opacity-50 text-black hover"></small>
                                <br>
                                <small id="dev" class="fs-6 text-black hover"></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalSignUp" tabindex="-1">
            <div class="d-flex justify-content-center align-items-center flex-wrap" style="margin-top:10%;">
                <div class="modal-dialog bg-transparent border border-transparent border-0 opacity-75"
                    style="min-width: 25%; width:360px;">
                    <div class="modal-content">
                        <div class="modal-header border border-0 border-transparent opacity-75">
                            <h3 class="modal-title text-center">Register Halaman</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body border border-0 border-transparent opacity-75">
                            <div id="register">
                                <?php 
                                    require_once("../database/koneksi.php");
                                    if(isset($_POST['submits'])){
                                        $userMail = htmlspecialchars($_POST['email']);
                                        $password = htmlspecialchars($_POST['password']);
                                        $username = htmlspecialchars($_POST['username']);
                                        $nama = htmlspecialchars($_POST['nama']);
                                        $access = htmlspecialchars($_POST['user_level']);
                                        /* Table Database */
                                        $data = array($userMail,$password,$username,$nama,$access);
                                        $table = "tb_pengguna";
                                        $sql = "INSERT INTO $table (email,password,username,nama,user_level) VALUES (?,?,?,?,?)";
                                        $row = $configs->prepare($sql);
                                        $row->execute($data);
                                        /* Header Page */ 
                                        echo "<script lang='javascript'>window.location.href='home.php'</script>";
                                    }
                                ?>
                            </div>
                            <form action="home.php#register" method="post">
                                <label for="userMailer" class="input-group-addon">Email</label>
                                <div class="input-group-text form-control">
                                    <div class="input-group">
                                        <input type="text" name="email" id="userMailer" class="form-control"
                                            placeholder="masukkan email anda ..." required aria-required="true">
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <label for="passMailer" class="input-group-addon">Kata Sandi</label>
                                <div class="input-group-text form-control">
                                    <div class="input-group">
                                        <input type="password" name="password" id="passMailer" class="form-control"
                                            placeholder="masukkan kata sandi anda ..." required aria-required="true">
                                    </div>
                                </div>
                                <label for="username" class="input-group-addon">username Pengguna</label>
                                <div class="input-group-text form-control">
                                    <div class="input-group">
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="masukkan username anda ..." required aria-required="true">
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <label for="nama_pengguna" class="input-group-addon">Nama Pengguna</label>
                                <div class="input-group-text form-control">
                                    <div class="input-group">
                                        <input type="text" name="nama" id="nama_pengguna" class="form-control"
                                            placeholder="masukkan nama anda ..." required aria-required="true">
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <label for="level_pengguna" class="input-group-addon">user level</label>
                                <div class="input-group-text form-control">
                                    <div class="input-group">
                                        <input type="text" name="user_level" id="level_pengguna" class="form-control"
                                            readonly value="Member" placeholder="masukkan level pengguna ..." required
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-center flex-wrap">
                                        <button type="submit" name="submits" class="btn btn-info">
                                            <span>Simpan</span>
                                            <i class="fa fa-save"></i>
                                        </button>
                                        <button type="reset" class="btn btn-danger">
                                            <span>Hapus</span>
                                            <i class="fa fa-eraser"></i>
                                        </button>
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                                            <span>Cancel</span>
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
    function startTime() {
        var today = new Date();
        var tahun = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML =
            "Jam : " + h + ":" + m + ":" + s + ", " + tahun;
        var t = setTimeout(startTime, 500);
        document.getElementById('dev').innerHTML = "By IkoAlmasDevGame <br>" + " @copyright " + tahun;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
    </script>
</body>

</html>