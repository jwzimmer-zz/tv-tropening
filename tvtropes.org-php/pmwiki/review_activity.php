<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Latest Reviews - TV Tropes</title>
<meta name="description" content="" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Latest Reviews - TV Tropes" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Latest Reviews" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/review_activity.php" />
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
<a href="/pmwiki/pmwiki.php/Main/SwissArmyWeapon" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Creator/RossMcCall" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<li class="link-latestReviews"><a href="/pmwiki/review_activity.php">
<i class="fa fa-star"></i> Latest Reviews</a></li><li class="link-reviewIndex"><a href="/pmwiki/reviews_index.php">
<i class="io icon-file-text"></i> Review Index</a></li><li class="link-about"><a href="/pmwiki/about_reviews.php">
<i class="io icon-info"></i>About Reviews</a></li> </ul>
<ul id="top_more_list" class="more_menu hidden_more_list">
</ul>
</nav>
<div class="WikiWordModalStub"></div>
<div class="ImgUploadModalStub" data-page-type="ReviewActivity"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-ReviewActivity class-reviews-activity">
<div id="main-entry" class="with-sidebar">
<h1 itemprop="headline" class="entry-title">Latest Reviews</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content" itemprop="mainContentOfPage">
<p>It turns out that people have opinions about just how well works of fiction turn out. Go figure.</p>
<p>We figured we had better give folks a place to talk about those opinions, since we don't want that sort of judgement in the Main articles. So here we are. This is a list of the most recently edited reviews. Opinions belong to the writers. TVTropes itself obviously doesn't have an opinion about good or bad storytelling. We leave all that to these folks.</p>
<form id="sortform" action="review_activity.php" method="get" class="two-column gutter-top">
<div class="column-box right">
<span class="font-s text-light">Sort By:</span>

