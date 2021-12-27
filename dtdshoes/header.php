<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./font.css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    nav {
        height: 80px;
        width: 100%;
        display: flex !important;
        justify-content: space-between;
        position: fixed;
        z-index: 99;
        background-color: rgba(0, 0, 0, 0.726);
    }

    .navdtdlogo {
        width: 70px;
        /* navdtdlogo上下位子 */
        height: 80px;
        display: flex;
        align-items: center;
        margin: 0 30px;
        /* navdtdlogo左右位子 */
        overflow: hidden;
    }

    .navdtdlogo img {
        object-fit: contain;
        width: 100%;
    }

    .nav-btn-control {
        padding: 0 20px;

    }

    .nav-btn-control p {
        margin-bottom: 0%;
        color: white;
    }

    .nav-right,
    .nav-left {
        display: flex;
        align-items: center;
        padding-right: 50px;
    }

    .nav-right-icon {
        /* 右邊的icon */
        width: 20px;
        height: 20px;
        margin: 0 10px;
    }
    .navthreeLine{
        color: white;
        margin-right: 10px;
    }
    .navlove {
        margin-right: 15px;
    }

    .navlove img {
        height: 19.91px;
        margin: 0;
    }
    .loginsuccname, a#jlogout{
        color: white;
    }
    .logoutbtn{
        margin-right: 5px;
        margin-left: 5px;
    }

    @media screen and (min-width:1001px){
        .threeLine{
            display: none;
        }
    } 

    @media screen and (max-width:1000px){
        .nav-right-icon-disnon{
            display: none;
        }
    }  
</style>

<body>
    <nav>
        <div class="nav-left">
            <!--右邊的所有按鈕 -->
            <div class="navdtdlogo"><a href="#"><img src="./image/svg/DTDwhite.svg" alt=""></a></div>
            <div class="new-btn nav-btn-control nav-right-icon-disnon"><a href="">
                    <p>新品</p>
                </a></div>
            <div class="brand-btn nav-btn-control nav-right-icon-disnon"><a href="">
                    <p>品牌</p>
                </a></div>
            <div class="allproduct-btn nav-btn-control nav-right-icon-disnon"><a href="">
                    <p>全館商品</p>
                </a></div>
            <div class="share-btn nav-btn-control nav-right-icon-disnon"><a href="">
                    <p>穿搭分享</p>
                </a></div>
            <div class="compare-btn nav-btn-control nav-right-icon-disnon"><a href="">
                    <p>活動頁面</p>
                </a></div>
        </div>

        <div class="nav-right nav-btn-control">
            <?php if(isset($_SESSION['name'])){?>
                <div class="loginsuccname nav-right-icon"><?= $_SESSION['name'] ?></div>
                <div class="logoutbtn"><a href="#" id="jlogout">登出</a></div>
             <?php
                }
             ?>
            <div class="search nav-right-icon nav-right-icon-disnon"><a href=""><img src="./image/svg/search.svg" alt=""></a></div>
            <div class="navlove nav-right-icon nav-right-icon-disnon"><a href=""><img src="./image/svg/compare.svg" alt=""></a></div>
            <div class="member nav-right-icon nav-right-icon-disnon"><a href="#"><img src="./image/svg/member.svg" alt=""></a></div>
            <div class="shopping nav-right-icon"><a href="#"><img src="./image/svg/shopbag.svg" alt=""></a></div>
            <div class="threeLine nav-right-icon"><i class="fas fa-bars navthreeLine"></i></div>
        </div>
        <!--左邊的所有按鈕 -->

    </nav>

    <!-- delete -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script src="./js/custom-j.js?version=<?php echo time();?>"></script>
    <!-- delete -->


</body>

</html>