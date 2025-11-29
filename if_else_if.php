<?php include "includes/header.php";

$money = 20;

if ($money >= 35) {
    echo "You can buy any flavor!";
} elseif ($money >= 30) {
    echo "You can buy Chilimansi or Sweet & Spicy!";
} elseif ($money >= 25) {
    echo "You can only buy Original.";
} else {
    echo "You don't have enough money.";
}

include "includes/footer.php"; ?>
