<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $a = 1; ?>
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>A(2名)注文</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="order.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents">

      <div class="menu-box wrapper">
        <div class="order-menu">
            <div>唐揚げ</div>
        </div>
        <div class="order-count">
            <div>x<span class="number">10</span></div>
        </div>
      </div>
      <div class="menu-box wrapper">
        <div class="order-menu">
            <div>唐揚げ</div>
        </div>
        <div class="order-count">
            <div>x<span class="number">2</span></div>
        </div>
      </div>

    </div>

<div class="add-bu shadow-sm">
    <a href="order_add.php">＋</a>
</div>

<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
