<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon1.ico">
    <title>QUOTE - New Social Community</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
 	<link href="assets/css/animate.css" rel="stylesheet">
  	<link href="assets/css/prettyPhoto.css" rel="stylesheet">
  	<link href="assets/css/pe-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Cabin:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->    
	<script src="assets/js/jquery.js"></script>  
	<script src="assets/js/modernizr.custom.js"></script>   
	<script type="text/javascript">
	$(document).ready(function(){
	  	jQuery('#headerwrap').backstretch([
	      "assets/img/bg/bg1.jpg",
	      "assets/img/bg/bg2.jpg",
	      "assets/img/bg/bg3.jpg"
	    ], {duration: 8000, fade: 500});

		// Map Position And Settings
	    $("#mapwrapper").gMap({ controls: false,
	        scrollwheel: false,
	        markers: [{     
	            latitude:40.7566,
	            longitude: -73.9863,
	        icon: { image: "assets/img/marker.png",
	            iconsize: [44,44],
	            iconanchor: [12,46],
	            infowindowanchor: [12, 0] } }],
	        icon: { 
	            image: "assets/img/marker.png", 
	            iconsize: [26, 46],
	            iconanchor: [12, 46],
	            infowindowanchor: [12, 0] },
	        latitude:40.7566,
	        longitude: -73.9863,
	        zoom: 14 
	    });
	});
	</script>
</head>

<body> 

  	<div id="preloader"></div>

    <div id="search-wrapper">
        <div class="container">
            <input id="search-box" placeholder="Search"><span class="close-trigger"><i class="fa fa-angle-up"></i></span>
        </div>
    </div>
    
    <!-- END NAV -->
    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <i class="fa fa-bars menu-close"></i>
            <div id="menu-logo">
                <h2><span class="pe-7s-chat logo-icon"></span> Quote</h2>
            </div>
            <ul id="main-menu">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Главная страница <i class="fa fa-home menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Главная страница</a></li>
                        <li><a href="index-blog.php">Главная страница блога</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Блоги <i class="fa fa-folder menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="single-post.php">Интересный пост</a></li>
                        <li><a href="404.php">Популярный пост</a></li>
                        <li><a href="category.php">Категории</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Фотографии <i class="fa fa-camera menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="portfolio-2-column.php">Фотографии за неделю</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Прочее <i class="fa fa-file menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="about-us.php">Информация о нас</a></li>
                        <li><a href="contact-us.php">Связь с нами</a></li>
                    </ul>
                </li>
            </ul>

            <ul id="social-icons">
                <li class="facebook"><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li class="instagram"><a href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- END NAV -->
	
	<!-- MAIN IMAGE SECTION -->
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div id="bannertext" class="col-lg-8 col-lg-offset-2">
					<h1 class="fade-down gap">Спасибо - <?php echo htmlspecialchars($_POST['name']); ?></h1>
					<h2 class="fade-up">Вы согласились на рассылку от нашего сайта.</h2>
					<div class="spacer"></div>
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->


	<a id="gototop" class="gototop no-display" href="#"><i class="fa fa-angle-up"></i></a>
	<!-- END MAIN FOOTER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>    
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/imagesloaded.js"></script>
	<script src="assets/js/prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="assets/js/init.js"></script>
  </body>
</html>
