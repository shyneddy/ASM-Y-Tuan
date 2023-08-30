<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&family=Sofia+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <style>
        .video-wrapper iframe {
            /* min-height: 1576px; */
            /* height: 100%;
            width: 100%;
            position: relative;
            background-color: antiquewhite; */
        }
    </style>

</head>

<body>
    <div class="app">
        <div class="header">
            <!-- Top Header -->
            <div class="top-header">
                <div class="form-user">
                    <a href="./iframe/Register.php" target="" class="sign-in">Đăng ký</a>
                    <span class="separate">|</span>
                    <a href="" class="sign-out">Đăng Nhập</a>
                </div>
                <div class="list-support">
                    <div class="form-support">
                        <div class="icon-support">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="" class="link-support">betashop@sp.vn</a>
                    </div>
                    <div class="form-support">
                        <div class="icon-support">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="" class="link-support">1900 1311</a>
                    </div>
                </div>
            </div>

            <!-- Mid Header -->
            <div class="mid-header">
                <div class="logo-header">
                    <a href="\" class="logo-header__link">
                        <img class="logo-header__img" src="./assets/img/logoshop.png" alt="">
                    </a>
                </div>
                <div class="search-header">
                    <form action="/search" class="form-search-header">
                        <input type="text" class="search-header__input" placeholder="Tìm Kiếm...">
                    </form>
                    <div class="search-header__icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="cart-header">
                    <i class="cart-header__icon fa-solid fa-cart-shopping"></i>
                </div>
            </div>

            <!-- Navbar Header -->
            <div class="navbar-header">
                <nav class="header-nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item">
                            <a href="./iframe/Home.html" target="_page" class="header-nav__link">Trang Chủ</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="./iframe/Home.html" target="_page" class="header-nav__link">Giới Thiệu</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="./iframe/Home.html" target="_page" class="header-nav__link">Iphone</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="./iframe/Home.html" target="_page" class="header-nav__link">Oppo</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="./iframe/Home.html" target="_page" class="header-nav__link">Vivo</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


        <div class="video-wrapper" id="video-wrapper">
            <iframe id="my-iframe" class="iframe-custom" name="_page" src="./iframe/Home.html" frameborder="100%"
                width="100%" height="100%" scrolling="no" onload="handleLoad()"></iframe>
        </div>


        <div class=" footer">
            <div class="footer-wrap">
                <div class="footer-menu">
                    <ul class="footer-menu__list">
                        <li class="footer-menu__item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href=""> Giới Thiệu</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="">Iphone</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="">Oppo</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="">Vivo</a>
                        </li>
                    </ul>
                    <div class="footer-menu__social">
                        <ul class="footer-menu__social-list">
                            <li class="footer-menu__social-item">
                                <a href="" class="footer-menu__social-link">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="footer-menu__social-item">
                                <a href="" class="footer-menu__social-link">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="footer-menu__social-item">
                                <a href="" class="footer-menu__social-link">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="footer-menu__social-item">
                                <a href="" class="footer-menu__social-link">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-wrap__bottom">
                <div class="footer-bottom">
                    <div class="footer-copyright">
                        <div class="footer-copyright__made">
                            <span>Made in</span>
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="footer-copyright__fowered">
                            <span>. Fowered by</span>
                            <b>Beta Shop</b>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <script>
        console.log("scroll");
        function handleLoad() {
            var iframe = document.getElementById("my-iframe");
            console.log(iframe);
            iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
            var iframeParent = document.getElementById("video-wrapper");
            iframeParent.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';

        }


    </script>
</body>

</html>