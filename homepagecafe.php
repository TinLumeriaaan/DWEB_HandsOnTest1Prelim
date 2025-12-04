
<?php

$user = "Coffee Lover";
$offer = ["Croissants (1 piece)",5,3.50,2.80];
$product_name = $offer[0];
$quantity = $offer[1];
$regprice_perpack = $offer[2];
$original_offerprice = $offer[3];
$greeting = "Hello," . $user . "! Welcome to Syris Cafe.";

$usual_price = $quantity*$regprice_perpack;
$offer_price = $quantity*$original_offerprice;

require 'header.php';
?>

        <h2>Multi buy with discount: Fresh baked</h2>
        <p> 
            <?php echo $greeting; ?> 
        </p>

        <div class="offer-box">
            <div class="saving-circle">
                Save <br>$<?= number_format($saving, 2); ?>
            </div>

            <p style="font-stize: 1.2em; font-weight: bold;"> 
                <?php echo "Buy".$quantity."pieces of".$product_name."and save cheaper!"; ?>
            </p>
            <p style = "font-size: 1.5em; color: #e74c3c;"> Discounted price: $ <?= number_format($offer_price,2)?></p>
            <p>Usual Price: $<?=number_Format($usual_price,2)?></p> 
        </div>
        
<?php 
include 'footer.php';?>