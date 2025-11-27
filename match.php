<?php
$day = 'Thursday';

$offer = match ($day) {
    'Monday' => '20% off on any Pancit Canton',
    'Tuesday' => 'We are closed',
    'Wednesday' => '10% off on any Pancit Canton',
    'Thursday' => '5% off on any Pancit Canton',
    'Friday' => '15% off on any Pancit Canton',
    'Saturday', 
    'Sunday' => '25% off on any Pancit Canton',
};

?>
<!DOCTYPE html>
<html>
    <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Today is <?= $day ?> </h2>
        <h2>Which means the offer today is <?= $offer ?></h2>

        <br>
        <table>
            <tr>
                <th>Day</th>
                <th>Offer</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td>20% off on any Pancit Canton</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>We are closed</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>10% off on any Pancit Canton</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>5% off on any Pancit Canton</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>15% off on any Pancit Canton</td>
            </tr>
            <tr>
                <td>Weekends</td>
                <td>25% off on any Pancit Canton</td>
            </tr>
        </table>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
