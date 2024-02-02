<?php

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// 先做一維陣列:
// $mobileArr=[
//     's1'=>'amy',
//     's2'=>'bob',
//     's3'=>'cat',
// ];

// print_r($mobileArr);
// dd($mobileArr);


$mobileArr = [
    [
        'id' => 1,
        'item' => 'iPhone10',
        'price' => 10000,
        'location' => ['台北']
    ],
    [
        'id' => 2,
        'item' => 'iPhone11',
        'price' => 20000,
        'location' => ['台北', '台中']

    ],
    [
        'id' => 3,
        'item' => 'iPhone12',
        'price' => 30000,
        'location' => ['高雄']

    ],
    [
        'id' => 4,
        'item' => 'iPhone13',
        'price' => 40000,
        'location' => ['台北', '台中', '高雄']

    ],
];

echo json_encode($mobileArr);
// PHP json_encode() function - encode an associative array into a JSON object
