<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Recent Edit Reasons - TV Tropes</title>
<meta name="description" content="Check the reasons for themost recent changes made to the TV Tropes wiki. " />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Recent Edit Reasons - TV Tropes" />
<meta name="twitter:description" content="Check the reasons for themost recent changes made to the TV Tropes wiki. " />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Recent Edit Reasons" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/recent_edit_reasons.php" />
<meta property="og:image" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:description" content="Check the reasons for themost recent changes made to the TV Tropes wiki. " />
<link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-icon-57x57.png" type="image/png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png" type="image/png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png" type="image/png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png" type="image/png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png" type="image/png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png" type="image/png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png" type="image/png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png" type="image/png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-icon-180x180.png" type="image/png">
<link rel="icon" sizes="16x16" href="/img/icons/favicon-16x16.png" type="image/png">
<link rel="icon" sizes="32x32" href="/img/icons/favicon-32x32.png" type="image/png">
<link rel="icon" sizes="96x96" href="/img/icons/favicon-96x96.png" type="image/png">
<link rel="icon" sizes="192x192" href="/img/icons/favicon-192x192.png" type="image/png">
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
<script>
                var propertag = {};
                propertag.cmd = [];
								var propervideotag = [];
            </script>
<link rel="stylesheet" href="/design/assets/bundle.css?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7" />
<script>
                function object(objectId) {
                    if (document.getElementById && document.getElementById(objectId)) {
                        return document.getElementById(objectId);
                    } else if (document.all && document.all(objectId)) {
                        return document.all(objectId);
                    } else if (document.layers && document.layers[objectId]) {
                        return document.layers[objectId];
                    } else {
                        return false;
                    }
                }

                // JAVASCRIPT COOKIES CODE: for getting and setting user viewing preferences
                var cookies = {
                    create: function (name, value, days2expire, path) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days2expire * 24 * 60 * 60 * 1000));
                        var expires = date.toUTCString();
                        document.cookie = name + '=' + value + ';' + 'expires=' + expires + ';' + 'path=' + path + ';';
                    },
										createWithExpire: function(name, value, expires, path) {
												document.cookie = name + '=' + value + ';' + 'expires=' + expires + ';' + 'path=' + path + ';';
										},
                    read: function (name) {
                        var cookie_value = "",
                            current_cookie = "",
                            name_expr = name + "=",
                            all_cookies = document.cookie.split(';'),
                            n = all_cookies.length;

                        for (var i = 0; i < n; i++) {
                            current_cookie = all_cookies[i].trim();
                            if (current_cookie.indexOf(name_expr) === 0) {
                                cookie_value = current_cookie.substring(name_expr.length, current_cookie.length);
                                break;
                            }
                        }
                        return cookie_value;
                    },
                    update: function (name, val) {
                        this.create(name, val, 300, "/");
                    },
                    remove: function (name) {
                        document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
                    }
                };

                function updateUserPrefs() {
                    //GENERAL: detect and set browser, if not cookied (will be treated like a user-preference and added to the #user-pref element)
                    if( !cookies.read('user-browser') ){
                        var broswer = '';

                        if(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) ){
                            browser = 'iOS';
                        } else if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'opera';
                        } else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
                            browser = 'MSIE';
                        } else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'netscape';
                        } else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'chrome';
                        } else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'safari';
                            /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
                            browserVersion = new Number(RegExp.$1);
                        } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                            browser = 'firefox';
                        } else {
                            browser = 'internet_explorer';
                        }
                        cookies.create('user-browser',browser,1,'/');
                        document.getElementById('user-prefs').classList.add('browser-' + browser);
                    } else {
                        document.getElementById('user-prefs').classList.add('browser-' + cookies.read('user-browser'));
                    }

                    //update user preference settings
                    if (cookies.read('wide-load') !== '') document.getElementById('user-prefs').classList.add('wide-load');
                    if (cookies.read('night-vision') !== '') document.getElementById('user-prefs').classList.add('night-vision');
                    if (cookies.read('sticky-header') !== '') document.getElementById('user-prefs').classList.add('sticky-header');
                    if (cookies.read('show-spoilers') !== '') document.getElementById('user-prefs').classList.add('show-spoilers');
                    if (cookies.read('folders-open') !== '') document.getElementById('user-prefs').classList.add('folders-open');
                    if (cookies.read('lefthand-sidebar') !== '') document.getElementById('user-prefs').classList.add('lefthand-sidebar');
                    if (cookies.read('highlight-links') !== '') document.getElementById('user-prefs').classList.add('highlight-links');
                    if (cookies.read('forum-gingerbread') !== '') document.getElementById('user-prefs').classList.add('forum-gingerbread');
                    if (cookies.read('shared-avatars') !== '') document.getElementById('user-prefs').classList.add('shared-avatars');
                    if (cookies.read('new-search') !== '') document.getElementById('user-prefs').classList.add('new-search');
                    if (cookies.read('stop-auto-play-video') !== '') document.getElementById('user-prefs').classList.add('stop-auto-play-video');

                    //desktop view on mobile
                    if (cookies.read('desktop-on-mobile') !== ''){
                        document.getElementById('user-prefs').classList.add('desktop-on-mobile');

                        var viewport = document.querySelector("meta[name=viewport]");
                        viewport.setAttribute('content', 'width=1000');
                    }

                }

                function updateDesktopPrefs() {
                    if (cookies.read('wide-load') !== '') document.getElementById('sidebar-toggle-wideload').classList.add('active');
                    if (cookies.read('night-vision') !== '') document.getElementById('sidebar-toggle-nightvision').classList.add('active');
                    if (cookies.read('sticky-header') !== '') document.getElementById('sidebar-toggle-stickyheader').classList.add('active');
                    if (cookies.read('show-spoilers') !== '') document.getElementById('sidebar-toggle-showspoilers').classList.add('active');

                }

                function updateMobilePrefs() {
                    if (cookies.read('show-spoilers') !== '') document.getElementById('mobile-toggle-showspoilers').classList.add('active');
                    if (cookies.read('night-vision') !== '') document.getElementById('mobile-toggle-nightvision').classList.add('active');
                    if (cookies.read('sticky-header') !== '') document.getElementById('mobile-toggle-stickyheader').classList.add('active');
                    if (cookies.read('highlight-links') !== '') document.getElementById('mobile-toggle-highlightlinks').classList.add('active');

                }


                if (document.cookie.indexOf("scroll0=") < 0) {
                    // do nothing
                } else {
                    console.log('ads removed by scroll.com');
                    var adsRemovedWith = 'scroll';
                    var style = document.createElement('style');
                    style.innerHTML = '#header-ad, .proper-ad-unit, .square_ad, .sb-ad-unit { display: none !important; } ';
                    document.head.appendChild(style);
                }
            </script>
