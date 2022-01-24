<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">

  <title>Reset Password :: KiLO Client</title>

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
  <link rel="stylesheet" href="/assets/vendor/bootstrap-sweetalert/sweet-alert.css">

  
  <link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
  <!--[if lt IE 9]><script src="/assets/vendor/html5shiv/html5shiv.min.js"></script><![endif]--><!--[if lt IE 10]><script src="/assets/vendor/media-match/media.match.min.js"></script>
    <script src="/assets/vendor/respond/respond.min.js"></script><![endif]--><script src="/assets/vendor/modernizr/modernizr.js"></script><script src="/assets/vendor/breakpoints/breakpoints.js"></script><script>Breakpoints();</script></head><body class="page-forgot-password layout-full">
  <!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->


  
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <h2>Forgot Your Password?</h2>
      <p>Input your KiLO Passport email to reset your password</p>

      <form role="form" id="resetpass" name="resetpass">
        <div class="form-group">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your Email">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Reset Your Password</button><br><a href="/me/">Back to Login</a>
        </div>
      </form>

      <footer class="page-copyright">
        <p>&copy; 2017 KiLO - All Rights Reserved.</p>
      </footer>
    </div>
  </div>
 

  
  <script src="/assets/vendor/jquery/jquery.js"></script><script src="/assets/vendor/bootstrap/bootstrap.js"></script><script src="/assets/vendor/animsition/jquery.animsition.js"></script><script src="/assets/vendor/asscroll/jquery-asScroll.js"></script><script src="/assets/vendor/mousewheel/jquery.mousewheel.js"></script><script src="/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script><script src="/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script><script src="/assets/vendor/switchery/switchery.min.js"></script><script src="/assets/vendor/intro-js/intro.js"></script><script src="/assets/vendor/screenfull/screenfull.js"></script><script src="/assets/vendor/slidepanel/jquery-slidePanel.js"></script><script src="/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script><script src="/assets/js/core.js"></script><script src="/assets/js/site.js"></script><script src="/assets/js/sections/menu.js"></script><script src="/assets/js/sections/menubar.js"></script><script src="/assets/js/sections/gridmenu.js"></script><script src="/assets/js/sections/sidebar.js"></script><script src="/assets/js/configs/config-colors.js"></script><script src="/assets/js/configs/config-tour.js"></script><script src="/assets/js/components/asscrollable.js"></script><script src="/assets/js/components/animsition.js"></script><script src="/assets/js/components/slidepanel.js"></script><script src="/assets/js/components/switchery.js"></script><script src="/assets/js/components/bootstrap-sweetalert.js"></script><script src="/assets/examples/js/advanced/bootbox-sweetalert.js"></script><script>!function(n,t,e){"use strict";var i=t.Site;e(n).ready(function(){i.run()})}(document,window,jQuery);</script>
  <script>
		$("#resetpass").submit(function() {

    var url = "/me/forgot-password";
	
    $.ajax({
           type: "POST",
           url: url,
           data: $("#resetpass").serialize(), 
           success: function(data)
           {
	        
	           swal("Success!", "Your new password has been sent to you.", "success")
           }
         });

    return false; 
});
	</script>
  
  </body></html>