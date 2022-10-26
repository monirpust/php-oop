<?php
//classes and objects
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Stripe/CustomerProfile.php';
//require_once '../PaymentGateway/Paddle/Transaction.php';
use PaymentGateway\Stripe\Transaction as StripeTransaction;
use PaymentGateway\Paddle\Transaction;

$stripeTransaction = new StripeTransaction();
$paddleTransaction = new Transaction();
var_dump($stripeTransaction, $paddleTransaction);

//method chaining
// $transaction1 = (new Transaction(100, "Transactin 1"))
//             ->addTax(8)
//             ->applyDiscount(10);
            
// $amount=$transaction1->getAmount();

// // $transaction->addTax(8);
// // $transaction->applyDiscount(10);
// $transaction1 = null;
// var_dump($amount);

echo 'oop php<br>';