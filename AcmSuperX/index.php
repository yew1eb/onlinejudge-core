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
            <li class="active"><a href="#">首页</a></li>
            <li><a href="problemset.php">问题</a></li>
            <li><a href="status.php">状态</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
				<h1>开发日志</h1>
				<hr />
				<h4>版本 V 0.0.1</h4>
				<h5>功能</h5>
				<ul>
					<li>支持 C, C++, Java, Python 提交</li>
					<li>使用ACE在线编辑器</li>
				</ul>
				<h5>其他</h5>
				<ul>
					<li>只使用了两张测试表 “solution”(soution_id,problem_id,user_id,time,memory,in_date, result,language,...) 和 “source_code”(solution_id, source)</li>
					<li>Web端（仅用于测试）使用Bootstrap和PHP</li>
					<li>判题端 开发平台linux(Ubuntu 15.04  64bit)， python实现守护进程与MySQL数据库交互，C语言实现判题核心</li>
				</ul>
		</div>
    </div>

	<?php require_once("footer.php"); ?>

  	<script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>
