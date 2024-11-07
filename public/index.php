<?php

session_start();

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

include_once "../libs/core.php";
    require_once "../controllers/contactController.php";
    require_once "../controllers/mailerController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Entertainment Groep</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/43032dec1c.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
</head>

<body>
    <?php include_once "../resources/views/components/header.view.php" ?>
    <?php include_once getPage() ?>
    <?php include_once "../resources/views/components/footer.view.php" ?>
</body>

</html>