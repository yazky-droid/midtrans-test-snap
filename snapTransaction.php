<?php

require 'vendor/autoload.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-5mpCA2qdvy9vAAGJl1bHIQGr';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;
 
$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
    'customer_details' => array(
        'first_name' => 'Yazky',
        'last_name' => 'Maulana',
        'email' => 'yazz.maul@example.com',
        'phone' => '08111222333',
    ),
);
 
//Ini dapetin token dari midtrans
// $snapToken = \Midtrans\Snap::getSnapToken($params);
// echo $snapToken;

// Ini redirect URL, jadi sudah dibuatkan front pagenya sama midtrans
 $snapUrlRedirect = \Midtrans\Snap::createTransaction($params)->redirect_url;
 echo $snapUrlRedirect;