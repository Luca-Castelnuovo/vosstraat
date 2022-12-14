<?php

require '../vendor/autoload.php';
require '../includes/auth.php';

$success = null;

if (isset($_GET['open'])) {
    $success = send_request();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" />
    <link href="/manifest.webmanifest" rel="manifest">
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <title>Vosstraat Deur</title>
</head>

<body>
    <div class="container">
        <p class="title">Vosstraat 2, 6511VH</p>

        <a href="/?open" type="button" class="btn btn-primary">Open de deur</a>

        <?php if ($success !== null) : ?>
            <br><br>
        <?php endif ?>

        <?php if ($success === true) : ?>
            <a href="#" type="button" class="btn btn-success">Success</a>
        <?php endif ?>

        <?php if ($success === false) : ?>
            <a href="#" type="button" class="btn btn-error">Probeer opnieuw</a>
        <?php endif; ?>
    </div>
</body>

</html>
