<?php 
//配列で受け取ってる
$kosu= $_POST["count"];

$ids = $_POST["id"];

$kosunum = count($kosu);

    for ($i = 0; $i < $kosunum; ++$i) {
        
        if($kosu[$i] != 0){
            //0個以上注文した場合注文するSQL文を発行する
            NGO("注文のSQL文");
        }
    }
echo $unko[0];
echo $unko[1];
?>