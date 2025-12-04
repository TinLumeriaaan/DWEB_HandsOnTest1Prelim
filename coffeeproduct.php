<?php 

$user = "Coffee Lover";
$greet = "Hi!";
if($user) {
    $greet = "Welcome back, " . $user . "!";
}

$product = "Blend Mist Coffee";
$cost = 10.00;
$total = [];

for ($counter =1; $counter <=15; $counter++){
    $subtotal = $cost*$counter;
    $discount_rate = ($counter*4);
    $discount = $subtotal*($discount_rate/100);
    $totals[$counter] = $subtotal - $discount;
}
    
require 'header.php';
?>

    <h2> Products discounts: <?= $product ?> </h2>
    <p style="font-style: italic;"></p>
    <?php echo $greet; ?>
    </p>

    <p> 
        <?php echo "Enjoy discounts when you buy coffees of our ", $product."!";
        ?>
    </p>

    <table>
        <thead>
            <tr>
                <th> Quantity </th>
                <th> Price Discount </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($totals as $quantity =>  $price) 
                ?>
                <tr>
                    <td>
                        <?php echo $quantity.""; echo "pack"; echo($quantity == 1)?"": "s"; ?>
                    </td>
                </tr>
                <td>
                <?php echo "$".number_format($price,2); ?>
                <tr>
                    <td>Text</td> <td>Text</td>
                </tr>
                <tr>
                    <td>Text</td> <td>Text</td>
                </tr>
                <tr>
                    <td>Text</td> <td>Text</td>
                </tr>
                </td>
</tr>
            
        
        </tbody>
    </table>

<?php include 'footer.php';