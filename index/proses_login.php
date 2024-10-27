<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $errors = array();

        //validasi Nama

        if (empty($username)) {
            echo "Username tidak boleh kosong <br>";
        }

//        validasi password
        if (empty($password)) {
            echo"Password tidak boleh kosong <br>";
            echo "<a href='form_loginPengguna.php'>Login Ulang</a>";
        }
    }

   if (!empty($errors)) {
       foreach ($errors as $error) {
           echo $error . "<br>";
       }
   }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $errors = array();

    if (empty($error)) {
        if ($username == "admin" && $password == "admin123") {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            echo "Anda berhasil login. Silahkan menuju <a href='index.php'>Halaman Utama</a>";
        }
    }
}

?>