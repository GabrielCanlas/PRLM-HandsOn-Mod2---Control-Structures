<?php
    $stock = 5;
    $ordered = 3;

    // Stock for Pancit Canton flavors
    $pancitSpicyStocks = 0;
    $pancitCalamansiStocks = 0;
    $pancitSweetStocks = 0;
    $pancitOriginalStocks = 0;

    // Orders for each flavor
    $orderedSpicy = 2;
    if ($pancitSpicyStocks > 0) {
        $pancitSstock = "In Stock";
    } elseif ($orderedSpicy > 0) {
        $pancitSstock = "Coming Soon!";
    } else {
        $pancitSstock = "Sold Out!";
    }

    $orderedCalamansi = 2;
    if ($pancitCalamansiStocks > 0) {
        $pancitCstock = "In Stock";
    } elseif ($orderedCalamansi > 0) {
        $pancitCstock = "Coming Soon!";
    } else {
        $pancitCstock = "Sold Out!";
    }

    $orderedSweet = 2;
    if ($pancitSweetStocks > 0) {
        $pancitSWstock = "In Stock";
    } elseif ($orderedSweet > 0) {
        $pancitSWstock = "Coming Soon!";
    } else {
        $pancitSWstock = "Sold Out!";
    }

    $orderedOriginal = 2;
    if ($pancitOriginalStocks > 0) {
        $pancitOstock = "In Stock";
    } elseif ($orderedOriginal > 0) {
        $pancitOstock = "Coming Soon!";
    } else {
        $pancitOstock = "Sold Out!";
    }
?>

<!DOCTYPE html>
<html>
    <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Pancit Canton Stock</h2>
        <p>Pancit Canton Sweet and Spicy: <?= $pancitSstock ?></p>

        <p>Pancit Canton Chili Mansi: <?= $pancitCstock ?></p>

        <p>Pancit Canton Sweet and Spicy: <?= $pancitSWstock ?></p>

        <p>Pancit Canton Original and Sweet: <?= $pancitOstock ?></p>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