<script type="text/javascript">

                var tvtropes_config = {
                    astri_stream_enabled : "",
                    is_logged_in         : "",
                    handle               : "",
                    get_astri_stream     : "",
										revnum               : "61acae6dced8ebb8defa29cde07b1ab8e1d61ca7",
										img_domain           : "https://static.tvtropes.org",
										adblock              : "1",
										adblock_url          : "propermessage.io",
										proper_video_url     : "https://player.propervideo.io/new_rtp/main.js",
										proper_video_host_url: "https://player.propervideo.io",
										pause_editing        : "0",
										pause_editing_msg    : "",
										pause_site_changes   : ""
                };
            </script>
<script type="text/javascript">
						  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

						  ga('create', 'UA-3821842-1', 'auto');
						  ga('send', 'pageview');

						</script>
</head>
<body class="">
<i id="user-prefs"></i>
<script>updateUserPrefs();</script>
<div id="fb-root"></div>
<div id="modal-box"></div>
<header id="main-header-bar" class="headroom-element ">
<div id="main-header-bar-inner">
<span id="header-spacer-left" class="header-spacer"></span>
<a href="#mobile-menu" id="main-mobile-toggle" class="mobile-menu-toggle-button tablet-on"><span></span><span></span><span></span></a>
<a href="/" id="main-header-logoButton" class="no-dev"></a>
<span id="header-spacer-right" class="header-spacer"></span>
<nav id="main-header-nav" class="tablet-off">
<a href="/pmwiki/pmwiki.php/Main/Tropes">Tropes</a>
<a href="/pmwiki/pmwiki.php/Main/Media">Media</a>
<a href="/pmwiki/browse.php" class="nav-browse">Browse</a>
<a href="/pmwiki/index_report.php">Indexes</a>
<a href="/pmwiki/topics.php">Forums</a>
<a href="/pmwiki/recent_videos.php" class="nav-browse">Videos</a>
</nav>
<div id="main-header-bar-right">
<div id="signup-login-box" class="font-xs mobile-off">
<a href="/pmwiki/login.php" class="hover-underline bold" data-modal-target="signup">Join</a>
<a href="/pmwiki/login.php" class="hover-underline bold" data-modal-target="login">Login</a>
</div>
<div id="signup-login-mobileToggle" class="mobile-on inline">
<a href="/pmwiki/login.php" data-modal-target="login"><i class="fa fa-user"></i></a>
</div>
<div id="search-box">
<form class="search" action="/pmwiki/search_result.php">
<input type="text" name="q" class="search-box" placeholder="Search" value="" required>
<input type="submit" class="submit-button" value="&#xf002;" />
<input type="hidden" name="search_type" value="article">
<input type="hidden" name="page_type" value="all">
<input type="hidden" name="cx" value="partner-pub-6610802604051523:amzitfn8e7v">
<input type="hidden" name="cof" value="FORID:10">
<input type="hidden" name="ie" value="ISO-8859-1">
<input name="siteurl" type="hidden" value="">
<input name="ref" type="hidden" value="">
<input name="ss" type="hidden" value="">
</form>
<a href="#close-search" class="mobile-on mobile-search-toggle close-x"><i class="fa fa-close"></i></a>
</div>
<div id="random-box">
<a href="/pmwiki/pmwiki.php/Main/LuridTalesOfDoom" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Literature/TheDevilToPayInTheBacklands" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
</div>
</div>
</div>
<div id="mobile-menu" class="tablet-on"><div class="mobile-menu-options">
<div class="nav-wrapper">
<a href="/pmwiki/pmwiki.php/Main/Tropes" class="xl">Tropes</a>
<a href="/pmwiki/pmwiki.php/Main/Media" class="xl">Media</a>
<a href="/pmwiki/browse.php" class="xl">Browse</a>
<a href="/pmwiki/index_report.php" class="xl">Indexes</a>
<a href="/pmwiki/topics.php" class="xl">Forums</a>
<a href="/pmwiki/recent_videos.php" class="xl">Videos</a>
<a href="/pmwiki/query.php?type=att">Ask The Tropers</a>
<a href="/pmwiki/query.php?type=tf">Trope Finder</a>
<a href="/pmwiki/query.php?type=ykts">You Know That Show...</a>
<a href="/pmwiki/tlp_activity.php">Trope Launch Pad</a>
<a href="#tools" data-click-toggle="active">Tools <i class="fa fa-chevron-down"></i></a>
<div class="tools-dropdown mobile-dropdown-linkList">
<a href="/pmwiki/cutlist.php">Cut List</a>
<a href="/pmwiki/changes.php">New Edits</a>
<a href="/pmwiki/recent_edit_reasons.php">Edit Reasons</a>
<a href="/pmwiki/launches.php">Launches</a>
<a href="/pmwiki/img_list.php">Images List</a>
<a href="/pmwiki/crown_activity.php">Crowner Activity</a>
<a href="/pmwiki/no_types.php">Un-typed Pages</a>
<a href="/pmwiki/page_type_audit.php">Recent Page Type Changes</a>
</div>
<a href="#hq" data-click-toggle="active">Tropes HQ <i class="fa fa-chevron-down"></i></a>
<div class="tools-dropdown mobile-dropdown-linkList">
<a href="/pmwiki/about.php">About Us</a>
<a href="/pmwiki/contact.php">Contact Us</a>
<a href="mailto:advertising@proper.io">Advertise</a>
<a href="/pmwiki/dmca.php">DMCA Notice</a>
<a href="/pmwiki/privacypolicy.php">Privacy Policy</a>
</div>
<a href="/pmwiki/ad-free-subscribe.php">Go Ad-Free</a>
<div class="toggle-switches">
<ul class="mobile-menu display-toggles">
<li>Show Spoilers <div id="mobile-toggle-showspoilers" class="display-toggle show-spoilers"></div></li>
<li>Night Vision <div id="mobile-toggle-nightvision" class="display-toggle night-vision"></div></li>
<li>Sticky Header <div id="mobile-toggle-stickyheader" class="display-toggle sticky-header"></div></li>
<li>Highlight Links <div id="mobile-toggle-highlightlinks" class="display-toggle highlight-links"></div></li>
</ul>
<script>updateMobilePrefs();</script>
</div>
</div>
</div>
</div>
</header>
<div id="homepage-introBox-mobile" class="mobile-on">
<a href="/"><img src="/images/logo-white-big.png" class="logo-small" /></a>
<form class="search" action="/pmwiki/search_result.php" style="margin:10px -5px -6px -5px;">
<input type="text" name="q" class="search-box" placeholder="Search" value="" required>
<input type="submit" class="submit-button" value="&#xf002;" />
<input type="hidden" name="search_type" value="article">
<input type="hidden" name="page_type" value="all">
<input type="hidden" name="cx" value="partner-pub-6610802604051523:amzitfn8e7v">
<input type="hidden" name="cof" value="FORID:10">
<input type="hidden" name="ie" value="ISO-8859-1">
<input name="siteurl" type="hidden" value="">
<input name="ref" type="hidden" value="">
<input name="ss" type="hidden" value="">
</form>
</div>
<div id="header-ad-wrapper" class="ad">
<div id="header-ad">
<div class="ad-size-970x90 atf_banner">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_1'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_1'); });</script> </div>
</div> </div>
</div>
</div>
<div id="main-container">
<div id="action-bar-top" class="action-bar mobile-off">
<div class="action-bar-right">
<p>Follow TV Tropes</p>
<a href="https://www.facebook.com/TVTropes" class="button-fb">
<i class="fa fa-facebook"></i></a>
<a href="https://www.twitter.com/TVTropes" class="button-tw">
<i class="fa fa-twitter"></i></a>
<a href="https://www.reddit.com/r/TVTropes" class="button-re">
<i class="fa fa-reddit-alien"></i></a>
</div>
<nav class="actions-wrapper" itemscope itemtype="http://schema.org/SiteNavigationElement">
<ul id="top_main_list" class="page-actions">
<li class="link-changes"><a href="/pmwiki/cutlist.php">
<i class="fa fa-cut"></i> Cutlist</a></li><li class="link-launches"><a href="/pmwiki/changes.php">
<i class="fa fa-pencil-square-o"></i> New Edits</a></li><li class="link-discards"><a href="/pmwiki/recent_edit_reasons.php">
<i class="fa fa-quote-left"></i> Edit Reasons</a></li><li class="link-cutList"><a href="/pmwiki/crown_activity.php">
<i class="fa crowner-icon">&#9819;</i> Crowner Activity</a></li> </ul>
<button id="top_more_button" onclick="toggle_more_menu('top');" type="button" class="nav__dropdown-toggle">More</button>
<ul id="top_more_list" class="more_menu hidden_more_list">
<li class="link-cutList more_list_item"><a href="/pmwiki/img_list.php">
<i class="fa fa-picture-o"></i> Images List</a></li><li class="link-videos more_list_item"><a href="/pmwiki/recent_videos.php">
<i class="fa fa-picture-o"></i> Recent Videos</a></li><li class="link-cutList more_list_item"><a href="/pmwiki/articles_new.php">
<i class="fa fa-newspaper-o"></i> New Articles</a></li> </ul>
</nav>
<div class="WikiWordModalStub"></div>
<div class="ImgUploadModalStub" data-page-type="EditReasons"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-EditReasons class-edit-reasons">
<div id="main-entry" class="with-sidebar">
<h1 itemprop="headline" class="entry-title">Recent Edit Reasons</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content" itemprop="articleBody">
<div class="two-column">
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Main/SuperiorSpecies?action=diff">Main / Superior Species</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Synchronicity">Synchronicity</a> on 01/06/21 02:05 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> <a class='twikilink' href='/pmwiki/pmwiki.php/Main/CantArgueWithElves' title='/pmwiki/pmwiki.php/Main/CantArgueWithElves'>Cant Argue With Elves</a> is not just about elves
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/UsefulNotes/MajorLeagueSoccer?action=diff">Useful Notes / Major League Soccer</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/KYCubbie">KY Cubbie</a> on 01/06/21 02:03 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> DC and Toronto have coaching vacancies. The Toronto coach wound up with the Galaxy,
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Film/ChildrensPartyAtThePalace?action=diff">Film / Childrens Party At The Palace</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/VanillaFlare">Vanilla Flare</a> on 01/06/21 02:02 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Put into different words so it isn’t repetitive.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/WMG/DreamSMP?action=diff">WMG / Dream SMP</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/DryingPan">Drying Pan</a> on 01/06/21 02:01 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Welp, Dream won the Doomsday War (and quite handily), so I revised my theory about Dream falling to Pandora's Vault to be more general and not specific to a certain time.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/YMMV/Persona5?action=diff">YMMV / Persona 5</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Prometheos2">Prometheos 2</a> on 01/06/21 01:58 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Add a missing spoiler tag.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Funny/WorstCooksInAmerica?action=diff">Funny / Worst Cooks In America</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Azaram">Azaram</a> on 01/06/21 01:57 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Word order fix; 'to given birth'.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Main/BuffoonishTomcat?action=diff">Main / Buffoonish Tomcat</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 01:52 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> minor edit
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/YMMV/TheSimpsonsS24E12LoveIsAManySplinteredThing?action=diff">YMMV / The Simpsons S 24 E 12 Love Is A Many Splintered Thing</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Shadow8411">Shadow 8411</a> on 01/06/21 01:51 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Trimming natter and complaining
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/DarknessInducedAudienceApathy/Literature?action=diff">Darkness Induced Audience Apathy / Literature</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/MartineBrooke">Martine Brooke</a> on 01/06/21 01:48 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> There are plenty of other non-jerk characters and indeed plenty of non-jerk narrators. Vox Day's comments were about the whole series, not just the first book.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/FrozenNorthuldra?action=diff">Characters / Frozen Northuldra</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/bookworm11">bookworm 11</a> on 01/06/21 01:47 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> <a class='twikilink' href='/pmwiki/pmwiki.php/Main/Adorkable' title='/pmwiki/pmwiki.php/Main/Adorkable'>Adorkable</a> has been reclassified as a YMMV trope, so I moved the entry to the YMMV page.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/YMMV/FrozenII?action=diff">YMMV / Frozen II</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/bookworm11">bookworm 11</a> on 01/06/21 01:46 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Moved from character page.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Main/CatsAreLazy?action=diff">Main / Cats Are Lazy</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 01:37 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> minor edit
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Awesome/VideoGamesSToZ?action=diff">Awesome / Video Games S To Z</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/HeavyMetalHermitCrab">Heavy Metal Hermit Crab</a> on 01/06/21 01:36 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> moving to localized title
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/ParanoiaFuel/ComicBooks?action=diff">Paranoia Fuel / Comic Books</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/BiffJr">Biff Jr</a> on 01/06/21 01:27 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Either explain or just don't list it.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/TheWitcherOtherCharacters?action=diff">Characters / The Witcher Other Characters</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Betoniarz">Betoniarz</a> on 01/06/21 01:26 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> He's one of the nicest characters to be ever presented in the whole saga
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Main/BuffoonishTomcat?action=diff">Main / Buffoonish Tomcat</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 01:24 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> minor edit
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/TomAndJerry?action=diff">Characters / Tom And Jerry</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 01:18 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> minor edit and the previous was based on adding the narrator that referred to Meathead by name
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/LongSongShortScene/VideoGames?action=diff">Long Song Short Scene / Video Games</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/YoriIroy">Yori Iroy</a> on 01/06/21 01:18 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Small readability improvements
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/YMMV/BladeRunner?action=diff">YMMV / Blade Runner</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:16 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> moving ymmv
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BladeRunnerOtherCharacters?action=diff">Characters / Blade Runner Other Characters</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:16 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/YMMV/Bridgerton?action=diff">YMMV / Bridgerton</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/AdelePotter">Adele Potter</a> on 01/06/21 01:16 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> no conversation in the main page
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackMirrorWhiteChristmas?action=diff">Characters / Black Mirror White Christmas</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:16 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackMirrorUSSCallister?action=diff">Characters / Black Mirror USS Callister</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:16 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackMirrorPlaytest?action=diff">Characters / Black Mirror Playtest</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:15 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackMirrorHangTheDJ?action=diff">Characters / Black Mirror Hang The DJ</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:15 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackLagoonTheLovelaceHousehold?action=diff">Characters / Black Lagoon The Lovelace Household</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:15 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackLagoonPeoplesLiberationArmy?action=diff">Characters / Black Lagoon Peoples Liberation Army</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:15 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackLagoonLagoonDeliveryCompany?action=diff">Characters / Black Lagoon Lagoon Delivery Company</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:14 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/BlackLagoonHotelMoscow?action=diff">Characters / Black Lagoon Hotel Moscow</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Tabs">Tabs</a> on 01/06/21 01:13 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Adorkable has been made YMMV due to ZCE/potholing problems and gushing. See TRS thread for discussion and decision: <a class='urllink' href='https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200'>https://tvtropes.org/pmwiki/posts.php?discussion=1588765717056576200<img src="https://static.tvtropes.org/pmwiki/pub/external_link.gif" height="12" width="12" style="border:none;" /></a>
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Main/SorryThatImDying?action=diff">Main / Sorry That Im Dying</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/CytosineGuanine">Cytosine Guanine</a> on 01/06/21 01:09 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Fixed broken link
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Film/TheWitches1966?action=diff">Film / The Witches 1966</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Noaqiyeum">Noaqiyeum</a> on 01/06/21 01:08 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Not a retcon
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Funny/DreamSMP?action=diff">Funny / Dream SMP</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Siempie">Siempie</a> on 01/06/21 01:06 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> doomsday was a single event, not an arc
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Recap/CobraKaiS3E5MiyagiDo?action=diff">Recap / Cobra Kai S 3 E 5 Miyagi Do</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/MJaxon">M Jaxon</a> on 01/06/21 01:06 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Chozen says Japanese, not Chinese.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Funny/DreamSMP?action=diff">Funny / Dream SMP</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Siempie">Siempie</a> on 01/06/21 01:05 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> doomsday was a single event, not an arc
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/MonsterVerseUSGovernmentAndMilitary?action=diff">Characters / Monster Verse US Government And Military</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Derv0sB2">Derv0s B 2</a> on 01/06/21 01:04 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Deleted Senator Williams' <a class='twikilink' href='/pmwiki/pmwiki.php/Main/ProperlyParanoid' title='/pmwiki/pmwiki.php/Main/ProperlyParanoid'>Properly Paranoid</a> entry because she never brings up <a class='twikilink' href='/pmwiki/pmwiki.php/Main/JerkassHasAPoint' title='/pmwiki/pmwiki.php/Main/JerkassHasAPoint'>Jerkass Has A Point</a> like Mark Russell does; she just seems to hate the Titans and want them killed
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/VideoGame/Control?action=diff">Video Game / Control</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/number9robotic">number9robotic</a> on 01/06/21 01:03 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> I think I've heard a mix of male and female damage yells from enemies, the armor just makes them ambiguous.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Fanfic/IncompatibleSystem?action=diff">Fanfic / Incompatible System</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Donquill">Donquill</a> on 01/06/21 01:02 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> New chapter!
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Main/HairColorDissonance?action=diff">Main / Hair Color Dissonance</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/rjd1922">rjd 1922</a> on 01/06/21 12:59 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Some more recent artwork depicts Edgeworth's hair as gray.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/GrowlingGut/WesternAnimation?action=diff">Growling Gut / Western Animation</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Beep-02002">Beep- 02002</a> on 01/06/21 12:59 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> To add more things to the list
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/DreamSMP?action=diff">Characters / Dream SMP</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Siempie">Siempie</a> on 01/06/21 12:58 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> thanks i love pain
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/TearJerker/SonicTheHedgehogIDW?action=diff">Tear Jerker / Sonic The Hedgehog IDW</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/PrincessPandaTrope">Princess Panda Trope</a> on 01/06/21 12:58 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> There's already an image which shows Whisper's <a class='twikilink' href='/pmwiki/pmwiki.php/Main/IronWoobie' title='/pmwiki/pmwiki.php/Main/IronWoobie'>Iron Woobieness</a>. No need for two.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/LetsPlay/DreamSMP?action=diff">Lets Play / Dream SMP</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/DryingPan">Drying Pan</a> on 01/06/21 12:58 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> When Techno said he wanted to chunk error the nation, he was only <em>slightly</em> exaggerating.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/WesternAnimation/TheTomAndJerryShow2014?action=diff">Western Animation / The Tom And Jerry Show 2014</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 12:57 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> minor edit
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/OlderThanTheyThink/VideoGames?action=diff">Older Than They Think / Video Games</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/nintendofanboy77">nintendofanboy 77</a> on 01/06/21 12:55 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Yeah, PAC-MAN World actually offers widescreen support. ...On the original <a class='twikilink' href='/pmwiki/pmwiki.php/Main/PlayStation' title='/pmwiki/pmwiki.php/Main/PlayStation'>Play Station</a>. You have to turn it on in the Options menu first, though.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Sandbox/TropeReportDummyEdition?action=diff">Sandbox / Trope Report Dummy Edition</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/crazysamaritan">crazysamaritan</a> on 01/06/21 12:54 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> creating summaries
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/WesternAnimation/TheTomAndJerryShow2014?action=diff">Western Animation / The Tom And Jerry Show 2014</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 12:54 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> minor edit
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/HePannedItNowHeSucks/TheNostalgiaCritic?action=diff">He Panned It Now He Sucks / The Nostalgia Critic</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/emeriin">emeriin</a> on 01/06/21 12:51 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> you know the point of that ending was that Critic is a dick?
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/TheyWastedAPerfectlyGoodCharacter/WesternAnimation?action=diff">They Wasted A Perfectly Good Character / Western Animation</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Ferot_Dreadnaught">Ferot Dreadnaught</a> on 01/06/21 12:51 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Going to add the same thing to other non-show media.
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/Characters/TomAndJerry?action=diff">Characters / Tom And Jerry</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ToonyExplorer24">Toony Explorer 24</a> on 01/06/21 12:51 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> attempt at trying to fix Meathead's appearance section
</div>
<hr style="margin-bottom:0;" />
<div class="column-box left bold">
<a href="/pmwiki/pmwiki.php/TheyWastedAPerfectlyGoodCharacter/LiveActionFilms?action=diff">They Wasted A Perfectly Good Character / Live Action Films</a>
</div>
<div class="column-box right text-right font-s mobile-text-left">
By <a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Ferot_Dreadnaught">Ferot Dreadnaught</a> on 01/06/21 12:50 PM </div>
<div class="column-box font-s">
<strong>Reason:</strong> Has it's own page.
</div>
<hr style="margin-bottom:0;" />
</div>
</div>
</div>
<div id="main-content-sidebar"><div class="sidebar-item display-options">
<ul class="sidebar display-toggles">
<li>Show Spoilers <div id="sidebar-toggle-showspoilers" class="display-toggle show-spoilers"></div></li>
<li>Night Vision <div id="sidebar-toggle-nightvision" class="display-toggle night-vision"></div></li>
<li>Sticky Header <div id="sidebar-toggle-stickyheader" class="display-toggle sticky-header"></div></li>
<li>Wide Load <div id="sidebar-toggle-wideload" class="display-toggle wide-load"></div></li>
</ul>
<script>updateDesktopPrefs();</script>
</div>
<div class="sidebar-item ad sb-ad-unit">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_2'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_2'); });</script> </div>
</div></div>
<div class="sidebar-item quick-links" itemtype="http://schema.org/SiteNavigationElement">
<p class="sidebar-item-title" data-title="Important Links">Important Links</p>
<div class="padded">
<a href="/pmwiki/query.php?type=att">Ask The Tropers</a>
<a href="/pmwiki/query.php?type=tf">Trope Finder</a>
<a href="/pmwiki/query.php?type=ykts">You Know That Show...</a>
<a href="/pmwiki/tlp_activity.php">Trope Launch Pad</a>
<a href="/pmwiki/review_activity.php">Reviews</a>
<a href="/pmwiki/lbs.php" data-modal-target="login">Live Blogs</a>
<a href="/pmwiki/ad-free-subscribe.php">Go Ad Free!</a> </div>
</div>
<div class="sidebar-item sb-ad-unit">
<div class="sidebar-section">
<div class="square_ad ad-size-300x600 ad-section text-center">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_3'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_3'); });</script> </div>
</div> </div>
</div>
</div>
<div class="sidebar-item">
<p class="sidebar-item-title" data-title="Crucial Browsing">Crucial Browsing</p>
<ul class="padded font-s" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><a href="javascript:void(0);" data-click-toggle="active">Genre</a>
<ul>
<li><a href='/pmwiki/pmwiki.php/Main/ActionAdventureTropes' title='Main/ActionAdventureTropes'>Action Adventure</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/ComedyTropes' title='Main/ComedyTropes'>Comedy</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/CommercialsTropes' title='Main/CommercialsTropes'>Commercials</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/CrimeAndPunishmentTropes' title='Main/CrimeAndPunishmentTropes'>Crime &amp; Punishment</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/DramaTropes' title='Main/DramaTropes'>Drama</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/HorrorTropes' title='Main/HorrorTropes'>Horror</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/LoveTropes' title='Main/LoveTropes'>Love</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/NewsTropes' title='Main/NewsTropes'>News</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/ProfessionalWrestling' title='Main/ProfessionalWrestling'>Professional Wrestling</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/SpeculativeFictionTropes' title='Main/SpeculativeFictionTropes'>Speculative Fiction</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/SportsStoryTropes' title='Main/SportsStoryTropes'>Sports Story</a></li>
<li><a href='/pmwiki/pmwiki.php/Main/WarTropes' title='Main/WarTropes'>War</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Media</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/Media" title="Main/Media">All Media</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/AnimationTropes" title="Main/AnimationTropes">Animation (Western)</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Anime" title="Main/Anime">Anime</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/ComicBookTropes" title="Main/ComicBookTropes">Comic Book</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FanFic" title="FanFic/FanFics">Fan Fics</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Film" title="Main/Film">Film</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/GameTropes" title="Main/GameTropes">Game</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Literature" title="Main/Literature">Literature</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MusicAndSoundEffects" title="Main/MusicAndSoundEffects">Music And Sound Effects</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/NewMediaTropes" title="Main/NewMediaTropes">New Media</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/PrintMediaTropes" title="Main/PrintMediaTropes">Print Media</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Radio" title="Main/Radio">Radio</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/SequentialArt" title="Main/SequentialArt">Sequential Art</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TabletopGames" title="Main/TabletopGames">Tabletop Games</a></li>
<li><a href="/pmwiki/pmwiki.php/UsefulNotes/Television" title="Main/Television">Television</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Theater" title="Main/Theater">Theater</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/VideogameTropes" title="Main/VideogameTropes">Videogame</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Webcomics" title="Main/Webcomics">Webcomics</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Narrative</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/UniversalTropes" title="Main/UniversalTropes">Universal</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/AppliedPhlebotinum" title="Main/AppliedPhlebotinum">Applied Phlebotinum</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CharacterizationTropes" title="Main/CharacterizationTropes">Characterization</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Characters" title="Main/Characters">Characters</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CharactersAsDevice" title="Main/CharactersAsDevice">Characters As Device</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Dialogue" title="Main/Dialogue">Dialogue</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Motifs" title="Main/Motifs">Motifs</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/NarrativeDevices" title="Main/NarrativeDevices">Narrative Devices</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Paratext" title="Main/Paratext">Paratext</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Plots" title="Main/Plots">Plots</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Settings" title="Main/Settings">Settings</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Spectacle" title="Main/Spectacle">Spectacle</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Other Categories</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/BritishTellyTropes" title="Main/BritishTellyTropes">British Telly</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TheContributors" title="Main/TheContributors">The Contributors</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CreatorSpeak" title="Main/CreatorSpeak">Creator Speak</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Creators" title="Main/Creators">Creators</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/DerivativeWorks" title="Main/DerivativeWorks">Derivative Works</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/LanguageTropes" title="Main/LanguageTropes">Language</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/LawsAndFormulas" title="Main/LawsAndFormulas">Laws And Formulas</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/ShowBusiness" title="Main/ShowBusiness">Show Business</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/SplitPersonalityTropes" title="Main/SplitPersonalityTropes">Split Personality</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/StockRoom" title="Main/StockRoom">Stock Room</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TropeTropes" title="Main/TropeTropes">Trope</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/Tropes" title="Main/Tropes">Tropes</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TruthAndLies" title="Main/TruthAndLies">Truth And Lies</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/TruthInTelevision" title="Main/TruthInTelevision">Truth In Television</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" data-click-toggle="active">Topical Tropes</a>
<ul>
<li><a href="/pmwiki/pmwiki.php/Main/BetrayalTropes" title="Main/BetrayalTropes">Betrayal</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CensorshipTropes" title="Main/CensorshipTropes">Censorship</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/CombatTropes" title="Main/CombatTropes">Combat</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/DeathTropes" title="Main/DeathTropes">Death</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FamilyTropes" title="Main/FamilyTropes">Family</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FateAndProphecyTropes" title="Main/FateAndProphecyTropes">Fate And Prophecy</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/FoodTropes" title="Main/FoodTropes">Food</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/HolidayTropes" title="Main/HolidayTropes">Holiday</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MemoryTropes" title="Main/MemoryTropes">Memory</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MoneyTropes" title="Main/MoneyTropes">Money</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/MoralityTropes" title="Main/MoralityTropes">Morality</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/PoliticsTropes" title="Main/PoliticsTropes">Politics</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/ReligionTropes" title="Main/ReligionTropes">Religion</a></li>
<li><a href="/pmwiki/pmwiki.php/Main/SchoolTropes" title="Main/SchoolTropes">School</a></li>
</ul>
</li>
</ul>
</div>
<div class="sidebar-item showcase">
<p class="sidebar-item-title" data-title="Community&nbsp;Showcase">Community Showcase <a href="/pmwiki/showcase.php" class="bubble float-right hover-blue">More</a></p>
<p class="community-showcase">
<a href="https://sharetv.com/shows/echo_chamber" target="_blank" onclick="trackOutboundLink('https://sharetv.com/shows/echo_chamber');">
<img data-src="/images/communityShowcase-echochamber.jpg" class="lazy-image" alt=""></a>
<a href="/pmwiki/pmwiki.php/Webcomic/TwistedTropes">
<img data-src="/img/howlandsc-side.jpg" class="lazy-image" alt=""></a>
</p>
</div>
<div id="stick-cont" class="sidebar-item sb-ad-unit">
<div id="stick-bar" class="sidebar-section">
<div class="square_ad ad-size-300x600 ad-section text-center">
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_ad_4'> <script>propertag.cmd.push(function() { proper_display('tvtropes_ad_4'); });</script> </div>
</div> </div>
</div>
</div>
</div>
</div>
<div id="action-bar-bottom" class="action-bar tablet-off">
<a href="#top-of-page" class="scroll-to-top dead-button" onclick="$('html, body').animate({scrollTop : 0},500);">Top</a>
</div>
</div>
<div class='proper-ad-unit ad-sticky'>
<div id='proper-ad-tvtropes_sticky_ad'> <script>propertag.cmd.push(function() { proper_display('tvtropes_sticky_ad'); });</script> </div>
</div>
<div class='proper-ad-unit '>
<div id='proper-ad-tvtropes_oop'> <script>propertag.cmd.push(function() { proper_display('tvtropes_oop'); });</script> </div>
</div>
<footer id="main-footer">
<div id="main-footer-inner">
<div class="footer-left">
<a href="/" class="img-link"><img data-src="/img/tvtropes-footer-logo.png" alt="TV Tropes" class="lazy-image" title="TV Tropes" /></a>
<form action="index.html" id="cse-search-box-mobile" class="navbar-form newsletter-signup validate modal-replies" name="" role="" data-ajax-get="/ajax/subscribe_email.php">
<button class="btn-submit newsletter-signup-submit-button" type="submit" id="subscribe-btn"><i class="fa fa-paper-plane"></i></button>
<input id="subscription-email" type="text" class="form-control" name="q" size="31" placeholder="Subscribe" value="" validate-type="email">
</form>
<ul class="social-buttons">
<li><a class="btn fb" target="_blank" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);" href="https://www.facebook.com/tvtropes"><i class="fa fa-facebook"></i></a></li>
<li><a class="btn tw" target="_blank" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);" href="https://www.twitter.com/tvtropes"><i class="fa fa-twitter"></i></a> </li>
<li><a class="btn rd" target="_blank" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-reddit']);" href="https://www.reddit.com/r/tvtropes"><i class="fa fa-reddit-alien"></i></a></li>
</ul>
</div>
<hr />
<ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><h4 class="footer-menu-header">TVTropes</h4></li>
<li><a href="/pmwiki/pmwiki.php/Main/Administrivia">About TVTropes</a></li>
<li><a href="/pmwiki/pmwiki.php/Administrivia/TheGoalsOfTVTropes">TVTropes Goals</a></li>
<li><a href="/pmwiki/pmwiki.php/Administrivia/TheTropingCode">Troping Code</a></li>
<li><a href="/pmwiki/pmwiki.php/Administrivia/TVTropesCustoms">TVTropes Customs</a></li>
<li><a href="/pmwiki/pmwiki.php/JustForFun/TropesOfLegend">Tropes of Legend</a></li>
<li><a href="/pmwiki/ad-free-subscribe.php">Go Ad-Free</a></li>
</ul>
<hr />
<ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><h4 class="footer-menu-header">Community</h4></li>
<li><a href="/pmwiki/query.php?type=att">Ask The Tropers</a></li>
<li><a href="/pmwiki/tlp_activity.php">Trope Launch Pad</a></li>
<li><a href="/pmwiki/query.php?type=tf">Trope Finder</a></li>
<li><a href="/pmwiki/query.php?type=ykts">You Know That Show</a></li>
<li><a href="/pmwiki/lbs.php" data-modal-target="login">Live Blogs</a></li>
<li><a href="/pmwiki/review_activity.php">Reviews</a></li>
<li><a href="/pmwiki/topics.php">Forum</a></li>
</ul>
<hr />
<ul class="footer-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><h4 class="footer-menu-header">Tropes HQ</h4></li>
<li><a href="/pmwiki/about.php">About Us</a></li>
<li><a href="/pmwiki/contact.php">Contact Us</a></li>
<li><a href="/pmwiki/dmca.php">DMCA Notice</a></li>
<li><a href="/pmwiki/privacypolicy.php">Privacy Policy</a></li>
</ul>
</div>
<div id="desktop-on-mobile-toggle" class="text-center gutter-top gutter-bottom tablet-on">
<a href="/pmwiki/switchDeviceCss.php?mobileVersion=1" rel="nofollow">Switch to <span class="txt-desktop">Desktop</span><span class="txt-mobile">Mobile</span> Version</a>
</div>
<div class="legal">
<p>TVTropes is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. <br>Permissions beyond the scope of this license may be available from <a xmlns:cc="http://creativecommons.org/ns#" href="mailto:thestaff@tvtropes.org" rel="cc:morePermissions"> thestaff@tvtropes.org</a>.</p>
<br>
<div class="privacy_wrapper">
</div>
</div>
</footer>
<style>
      div.fc-ccpa-root {
        position: absolute !important;
        bottom: 93px !important;
        margin: auto !important;
        width: 100% !important;
        z-index: 9999 !important;
      }
      .fc-ccpa-root .fc-dns-dialog .fc-dns-link p{
        outline: none !important;
        text-decoration: underline !important;
        font-size: .7em !important;
        font-family: sans-serif !important;
      }
      .fc-ccpa-root .fc-dns-dialog .fc-dns-link .fc-button-background {
        background: none !important;
      }
    </style>
