<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Recent Videos - TV Tropes</title>
<meta name="description" content="" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Recent Videos - TV Tropes" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Recent Videos" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/recent_videos.php" />
<meta property="og:image" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:description" content="" />
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
<a href="/pmwiki/pmwiki.php/Main/Mukokuseki" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/FanFic/WingsToFly" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<div class="ImgUploadModalStub" data-page-type="Recent-Videos"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-Recent-Videos ">
<div id="main-entry" class="with-sidebar">
<div id="main-article" class="article-content">
<h1 itemprop="headline" class="entry-title no-underline">Recent Videos<br><br></h1>
<div id="videos-filter-row">
<div id="top-filter-row" class="gutter-top">
<form action="" method="get" class="cf two-column" id="video_filters" name="video_filters">
<div class="filter-checkbox-row">
<p id="filters-icon-row"><i class="fa fa-gears"></i> Filters</p>

</div>
<div class="filter-column-row">

<div class="column-box right-box">
<select name="approval_status">
<option value="newest videos">Newest Videos</option>
<option value="oldest videos">Oldest Videos</option>
<option value="highest rating">Highest Rating</option>
<option value="lowest rating">Lowest Rating</option>

</select>
<div class="button-group text-left video-form-reset-btn-group" style="display:none">
<a href="/pmwiki/recent_videos.php" class="btn btn-danger btn-sm cut video-form-reset"><i class="refresh-icon fa fa-refresh"></i>Reset</a>
</div>
</div>
</div>
</form>
</div>
</div>
<h2>VIDEOS:</h2>
<div id="block-view-cont" class="row video-gallery">
<div class="video-block-cont" data-video-id="crxyvh">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="crxyvh" data-vimeo-id="" data-video-descrip="Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &amp;quot;I've already got a date&amp;quot;." data-video-title="Going! Going! Gosh!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/crxyvh_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" data-video-trope="Main/DisguisedInDrag" data-video-tropename="Disguised in Drag" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="13" data-video-media-sources="WesternAnimation/GoingGoingGosh,WesternAnimation/LooneyTunes,WesternAnimation/WileECoyoteAndTheRoadrunner" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="crxyvh" data-vimeo-id="" data-video-descrip="Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &amp;quot;I've already got a date&amp;quot;." data-video-title="Going! Going! Gosh!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/crxyvh_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" data-video-trope="Main/DisguisedInDrag" data-video-tropename="Disguised in Drag" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="13" data-video-media-sources="WesternAnimation/GoingGoingGosh,WesternAnimation/LooneyTunes,WesternAnimation/WileECoyoteAndTheRoadrunner" class="video-launch-link video-overlay-link font-m bold">Going! Going! Gosh! </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/DisguisedInDrag" class="font-m bold">Disguised in Drag</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="atw98o">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="atw98o" data-vimeo-id="" data-video-descrip="The opening to Even Stevens, done in stop-motion." data-video-title="Even Stevens Theme" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/atw98o_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" data-video-trope="Main/AnimatedCreditsOpening" data-video-tropename="Animated Credits Opening" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.90" data-video-rating-count="10" data-video-media-sources="Series/EvenStevens" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="atw98o" data-vimeo-id="" data-video-descrip="The opening to Even Stevens, done in stop-motion." data-video-title="Even Stevens Theme" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/atw98o_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" data-video-trope="Main/AnimatedCreditsOpening" data-video-tropename="Animated Credits Opening" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.90" data-video-rating-count="10" data-video-media-sources="Series/EvenStevens" class="video-launch-link video-overlay-link font-m bold">Even Stevens Theme </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/AnimatedCreditsOpening" class="font-m bold">Animated Credits Opening</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="al0r6p">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="al0r6p" data-vimeo-id="" data-video-descrip="George interrupting on Harry and Ginny kissing" data-video-title="&quot;Morning&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/al0r6p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" data-video-trope="Main/MomentKiller" data-video-tropename="Moment Killer" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/HarryPotterAndTheDeathlyHallows,Film/HarryPotterAndTheDeathlyHallowsPart1" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="al0r6p" data-vimeo-id="" data-video-descrip="George interrupting on Harry and Ginny kissing" data-video-title="&quot;Morning&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/al0r6p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" data-video-trope="Main/MomentKiller" data-video-tropename="Moment Killer" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/HarryPotterAndTheDeathlyHallows,Film/HarryPotterAndTheDeathlyHallowsPart1" class="video-launch-link video-overlay-link font-m bold">"Morning" </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/MomentKiller" class="font-m bold">Moment Killer</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="8yo88p">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="8yo88p" data-vimeo-id="" data-video-descrip="Silhouette is revealed to be a woman. Being a government official in 1950's America, this was a matter of necessity on her part. " data-video-title="Silhouette" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8yo88p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" data-video-trope="Main/SamusIsAGirl" data-video-tropename="Samus Is a Girl" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="10" data-video-media-sources="VideoGame/DestroyAllHumans" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="8yo88p" data-vimeo-id="" data-video-descrip="Silhouette is revealed to be a woman. Being a government official in 1950's America, this was a matter of necessity on her part. " data-video-title="Silhouette" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8yo88p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" data-video-trope="Main/SamusIsAGirl" data-video-tropename="Samus Is a Girl" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="10" data-video-media-sources="VideoGame/DestroyAllHumans" class="video-launch-link video-overlay-link font-m bold">Silhouette </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/SamusIsAGirl" class="font-m bold">Samus Is a Girl</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="vmnwhn">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="vmnwhn" data-vimeo-id="" data-video-descrip="When caught in a storm, Brock gets an idea." data-video-title="Drying Pan" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/vmnwhn_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" data-video-trope="Main/ImprovisedUmbrella" data-video-tropename="Improvised Umbrella" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="16" data-video-media-sources="Anime/Pokemon,Anime/PokemonMewtwoReturns" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="vmnwhn" data-vimeo-id="" data-video-descrip="When caught in a storm, Brock gets an idea." data-video-title="Drying Pan" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/vmnwhn_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" data-video-trope="Main/ImprovisedUmbrella" data-video-tropename="Improvised Umbrella" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="16" data-video-media-sources="Anime/Pokemon,Anime/PokemonMewtwoReturns" class="video-launch-link video-overlay-link font-m bold">Drying Pan </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/ImprovisedUmbrella" class="font-m bold">Improvised Umbrella</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="9738hs">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="9738hs" data-vimeo-id="" data-video-descrip="Bart Simpson's first word was his catchphrase, said when he saw his parents having sex." data-video-title="Bart's First Word" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/9738hs_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/9738hs.jpg" data-video-trope="Main/FlashbackToCatchphrase" data-video-tropename="Flashback to Catchphrase" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.50" data-video-rating-count="6" data-video-media-sources="WesternAnimation/TheSimpsons" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/9738hs.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="9738hs" data-vimeo-id="" data-video-descrip="Bart Simpson's first word was his catchphrase, said when he saw his parents having sex." data-video-title="Bart's First Word" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/9738hs_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/9738hs.jpg" data-video-trope="Main/FlashbackToCatchphrase" data-video-tropename="Flashback to Catchphrase" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.50" data-video-rating-count="6" data-video-media-sources="WesternAnimation/TheSimpsons" class="video-launch-link video-overlay-link font-m bold">Bart's First Word </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/FlashbackToCatchphrase" class="font-m bold">Flashback to Catchphrase</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="rbun0y">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="rbun0y" data-vimeo-id="" data-video-descrip="Command has a Keyboard Shortcut to report all of the team kills performed by PvT. Michael J. Caboose." data-video-title="CTRL-F-U" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/rbun0y_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rbun0y.jpg" data-video-trope="Main/AcquaintedWithEmergencyServices" data-video-tropename="Acquainted with Emergency Services" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="7" data-video-media-sources="Machinima/RedVsBlue,Machinima/RedVsBlueTheRecollection" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rbun0y.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="rbun0y" data-vimeo-id="" data-video-descrip="Command has a Keyboard Shortcut to report all of the team kills performed by PvT. Michael J. Caboose." data-video-title="CTRL-F-U" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/rbun0y_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rbun0y.jpg" data-video-trope="Main/AcquaintedWithEmergencyServices" data-video-tropename="Acquainted with Emergency Services" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="7" data-video-media-sources="Machinima/RedVsBlue,Machinima/RedVsBlueTheRecollection" class="video-launch-link video-overlay-link font-m bold">CTRL-F-U </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/AcquaintedWithEmergencyServices" class="font-m bold">Acquainted with Emergency Services</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="3cooss">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="3cooss" data-vimeo-id="" data-video-descrip="After drinking 100 cups of coffee, Fry becomes so caffeinated, he sees everything around him in slow motion, which comes in handy as he saves everyone, from a burning building." data-video-title="Fry's 100th Cup of Coffee" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/3cooss_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/3cooss.jpg" data-video-trope="Main/CaffeineBulletTime" data-video-tropename="Caffeine Bullet Time" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="9" data-video-media-sources="Recap/FuturamaS4E16ThreeHundredBigBoys,WesternAnimation/Futurama" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/3cooss.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="3cooss" data-vimeo-id="" data-video-descrip="After drinking 100 cups of coffee, Fry becomes so caffeinated, he sees everything around him in slow motion, which comes in handy as he saves everyone, from a burning building." data-video-title="Fry's 100th Cup of Coffee" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/3cooss_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/3cooss.jpg" data-video-trope="Main/CaffeineBulletTime" data-video-tropename="Caffeine Bullet Time" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="9" data-video-media-sources="Recap/FuturamaS4E16ThreeHundredBigBoys,WesternAnimation/Futurama" class="video-launch-link video-overlay-link font-m bold">Fry's 100th Cup of Coffee </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/CaffeineBulletTime" class="font-m bold">Caffeine Bullet Time</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="c109rj">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="c109rj" data-vimeo-id="" data-video-descrip="Darwin asks Gumball if he wants Penny to be his date for Rachel's party" data-video-title="Gumball loves Penny" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/c109rj_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/c109rj.jpg" data-video-trope="Main/CrushFilter" data-video-tropename="Crush Filter" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="WesternAnimation/TheAmazingWorldOfGumball" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/c109rj.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="c109rj" data-vimeo-id="" data-video-descrip="Darwin asks Gumball if he wants Penny to be his date for Rachel's party" data-video-title="Gumball loves Penny" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/c109rj_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/c109rj.jpg" data-video-trope="Main/CrushFilter" data-video-tropename="Crush Filter" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="WesternAnimation/TheAmazingWorldOfGumball" class="video-launch-link video-overlay-link font-m bold">Gumball loves Penny </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/CrushFilter" class="font-m bold">Crush Filter</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="70qjfv">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="70qjfv" data-vimeo-id="" data-video-descrip="Though it's clear that ex-gangster the Boss is no match for the superpowered Emperor Zinyak, he manages to keep up with him for a little while and even makes Zinyak shed a tiny bit of blood." data-video-title="Boss vs Zinyak - Round 1" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/70qjfv_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/70qjfv.jpg" data-video-trope="Main/CurbStompCushion" data-video-tropename="Curb-Stomp Cushion" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.50" data-video-rating-count="4" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/70qjfv.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="70qjfv" data-vimeo-id="" data-video-descrip="Though it's clear that ex-gangster the Boss is no match for the superpowered Emperor Zinyak, he manages to keep up with him for a little while and even makes Zinyak shed a tiny bit of blood." data-video-title="Boss vs Zinyak - Round 1" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/70qjfv_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/70qjfv.jpg" data-video-trope="Main/CurbStompCushion" data-video-tropename="Curb-Stomp Cushion" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.50" data-video-rating-count="4" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link font-m bold">Boss vs Zinyak - Round 1 </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/CurbStompCushion" class="font-m bold">Curb-Stomp Cushion</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="dze6r2">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="dze6r2" data-vimeo-id="" data-video-descrip="Thinking that an intercom is an ordering box for a fast food restaurant, Patrick knocks out the guards on the other end with his horrible breath." data-video-title="FRIED OYSTER SKINS?!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/dze6r2_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/dze6r2.jpg" data-video-trope="Main/SmellPhone" data-video-tropename="Smell Phone" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="6" data-video-media-sources="Recap/SpongeBobSquarePantsS2E6GrandmasKissesSquidville,WesternAnimation/SpongeBobSquarePants" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/dze6r2.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="dze6r2" data-vimeo-id="" data-video-descrip="Thinking that an intercom is an ordering box for a fast food restaurant, Patrick knocks out the guards on the other end with his horrible breath." data-video-title="FRIED OYSTER SKINS?!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/dze6r2_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/dze6r2.jpg" data-video-trope="Main/SmellPhone" data-video-tropename="Smell Phone" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="6" data-video-media-sources="Recap/SpongeBobSquarePantsS2E6GrandmasKissesSquidville,WesternAnimation/SpongeBobSquarePants" class="video-launch-link video-overlay-link font-m bold">FRIED OYSTER SKINS?! </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/SmellPhone" class="font-m bold">Smell Phone</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="sn0er7">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="sn0er7" data-vimeo-id="" data-video-descrip="Patrick and Sandy express remorse over driving SpongeBob away. Squidward appears to do the same, but then..." data-video-title="&quot;Idiot Boy&quot; Is Gone" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/sn0er7_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/sn0er7.jpg" data-video-trope="Main/BaitAndSwitchComment" data-video-tropename="Bait-and-Switch Comment" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="6" data-video-media-sources="Recap/SpongeBobSquarePantsS5E18WhatEverHappenedToSpong,WesternAnimation/SpongeBobSquarePants" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/sn0er7.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="sn0er7" data-vimeo-id="" data-video-descrip="Patrick and Sandy express remorse over driving SpongeBob away. Squidward appears to do the same, but then..." data-video-title="&quot;Idiot Boy&quot; Is Gone" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/sn0er7_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/sn0er7.jpg" data-video-trope="Main/BaitAndSwitchComment" data-video-tropename="Bait-and-Switch Comment" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="6" data-video-media-sources="Recap/SpongeBobSquarePantsS5E18WhatEverHappenedToSpong,WesternAnimation/SpongeBobSquarePants" class="video-launch-link video-overlay-link font-m bold">"Idiot Boy" Is Gone </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/BaitAndSwitchComment" class="font-m bold">Bait-and-Switch Comment</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="rkn5lx">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="rkn5lx" data-vimeo-id="" data-video-descrip="With Crichton the only member of the crew weak enough to stop T'raltixx, the others hastily load him up with all the defences they can give him - all of them clearly very downcast about the situation, including Crichton himself. Aeryn's final remark says it all." data-video-title="&quot;We Are Going To Die.&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/rkn5lx_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rkn5lx.jpg" data-video-trope="Main/ThisIsGonnaSuck" data-video-tropename="This Is Gonna Suck" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.83" data-video-rating-count="6" data-video-media-sources="Recap/FarscapeS02E04CrackersDontMatter,Series/Farscape" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rkn5lx.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="rkn5lx" data-vimeo-id="" data-video-descrip="With Crichton the only member of the crew weak enough to stop T'raltixx, the others hastily load him up with all the defences they can give him - all of them clearly very downcast about the situation, including Crichton himself. Aeryn's final remark says it all." data-video-title="&quot;We Are Going To Die.&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/rkn5lx_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rkn5lx.jpg" data-video-trope="Main/ThisIsGonnaSuck" data-video-tropename="This Is Gonna Suck" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.83" data-video-rating-count="6" data-video-media-sources="Recap/FarscapeS02E04CrackersDontMatter,Series/Farscape" class="video-launch-link video-overlay-link font-m bold">"We Are Going To Die." </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/ThisIsGonnaSuck" class="font-m bold">This Is Gonna Suck</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="loswbf">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="loswbf" data-vimeo-id="" data-video-descrip="Ultron, badly damaged, in the middle of a Villainous Breakdown and on the verge of defeat, resorts to strafing the Avengers from above, all while quietly singing &amp;quot;I Got No Strings.&amp;quot;" data-video-title="&quot;I Got No Strings...&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/loswbf_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/loswbf.jpg" data-video-trope="Main/TunelessSongOfMadness" data-video-tropename="Tuneless Song of Madness" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/AvengersAgeOfUltron" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/loswbf.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="loswbf" data-vimeo-id="" data-video-descrip="Ultron, badly damaged, in the middle of a Villainous Breakdown and on the verge of defeat, resorts to strafing the Avengers from above, all while quietly singing &amp;quot;I Got No Strings.&amp;quot;" data-video-title="&quot;I Got No Strings...&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/loswbf_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/loswbf.jpg" data-video-trope="Main/TunelessSongOfMadness" data-video-tropename="Tuneless Song of Madness" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/AvengersAgeOfUltron" class="video-launch-link video-overlay-link font-m bold">"I Got No Strings..." </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/TunelessSongOfMadness" class="font-m bold">Tuneless Song of Madness</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="me56or">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="me56or" data-vimeo-id="" data-video-descrip="The already-eldritch Oldest House somehow has a quarry of its own where the Hiss-resistant Black Rock is mined. Quite apart from the dimensionally transcendent nature of the place, it's always night here, and gravity behaves very unusually..." data-video-title="The Black Rock Quarry" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/me56or_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/me56or.jpg" data-video-trope="Main/EldritchLocation" data-video-tropename="Eldritch Location" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.33" data-video-rating-count="3" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/me56or.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="me56or" data-vimeo-id="" data-video-descrip="The already-eldritch Oldest House somehow has a quarry of its own where the Hiss-resistant Black Rock is mined. Quite apart from the dimensionally transcendent nature of the place, it's always night here, and gravity behaves very unusually..." data-video-title="The Black Rock Quarry" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/me56or_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/me56or.jpg" data-video-trope="Main/EldritchLocation" data-video-tropename="Eldritch Location" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.33" data-video-rating-count="3" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link font-m bold">The Black Rock Quarry </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/EldritchLocation" class="font-m bold">Eldritch Location</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="orzzla">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="orzzla" data-vimeo-id="" data-video-descrip="After getting infected by the hiss, Jesse Faden unexpectedly finds herself trapped in an illusory realm where she's no longer the superpowered Director of the Federal Bureau of Control, but a lowly intern." data-video-title="The New Girl" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/orzzla_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/orzzla.jpg" data-video-trope="Main/NightmareOfNormality" data-video-tropename="Nightmare of Normality" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.00" data-video-rating-count="1" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/orzzla.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="orzzla" data-vimeo-id="" data-video-descrip="After getting infected by the hiss, Jesse Faden unexpectedly finds herself trapped in an illusory realm where she's no longer the superpowered Director of the Federal Bureau of Control, but a lowly intern." data-video-title="The New Girl" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/orzzla_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/orzzla.jpg" data-video-trope="Main/NightmareOfNormality" data-video-tropename="Nightmare of Normality" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.00" data-video-rating-count="1" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link font-m bold">The New Girl </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/NightmareOfNormality" class="font-m bold">Nightmare of Normality</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="fgivun">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="fgivun" data-vimeo-id="" data-video-descrip="&amp;quot;Bond, James Bond&amp;quot;" data-video-title="The Trope Namer" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/fgivun_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/fgivun.jpg" data-video-trope="Main/TheNameIsBondJamesBond" data-video-tropename="The Name Is Bond, James Bond" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="9" data-video-media-sources="Film/AViewToAKill,Film/CasinoRoyale2006,Film/DieAnotherDay,Film/DrNo,Film/ForYourEyesOnly,Film/GoldenEye,Film/Goldfinger,Film/JamesBond,Film/LiveAndLetDie,Film/Moonraker,Film/NeverSayNeverAgain,Film/Octopussy,Film/OnHerMajestysSecretService,Film/TheLivingDaylights,Film/TheSpyWhoLovedMe,Film/TheWorldIsNotEnough,Film/TomorrowNeverDies" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/fgivun.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="fgivun" data-vimeo-id="" data-video-descrip="&amp;quot;Bond, James Bond&amp;quot;" data-video-title="The Trope Namer" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/fgivun_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/fgivun.jpg" data-video-trope="Main/TheNameIsBondJamesBond" data-video-tropename="The Name Is Bond, James Bond" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="9" data-video-media-sources="Film/AViewToAKill,Film/CasinoRoyale2006,Film/DieAnotherDay,Film/DrNo,Film/ForYourEyesOnly,Film/GoldenEye,Film/Goldfinger,Film/JamesBond,Film/LiveAndLetDie,Film/Moonraker,Film/NeverSayNeverAgain,Film/Octopussy,Film/OnHerMajestysSecretService,Film/TheLivingDaylights,Film/TheSpyWhoLovedMe,Film/TheWorldIsNotEnough,Film/TomorrowNeverDies" class="video-launch-link video-overlay-link font-m bold">The Trope Namer </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/TheNameIsBondJamesBond" class="font-m bold">The Name Is Bond, James Bond</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="x02bq9">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="x02bq9" data-vimeo-id="" data-video-descrip="Lynne Thigpen reprises her role as the Chief for the &amp;quot;Where in Time&amp;quot; computer game" data-video-title="The Chief" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/x02bq9_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x02bq9.jpg" data-video-trope="Main/LiveActionCutscene" data-video-tropename="Live-Action Cutscene" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="2" data-video-media-sources="VideoGame/WhereInTimeIsCarmenSandiego1997" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x02bq9.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="x02bq9" data-vimeo-id="" data-video-descrip="Lynne Thigpen reprises her role as the Chief for the &amp;quot;Where in Time&amp;quot; computer game" data-video-title="The Chief" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/x02bq9_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x02bq9.jpg" data-video-trope="Main/LiveActionCutscene" data-video-tropename="Live-Action Cutscene" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="2" data-video-media-sources="VideoGame/WhereInTimeIsCarmenSandiego1997" class="video-launch-link video-overlay-link font-m bold">The Chief </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/LiveActionCutscene" class="font-m bold">Live-Action Cutscene</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="h0d52i">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="h0d52i" data-vimeo-id="" data-video-descrip="He's there to help you" data-video-title="Frankie" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/h0d52i_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/h0d52i.jpg" data-video-trope="Main/ExpositionFairy" data-video-tropename="Exposition Fairy" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="" data-video-rating-count="" data-video-media-sources="VideoGame/JumpStart1stGrade" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/h0d52i.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="h0d52i" data-vimeo-id="" data-video-descrip="He's there to help you" data-video-title="Frankie" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/h0d52i_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/h0d52i.jpg" data-video-trope="Main/ExpositionFairy" data-video-tropename="Exposition Fairy" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="" data-video-rating-count="" data-video-media-sources="VideoGame/JumpStart1stGrade" class="video-launch-link video-overlay-link font-m bold">Frankie </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/ExpositionFairy" class="font-m bold">Exposition Fairy</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="0orl78">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="0orl78" data-vimeo-id="" data-video-descrip="Asha is halfway through her plan on how to take out the guards when the Boss simply leaps into the fray. on the upside, they don't need to be bailed out in the process..." data-video-title="&quot;So much for subtlety...&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/0orl78_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0orl78.jpg" data-video-trope="Main/LeeroyJenkins" data-video-tropename="Leeroy Jenkins" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0orl78.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="0orl78" data-vimeo-id="" data-video-descrip="Asha is halfway through her plan on how to take out the guards when the Boss simply leaps into the fray. on the upside, they don't need to be bailed out in the process..." data-video-title="&quot;So much for subtlety...&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/0orl78_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0orl78.jpg" data-video-trope="Main/LeeroyJenkins" data-video-tropename="Leeroy Jenkins" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link font-m bold">"So much for subtlety..." </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/LeeroyJenkins" class="font-m bold">Leeroy Jenkins</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="x33alg">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="x33alg" data-vimeo-id="" data-video-descrip="Jesse Faden finds herself unexpectedly participating in a test of her worthiness to become the new Director of the Federal Bureau of Control - by being nudged into picking up the ex-director's Service Weapon and plunged into the Astral Plane, with the warning that failing will result in the weapon blowing her head off." data-video-title="The Service Weapon" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/x33alg_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x33alg.jpg" data-video-trope="Main/IncomprehensibleEntranceExam" data-video-tropename="Incomprehensible Entrance Exam" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x33alg.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="x33alg" data-vimeo-id="" data-video-descrip="Jesse Faden finds herself unexpectedly participating in a test of her worthiness to become the new Director of the Federal Bureau of Control - by being nudged into picking up the ex-director's Service Weapon and plunged into the Astral Plane, with the warning that failing will result in the weapon blowing her head off." data-video-title="The Service Weapon" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/x33alg_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x33alg.jpg" data-video-trope="Main/IncomprehensibleEntranceExam" data-video-tropename="Incomprehensible Entrance Exam" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link font-m bold">The Service Weapon </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/IncomprehensibleEntranceExam" class="font-m bold">Incomprehensible Entrance Exam</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="qsjaco">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="qsjaco" data-vimeo-id="" data-video-descrip="A former gang-leader, the Boss won the presidency of the USA by saving Washington from a nuclear attack, and unsurprisingly treats the job without the slightest bit of seriousness. On the upside, he at least manages to accomplish things here and there - usually through violence." data-video-title="The Boss (Jerk/Playboy/Action)" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/qsjaco_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/qsjaco.jpg" data-video-trope="Main/OurPresidentsAreDifferent" data-video-tropename="Our Presidents Are Different" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/qsjaco.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="qsjaco" data-vimeo-id="" data-video-descrip="A former gang-leader, the Boss won the presidency of the USA by saving Washington from a nuclear attack, and unsurprisingly treats the job without the slightest bit of seriousness. On the upside, he at least manages to accomplish things here and there - usually through violence." data-video-title="The Boss (Jerk/Playboy/Action)" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/qsjaco_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/qsjaco.jpg" data-video-trope="Main/OurPresidentsAreDifferent" data-video-tropename="Our Presidents Are Different" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link font-m bold">The Boss (Jerk/Playboy/Action) </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/OurPresidentsAreDifferent" class="font-m bold">Our Presidents Are Different</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="0sazt7">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="0sazt7" data-vimeo-id="" data-video-descrip="The head of the intergalactic Zin Empire, Zinyak is polite, seemingly amiable, and entirely without conscience of any kind - maintaining his courteous demeanour even while killing thousands." data-video-title="Emperor Zinyak" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/0sazt7_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0sazt7.jpg" data-video-trope="Main/FauxAffablyEvil" data-video-tropename="Faux Affably Evil" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0sazt7.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="0sazt7" data-vimeo-id="" data-video-descrip="The head of the intergalactic Zin Empire, Zinyak is polite, seemingly amiable, and entirely without conscience of any kind - maintaining his courteous demeanour even while killing thousands." data-video-title="Emperor Zinyak" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/0sazt7_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0sazt7.jpg" data-video-trope="Main/FauxAffablyEvil" data-video-tropename="Faux Affably Evil" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link font-m bold">Emperor Zinyak </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/FauxAffablyEvil" class="font-m bold">Faux Affably Evil</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="7dv8nu">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="7dv8nu" data-vimeo-id="" data-video-descrip="After being defeated by Zinyak, the Boss wakes up to find himself as a powerless mild-mannered suburbanite in a 1950s sitcom, even ending up brainwashed into enjoying it." data-video-title="A Pleasant Day" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/7dv8nu_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/7dv8nu.jpg" data-video-trope="Main/NightmareOfNormality" data-video-tropename="Nightmare of Normality" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="2" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/7dv8nu.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="7dv8nu" data-vimeo-id="" data-video-descrip="After being defeated by Zinyak, the Boss wakes up to find himself as a powerless mild-mannered suburbanite in a 1950s sitcom, even ending up brainwashed into enjoying it." data-video-title="A Pleasant Day" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/7dv8nu_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/7dv8nu.jpg" data-video-trope="Main/NightmareOfNormality" data-video-tropename="Nightmare of Normality" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="2" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link font-m bold">A Pleasant Day </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/NightmareOfNormality" class="font-m bold">Nightmare of Normality</a>
</div>
</div>
</div>
</div>
</div>
<div class="video-block-cont" data-video-id="8c3vcq">
<div class="thumbnail">
<div class="thumb-wrapper">
<a href="#video-link" data-video-id="8c3vcq" data-vimeo-id="" data-video-descrip="Having been alerted to the presence of mature Tiberium on Earth, the alien Scrin decide it's time to invade." data-video-title="The Scrin harvesting fleets" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8c3vcq_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8c3vcq.jpg" data-video-trope="Main/AlienInvasion" data-video-tropename="Alien Invasion" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="3" data-video-media-sources="Characters/CommandAndConquerTiberiumSeriesFactionsAndCharac,VideoGame/CommandAndConquer3TiberiumWars,VideoGame/CommandAndConquerTiberianSeries" class="video-launch-link video-overlay-link">
<img class="play-button-img" src="/images/play-button-logo.png" alt="play">
<img class="thumb-wrapper-img lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8c3vcq.jpg" alt="..." )">
</a>
</div>
<div class="video-info-row">
<div class="caption">
<p class="time-added">Posted 2 days ago</p>
<div class="clearfix"></div>
</div>
<a href="#video-link" data-video-id="8c3vcq" data-vimeo-id="" data-video-descrip="Having been alerted to the presence of mature Tiberium on Earth, the alien Scrin decide it's time to invade." data-video-title="The Scrin harvesting fleets" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8c3vcq_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8c3vcq.jpg" data-video-trope="Main/AlienInvasion" data-video-tropename="Alien Invasion" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="3" data-video-media-sources="Characters/CommandAndConquerTiberiumSeriesFactionsAndCharac,VideoGame/CommandAndConquer3TiberiumWars,VideoGame/CommandAndConquerTiberianSeries" class="video-launch-link video-overlay-link font-m bold">The Scrin harvesting fleets </a>
<div class="video-title-line">
<div class="index-title-row">
<p>Example of:</p>
<a href="/pmwiki/pmwiki.php/Main/AlienInvasion" class="font-m bold">Alien Invasion</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<nav class="pagination-box button-group text-center gutter-topx2" data-total-pages="641" data-url-prefix="/pmwiki/recent_videos.php?upload_status=complete&approval_status=&troper=&page=">
<span class="pagination-jump-box-wrapper mobile-on">
<form class="pagination-jump-box hidden-until-active font-m">
<input value="1" type="tel">
<a href="#jump-to-page" title="Jump to page" class="color-white dead-button" onClick="activate_jump_menu(this);return false;">GO <i class="fa fa-angle-right"></i></a>
</form>
</span>
<a href="/pmwiki/recent_videos.php?upload_status=complete&approval_status=&troper=&page=1" class="mobile-off ">
<span class="current-page"> 1 </span> </a>
<a href="/pmwiki/recent_videos.php?upload_status=complete&approval_status=&troper=&page=2" class="mobile-off ">
2 </a>
<a href="/pmwiki/recent_videos.php?upload_status=complete&approval_status=&troper=&page=3" class="mobile-off ">
3 </a>
<a href="#jump-to-page" title="Jump to page" class="pagination-jump-box-toggle mobile-on dead-button" onClick="toggle_jump_menu(this);return false;">
<span class="font-s">page 1 of 641</span>
</a>
<a href="/pmwiki/recent_videos.php?upload_status=complete&approval_status=&troper=&page=2">
<span class="mobile-on"><i class="fa fa-angle-right"></i></span>
<span class="mobile-off">Next</span>
</a>
<a href="/pmwiki/recent_videos.php?upload_status=complete&approval_status=&troper=&page=641">
<i class="fa fa-angle-double-right"></i>
</a>
</nav>
<script type="text/javascript">

	function toggle_jump_menu(e){
		$(e).siblings('.pagination-jump-box-wrapper').children('.pagination-jump-box').toggle('active');
	}

	function activate_jump_menu(e){
			var p = $(e).siblings('input').val();
			var t = $(e).closest('.pagination-box').data('total-pages');

			if(p > 0 && p <= t){
					window.location.href = $(e).closest('.pagination-box').data('url-prefix') + p;
			}else{
					show_modal('alert',encodeURIComponent('Whoops, that page might be out of range.'));
			}
	}

