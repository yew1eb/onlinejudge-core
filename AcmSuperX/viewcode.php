<?php
  require_once("db.class.php");
  $dbObj = new ms_new_mysql("210.43.79.196", "root", "123456", "judge", "", "utf-8", "0");
  $sql="SELECT source FROM `source_code` WHERE solution_id=".$_GET['sid'];
  $res = $dbObj->query($sql);
  //echo '<pre>'.print_r(mysql_fetch_array($res)).'</pre>';
  $source_code = mysql_fetch_array($res)[0];
  $source_code = htmlentities($source_code);
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
	<link href="static/css/prettify.css" rel="stylesheet" />
</head>

<body onload="prettyPrint()">
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
      	<pre class="prettyprint"><?=$source_code?></pre>
    </div>

	<script src="static/js/prettify.js"></script>
  	<script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>
