<?php
include 'appendCsv.php';
include 'readCsv.php';
include 'writeJson.php';

if (!empty($_POST['simbol']) && !empty($_POST['kompanija']) && !empty($_POST['cena'])) {
    //pozivamo funkciju za upis u .csv fajl
    $data = addRowCsv($_POST['simbol'], $_POST['kompanija'], $_POST['cena']);
    $data = addRowJson($_POST['simbol'], $_POST['kompanija'], $_POST['cena']);
    $_POST = array();
}
$data = getAllCsv();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Trenutne cene akcija</h1>
    <br>

    <table border="1px">
        <?php
        foreach ($data as $row) :
        ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
    <br>
    <form method="POST" action="#">
        <label for="simbol">Unesi simbol: </label>
        <input type="text" id="simbol" name="simbol"><br>
        <label for="kompanija">Unesi kompaniju: </label>
        <input type="text" id="kompanija" name="kompanija"><br>
        <label for="cena">Unesi cenu: </label>
        <input type="text" id="cena" name="cena"><br>

        <input type="submit" value="submit">
    </form>
</body>

</html>