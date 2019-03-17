<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<?php
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $nedan = $_POST['nedan'];
  $kategori = $_POST['kategori'];
  $gurupu = $_POST['gurupu'];
  NGO("INSERT INTO `menu`(`id`, `menu_name`, `menu_price`, `menu_category`, `menu_group`) VALUES (NULL,'$name','$nedan','$kategori','$gurupu')");
  header('Location: option.php');
}

?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>メニューの追加</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="option.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents2">
        
        <div class="menu-touroku">
        <form method="POST" action="menu_add.php">

              <div class="form-group">
                <label>menu</label>
                <input type="text" class="form-control" placeholder="メニュー名" name = "name">
              </div>

              <div class="form-group">
                <label>price</label>
                <input type="text" class="form-control" placeholder="値段"name = "nedan">
              </div>

              <div class="form-group">
                <label>category</label>
                <input type="text" class="form-control" placeholder="カテゴリー"name = "kategori">
              </div>

              <div class="form-group">
                <label>group</label>
                <input type="text" class="form-control" placeholder="グループ"name = "gurupu">
              </div>
                
              <button type="submit" class="back-bu">登録</button>
            </form>
        </div>
        
    </div>



<?php include ('tscript.php'); ?>
</body>
</html>
