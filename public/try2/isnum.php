<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
if(isset($_GET['indata'])==false){
  die("何か入力してください");
}

$indata = filter_input(INPUT_GET,'indata');

if(mb_ereg('^[0-9]+$',$indata)==false){
  die("番号を入力してください");
}

echo "入力された数字は： " . $indata;
?>
    </h2>
    </div>
  </body>
</html>
