<?php
//dbs connect and get value
#$User_id = "U0001";
$User_id =  $_COOKIE["uid"];
$contract_userid = array();
$contract_comapnyid = array();
$contract = array();
$id = array();
$endDate = array();
$status = array();
$cnt = 0;
#require_once('conn.php');
include('conn.php');
$sql_query_name = "SELECT * FROM contract WHERE User_id = '{$User_id}'";
$result_name = $db_link->query($sql_query_name);
$detail_link = "document.location='detail.php'";

while ($row_result_name = $result_name->fetch_assoc()) {
    $contract_userid = $row_result_name['User_id'];
    $contract_comapnyid = $row_result_name['Company_id'];
    $endDate[$cnt] = $row_result_name["Contract_end_date"];
    $status[$cnt] = $row_result_name["Contract_avail"];
    $contract[$cnt] = $row_result_name["Contract_name"];
    $id[$cnt] = $row_result_name["Contract_level"];


    $cnt++;
}
setcookie("cpname", $contract_comapnyid, time() + (86400 * 30), "/"); // 86400 = 1 day 
?>
<?php
//cookie storge
for ($i = 0; $i < $cnt; $i++) {
    setcookie("contract_arr[$i]", $contract[$i], time() + (86400 * 30), "/"); // 86400 = 1 day
}
for ($i = 0; $i < $cnt; $i++) {
    setcookie("id_arr[$i]", $id[$i], time() + (86400 * 30), "/"); // 86400 = 1 day
}
for ($i = 0; $i < $cnt; $i++) {
    setcookie("date_arr[$i]", $endDate[$i], time() + (86400 * 30), "/"); // 86400 = 1 day
}
for ($i = 0; $i < $cnt; $i++) {
    setcookie("status_arr[$i]", $status[$i], time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>
<?php
// $User_id = "us12344";
$sql = "SELECT Company_name FROM company WHERE Company_id='{$contract_comapnyid}'";
$Company_info = $db_link->query($sql);
$cname = $Company_info->fetch_assoc();
$out_contract = array();
$out_date = array();
$out_status = array();
if (isset($_COOKIE["id_arr"])) {
    foreach ($_COOKIE["contract_arr"] as $name => $value)
        $out_contract[$name] = $value;
    foreach ($_COOKIE["date_arr"] as $name => $value)
        $out_date[$name] = $value;
    foreach ($_COOKIE["status_arr"] as $name => $value)
        $out_status[$name] = $value;
} else {
    echo "nothing";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["pri_id"])) {
        $id = (int)$_POST["pri_id"];
    }
    //echo $id;
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
            <a class="navbar-brand" href="userIndexWithUI.php">資訊管理系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="userIndexWithUI.php">合約列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userDataWithUI.php">個人資訊</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <img src="https://fakeimg.pl/48x48" class="rounded-circle" alt="User image">
                    <p class="my-auto ms-3 me-8"><?php echo $User_id ?></p>
                    <form action="loginWithUI.php"> <input type="submit" class="btn btn-outline-primary" value="登出" />
                </div>
            </div>
        </div>
    </nav>


    <?php
    for ($i = 0; $i < $cnt; $i++) {
        echo '<div class="modal fade" id="stop' . $i . '" tabindex="-1" aria-labelledby="stop' . $i . 'Label" aria-hidden="true">
        <div class="modal-dialog">
            <form action="update.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="stop' . $i . 'Label">終止合約</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <p>確定要終止合約？</p>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-outline-danger" name="con_id" value=' . $i . '>確定</button>
                    </div>
                </div>
            </form>
        </div>
    </div>';
    }
    ?>

    <div class="container">
        <h2 class="h3 my-3">已簽署合約</h2>
        <ul class="list-group">
            <?php
            for ($i = 0; $i < $cnt; $i++) {
                echo '<li class="list-group-item">
                <div class="row">
                    <div class="col-10 d-flex justify-content-evenly align-items-center">
                        <h3 class="h6 mb-0">' . $contract[$i] . '</h3>
                        <span class="badge rounded-pill bg-success">' . $id[0] . '</span>
                        <p class="h6 mb-0">'. $cname['Company_name'] .'</p>
                        <h3 class="h6 mb-0">'. $endDate[$i].'</h3>
                        <h3 class="h6 mb-0">合約存取狀態</h3>
                        <span class="badge bg-success">存取中</span>
                    </div>
                    <div class="col-2 d-flex justify-content-around">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#stop' . $i . '">終止合約</button>

                        </form>
                    </div>
                </div>

                <div class="collapse" id="contract1">
                    <h3 class="h5 mt-3">合約簡介</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique libero deleniti iste
                        nulla blanditiis nihil iusto quo corrupti accusamus quam.</p>
                </div>
            </li>';
            }
            ?>
        </ul>

    </div>

    <script src="./assets/js/vendors.js"></script>
    <script src="./assets/js/all.js"></script>
</body>

</html>