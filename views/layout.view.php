<?php 
/**
 * Main Page 
 * Design System
 * Author: Mez - Massimo Maestri
 */
?>

<?php $config = require 'config.php'; ?>

<?php require 'partials/header.php'; ?>

<!-- Inizio Contenuto -->

    <!-- inserisci qui.... -->
        <!-- HEADING -->
    <?php if(isset($section)) : ?>
        <?php require base_path('views/section/layout/' . $section . '.view.php'); ?>
    <?php endif ?>

<!-- Fine Contenuto -->

<?php require 'partials/footer.php'; ?>
