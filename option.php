<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $e = 1; ?>
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>設定</span>
        </div>
      </div>
    </header>

    <div class="main-contents">

      <div class="op-vis">
        <span class="op-des">
          データ
        </span>
      </div>
      <div class="option">
        <div class="op-box main-block">
          <a href="treasurer.php">お会計</a>
        </div>
        <div class="op-box main-block">
          <a href="menu_add.php">メニューの追加</a>
        </div>
        <div class="op-box main-block">
          <a href="menu_delete.php">メニューの削除</a>
        </div>
        <div class="op-box main-block">
          <a href="statistics.php">統計</a>
        </div>
      </div>

      <div class="op-vis">
        <span class="op-des">
          ユーザー
        </span>
      </div>
      <div class="option">
        <div class="op-box main-block">
          <a href="#over-1">ログアウト</a>
        </div>
      </div>

        

<div class="action-seat" id="over-1">
    <a href="#over-1"></a>
</div> 
<div class="choise" id="over-2">
    <div class="choise_in">
        <div class="ac-top">
            <div class="ac-1">
                ログアウトしても<br>
                よろしいですか
            </div>
        </div>
        <div class="ac-bottom">
            <div class="ac-2 main-block">
                <a href="#">キャンセル</a>
            </div>
            <div class="ac-3 ac3-b main-block">
                <a href="logout.php">はい</a>
            </div>
        </div>
    </div>
</div>
        
        
</div>

<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>