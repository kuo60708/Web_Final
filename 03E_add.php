<?php
$user_type='admin';

//一頁式的處理方式:
//1.add_code存在且=ok才插入
if(isset($_GET['add_code']) and $_GET['add_code'] == 'ok'){
    if(!isset($_GET['cName']) ){
        $_GET['cName']='';
    }
    if(!isset($_GET['cSex']) ){
        $_GET['cSex']='';
    }
    if(!isset($_GET['cBirthday']) ){
        $_GET['cBirthday']='';
    }
    if(!isset($_GET['cEmail']) ){
        $_GET['cEmail']='';
    }
    if(!isset($_GET['cPhone']) ){
        $_GET['cPhone']='';
    }
    if(!isset($_GET['cAddr']) ){
        $_GET['cAddr']='';
    }
    if(!isset($_GET['cHeight']) ){
        $_GET['cHeight']='';
    }
    if(!isset($_GET['cWeight']) ){
        $_GET['cWeight']='';
    }
    
    //2.有,插入資料
    
    require_once './03_conn_obj.php';
   

    // $sql="INSERT INTO `member` (`cID`,`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cHeight`, `cWeitht`)
    //  VALUES (NULL, '{$_GET['cName']}', '{$_GET['cSex']}', '{$_GET['cBirthday']}', '{$_GET['cEmail']}','{$_GET['cPhone']}','{$_GET['cAddr']}','{$_GET['cHeight']}', '{$_GET['cWeight']}')";

    $sql="INSERT INTO `member`(`cID`,`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`,`cHeight`,`cWeight`)
    VALUES (NULL,'{$_GET['cName']}','{$_GET['cSex']}','{$_GET['cBirthday']}','{$_GET['cEmail']}','{$_GET['cPhone']}','{$_GET['cAddr']}','{$_GET['cHeight']}','{$_GET['cWeight']}')";


    //3.插入成功或失敗處理
    if($result = $db_link->query($sql)){
        echo '<script> alert("資料新增成功!!");</script>';
    }
    else{
        echo '<script> alert("資料新增失敗!!");</script>';
    }

}




//SELECT * FROM `students` WHERE `cID`=07
//$sql='SELECT * FROM `students` WHERE `cID`='.$_GET['index_id'];

// $sql="SELECT * FROM `member` WHERE `cID`={$_GET['index_id']}";

// $result = $db_link->query($sql);

// $row = $result->fetch_assoc();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新增詳細資料 data detail</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">
        <!-- NAV START -->
        <?php include_once './03nav.php'; ?>
        <!-- NAV END -->



        <div class="card mt-3">

            <div class="card-body">
                <h4>新增詳細資料 Add data</h4>
                <hr>
                <form action="./03E_add.php" method="get">
                    <div class="col-11 col-sm-8 mx-auto">

                        <p>座號：<input type="number" placeholder="自動產生" name="cID" id="cID" disabled></p>
                        <p>姓名：<input type="text" name="cName" id="cName" maxlength="6" required></p>
                        <p>電話：<input type="tel" name="cPhone" id="cPhone"></p>
                        <p>性別：<input type="radio" name="cSex" id="cSex1" value="M" checked>男
                                <input type="radio" name="cSex" id="cSex2" value="F">女
                        </p>
                        <p>生日：<input type="date" name="cBirthday" id="cBirthday" required></p>
                        <p>信箱：<input type="email" name="cEmail" id="cEmail"></p>
                        <p>住址：<input type="text" name="cAddr" id="cAddr" maxlength="200"></p>
                    </div>
                    <hr>
                    <div class="coll-11 col-sm-8 mx-auto">
                        <p>身高：<input type="number" name="cHeight" id="cHeight" min="50" max="300"></p>
                        <p>體重：<input type="number" name="cWeight" id="cWeight" min="20" max="400"> </p>
                        <input type="hidden" name="add_code" value="ok">
                        <P>注意:身高體重限定正數</P>
                        <p class="text-center">
                            <button class="btn btn-primary" type="submit">送出</button>
                            <button class="btn btn-primary" type="reset">重設</button>
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>