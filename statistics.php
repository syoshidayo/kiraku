<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>統計</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="option.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents2">

        <div class="container">
            aaa
        </div>

        <table class="calendar">
           <tr>
               <td class="week">月</td>
               <td class="week">火</td>
               <td class="week">水</td>
               <td class="week">木</td>
               <td class="week">金</td>
               <td class="week">土</td>
               <td class="week">日</td>
           </tr>

        <?php include ('calendar.php'); ?>

        </table>


    </div>



<?php include ('tscript.php'); ?>
</body>
</html>