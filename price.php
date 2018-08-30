<?php
require __DIR__ . '/vendor/autoload.php';

$lastYear = [
    6345.75,
    9839.45,
    7134.60,
    9479.50,
    9928.00,
    8652.00,
    7658.40,
    10245.40,
    7889.40,
    3892.40,
    3638.40,
    2339.40,
];

$thisYear = [
    6145.75,
    6895.00,
    3434.00,
    9349.50,
    9478.60,
    7652.80,
    4758.40,
    10945.40,
    3689.40,
    8992.40,
    7588.40,
    2239.40,
];

$profit = collect($thisYear)->zip($lastYear)->map(function($monthly){
    return $monthly->first() - $monthly->last();
});

/*foreach ($thisYear as $key => $monthly) {
    $profit[] = $monthly - $lastYear[$key];
}*/

dd($profit);











