<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootsrap CSS -->

    <link rel="stylesheet" href="_res/css/index.css">
    <link rel="stylesheet" href="./_res/css/bootstrap.min.css">
    <link rel="stylesheet" href="_res/css/normalize.css">

    <style>
    .carousel-item {
        height: 32rem;
        background: #000;
        color: white;
        position: relative;
    }

    .container {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-bottom: 50px;
    }

    .overlay-image {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-position: center;
        background-size: 2000px 700px;
        background-repeat: no-repeat;
        opacity: 0.5;
    }

    p {
        font-size: 25px;
    }

    h1 {
        font-size: 3em;
    }

    #content {
        background-color: #545669;
    }

    #content h4 {
        color: #aeffa2;
    }

    #content h3 {
        color:#aeffa2;
    }

    .row .col-lg:nth-child(1) {
    background-color: rgba(0, 0, 0, 0.035);
    border: orange solid 0.3px;
}

.row .col-lg:nth-child(2) {
    background-color: rgba(0, 0, 0, 0.07);
    border: orange solid 0.3px;
}

.row .col-lg:nth-child(4) {
    background-color: rgba(0, 0, 0, 0.105);
    border: orange solid 0.3px;
   
}   

.row .col-lg:nth-child(5) {
    background-color: rgba(0, 0, 0, 0.14);
    border: orange solid 0.3px;
}
    </style>


    <title>Games & Game Assets</title>
</head>

<body>
    <!-- Header區域 -->
    <header>
        <?php include_once './navbar_template.php' ; ?>
    </header>
    <!-- Banner區域 -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- 輪播指示 -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" style="width: 50px;"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1" style="width: 50px;"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2" style="width: 50px;"></li>
        </ol>
        <!-- 輪播內容 -->
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000" style="margin-top: 55px;">
                <div class="overlay-image" style="background-image:url(./_img/Loading.jpg);"></div>
                <di class="container">
                    <h1>糖果屋 CandyHouse</h1>
                    <p>Low-Poly上帝視角動作遊戲</p>
                    <a href="#" class="btn btn-lg btn-primary">詳情 ></a>
            </div>
            <div class="carousel-item " data-bs-interval="3000" style="margin-top: 55px;">
                <div class="overlay-image"
                    style="background-image:url(./_img/bombking.PNG); background-size: 1900px 700px; "></div>
                <di class="container">
                    <h1>BombKing</h1>
                    <p>2D橫向動作手機遊戲</p>
                    <a href="./Unity/index.html" class="btn btn-lg btn-primary">詳情 ></a>
            </div>
            <div class="carousel-item " data-bs-interval="3000" style="margin-top: 55px;">
                <div class="overlay-image" style="background-image:url(./_img/MOM.PNG);background-size: 2000px 600px">
                </div>
                <di class="container">
                    <h1>Memory Of Universe宇過天晴</h1>
                    <p>結合跑酷、解謎、射擊的第一人稱探險遊戲</p>
                    <a href="#" class="btn btn-lg btn-primary">詳情 ></a>
            </div>
        </div>
        <!-- 輪播控制 -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <!-- Content區域 -->
    <div id="content" class="container-fluid" style="margin-top:0px;">
        <div class="row text-center">
            <div class="col-lg py-5">
                <h3>瀏覽遊戲</h3>
                <p class="text-light">找尋你想遊玩的遊戲作品</p>
                <a class="btn btn-outline-light" href="./03A_view_card.php" role="button">了解更多</a>

            </div>
            <div class="col-lg py-5" >
                <h3>遊戲資源</h3>
                <p class="text-light">搜索你所需要的遊戲開發資源</p>
                <a class="btn btn-outline-light" href="./GameResource.php" role="button">了解更多</a>
            </div>
            <div class="w-100"></div>
            <div class="col-lg py-5" >
                <h3>Game Jams</h3>
                <p class="text-light">參與和其他遊戲開發者們共同開發遊戲的聚會</p>
                <a class="btn btn-outline-light" href="./GameJam.php" role="button">了解更多</a>
            </div>
            <div class="col-lg py-5">
                <h3>遊戲開發日誌</h3>
                <p class="text-light">紀錄遊戲開發者開發遊戲的過程。</p>
                <a class="btn btn-outline-light" href="./Devlogs.php" role="button">了解更多</a>
            </div>
        </div>
    </div>
    <footer class="text-center bg-dark text-light py-2">
        Copyrights © 2023 All Rights Reserved by Jeff_Guo
    </footer>


    <!-- Bootsrap js -->
    <script src="./_res/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>