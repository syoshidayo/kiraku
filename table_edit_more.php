<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<?php $a = 1; ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>A(2名)編集</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="table_edit.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents">

        <div class="add-block">
          <table>
              <tr>
                <th>オレンジジュース</th>
                <td>1</td>
              </tr>
              <tr>
                <th>鳥の唐揚げ</th>
                <td>2</td>
              </tr>
              <tr>
                <th></th>
                <td></td>
              </tr>
          </table>
        </div>
        
        <div class="decision-block wrapper">
            <div class="back-bu main-block">
                <a href="table_edit.php">戻る</a>
            </div>
            <div class="next-bu main-block">
                <a href="order.php">決定</a>
            </div>
        </div>
        
        <div class="delete-block">
            <div class="delete-bu main-block">
                <a href="table_delete.php">削除する</a>
            </div>
        </div>
        
    </div>



<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>