<select name="sort" onchange="object('sortform').submit();">
<option value="activity">Activity</option>
<option value="subject">Subject</option>
<option value="reviewer">Reviewer</option>
<option value="create_date">Newest</option>
</select>
</div>
</form>
<table id="activity-list" class="gutter-top line-height-fix mobile-flexbox">
<thead class="multi-line">
<tr class="font-s">
<th class="date col-toggle" data-mobile-order="1" data-mobile-width="100">
Work / Review Title<br />
Troper
</th>
<th class="word-count" data-align="right" data-mobile-align="left" data-mobile-order="2" data-mobile-width="100">
Date/<br class="mobile-off" />
Comments
</th>
</tr>
</thead>
<tbody>
<tr class="font-s">
<td class="date">
<strong>The Immortal Andthe Revenant</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=TheImmortalAndtheRevenant">Well-written, funny, feel-good
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Phoenix-21">Phoenix-21</a>
</td>
<td class="comments">
01/05/2021 08:52:41 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Space Station 13</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=SpaceStation13">One of the worst roleplay experiences I've ever had the misfortune of having.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Kibchi">Kibchi</a>
</td>
<td class="comments">
01/05/2021 05:02:30 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19677#listtop" class="bubble blue mobile-float-right">3 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Immortals Fenyx Rising</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ImmortalsFenyxRising">Bad title, worse story, excellent gameplay.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/morninglight">morninglight</a>
</td>
<td class="comments">
01/04/2021 14:11:42 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19713#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Soon I Shall Be Indestructible</strong> /
<a href="/pmwiki/reviews.php?target_group=Fanfic&target_title=SoonIShallBeIndestructible">Proving that you don't need superpowers to be a hero by giving you superpowered clothing</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Maxx_Crowley">Maxx_Crowley</a>
</td>
<td class="comments">
01/04/2021 13:31:07 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19683#listtop" class="bubble blue mobile-float-right">4 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Control</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=Control">Tintin and the SCP Foundation
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/maninahat">maninahat</a>
</td>
<td class="comments">
01/04/2021 04:12:47 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Danganronpa 2 Goodbye Despair</strong> /
<a href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=Danganronpa2GoodbyeDespair">More of the same wacky murderous antics.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/StupidTheories">StupidTheories</a>
</td>
<td class="comments">
01/03/2021 20:06:17 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Inspector Gadget 1999</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=InspectorGadget1999">Better than You Think
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
01/02/2021 22:33:33 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Cyberpunk 2077</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=Cyberpunk2077">Manufactured Outrage</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Barsidius_Krex">Barsidius_Krex</a>
</td>
<td class="comments">
01/02/2021 19:05:20 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19707#listtop" class="bubble blue mobile-float-right">5 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Frozen 2013</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Frozen2013">Frozen is so overrated it’s underrated </a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
01/01/2021 12:30:30 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19691#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Second Try</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=The Second Try"></a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/fdsa1234567890">fdsa1234567890</a>
</td>
<td class="comments">
01/01/2021 08:08:25 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Th 3 Birdman</strong> /
<a href="/pmwiki/reviews.php?target_group=WebVideo&target_title=Th3Birdman">Matitya sins something he likes cliché</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/31/2020 22:43:23 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Amphibia</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Amphibia">Another failure by the Disney Channel.</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SuperEquality07">SuperEquality07</a>
</td>
<td class="comments">
12/31/2020 05:00:23 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=18582#listtop" class="bubble blue mobile-float-right">9 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Schaffrillas Productions</strong> /
<a href="/pmwiki/reviews.php?target_group=WebVideo&target_title=SchaffrillasProductions">Why Schaffrilas Productions is a Cinematic Disaster </a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/30/2020 20:44:43 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19700#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Black Panther 2018</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=BlackPanther2018">Decent but Overrated </a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/29/2020 22:41:08 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19692#listtop" class="bubble blue mobile-float-right">4 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Shrek The Third</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=ShrekTheThird">Underrated Materpiece
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/29/2020 12:32:21 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Social Network</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=TheSocialNetwork">The Genius of the Social Network </a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/29/2020 12:19:55 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19702#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Shazam 2019</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=Shazam2019">Best DCEU movie there is
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/29/2020 11:30:10 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Rapsittie Street Kids Believe In Santa</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=TheRapsittieStreetKidsBelieveInSanta">Destined to become a classic...Just not the way they wanted</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/n3rd_d4sh">n3rd_d4sh</a>
</td>
<td class="comments">
12/29/2020 06:05:28 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=15684#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>(Common Side Effects)</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=(Common Side Effects)">It doesn't get more real than this.</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/rndmnmbr">rndmnmbr</a>
</td>
<td class="comments">
12/29/2020 04:59:38 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>EA Sports Street</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=EASportsStreet">Not A Fan
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/IzaiahSalter">IzaiahSalter</a>
</td>
<td class="comments">
12/29/2020 00:29:47 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Emperor</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=Emperor">Pretty Satisfying For A Film Premised On Unsatisfying Conclusions</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SpectralTime">SpectralTime</a>
</td>
<td class="comments">
12/28/2020 21:08:13 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19701#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Cinema Wins</strong> /
<a href="/pmwiki/reviews.php?target_group=WebVideo&target_title=CinemaWins">GoodbutImperfect</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/28/2020 18:10:39 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19695#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Outer Worlds</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=TheOuterWorlds">All Bit and no Bite
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Barsidius_Krex">Barsidius_Krex</a>
</td>
<td class="comments">
12/28/2020 16:32:40 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=18830#listtop" class="bubble blue mobile-float-right">7 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong></strong> /
<a href="/pmwiki/reviews.php?target_group=&target_title="></a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/BeccARRR">BeccARRR</a>
</td>
<td class="comments">
12/28/2020 09:36:53 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Aladdin 2019</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=Aladdin2019">Yet another lazy Disney remake</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/BeccARRR">BeccARRR</a>
</td>
<td class="comments">
12/28/2020 09:36:32 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Diamond In The Rough Touhou</strong> /
<a href="/pmwiki/reviews.php?target_group=WebAnimation&target_title=DiamondInTheRoughTouhou">People only like good tragedies.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Kibchi">Kibchi</a>
</td>
<td class="comments">
12/28/2020 04:13:03 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Star Wars Rebels</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=StarWarsRebels">Mitigated impressions</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/AnnaTaure">AnnaTaure</a>
</td>
<td class="comments">
12/28/2020 01:36:51 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Green Lantern</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=GreenLantern">Flawed? Yes. Still enjoyable? Of course.</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/thegoodsamaritan">thegoodsamaritan</a>
</td>
<td class="comments">
12/27/2020 23:39:37 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=11581#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Jay Exci</strong> /
<a href="/pmwiki/reviews.php?target_group=WebVideo&target_title=JayExci">Please Don’t Sue Us</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/27/2020 23:15:18 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Black Panther 2018</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=BlackPanther2018">Decent but Overrated </a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/27/2020 22:53:11 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Wonder Woman 1984</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=WonderWoman1984">Standard superhero fare with a message forced in at gunpoint and beaten into the viewer.</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SprayPay">SprayPay</a>
</td>
<td class="comments">
12/27/2020 21:42:20 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Green Lantern</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=GreenLantern">Egregiously Underrated </a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Matitya">Matitya</a>
</td>
<td class="comments">
12/27/2020 18:15:46 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Conversations With A Cryptid</strong> /
<a href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ConversationsWithACryptid">Started Good, now has Darkness-Induced Audience Apathy (SPOILERS)
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/RebelFalcon">RebelFalcon</a>
</td>
<td class="comments">
12/27/2020 15:45:44 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=18627#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Ascendant</strong> /
<a href="/pmwiki/reviews.php?target_group=Fanfic&target_title=Ascendant"> Ascendant review up until chapter 41</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Herofan16">Herofan16</a>
</td>
<td class="comments">
12/27/2020 04:13:39 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong></strong> /
<a href="/pmwiki/reviews.php?target_group=&target_title="></a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SilverCrown">SilverCrown</a>
</td>
<td class="comments">
12/26/2020 04:38:52 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Allen Gregory</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AllenGregory">I GOT THE JOKE!</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Knep">Knep</a>
</td>
<td class="comments">
12/26/2020 01:40:49 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19679#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Underrail</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=Underrail">Underrail: Expedition — Cool Silverware and Rotten Meat
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Barsidius_Krex">Barsidius_Krex</a>
</td>
<td class="comments">
12/24/2020 18:51:20 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Bright</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=Bright">Bright is a movie that baffles me.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/tomhur">tomhur</a>
</td>
<td class="comments">
12/24/2020 17:00:19 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Big Mouth</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=BigMouth">The best of adult cartoons, and the worst of adult cartoons</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/mightymewtron">mightymewtron</a>
</td>
<td class="comments">
12/24/2020 16:03:35 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Sword Of Destiny</strong> /
<a href="/pmwiki/reviews.php?target_group=Literature&target_title=SwordOfDestiny">The One in Which Yennifer Invents Text Messaging So She Can Dump Geralt</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Immortalbear">Immortalbear</a>
</td>
<td class="comments">
12/24/2020 03:35:04 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Last Wish</strong> /
<a href="/pmwiki/reviews.php?target_group=Literature&target_title=TheLastWish">The One in Which Geralt Wishes A Genie To Go F*** Itself</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Immortalbear">Immortalbear</a>
</td>
<td class="comments">
12/24/2020 03:31:11 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Steven Universe</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=StevenUniverse">Can we even call it good?
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/DreamScrape">DreamScrape</a>
</td>
<td class="comments">
12/23/2020 08:51:11 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19657#listtop" class="bubble blue mobile-float-right">7 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Overlord 2012</strong> /
<a href="/pmwiki/reviews.php?target_group=LightNovel&target_title=Overlord2012">invasion of worker</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/bookmaker23">bookmaker23</a>
</td>
<td class="comments">
12/22/2020 12:31:46 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19676#listtop" class="bubble blue mobile-float-right">7 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Dracula The Dark Prince</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=DraculaTheDarkPrince">Unpopular opinion</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/LilithArtist">LilithArtist</a>
</td>
<td class="comments">
12/21/2020 21:26:28 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Tengen Toppa Gurren Lagann</strong> /
<a href="/pmwiki/reviews.php?target_group=Anime&target_title=TengenToppaGurrenLagann">I don’t know who the hell you are, and after a while I [[EightDeadlyWords kinda stopped caring]].</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SvartiKotturinn">SvartiKotturinn</a>
</td>
<td class="comments">
12/21/2020 11:57:00 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=13868#listtop" class="bubble blue mobile-float-right">27 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Rigel Black Chronicles</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=TheRigelBlackChronicles">A rich alternate world that reimagines canon</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/ThrawnCA">ThrawnCA</a>
</td>
<td class="comments">
12/20/2020 12:04:52 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Kung Fu Panda Legends Of Awesomeness</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=KungFuPandaLegendsOfAwesomeness">Meh.</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Berserker88">Berserker88</a>
</td>
<td class="comments">
12/18/2020 09:34:57 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=10926#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Mandalorian</strong> /
<a href="/pmwiki/reviews.php?target_group=Series&target_title=TheMandalorian">Mandalorian Season 2 redefines Star Wars storytelling
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/hhardy">hhardy</a>
</td>
<td class="comments">
12/18/2020 03:30:47 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Ricochet</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Ricochet"></a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/rndmnmbr">rndmnmbr</a>
</td>
<td class="comments">
12/17/2020 23:16:53 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Edens Zero</strong> /
<a href="/pmwiki/reviews.php?target_group=Manga&target_title=EdensZero">Well I like it...
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/gk3389127">gk3389127</a>
</td>
<td class="comments">
12/16/2020 23:13:53 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19673#listtop" class="bubble blue mobile-float-right">14 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Batman Returns</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=BatmanReturns">Classic Bat-Cinema
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/InfinityLeague">InfinityLeague</a>
</td>
<td class="comments">
12/15/2020 20:59:38 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Tron Legacy</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=TronLegacy">Thematically Effective and Brilliant</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Zaptech">Zaptech</a>
</td>
<td class="comments">
12/15/2020 07:38:57 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=2987#listtop" class="bubble blue mobile-float-right">2 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Tron Legacy</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=TronLegacy">This Film Deserves Better</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/StarOutlaw">StarOutlaw</a>
</td>
<td class="comments">
12/15/2020 05:53:41 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=2729#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Turnabout Storm</strong> /
<a href="/pmwiki/reviews.php?target_group=WebAnimation&target_title=TurnaboutStorm">Surprisingly clever, but overstays its welcome
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Ninja857142">Ninja857142</a>
</td>
<td class="comments">
12/14/2020 23:10:03 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Magicians 2016</strong> /
<a href="/pmwiki/reviews.php?target_group=Series&target_title=TheMagicians2016">[season 1] Glossy and sleek, but burdened by a need to adhere to tropes
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/nameusernamenamehere">nameusernamenamehere</a>
</td>
<td class="comments">
12/14/2020 19:14:44 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Stallions On Strike</strong> /
<a href="/pmwiki/reviews.php?target_group=Fanfic&target_title=StallionsOnStrike">Over all okay but a couple of problems
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Dalek1616">Dalek1616</a>
</td>
<td class="comments">
12/14/2020 09:02:03 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Rayfox</strong> /
<a href="/pmwiki/reviews.php?target_group=Webcomic&target_title=Rayfox">Has its good parts, but is in dire need of improvement</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Misterian">Misterian</a>
</td>
<td class="comments">
12/13/2020 21:35:46 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19666#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Ludwig Quartet</strong> /
<a href="/pmwiki/reviews.php?target_group=Fanfic&target_title=TheLudwigQuartet">Is Quite Good</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/StarlitDuck">StarlitDuck</a>
</td>
<td class="comments">
12/13/2020 21:18:36 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Shoukoku No Altair</strong> /
<a href="/pmwiki/reviews.php?target_group=Manga&target_title=ShoukokuNoAltair">Not nearly as deep as it seems to think it is
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/gk3389127">gk3389127</a>
</td>
<td class="comments">
12/13/2020 20:56:06 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Winx Club</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=WinxClub">Getting on now aren't we?</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/chbedok">chbedok</a>
</td>
<td class="comments">
12/13/2020 18:44:33 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=15412#listtop" class="bubble blue mobile-float-right">3 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Innocent</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Innocent">It gets better and better
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Phoenix-21">Phoenix-21</a>
</td>
<td class="comments">
12/13/2020 15:40:32 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>The Loud House</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=TheLoudHouse">WOW!</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/MohamedGPYT">MohamedGPYT</a>
</td>
<td class="comments">
12/13/2020 15:10:37 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Dragon Age II</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=DragonAgeII">The Influance of Dragon Age 2 on the Dragon Age Series
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/TheMasquerade">TheMasquerade</a>
</td>
<td class="comments">
12/11/2020 18:16:18 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Getting Over It With Bennett Foddy</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=GettingOverItWithBennettFoddy">A counterbalance we need in the world of triple A
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/modrapetka">modrapetka</a>
</td>
<td class="comments">
12/11/2020 15:29:16 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Thor Ragnarok</strong> /
<a href="/pmwiki/reviews.php?target_group=Film&target_title=ThorRagnarok">Entertaining, but Disappointing</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/GothicProphet">GothicProphet</a>
</td>
<td class="comments">
12/10/2020 08:10:40 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=17804#listtop" class="bubble blue mobile-float-right">6 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Windows Of The Soul</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=WindowsOfTheSoul">A Good Read If You're be Willing to Commit
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Type40">Type40</a>
</td>
<td class="comments">
12/09/2020 07:53:53 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19658#listtop" class="bubble blue mobile-float-right">3 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Ghost Recon Wildlands</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=GhostReconWildlands">Ubisoft on Autopilot
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/maninahat">maninahat</a>
</td>
<td class="comments">
12/07/2020 07:31:18 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Danganronpa</strong> /
<a href="/pmwiki/reviews.php?target_group=Franchise&target_title=Danganronpa">A Lazy Masterpiece</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Elice">Elice</a>
</td>
<td class="comments">
12/06/2020 17:22:09 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19660#listtop" class="bubble blue mobile-float-right">3 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Crash Bandicoot 4 Its About Time</strong> /
<a href="/pmwiki/reviews.php?target_group=VideoGame&target_title=CrashBandicoot4ItsAboutTime">Crash Bandicoot 4: It's About (Wasting Your Precious) Time</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Fretless94">Fretless94</a>
</td>
<td class="comments">
12/06/2020 15:50:00 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19645#listtop" class="bubble blue mobile-float-right">4 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Dangan Ronpa</strong> /
<a href="/pmwiki/reviews.php?target_group=Franchise&target_title=DanganRonpa">Spectacle creep is a hell of a drug.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SpectralTime">SpectralTime</a>
</td>
<td class="comments">
 12/06/2020 10:24:43 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=17367#listtop" class="bubble blue mobile-float-right">23 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Dezo Penguin</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=DezoPenguin">Holmes meets Hime
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/Type40">Type40</a>
</td>
<td class="comments">
12/05/2020 21:31:59 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=19659#listtop" class="bubble blue mobile-float-right">1 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Spectrum Pulse</strong> /
<a href="/pmwiki/reviews.php?target_group=WebVideo&target_title=SpectrumPulse">Big Words. Little Content.
</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/55Revolver">55Revolver</a>
</td>
<td class="comments">
12/05/2020 17:53:00 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Monk</strong> /
<a href="/pmwiki/reviews.php?target_group=Series&target_title=Monk">Tasteless</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/MKantor">MKantor</a>
</td>
<td class="comments">
12/05/2020 17:05:46 <br class="mobile-off" /><a href="/pmwiki/review_comments.php?id=4555#listtop" class="bubble blue mobile-float-right">18 <i class="fa fa-comment"></i></a>
</td>
</tr>
<tr class="font-s">
<td class="date">
<strong>Looped</strong> /
<a href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Looped">Better Than Most Say But Only Just Okay</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/MagnusForce">MagnusForce</a>
</td>
<td class="comments">
12/04/2020 21:43:33 </td>
</tr>
<tr class="font-s">
<td class="date">
<strong>A Hero</strong> /
<a href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHero">Informative, but Flawed</a>
<br />
<a href="/pmwiki/pmwiki.php/Tropers/SubversionStation">SubversionStation</a>
</td>
<td class="comments">
12/03/2020 15:37:36 </td>
</tr>
</tbody>
</table>
</div>
<nav class="pagination-box button-group text-center gutter-topx2" data-total-pages="239" data-url-prefix="/pmwiki/review_activity.php?p=">
<span class="pagination-jump-box-wrapper mobile-on">
<form class="pagination-jump-box hidden-until-active font-m">
<input value="1" type="tel">
<a href="#jump-to-page" title="Jump to page" class="color-white dead-button" onClick="activate_jump_menu(this);return false;">GO <i class="fa fa-angle-right"></i></a>
</form>
</span>
<a href="/pmwiki/review_activity.php?p=1" class="mobile-off ">
<span class="current-page"> 1 </span> </a>
<a href="/pmwiki/review_activity.php?p=2" class="mobile-off ">
2 </a>
<a href="/pmwiki/review_activity.php?p=3" class="mobile-off ">
3 </a>
<a href="#jump-to-page" title="Jump to page" class="pagination-jump-box-toggle mobile-on dead-button" onClick="toggle_jump_menu(this);return false;">
<span class="font-s">page 1 of 239</span>
</a>
<a href="/pmwiki/review_activity.php?p=2">
<span class="mobile-on"><i class="fa fa-angle-right"></i></span>
<span class="mobile-off">Next</span>
</a>
<a href="/pmwiki/review_activity.php?p=239">
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
