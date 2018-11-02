<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_Z5hr6ARBo5stGCnzIxsfPe2q",
  "publishable_key" => "pk_test_9kdhLPQ2RswJiQpmdkEBU3YU",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>