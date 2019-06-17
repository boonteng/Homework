<html>
  <head>
	<?php
	session_start();
	$id=$_SESSION['id'];
	$username=$_SESSION['username'];
	
require 'popupbar.php';

	
	
	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homework Planner</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="https://file.myfontastic.com/5snkrxHHMrEY5ybaZhVHUH/icons.css">
    <!-- Google fonts - Raleway-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900">
    <!-- owl carousel-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- Device Mockups-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/css/device-mockups.min.css">
    <!-- Lightbox Pop up-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/072C19CD-B6CE-6B4D-BBE2-6A41CBA197E7/main.js" charset="UTF-8"></script></head>
  <body>
    <!-- Navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="index.html" class="navbar-brand">Homewerk</a>
         
 
            <div style="font-family: trebuchet ms,helvetica,sans-serif;color:white">Hello <?php echo $username ?></div>
			</ul>
			<a href="" name="signout" class="btn navbar-btn btn-outline-light ml-lg-3 d-none d-lg-block">Sign out</a>
			<form name="signoutform" action="signout.php" method="GET" hidden>
			
			
			</form>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Navbar-->
    <!-- Hero Section-->
    <section id="hero" class="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="text col-lg-6 col-md-12">
            <h3 class="h4 text-uppercase text-shadow text-thin">Welcome To</h3>
            <h1 class="text-shadow">HOMEWERK</h1>
            <p>Manage your homeworks and assignments wisely</p><a style="color:red" href="mainpage2.php" class="btn btn-light">START NOW</a>
         
		  
		  
		  </div>
          <div class="mockup col-lg-6 d-none d-lg-block"><img src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/img/hero-macbook.png" alt="Mockup" class="img-fluid"></div>
        </div>
      </div>
    </section>
    <!-- End Hero Section-->
	
	<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">red</option>
          <option value="peach">peach</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/img/template-mac.png" alt="" class="img-fluid"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
	<!-- JavaScript files-->
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/foliou/2-0-0/js/front.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
	  
	$('[name="signout"]').click(function(e)
	{
		$.Event(e).preventDefault();
		$(this).siblings('form').submit();
	});
		  
	$('[name="signoutform"]').submit(function(e)
	{
	    $.Event(e).preventDefault();
	    $.ajax({
	        url: $(this).attr('action'),
	        type: $(this).attr('method'),
	        data: $(this).serialize(),
	        dataType: 'JSON',
	    }).done(function(data)
	    {        
   	
	            new Noty({          
	                type: data.status,
	                text: data.message,            
	                timeout: 2000
	            }).show();
				
					setTimeout(function()
	            {
	               window.location = "index.php";
	            }, 1000);	
	        
	    
		
	    })
	});
	  
	  
	  
	  
    </script>
	</body>
</html>	
