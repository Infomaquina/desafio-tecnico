<!DOCTYPE HTML>
<html lang="pt-br">
<html>
<head>
<title><?=TITLE?></title>
<!-- PWA ==============================================================-->
<link rel="manifest" href="<?=cache('app.webmanifest')?>"/>
<script type="module" src="<?=cache('pwa-btn.js')?>"></script>
<!-- COMOM META ////////////////////////////////////////////////////// -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="<?=TITLE?>" />
<meta name="description" content="Author: Brandev, Category: Service App, Length: 1 pages"/>
<meta name="keywords" content="<?=TITLE?>" />
<meta name="copyright" content="Brandev"/>
<link rel="icon" href="<?=cache('icon.ico')?>" type="image/x-icon"/>
<!-- ///////////////////////////////////////////////////////////////// -->    

<!-- Add to homescreen for Chrome on Android ==========================-->
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="application-name" content="<?=TITLE?>"/>
<!-- ================================================================= -->

<!-- Add to homescreen for Safari on iOS ============================= -->
<meta name="apple-mobile-web-app-status-bar-style" content="white"/>
<meta name="apple-mobile-web-app-title" content="<?=TITLE?>"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="apple-touch-icon" href="https://<?=SERVIDOR.IMG?>brf.png"/>
<link rel="apple-touch-icon image_src" href="./<?=IMG?>logo.jpg" />
<!-- ================================================================= -->

<!-- Tile for Win8 =================================================== -->
<meta name="msapplication-TileColor" content="#5a3007"/>
<meta name="msapplication-TileImage" content="https://<?=SERVIDOR.IMG?>brf.png"/>
<!-- ================================================================= -->

<!-- OG FACEBOOK ===================================================== -->
<meta property="og:locale" content="pt-br"/>
<meta property="og:url" content="https://<?=SERVIDOR?>"/>
<meta property="og:title" content="<?=TITLE ?>"/>
<meta property="og:site_name" content="<?=TITLE ?>"/>
<meta property="og:description" content="<?=DESCRIPTION?>"/>
<meta property="og:image" content="https://<?=SERVIDOR.IMG?>brf.png"/>
<meta property="og:image:type" content="image/jpg"/>
<meta property="og:image:width" content="192"/>
<meta property="og:image:height" content="192"/>
<meta property="og:type" content="product"/>
<!-- ================================================================= -->

<!-- TWITTER ========================================================= -->
<meta name="twitter:url" content="https://<?=SERVIDOR?>"/>
<meta name="twitter:title" content="<?=TITLE ?>"/>
<meta name="twitter:description" content="<?=DESCRIPTION?>"/>
<meta name="twitter:image" content="https://<?=SERVIDOR.IMG?>brf.png"/>
<!-- ================================================================= -->

<!-- CSS ============================================================= -->
<link rel="stylesheet" href="<?=cache('animate.min.css',CSS)?>"/>
<link rel='stylesheet' href="<?=cache('custom.css',CSS)?>"/>
<link rel="stylesheet" href="<?=cache('style.css',CSS)?>"/>
<link rel="stylesheet" href="<?=cache('sweet.css',CSS)?>"/>
<link rel="stylesheet" href="/public/icons/css/all.css"/>
<!-- ================================================================= -->

<!-- APPEND JS ======================================================= -->
<script src="<?=cache('jquery.js',JS)?>"></script>
<script src="<?=cache('popper.js',JS)?>"></script>
<script src="<?=cache('bootstrap.js',JS)?>"></script>
<script src="<?=cache('media.js',JS)?>"></script>
<script src="<?=cache('cookie.js',JS)?>"></script>
<script src="<?=cache('sweet.js',JS)?>"></script>
<!-- ================================================================= -->

<!-- SOUND =========================================================== -->
<audio id="error" src="<?=SOUND.'error/1.wav'?>"></audio>
<audio id="ok" src="<?=SOUND.'ok/1.mp3'?>"></audio>
<!-- ================================================================= -->

<!-- JQUERY LOCAL =====================================================-->
<script src="<?=cache($this->e($script),'public/scripts/')?>"></script>
<!-- ==================================================================-->
	
</head>
  <body>

    <?=$this->section('content')?>

  </body>
</html>
