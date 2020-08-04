<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="desgin3.css">
    <title></title>
  </head>
  <body>
    <img src="koias-logo.png" alt="" width="100%" height="100" class="full-width">
    <h1>ログイン</h1>
    <form method="post">
      <p> password: <input type="password" name="pass"></p>
      <div><input type="submit" value="submit" class="button"></div>
    </form>
    <?php

      $pass = $_POST["pass"];
      if($pass === "tawakemacs"){
        header("location: http://172.16.16.7/team2/password_success.php");
      }elseif(!$pass){
      }else{
        header("location: http://172.16.16.7/team2/password_fault.php");
      }
    ?>
  </body>
