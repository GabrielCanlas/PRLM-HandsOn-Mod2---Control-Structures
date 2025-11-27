
<!DOCTYPE html>
<html>
<?php include_once 'includes/header.php'; ?>
<body>

<h3>Pancit Canton Flavors</h3>

<?php
$cs = "(Coming Soon!)";
$colors = array("Spicy", "Calamansi", "Sweet", "Original", "Chilli Mansi $cs", "Sweet n Spicy $cs", "Original n Sweet $cs");

foreach ($colors as $x) {
  echo "$x <br>";
}
?>

<?php include_once 'includes/footer.php'; ?>
</body>
</html>
