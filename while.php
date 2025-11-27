<?php
$counter = 1;
$packs = 10;
$price = 15.99;
?>
<!DOCTYPE html>
<html>
    <?php include_once 'includes/header.php'; ?>
<body>
    <h3>Prices:</h3>

    <?php
    while ($counter < $packs) {
        echo $counter;
        echo ' pieces of pancit canton costs P';
        echo $price * $counter;
        echo '<br>';
        $counter++;
    }
    ?>

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
