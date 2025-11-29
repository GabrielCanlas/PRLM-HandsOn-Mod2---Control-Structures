<?php include "includes/header.php";

$stockpc = 0;

if ($stockpc > 0) {
    echo "<p>Available!</p>";
} else {
    echo "<p>Out of stock.</p>";
}

include "includes/footer.php"; ?>