</script>
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
<video id='overlay-video-player-box' data-video-id="crxyvh" class='video-js vjs-default-skin vjs-16-9'>
</video>
<div class="_pmvv-vidbox-desc">
<h1 id="overlay-title">Going! Going! Gosh!</h1>
<p id="overlay-descrip" class="_pmvv-vidbox-descTxt">
Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &quot;I've already got a date&quot;.	</p>
<div class="rating-row" data-video-id="crxyvh">
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
5 (13 votes)
</div>
</div>
</div>
<div class="example-media-row">
<div class="example-overlay">
<p>Example of:</p>
<div id="overlay-trope">Main / DisguisedInDrag</div>
</div>
<div class="media-sources-overlay example-overlay">
<p>Media sources:</p>
<div id="overlay-media">Main / DisguisedInDrag</div>
</div>
</div>
<p class="_pmvv-vidbox-stats text-right font-s" style="padding-top:8px; border-top: solid 1px rgba(255,255,255,0.2)">

<a href="#video-feedback" class="float-right" data-modal-target="login">Report</a>
</p>
</div>
</div>
</div>
<div class="_pmvv-foot">
<div class="_pmvv-foot-scrollwrapper">
<a href="#video-link" data-video-id="crxyvh" data-vimeo-id="" data-video-descrip="Wile E. Coyote disguises himself as a hitch hiker in one of his many fruitless schemes to catch the Road Runner. The bird doesn't fall for it because &amp;quot;I've already got a date&amp;quot;." data-video-title="Going! Going! Gosh!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/crxyvh_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg" data-video-trope="Main/DisguisedInDrag" data-video-tropename="Disguised in Drag" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="13" data-video-media-sources="WesternAnimation/GoingGoingGosh,WesternAnimation/LooneyTunes,WesternAnimation/WileECoyoteAndTheRoadrunner" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/crxyvh.jpg">
<p><span class="bold">Going! Going! G...</span></p>
</a>
<a href="#video-link" data-video-id="atw98o" data-vimeo-id="" data-video-descrip="The opening to Even Stevens, done in stop-motion." data-video-title="Even Stevens Theme" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/atw98o_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg" data-video-trope="Main/AnimatedCreditsOpening" data-video-tropename="Animated Credits Opening" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.90" data-video-rating-count="10" data-video-media-sources="Series/EvenStevens" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/atw98o.jpg">
<p><span class="bold">Even Stevens Theme</span></p>
</a>
<a href="#video-link" data-video-id="al0r6p" data-vimeo-id="" data-video-descrip="George interrupting on Harry and Ginny kissing" data-video-title="&quot;Morning&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/al0r6p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg" data-video-trope="Main/MomentKiller" data-video-tropename="Moment Killer" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/HarryPotterAndTheDeathlyHallows,Film/HarryPotterAndTheDeathlyHallowsPart1" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/al0r6p.jpg">
<p><span class="bold">"Morning"</span></p>
</a>
<a href="#video-link" data-video-id="8yo88p" data-vimeo-id="" data-video-descrip="Silhouette is revealed to be a woman. Being a government official in 1950's America, this was a matter of necessity on her part. " data-video-title="Silhouette" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8yo88p_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg" data-video-trope="Main/SamusIsAGirl" data-video-tropename="Samus Is a Girl" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="10" data-video-media-sources="VideoGame/DestroyAllHumans" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8yo88p.jpg">
<p><span class="bold">Silhouette</span></p>
</a>
<a href="#video-link" data-video-id="vmnwhn" data-vimeo-id="" data-video-descrip="When caught in a storm, Brock gets an idea." data-video-title="Drying Pan" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/vmnwhn_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg" data-video-trope="Main/ImprovisedUmbrella" data-video-tropename="Improvised Umbrella" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="16" data-video-media-sources="Anime/Pokemon,Anime/PokemonMewtwoReturns" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/vmnwhn.jpg">
<p><span class="bold">Drying Pan</span></p>
</a>
<a href="#video-link" data-video-id="9738hs" data-vimeo-id="" data-video-descrip="Bart Simpson's first word was his catchphrase, said when he saw his parents having sex." data-video-title="Bart's First Word" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/9738hs_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/9738hs.jpg" data-video-trope="Main/FlashbackToCatchphrase" data-video-tropename="Flashback to Catchphrase" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.50" data-video-rating-count="6" data-video-media-sources="WesternAnimation/TheSimpsons" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/9738hs.jpg">
<p><span class="bold">Bart's First Word</span></p>
</a>
<a href="#video-link" data-video-id="rbun0y" data-vimeo-id="" data-video-descrip="Command has a Keyboard Shortcut to report all of the team kills performed by PvT. Michael J. Caboose." data-video-title="CTRL-F-U" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/rbun0y_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rbun0y.jpg" data-video-trope="Main/AcquaintedWithEmergencyServices" data-video-tropename="Acquainted with Emergency Services" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="7" data-video-media-sources="Machinima/RedVsBlue,Machinima/RedVsBlueTheRecollection" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rbun0y.jpg">
<p><span class="bold">CTRL-F-U</span></p>
</a>
<a href="#video-link" data-video-id="3cooss" data-vimeo-id="" data-video-descrip="After drinking 100 cups of coffee, Fry becomes so caffeinated, he sees everything around him in slow motion, which comes in handy as he saves everyone, from a burning building." data-video-title="Fry's 100th Cup of Coffee" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/3cooss_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/3cooss.jpg" data-video-trope="Main/CaffeineBulletTime" data-video-tropename="Caffeine Bullet Time" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="9" data-video-media-sources="Recap/FuturamaS4E16ThreeHundredBigBoys,WesternAnimation/Futurama" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/3cooss.jpg">
<p><span class="bold">Fry's 100th Cup...</span></p>
</a>
<a href="#video-link" data-video-id="c109rj" data-vimeo-id="" data-video-descrip="Darwin asks Gumball if he wants Penny to be his date for Rachel's party" data-video-title="Gumball loves Penny" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/c109rj_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/c109rj.jpg" data-video-trope="Main/CrushFilter" data-video-tropename="Crush Filter" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="WesternAnimation/TheAmazingWorldOfGumball" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/c109rj.jpg">
<p><span class="bold">Gumball loves P...</span></p>
</a>
<a href="#video-link" data-video-id="70qjfv" data-vimeo-id="" data-video-descrip="Though it's clear that ex-gangster the Boss is no match for the superpowered Emperor Zinyak, he manages to keep up with him for a little while and even makes Zinyak shed a tiny bit of blood." data-video-title="Boss vs Zinyak - Round 1" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/70qjfv_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/70qjfv.jpg" data-video-trope="Main/CurbStompCushion" data-video-tropename="Curb-Stomp Cushion" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.50" data-video-rating-count="4" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/70qjfv.jpg">
<p><span class="bold">Boss vs Zinyak ...</span></p>
</a>
<a href="#video-link" data-video-id="dze6r2" data-vimeo-id="" data-video-descrip="Thinking that an intercom is an ordering box for a fast food restaurant, Patrick knocks out the guards on the other end with his horrible breath." data-video-title="FRIED OYSTER SKINS?!" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/dze6r2_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/dze6r2.jpg" data-video-trope="Main/SmellPhone" data-video-tropename="Smell Phone" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="6" data-video-media-sources="Recap/SpongeBobSquarePantsS2E6GrandmasKissesSquidville,WesternAnimation/SpongeBobSquarePants" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/dze6r2.jpg">
<p><span class="bold">FRIED OYSTER SK...</span></p>
</a>
<a href="#video-link" data-video-id="sn0er7" data-vimeo-id="" data-video-descrip="Patrick and Sandy express remorse over driving SpongeBob away. Squidward appears to do the same, but then..." data-video-title="&quot;Idiot Boy&quot; Is Gone" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/sn0er7_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/sn0er7.jpg" data-video-trope="Main/BaitAndSwitchComment" data-video-tropename="Bait-and-Switch Comment" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="6" data-video-media-sources="Recap/SpongeBobSquarePantsS5E18WhatEverHappenedToSpong,WesternAnimation/SpongeBobSquarePants" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/sn0er7.jpg">
<p><span class="bold">"Idiot Boy" Is ...</span></p>
</a>
<a href="#video-link" data-video-id="rkn5lx" data-vimeo-id="" data-video-descrip="With Crichton the only member of the crew weak enough to stop T'raltixx, the others hastily load him up with all the defences they can give him - all of them clearly very downcast about the situation, including Crichton himself. Aeryn's final remark says it all." data-video-title="&quot;We Are Going To Die.&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/rkn5lx_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rkn5lx.jpg" data-video-trope="Main/ThisIsGonnaSuck" data-video-tropename="This Is Gonna Suck" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.83" data-video-rating-count="6" data-video-media-sources="Recap/FarscapeS02E04CrackersDontMatter,Series/Farscape" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/rkn5lx.jpg">
<p><span class="bold">"We Are Going T...</span></p>
</a>
<a href="#video-link" data-video-id="loswbf" data-vimeo-id="" data-video-descrip="Ultron, badly damaged, in the middle of a Villainous Breakdown and on the verge of defeat, resorts to strafing the Avengers from above, all while quietly singing &amp;quot;I Got No Strings.&amp;quot;" data-video-title="&quot;I Got No Strings...&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/loswbf_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/loswbf.jpg" data-video-trope="Main/TunelessSongOfMadness" data-video-tropename="Tuneless Song of Madness" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="Film/AvengersAgeOfUltron" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/loswbf.jpg">
<p><span class="bold">"I Got No Strin...</span></p>
</a>
<a href="#video-link" data-video-id="me56or" data-vimeo-id="" data-video-descrip="The already-eldritch Oldest House somehow has a quarry of its own where the Hiss-resistant Black Rock is mined. Quite apart from the dimensionally transcendent nature of the place, it's always night here, and gravity behaves very unusually..." data-video-title="The Black Rock Quarry" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/me56or_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/me56or.jpg" data-video-trope="Main/EldritchLocation" data-video-tropename="Eldritch Location" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.33" data-video-rating-count="3" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/me56or.jpg">
<p><span class="bold">The Black Rock ...</span></p>
</a>
<a href="#video-link" data-video-id="orzzla" data-vimeo-id="" data-video-descrip="After getting infected by the hiss, Jesse Faden unexpectedly finds herself trapped in an illusory realm where she's no longer the superpowered Director of the Federal Bureau of Control, but a lowly intern." data-video-title="The New Girl" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/orzzla_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/orzzla.jpg" data-video-trope="Main/NightmareOfNormality" data-video-tropename="Nightmare of Normality" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="4.00" data-video-rating-count="1" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/orzzla.jpg">
<p><span class="bold">The New Girl</span></p>
</a>
<a href="#video-link" data-video-id="fgivun" data-vimeo-id="" data-video-descrip="&amp;quot;Bond, James Bond&amp;quot;" data-video-title="The Trope Namer" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/fgivun_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/fgivun.jpg" data-video-trope="Main/TheNameIsBondJamesBond" data-video-tropename="The Name Is Bond, James Bond" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="9" data-video-media-sources="Film/AViewToAKill,Film/CasinoRoyale2006,Film/DieAnotherDay,Film/DrNo,Film/ForYourEyesOnly,Film/GoldenEye,Film/Goldfinger,Film/JamesBond,Film/LiveAndLetDie,Film/Moonraker,Film/NeverSayNeverAgain,Film/Octopussy,Film/OnHerMajestysSecretService,Film/TheLivingDaylights,Film/TheSpyWhoLovedMe,Film/TheWorldIsNotEnough,Film/TomorrowNeverDies" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/fgivun.jpg">
<p><span class="bold">The Trope Namer</span></p>
</a>
<a href="#video-link" data-video-id="x02bq9" data-vimeo-id="" data-video-descrip="Lynne Thigpen reprises her role as the Chief for the &amp;quot;Where in Time&amp;quot; computer game" data-video-title="The Chief" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/x02bq9_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x02bq9.jpg" data-video-trope="Main/LiveActionCutscene" data-video-tropename="Live-Action Cutscene" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="2" data-video-media-sources="VideoGame/WhereInTimeIsCarmenSandiego1997" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x02bq9.jpg">
<p><span class="bold">The Chief</span></p>
</a>
<a href="#video-link" data-video-id="h0d52i" data-vimeo-id="" data-video-descrip="He's there to help you" data-video-title="Frankie" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/h0d52i_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/h0d52i.jpg" data-video-trope="Main/ExpositionFairy" data-video-tropename="Exposition Fairy" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="" data-video-rating-count="" data-video-media-sources="VideoGame/JumpStart1stGrade" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/h0d52i.jpg">
<p><span class="bold">Frankie</span></p>
</a>
<a href="#video-link" data-video-id="0orl78" data-vimeo-id="" data-video-descrip="Asha is halfway through her plan on how to take out the guards when the Boss simply leaps into the fray. on the upside, they don't need to be bailed out in the process..." data-video-title="&quot;So much for subtlety...&quot;" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/0orl78_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0orl78.jpg" data-video-trope="Main/LeeroyJenkins" data-video-tropename="Leeroy Jenkins" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="4" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0orl78.jpg">
<p><span class="bold">"So much for su...</span></p>
</a>
<a href="#video-link" data-video-id="x33alg" data-vimeo-id="" data-video-descrip="Jesse Faden finds herself unexpectedly participating in a test of her worthiness to become the new Director of the Federal Bureau of Control - by being nudged into picking up the ex-director's Service Weapon and plunged into the Astral Plane, with the warning that failing will result in the weapon blowing her head off." data-video-title="The Service Weapon" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/x33alg_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x33alg.jpg" data-video-trope="Main/IncomprehensibleEntranceExam" data-video-tropename="Incomprehensible Entrance Exam" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/Control" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/x33alg.jpg">
<p><span class="bold">The Service Weapon</span></p>
</a>
<a href="#video-link" data-video-id="qsjaco" data-vimeo-id="" data-video-descrip="A former gang-leader, the Boss won the presidency of the USA by saving Washington from a nuclear attack, and unsurprisingly treats the job without the slightest bit of seriousness. On the upside, he at least manages to accomplish things here and there - usually through violence." data-video-title="The Boss (Jerk/Playboy/Action)" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/qsjaco_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/qsjaco.jpg" data-video-trope="Main/OurPresidentsAreDifferent" data-video-tropename="Our Presidents Are Different" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/qsjaco.jpg">
<p><span class="bold">The Boss (Jerk/...</span></p>
</a>
<a href="#video-link" data-video-id="0sazt7" data-vimeo-id="" data-video-descrip="The head of the intergalactic Zin Empire, Zinyak is polite, seemingly amiable, and entirely without conscience of any kind - maintaining his courteous demeanour even while killing thousands." data-video-title="Emperor Zinyak" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/0sazt7_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0sazt7.jpg" data-video-trope="Main/FauxAffablyEvil" data-video-tropename="Faux Affably Evil" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="1" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/0sazt7.jpg">
<p><span class="bold">Emperor Zinyak</span></p>
</a>
<a href="#video-link" data-video-id="7dv8nu" data-vimeo-id="" data-video-descrip="After being defeated by Zinyak, the Boss wakes up to find himself as a powerless mild-mannered suburbanite in a 1950s sitcom, even ending up brainwashed into enjoying it." data-video-title="A Pleasant Day" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/7dv8nu_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/7dv8nu.jpg" data-video-trope="Main/NightmareOfNormality" data-video-tropename="Nightmare of Normality" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="2" data-video-media-sources="VideoGame/SaintsRowIV" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/7dv8nu.jpg">
<p><span class="bold">A Pleasant Day</span></p>
</a>
<a href="#video-link" data-video-id="8c3vcq" data-vimeo-id="" data-video-descrip="Having been alerted to the presence of mature Tiberium on Earth, the alien Scrin decide it's time to invade." data-video-title="The Scrin harvesting fleets" data-video-url="https://d1w6li7s85ibls.cloudfront.net/qvbr/8c3vcq_640x360p_qvbr.mp4" data-video-thumbnail="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8c3vcq.jpg" data-video-trope="Main/AlienInvasion" data-video-tropename="Alien Invasion" data-video-approval="APPROVED" data-video-troper-rating="" data-video-average-rating="5.00" data-video-rating-count="3" data-video-media-sources="Characters/CommandAndConquerTiberiumSeriesFactionsAndCharac,VideoGame/CommandAndConquer3TiberiumWars,VideoGame/CommandAndConquerTiberianSeries" class="video-launch-link video-overlay-link video-background-image lazy-image" data-src="https://static.tvtropes.org/trope_videos_transcoded/images/sd/8c3vcq.jpg">
<p><span class="bold">The Scrin harve...</span></p>
</a>
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
                elem2.src = "/design/js/video_upload.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7";
                document.getElementsByTagName('head')[0].appendChild(elem2);
                            var elem2 = document.createElement('script');
                elem2.async = false;
                elem2.src = "/design/js//jquery.autocomplete.min.js?rev=61acae6dced8ebb8defa29cde07b1ab8e1d61ca7";
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
