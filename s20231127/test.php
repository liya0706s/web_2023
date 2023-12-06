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
    $sum=$sum+$value['price'];
}

// foreach 循環：遍歷 $data 陣列中的每個元素。
// 在每次迭代中，它將 'price' 鍵對應的值添加到 $sum 變數中。!!!
// 這樣，最終 $sum 將包含所有元素的 'price' 值的總和。

dd($sum);

// 最後的 dd($sum)：
// 調用了先前定義的 dd 函數，並將 $sum 作為參數傳遞給該函數。
// 這樣做的效果是以易讀的格式打印出 $sum 的值，顯示所有元素 'price' 的總和。