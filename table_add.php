<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<?php $a = 1; ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>テーブル作成</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="order.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents">

        <div class="add-block add-table">
          <table>
              <tr>
                <th>テーブル</th>
                <td>A</td>
              </tr>
              <tr>
                <th>人数</th>
                <td>2</td>
              </tr>
              <tr>
                <th>子供</th>
                <td>1</td>
              </tr>
          </table>
        </div>
        
        <div class="decision-block wrapper">
            <div class="back-bu main-block">
                <a href="order.php">戻る</a>
            </div>
            <div class="next-bu main-block">
                <a href="order.php">決定</a>
            </div>
        </div>
        
    </div>



<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
