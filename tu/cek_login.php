<?php
include '../koneksi.php';
session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);
    
        $sql = "SELECT *, 'tu' as level FROM tata_usaha WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $htng = mysqli_num_rows($result);
        if ($htng > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['level']= $row['level'];
            header("Location: beranda_admin.php");
        } else {
            header('location:login_tu.php?pass=cek');
        }
    }
?>