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
$name = filter_input(INPUT_GET,'username');
$address = filter_input(INPUT_GET,'useraddress');
$mail = filter_input(INPUT_GET,'usermail');

if(isset($name)==false){
  die("名前を入力してください");
}
if(isset($address)==false){
  die("住所を入力してください");
}
if(isset($mail)==false){
  die("メールアドレスを入力してください");
}

if (mb_strlen($name) > 20 || !preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z0-9\s]+$/u', $name)) {
  die("名前は20文字以内の日本語または英数字で入力してください。");
}
if (mb_strlen($address) > 50) {
  die("住所は50文字以内で入力してください。");
}
if (mb_strlen($mail) > 100 || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  die("正しいメールアドレス形式（100文字以内）で入力してください。");
}

echo "あなたが入力した値<br>";
echo "名前：" . $name . "<br>";
echo "住所：" . $address . "<br>";
echo "メールアドレス：" . $mail;
?>
    </h2>
    </div>
  </body>
</html>