<div id="_pm_videoViewer" class="full-screen">
<a href="#close" class="close" id="_pm_videoViewer-close"></a>
<div class="_pmvv-body">
<div class="_pmvv-vidbox">
<video id='overlay-video-player-box' data-video-id="" class='video-js vjs-default-skin vjs-16-9'>
</video>
<div class="_pmvv-vidbox-desc">
<h1 id="overlay-title"></h1>
<p id="overlay-descrip" class="_pmvv-vidbox-descTxt">
</p>
<div class="rating-row" data-video-id="">
<input type="hidden" name="is_logged_in" value="0">
<p>How well does it match the trope?</p>
<div id="star-rating-group">
<div class="trope-rate">
<input type="radio" id="lamp5" name="rate" value="5" />
<label for="lamp5" title="Absolutely"></label>
<input type="radio" id="lamp4" name="rate" value="4" />
<label for="lamp4" title="Yes"></label>
<input type="radio" id="lamp3" name="rate" value="3" />
<label for="lamp3" title="Kind of"></label>
<input type="radio" id="lamp2" name="rate" value="2" />
<label for="lamp2" title="Not really"></label>
<input type="radio" id="lamp1" name="rate" value="1" />
<label for="lamp1" title="No"></label>
</div>
<div id="star-rating-total">
</div>
</div>
</div>
<div class="example-media-row">
<div class="example-overlay">
<p>Example of:</p>
<div id="overlay-trope"> / </div>
</div>
<div class="media-sources-overlay example-overlay">
<p>Media sources:</p>
<div id="overlay-media"> / </div>
</div>
</div>
<p class="_pmvv-vidbox-stats text-right font-s" style="padding-top:8px; border-top: solid 1px rgba(255,255,255,0.2)">

