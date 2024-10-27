<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $errors = array();

        //validasi Nama

        if (empty($username)) {
            $errors[] = "Username tidak boleh kosong";
        }

//        validasi password
        if (empty($password)) {
            $errors[] = "Password tidak boleh kosong";
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

    //validasi Nama

    if (empty($username)) {
        $errors[] = "Username tidak boleh kosong";
    }

    if (empty($error)) {
        if ($username == "admin" && $password == "admin123") {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            echo "Anda berhasil login. Silahkan menuju <a href='index.php'>Halaman Utama</a>";
        }else {
            echo "Username atau Password salah <a href='form_loginPengguna.php'>Klik Untuk LoginUlang</a>";
        }


//        validasi password
        if (empty($password)) {
            $errors[] = "Password tidak boleh kosong";
        }
    }
}

?>