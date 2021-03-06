<?php
    session_start();
    include '../config.php';

    if(sha1($_SESSION["password"]) == $admin_password) {
        $login = 1;
    }
    else {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Portflowio Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="panel.css">
    </head>
    <body>
        <div id="page">
            <br>
            <h2>Portflowio Admin</h2>
            <p>Change your settings!</p>
            <br>
            <a href="add.php"><button type="button" class="btn btn-primary">Add a card to your portflowio</button><br><br></a>
            <a href="make.php"><button type="button" class="btn btn-primary">Generate "content" table in your database (deletes older if already exists)</button></a>
        </div>
    </body>
</html>