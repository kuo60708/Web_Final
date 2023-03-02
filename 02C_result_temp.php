<?php
//當變數不存在時，將變數設定為'未輸入'
if( !isset( $_GET['c_name'] ) or $_GET['c_name']=='' ){
    //當 $_GET['c_name'] 空 或 不存在 時    
    //讓 c_name 未輸入
    $_GET['c_name']='未輸入';
}
if( !isset( $_GET['c_tel'] ) or $_GET['c_tel']=='' ){
    $_GET['c_tel']='未輸入';
}
if( !isset( $_GET['c_mail'] ) or $_GET['c_mail']=='' ){
    $_GET['c_mail']='未輸入';
}
if( !isset( $_GET['c_item'] ) or $_GET['c_item']=='' ){
    $_GET['c_item']='未輸入';
}

//項目內容
$c_item_content='';

//如果 選 打拋豬 就讓 $c_item_content 設定為 打拋豬 介紹
if( $_GET['c_item'] == '打拋豬' ){
    //設定打拋豬 介紹
    $c_item_content='放入豬絞肉拌炒至全熟。 加入番茄翻炒幾分鐘，再加入糖、醬油、魚露、檸檬汁調味，拌炒均勻，煮5分鐘，讓番茄軟化，茄汁融入豬絞肉中。 放入九層塔，熄火，拌炒1分鐘即可起鍋。 將打拋豬肉盛盤後，再放上煎雞蛋即完成。';


}else if($_GET['c_item'] == '椒麻雞'){
    $c_item_content='步驟作法 · 1、高麗菜刨成細絲，用冰冷開水泡一下，瀝乾水分，放冰箱冷藏備用。 · 2、 把椒麻醬汁材料切碎或調理機打碎後，混拌成調味醬汁。 · 3、 在雞腿肉，肉的 ...';


}else if($_GET['c_item'] == '月亮蝦餅'){
    $c_item_content='愛料理精選99篇簡易食譜做法與步驟，有最新的月亮蝦餅｜料理宗師、月亮蝦餅、台式月亮蝦餅、(餛飩皮)迷你月亮蝦餅。以及蝦餅、月亮蝦餅醬、蝦餅沾醬等相關料理做法。';


}else if($_GET['c_item'] == '豌豆粉'){
    $c_item_content='豌豆粉是雲南人十分喜愛的雜糧製品。是用乾豌豆粒，磨瓣去皮，用水泡發後，摻水磨成漿，經過濾、熬者成糊，冷卻後凝回而成。質地細膩滑嫩，色澤薑黃，口感有豌豆的。';


}else{ 
    $c_item_content='未正確選擇項目';
}

//放入豬絞肉拌炒至全熟。 加入番茄翻炒幾分鐘，再加入糖、醬油、魚露、檸檬汁調味，拌炒均勻，煮5分鐘，讓番茄軟化，茄汁融入豬絞肉中。 放入九層塔，熄火，拌炒1分鐘即可起鍋。 將打拋豬肉盛盤後，再放上煎雞蛋即完成。

//【乾煎雞腿】步驟作法 · 1、高麗菜刨成細絲，用冰冷開水泡一下，瀝乾水分，放冰箱冷藏備用。 · 2、 把椒麻醬汁材料切碎或調理機打碎後，混拌成調味醬汁。 · 3、 在雞腿肉，肉的 ...

//愛料理精選99篇簡易食譜做法與步驟，有最新的月亮蝦餅｜料理宗師、月亮蝦餅、台式月亮蝦餅、(餛飩皮)迷你月亮蝦餅。以及蝦餅、月亮蝦餅醬、蝦餅沾醬等相關料理做法。

//豌豆粉是雲南人十分喜愛的雜糧製品。是用乾豌豆粒，磨瓣去皮，用水泡發後，摻水磨成漿，經過濾、熬者成糊，冷卻後凝回而成。質地細膩滑嫩，色澤薑黃，口感有豌豆的

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php code demo</title>
    <link href="./_res/bootstrap.min.css" rel="stylesheet">
    <style>
 
    </style>

</head>

<body>

    <div class="container mt-3">

        <div class="card">
            <div class="card-header">
                客服諮詢結果
            </div>
            <div class="card-body">
                <h4>Hello, <?php echo $_GET['c_name'];  ?></h4>
                <h4><?php echo $_GET['c_tel'];  ?></h4>
                <h4><?php echo $_GET['c_mail'];  ?></h4>
                <h4><?php echo $_GET['c_item'];  ?></h4>
                <hr>
                <h4><?php echo $c_item_content;  ?></h4>
            </div>

        </div>
    </div>


    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>