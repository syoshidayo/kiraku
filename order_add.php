
<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<?php
//function.php参照。メニューを取り出してる
$saradas = MENU("サラダ");
?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>A(2名)注文</span>
        </div>
      </div>
      <div class="left-menu menu-block">
          <a href="#over-1">中止</a>
      </div>
    </header>
    
    <div class="main-contents">

        <form>
            <div class="order-pos">
              <div class="order-con">
                <label class="order-label">
                  <input type="radio" name="entryPlan" value="hoge1" onclick="entryChange1();" checked="checked" />
                    <div class="order-section">料理</div>
                  </label>
                <label class="order-label">
                  <input type="radio" name="entryPlan" value="hoge2" onclick="entryChange1();" />
                    <div class="order-section">ドリンク</div>
                  </label>
                  <div class="order-kasen"></div>
              </div>
            </div>
          <?php include ('order_food.php'); ?>
          <?php include ('order_drink.php'); ?>
        </form>
        
    </div>

    <div class="tool-next main-block">
    <a href="javascript:form1.submit()">注文を確定</a>
    </div>
    
    
<div class="action-seat" id="over-1">
    <a href="#over-1"></a>
</div>  
 
<div class="choise" id="over-2">
    <div class="choise_in">
        <div class="ac-top">
            <div class="ac-1">
                オーダーの登録を
                <br>中止しますか
            </div>
        </div>
        <div class="ac-bottom">
            <div class="ac-2 main-block">
                <a href="#">キャンセル</a>
            </div>
            <div class="ac-3 ac3-b main-block">
                <a href="order.php">はい</a>
            </div>
        </div>
    </div>
</div>
<form  method="post" name="form1" action = test.php>
<div class="menu-seat" id="f1">
    <div class="menu-seat_in menu-block">
        <a href="#" class="close-bu">×</a>
        
        
        <?php 
        $i= 0;
        foreach($saradas as $sarada){ 
            //2列に並べるためのif文
            if($i % 2 == 0){ ?>
           <div class="order-card-block wrapper">
            <?php } ?>
            <div class="order-card2 menu-block">
           
                <button onclick="countUpA<?php echo $i ?>();" class="counter"><?php echo $sarada['menu_name'] ?></button>                
                <!-- count[]は商品の個数。既存のJSだと組み込めない-->
                <input type = "hidden" name = "count[]" value ="7" >
                <!-- id[]は商品のIDを格納 -->
                <input type = "hidden" name = "id[]" value ="<?php echo $sarada['id'] ?>" >
                
                <button onclick="countDownA<?php echo $i ?>();" class="mainasu">ー</button>
            </div>

            <?php 
            //2列に並べるためのif文
            if($i % 2 == 1){ ?>
                </div>
            <?php } ?>
            <?php $i = $i+1; ?>
        <?php } ?>
        
        </div>
    
</div>
    
</form>
    
    
    
    
<?php include ('tscript.php'); ?>
</body>
</html>
