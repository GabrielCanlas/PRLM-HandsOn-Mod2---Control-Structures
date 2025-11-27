<?php
// Stock quantities for each flavor
$spicyStocks = 5;
$calamansiStocks = 3;
$sweetStocks = 2;
$originalStocks = 2;

// Check stock availability for each flavor
if ($spicyStocks > 0) {
    $pancitSstock = "In Stock";
} else {
    $pancitSstock = "Out of Stock";
}

if ($calamansiStocks > 0) {
    $pancitCstock = "In Stock";
} else {
    $pancitCstock = "Out of Stock";
}

if ($sweetStocks > 0) {
    $pancitSWstock = "In Stock";
} else {
    $pancitSWstock = "Out of Stock";
}

if ($originalStocks > 0) {
    $pancitOstock = "In Stock";
} else {
    $pancitOstock = "Out of Stock";
}
?>

<!DOCTYPE html>
<html>
    <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Pancit Canton Flavors</h2>
        <p>Here is the stock availability for our Pancit Canton flavors:</p>

        <p>Pancit Canton Spicy: <?= $pancitSstock ?></p>

        <p>Pancit Canton Calamansi: <?= $pancitCstock ?></p>

        <p>Pancit Canton Sweet: <?= $pancitSWstock ?></p>

        <p>Pancit Canton Original: <?= $pancitOstock ?></p>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
