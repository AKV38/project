<!DOCTYPE html>
<html lang="ru">
<head>
	<style>
		.adme-img-copyright{
			font-size: 12px;
			margin-top: -15px;
			font-style: italic;
			line-height: 18px;
			color: #939393;
		}
	</style>
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
					<h1 class="fade-down gap"><span class="pe-7s-chat"></span> QUOTE</h1>
					<h2 class="fade-up">Новая социальное сообщество</h2>
					<div class="spacer"></div>			
				</div>
			</div><!-- row -->
		</div><!-- /container -->
		<span class="headerwrap-btn-wrap">
			<a href="#content-wrapper" class="headerwrap-btn"><i class="fade-up fa fa-angle-down"></i></a>
		</span>	
	</div><!-- /headerwrap -->

	<div id="content-wrapper">
	    <section id="about" class="section-wrapper">
	   		<div class="container">
	        	<div class="centered gap fade-down section-heading">
	                <h2 class="main-title">Наша история</h2>
	                <hr>
	                <p>Есть преступления хуже, чем сжигать книги. Например — не читать их.</p>
					<p class="adme-img-copyright" style="text-align: right;">Рэй Брэдбери «451 градус по&nbsp;Фаренгейту»</p>
	            </div>

            <div class="row gap">
	            <div class="col-md-8 col-md-offset-2">
	            	<img src="assets/img/screens.png" class="fade-up img-responsive" alt="Alt" />
	            </div>
            </div>

			<div class="row gap">
				<div class="col-md-8 fade-up">
				<p>QUITE - это социальное сообщество созданное с целью делиться своими интересами, фотографиями, собственными мыслями и т.д.</p>
				<p>Сайт создан для расслабления, спокойной обстановки, и для интересного времяпрепровождения.</p>
				</div>
				<div class="col-md-4">
	    			<div class="qa-message-list" id="wallmessages">
	    				<div class="message-item fade-up" id="m16">
							<div class="message-inner">
								<div class="message-head clearfix">
									<div class="user-detail">
										<h5 class="handle">Создан сайт</h5>
										<div class="post-meta">
											<div class="asker-meta">
												<span class="qa-message-what"></span>
												<span class="qa-message-when">
													<span class="qa-message-when-data">19 мая 2019</span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="qa-message-content">
									Книги — корабли мысли, странствующие по волнам времени и бережно несущие свой драгоценный груз от поколения к поколению.
									<br><br><p class="adme-img-copyright" style="text-align: right;">Бэкон, Фрэнсис</p>
								</div>
							</div>
						</div>
					</div>	
					</div>
				</div>
			</div>	

			<div id="team" class="container">
			    <div class="row mt">
			        <div class="col-md-6">
			            <div class="blockquote-box fade-up clearfix">
			                <div class="square pull-left">
			                    <img src="assets/img/team/first.jpg" width="120" alt="" class="" />
			                </div>
			                <h4>Цитата из фильма Если я останусь (2014)</h4>
			                <p style="font-style: italic;">Жизнь — это то, что происходит с тобой, пока ты строишь совсем другие планы.</p>
							<div class="pull-right btn-group social-profiles">
								<a class="btn" href="https://www.facebook.com">
								   <i class="fa fa-facebook fb"></i>
								</a>
								<a class="btn" href="https://twitter.com">
								   <i class="fa fa-twitter"></i>
								</a>
								<a class="btn" href="https://www.instagram.com">
								   <i class="fa fa-instagram"></i>
								</a>
							</div>
			            </div>
			            <div class="blockquote-box fade-up clearfix">
			                <div class="square pull-left">
			                    <img src="assets/img/team/second.jpg" width="120" alt="" class="" />
			                </div>
			                <h4>Цитата из фильма Фокус (2014)</h4>
			                <p style="font-style: italic;">Ложь — забавная штука, проблема в том, что она не оставляет выхода, загоняет тебя в угол, а потом вынуждает сделать какую-то совсем тупую хрень.</p>
							<div class="pull-right btn-group social-profiles">
								<a class="btn" href="https://www.facebook.com">
									<i class="fa fa-facebook fb"></i>
								</a>
								<a class="btn" href="https://twitter.com">
									<i class="fa fa-twitter"></i>
								</a>
								<a class="btn" href="https://www.instagram.com">
									<i class="fa fa-instagram"></i>
								</a>
							</div>
			            </div>
			        </div>
			        <div class="col-md-6">
			            <div class="blockquote-box fade-up clearfix">
			                <div class="square pull-left">
			                    <img src="assets/img/team/tri.png" width="120" alt="" class="" />
			                </div>
			                <h4>Солоухин, Владимир Алексеевич</h4>
			                <p style="font-style: italic;">Банально, но все–таки, если прислушаться, самый зловещий из всех земных звуков — тиканье часов.</p>
							<div class="pull-right btn-group social-profiles">
								<a class="btn" href="https://www.facebook.com">
									<i class="fa fa-facebook fb"></i>
								</a>
								<a class="btn" href="https://twitter.com">
									<i class="fa fa-twitter"></i>
								</a>
								<a class="btn" href="https://www.instagram.com">
									<i class="fa fa-instagram"></i>
								</a>
							</div>
			            </div>
			            <div class="blockquote-box fade-up clearfix">
			                <div class="square pull-left">
			                    <img src="assets/img/team/four.jpg" width="120" alt="" class="" />
			                </div>
			                <h4>Гельвеций, Клод Адриан</h4>
			                <p style="font-style: italic;">Верный способ судить о характере и уме человека по выбору им книг и друзей.</p>
							<div class="pull-right btn-group social-profiles">
								<a class="btn" href="https://www.facebook.com">
									<i class="fa fa-facebook fb"></i>
								</a>
								<a class="btn" href="https://twitter.com">
									<i class="fa fa-twitter"></i>
								</a>
								<a class="btn" href="https://www.instagram.com">
									<i class="fa fa-instagram"></i>
								</a>
							</div>
			            </div>
			        </div>
			    </div>
			</div>
	    </section>

		<section id="portfolio" class="divider-wrapper">
			<div class="container">
	    	<div class="gap"></div> 
	        	<div class="centered gap fade-down section-heading">
	                <h2 class="main-title">Фотографии пользователей</h2>
	                <hr>
	                <p>Здесь отображаются самые интересные фотографии за неделю.</p>
	            </div> 
	            <ul class="portfolio-filter fade-down centered">
	                <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">Все</a></li>
	                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".apps">Понедельник</a></li>
	                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".nature">Среда</a></li>
	                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".design">Пятница</a></li>
	            </ul><!--/#portfolio-filter-->

	            <ul class="portfolio-items col-3 isotope fade-up gap">
	                <li class="portfolio-item apps isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/14.jpg" alt="">	                        
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/1.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
	                        </div>           
	                    </div>        
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla nature isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/2.jpg" alt="">	                        
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/2.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a> a>
	                        </div>           
	                    </div>           
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item bootstrap design isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/3.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/3.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a> >
	                        </div>           
	                    </div>           
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla design apps isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/5.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/5.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
	                        </div>           
	                    </div>           
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla apps isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/6.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/6.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
	                        </div>    
	                    </div>       
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item wordpress nature isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/7.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/7.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>           
	                        </div>           
	                    </div>           
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla design apps isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/8.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/8.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
	                        </div>           
	                    </div>           
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla nature isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/9.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/9.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
	                        </div>    
	                    </div>       
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item wordpress design isotope-item">
	                    <div class="item-inner">
	                        <img src="assets/img/demo/10.jpg" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="assets/img/demo/10.jpg" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>  
	                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
	                        </div>           
	                    </div>           
	                </li><!--/.portfolio-item-->
	            </ul>
	        </div>
	    </section>

		<!-- BLOG POSTS -->
		<div class="container">
			<div class="row mt">
	        	<div class="centered gap fade-down section-heading">
	                <h2 class="main-title">Блог</h2>
	                <hr>
	            </div> 
			</div><!-- row -->
			
			<div class="row mt gap">
				<div class="col-md-4 post fade-up">
                	<div class="item-inner">
                        <img src="assets/img/demo/14.jpg" alt="" class="img-responsive">
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-meta">
                        	<span class="post-date">21</span>
                        	<p>Января</p>
                        	<span class="post-comment"><i class="fa fa-comments"></i> 4</span>
                        </div>         
                    </div> 
					<h3><a href="#">Прекрасный вид</a></h3>
					<p>Прекрасный закат на Карибах.</p>
					<p><a class="btn btn-outlined btn-primary" href="">Подробнее</a></p>
				</div>
				<div class="col-md-4 post fade-up">
                	<div class="item-inner">
                        <img src="assets/img/demo/13.jpg" alt="" class="img-responsive">
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
                        </div>   
                        <div class="post-meta">
                        	<span class="post-date">12</span>
                        	<p>Февраля</p>
                        	<span class="post-comment"><i class="fa fa-comments"></i> 17</span>
                        </div>          
                    </div> 
					<h3><a href="#">Для занятых людей</a></h3>
					<p>В этой статье, рассписывается как распределить все дела и не опаздывать никогда, и никуда.</p>
					<p><a class="btn btn-outlined btn-primary" href="">Подробнее</a></p>
				</div>
				<div class="col-md-4 post fade-up">
                	<div class="item-inner">
                        <img src="assets/img/demo/12.jpg" alt="" class="img-responsive">
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
                        </div>       
                        <div class="post-meta">
                        	<span class="post-date">15</span>
                        	<p>Март</p>
                        	<span class="post-comment"><i class="fa fa-comments"></i>9</span>
                        </div>      
                    </div> 
					<h3><a href="#">Первые лучики весны</a></h3>
					<p>Как отлично провести время в первые дни весны и не бояться заболеть.</p>
					<p><a class="btn btn-outlined btn-primary" href="">Подробнее</a></p>
				</div>		


		<div class="container post-list gap">

		</div>

		<!-- CALL TO ACTION -->
		<div id="call">
			<div class="container">
				<div class="row fade-up">
					<h3>Кнопка для поддрежки сайта</h3>
					<div class="col-lg-8 col-lg-offset-2">
						<p>Если вам нравится наш сайт и вы хотите его поддержать, то вы можете отправить любую сумму для продвижение сайта.</p>
						<p><button type="button" class="btn btn-outlined btn-primary btn-lg bounce-in">Пожертвовать</button></p>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- Call to action -->

		<div class="container" id="contact-us">
			<div class="row gap">
				<div class="fade-up col-md-6 fade-up">
					<p>Введите свои данные что бы получать рассылку от нашего сайта.</p>
				</div>
				<div class="fade-up col-md-6 fade-up">
					<div id="message"></div>
					<form method="post" action="sendemail1.php">
						<p><input type="text" class="form-control" name="name" id="name" placeholder="Имя" /></p>
						<p><input type="text" class="form-control" name="email" id="email" placeholder="Email" /></p>
						<p><input type="text" class="form-control" name="website" id="website" placeholder="Website" /></p>
						<p><textarea name="comments" class="form-control" id="comments" placeholder="Коментарий"></textarea></p>
						<input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Отправить" />
					</form>
				</div>
			</div><!-- row -->
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
