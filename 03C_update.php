<?php
$user_type='admin';

//一頁式的處理方式:
// 1.add_code存在且=ok才插入
if(isset($_GET['update_code']) and $_GET['update_code'] == 'ok'){
    if(!isset($_GET['cName']) ){
        $_GET['cName']='';
    }
    if(!isset($_GET['cSex']) ){
        $_GET['cSex']='F';
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
    if(!isset($_GET['cHeight']) or $_GET['cHeight'] == '' ){
        $_GET['cHeight']=0;
    }
    if(!isset($_GET['cWeight']) or $_GET['cWeight'] == '' ){
        $_GET['cWeight']=0;
    }

    //2.有,插入資料
    
   require_once './03_conn_obj.php';
   

    // $sql="INSERT INTO `member` (`cID`,`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cHeight`, `cWeitht`)
    //  VALUES (NULL, '{$_GET['cName']}', '{$_GET['cSex']}', '{$_GET['cBirthday']}', '{$_GET['cEmail']}','{$_GET['cPhone']}','{$_GET['cAddr']}','{$_GET['cHeight']}', '{$_GET['cWeight']}')";

    $sql= "UPDATE `member` SET 
    `cName` = '{$_GET['cName']}', 
    `cSex` = '{$_GET['cSex']}', 
    `cBirthday` = '{$_GET['cBirthday']}', 
    `cEmail` = '{$_GET['cEmail']}', 
    `cPhone` = '{$_GET['cPhone']}', 
    `cAddr` = '{$_GET['cAddr']}', 
    `cHeight` = '{$_GET['cHeight']}', 
    `cWeight` = '{$_GET['cWeight']}'  
    WHERE `cID` = {$_GET['index_id']}";


    //3.插入成功或失敗處理
    $result = $db_link->query($sql);
    if( $result = $db_link->query($sql) ){
        //$db_link->close();
        echo '<script>   alert("資料更新成功!!");</script>';
        //echo "<script>alert('警告：將在確認之後跳頁'); location.href = './03A_view_control.php';</script>";
  
    }else{
        echo '<script>   alert("資料更新失敗!!");</script>';
        //$db_link->close();
    }
 }

require_once './03_conn_obj.php';

$sql="SELECT * FROM `member` WHERE `cID`={$_GET['index_id']}";

$result = $db_link->query($sql);

$row = $result->fetch_assoc();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>更新資料 data update</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">
        <!-- NAV START -->
        <?php include_once './03nav.php'; ?>
        <!-- NAV END -->



        <div class="card mt-3">

            <div class="card-body">
                <h4>更新資料 data update</h4>
                <hr>
                <form action="./03C_update.php" method="get">
                    <div class="col-11 col-sm-8 mx-auto">

                        <p>座號：<input type="number" value="<?php echo $row['cID']; ?>" name="cID" id="cID" readonly></p>
                        <p>姓名：<input type="text" name="cName" id="cName" maxlength="6" required value="<?php echo $row['cName']; ?>"></p>
                        <p>電話：<input type="tel" name="cPhone" id="cPhone" value="<?php echo $row['cPhone']; ?>"></p>
                        <p>性別：<input type="radio" name="cSex" id="cSex1" value="M" <?php echo $row['cSex']=='M'?'checked':''; ?>>男
                                <input type="radio" name="cSex" id="cSex2" value="F"  <?php echo $row['cSex']=='F'?'checked':''; ?>>女
                        </p>
                        <p>生日：<input type="date" name="cBirthday" id="cBirthday" required value="<?php echo $row['cBirthday']; ?>"></p>
                        <p>信箱：<input type="email" name="cEmail" id="cEmail" value="<?php echo $row['cEmail']; ?>"></p>
                        <p>住址：<input type="text" name="cAddr" id="cAddr" maxlength="200" value="<?php echo $row['cAddr']; ?>"></p>
                    </div>
                    <hr>
                    <div class="coll-11 col-sm-8 mx-auto">
                        <p>身高：<input type="number" name="cHeight" id="cHeight" min="50" max="300" value="<?php echo $row['cHeight']; ?>"></p>
                        <p>體重：<input type="number" name="cWeight" id="cWeight" min="20" max="400" value="<?php echo $row['cWeight']; ?>"></p>
                        <input type="hidden" name="update_code" value="ok">
                        <input type="hidden" name="index_id" value="<?php echo $_GET['index_id']; ?>">

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