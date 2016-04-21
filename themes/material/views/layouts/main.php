<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title><?php echo Yii::app()->name; ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo Yii::app()->getBaseUrl(1) ?>" class="brand-logo">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo-small.png">
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/kegiatan"> <font style="color: #8BC34A;"> Kegiatan </font></a></li>
        <li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/galeri"> <font style="color: #8BC34A;"> Galeri </font></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/kegiatan">Kegiatan</a></li>
        <li><a href="<?php echo Yii::app()->getBaseUrl(1) ?>/galeri">Galeri</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div>
    <div class="row">
      <div class="col s12">
        <div class="banner-web"></div>
      </div>
    </div>
  </div>

  <div>
    <?php echo $content ?>
  </div>

  <footer class="page-footer light-green darken-3" style="margin-top: -20px;">
    <div class="container">
      <div class="row">
        <div class="col l9 s12">
          <h5 class="white-text">Tentang</h5>
          <p class="white-text"><?php echo Content::getContent('about'); ?></p>
        </div>
        
        <div class="col l3 s12">
          <h5 class="white-text">Temukan Kami</h5>
          <ul>
            <li><a class="white-text" href="<?php echo Yii::app()->params->facebook; ?>" target="_blank">Facebook</a></li>
            <li><a class="white-text" href="<?php echo Yii::app()->params->twitter; ?>" target="_blank">Twitter</a></li>
            <li><a class="white-text" href="<?php echo Yii::app()->params->google; ?>" target="_blank">Google</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <?php echo Yii::app()->params->copyright; ?>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-2.1.1.min.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/materialize.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/init.js"></script>

  </body>
</html>
