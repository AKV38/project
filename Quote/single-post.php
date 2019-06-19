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
          "assets/img/portfolio/folio01.jpg"
        ], {duration: 8000, fade: 500});

		// Map Position And Settings
		$("#mapwrapper").gMap({ 
			controls: false,
			scrollwheel: false,
			draggable: false,
			latitude:40.7566,
			longitude: -73.9863,
			zoom: 11

		});
	});
    </script> 
  </head>

  <body class="single single-post"> 

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
	<div id="headerwrap" class="half">
   		<div class="container">
	    	<div class="gap"></div> 
        	<div id="bannertext" class="centered fade-down section-heading">
                <h2 class="main-title">Интересный пост</h2>
                <hr>

            </div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<div id="content-wrapper">
   		<div class="container">
   			<div class="gap"></div>
			<div class="row gap">
				<div class="col-md-2 nopadding">
					<p><img src="assets/img/team/tri.png" alt="" class="img-responsive" /></p>
					<p class="post-details">Автор <strong>Киров Никита</strong></p>
					<p class="post-details">Опубликовано <strong>16 Июня 2019</strong></p>
					<p class="post-details">Категория <strong>Новости</strong></p>
				</div>

				<div class="col-md-10 post-content">
					<p> Новость о задержании министра лесного комплекса Иркутской области Сергея Шеверды всколыхнула российские СМИ 7 июня. Чиновника подозревают в превышении должностных полномочий и нанесении ущерба в особо крупном размере, ему грозит до десяти лет лишения свободы. </p>

					<p>Сергей Шеверда является фигурантом уголовного дела о незаконной рубке леса на площади 120 га в природном заказнике «Туколонь» в Казачинско-Ленском районе. Ущерб, нанесенный государству вырубкой реликтовых деревьев, работники прокуратуры и следователи оценили в 748 млн рублей. Буквально через два дня Сергею Шеверде предъявили обвинение, которое повергло в шок многих профессиональных юристов. </p>

					<p>По версии следствия, министр не принял мер для остановки санитарной рубки в заказнике, которая якобы проводилась незаконно. В целом обоснование санрубки – это полномочия федералов, а именно – Рослесозащиты, и региональный министр не имеет даже теоретической возможности вмешиваться в этот процесс. </p>

                    <p>Кроме того, Сергея Шеверду обвиняют в непринятии мер, а это, по юридической логике, совершенно другая статья – халатность, и сроки наказания по ней другие. В шоке были и общественники, поскольку в день задержания министра проходили слушания в Общественной палате по результатам выезда рабочей группы на место проведения рубки. Ученые и экологи в этот день разгромили позицию природоохранного прокурора, который утверждал, что там растет реликтовый лес и что санитарные рубки в этом месте проводить нецелесообразно.</p>

					<div id="sharebox" class="btn-group mt gap">
				        <button class="btn btn-default btn-lg disabled">Share:</button>
						<a class="btn btn-default btn-lg" href="http://www.facebook.com/plugins/like.php?href=_URL_">
						   <i class="fa fa-thumbs-o-up fa-lg fb"></i>
						</a>
						<a class="btn btn-default btn-lg" href="http://twitter.com/share?url=_URL_&text=_ADDITIONAL_TEXT_&via=TWITTER_NAME">
						   <i class="fa fa-twitter fa-lg tw"></i>
						</a>
						<a class="btn btn-default google-plus-one btn-lg" href="https://apis.google.com/_/+1/fastbutton?usegapi=1&size=large&hl=en&url=_URL_">
						   <i class="fa fa-google-plus fa-2x google"></i>
						   <span class="google">1</span>
						</a>
						<a class="btn btn-default btn-lg" href="http://www.pinterest.com/pin/create/button/?url=_URL_&description=_DESCRIPTION_&media=_URL_TO_IMAGE_">
						   <i class="fa fa-pinterest fa-lg pinterest"></i>
						</a>
					</div>

					<hr class="gap">




				</div>
			</div>
		</div>
	</div>
	
    <!-- MAIN FOOTER -->
    <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="widget-title">Вы можете найти нас</h4>
                    <p>Ангарский политехнический техникум<br/>
                        Ангарск.<br/>
                        Тел: +79086515894<br/>
                        Email: <a href="mailto:#">addict.immortal@gmail.com</a>
                    </p>
                </div><!--col-lg-4-->
            </div><!-- row -->
        </div><!-- container -->
        <div id="footer-copyright">
            <div class="container">
                Created By AKV38
            </div>
        </div>
    </div>
    
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
