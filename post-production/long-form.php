<?php
include '../menu.class.php';
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
<meta charset="UTF-8">
<title>Post Production: Long Form</title>
<meta name="description" content="Digital Video Library">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<script src="/js/modernizr.2.0.6.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/ac_quicktime.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/qtp_library.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body class="post-production">
<?php include '../_header.php'; ?>    <div class="panel">
        <div id="logo">
            <a href="/index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">POST PRODUCTION</h3>
        <h3 class="library sub-section">Long Form</h3>
        <div class="container directors" data-url="/post-production/short-form.php">
    		<div class="back_button1">
    			<a href="/post-production.php">&laquo; Back to Post Production</a>
    		</div>
            <div class="wt-gallery">
                <div class="main-screen">
                    <img class="click-to-play" src="/_img/click-to-play.png" alt="click to play" title="click to play">
                    <a href="#"><img id="main-img" src="/images/case-study.jpg" alt="placeholder"/></a>
                    <dl class="desc"></dl>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                    <div class="preloader"><img src="/assets/loader.gif" alt="spiny thing"/></div>
                </div>
                <div class="c-panel">
                    <div id="thumbs-back"><img src="/assets/prev_thumb.png" alt="back button"/></div>
                    <div class="thumbnails">
                        <ul>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/dark-light.jpg">
                                    <img src="/post-production/images/dark-light.jpg" alt="Dark Light"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Dark Light</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/herschel-trailer.jpg">
                                    <img src="/post-production/images/herschel-trailer.jpg" alt="Herschel Walker"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Herschel Walker</dd> 
                                </dl>
                            </li>
                        <!-- case study 
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="post-production/images/">
                                    <img src="post-production/images/" alt=""/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>Who’s number 1</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/sandra-day-oconnor.jpg">
                                    <img src="/post-production/images/sandra-day-oconnor.jpg" alt="Sandra Day O’Connor"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Sandra Day O’Connor</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/jordans.jpg">
                                    <img src="/post-production/images/jordans.jpg" alt="The Jordans"/></a>
                                </div>
                                <a href="#five"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>The Race Car Family</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div id="thumbs-fwd"><img src="/assets/next_thumb.png" alt="Next Thumb"/></div> 
                    <div class="pagination"></div>
                </div>
            </div>
            <div id="one" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/dark-light/dark-light.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/herschel-trailer/herschel-trailer.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="four" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/sandra-day-oconnor/sandra-day-oconnor.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="five" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/jordans/jordans.mov', '640', '348', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="six" class="modal">
                <a class="close" href="">close</a>
               <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="seven" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eight" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="nine" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="ten" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eleven" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
        </div>
    </div>
    <div class="modal-backdrop"></div>
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
<script type="text/javascript">
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