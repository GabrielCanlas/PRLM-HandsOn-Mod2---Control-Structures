<?php
declare(strict_types=1);

include "includes/header.php";

$products = [
    "Original Pancit" => ["price" => 25.0, "stock" => 15],
    "Chilimansi Pancit" => ["price" => 30.0, "stock" => 8],
    "Sweet & Spicy Pancit" => ["price" => 30.0, "stock" => 12],
    "Spicy Pancit" => ["price" => 35.0, "stock" => 5],
    "Garlic Pancit" => ["price" => 28.0, "stock" => 20],
    "Cheesy Pancit" => ["price" => 32.0, "stock" => 7],
    "Seafood Pancit" => ["price" => 40.0, "stock" => 3]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return $stock < 10 ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return get_total_value($price, $quantity) * ($tax_rate / 100);
}
?>

<h2>Stock Monitor</h2>
<p>Check current stock levels and values for all Pancit Canton products.</p>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

    <?php foreach ($products as $product_name => $data): ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
            <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include "includes/footer.php"; ?>
