<?php
$user_type='admin';

//載入連練
require_once './03_conn_obj.php';

$sql="SELECT * FROM `asset`";

//查詢資料
$result = $db_link->query($sql);
//print_r($result);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理編輯 data control</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">
        <!-- NAV START -->
        <?php include_once './03nav.php'; ?>
        <!-- NAV END -->



        <div class="card mt-3">

            <div class="card-body">

                <a class="btn btn-primary btn-sm" href="./03E_add.php" target="_self">新增資料</a>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>遊戲編號</td>
                            <td>遊戲名稱</td>
                            <td>圖片檔名</td>
                            <td>遊戲縮圖</td>
                            <td>遊戲價格</td>
                            <td>編輯</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    //查詢後的資料集-欄位顯示
                    while($row = $result->fetch_assoc()){
                        echo '<tr class="text-center">';
                        echo '<td>'.$row['a_id'].'</td>';
                        echo '<td>'.$row['a_name'].'</td>';
                        echo '<td>'.$row['a_filepic_name'].'</td>';
                        echo '<td><img src="./_img/'.$row['a_filepic_name'].'" alt="" width="200px" height="150px"></td>';
                        echo '<td class="text-start">'.$row['a_price'].'</td>';
                        echo '<td>';
                        echo '<a class="btn btn-primary me-2 btn-sm" href="./03B_detail.php?index_id='.$row['a_id'].'">檢視</a>';
                        echo '<a class="btn btn-warning me-2 btn-sm" href="./03C_update.php?index_id='.$row['a_id'].'">更新</a>';
                        echo '<a class="btn btn-danger me-2 btn-sm" href="./03D_delete.php?index_id='.$row['a_id'].'">刪除</a>';
                        echo '</td>';
                        echo '</tr>';  
                    }
                    ?>



                    </tbody>
                </table>

            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>