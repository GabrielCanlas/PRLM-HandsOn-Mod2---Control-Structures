<?php
$name = "Gabriel";
$greeting = "Hello!";

if ($name != "") {
    $greeting = "Welcome back, " . $name;
}

// Pancit Canton Stocks
$pancitSpicyStocks = 5;
$pancitCalamansiStocks = 3;
$pancitSweetStocks = 5;
$pancitOriginalStocks = 2;

// Check availability
if ($pancitSpicyStocks > 0) {
    $pancitSstock = "In Stock";
}

if ($pancitCalamansiStocks > 0) {
    $pancitCstock = "In Stock";
}

if ($pancitSweetStocks > 0) {
    $pancitSWstock = "In Stock";
}

if ($pancitOriginalStocks > 0) {
    $pancitOstock = "In Stock";
}

?>
<!DOCTYPE html>
<html>
    <?php include_once 'includes/header.php'; ?>
<body>
    <h2><?= $greeting ?></h2>

    <p>Pancit Canton Spicy: <?= $pancitSstock ?></p>

    <p>Pancit Canton Calamansi: <?= $pancitCstock ?></p>

    <p>Pancit Canton Sweet: <?= $pancitSWstock ?></p>

    <p>Pancit Canton Original: <?= $pancitOstock ?></p>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
