<?php 
if($_SESSION['user_level'] == ""){
    header("location:../home.php");
    exit(0);
}
?>

<?php 
if($_SESSION['user_level'] == "Admin"){
?>
<div class="col-md-12 col-lg-12">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a href="../dashboard/index.php?nama=<?=$_SESSION['nama_pengguna']?>" class="navbar-brand">
                Dashboard Latihan - 5
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#NavbarToggler"
                aria-expanded="false" aria-controls="NavbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <aside class="collapse navbar-collapse" id="NavbarToggler">
                <ul class="navbar-nav ms-auto mx-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="../dashboard/index.php?nama=<?=$_SESSION['nama_pengguna']?>" aria-current="page"
                            class="nav-link hover">
                            <i class="fa fa-dashboard"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../history/index.php?nama=<?=$_SESSION['nama_pengguna']?>" aria-current="page"
                            class="nav-link hover">
                            <i class="fas fa-book"></i>
                            <span>History</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="" role="button" aria-current="page" class="nav-link dropdown-toggle hover"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-gears"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item bg-light">
                                    <a href="../settings/index.php?nama=<?=$_SESSION['nama_pengguna']?>"
                                        class="dropdown-item-text text-decoration-none text-dark">
                                        Account
                                    </a>
                                </li>
                                <li class="dropdown-item bg-light">
                                    <a href="../ui/header.php?aksi=keluar" onclick="javascript:return confirm('')"
                                        class="dropdown-item-text text-decoration-none text-dark">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="ms-auto mx-5 mb-2 mb-lg-0">
                    <div class="nav-item dropdown">
                        <a href="" role="button" class="nav-link hover dropdown-toggle text-decoration-none"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['email_pengguna'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item bg-light">
                                <span class="dropdown-item-text">
                                    <?php echo "Nama anda : ".ucwords($_SESSION['nama_pengguna']); ?>
                                </span>
                            </li>
                            <li class="dropdown-item bg-light">
                                <span class="dropdown-item-text">
                                    <?php echo "Username : ".ucwords($_SESSION['username']); ?>
                                </span>
                            </li>
                            <li class="dropdown-item bg-light">
                                <span class="dropdown-item-text">
                                    <?php echo "Jabatan : ".ucwords($_SESSION['user_level']); ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </nav>
</div>
<?php
}else{
    header("location:../home.php");
    exit(0);
}
?>