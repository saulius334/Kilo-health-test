<?php


spl_autoload_extensions('.php');
spl_autoload_register();

use App\Model\Offer;


$data = [
    'offerId' => 123,
    'productTitle' => 'Qwerty 456',
    'vendorId' => 789,
    'price' => 100.99,
    'whatever' => false,
];

$order = (new Offer)->load($data);

assert($order->getVendorId() == $data['vendorId'], 'vendor ID is loaded');
assert($order->getPrice() == $data['price'], 'price is loaded');

$order->load([
    'price' => $newPrice = -9.87,
    'offerId' => 654,
    'todo' => 'nothing',
]);

assert($order->getVendorId() == $data['vendorId'], 'vendor ID is the same');
assert($order->getPrice() == $newPrice, 'price is new');

echo 'All tests passed', PHP_EOL;