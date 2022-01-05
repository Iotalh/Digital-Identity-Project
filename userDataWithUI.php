<?php
require_once('conn.php');
//User_id是變數
$User_id =  $_COOKIE["uid"];
$sql_query_name = "SELECT * FROM user WHERE User_id = '{$User_id}'";
$result_name = $db_link->query($sql_query_name);
$id = array();
$userid = array();
$name = array();
$gender = array();
$birthday = array();
$phone = array();
$parent = array();
$couple = array();
$address = array();
$identify_id = array();
$ct = 0;
while ($row_result_name = $result_name->fetch_assoc()) {
    $userid[$ct] = $row_result_name["User_id"];
    $name[$ct] = $row_result_name["User_name"];
    $gender[$ct] = $row_result_name["user_gender"];
    $birthday[$ct] = $row_result_name["user_birth"];
    $phone[$ct] = $row_result_name["user_phone"];
    $parent[$ct] = $row_result_name["user_parent"];
    $couple[$ct] = $row_result_name["user_spouse"];
    $address[$ct] = $row_result_name["user_addr"];
    $identify_id[$ct] = $row_result_name["user_idnum"];
    $ct++;
}
?>
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

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="login.html">資訊管理系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="contractList.html">合約列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="userInfo.html">個人資訊</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <img src="https://fakeimg.pl/48x48" class="rounded-circle" alt="User image">
                    <p class="my-auto ms-3 me-8">林璟翔</p>
                    <button type="button" class="btn btn-outline-primary">登出</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-4">
        <div class="card">
            <img src="https://fakeimg.pl/1400x250" class="card-img-top" alt="bg img">
            <div class="card-body d-flex align-items-center">
                <img class="border border-5 border-light rounded-circle mt-15" src="https://fakeimg.pl/256x256" alt="user icon">
                <h2 class="card-title ms-4"><?php echo "$name[0]"?></h2>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-6">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title rounded-pill bg-success text-light px-3 py-1 mx-auto">第一層級資料</h5>
                        <table class="table table-hover table-borderless mt-3 mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">性別</th>
                                    <td><?php echo "$gender[0]"?></td>
                                </tr>
                                <tr>
                                    <th scope="row">生日</th>
                                    <td><?php echo "$birthday[0]"?></td>
                                </tr>
                                <tr>
                                    <th scope="row">電話</th>
                                    <td><?php echo "$phone[0]"?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title rounded-pill bg-warning text-dark px-3 py-1 mx-auto">第二層級資料</h5>
                        <table class="table table-hover table-borderless mt-3 mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">父</th>
                                    <td><?php echo "$parent[0]"?></td>
                                </tr>
                                <tr>
                                    <th scope="row">母</th>
                                    <td><?php echo "$parent[0]"?></td>
                                </tr>
                                <tr>
                                    <th scope="row">配偶</th>
                                    <td><?php echo "$couple[0]"?></td>
                                </tr>
                                <tr>
                                    <th scope="row">住址</th>
                                    <td><?php echo "$address[0]"?></td>
                                </tr>
                                <tr>
                                    <th scope="row">身分證字號</th>
                                    <td><?php echo "$identify_id[0]"?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/vendors.js"></script>
    <script src="./assets/js/all.js"></script>
</body>

</html>