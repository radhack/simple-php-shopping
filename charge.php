<?php

require_once('./config.php');

$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];
$amount = $_POST['amount'];
//echo "$amount here";

$customer = \Stripe\Customer::create([
            'email' => $email,
            'source' => $token,
        ]);

$charge = \Stripe\Charge::create([
            'customer' => $customer->id,
            'amount' => $amount,
            'currency' => 'usd',
        ]);

echo "<h1>Successfully charged $";
  $decimal_amount = $amount/100;
  $str_amount = (string)$decimal_amount;
echo "$str_amount, and the Transaction ID was $charge->id</h>";
?>