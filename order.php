
<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $a = 1; ?>
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>注文</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="table_edit.php">編集</a>
      </div>
    </header>
    
    <div class="main-contents">

        <div class="menu-block">
            <a href="order_more.php">
              <div class="menu-box wrapper wrap">
                <div class="menu-table">
                    <div>A</div>
                </div>
                <div class="menu-cos">
                    <div><span class="number">2 </span>名</div>
                </div>
                <div class="menu-count">
                    <div>残り<span class="number">2</span>品</div>
                </div>
              </div>
            </a>
        </div>
        
        <div class="menu-block">
            <a href="order_more.php">
              <div class="menu-box wrapper wrap">
                <div class="menu-table">
                    <div>A</div>
                </div>
                <div class="menu-cos">
                    <div><span class="number">2 </span>名</div>
                </div>
                <div class="menu-count">
                    <div>残り<span class="number">2</span>品</div>
                </div>
              </div>
            </a>
        </div>
        
    
        
               

        


        

        
        
        

        
        
    </div>

<div class="add-bu shadow-sm">
    <a href="table_add.php">＋</a>
</div>

<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
