<?php
session_start();
$user_type='admin';


//載入連練
require_once './03_conn_obj.php';

if( !isset($_GET['search_text']) or $_GET['search_text'] ==''){
    $_GET['search_text']='%';
}

//$sql="SELECT * FROM `students`";
$sql = "SELECT * FROM `asset` WHERE `a_name` LIKE '%{$_GET['search_text']}%'";
//OR `cAddr` LIKE '%{$_GET['search_text']}%'";
//SELECT * FROM `students` WHERE `cName` LIKE '%建國%' OR `cAddr` LIKE '%建國%';
//查詢資料
$result = $db_link->query($sql);
// print_r($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>資料查詢 data view</title>
    <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">

        <!-- NAV START -->
 
        <?php include_once './navbar_template.php' ; ?>
        <!-- NAV END -->



        <div class="card mt-3">

            <div class="card-body ">

                <div class="d-flex justify-content-between">
                    <div>
                        <h4>資料查詢 data view</h4>
                    </div>
                    <div>
                        <form action="./03A_view.php" method="get" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="關鍵字" aria-label="Search" name="search_text">
                            <button class="btn btn-success w-50" type="submit">搜尋</button>


                            <!-- 
                            <input type="button" value="我是button 不會送出 可以配合 jquery document.getElementById('...')等控制">
                            <input type="submit" value="我是submit 會重出刷新頁面"> 
                            -->

                        </form>
                    </div>

                </div>

                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <td>遊戲/素材編號</td>
                            <td>遊戲/素材名稱</td>
                            <td>平台</td>
                            <!-- <td>遊戲圖片檔名</td> -->
                            <td>遊戲縮圖</td>
                            <td>遊戲/素材簡述</td>
                            <td>遊戲價格</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//查詢後的資料集-欄位顯示
while($row = $result->fetch_assoc()){
    echo '<tr class="text-center">';
    echo '<td>'.$row['a_id'].'</td>';
    echo '<td>'.$row['a_name'].'</td>';
    // echo '<td>'.$row['a_filepic_name'].'</td>';
    echo '<td>'.$row['a_platform'].'</td>';
    echo '<td><img src="./_img/'.$row['a_filepic_name'].'" alt="" width="200px" height="150px"></td>';
    echo '<td>'.$row['a_des'].'</td>';
    echo '<td>'.$row['a_price'].'</td>';
    // echo '<td class="text-start">'.$row['cEmail'].'</td>';
    // echo '<td class="text-start">'.$row['cAddr'].'</td>';
    echo '</tr>';  
}
?>

                    </tbody>
                </table>




            </div>

        </div>
    </div>

<img src="" alt="">
    <script src="./_res/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>