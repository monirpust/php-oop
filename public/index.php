<?php
//classes and objects
require_once '../Transaction.php';
//method chaining
$transaction1 = (new Transaction(100, "Transactin 1"))
            ->addTax(8)
            ->applyDiscount(10);
            
$amount=$transaction1->getAmount();

// $transaction->addTax(8);
// $transaction->applyDiscount(10);
$transaction1 = null;
var_dump($amount);

echo 'oop php<br>';