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

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price'], 500); // 500 is the initial value
//initially the 1st iteration, the sum will equal to nothing or null, but we can customize it by passing 3rd arg as the initial value

echo $total;