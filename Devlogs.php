<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="./_res/css/bootstrap.min.css" rel="stylesheet">
  <title>Devlogs</title>
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
      <h1 class="mt-5" style="padding-top: 20px;text-decoration: underline 1.5px;">遊戲開發日誌</h1>
      <p class="lead mb-6" style="font-size: 28px;">撰寫以及記錄遊戲開發的過程以及應用到的相關技術</p>
    </div>
  </header>

  <!-- 內容區 -->
  <hr>
  <div class="container">
    <div class="row">
      <!-- 文章 -->
      <h2>BombKing遊戲開發歷程</h2>
      <p>2023年3月by<a href="#">郭宗翰Jeff</a></p>
      <div class="col-md-8">
        <!-- 第一張照片 -->
        <img src="./_img//bombking.PNG" class="img-fluid">
        <p style="font-size: 22px;">遊戲Menu的設計:各角色的擺放及動畫、UI介面的設置.......</p>
        <hr>
        <!-- 第二張照片 -->
        <img src="./_img/bk2.PNG" class="img-fluid mb-2">
        <p style="font-size: 22px;">遊戲關卡的設定:各敵人的擺放位置、出現關卡、機關設置、通關條件.......</p>
        <hr>
        <!-- 第三張照片 -->
        <img src="./_img/bombking_gp.PNG" class="img-fluid mb-2">
        <p style="font-size: 22px;">遊戲發布:遊戲發布平台&上架到後續的維護過程.....</p>
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
          <div class="card-header">遊戲資訊</div>
          <div class="card-body">
            <p class="card-text">1.遊戲類型:2D橫向動作手機遊戲</p>
            <p class="card-text">2.遊戲平台:Web、Mobile</p>
            <p class="card-text">3.開發工具:Unity</p>

          </div>
        </div>
        <!-- 第二個卡片 -->
        <div class="card text-dark bg-light mb-4">
          <div class="card-header">更多貼文</div>
          <div class="card-body">
            <ol class="list-unstyled">
              <li><a href="#">第一階段:遊戲企劃</a></li>
              <li><a href="#">第二階段:遊戲素材蒐集&導入</a></li>
              <li><a href="#">第三階段:程式撰寫</a></li>
              <li><a href="#">第四階段:除錯&修正</a></li>
              <li><a href="#">第五階段:發布&後續維護更新</a></li>
   
            </ol>
          </div>
        </div>
        <!-- 第三個卡片 -->
        <div class="card text-dark bg-light mb-4">
          <div class="card-header">其他遊戲</div>
          <div class="card-body">
            <ol class="list-unstyled">
              <li><a href="#">遊戲連結1</a></li>
              <li><a href="#">遊戲連結2</a></li>
              <li><a href="#">遊戲連結3</a></li>
              <li><a href="#">遊戲連結4</a></li>
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