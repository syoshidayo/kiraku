<?php

//データベース接続
$server = "localhost";
$userName = "root";
$password = "php114514";
$dbName = "kiraku";

$mysqli = new mysqli($server, $userName, $password,$dbName);

if ($mysqli->connect_error){
    echo $mysqli->connect_error;
    exit();
}else{
    $mysqli->set_charset("utf-8");
}

$sql = "select * from `menu`";

$result = $mysqli -> query($sql);

//クエリー失敗
if(!$result) {
    echo $mysqli->error;
    exit();
}

//レコード件数
$row2_count = $result->num_row2s;

//連想配列で取得
while($row2 = $result->fetch_array(MYSQLI_ASSOC)){
    $row2s[] = $row2;
}

//結果セットを解放
$result->free();

// データベース切断
$mysqli->close();

?>
