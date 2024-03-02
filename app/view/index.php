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
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
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
                        Dashboard Latihan 5
                    </a>
                    <small id="time" class="fs-6 opacity-50 text-black hover"></small>
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