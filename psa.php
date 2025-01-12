<?php
include 'menu.class.php';
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
<meta charset="utf-8">
<title>PSA's Video Library</title>
<meta name="description" content="Browse the best of Steve Cohen's Promos Video Reel.">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<script src="js/modernizr.2.0.6.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include '_header.php'; ?>
    <div class="panel">
        <div id="logo">
            <a href="index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">PSA'S</h3>
        <div class="container">
            <div class="wt-gallery">
                <div class="main-screen">
                    <img id="bg-img" src="assets/spacer.png" alt="placeholder"/>
                    <a href="#"><img id="main-img" src="images/case-study.jpg" alt="placeholder"/></a>
                    <img src="assets/prev.png" id="prev-btn" alt="previous button"/>
                    <img src="assets/next.png" id="next-btn" alt="next button"/>
                    <dl class="desc"></dl>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                       <div class="preloader"><img src="assets/loader.gif" alt="placeholder"/></div>
                </div>
                <div class="c-panel">
                    <div id="thumbs-back"><img src="assets/prev_thumb.png" alt="placeholder"/></div>
                    <div class="thumbnails">
                    <ul>

                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/psa/step-on-up-diabetes-psa.jpg">
                            <img src="images/psa/step-on-up-diabetes-psa-thumb.jpg" alt="Step On Up Diabetes PSA"/></a>
                        </div>
                        <a href="psa/step-on-up-diabetes-psa/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Step On Up Diabetes PSA</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>M Street Creative</dd> 
                            <dt class="description">DIRECTOR:</dt>
                                <dd>Andi Praskai</dd> 
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/psa/daniel-bryan-psa.jpg">
                            <img src="images/psa/daniel-bryan-psa-thumb.jpg" alt="WWE Daniel Bryan"/></a>
                        </div>
                        <a href="psa/daniel-bryan-psa/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>FDA Anti-Smoking WWE Daniel Bryan PSA</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>WWE INC/USA Networks</dd> 
                            <dt class="description">PRODUCER:</dt>
                                <dd>Robert Cinguina</dd> 
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>


                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-dennis-leary.jpg">
                            <img src="images/thumbs/case-study-dennis-leary.jpg" alt="Dennis Leary"/></a>
                        </div>
                        <a href="psa/lustgarten-foundation-psa/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Cure PC - Denis Leary</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Cablevision</dd> 
                            <dt class="description">DP/Director:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">CAMERA:</dt>
                                <dd>Chris Bierlein</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-mjf.jpg">
                            <img src="images/thumbs/case_study_michaeljfox.jpg" alt="Take a Swing at Parkinsons"/></a>
                        </div>
                        <a href="psa/michaeljfox/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Take a Swing at Parkinsons</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>FOX Sports</dd> 
                            <dt class="description">DP/Director:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>Don Bui</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                            <dt class="description">Awards:</dt>
                                <dd class="single-line">Winner <span class="lowercase">of</span> (3) Telly Awards:</dd>
                                <dd class="single-line">Public Service Announcement </dd> 
                                <dd class="single-line">Videography/Cinematography </dd> 
                                <dd class="single-line">Lighting</dd>
                                <dd class="award-winners"></dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_pc_cure.jpg">
                            <img src="images/thumbs/case_study_pc_cure.jpg" alt="Cablevision - Cure PC"/></a>
                        </div>
                        <a href="psa/curePC/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Cure PC </dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>Cablevision</dd> 
                            <dt class="description">Executive Producer:</dt>
                                <dd>Kim Kerns</dd> 
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>Mary Pat Clarke</dd> 
                            <dt class="description">Editor:</dt>
                                <dd>Duncan Skiles</dd> 
                            <dt class="description">production services:</dt> 
                                <dd>Manhattan Place Entertainment</dd> 
                            <dt class="description">Awards:</dt>
                                <dd class="single-line">2010 Telly:</dd>
                                <dd class="single-line">Best Public Service Announcement</dd>
                                <dd class="single-line">Lighting</dd> 
                                <dd class="single-line">Set Design</dd>
                                <dd class="award-winners"></dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_venus_serena.jpg">
                            <img src="images/thumbs/case_study_venus_serena.jpg" alt="Venus and Serena Serving Others"/></a>
                        </div>
                        <a href="psa/serena-venus/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>"Serving Others" - Serena And Venus</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>West Glenn Media/Ronald McDonald House</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>John Rokosny</dd> 
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-derek-jeter.jpg">
                            <img src="images/thumbs/case-study-derek-jeter.jpg" alt="Derek Jeter"/></a>
                        </div>
                        <a href="psa/derek-jeter/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Stand Up For Cancer</dd> 
                                <dd>-Derek Jeter</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>FOX Sports</dd> 
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen (Derek Jeter Scenes Only)</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_bush_clinton.jpg">
                            <img src="images/thumbs/case_study_bushclinton.jpg" alt="Hurricane Katrina"/></a>
                        </div>
                        <a href="psa/katrina/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>  Hurricane Katrina</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>ABC Sports,</dd> 
                                <dd>Madison Square Garden,</dd> 
                                <dd class="single-line">The National Football League</dd> 
                            <dt class="description">Executive Producers:</dt>
                                <dd>Ivan Gottesfeld</dd> 
                                <dd class="single-line">&amp; Glenn Adamo</dd> 
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-bhm-mega.jpg">
                            <img src="images/thumbs/case-study-bhm-mega.jpg" alt="Black History Month"/></a>
                        </div>
                        <a href="psa/bhm-mega/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Voices of Harlem - Mega</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>Hamilton Fisher</dd> 
                            <dt class="description">Director:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Director of Photography:</dt>
                                <dd class="single-line">Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-bhm-maurisa.jpg">
                            <img src="images/thumbs/case-study-bhm-maurisa.jpg" alt="Black History Month"/></a>
                        </div>
                        <a href="psa/bhm-maurisa/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Voices of Harlem - Maurisa</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>Hamilton Fisher</dd>
                            <dt class="description">Director:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Director of Photography:</dt>
                                <dd class="single-line">Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-bhm-katherine.jpg">
                            <img src="images/thumbs/case-study-bhm-katherine.jpg" alt="Black History Month"/></a>
                        </div>
                        <a href="psa/bhm-katherine/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Voices of Harlem - Katherine</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>Hamilton Fisher</dd>
                            <dt class="description">Director:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Director of Photography:</dt>
                                <dd class="single-line">Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-bhm-gabriel.jpg">
                            <img src="images/thumbs/case-study-bhm-gabriel.jpg" alt="Black History Month"/></a>
                        </div>
                        <a href="psa/bhm-gabriel/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Voices of Harlem - Gabriel</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Producer:</dt>
                                <dd>Hamilton Fisher</dd>
                            <dt class="description">Director:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Director of Photography:</dt>
                                <dd class="single-line">Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-jimmy-rollins.jpg">
                            <img src="images/thumbs/case-study-jimmy-rollins.jpg" alt="Jimmy Rollins"/></a>
                        </div>
                        <a href="psa/jimmy-rollins/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>  Stand Up For Cancer </dd> 
                                <dd>- Jimmy Rollins</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>FOX Sports</dd> 
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen (Jimmy Rollins Scenes Only)</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-sarah-fergeson.jpg">
                            <img src="images/thumbs/case-study-sarah-fergeson.jpg" alt="Sarah Fergeson"/></a>
                        </div>
                        <a href="psa/sarah/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Ronald McDonald House-Dutchess Of York</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>West Glenn Media/Ronald McDonald House</dd> 
                            <dt class="description">PRODUCER:</dt>
                                <dd>John Rokosny </dd> 
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd> 
                        </dl>
                    </li>
               </ul>
            </div>
            <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="placeholder"/></div> 
            <div class="pagination"></div>
            </div>
            </div>
        </div>    
    </div><!--end panel-->
   
<footer>
    <ul class="copyright vcard">
        <li class="cr">Copyright</li>
        <li class="org">Manhattan Place Entertainment.  All Rights Reserved.</li>
        <li class="tel">Phone: 212-682-2000</li>  
        <li>Fax: 212-682-2058</li>
        <li><a href="Manhattan_Place.vcf">Download vCard </a></li>
        <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp;
            <a href="tos.pdf">Click here for PDF</a>
        </li>
    </ul>
</footer><!-- end footer -->

<!-- Google Analytics -->
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
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
