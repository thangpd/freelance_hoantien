<?php /* Template Name: cashback */ ?>


<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.accesstrade.vn/v1/orders?since=2019-01-01T00:00:00Z&until=2030-01-01T00:00:00Z&limit=9999999');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Token DhWCF1DsWClYr4ApYrsH5XpdScuxwj7P',
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>

