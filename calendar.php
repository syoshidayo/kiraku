<?php
$_SESSION['year'] = date("Y");
$_SESSION['month'] = date("m");
$year = $_SESSION['year'];
$month = $_SESSION['month'];
 
$start_week = date("N", mktime(0, 0, 0,$month,1,$year));//mktimeで曜日を取得 
 
if ($start_week != 1){//月曜始まりでなければ空セル挿入
   for($i=2 ; $i<=$start_week ; $i++){
   echo '<td class="no-day"> </td>';
   $fold++;
  }
}
 
for ($day = 1; checkdate($month, $day, $year); $day++ ){//checkdate関数で
 echo '<td class="day"><span class="x-day">'.$day.'</span><span class="y-day">1件</span></td>';//日付が存在しなくなるまでforで回す
   $fold++;
      if ($fold ==7){
      echo "</tr><tr>";//<tr>挿入で折り返し
      $fold =0;//折り返しカウンタリセット
  }
}
 
if ($fold!=0){//日曜終りでなければ空セル挿入
    while ($fold<7){
    echo '<td class="no-day"> </td>';
    $fold++; 
  } 
}
?>