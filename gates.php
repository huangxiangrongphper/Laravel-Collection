<?php
require __DIR__ . '/vendor/autoload.php';

$gates = [
    'BaiYun_A_A17',
    'BeiJing_J7',
    'ShuangLiu_k203',
    'HongQiao_A157',
    'A2',//['A2']
    'BaiYun_B_B230'
];

$boards = collect($gates)->map(function($gate){
    return collect(explode('_',$gate))->last();
})->toArray();

dd($boards);


//上面的数组转换为下面的形式
$boards = [
    'A17',
    'J7',
    'K203',
    'A2',
    'B230'
];
