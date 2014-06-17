<?php

// limit access to settings
define('_mcexec', true);

// load settings
require_once('./settings.php');

// useful functions
require_once('./functions.php');

// setup group ids
foreach($groups as $group) {
  $group_ids[] = $group['id'];
}


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_table);


$email = $_POST['entry-form__email'];
$agree = $_POST['agree'];
$ipaddress = $_SERVER['REMOTE_ADDR'];
$datetime = date('Y-m-d G:i:s');
$newsletter = $_POST['entry-form__newsletter'];

$email = $mysqli->real_escape_string($email);

$group_array = array();
for ($i = 0; $i < count($groups); $i++) {
  $group_array[] = $_POST['golfer--'.$groups[$i]['id']];
}

$entries_blob = implode(', ', $group_array);

if ($agree == 'on') {
  $agree = 'yes';
} else {
  $agree = 'no';
}

if ($newsletter == 'on') {
  $newsletter = 'yes';
} else {
  $newsletter = 'no';
}



/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* Select queries return a resultset */
if ($result = $mysqli->query('INSERT INTO `Entries` VALUES("", "'.$email.'", "'.$agree.'", "'.$ipaddress.'", "'.$datetime.'", "'.$entries_blob.'", "'.$newsletter.'")')) {

  // entries submitted
}

$mysqli->close();

?><!doctype html>

<!--
Picking the Majors by Gregory Daynes
Version: 14.1.0
URL: //hammer-template.com
Apache License: v2.0. http://www.apache.org/licenses/LICENSE-2.0
-->
<!--[if lt IE 7]>           <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-GB"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en-GB"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en-GB"><![endif]-->
<!--[if gt IE 8]><!-->      <html class="no-js" lang="en-GB"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- General/Meta -->
<meta name='version' content="0.0.1">
<meta name="date" content="Tue Mar 18 2014 10:52:25">
<meta name="author" content="humans.txt">
<meta name="keywords" content="">
<meta name="generator" content="//gregdaynes.github.io">
<meta name="no-email-collection" content="tos.html">
<meta name="description" content="short description of website">

<!-- Facebook/Open Graph -->
<meta property="og:title" content="Finished | <?php echo $contest_title; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="//major-game.igdesign.ca">
<meta property="og:site_name" content="<?php echo $contest_title; ?>">
<meta property="og:description" name="description" content="">
<meta property="og:locale" content="en-GB">
<meta property="og:image" content="/assets/img/graph-200x200.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">

<!-- Twitter/Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@gregdaynes">
<meta name="twitter:creator" content="@gregdaynes">
<meta name="twitter:url" content="//major-game.igdesign.ca/">
<meta name="twitter:description" content="short description of website">
<meta name="twitter:title" content="Home">
<meta name="twitter:image" content="/assets/img/graph-200x200.png">
<meta name="twitter:image:width" content="200">
<meta name="twitter:image:height" content="200">

<!-- General/Links -->
<link rel="author" href="humans.txt">
<link rel="shorturl" href="//major-game.igdesign.ca" />

<title>Finished | <?php echo $contest_title; ?></title>

<link rel='stylesheet' href='assets/css/style.css'>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<!--[if lte ie8]>
<link rel='stylesheet' href='assets/css/style-ie8.css'>
<!endif]-->

<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>

<!-- Icons -->
<link rel="logo" type="image/svg" href="//hammer-template.com/logo.svg" />
<link rel="shortcut icon" href="assets/img/favicon.png">
<!-- ie will look for favicon.ico automatically -->

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--iOS -->
<meta name="apple-mobile-web-app-title" content="pitm">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Prevents links from opening in mobile Safari -->
<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>


<!-- Startup Images -->

<!-- iOS 6 & 7 iPad (Retina Portrait) 1536 x 2008 -->
<link href="assets/img/startup_image-1536x2008.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
      rel="appl-touch-startup-image">

<!-- iOS 6 & 7 iPad (Retina Landscape) 2048 x 1496 -->
<link href="assets/img/startup_image-2048x1496.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 2)"
      rel="appl-touch-startup-image">

