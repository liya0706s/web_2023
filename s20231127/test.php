<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd 函數，以易讀的格式打印複雜數據結構。
// 它使用 <pre> 標籤將數據格式化，並使用 print_r 函數打印內容。

$data = [
    [
        'name' => 'amy',
        'mobile' => '0911-111-111',
        'price' => 100
    ],
    [
        'name' => 'bob',
        'mobile' => '0922-222-222',
        'price' => 200
    ]
];

// $data 陣列：
// 兩個元素的多維關聯陣列，每個元素都包含 'name'、'mobile' 和 'price' 三個鍵值對，表示不同的資料項目。

$sum = 0;
foreach($data as $key => $value){
    // dd($key);
    // dd($value['price']);
    $sum=$sum+$value['price'];
}

dd($sum);
// dd($data);