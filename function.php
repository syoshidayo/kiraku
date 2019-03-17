<?php
//データベース操作関数、SQL文を受け取る
function NGO($process) {
    include("mysqlenv.php");

    try {
        $dbh = new PDO($dsn, $USER, $PASS);
    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }
    $sql = $process;
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    return $stmt;
}

//運んでない料理の個数
function NGOpro($group) {
    include("mysqlenv.php");

    try {
        $dbh = new PDO($dsn, $USER, $PASS);
    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }
    $sql = ("SELECT COUNT(*) FROM `order` join `menu` where finished = 0 AND order.menu = menu.id AND menu.menu_group = '$group'");
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $result = $result['COUNT(*)'];
    return $result;
}


//運んでない料理データ
function zetu_NGO($group){
    include("mysqlenv.php");

    try {
        $dbh = new PDO($dsn, $USER, $PASS);
    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }
    $sql = ("SELECT * FROM `menu` JOIN `order` ON order.menu = menu.id where order.finished = 0 and menu.menu_group = '$group'");
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $Row[] = $row; 
    }
    return $Row;
}

//注文するときの料理データ
function MENU($group){
    include("mysqlenv.php");

    try {
        $dbh = new PDO($dsn, $USER, $PASS);
    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }
    $sql = ("SELECT * FROM `menu` WHERE menu_category = '$group'");
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $Row[] = $row; 
    }
    return $Row;
}

?>




