<?php
$user_type='admin';
// echo '有沒有:'.$_GET['del_code'] ;
require_once './03_conn_obj.php';

if(isset($_GET['del_code']) and $_GET['del_code'] == 'ok'){
    $sql_del="DELETE FROM `member` WHERE `member`.`cID` = {$_GET['index_id']}";
    $result_del=$db_link->query($sql_del);
    if($result_del){
        $db_link->close();
        echo "<script> alert('資料已刪除，將轉址到首頁!'); location.href = './03A_view_control.php'; </script>";
        //header('Loction:03A_view_control.php');
        exit;
    }
}


//SELECT * FROM `students` WHERE `cID`=07
//$sql='SELECT * FROM `students` WHERE `cID`='.$_GET['index_id'];

$sql="SELECT * FROM `member` WHERE `cID`={$_GET['index_id']}";

$result = $db_link->query($sql);

$row = $result->fetch_assoc();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>刪除資料 data delete</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">
        <!-- NAV START -->
        <?php include_once './03nav.php'; ?>
        <!-- NAV END -->



        <div class="card mt-3">

            <div class="card-body">
                <h4>刪除資料 data delete <?php echo $_GET['index_id'];?></h4>
                <hr>
                <p>座號：<?php echo $row['cID']; ?></p>
                <p>姓名：<?php echo $row['cName']; ?></p>
                <p>電話：<?php echo $row['cPhone']; ?></p>
                <p>性別：<?php echo $row['cSex']; ?></p>
                <p>生日：<?php echo $row['cBirthday']; ?></p>
                <p>信箱：<?php echo $row['cEmail']; ?></p>
                <p>住址：<?php echo $row['cAddr']; ?></p>
                <hr>
                <p>身高：<?php echo $row['cHeight']; ?></p>
                <p>體重：<?php echo $row['cWeight']; ?></p>

                <p class="text-center">
                     <a class="btn  btn-sm btn-primary w-25" href="javascript:history.back()">返回上一頁</a>
                     <a class="btn  btn-sm btn-danger w-25" href="./03D_delete.php?del_code=ok&index_id=<?php echo $_GET['index_id']; ?>">確定刪除</a>
                    
                </p>

            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>