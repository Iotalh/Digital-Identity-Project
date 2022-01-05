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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="login.html">資訊管理系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="companyContracts.html">合約</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <img src="https://fakeimg.pl/48x48" class="rounded-circle" alt="User image">
                    <button type="button" class="btn mx-3" data-bs-toggle="modal" data-bs-target="#companyName">Company
                        name</button>
                    <button type="button" class="btn btn-outline-primary">登出</button>
                </div>
            </div>
        </div>
    </nav>


    <div class="modal fade" id="companyName" tabindex="-1" aria-labelledby="companyNameLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bootstrap border-0">
                    <h5 class="modal-title" id="companyNameLabel">元智大學資訊工程學系</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-evenly align-items-center">
                    <img class="rounded-circle" src="https://fakeimg.pl/128x128/" alt="logo" srcset="">
                    <div>
                        <p>代表人　陳昱圻</p>
                        <p>桃園市中壢區遠東路135號 1313 室</p>
                        <a class="btn p-0" href="tel:+034638800">(03) 463-8800</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

<div class="container d-flex justify-content-end py-3">
    <form action="" method="get">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="輸入關鍵字搜尋合約">
            <button type="submit" class="btn btn-primary">
                <span class="material-icons align-middle">search</span>
            </button>
        </div>
    </form>
</div>

<div class="modal fade" id="newContract1" tabindex="-1" aria-labelledby="newContract1Label" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContract1Label">簽署新合約</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4">
                    <label for="IDNumber" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="IDNumber" placeholder="請插入數位身分證">
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">新增</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="newContract2" tabindex="-1" aria-labelledby="newContract2Label" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContract2Label">簽署新合約</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4">
                    <label for="IDNumber" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="IDNumber" placeholder="請插入數位身分證">
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">新增</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="d-flex align-items-center">
                合約名稱
                <span class="badge rounded-pill bg-success ms-4">第一級</span>
                <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal"
                    data-bs-target="#newContract1">簽署新合約</button>
                <button type="button" class="btn btn-outline-primary fw-bold px-2 ms-4" data-bs-toggle="collapse"
                    data-bs-target="#contract-1" aria-expanded="false" aria-controls="contract-1">
                    <span class="material-icons align-middle">expand_more</span>
                </button>
            </div>
            <div class="collapse" id="contract-1">
                <div class="table-responsive mt-3">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th scope="col">使用者名稱</th>
                                <th scope="col">合約結束日期</th>
                                <th scope="col">存取個資狀態</th>
                                <th scope="col">合約到期通知</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>林X翔</td>
                                <td>2021/12/25</td>
                                <td>可以存取</td>
                                <td><button type="button" class="btn btn-outline-primary"><span
                                            class="material-icons align-middle">notifications</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex align-items-center">
                合約名稱
                <span class="badge rounded-pill bg-success ms-4">第一級</span>
                <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal"
                    data-bs-target="#newContract2">簽署新合約</button>
                <button type="button" class="btn btn-outline-primary fw-bold px-2 ms-4" data-bs-toggle="collapse"
                    data-bs-target="#contract-2" aria-expanded="false" aria-controls="contract-2">
                    <span class="material-icons align-middle">expand_more</span>
                </button>
            </div>
            <div class="collapse" id="contract-2">
                <div class="table-responsive mt-3">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th scope="col">使用者名稱</th>
                                <th scope="col">合約結束日期</th>
                                <th scope="col">存取個資狀態</th>
                                <th scope="col">合約到期通知</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>林X翔</td>
                                <td>2021/12/25</td>
                                <td>可以存取</td>
                                <td><button type="button" class="btn btn-outline-primary"><span
                                            class="material-icons align-middle">notifications</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </li>
    </ul>
</div>

        <script src="./assets/js/vendors.js"></script>
        <script src="./assets/js/all.js"></script>
</body>

</html>

