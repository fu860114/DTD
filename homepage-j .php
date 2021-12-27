<?php
require_once './db.inc.php';
require_once './header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ---delete--- -->
<link rel="stylesheet" href="./reset.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="./fontawesome/css/all.css">
<link rel="stylesheet" href="./font.css">
<!-- ---delete--- -->

<link rel="stylesheet" href="./homepage-j.css?version=<?php echo time(); ?>">

<body>

    <div class="body">
        <hero-section>
            <div class="hero-section">
                <div class="hero-section-title">
                    <h1 class="fel">Day to Day</h1>
                    <p class="fes nonelogintext">"A woman with good shoes is never ugly." -Coco Chanel</p>
                </div>
                <div class="hero-right-bar">
                    <p class="fexs">Scroll</p>
                    <div class="hero-right-bar-line"></div>
                </div>
                <div class="memberText">
                    <h1 class="fel">Welcome To</h1>
                    <h1 class="fel">Day to Day!</h1>
                    <p class="fes">"We provide all kinds of shoes and quality service!<br>Hope you can find the best shoes for you here!</p>
                </div>
                <div class="member-sheet">
                    <!--登入註冊半透明div -->
                    <div class="switch-login-regis">
                        <button class="dtdlogin addbutLine fcl">登入</button>
                        <div class="dtdloginrightline"></div>
                        <button class="dtdregist  fcl">註冊</button>
                    </div>
                    <div class="switch-login-regis-sheet">
                        <div class="switchLoginSheet ">
                            <input type="text" class="enteremail fcs" placeholder="請輸入電子郵件">
                            <input type="text" class="enterpsw fcs" placeholder="請輸入密碼">
                            <button class="loginbtn">
                                <p class="fcs forgetPswText">登入</p>
                            </button>
                            <div class="forget">
                                <button class="forgetPsw">
                                    <p class="">忘記密碼</p>
                                </button>
                                <div class="forgetPswrightline"></div>
                                <button class="forgetAcc">
                                    <p class="">忘記帳號</p>
                                </button>
                            </div>
                            <div class="sociaicon">
                                <i class="fab  fa-google-plus-g"></i>
                                <i class="fab  fa-facebook-f"></i>
                            </div>
                        </div>
                        <div class="switchRegisSheet displayNone">
                            <p class="retext fcs">姓名＊</p>
                            <input type="text" class="regentername fcs" placeholder="請輸入您的姓名">
                            <p class="retext fcs">電子信箱＊</p>
                            <input type="text" class="regenteremail fcs" placeholder="請輸入電子信箱">
                            <p class="retext fcs">密碼＊</p>
                            <input type="text" class="regenterpwd fcs" placeholder="請輸入密碼">
                            <p class="retext fcs">再次輸入密碼＊</p>
                            <input type="text" class="regreenterpwd fcs" placeholder="請再次輸入密碼">
                            <div class="regbtn">
                                <button class="regconfirm">
                                    <p class="fcs forgetPswText">確認</p>
                                </button>
                                <button class="regcancel">
                                    <p class="fcs forgetPswText">取消</p>
                                </button>
                            </div>
                            <div class="regor">
                                <div class="regorLine"></div>
                                <p class="fcs">or</p>
                                <div class="regorLine"></div>
                            </div>
                            <div class="sociaicon">
                                <i class="fab  fa-google-plus-g"></i>
                                <i class="fab  fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </hero-section>
        <!--手機縮起選單 -->
        <div class="threeLineBtn">
            <a href="">
                <p>搜尋</p>
            </a>
            <a href="">
                <p>會員</p>
            </a>
            <a href="" class="threeLineBtnDN">
                <p>新品</p>
            </a>
            <a href="" class="threeLineBtnDN">
                <p>品牌</p>
            </a>
            <a href="" class="threeLineBtnDN">
                <p>全館商品</p>
            </a>
            <a href="" class="threeLineBtnDN">
                <p>穿搭分享</p>
            </a>
            <a href="" class="threeLineBtnDN">
                <p>活動頁面</p>
            </a>
            <a href="">
                <p>比較與喜愛</p>
            </a>
        </div>
        <!--new arrival -->
        <section>
            <div class="new-section container">
                <div class="new-top new-section-laptop">
                    <div class="new-top-img">
                        <a href=""><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_4.jpg" alt=""></a>
                    </div>
                    <div class="new-top-text">
                        <h2 class="tx-center fes new-top-mrb">New Arrival</h2>
                        <p class="fcs new-top-mrb new-top-mrb">請早上進來就直接櫃台先刷QRcode簽到</p>
                        <button class="mg-atuo fcs new-top-mrb"><a href="">SHOP NOW</a></button>
                    </div>
                </div>
                <div class="new-buttom new-section-laptop">
                    <div class="new-buttom-card">
                        <div class="new-buttom-card-img"><a href=""><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_38.jpg" alt=""></a></div>
                        <div class="new-buttom-card-title">
                            <p class="fcs new-top-mrb">請早上進來就直接櫃台先刷QRcode簽到</p>
                        </div>
                        <div class="new-button-sn-div">
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                        </div>

                        <title></title>
                    </div>
                    <div class="new-buttom-card">
                        <div class="new-buttom-card-img"><a href=""><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_37.jpg" alt=""></a></div>
                        <div class="new-buttom-card-title">
                            <p class="fcs new-top-mrb">請早上進來就直接櫃台先刷QRcode簽到</p>
                        </div>
                        <div class="new-button-sn-div">
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                        </div>

                        <title></title>
                    </div>
                    <div class="new-buttom-card">
                        <div class="new-buttom-card-img"><a href=""><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_36.jpg" alt=""></a></div>
                        <div class="new-buttom-card-title">
                            <p class="fcs">請早上進來就直接櫃台先刷QRcode簽到</p>
                        </div>
                        <div class="new-button-sn-div">
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                        </div>

                        <title></title>
                    </div>
                </div>
                <!-- new-arrival-phone -->
                <div class="new-arrival-phone">
                    <h2 class="tx-center fes new-top-mrb">New Arrival</h2>
                    <div id="carouselExampleControls" class="carousel slide new-section-phone" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- ---first---- -->
                          <div class="carousel-item active new-arrival-phone-card">
                              <div class="new-arrival-phone-card-img">
                                <img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_4.jpg" class="d-block w-100" alt="...">
                              </div>

                            <p class="fcs new-top-mrb new-arrival-phone-name">請早上進來就直接櫃台先刷QRcode簽到</p>
                            <div class="new-arrival-phone-button">
                                <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            </div> 
                          </div>
                          <!-- ---second---- -->
                          <div class="carousel-item new-arrival-phone-card">
                              <div class="new-arrival-phone-card-img">
                                <img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_38.jpg" class="d-block w-100" alt="...">
                              </div>
                            
                            <p class="fcs new-top-mrb new-arrival-phone-name">請早上進來就直接櫃台先刷QRcode簽到</p>
                            <div class="new-arrival-phone-button">
                                <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            </div> 
                          </div>
                          <!-- ---third---- -->
                          <div class="carousel-item new-arrival-phone-card">
                              <div class="new-arrival-phone-card-img">
                                <img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_37.jpg" class="d-block w-100" alt="...">
                              </div>
                            
                            <p class="fcs new-top-mrb new-arrival-phone-name">請早上進來就直接櫃台先刷QRcode簽到</p>
                            <div class="new-arrival-phone-button">
                                <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            </div> 
                          </div> 
                          <!-- ---forth---- -->
                          <div class="carousel-item new-arrival-phone-card">
                            <div class="new-arrival-phone-card-img">
                                <img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_36.jpg" class="d-block w-100" alt="...">
                            </div>
                            
                            <p class="fcs new-top-mrb new-arrival-phone-name">請早上進來就直接櫃台先刷QRcode簽到</p>
                            <div class="new-arrival-phone-button">
                                <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            </div> 
                          </div> 
                          <!-- ---pre next button---- -->
                        </div>
                       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </button>
                      </div>
                </div>
            </div>

            <!--bestseller -->
            <div class="bestseller">
                <div class="bestsellerbg">
                    <p class="fes bestseller-phpne-title">Bestseller</p>
                    <div class="bestseller-text-div">
                        <div class="bestseller-text">
                            <p class="fes bestseller-mrb">Bestseller</p>
                            <p class="fcs">請早上進來就直接櫃台先刷QRcode簽到請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!PS.若要請假</p>
                        </div>
                        <div class="bestseller-text-button">
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                        </div>
                    </div>

                    <div class="bestsellerimg-2">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <a href=""><img class="d-block w-100" src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_22.jpg" alt=""></a>
                                    <img src="..." class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./image/hh11.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./image/ls21.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>

                        <!-- <a href=""><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_22.jpg" alt=""></a> -->
                    </div>

                    <div class="bestseller-text-div-2">
                        <div class="bestseller-text">
                            <p class="fes bestseller-mrb-just">Bestseller</p>
                            <p class="fcs">請早上進來就直接櫃台先刷QRcode簽到請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!PS.若要請假</p>
                        </div>
                        <div class="bestseller-text-button">
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                            <button class="new-button-sn fcs"><a href="">SHOP NOW</a></button>
                        </div>
                    </div>
                    <div class="bestseller-card-phone">
                        <div class="bestseller-card-phone-img"><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_22.jpg" alt=""></div>
                        <p class="bestseller-card-phone-name fcs">商品名稱</p>
                    </div>
                    <div class="bestseller-card-phone">
                        <div class="bestseller-card-phone-img"><img src="./image/hh11.jpg" alt=""></div>
                        <p class="bestseller-card-phone-name fcs">商品名稱</p>
                    </div>
                    <div class="bestseller-card-phone">
                        <div class="bestseller-card-phone-img"><img src="./image/ls21.jpg" alt=""></div>
                        <p class="bestseller-card-phone-name fcs">商品名稱</p>
                    </div>

                </div>
                <div class="bestsellerimg">
                    <a href=""><img src="./dtdshoes/LINE_ALBUM_Ppt素材_211118_22.jpg" alt=""></a>
                </div>

            </div>

            <!--brand -->
            <div class="brand container">
                <div class="brand-text">
                    <div class="brand-text-title brand-text-mrb">
                        <p class="fes">Cooperation brand</p>
                    </div>
                    <div class="brand-text-info">
                        <p class="fcs">請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!
                            PS.若要請假，務請到2樓櫃台拿<假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!

                                PS.若要請假，務請到2樓櫃台拿<假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!

                                    PS.若要請假，務請到2樓櫃台拿<假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!

                                        樓櫃台先代收再轉交導師</p>
                    </div>
                </div>
                <div class="brand-img">
                    <div class="brand-img-title brand-text-mrb">
                        <p class="fes">Brand</p>
                    </div>
                    <div class="brand-img-logo">
                        <div class="logo logo-phone"><img src="./image/ann_s.jpeg" alt=""></div>
                        <div class="logo logo-phone"><img src="./image/as.jpeg" alt=""></div>
                        <div class="logo logo-phone"><img src="./image/BONJOUR.jpeg" alt=""></div>
                        <div class="logo logo-phone"><img src="./image/d+af.png" alt=""></div>
                        <div class="logo logo-phone-none"><img src="./image/diana.png" alt=""></div>
                        <div class="logo logo-hei logo-phone-none"><img src="./image/dk.jpeg" alt=""></div>
                        <div class="logo logo-phone-none"><img src="./image/fair-lady.jpeg" alt=""></div>
                        <div class="logo logo-phone-none"><img src="./image/fm.jpeg" alt=""></div>
                        <div class="logo logo-phone-none"><img src="./image/grace-gift.png" alt=""></div>
                    </div>
                </div>

            </div>
            <!-- 手機頁面view more -->
            <div class="brand-text-2">
                <div class="brand-text-title brand-text-mrb view-more-j">
                    <p class="fes">VIEW MORE</p>
                </div>
                <div class="brand-text-info-2 displayNone">
                    <p class="fcs">請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!
                        PS.若要請假，務請到2樓櫃台拿<假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!

                            PS.若要請假，務請到2樓櫃台拿<假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!

                                PS.若要請假，務請到2樓櫃台拿<假單>填寫後給導師簽名，若沒碰到導師，可請2樓櫃台先代收再轉交導師請早上進來就直接櫃台先刷QRcode簽到，另 下午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!午課程結束後記得要再到櫃台刷QRcode簽退哦，請大家養成習慣，並互相提醒一下哦!

                                    樓櫃台先代收再轉交導師</p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="./js/custom-j.js?version=<?php echo time(); ?>"></script>