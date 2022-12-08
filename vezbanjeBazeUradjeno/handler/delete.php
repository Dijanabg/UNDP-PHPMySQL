<?php

require "../dbBroker.php";
require "../model/tim.php";

if (isset($_POST["timID"])) {
    $status = Tim::deleteById($_POST["timID"], $conn);
    if ($status) {
        header("Location: ../home.php");
    } else
        echo "Filed";
}
