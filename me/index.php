<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="author" content="Team KiLO">

    <title>Login to MyKiLO</title>

    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/icon.png">


    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/css/site.min.css">


    <link rel="stylesheet" href="/assets/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/assets/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/assets/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/assets/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/assets/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/assets/vendor/flag-icon-css/flag-icon.css">


    <link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <style>
        .page-login-v2 {
            height: 100%
        }

        .page-login-v2:before {
            background-image: url(/assets/images/background.jpg)
        }

        .page-login-v2.page-dark.layout-full:after {
            background-color: rgba(38, 50, 56, 0)
        }

        .page-login-v2 .page-brand-info {
            margin: 220px 100px 0 90px
        }

        .page-login-v2 .page-brand-info .brand-img {
            vertical-align: middle
        }

        .page-login-v2 .page-brand-info .brand-text {
            display: inline-block;
            margin: 11px 0 11px 20px;
            vertical-align: middle
        }

        .page-login-v2 .page-brand-info p {
            max-width: 650px;
            opacity: .6
        }

        .page-login-v2 .page-login-main {
            position: absolute;
            top: 0;
            right: 0;
            height: auto;
            min-height: 100%;
            padding: 150px 60px 180px;
            color: #76838f;
            background: rgba(46, 46, 46, .83)
        }

        .page-login-v2 .page-login-main .brand {
            margin-bottom: 60px
        }

        .page-login-v2 .page-login-main .brand-img {
            vertical-align: middle
        }

        .page-login-v2 .page-login-main .brand-text {
            display: inline-block;
            margin: 11px 0 11px 20px;
            color: #62a8ea;
            vertical-align: middle
        }

        .page-login-v2 form {
            width: 350px;
            margin: 45px 0 20px
        }

        .page-login-v2 form>button {
            margin-top: 38px
        }

        .page-login-v2 form a {
            margin-left: 20px
        }

        .page-login-v2 footer {
            position: absolute;
            bottom: 0;
            left: 50%;
            height: 100px;
            margin: 50px 0;
            text-align: center;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            -o-transform: translate(-50%, 0);
            transform: translate(-50%, 0)
        }

        .page-login-v2 .social .icon,
        .page-login-v2 .social .icon:active,
        .page-login-v2 .social .icon:hover {
            color: #fff
        }

        @media (min-width:992px) {
            .page-login-v2 .page-content {
                padding-right: 500px
            }
        }

        @media (max-width:768px) {
            .page-login-v2 .page-login-main {
                padding-top: 60px
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .page-login-v2 .page-login-main {
                padding-top: 80px
            }
            .page-login-v2 .page-brand-info {
                margin: 160px 0 0 35px
            }
            .page-login-v2 .page-brand-info>p {
                color: transparent;
                opacity: 0
            }
        }

        @media (max-width:767px) {
            .page-login-v2 .page-login-main {
                width: 100%;
                padding-top: 60px
            }
            .page-login-v2 form {
                width: auto
            }
        }

        @media (max-width:480px) {
            .page-login-v2 .page-login-main {
                padding: 50px 30px 180px
            }
            .page-login-v2 form {
                width: auto
            }
        }
    </style>
    <!--[if lt IE 9]><script src="/assets/vendor/html5shiv/html5shiv.min.js"></script><![endif]-->
    <!--[if lt IE 10]><script src="/assets/vendor/media-match/media.match.min.js"></script>
    <script src="/assets/vendor/respond/respond.min.js"></script><![endif]-->
    <script src="/assets/vendor/modernizr/modernizr.js"></script>
    <script src="/assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="page-login-v2 layout-full page-dark">
    <!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->



    <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content">
            <div class="page-brand-info">
                <div class="brand" style="text-align:center">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 634 384.9" width="450px" style="max-width:90%" enable-background="new 0 0 634 384.9" xml:space="preserve">
<path fill="#fff" d="M214.9,354.6c-1.1,1.6-2.8,2.9-4.9,3.3c-2.3,0.4-4.6-0.4-6.7-2.6L76,222.4l-30.2,55l17.4,98.9
	c0.9,4.9-0.8,7.5-5.7,8.4c-4.9,0.9-7.4-1.1-8.2-6L0.2,99.9C-0.6,95.3,1.1,92.8,6,92c4.9-0.9,7.4,1.1,8.1,5.5l27.7,157l101-184.2
	c0.9-1.8,2.6-2.8,5.1-3.3c1.9-0.3,3.6,0.1,5.5,1.4c1.7,1.4,2.9,2.8,3.2,4.7c0.3,1.6,0.1,3.1-0.9,4.2L83.4,208.7l130.7,137.2
	c0.9,1.3,1.6,2.3,1.8,3.5C216.4,351.2,216,352.9,214.9,354.6z"></path>
<path fill="#fff" d="M260.1,341.6c0.3,1.9,0.1,3.6-1,5.4c-1.1,1.6-2.6,2.8-4.5,3.2s-3.8,0-5.3-1.5c-1.6-1.1-2.7-2.9-3-4.7
	l-30.9-175.1c-0.3-1.9,0.3-3.6,1.2-5.2c1.1-1.6,2.4-2.6,4.3-2.9c4.9-0.9,7.4,1.1,8.1,5.5L260.1,341.6L260.1,341.6z"></path>
<path fill="#fff" d="M218.4,93c-1.9,3-4.7,4.6-8.1,5.3c-3.5,0.6-6.7,0-9.7-2.1c-3-2.1-4.7-4.9-5.3-8.4c-0.6-3.5,0-6.7,2.2-9.5
	c2.1-2.8,4.9-4.7,8.4-5.3c3.5-0.6,6.7,0,9.5,2.2c2.7,1.9,4.6,4.7,5.3,8.1C221.1,86.7,220.3,90,218.4,93z"></path>
<path fill="#fff" d="M456.6,314.3l-129,22.7c-4.9,0.9-8.7-0.8-9.6-5.7L268.8,52.5c-0.8-4.6,2.1-7.3,6.9-8.1
	c4.9-0.9,8.5,0.9,9.3,5.3l48,272.1l121.1-21.4c3.9-0.7,6.4,1,7.2,5.9C462.3,311.2,460.5,313.7,456.6,314.3z"></path>
<path fill="#fff" d="M576.6,11.7C559.9,1,540.2-2.5,516.3,1.7c-23.9,4.2-41.4,14.2-53.2,29.9c-11.8,15.7-14.8,38-9.8,66.4
	l22.9,130.2c5.1,28.7,15.5,48.4,31.9,59.1c16.7,10.7,36.2,14.2,60,10c23.9-4.2,41.4-14.2,53.5-30c12-15.7,15-38,10-66.5L608.7,70.7
	C603.7,42,593.3,22.3,576.6,11.7z M616.9,195.6c4.5,25.3,2.2,45-7.6,58.9c-9.8,13.8-24.2,22.5-44,26c-19.7,3.5-35.9,0.2-49.8-9.5
	c-13.7-9.7-22.6-27.2-27.1-52.8L468,102.5c-4.5-25.3-2.2-45,7.4-58.8c9.6-13.8,24.1-22.5,43.8-26c19.7-3.5,36.1-0.2,50,9.4
	c13.9,9.6,22.8,27.2,27.3,52.7L616.9,195.6z"></path>
<g></g>
<g></g>
<g></g>
<g></g>
<g></g>
<g></g>
</svg>
                </div>
            </div>

            <div class="page-login-main">
                <div class="brand visible-xs">
                    <h3 class="brand-text font-size-40" style="color: #cbcbcb">Login to MyKiLO</h3>
                </div>
                <h3 class="font-size-24" style="color:#fff"><br><br>Login to MyKiLO</h3>

                <form method="post" action="/my/index.php">
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group clearfix">
                        <div class="checkbox-custom checkbox-inline checkbox-info pull-left">
                            <input type="checkbox" id="remember" name="checkbox">
                            <label for="inputCheckbox">Remember me</label>
                        </div>
                        <a class="pull-right" href="/me/forgot-password">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>

                <footer class="page-copyright">
                    <p style="color:#d0d0d0;padding-top:100px">&copy; 2017 KiLO. All Rights Reserved.</p>
                </footer>
            </div>

        </div>
    </div>




    <script src="/assets/vendor/jquery/jquery.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="/assets/vendor/animsition/jquery.animsition.js"></script>
    <script src="/assets/vendor/asscroll/jquery-asScroll.js"></script>
    <script src="/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
    <script src="/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="/assets/vendor/switchery/switchery.min.js"></script>
    <script src="/assets/vendor/intro-js/intro.js"></script>
    <script src="/assets/vendor/screenfull/screenfull.js"></script>
    <script src="/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <script src="/assets/js/core.js"></script>
    <script src="/assets/js/site.js"></script>
    <script src="/assets/js/sections/menu.js"></script>
    <script src="/assets/js/sections/menubar.js"></script>
    <script src="/assets/js/sections/gridmenu.js"></script>
    <script src="/assets/js/sections/sidebar.js"></script>
    <script src="/assets/js/configs/config-colors.js"></script>
    <script src="/assets/js/configs/config-tour.js"></script>
    <script src="/assets/js/components/asscrollable.js"></script>
    <script src="/assets/js/components/animsition.js"></script>
    <script src="/assets/js/components/slidepanel.js"></script>
    <script src="/assets/js/components/switchery.js"></script>
    <script src="/assets/js/components/jquery-placeholder.js"></script>
    <script>
        ! function(n, t, e) {
            "use strict";
            var i = t.Site;
            e(n).ready(function() {
                i.run()
            })
        }(document, window, jQuery);
    </script>
</body>

</html>