﻿
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
            <li class="active"><a href="/problemset.php">问题</a></li>
            <li><a href="status.php">状态</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>题号</th>
          <th>标题</th>
          <th>正确/提交</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1000</td>
          <td><a href="problem.php?pid=1000">A+B</a></td>
          <td>0/0</td>
        </tr>
    </tbody>
    </table>
  </div>

	<?php require_once("footer.php"); ?>

  	<script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>
