<?php
require __DIR__ . '/vendor/autoload.php';

$orders = [[
    'id'            =>      1,
    'user_id'       =>      1,
    'number'        =>      '13908080808',
    'status'        =>      0,
    'fee'           =>      10,
    'discount'      =>      44,
    'order_products'=> [
        ['order_id'=>1,'product_id'=>1,'param'=>'6寸','price'=>555.00,'product'=>['id'=>1,'name'=>'蛋糕名称','images'=>[]]],
        ['order_id'=>1,'product_id'=>1,'param'=>'7寸','price'=>333.00,'product'=>['id'=>1,'name'=>'蛋糕名称','images'=>[]]],
    ],
]];

/*$price = 0 ;

foreach ($orders as $order) {
    foreach ($order['order_products'] as $order_product){
        $price += $order_product['price'];
    }
}
*/
/*dump(collect($orders)->flatMap(function($order){
    return $order['order_products'];
})->sum('price'));*/

/*dump(collect($orders)->pluck('order_products.*.price')->flatten(1)->sum());*/

/*dump(array_sum(data_get($orders, '*.order_products.*.price')));*/


dump(collect($orders)->pluck('order_products')->flatten(1)->sum('price'));
