<a href="#video-feedback" class="float-right" data-modal-target="login">Report</a>
</p>
</div>
</div>
</div>
</div>
<script type='text/javascript'>
        window.special_ops =  {
            member : 'no',
            isolated : 0,
            tags : ['unknown']
        };
    </script>
<script type="text/javascript">

        var cleanCreativeEnabled = "";
        var donation = "";
        var live_ads = "1";
        var img_domain = "https://static.tvtropes.org";
        var snoozed = cookies.read('snoozedabm');
        var snoozable = "";

        if (adsRemovedWith) {
            live_ads = 0;
        }

        var elem = document.createElement('script');
        elem.async = true;

        elem.src = '/design/assets/bundle.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7';

        elem.onload = function() {
                            var elem2 = document.createElement('script');
                elem2.async = false;
                elem2.src = "/design/js/template.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7";
                document.getElementsByTagName('head')[0].appendChild(elem2);
                                 }
        document.getElementsByTagName('head')[0].appendChild(elem);

    </script>
<script type="text/javascript">
      function send_analytics_event(user_type, donation){
          // if(user_type == 'uncached' || user_type == 'cached'){
          //   ga('send', 'event', 'caching', 'load', user_type, {'nonInteraction': 1});
          //   return;
          // }
          var event_name = user_type;

          if(donation == 'true'){
              event_name += "_donation"
          }else if(typeof(valid_user) == 'undefined'){
              event_name += "_blocked"
          }else if(valid_user == true){
              event_name += "_unblocked";
          }else{
              event_name = "_unknown"
          }
          ga('send', 'event', 'ads', 'load', event_name, {'nonInteraction': 1});
      }

    
    send_analytics_event("guest", "false");
      </script>

<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "35128827" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = "https://sb.scorecardresearch.com/cs/35128827/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="https://sb.scorecardresearch.com/p?c1=2&amp;c2=35128827&amp;cv=3.6.0&amp;cj=1">
</noscript>

</body>
</html>
