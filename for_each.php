<?php include "includes/header.php";

$flavors = [
    "Original" => 25,
    "Chilimansi" => 30,
    "Sweet & Spicy" => 30,
    "Spicy" => 35
];

echo "<h2 class='for-each-title'>Menu</h2>";
echo "<div class='menu-grid'>";

foreach ($flavors as $name => $price) {
    echo "
        <div class='menu-item'>
            <h3>$name</h3>
            <p>₱$price</p>
        </div>
    ";
}

echo "</div>";

include "includes/footer.php";
?>
