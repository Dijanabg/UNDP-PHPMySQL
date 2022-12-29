<?php
include_once "view/login.php";
require "usersdata.php";
//include_once "model/user.php";

//print_r($users);
// ako je forma za logovanje poslata
if (isset($_POST['prijava'])) {


    if (isset($_POST['username']) && isset($_POST['password'])) {
        // $uname = $_POST['username'];
        // $upass = $_POST['password'];
        foreach ($users as $user) {
            if ($_POST['username'] == $user['username']  && $_POST['password'] == $user['password']) {
                session_start();
                $_SESSION['username'] = $user['username'];
                header('Location: shop.php');
                exit();
            } else {
                // ako su podaci za logovanje neispravni, prikazivanje poruke o grešci
                echo "Email ili sifra nisu dobro uneti. <br>
                Kliknite <a href='index.php'> ovde </a> da biste se ponovo logovali.";
                exit();
            }
        }
    }
}
