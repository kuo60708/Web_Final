<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./03A_view.php">
                    <img src="./_res/logo.webp" alt="Logo" width="30" height="30"
                        class="d-inline-block align-text-bottom">
                    哈囉學校學生系統
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- 選項1 關於 -->
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="03_about.php">關於 About</a>
                        </li>

                        <!-- 選項2 查詢資料 -->
                        <li class="nav-item">
                            <a class="nav-link" href="./03A_view.php">查詢資料 View</a>
                        </li>
                        
                        <?php
                        //選項3 管理編輯
                        if($user_type =='admin'){
                        //會顯示管理編輯
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="./03A_view_control.php">管理編輯 Control</a>';
                            echo '</li>';
                        }else{
                            //不會顯示管理編輯
                        }
                       ?>
                    </ul>
                 
                        <div><?php echo isset($_SESSION['cName'])?$_SESSION['cName'].'，':'';?>您好 現在是<?php echo date('Y年m月d日 A h:i'); ?><a class="btn btn-outline-primary btn-sm ms-2" aria-current="page" href="login_out.php">登出 Login Out</a> </div>
                </div>
            </div>
        </nav>