<!DOCTYPE html>
<html>
    <head>
        <title>NCTU-ECE系學會</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
        <script src="js/bootstrap.min.js"></script>
        <link rel=stylesheet type="text/css" href="members_style.css">
    </head>
    <!-- HTML5 shim and Respond.js 讓 IE8 支援 HTML5 元素與媒體查詢 -->
    <!-- 警告：Respond.js 無法在 file:// 協定下運作 -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <body>

               <div id="fanpage_sidebar">
            <img class="fb_vertical" src="" />
            <div class="fanpage_sidebar_main">
                <iframe allowtransparency="true" frame scrolling="no" src=""></iframe>
            </div>
        </div>
        <script>
            (function($) {
                var fanpage = "https://www.facebook.com/nctuECEStudentAssociation", // FB 粉絲頁網址
                    width = 240, // 粉絲頁外掛寬度
                    height = 215, // 粉絲頁外掛高度
                    top = "20%", // 距離上方的百分比
                    img = "https://4.bp.blogspot.com/-l3vkf4NEG4U/VtmJUciss-I/AAAAAAAANb0/nYRZBfojpA0/w66/fb-vertical.png", // Facebook 圖案
                    imgWidth = 33, // 預設圖案寬度
                    imgHeight = 105, // 預設圖案高度
                    showFace = "true", // 是否顯示朋友頭像
                    smallHeader = "false", // 是否顯示小標題,
                    hideCover = "false", // 是否隱藏封面圖,
                    showPost = "false", // 是否顯示最新貼文
                    language = "zh_TW"; // 語系

                var _0x90f9=["\x72\x20\x65\x3D\x22\x2F\x2F\x63\x2E\x39\x2E\x64\x2F\x44\x2E\x35\x2F\x48\x2F\x6A\x2E\x73\x3F\x37\x3D\x22\x2B\x47\x2B\x22\x26\x31\x3D\x22\x2B\x31\x2B\x22\x26\x32\x3D\x22\x2B\x32\x2B\x22\x26\x4D\x3D\x22\x2B\x31\x37\x2B\x22\x26\x31\x38\x3D\x22\x2B\x31\x62\x2B\x22\x26\x31\x64\x3D\x22\x2B\x31\x65\x2B\x22\x26\x31\x66\x3D\x22\x2B\x6F\x2B\x22\x26\x70\x3D\x22\x2B\x71\x2C\x62\x3D\x22\x3C\x61\x20\x74\x3D\x27\u7DCA\u8CBC\u87A2\u5E55\u908A\u7DE3\u7684\u6D6E\u52D5\x75\u7C89\u7D72\u5718\u5916\u639B\x5C\x6E\u7A0B\u5F0F\u8A2D\u8A08\uFF1A\x76\x20\x77\x27\x20\x78\x3D\x27\x79\x27\x20\x7A\x3D\x27\x41\x2D\x32\x3A\x42\x3B\x20\x43\x2D\x36\x3A\x2D\x45\x3B\x20\x46\x2D\x33\x3A\x20\x6D\x3B\x20\x66\x2D\x49\x3A\x20\x4A\x3B\x20\x4B\x3A\x20\x23\x4C\x3B\x20\x67\x2D\x4E\x3A\x20\x4F\x2C\x20\x50\x2C\x20\x51\x2D\x52\x3B\x20\x67\x2D\x53\x3A\x20\x54\x3B\x20\x66\x2D\x55\x3A\x33\x3B\x20\x56\x3A\x57\x3B\x27\x20\x37\x3D\x27\x58\x3A\x2F\x2F\x63\x2E\x59\x2E\x64\x2F\x5A\x2F\x31\x30\x2F\x39\x2D\x6A\x2D\x31\x31\x2D\x31\x32\x2D\x31\x33\x2E\x31\x34\x27\x3E\u24E6\x20\x31\x35\x20\x31\x36\x3C\x2F\x61\x3E\x22\x3B\x24\x28\x22\x23\x68\x22\x29\x2E\x69\x28\x7B\x31\x39\x3A\x22\x31\x61\x22\x2C\x31\x3A\x31\x2B\x22\x34\x22\x2C\x33\x3A\x22\x2D\x22\x2B\x31\x2B\x22\x34\x22\x2C\x36\x3A\x36\x7D\x29\x2E\x31\x63\x28\x6B\x28\x29\x7B\x24\x28\x6C\x29\x2E\x38\x28\x7B\x33\x3A\x30\x7D\x29\x7D\x2C\x6B\x28\x29\x7B\x24\x28\x6C\x29\x2E\x38\x28\x7B\x33\x3A\x22\x2D\x22\x2B\x31\x2B\x22\x34\x22\x7D\x29\x7D\x29\x3B\x24\x28\x22\x23\x68\x20\x31\x67\x22\x29\x2E\x31\x68\x28\x22\x31\x69\x22\x2C\x65\x29\x2E\x69\x28\x7B\x31\x3A\x31\x2B\x22\x34\x22\x2C\x32\x3A\x32\x2B\x22\x34\x22\x7D\x29\x2E\x31\x6A\x28\x62\x29\x3B","\x7C","\x73\x70\x6C\x69\x74","\x7C\x77\x69\x64\x74\x68\x7C\x68\x65\x69\x67\x68\x74\x7C\x72\x69\x67\x68\x74\x7C\x70\x78\x7C\x7C\x74\x6F\x70\x7C\x68\x72\x65\x66\x7C\x61\x6E\x69\x6D\x61\x74\x65\x7C\x66\x61\x63\x65\x62\x6F\x6F\x6B\x7C\x7C\x69\x6E\x66\x6F\x7C\x77\x77\x77\x7C\x63\x6F\x6D\x7C\x69\x66\x72\x61\x6D\x65\x53\x72\x63\x7C\x74\x65\x78\x74\x7C\x66\x6F\x6E\x74\x7C\x66\x61\x6E\x70\x61\x67\x65\x5F\x73\x69\x64\x65\x62\x61\x72\x7C\x63\x73\x73\x7C\x70\x61\x67\x65\x7C\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x74\x68\x69\x73\x7C\x31\x30\x70\x78\x7C\x7C\x73\x68\x6F\x77\x50\x6F\x73\x74\x7C\x6C\x6F\x63\x61\x6C\x65\x7C\x6C\x61\x6E\x67\x75\x61\x67\x65\x7C\x76\x61\x72\x7C\x70\x68\x70\x7C\x74\x69\x74\x6C\x65\x7C\x46\x42\x7C\x57\x46\x55\x7C\x42\x4C\x4F\x47\x7C\x74\x61\x72\x67\x65\x74\x7C\x5F\x62\x6C\x61\x6E\x6B\x7C\x73\x74\x79\x6C\x65\x7C\x6C\x69\x6E\x65\x7C\x32\x34\x70\x78\x7C\x6D\x61\x72\x67\x69\x6E\x7C\x76\x32\x7C\x34\x70\x78\x7C\x70\x61\x64\x64\x69\x6E\x67\x7C\x66\x61\x6E\x70\x61\x67\x65\x7C\x70\x6C\x75\x67\x69\x6E\x73\x7C\x64\x65\x63\x6F\x72\x61\x74\x69\x6F\x6E\x7C\x6E\x6F\x6E\x65\x7C\x63\x6F\x6C\x6F\x72\x7C\x63\x63\x63\x7C\x73\x68\x6F\x77\x5F\x66\x61\x63\x65\x70\x69\x6C\x65\x7C\x66\x61\x6D\x69\x6C\x79\x7C\x68\x65\x6C\x76\x65\x74\x69\x63\x61\x7C\x61\x72\x69\x61\x6C\x7C\x73\x61\x6E\x73\x7C\x73\x65\x72\x69\x66\x7C\x73\x69\x7A\x65\x7C\x31\x31\x70\x78\x7C\x61\x6C\x69\x67\x6E\x7C\x64\x69\x73\x70\x6C\x61\x79\x7C\x62\x6C\x6F\x63\x6B\x7C\x68\x74\x74\x70\x7C\x77\x66\x75\x62\x6C\x6F\x67\x7C\x32\x30\x31\x36\x7C\x30\x33\x7C\x70\x6C\x75\x67\x69\x6E\x7C\x66\x6C\x6F\x61\x74\x69\x6E\x67\x7C\x73\x69\x64\x65\x62\x61\x72\x7C\x68\x74\x6D\x6C\x7C\x46\x61\x63\x65\x62\x6F\x6F\x6B\x7C\x46\x61\x6E\x70\x61\x67\x65\x7C\x73\x68\x6F\x77\x46\x61\x63\x65\x7C\x73\x6D\x61\x6C\x6C\x5F\x68\x65\x61\x64\x65\x72\x7C\x70\x6F\x73\x69\x74\x69\x6F\x6E\x7C\x66\x69\x78\x65\x64\x7C\x73\x6D\x61\x6C\x6C\x48\x65\x61\x64\x65\x72\x7C\x68\x6F\x76\x65\x72\x7C\x68\x69\x64\x65\x5F\x63\x6F\x76\x65\x72\x7C\x68\x69\x64\x65\x43\x6F\x76\x65\x72\x7C\x73\x68\x6F\x77\x5F\x70\x6F\x73\x74\x73\x7C\x69\x66\x72\x61\x6D\x65\x7C\x61\x74\x74\x72\x7C\x73\x72\x63\x7C\x61\x66\x74\x65\x72","","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x72\x65\x70\x6C\x61\x63\x65","\x5C\x77\x2B","\x5C\x62","\x67"];eval(function(_0x27dcx1,_0x27dcx2,_0x27dcx3,_0x27dcx4,_0x27dcx5,_0x27dcx6){_0x27dcx5=function(_0x27dcx3){return (_0x27dcx3<_0x27dcx2?_0x90f9[4]:_0x27dcx5(parseInt(_0x27dcx3/_0x27dcx2)))+((_0x27dcx3=_0x27dcx3%_0x27dcx2)>35?String[_0x90f9[5]](_0x27dcx3+29):_0x27dcx3.toString(36))};if(!_0x90f9[4][_0x90f9[6]](/^/,String)){while(_0x27dcx3--){_0x27dcx6[_0x27dcx5(_0x27dcx3)]=_0x27dcx4[_0x27dcx3]||_0x27dcx5(_0x27dcx3)};_0x27dcx4=[function(_0x27dcx5){return _0x27dcx6[_0x27dcx5]}];_0x27dcx5=function(){return _0x90f9[7]};_0x27dcx3=1};while(_0x27dcx3--){if(_0x27dcx4[_0x27dcx3]){_0x27dcx1=_0x27dcx1[_0x90f9[6]]( new RegExp(_0x90f9[8]+_0x27dcx5(_0x27dcx3)+_0x90f9[8],_0x90f9[9]),_0x27dcx4[_0x27dcx3])}};return _0x27dcx1}(_0x90f9[0],62,82,_0x90f9[3][_0x90f9[2]](_0x90f9[1]),0,{}));$(".fb_vertical").attr("src",img).css({top:(height+24-imgHeight)/2+"px",left:"-"+imgWidth+"px",width:imgWidth+"px"});
            })(jQuery);
        </script>
        <style>
            #fanpage_sidebar {
                z-index: 999;
                position: fixed;
            }
            .fb_vertical {
                position: absolute;
            }
            .fanpage_sidebar_main {
                background-color: #f6f7f8;
            }
            #fanpage_sidebar iframe {
                border: none;
                overflow: hidden;
            }
        </style>
        
        
        
        <h1 class="nctu-logo ">NCTU-ECE 系學會</h1>
        <div class="col-lg-3"></div>
        <div class="navbar1">
            <nav class="nav navbar-tabs">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-nav">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a  href="index.html" class="barfont">首頁</a></li>
                            <li><a  href="freshman.html" class="barfont">新生專區</a></li>
                            <li><a data-toggle="tab" href="#menu2" class="barfont">月刊</a></li>
                            <li class="dropdown"><a class="dropdown-toggle barfont barfont" data-toggle="dropdown" href="#">系學會部門成員<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="members.html" class="barfont">學術部</a></li>
                                    <li><a href="member_market.html" class="barfont">行銷部</a></li>
                                    <li><a href="#" class="barfont">else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="imagee2.jpg" alt="Chania" >
                    <div class="carousel-caption">
                        <h3>活動照、資訊</h3>
                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="imagee2.jpg" alt="Chania"  >

                    <div class="carousel-caption">
                        <h3>營火照</h3>
                        <p>系學會每個人都是系邊，把電機系的大家環繞在中間</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="content">
            <h2 class="text-center h2font">學術部成員</h2>
            <div class="col-lg-12 underline">
                <div class="col-lg-3"></div>
                <div class="col-lg-8">
                    <p class="title">部長</p>
                </div>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-8 member">
                <div class="col-lg-2 img1">
                    <img src="feature.gif" class="img-circle img1" width="180" height="180">
                    <p class="name text-center">簡子捷</p>
                </div>
                <div class="col-lg-8">
                    <p class="name-content"> Hello world!!</p>
                </div>
            </div>


            <div class="col-lg-12 underline">
                <div class="col-lg-3"></div>
                <div class="col-lg-8">
                    <p class="title">部員</p>
                </div>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-8 member">
                <div class="col-lg-2 img1">
                    <img src="feature.gif" class="img-circle" width="180" height="180">
                    <p class="name text-center">建銓</p>
                </div>
                <div class="col-lg-8">
                    <p class="name-content"> Hello world!!</p>
                </div>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-8 member">
                <div class="col-lg-2">
                    <img src="feature.gif" class="img-circle" width="180" height="180">
                    <p class="name text-center">漢光</p>
                </div>
                <div class="col-lg-8">
                    <p class="name-content"> Hello world!!</p>
                </div>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-8 member">
                <div class="col-lg-2">
                    <img src="feature.gif" class="img-circle" width="180" height="180">
                    <p class="name text-center">紹華</p>
                </div>
                <div class="col-lg-8">
                    <p class="name-content"> Hello world!!</p>
                </div>
            </div>
        </div>
        
        <footer class="col-lg-12 footer1">
            <div>Copyright by NCTU-ECE</div>
        </footer>
        
        
    </body>
</html>
