  <div class="container-fluid toolbar bg-light">
    <div class="row">
    
    <div class="tool-block">
      <a href="order.php" class="tool-url"><img class="tool-img" src="img/order<?php if($a != '0') {echo"2";} ?>.svg"></a>
      <div class="tool-alert
        <?php 
        $cnt_all = count($Notfinished);
        if($cnt_all == '0'){
            echo "none-block";
        }?>
        ">
        <?php 
        echo $cnt_all;
        ?>
        </div>
    </div>
        
        

    <div class="tool-block">
      <a href="drink.php" class="tool-url"><img class="tool-img" src="img/drink<?php if($b != '0') {echo"2";} ?>.svg"></a>
      <div class="tool-alert
        <?php 
        
        if($cnt_drink == '0'){
            echo "none-block";
        }?>
        ">
        <?php 
        echo $cnt_drink;
        ?>
        </div>
    </div>

       
        

    <div class="tool-block">
      <a href="yourei.php" class="tool-url"><img class="tool-img" src="img/yourei<?php if($c != '0') {echo"2";} ?>.svg"></a>
      <div class="tool-alert
        <?php 
        if($cnt_yourei == '0'){
            echo "none-block";
        }?>
        ">
        <?php 
        echo $cnt_yourei;
        ?>
        </div>
    </div>
        
        

    <div class="tool-block">
      <a href="kitchen.php" class="tool-url"><img class="tool-img" src="img/kitchen<?php if($d != '0') {echo"2";} ?>.svg"></a>
      <div class="tool-alert
        <?php 
        if($cnt_kitchen == '0'){
            echo "none-block";
        }?>
        ">
        <?php 
        echo $cnt_kitchen;
        ?>
        </div>
    </div>
        


    <div class="tool-block">
        <a href="option.php" class="tool-url"><img class="tool-img" src="img/option<?php if($e != '0') {echo"2";} ?>.svg"></a>
    </div>

          
        
        
    </div>
  </div>














