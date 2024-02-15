<?php
// google : php fix cors header
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");

$data = [
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat',
];

echo json_encode($data);

?>