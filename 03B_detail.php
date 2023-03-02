<?php
$user_type='admin';

require_once './03_conn_obj.php';
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
    <title>檢視詳細資料 data detail</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">
        <!-- NAV START -->
        <?php include_once './03nav.php'; ?>
        <!-- NAV END -->



        <div class="card mt-3">

            <div class="card-body">
                <h4>檢視詳細資料 data detail <?php echo $_GET['index_id'];?></h4>
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
    <a class="btn btn-sm btn-primary w-25" href="javascript:history.back()">返回上一頁</a>
</p>

            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>