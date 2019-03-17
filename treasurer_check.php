<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>A(2名)お会計</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="treasurer.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents2">

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
          </table>
        </div>
        
          <table class="goukei">
              <tr>
                <th>合計</th>
                <td>111111円</td>
              </tr>
          </table>
        
        <div class="decision-block wrapper">
            <div class="back-bu main-block">
                <a href="treasurer.php">戻る</a>
            </div>
            <div class="next-bu main-block">
                <a href="option.php">決定</a>
            </div>
        </div>
        
    </div>



<?php include ('tscript.php'); ?>
</body>
</html>
