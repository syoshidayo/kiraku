<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $d = 1; ?>
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>キッチン</span>
        </div>
      </div>
    </header>
    
    <div class="main-contents">
        <?php 
            foreach($kitchens as $kitchen){
            ?>
        <div class="menu-block">
            <a href="#over-1">
              <div class="menu-box wrapper wrap">                  
                <div class="menu-table2">
                    <div><?php echo $kitchen["table_number"]; ?></div>
                </div>
                <div class="menu-cos2">
                    <div><?php echo $kitchen["menu_name"]; ?></div>
                </div>
                <div class="menu-count2">
                    <div>x<span class="number"><?php echo $kitchen["menu_order"]; ?></span></div>
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
