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
                                <a href="../index.php" aria-current="page" class="nav-link hover">
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