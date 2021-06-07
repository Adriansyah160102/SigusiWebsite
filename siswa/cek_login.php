<?php
include '../koneksi.php';
session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);
    
        $sql = "SELECT *, 'siswa' as level FROM siswa WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $htng = mysqli_num_rows($result);
        if ($htng != 0) {
            $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
				$_SESSION['level']= $row['level'];
            header('location:beranda_siswa.php');
        } else {
            header('location:login_siswa.php?pass=cek');
        }
    }
?>
