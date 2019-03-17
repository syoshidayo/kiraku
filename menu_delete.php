<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>メニューの削除</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="option.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents2">

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
          <?php include ('delete_food.php'); ?>
          <?php include ('delete_drink.php'); ?>
        </form>
    </div>
    

<div class="menu-seat" id="f1">
    <div class="menu-seat_in menu-block">
        <a href="#menu" class="close-bu">×</a>
        <div class="order-card-block wrapper">
            <div class="delete-card menu-block">
                <a href="#over-1">メニュー名</a>              
            </div>
            <div class="delete-card menu-block">
                <a href="#over-1">メニュー名</a>              
            </div>
        </div>
    </div>
</div>
    

<div class="action-seat" id="over-1">
    <a href="#over-1"></a>
</div>  
<div class="choise" id="over-2">
    <div class="choise_in">
        <div class="ac-top">
            <div class="ac-1">
                メニュー名
                <br>を削除しますか
            </div>
        </div>
        <div class="ac-bottom">
            <div class="ac-2 main-block">
                <a href="#">キャンセル</a>
            </div>
            <div class="ac-3 ac3-b main-block">
                <a href="option.php">はい</a>
            </div>
        </div>
    </div>
</div>
    
    
    
    

    


<?php include ('tscript.php'); ?>
</body>
</html>
