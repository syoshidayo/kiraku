<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $e = 1; ?>
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>お会計</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="option.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents">

        <div class="menu-block">
            <a href="treasurer_check.php">
              <div class="menu-box wrapper wrap">
                <div class="menu-table">
                    <div>A</div>
                </div>
                <div class="menu-cos">
                    <div><span class="number">2</span>名</div>
                </div>
                <div class="menu-count">
                    <div><span class="number">3000円</span></div>
                </div>
              </div>
            </a>
        </div>
        
        <div class="menu-block">
            <a href="treasurer_check.php">
              <div class="menu-box wrapper wrap">
                <div class="menu-table">
                    <div>A</div>
                </div>
                <div class="menu-cos">
                    <div><span class="number">2</span>名</div>
                </div>
                <div class="menu-count">
                    <div><span class="number">4000円</span></div>
                </div>
              </div>
            </a>
        </div>
        
    </div>
    
    
<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
