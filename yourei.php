<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $c = 1; ?>
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
            <span>要冷</span>
        </div>
      </div>
    </header>
    
    <div class="main-contents">
        <?php 
            foreach($youreis as $yourei){
            ?>
        <div class="menu-block">
            <a href="#over-1">
              <div class="menu-box wrapper wrap">                  
                <div class="menu-table2">
                    <div><?php echo $yourei["table_number"]; ?></div>
                </div>
                <div class="menu-cos2">
                    <div><?php echo $yourei["menu_name"]; ?></div>
                </div>
                <div class="menu-count2">
                    <div>x<span class="number"><?php echo $yourei["menu_order"]; ?></span></div>
                </div>
              </div>
            </a>
        </div>
        <?php } ?>
    </div>

<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
