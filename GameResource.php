<?php
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

    <style>
    body {
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        /* 背景 */
        background-color: #fff;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 1) 100%), url(https://i.pinimg.com/originals/b8/1a/a4/b81aa44ba47c8ebb93c4525a96904101.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;

    }

    header nav ul li {
        font-size: 18px;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        margin: 0px 10px;
    }


    .nav-item {
        position: relative;
    }

    .nav-item :after {
        content: " ";
        position: absolute;
        right: 50%;
        left: 50%;
        bottom: -5px;
        border-bottom: 4px solid rgb(123, 20, 240);
        transition: .3s;
    }

    .nav-item :hover::after {
        right: 0%;
        left: 0%;
    }

    #banner {
        height: 500px;
        background-image: url(../../_img/Mineral\ Town.jpg);
        background-position: center center;
        background-size: cover;

    }
    </style>
</head>

<body>

    <div class="container mt-5">

        <!-- NAV START -->
        <?php include_once './navbar_template.php' ; ?>
        <!-- NAV END -->



        <div class="card bg-secondary">

            <div class="card-body mt-2 mx-5">

                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="text-light" style="border: 0.5px solid;">遊戲資源 Game Resources</h3>
                    </div>
                    <div>
                        <form action="./03A_view_card.php" method="get" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="關鍵字" aria-label="Search"
                                name="search_text">
                            <button class="btn btn-success w-50" type="submit">搜尋</button> 
                            <button class="btn btn-danger w-50" type="submit">重設</button>


                            <!-- 
                            <input type="button" value="我是button 不會送出 可以配合 jquery document.getElementById('...')等控制">
                            <input type="submit" value="我是submit 會重出刷新頁面"> 
                            -->


                        </form>
                    </div>

                </div>

                <?php
                 //區段方式:區分Html與PHP
                while($row = $result->fetch_assoc()){
                ?>
                <div class="card float-start mx-2 my-3" style="width: 13rem;">
                    <img class="card-img-top" src="./_img/<?php echo $row['a_filepic_name']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['a_name'].' '; ?>
                            <?php 
                        for($i = 1 ; $i <= $row['a_val']; $i++){
                            echo '<img src="./_img/star_icon.png" width="10%" alt="">';
                        } 
                        ?>

                        </h5>
                        <p class="card-text"><?php echo mb_substr($row['a_des'],0,24,'utf-8').' ...'; ?></p>
                        <!-- <a href="#" class="btn btn-primary">php echo '$' .$row['a_price'].'購買 >'; ?></a> -->
                        <a href="<?php echo $row['a_link'];?>"
                            class="btn btn-primary">詳情></a>
                    </div>
                </div>
                <?php   
                    // echo '<tr class="text-center">';
                    // echo '<td>'.$row['a_id'].'</td>';
                    // echo '<td>'.$row['a_name'].'</td>';
                    // echo '<td>'.$row['a_filepic_name'].'</td>';
                    // echo '<td>'.$row['a_platform'].'</td>';
                    // echo '<td><img src="./_img/'.$row['a_filepic_name'].'" alt="" width="200px" height="150px"></td>';
                    // echo '<td>'.$row['a_des'].'</td>';
                    // echo '<td>'.$row['a_price'].'</td>';
                    // echo '<td class="text-start">'.$row['cEmail'].'</td>';
                    // echo '<td class="text-start">'.$row['cAddr'].'</td>';
                    // echo '</tr>';
                }
                ?>

            </div>

        </div>
    </div>

    <!-- <img src="" alt=""> -->
    <script src="./_res/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>