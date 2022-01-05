<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>
      合約資訊管理系統
   </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
   <link rel="stylesheet" href="./assets/style/bootstrap.css">
   <link rel="stylesheet" href="./assets/style/all.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-dark">
<?php
    $password=""; $checkpassword="";
    if ( isset($_POST["password"]) )
      $password = $_POST["password"];
    if ( isset($_POST["checkpassword"]) )
      $checkpassword = $_POST["checkpassword"];
    $user = $_COOKIE["member"];
    
    $submit = @$_POST["check"];

    if ($submit == "確認") {
      if (strlen($password) >= 6 && $password == $checkpassword ){
        $sql_set_password = "UPDATE account SET password = '$password', First_time_login = 0  WHERE account ='$user'";
        mysqli_query(mysqli_connect("localhost","root","1234","network_security"), $sql_set_password);
        mysqli_close(mysqli_connect("localhost","root","1234","network_security"));
        echo "<center><font color='Green'>";
        echo "密碼更改成功!<br/>";
        echo "</font>";
      }else{
        echo "<center><font color='red'>";
        echo "密碼長度錯誤或再次輸入錯誤!<br/>";
        echo "</font>";
      }
    }
    
?>
<form action="firstloginWithUI.php" method="post" >
    <div align="center" style="background-color:#00000000;padding:10px;margin-bottom:5px;">
    <h1 ><font color='green'><?php print($user) ?><br/>第一次登入更改密碼 </font></h1>
    <div class="container-fluid">
      <div class="col-4 position-absolute top-50 start-50 translate-middle">
         <div class="card">
            <div class="card-body">
               <h1 class="h4 card-text text-center mb-5">控制人民之統一天下</h1>
               <form action="loginWithUI.php" method="post">
                <div class="mb-5">
                    <label for="password" class="form-label fw-bold">輸入新密碼:</label>
                    <input type="password" class="form-control border border-dark" name="password" id="password" placeholder="輸入新密碼" required>
                  </div>
                  <div class="mb-2">
                    <label for="password" class="form-label fw-bold">再次輸入密碼: </label>
                    <input type="password" class="form-control border border-dark" name="checkpassword" id="password" placeholder="再次輸入密碼" required>
                  </div>
                  <div class="d-flex justify-content-end">
                    <input class="btn btn-primary me-3" type="submit" name="check" value="確認"/>
                    <input class="btn btn-primary" type="button" value="回到登入頁面" onclick="location.href='loginWithUI.php'">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <script src="./assets/js/vendors.js"></script>
   <script src="./assets/js/all.js"></script>
</body>

</html>