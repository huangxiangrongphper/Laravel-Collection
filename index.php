<?php
require __DIR__ . '/vendor/autoload.php';

$orders = [
    [
        'date'            => '2015-12-26',
        'supplier'        => 'ACME',
        'item_code'       => 'IPHONE_6S',
        'item_unit_price' => 799.0,
        'qty'             => 1,
        'customer_name'   => 'Andy',
    ],
    [
        'date'            => '2015-12-26',
        'supplier'        => 'ACME',
        'item_code'       => 'DVD',
        'item_unit_price' => 9.8,
        'qty'             => 5,
        'customer_name'   => 'Andy',
    ],
    [
        'date'            => '2015-12-25',
        'supplier'        => 'FOOBAR',
        'item_code'       => 'IPOD',
        'item_unit_price' => 129.9,
        'qty'             => 3,
        'customer_name'   => 'Andy',
    ],
    [
        'date'            => '2015-12-25',
        'supplier'        => 'ACME',
        'item_code'       => 'IMAC_PETINA_2015',
        'item_unit_price' => 2999.9,
        'qty'             => 1,
        'customer_name'   => 'Andy',
    ],
    [
        'date'            => '2015-12-25',
        'supplier'        => 'ACME',
        'item_code'       => 'DVD',
        'item_unit_price' => 9.8,
        'qty'             => 2,
        'customer_name'   => 'Andy',
    ],
    [
        'date'            => '2015-12-25',
        'supplier'        => 'FOOBAR',
        'item_code'       => 'IPHONE_6S',
        'item_unit_price' => 799.0,
        'qty'             => 2,
        'customer_name'   => 'Mandy',
    ],
    [
        'date'            => '2015-12-25',
        'supplier'        => 'ACME',
        'item_code'       => 'DVD',
        'item_unit_price' => 9.8,
        'qty'             => 2,
        'customer_name'   => 'Mandy',
    ],
    [
        'date'            => '2015-12-25',
        'supplier'        => 'ACME',
        'item_code'       => 'CUPHOLDER',
        'item_unit_price' => 3.8,
        'qty'             => 3,
        'customer_name'   => 'Mandy',
    ],
];

$result = collect($orders)->groupBy('date')->map(function($item){
    return $item->sum(function ($item){
        return ($item['item_unit_price'] * $item['qty']);
    });
});

dd($result);











