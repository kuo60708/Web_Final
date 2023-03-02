<?php
//本區域1
//通常會放連線／變數定義／SQL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    //本區域2
    //通常會放 修改CSS JS 等功能
    ?>
</head>
<body>
    <?php
    //本區域3
    //通常會放 顯示資料或者 while 動態資料

    //3-1 變數建立
    $s_name='小王';    
    $s_age=25;
    $s_about='後端工程師，興趣畫畫與刺繡'; 

    //3-1 變數組合 .
    echo $s_name . $s_age . '歲，' . $s_about . '<br>';
    echo '<br>';

    //3-2 單雙引號與變數的關係
    //單引號 內容為單純字串     >> 表示變數會被當 字串 顯示
    echo '<br><br><br>$s_name<br><br>';

    //雙引號 內容為字串或是變數皆可  >> 表示變數會被當 變數編譯後 顯示
    echo "<br><br><br>$s_name<br><br>";

    //範例
    echo "我是$s_name 我今年 $s_age 歲，我的工作是 $s_about";
    // { } 界定變數 (比較複雜的組合)
    echo "我是{$s_name}我今年{$s_age}歲，我的工作是{$s_about}";

    //單雙引號中 顯示單雙引號
    echo '<img src="./a.jpg" alt="教室">';
    echo "<img src=\"./a.jpg\" alt=\"教室\">";

    //字串的方式
    echo '我的地區是\'桃園\'<br>';
    echo '我的地區是"桃園"<br>';
    echo "我的地區是\"桃園\"<br>";
    echo "我的地區是'桃園'<br>";

    //3-0 
            // 單行 註解
            /* 多行 */
            // echo 顯示 與 列印字串
    echo 'PHP 單引號';
    echo '<br>';
    echo "PHP 雙引號";
    echo '<br>';
    echo '<h2>標題byPHP</h2>';

    
    ?>
   
<img src="./a.jpg" alt="教室">

</body>
</html>