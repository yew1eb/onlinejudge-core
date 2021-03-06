﻿<?php
  require_once("db.class.php");
  $dbObj = new ms_new_mysql("210.43.79.196", "root", "123456", "judge", "", "utf-8", "0");
  $sql="SELECT * FROM `solution` WHERE problem_id>= 1000  ORDER BY `solution_id` DESC LIMIT 20";
  $res = $dbObj->query($sql);
  $rows_cnt = mysql_num_rows($res);
  //echo '<pre>'.print_r(mysql_fetch_array($res)).'</pre>';
  $RESULT = Array(
		0 => "Accepted",
		1 => "Presentation Error",
		2 => "Time Limit Exceeded",
		3 => "Memory Limit Exceeded",
		4 => "Wrong Answer",
		5 => "Runtime Error",
		6 => "Output Limit Exceeded",
		7 => "Complie Error",
		8 => "System Error",
		9 => "Security Error",
		10 => "Unknown Error",
		11 => "Waiting",
		12 => "Running"
  );

  $LANG = Array(
		1 => "GCC",
 		2 => "G++",
		3 => "Pascal",
		4 => "Java",
		5 => "Python"	 
  );

  $view_status = Array();
  for($i=0; $i<$rows_cnt; $i++) {
    $row = mysql_fetch_array($res);
    $view_status[$i][0] = $row['solution_id'];
    $view_status[$i][1] = $row['problem_id'];
    $view_status[$i][2] = $row['user_id'];
    $view_status[$i][3] = $RESULT[ $row['result'] ];
    $view_status[$i][4] = $row['time'];
    $view_status[$i][5] = $row['memory'];
    $view_status[$i][6] = $LANG[ $row['language'] ];
    $view_status[$i][7] = '<a href=viewcode.php?sid='.$row['solution_id'].'>'.$row['code_length'].'</a>';
    $view_status[$i][8] = $row['in_date'];
  }
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AcmSuperX</title>
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
</head>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">AcmSuperX</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="problemset.php">问题</a></li>
            <li class="active"><a href="status.php">状态</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>编号</th>
          <th>题号</th>
          <th>用户</th>
          <th>结果</th>
          <th>耗时</th>
          <th>内存</th>
          <th>语言</th>
          <th>长度</th>
          <th>时间</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $cnt=0;
        foreach($view_status as $row){
          if ($cnt) 
            echo "<tr class='oddrow'>";
          else
            echo "<tr class='evenrow'>";
          foreach($row as $table_cell){
            echo "<td>";
            echo "\t".$table_cell;
            echo "</td>";
          }
          echo "</tr>";
          $cnt=1-$cnt;
        }
      ?>
      </tbody>
      </table>
    </div>

	<?php require_once("footer.php"); ?>

  	<script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>
