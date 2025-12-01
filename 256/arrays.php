<?php

require 'helpers.php';

// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

$invoiceItems = [
	['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
	['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
	['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
	['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
	['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price']);
//1st arg (passed value): $sum is the returned value of the previous iteration
//2nd arg (passed or captured value): $item is the current iteration value
// the 1st value from '$sum + $item['qty'] * $item['price']);' will be passed as the 1st value to the $sum arg in the callback 

echo $total;