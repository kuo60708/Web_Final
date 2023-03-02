<?php
//使用 POST 方式
//使用 POST 傳送後使用 $_POST[' '] 接收
if( !isset($_POST['t_name']) or $_POST['t_name'] ==''){
    $_POST['t_name']='未輸入';
}
if( !isset($_POST['t_sex']) or $_POST['t_sex'] ==''){
    $_POST['t_sex']='未輸入';
}
if( !isset($_POST['t_q_type']) or $_POST['t_q_type'] ==''){
    $_POST['t_q_type']='未輸入';
}
if( !isset($_POST['t_q_content']) or $_POST['t_q_content'] ==''){
    $_POST['t_q_content']='未輸入';
}


//判斷問題類型修改圖片檔名

$img_url='';
//方式一 if else if
// if($_POST['t_q_type']=='付款方式'){
//     $img_url='illustrations_1.png';

// }else if($_POST['t_q_type']=='產品使用'){
//     $img_url='illustrations_2.png';

// }else if($_POST['t_q_type']=='分店建議'){
//     $img_url='illustrations_3.png';

// }else{
//     $img_url='illustrations_1.png';
// }
//方式二 switch
switch($_POST['t_q_type']){
    case '付款方式':
    $img_url='an_1.gif';
    break;
    case '產品使用':
    $img_url='an_2.gif';
    break;
    case '分店建議':
    $img_url='an_3.gif';
    break;
    default:
    $img_url='an_1.gif';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php code demo</title>
    <link href="./_res/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-3">

        <div class="card">
            <div class="card-header">
                結果
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col">
                            <h4>Hello, <?php echo $_POST['t_name'];  ?></h4>
                             <h4><?php echo $_POST['t_sex'];  ?></h4>
                            <h4><?php echo $_POST['t_q_type'];  ?></h4>
                            <h4><?php echo $_POST['t_q_content'];  ?></h4>

                    </div>
                    <div class="col-auto">
                           <img src="./_photo/<?php echo $img_url; ?>" alt=""> 

                    </div>
                </div>
              
                <hr>
                <h4><?php echo '內容待新增';  ?></h4>
            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>