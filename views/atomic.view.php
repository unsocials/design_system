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

    <!-- HEADING -->
    <?php if(isset($components)) : ?>
        <?php require base_path('views/components/atomic/' . $components . '.view.php'); ?>
    <?php endif ?>

<!-- Fine Contenuto -->

<?php require 'partials/footer.php'; ?>
