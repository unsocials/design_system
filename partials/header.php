<?php 
/**
 * Hedear file
 * Design System
 * Author: Mez - Massimo Maestri
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design System (<?= $config['name']; ?>) - Unsocials</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $config['path']['css']; ?>style.css">

</head>

<?php require 'partials/nav.php'; ?>

<body>
    <div class="container mb-3 text-center">
      <section class="header col-lg-12">
        <h1><?= $title ?></h1>
        <p><?= $description ?></p>
      </section>
    </div>
    
