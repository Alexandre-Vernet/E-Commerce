<?php
function formatPrice($priceInDecimals)
{
    $price = floatval($priceInDecimals) / 100;
    return number_format($price, 2, ', ', '') . " €";
}
