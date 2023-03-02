<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./_res/css/bootstrap.min.css">
    <link rel="stylesheet" href="_res/css/normalize.css">

    <style>
    body {
        font-family: Microsoft JhengHei;
        color: rgb(0, 0, 0);
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0.9) 100%), url(https://i.pinimg.com/originals/b8/1a/a4/b81aa44ba47c8ebb93c4525a96904101.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
    }

    #photo {
        padding: 8px;
        border: solid 1px rgba(255, 255, 255, 0.25);
        background-color: rgba(255, 255, 255, 0.075);
    }

    .card {
        box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.25) inset;
        -webkit-box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.25) inset;
        -moz-box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.25) inset;
        background-color: rgba(255, 255, 255, 0.075);
        padding: 0rem 0rem 0.5rem 0rem;
        overflow: hidden;
    }

    .card-body {
        padding: 0.8rem 0rem 0rem 0rem;
    }

    img {
        height: 90%;
        width: auto;
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
    <title>瀏覽遊戲</title>
</head>

<body>
    <header class="container">
        <?php include_once './navbar_template.php' ; ?>
        <img src="" class="mt-5 rounded-circle mx-auto d-block" id="photo" />
        <h4 class="text-center mt-3"></h4>
    </header>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <a href="./Unity/index.html"><div class="col">        
                    <div class="card h-100 text-center text-bg-success bg-secondary">
                       <img src="./_img/bombking.PNG" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">BombKing</h5>
                        </div>
                    </div>
           
            </div>
            </a>
            <div class="col">
                <div class="card h-100 text-center text-bg-success bg-secondary ">
                    <img src="./_img/Loading.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">糖果屋CandyHouse</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center text-bg-success bg-secondary ">
                    <img src="./_img/MOM2.PNG" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Memory Of Universe宇過天晴</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center text-bg-success bg-secondary ">
                    <img src="./_img/as_6.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Time to Morp</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center text-bg-success bg-secondary ">
                    <img src="./_img/as_9.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Nightkeep</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center text-bg-success bg-secondary ">
                    <img src="./_img/as_3.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Nanotale</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <footer class="text-center bg-dark text-light py-2 " >
        Copyrights © 2023 All Rights Reserved by Jeff_Guo
    </footer> -->
    <!-- Optional JavaScript -->
    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>