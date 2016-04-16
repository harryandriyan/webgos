<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo Yii::app()->name; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'> -->


        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/slicknav.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css">
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" alt="logo"></a>
								  </div>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav" style="padding-top: 13px;">
									<li class="active"><a href="<?php echo Yii::app()->getBaseUrl(1) ?>">Home <span class="sr-only">(current)</span></a></li>
									<li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/about">About</a></li>
									<li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/kegiatan">Kegiatan</a></li>
									<li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/galeri">Galeri</a></li>
								  </ul>
								</div>
							  </div>
							</nav>
                        </div>
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contact-area" style="padding-top: 20px">
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i><?php echo Yii::app()->params->adminEmail; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="main-content">
            <?php echo $content; ?>
        </div>

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="footer-contant">
                                <h3>Get In Touch</h3>
                                <div class="social-icon">
                                    <a href="<?php echo Yii::app()->params->facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo Yii::app()->params->twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo Yii::app()->params->google; ?>" target="_blank"><i class="fa fa-google"></i></a>
                                </div>
                                <div class="support-link">
                                    <?php echo Yii::app()->params->copyright; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/jquery-1.10.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>
    </body>
</html>
