<?php

    require "../dbBroker.php";
    require "../model/prijava.php";

    if(isset($_POST['predmet']) 
     && isset($_POST['katedra'])
     && isset($_POST['sala'])
     && isset($_POST['datum'])) {
        $prijava = new Prijava(null, $_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum']);
        $status = Prijava::dodaj($prijava, $conn);

        if($status) {
            echo "Uspesno";
            header("Location: ../home.php");
            exit();
        }
        else {
            echo "Neuspesno";
        }

    }

?>