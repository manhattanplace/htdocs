<?php
include '../../menu.class.php';
$menu = new Menu("menu");
$super_menu = new Menu("super_menu");
$social = new Menu("social");
$menu->css_class ="0";
$menu->css_id ="0";
$menu->special ="Special";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>OSU COACH Promo</title>
<meta name="description" content="video">
<meta charset="UTF-8">    
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="/_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script src="http://www.apple.com/library/quicktime/scripts/ac_quicktime.js" language="JavaScript" type="text/javascript"></script>
<script src="http://www.apple.com/library/quicktime/scripts/qtp_library.js" language="JavaScript" type="text/javascript"></script>
<script src="/js/modernizr.2.0.6.js"></script>
</head>
<body>
    <?php include '../../_header.php'; ?>
    <div class="panel">
        <div id="logo">
            <a href="/index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <div class="container">
            <div class="back_button1">
                <a href="/">&laquo; Home</a>
            </div>
            <div id="video">
                <script>QT_WriteOBJECT('/videos/osu-coach/osu-coach.mov', '580','340','', 'AUTOPLAY','True','SCALE','Aspect');</script>
            </div>
            <dl class="stand-alone-video">
                <dt class="description">Title:</dt>
                    <dd>PAC-12 Basketball - OSU Coach Wayne Tinkle</dd>
                <dt class="description">Executive Producer:</dt>
                    <dd>PAC-12 Networks</dd>
                <dt class="description">PRODUCER/EDITOR:</dt>
                    <dd>Joel Denbow</dd>
                <dt class="description">DIRECTOR/DP:</dt>
                    <dd>Steve Cohen</dd>
                <dt class="description">PRODUCTION SERVICES:</dt>
                    <dd>Manhattan Place Entertainment</dd>
            </dl>            
            <div class="back_button2">
                <a href="/">&laquo; Home</a>
            </div>
        </div>
    </div>
    <footer>
        <ul class="copyright vcard">
            <li class="cr">Copyright</li>
            <li class="org">Manhattan Place Entertainment.  All Rights Reserved.</li>
            <li class="tel">Phone: 212-682-2000</li>  
            <li>Fax: 212-682-2058</li>
            <li><a href="/Manhattan_Place.vcf">Download vCard </a></li>
            <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp;
                <a href="/tos.pdf">Click here for PDF</a>
            </li>
        </ul>
    </footer>
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17516374-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="/js/jquery-1.7.1.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>