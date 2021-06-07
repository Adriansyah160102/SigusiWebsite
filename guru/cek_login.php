<?php
include '../koneksi.php';
session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);
    
        $sql = "SELECT *, 'guru' as level FROM guru WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $htng = mysqli_num_rows($result);
        if ($htng > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['level'] = $row['level'];
            header("Location: beranda_guru.php");
        } else {
            header('location:login_guru.php?pass=cek');
        }
    }
?>