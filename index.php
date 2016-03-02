<?php
include_once 'config.php';
include_once 'functions.php';

if (!isset($sections)) {
    $sections = getSections();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $doc_title; ?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="canonical" href="http://www.templatemonster.com/help/quick-start-guide/magento-themes/v2-0/"/>
    <link rel="icon" href="<?php echo $path; ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $path; ?>/css/style.css">    
    <script src="<?php echo $path; ?>/js/jquery.js"></script>
    <script src="<?php echo $path; ?>/js/jquery-migrate-1.2.1.js" ></script>
    <script src="<?php echo $path; ?>/js/jquery.easing.1.3.js" ></script>
    

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="/http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="<?php echo $path; ?>/img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body  data-section="<?php echo $section_param; ?>" onload="prettyPrint()">
<div class="page-wrap">
    <div class="rd-mobilemenu active">
        <div class="logo">
            <a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>/img/logo.png" alt=""></a>
        </div>
        <div class="panel">
            <div class="select select-version">
                <select>
                    <option data-href="/help/quick-start-guide/magento-themes/v1-0/index_en.html">Version v1-0</option>
                    <option data-href="/help/quick-start-guide/magento-themes/v1-1/index_en.html">Version v1-1</option>
                    <option data-href="/help/quick-start-guide/magento-themes/v1-2/index_en.html">Version v1-2</option>
                    <option data-href="/help/quick-start-guide/magento-themes/v2-0/index_en.html" selected>Version v2-0</option>
                </select>
            </div>
            <div class="select select-lang">
                <select>
                    <option data-href="<?php echo $path; ?>/index.php?lang=en&section=<?php echo $section_param; ?>" <?php echo $lang == "en"? "selected": ""; ?>>EN</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=ru&section=<?php echo $section_param; ?>" <?php echo $lang == "ru"? "selected": ""; ?>>RU</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=de&section=<?php echo $section_param; ?>" <?php echo $lang == "de"? "selected": ""; ?>>DE</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=es&section=<?php echo $section_param; ?>" <?php echo $lang == "es"? "selected": ""; ?>>ES</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=fr&section=<?php echo $section_param; ?>" <?php echo $lang == "fr"? "selected": ""; ?>>FR</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=it&section=<?php echo $section_param; ?>" <?php echo $lang == "it"? "selected": ""; ?>>IT</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=pl&section=<?php echo $section_param; ?>" <?php echo $lang == "pl"? "selected": ""; ?>>PL</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=pt&section=<?php echo $section_param; ?>" <?php echo $lang == "pt"? "selected": ""; ?>>PT</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=tr&section=<?php echo $section_param; ?>" <?php echo $lang == "tr"? "selected": ""; ?>>TR</option>
                </select>
            </div>
        </div>
        <p class="copyright">TemplateMonster ©
            <a href="http://www.templatemonster.com/privacy-policy.php">Privacy Policy</a>
        </p>
    </div>
    <div class="page-content active">
        <button class="rd-mobilepanel_toggle active"><span></span></button>
        <div class="rd-mobilepanel">
            <h1 class="rd-mobilepanel_title">
                <span><?php echo $product_name; ?></span> <?php echo $product_desc; ?>
            </h1>
        </div>
        <div class="page">
            <!--========================================================
                HEADER
            =========================================================-->
            <header>
                <nav class="nav">
                    <ul class="menu" data-type="navbar">
                        <?php echo generateNavigation($sections, $lang, $section_param); ?>
                    </ul>
                </nav>
            </header>
            <!--========================================================
                CONTENT
            =========================================================-->
            <main id="main">
                <div class="container">
                    <?php include_once 'section.php'; ?>
                </div>
            </main>

            <!--========================================================
                FOOTER
            =========================================================-->
            <footer>
                <!-- <div class="navigate">
                    <div class="next_wrapper navigated-section-2">
                        <div class="container">
                            <a href="/section/template-installatiamework-installation.html" class="next">
                                <span>Next</span>
                                <em>Template installation</em>
                            </a>
                        </div>
                    </div>
                </div> -->

            </footer>
        </div>
    </div>
</div>

<script>
    (function(){var h,b,c,a,d,f,e,g,k;h=window.device;window.device={};c=window.document.documentElement;k=window.navigator.userAgent.toLowerCase();device.ios=function(){return device.iphone()||device.ipod()||device.ipad()};device.iphone=function(){return a("iphone")};device.ipod=function(){return a("ipod")};device.ipad=function(){return a("ipad")};device.android=function(){return a("android")};device.androidPhone=function(){return device.android()&&a("mobile")};device.androidTablet=function(){return device.android()&&
!a("mobile")};device.blackberry=function(){return a("blackberry")||a("bb10")||a("rim")};device.blackberryPhone=function(){return device.blackberry()&&!a("tablet")};device.blackberryTablet=function(){return device.blackberry()&&a("tablet")};device.windows=function(){return a("windows")};device.windowsPhone=function(){return device.windows()&&a("phone")};device.windowsTablet=function(){return device.windows()&&a("touch")&&!device.windowsPhone()};device.fxos=function(){return(a("(mobile;")||a("(tablet;"))&&
a("; rv:")};device.fxosPhone=function(){return device.fxos()&&a("mobile")};device.fxosTablet=function(){return device.fxos()&&a("tablet")};device.meego=function(){return a("meego")};device.cordova=function(){return window.cordova&&"file:"===location.protocol};device.nodeWebkit=function(){return"object"==typeof window.process};device.mobile=function(){return device.androidPhone()||device.iphone()||device.ipod()||device.windowsPhone()||device.blackberryPhone()||device.fxosPhone()||device.meego()};device.tablet=
function(){return device.ipad()||device.androidTablet()||device.blackberryTablet()||device.windowsTablet()||device.fxosTablet()};device.desktop=function(){return!device.tablet()&&!device.mobile()};device.portrait=function(){return 1<window.innerHeight/window.innerWidth};device.landscape=function(){return 1>window.innerHeight/window.innerWidth};device.noConflict=function(){return window.device=h,this};a=function(a){return-1!==k.indexOf(a)};f=function(a){var b;return b=new RegExp(a,"i"),c.className.match(b)};
b=function(a){return f(a)?void 0:c.className+=" "+a};g=function(a){return f(a)?c.className=c.className.replace(a,""):void 0};device.ios()?device.ipad()?b("ios ipad tablet"):device.iphone()?b("ios iphone mobile"):device.ipod()&&b("ios ipod mobile"):b(device.android()?device.androidTablet()?"android tablet":"android mobile":device.blackberry()?device.blackberryTablet()?"blackberry tablet":"blackberry mobile":device.windows()?device.windowsTablet()?"windows tablet":device.windowsPhone()?"windows mobile":
"desktop":device.fxos()?device.fxosTablet()?"fxos tablet":"fxos mobile":device.meego()?"meego mobile":device.nodeWebkit()?"node-webkit":"desktop");device.cordova()&&b("cordova");d=function(){return device.landscape()?(g("portrait"),b("landscape")):(g("landscape"),b("portrait"))};e="onorientationchange"in window?"orientationchange":"resize";window.addEventListener?window.addEventListener(e,d,!1):window.attachEvent?window.attachEvent(e,d):window[e]=d;d()}).call(this);
</script>
<script src="<?php echo $path; ?>/js/jquery.rd-navbar.js" ></script>
<script src="<?php echo $path; ?>/js/prettify.js" ></script>
<script src="<?php echo $path; ?>/js/jquery.fancybox.js" ></script>
<script src="<?php echo $path; ?>/js/jquery.ui.totop.js" ></script>
<script src="<?php echo $path; ?>/js/owl.carousel.min.js" ></script>

<script>
    function isIE(){var a=navigator.userAgent.toLowerCase();return-1!=a.indexOf("msie")?parseInt(a.split("msie")[1]):!1}(function(a){var b=a(".owl-carousel");0<b.length&&a(document).ready(function(){b.owlCarousel({margin:30,smartSpeed:450,loop:!0,dots:!0,dotsEach:1,nav:!1,responsive:{0:{items:1}}})})})(jQuery);(function(a){var b=a(".pretty_image");0<b.length&&a(document).ready(function(){b.fancybox()})})(jQuery);
(function(a){a("html").hasClass("desktop")&&a(document).ready(function(){a().UItoTop({easingType:"easeOutQuart",containerClass:"toTop fa fa-angle-up"})})})(jQuery);
$(function(){var a=document.querySelector&&document.querySelector('meta[name="viewport"]'),b=navigator.userAgent,c=function(){a.content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0"};a&&/iPhone|iPad/.test(b)&&!/Opera Mini/.test(b)&&(a.content="width=device-width, minimum-scale=1.0, maximum-scale=1.0",document.addEventListener("gesturestart",c,!1));void 0!=window.orientation&&(b.match(/ipod|ipad|iphone/gi)||$(".sf-menus li").each(function(){$(">ul",this)[0]&&$(">a",
this).toggle(function(){return!1},function(){window.location.href=$(this).attr("href")})}))});var ua=navigator.userAgent.toLocaleLowerCase(),regV=/ipod|ipad|iphone/gi,result=ua.match(regV),userScale="";result||(userScale=",user-scalable=0");document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">');
(function(a){var b=a(".select");0<b.length&&a(document).ready(function(){b.each(function(){var c=a(this);c.append('<div class="pseudo-select"></div>');c.append('<ul class="pseudo-dropdown"></ul>');var b=c.find("select"),d=c.find(".pseudo-select"),e=c.find(".pseudo-dropdown");b.css("display","none");b.find("option").each(function(){var b=a(this);e.append('<li><a href="'+b.attr("data-href")+'">'+b.text()+"</a></li>")});var f=e.find("li");if(0<b.find("option").index(b.find("option").filter(":selected"))){var g=
b.find("option").index(b.find("option").filter(":selected"));f.eq(g).addClass("selected")}else f.eq(0).addClass("selected"),b.find("option")[0].setAttribute("selected","");d.text(function(){return e.find(".selected").text()});d.click(function(){c.hasClass("opened")?c.removeClass("opened"):c.addClass("opened")});f.click(function(){var h=f.index(f.filter(".selected")),g=f.index(a(this));e.find(".selected").removeClass("selected");a(this).addClass("selected");d.text(function(){return e.find(".selected").text()});
c.removeClass("opened");b.find("option")[h].removeAttribute("selected");b.find("option")[g].setAttribute("selected","")});a(document).on("click",function(a){c.length&&(c.is(a.target)||0!==c.has(a.target).length||c.removeClass("opened"))});c.filter(".opened").on("click",function(a){c.removeClass("opened")})})})})(jQuery);
(function(a){a(document).ready(function(){var b=a(".rd-mobilemenu ul li.section a.section_link"),c=a(".rd-mobilemenu ul li.section a.article_link");a(".rd-mobilemenu ul li").find("ul");b.on("click",function(b){a(this).attr("href").split("?");b=a(this).attr("data-key");a(this).attr("data-id");a(this).parent();sectionClass(b)});c.on("click",function(b){a(this).attr("href").split("?")[1].split("#");var d=a(this).attr("data-id");a(this).attr("data-sectionId");var e=a(this).attr("data-section"),d="#"+
d;c.parent().removeClass("active");a(this).parent().addClass("active");a("body").attr("data-section")==e&&(a("html, body").animate({scrollTop:a(d).offset().top-100},300),document.location.hash=d);b.stopImmediatePropagation();b.preventDefault()})})})(jQuery);(function(a){a(document).ready(function(){var b=a("#search-form");b.submit(function(c){c.preventDefault();a.ajax({type:"POST",url:"search.php",data:b.serialize(),success:function(b){a(".search-results").html(b)}})})})})(jQuery);
    /* Section Class
     ========================================================*/
    function sectionClass(item_key) {
        $.getJSON('<?php echo $path; ?>/sections.json', function (json) {
            var body = $('body');
            var section_class = 'scheme-' + item_key % 9;
            body.attr('class', '');
            body.addClass(section_class);
        });
    }

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2787305-5']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>