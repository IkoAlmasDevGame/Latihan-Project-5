<?php
session_start();
require_once("../database/koneksi.php");
if(isset($_POST['submit'])){
    $userMail = htmlspecialchars($_POST['userMail']);
    $password = htmlspecialchars($_POST['password']);
    password_verify($password, PASSWORD_DEFAULT);

    if($userMail == "" || $password == ""){
        header("location:home.php");
        exit(0);
    }

    $table = "tb_pengguna";
    $sql = "SELECT * FROM $table WHERE email = '$userMail' and password = '$password' || username = '$userMail' and password = '$password'";
    $db = $configs->prepare($sql);
    $db->execute();
    $cek = $db->rowCount();
                                        
    if($cek > 0){
        $response = array($userMail,$password);
        $response[$table] = array($userMail,$password);
        if($row = $db->fetch()){
            if($row['user_level'] == "Member"){
                $_SESSION['id'] = $row['id_pengguna'];
                $_SESSION['nama_pengguna'] = $row['nama'];
                $_SESSION['email_pengguna'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_level'] = "Member";
                header("location:dashboard/index.php?nama=".$_SESSION['nama_pengguna']);
            }
            $_SESSION['status'] = true;
            array_push($response["tb_pengguna"], $row);
            exit(0);
        }else{
            $_SESSION['status'] = false;
            header("location:home.php");
            exit(0);
        }
    }
}
?>