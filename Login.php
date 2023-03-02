<?php
//一開始先執行啟動session
session_start();
//$_SESSION['OK']='11111';
$user_type='admin';
//echo $_POST['c_username'].'//'.$_POST['c_password'];
if(isset($_POST['c_username']) and $_POST['c_username'] !='' and isset($_POST['c_password']) and $_POST['c_password'] !=''){
    //都有填入
    //載入連線
    require_once './03_conn_obj.php';
    $sql = "SELECT * FROM `member` WHERE `c_username` = '{$_POST['c_username']}';";
    $result = $db_link->query($sql);
    //echo '資料庫有撈到:' .$result->num_rows.'筆';
    //比對密碼
    if($result->num_rows == 1){
        $row=$result->fetch_assoc();
        if( $_POST['c_password'] == $row['c_password']) {
            //echo '密碼判斷:密碼相同';
            //session
            $_SESSION['cID']=$row['c_ID'];//會員資料
            $_SESSION['cName']=$row['cName'];//會員大名
            header('location:./03A_view.php');
            //轉址
        }else{
            //echo '密碼判斷:密碼不同';
            //定義錯誤訊息
            $err_info='帳號或密碼錯誤!!請重試(code2)。';
        }
    }else{
        $err_info='帳號或密碼錯誤!!請重試(code1)。';
    }
    //比對成功就將使用者大名顯示，存入session
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    </style>
    <link href="./_res/css/sign-in.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">

        <!-- NAV START -->
        <?php include_once './03nav.php'; ?>
        <!-- NAV END -->
        <div class="card mt-3">
            <!-- <h3><?php echo $info; ?></h3> -->
            <div class="card-body text-center">
                <main class="form-signin w-100 m-auto">
                    <form action="./Login.php" method="post">
                        <img class="mb-4" src="./_img/earlybirds_logo.png" alt="" width="100px" >
                        <h3 class="h3 mb-3 fw-normal text-danger"><?php echo isset($err_info)?$err_info:'請登入'; ?></h3>

                        <div class="form-floating">
                            <input type="text" name="c_username" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="c_password" class="form-control" id="floatingPassword" required>
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                    </form>
                </main>
            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>