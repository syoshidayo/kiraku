<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>キャッシュミー</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/parts.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/toolbar.css">
  <link rel="stylesheet" type="text/css" href="css/order.css">
  <link rel="stylesheet" type="text/css" href="css/calendar.css">
</head>
<?php
error_reporting(0);
?>

<?php
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
?>

<?php include ('function.php'); ?>



<?php

$SqlRes = NGO('SELECT * FROM `order`');
while ($row = $SqlRes->fetch(PDO::FETCH_ASSOC)) {
    $unko[] = $row;
    $manko = $row['menu'];
    $sqlunko = NGO("select * from menu where id = '$manko'");
    $benki = $sqlunko->fetch(PDO::FETCH_ASSOC);
    $pantu[] = $benki['menu_name']; 
    $seki = $row['table_id'];
    $kazu_d = $row['menu_order'];
    

}

?>

<?php
//出してないメニューの数を摘出
$SqlRes = NGO('SELECT * FROM `order` where finished = 0');
while ($row = $SqlRes->fetch(PDO::FETCH_ASSOC)) {
   $Notfinished[] = $row;
}
//まぁ関数見て。
$cnt_drink = NGOpro("ドリンク");
$cnt_yourei = NGOpro("要冷");
$cnt_kitchen = NGOpro("キッチン");

//運んでない料理のデータを持ってくる

$drinks= zetu_NGO("ドリンク");
$youreis= zetu_NGO("要冷");
$kitchens= zetu_NGO("キッチン");

?>


