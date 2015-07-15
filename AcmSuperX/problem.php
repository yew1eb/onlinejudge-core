<?php 
  $pid = $_GET['pid'];
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
          <a class="navbar-brand" href="#">AcmSuperX</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">首页</a></li>
            <li class="active"><a href="problemset.php">问题</a></li>
            <li><a href="status.php">状态</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
      <h2 class="problem-title">A+B</h2>
      <dl class="problem-detail">
        <dt>题目描述</dt>
          <dd id="problem-desc">Calculate a + b </dd>
        <dt>输入</dt>
          <dd>The input will consist of a series of pairs of integers a and b,separated by a space, one pair of integers per line. </dd>
        <dt>输出</dt>
          <dd>For each pair of input integers a and b you should output the sum of a and b in one line,and with one line of output for each line in input.</dd>
        <dt>样例输入</dt>
          <dd><pre>1 5</pre></dd>
        <dt>样例输出</dt>
          <dd><pre>6</pre></dd>
        <dt>提示</dt>
          <dd></dd>
        <dt>来源</dt>
          <dd></dd>
      </dl>

      <form class="problem-submit" action="submit.php" method="post">
          <input class="hidden" name="pid" value="<?=$pid?>">
          <select name="language" class="select-lang">
              <option value="GCC" selected>GCC</option>
              <option value="G++" >G++</option>
              <option value="Java" >Java</option>
              <option value="Python" >Python</option>
          </select>
          <div id="editor"></div>
          <textarea class="hidden" name="code" id="code"></textarea>
          <br />
          <button type="submit" class="btn btn-success">提交</button>
      </form>

    </div>

	<!-- <?php require_once("footer.php"); ?> -->

    <script src="static/js/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    var mode = {
        'GCC'     :'ace/mode/c_cpp',
        'G++'     :'ace/mode/c_cpp',
        'Java'    :'ace/mode/java',
        'Python'  :'ace/mode/python'
      };  

      // http://ace.c9.io/#nav=howto 
      var editor = ace.edit("editor");
      editor.setTheme("ace/theme/tomorrow_night_eighties");
      editor.getSession().setMode(mode['GCC']);
      editor.getSession().setValue("//请在这里输入你的代码，^-^");
      editor.setShowPrintMargin(true);
      editor.setOption("minLines", 20);
      editor.setOption("maxLines", 500);
      document.getElementById('editor').style.fontSize='16px';

      var code = document.getElementById('code');
      editor.getSession().on('change', function () {
          code.value = editor.getSession().getValue();
      });
    </script>

  	<script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>