<!-- iOS 6 iPad (Portrait) 768 x 1004 -->
<link href="assets/img/startup_image-768x1004.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
      rel="appl-touch-startup-image">

<!-- iOS 6 iPad (Landscape) 1024 x 748 -->
<link href="assets/img/startup_image-1024x748.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 1)"
      rel="appl-touch-startup-image">

<!-- iOS 6 & 7 iPhone 5 640 x 1096 -->
<link href="assets/img/startup_image-640x1096.png"
      media="(device-width: 320px) and (device-height: 568px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
      rel="appl-touch-startup-image">

<!-- iOS 6 & 7 iPhone (retina) 640 x 920 -->
<link href="assets/img/startup_image-640x920.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
      rel="appl-touch-startup-image">

<!-- iOS 6 iPhone 320 x 460 -->
<link href="assets/img/startup_image-320x460.png"
      media="(device-width: 320px) and (device-height: 460px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
      rel="appl-touch-startup-image">
<!-- iOS Icons -->

<!-- iOS 7 iPad (retina) 152x152 -->
<link href="assets/img/icon-152x152.png"
     sizes="152x152"
     rel="apple-touch-icon">

<!-- iOS 6 iPad (retina) 144x144 -->
<link href="assets/img/icon-144x144.png"
     sizes="144x144"
     rel="apple-touch-icon">

<!-- iOS 7 iPhone (retina) 120x120 -->
<link href="assets/img/icon-120x120.png"
     sizes="120x120"
     rel="apple-touch-icon">

<!-- iOS 6 iPhone (retina) 114x114 -->
<link href="assets/img/icon-114x114.png"
     sizes="114x114"
     rel="apple-touch-icon">

<!-- iOS 7 iPad 76x76 -->
<link href="assets/img/icon-76x76.png"
     sizes="76x76"
     rel="apple-touch-icon">

<!-- iOS 6 iPad 72x72 -->
<link href="assets/img/icon-72x72.png"
     sizes="72x72"
     rel="apple-touch-icon">

<!-- iOS 6 iPhone (retina) 57x57 -->
<link href="assets/img/icon-57x57.png"
     sizes="57x57"
     rel="apple-touch-icon">
<!-- Windows 8 / RT -->
<meta name="msapplication-TileImage" content="assets/img/icon-144x144.png">
<meta name="msapplication-TileColor" content="#D83434">
<body>

<a name="tphp" id="tphp" ></a>

<!-- @ include nav -->
<header class="site-header  header">
  <h1 class="site-name">Picking the Majors</h1>
</header>

<div class="thank-you">
  <h2 class="thank-you__title">Thank you for participating in "<?php echo $contest_title; ?>"</h2>
</div>

<div class="selected">
  <h2 class="selected__title">Selected Golfers</h2>

 <!--
  <?php for ($i = 0; $i < count($groups); $i++) { ?>
  --><dl class="selected__list">
    <dt class="selected__group"><?php echo $groups[$i]['name']; ?></dt>
    <dd class="selected__player">
    <?php if ( isset($_POST['golfer--'.$groups[$i]['id']]) ) { echo stripslashes($_POST['golfer--'.$groups[$i]['id']]); } ?></dd>
  </dl><!--
  <?php } ?>-->
</div>


<footer class="footer" id="footer">
  <!-- @ include nav -->

  <p class="footer-copyright">Copyright (C) 2014 iG Design & Publishing. All rights reserved.</p>

  <ul class="footer-nav">
    <li class="footer-nav__item"><a class="footer-nav__link" href="tos.html">Terms of Service</a></li>
    <li class="footer-nav__item"><a class="footer-nav__link" href="privacy.html">Privacy Agreement</a></li>
  </ul>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>

<!-- @coffeescript console -->

<!-- optimized GA Script http://mathiasbynens.be/notes/async-analytics-snippet -->
<script>var _gaq=[['_setAccount','UA-210752-10'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>