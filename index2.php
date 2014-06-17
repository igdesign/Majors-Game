<?php

// limit access to settings
define('_mcexec', true);

// load settings, functions
require_once ('./settings.php');
require_once ('./functions.php');

?><!doctype html>

<!--
Picking the Majors by Gregory Daynes
Version: 14.1.0
URL: //major-game.igdesign.ca
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

<title>Almost There | <?php echo $contest_title; ?></title>

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

</head>
<body>
  <a name="tphp" id="tphp" ></a>

  <header class="site-header  header">
    <h1 class="site-name">Picking the Majors</h1>
  </header>

  <div class="instructions">

    <p>Find your selected golfers below</p>

    <p>If you wish to change any of your picks, <a href="index.php">click here</a>.

    <p>Please enter your email address. We will use this to contact you if you win.<p>

    <p>You must accept the "Terms & Conditions" to be eligible for a change to win.</p>

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


  <div class="terms">
    <h2 class="terms__title">Terms &amp; Conditions</h2>

    <article class="terms__content">
      <h3>Overall Contest Rules</h3>

      <p>In the two weeks leading up to each Major, contestants can enter by picking players from the field for that event.</p>

      <p>The pool of available of players is set by those who have qualified as of the Monday four weeks previous to the week of that Major.</p>

      <p>Each Major is a separate contest and will have prizing associated withe each.</p>

      <p>The contest is open to those who are already subscribers of this website's Newsletters as well as those sign up during the contest.</p>

      <p>The contest closes at 11:59:00 PM PDT of the Wednesday of the week of each Major</p>

      <p>There can only be one entry per email address.</p>

      <p>In the event of a tie, it will be broken by a random draw.</p>

      <h3>OFFICIAL "PICKING THE MAJOR" PRIZE PACKAGE CONTEST RULES AND REGULATIONS</h3>

      <p>Enter for your chance to win a GRAND PRIZE PACKAGE valued at more than $400.00, courtesy of Inside Golf Inc.("Sponsor")</p>

      <p>NO PURCHASE REQUIRED TO ENTER OR WIN A PRIZE.</p>

      <dl>
        <dt>Participants do not have to purchase any merchandise from:</dt>
        <dd>
          <ul>
            <li>Inside Golf Inc.</li>
            <li>Nike Golf Canada ("Nike Golf")</li>
          </ul>
          To participate or to win. Void where prohibited by law. Subject to all federal, provincial and municipal laws and regulations.
        </dd>
      </dl>

      <dl>
        <dt>HOW TO ENTER</dt>
        <dd>To enter, complete an Official Entry Form available on www.insidegolf.ca Web Site.
          <ul>
            <li>Entrants must complete all required information including their full name and email in the space provided on the Official Entry Form.</li>
            <li>Incomplete entries are void.</li>
            <li>Persons may enter multiple times by following rules laid out below regarding signing up other people.</li>
            <li>All entrants must also agree to the terms and conditions of the Contest.</li>
            <li>Entries mechanically reproduced or made in any fashion other than submitting an Official Entry Form available online are void. Sponsors are not responsible for lost, late, misdirected, damaged, illegible or incomplete entries and any printing errors in these Official Rules & Regulations. False or deceptive entries or acts will render the entrant ineligible. Entries become the property of the Sponsors and will not be acknowledged or returned.</li>

          </ul>
        </dd>

        <dt>CAN I PARTICIPATE?</dt>
        <dd>The Contest is open to all Canadian residents of legal age or older (excluding residents of Quebec and excluding employees of:
          <ul>
            <li>Nike Golf Canada ("Nike Golf")</li>
            <li>Inside Golf Inc. and their respective parents, affiliates, subsidiaries, dealers, retailers, vendors, representatives and agents, contest suppliers, family members, independent contractors and/or those with whom they are domiciled).</li>
            <li>If the winner is a minor in the province in which he/she resides, the prize will be awarded to the winner's parent or legal guardian.</li>
            <li>The Sponsors reserve the right to prohibit an Entrant from participating in the Contest or winning a prize, if, in the sole discretion of the Sponsors, they determine that the entrant is attempting to undermine the legitimate operation of the contest by cheating, deception, or other unfair playing practices or intending to annoy, abuse, or threaten or harass any other entrants or the Sponsors' representatives. The Sponsors reserve the right to disqualify any entrant failing to comply with these Rules.</li>
          </ul>
        </dd>

        <dt>WHAT CAN I WIN?</dt>
        <dd>There is one (1) Grand Prize and one runner-up prize. Approximate retail value of the Grand Prize is Four Hundred Dollars ($400.00). The prize must be accepted as awarded, and may not be transferred or assigned. The odds of winning depend on the total number of entries received.</dd>

        <dt>HOW DO I WIN?</dt>
        <dd><p>Within five days after the completion of each Major at approximately 12:00 PM (ET) in Duncan, British Columbia from among all entries received during the Contest Period for the prize described in these Rules by impartial representatives of the Sponsors, the entry that has received the most points based on picking competitors from each of 2014's golf Major who make the cut (play the final two rounds).</p>

            <p>Points will be awarded based on receiving 15 points for picking the winner, 10-points for picking the runner-up, 5-points for picking the third place finisher, 3-points for picking the fourth place through twentieth place finishers and 1-point for those players who make the cut and compete in the final two rounds of the tournament.</p>

            <p>In the event of a tie, winners will be determined via a random draw from those entries.</p>

            <p>In the event one player from a pair does not compete due to injury, then all contestants who picked that player will automatically have their pick switched to the other player. This rule only applies when a player does not start the first round and does not apply when they withdraw after competition has begun.</p>

            <p>The first complete eligible entry selected will represent the potential prize winning entry. Entrant does not need to be present to win.</p>
        </dd>

        <dt>WHEN WILL THE WINNER BE ANNOUNCED?</dt>
        <dd>The selected potential winner will be contacted at the address provided on their entry. If the potential winner cannot be reached after ten (10) business days at the email address provided, the prize will be forfeited and another entry will be randomly selected from the remaining entries. The potential winner will be required to correctly answer a time limited mathematical skill-testing question before being declared the winner. If the answer to the mathematical skill-testing question is incorrect, the entry will be void and another entry will be randomly selected from the remaining entries. The potential winner will also be sent an Affidavit of Eligibility and Liability/Publicity Release (and if necessary, Parental Consent) (the "Release Documentation"), which must be completed, signed and returned within five (5) days before the prize can be awarded. The potential winner, by signing the Release Documentation, releases and indemnifies the Sponsors and their parent, subsidiary and affiliated businesses and each of their officers, directors, shareholders, employees, advisors, assignees, agents, licensees, representatives and any other person or entity associated with this Contest from any and all liability claims or actions of any kind whatsoever for injuries, damage or losses to persons and property which may be sustained in connection with the receipt, enjoyment, ownership or use of the prize or the Contest. Upon receipt of the completed Release Documentation, the potential winner will be declared the official winner. To learn the official winner's identity, send a self-addressed, stamped envelope to: Inside Golf Inc. at box 248, Duncan, BC . All requests for a winner's list must be received by May 15th, 2014. Grand Prize winner will be posted on www.insidegolf.ca.</dd>

        <dt>PRIVACY</dt>
        <dd>By entering this Contest, each entrant consents to the collection, use and distribution of his/her personal information (information that identifies an entrant as an individual, such as home telephone number, age and home address) by Inside Golf Inc., the other sponsors or their authorized agents, or any other parties deemed suitable by Inside Golf Inc. for the purposes of implementing, administering and fulfilling this contest and/or to provide further information and/or content deemed suitable to the entrant by Inside Golf Inc. Specifically, each entrants agrees to receive emails from both Inside Golf Inc. and others about, but not limited to, new product releases and other current news.</dd>

        <dt>RELEASE</dt>
        <dd>No liability or responsibility is assumed by the Sponsors for any injuries, losses or damages of any kind caused by the prize or resulting from acceptance, possession or usage of the prize. By entering this Contest, each entrant agrees to comply with the Rules. The winning entrant, agrees to the use by the Sponsors of his/her name, place of residence, voice, statement regarding the Contest or the Sponsors, photographs or other likenesses from time to time, for advertising, promotion or publicity purposes in connection with this Contest, or for general news, entertainment and information purposes, except where prohibited by law without further compensation, by the Sponsors.</dd>

        <dt>RIGHTS RESERVED TO SPONSORS</dt>
        <dd>The Sponsors reserve the right, in their discretion, to cancel, modify or suspend this Contest in whole or in part should any cause beyond the reasonable control of the Sponsors corrupt the security or proper administration of the Contest.</dd>

        <dt>WHO ARE THE SPONSORS?</dt>
        <dd>This Contest is sponsored by:
          <ul>
            <li>Inside Golf Inc, 200 - 60 Ingram Street Duncan BC V9L 1N7</li>
          </ul>
          Sponsors reserve the right to cancel the Contest at any time and substitute another promotion in its place.
        </dd>
      </dl>

      <p>© 2014 Inside Golf Inc. All rights reserved.</p>
    </article>

    <span class="agree-form">
      <input type="checkbox" form="entry-form" id="agree" name="agree">
      <label class="entry-form__label--agree" for="agree">I Agree to these Terms &amp; Conditions</label>
    </span>
  </div>






  <div class="entry-form">
    <h2 class="entry-form__title">Contact Information</h2>

    <form class="entry-form__form" id="entry-form" action="index3.php#tphp" method="post">
      <?php for ($i = 0; $i < count($groups); $i++) { ?>
      <input type="hidden" name="golfer--<?php echo $groups[$i]['id']; ?>" value="<?php if ( isset($_POST['golfer--'.$groups[$i]['id']]) ) { echo $_POST['golfer--'.$groups[$i]['id']]; } ?>">
      <?php } ?>

      <div class="entry-form__email-wrapper">
        <label class="entry-form__label--email" for="entry-form__email">Email Address</label>
        <input class="entry-form__email" id="entry-form__email" name="entry-form__email" type="email">
      </div>

      <input class="entry-form__newsletter" id="entry-form__newsletter" name="entry-form__newsletter" type="checkbox">
      <label class="entry-form__label--newsletter" for="entry-form__newsletter">Sign me up for the iG Newsletter</label>

      <button class="entry-form__button" type="submit">Enter the Picking the Majors Contest</button>
    </form>
  </div>






  <footer class="footer" id="footer">

    <p class="footer-copyright">Copyright (C) 2014 iG Design & Publishing. All rights reserved.</p>

    <ul class="footer-nav">
      <li class="footer-nav__item"><a class="footer-nav__link" href="tos.html">Terms of Service</a></li>
      <li class="footer-nav__item"><a class="footer-nav__link" href="privacy.html">Privacy Agreement</a></li>
    </ul>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>


  <!-- optimized GA Script http://mathiasbynens.be/notes/async-analytics-snippet -->
  <script>var _gaq=[['_setAccount','UA-210752-10'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>



</body>
</html>