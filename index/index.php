<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        echo "Selamat datang".$_SESSION['username'];
?>
    <br><a href="sessionLogout.php">Logout</a>
    <?php
    }
    else {
        echo "Anda belum login";
    ?>
    <a href="form_loginPengguna.php">login</a>
    <?php
    }
    ?>
</body>
</html>
