<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
  <title>GameJam</title>
  <style>
    body {
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        /* 背景 */
        background-color: #fff;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 1) 100%), url(https://i.pinimg.com/originals/b8/1a/a4/b81aa44ba47c8ebb93c4525a96904101.jpg);
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
  <!-- 導覽列 -->
  <?php include_once './navbar_template.php' ; ?>
  <!-- 頁首 -->
  <header >
    <div class="container">
      <h1 class="mt-5" style="padding-top: 20px;text-decoration: underline 1.5px;">GameJam活動分享</h1>
      <p class="lead mb-6" style="font-size: 28px;">一同參與近期舉辦的GameJam活動</p>
    </div>
  </header>

  <!-- 內容區 -->
  <hr>
  <div class="container">
    <div class="row">
      <!-- 文章 -->
      <h2>BombKing遊戲開發歷程</h2>
      <p style="font-size: 22px;">2023年3月由<a href="#">郭宗翰Jeff</a>舉辦</p> 
      <div class="col-md-8">
        <!-- 第一張照片 -->
        <img src="./_img/gameJam.jpg" class="img-fluid">
        <a href="#" style="font-size: 28px;">活動詳情...</a></li>
        <hr>
        <!-- 上一篇、下一篇按鈕 -->
        <nav>
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a class="btn btn-info btn-lg " href="#">上一篇</a></li>
            <li class="list-inline-item"><a class="btn btn-info btn-lg" href="#">下一篇</a></li>
          </ul>
        </nav>
      </div>

      <!-- 側邊欄 -->
      <div class="col-md-3 offset-md-1">
        <!-- 第一個卡片 -->
        <div class="card text-dark bg-light mb-4">
          <div class="card-header">活動資訊</div>
          <div class="card-body">
            <p class="card-text">1.舉辦地點:台北市</p>
            <p class="card-text">2.舉辦時間:2023/3/1</p>
            <p class="card-text">3.發起人:郭宗翰Jeff</p>

          </div>
        </div>
        <!-- 第二個卡片 -->
        <div class="card text-dark bg-light mb-4">
          <div class="card-header">更多貼文</div>
          <div class="card-body">
            <ol class="list-unstyled">
              <li><a href="#">活動網站</a></li>
              <li><a href="#">贊助廠商</a></li>

   
            </ol>
          </div>
        </div>
        <!-- 第三個卡片 -->
        <div class="card text-dark bg-light mb-4">
          <div class="card-header">聯絡資訊</div>
          <div class="card-body">
            <ol class="list-unstyled">
              <li><a href="#">LINE</a></li>
              <li><a href="#">電話</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 頁尾 -->
  <footer class="text-center bg-dark text-light py-1">
    <div class="container mt-5">
    Copyrights © 2023 All Rights Reserved by Jeff_Guo
      <p class="text-end"><a href="#">Back to top</a></p>
    </div>
  </footer>
</body>

</html>