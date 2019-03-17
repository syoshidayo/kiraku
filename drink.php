<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<?php
?>
<body>
<?php $b = 1; ?>
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>ドリンク</span>
        </div>
      </div>
    </header>
    
    <div class="main-contents">

        <?php 
        foreach($drinks as $drink){
        ?>
        <div class="menu-block">
            <a href="#over-1">
              <div class="menu-box wrapper wrap">                  
                <div class="menu-table2">
                    <div><?php echo $drink["table_number"]; ?></div>
                </div>
                <div class="menu-cos2">
                    <div><?php echo $drink["menu_name"]; ?></div>
                </div>
                <div class="menu-count2">
                    <div>x<span class="number"><?php echo $drink["menu_order"]; ?></span></div>
                </div>
              </div>
            </a>
        </div>
        <?php 
        } 
        ?>
        

        
    </div>
    

    
    
    
    
    
<div class="action-seat" id="over-1">
    <a href="#over-1"></a>
</div>  
 
<div class="choise" id="over-2">
    <div class="choise_in">
        <div class="ac-top">
            <div class="ac-1">
                鳥の唐揚げ
                <br>を削除しますか
            </div>
        </div>
        <div class="ac-bottom">
            <div class="ac-2 main-block">
                <a href="#">キャンセル</a>
            </div>
            <div class="ac-3 main-block">
                <a href="#">削除</a>
            </div>
        </div>
    </div>
</div>
    
    



<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
