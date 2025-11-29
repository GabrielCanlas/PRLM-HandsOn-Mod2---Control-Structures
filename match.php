<?php include "includes/header.php"; ?>

<h2>Order Pancit Canton</h2>

<div class="order-box">
    <form method="POST">
        <label>Select Flavor:</label>
        <select name="flavor">
            <option value="1">Original</option>
            <option value="2">Chilimansi</option>
            <option value="3">Sweet & Spicy</option>
            <option value="4">Spicy</option>
        </select>

        <button type="submit">Order</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = $_POST["flavor"];

    $order = match($choice) {
        "1" => "You ordered Original (₱25)",
        "2" => "You ordered Chilimansi (₱30)",
        "3" => "You ordered Sweet & Spicy (₱30)",
        "4" => "You ordered Spicy (₱35)",
        default => "Invalid selection!"
    };

    echo "<p class='order-result'><strong>$order</strong></p>";
}

include "includes/footer.php";
?>
