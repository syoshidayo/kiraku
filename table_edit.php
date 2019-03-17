<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $a = 1; ?>
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>テーブル編集</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="order.php">完了</a>
      </div>
    </header>
    
    <div class="main-contents">

        <div class="main-block">
            <a href="table_edit_more.php">
              <div class="menu-box wrapper wrap" data-url="order_table">
                <div class="menu-table">
                    <div>A</div>
                </div>
                <div class="menu-cos">
                    <div><span class="number">2</span>名</div>
                </div>
                <div class="menu-count">
                    <div>残り<span class="number">2</span>品</div>
                </div>
              </div>
            </a>
        </div>

    </div>

<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
