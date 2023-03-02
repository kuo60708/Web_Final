<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php code demo</title>
    <link href="./_res/bootstrap.min.css" rel="stylesheet">
    <style>
    .form-label {
        margin-top: 1rem;
    }

    .form-check-input {
        margin-top: 1.2rem;
    }
    </style>
</head>

<body>

    <div class="container mt-3">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        產品訂購-使用GET 前往 02B_result
                    </div>
                    <div class="card-body">
                        <form action="./02B_result.php" method="get">
                            <label for="c_name" class="form-label">訂購人</label>
                            <input type="text" class="form-control" id="c_name" name="c_name" required>

                            <label for="c_tel" class="form-label">連絡電話</label>
                            <input type="text" class="form-control" id="c_tel" name="c_tel">

                            <label for="c_mail" class="form-label">聯絡信箱</label>
                            <input type="email" class="form-control" id="c_mail" name="c_mail">


                            <label for="c_item" class="form-label">商品選購</label>
                            <select class="form-control" name="c_item" id="c_item">
                                <option value="打拋豬">打拋豬</option>
                                <option value="椒麻雞">椒麻雞</option>
                                <option value="月亮蝦餅">月亮蝦餅</option>
                                <option value="豌豆粉">豌豆粉</option>
                            </select>
                            <div class="text-center mt-3">
                                <input class="btn btn-primary form-control w-50" type="submit" value="送出">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        客服諮詢-使用POST 前往 02C_result
                    </div>
                    <div class="card-body">
                        <form action="./02C_result.php" method="post">
                            <label for="t_name" class="form-label">訂購人</label>
                            <input type="text" class="form-control" id="t_name" name="t_name" required>
                            <div>
                                <label for="c_tel" class="form-label">性別</label>
                                <input type="radio" class="form-check-input mx-2" name="t_sex" value="男" checked> 男
                                <input type="radio" class="form-check-input mx-2" name="t_sex" value="女"> 女
                            </div>

                            <div>
                                <label for="c_mail" class="form-label">問題分類</label>
                                <input type="radio" class="form-check-input mx-2" name="t_q_type" value="付款方式"
                                    checked>付款方式
                                <input type="radio" class="form-check-input mx-2" name="t_q_type" value="產品使用">產品使用
                                <input type="radio" class="form-check-input mx-2" name="t_q_type" value="分店建議">分店建議
                            </div>

                            <label for="t_q_content" class="form-label">問題描述</label>
                            <textarea name="t_q_content" class="form-control" id="t_q_content" cols="30"
                                rows="4"></textarea>
                            <div class="text-center mt-3">
                                <input class="btn btn-primary form-control w-50" type="submit" value="送出">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>






    </div>

<div class="container text-center">
<img src="./_photo/an.svg" alt="">
</div>
    <script src="./_res/bootstrap.bundle.min.js">
    </script>
</body>

</html>