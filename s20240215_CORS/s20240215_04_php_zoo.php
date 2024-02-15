<?php
// php fix CORS header
// 不論來自任何來源（*），都允許通過跨來源資源共享（CORS）機制訪問這個資源。
// 換句話說，這樣設置的標頭允許來自任何網域的瀏覽器進行跨網域的請求。
header('Access-Control-Allow-Origin: *');

// php curl get程式碼

//1. init curl
$ch = curl_init();
//2. curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://data.taipei/api/v1/dataset/5048d475-7642-43ee-ac6f-af0a368d63bf?scope=resourceAquire");
//設定AGENT
// curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回
$result = curl_exec($ch);
//3. 關閉連線
curl_close($ch);



?>