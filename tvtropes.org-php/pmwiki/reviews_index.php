<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Reviews Index - TV Tropes</title>
<meta name="description" content="" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="Reviews Index - TV Tropes" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="Reviews Index" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/reviews_index.php" />
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
<a href="/pmwiki/pmwiki.php/Main/ExpandedStatesOfAmerica" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Webcomic/Terinu" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<div class="ImgUploadModalStub" data-page-type="ReviewIndex"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-ReviewIndex class-reviews-index">
<div id="main-entry" class="with-sidebar">
<h1 itemprop="headline" class="entry-title">Reviews Index</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content" itemprop="mainContentOfPage">
<div class="two-column gutter-bottom">
<div class="column-box right text-right">
<span style="display:inline-block;padding:11px 5px 0 0">Jump to:</span>
<select id="alphaselect" name="sort" onchange="window.location.href='/pmwiki/reviews_index.php?g='+(document.getElementById('alphaselect').value)" style="width:80px; float:right;">
<option value="0-9"> 0-9 </option>
<option value="A" selected> A </option>
<option value="B"> B </option>
<option value="C"> C </option>
<option value="D"> D </option>
<option value="E"> E </option>
<option value="F"> F </option>
<option value="G"> G </option>
<option value="H"> H </option>
<option value="I"> I </option>
<option value="J"> J </option>
<option value="K"> K </option>
<option value="L"> L </option>
<option value="M"> M </option>
<option value="N"> N </option>
<option value="O"> O </option>
<option value="P"> P </option>
<option value="Q"> Q </option>
<option value="R"> R </option>
<option value="S"> S </option>
<option value="T"> T </option>
<option value="U"> U </option>
<option value="V"> V </option>
<option value="W"> W </option>
<option value="X"> X </option>
<option value="Y"> Y </option>
<option value="Z"> Z </option>
</select>
</div>
</div>
<table id="review-list" class="solid-color mobile-flexbox">
<thead class="mobile-off">
<tr class='col-titles bold'>
<th data-mobile-order="1" data-mobile-width="100" data-mobile-align="center">The Work's Title</th>
<th data-mobile-order="2" data-mobile-width="100">The Review's Title</th>
</tr>
</thead>
<tbody>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Bad End">
A Bad End </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Zentillion's review<span></li>
<li><span>Kalle's review<span></li>
<li><span>Kimiko Muffin's review<span></li>
<li><span>Jack Mackerel's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A beacon in the dark">
A beacon in the dark </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>My Review<span></li>
<li><span>My Review<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Bright Future">
A Bright Future </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ruki Motomiya's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Certain Droll Hivemind">
A Certain Droll Hivemind </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Should have sent a poet<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Codette World Tour">
A Codette World Tour </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A solid Crack Pairing fic
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Conversation">
A Conversation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
 <li><span>0oMooncalfo0's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Demon Lord">
A Demon Lord </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Who thought this was good?<span></li>
<li><span>Pretty average<span></li>
<li><span>Review<span></li>
<li><span>Better, much better, than expected<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Different Kind of Storm">
A Different Kind of Storm </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Mixora's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A drop of Poison">
A drop of Poison </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Really Good<span></li>
<li><span>Good Premise, Good Payoff<span></li>
<li><span>Excellent World-Building<span></li>
<li><span>From comments<span></li>
<li><span>Boring god mode naruto.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Fairys Tale">
A Fairys Tale </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Megaolix's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Fox and a Shark Walk into a Bar">
A Fox and a Shark Walk into a Bar </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>From comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Heros Mask">
A Heros Mask </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Tropers/DarkGidora's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Hole In The Sky">
A Hole In The Sky </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Worth a read.<span></li>
<li><span>Sharp8394's review<span></li>
<li><span>OP's review<span></li>
<li><span>OP's review<span></li>
<li><span>moberemk's review<span></li>
<li><span>Comartemis' review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Hole in the World">
A Hole in the World </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ouch<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=a love lust story told through beautiful fingers and sweat slick palms">
a love lust story told through beautiful fingers and sweat slick palms </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review by desired<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Marriage Inconvenienced">
A Marriage Inconvenienced </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>from comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A More Plausible Ending for Death Note">
A More Plausible Ending for Death Note </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Good Title<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Mothers Love">
A Mothers Love </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Really not that good...<span></li>
<li><span>Yep,<span></li>
<li><span>Not Really Worth Reading<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A New Tangled Tale">
A New Tangled Tale </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Parexemple's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A New World">
A New World </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Sakura Rurouni's review<span></li>
<li><span>mysterykcard's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Pizza Hut Ending">
A Pizza Hut Ending </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Electroninja's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A RWBY Zanpakuto">
A RWBY Zanpakuto </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Scarlet Stained Memoir">
A Scarlet Stained Memoir </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Brickman's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Stolen Heart">
A Stolen Heart </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>By @/SirRandomUser<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Stray Child">
A Stray Child </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
 <li><span>Tropers/DarkGidora's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Tale of Two Wallets">
A Tale of Two Wallets </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>@/{{lanky}}'s review<span></li>
<li><span>@/{{Comartemis}}' review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Talk with God">
A Talk with God </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Teachers Glory">
A Teachers Glory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>If Naruto Were a Seinen<span></li>
<li><span>From comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Wasted Wish">
A Wasted Wish </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>lanky's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A Wizard Is You">
A Wizard Is You </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Shinj117's review<span></li>
<li><span>Shockz's review<span></li>
<li><span>Good story and...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A World Without You">
A World Without You </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Dattix's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ABadWeekAtTheWizengamot">
ABadWeekAtTheWizengamot </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Moving comments to reviews pt 2<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span>A rollercoaster of quality<span></li>
<li><span>Funny little fic<span></li>
<li><span>A Bad Week At The Wizengamot<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ABCsOfDeath2">
ABCsOfDeath2 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>More good than bad<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=ABCWarriors">
ABCWarriors </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>The Meknificent Seven [Progs 119-139]<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AbenobashiMahouShoutengai">
AbenobashiMahouShoutengai </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>A full-course meal of Comedy, Drama, Philosophy and more - with dessert.<span></li>
<li><span>A decent anime ruined by a bad ending<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ABetterMan">
ABetterMan </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment: <span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AbIgneIgnemCapere">
AbIgneIgnemCapere </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>LavanyaSix's review<span></li>
<li><span>K9TheFirst1's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ABitterPill">
ABitterPill </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Bitter Pill by ciaconnaa<span></li>
<li><span>A Bitter Pill by ciaconnaa<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ABlackComedy">
ABlackComedy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Of Its Time...<span></li>
<li><span>A work of genius<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ABluebirdsSong">
ABluebirdsSong </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Great Story<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ABlurredLine">
ABlurredLine </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Good? Sure. Best freeware RPG? Not quite.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ABondBeyondWorlds">
ABondBeyondWorlds </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Better than Most<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AboveTheCloudsTheSkyIsBlue">
AboveTheCloudsTheSkyIsBlue </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=ABoyNamedCharlieBrown">
ABoyNamedCharlieBrown </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Silver Screen Charlie Brown, that has a lovely ring...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AbrahamLincolnVampireHunter">
AbrahamLincolnVampireHunter </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Abraham Lincoln Vampire Hunter: A disppointing deviation of the original story<span></li>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Abraham Lincoln Vampire Hunter: A disppointing deviation of the original story<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=ABridesStory">
ABridesStory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Historically Adorable!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ABrothersPrice">
ABrothersPrice </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>A Good Biddable Boy<span></li>
<li><span>A Brother's Price - My Opinion<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Abschiedslied">
Abschiedslied </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Ketsu<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Absence">
Absence </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Iaculus<span></li>
<li><span>Unattributed comment<span></li>
<li><span>Comment by DOTMW<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AbsoluteBoyfriend">
AbsoluteBoyfriend </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Sweet, but not revolutionary.<span></li>
<li><span>Hilarious, Heartbreaking And Enjoyable<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Absolutes">
Absolutes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>sauronlulz' review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Abuse Cycle">
Abuse Cycle </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>The "How I Became Yours" of LoK!<span></li>
<li><span>Why is this reccomended?<span></li>
<li><span>Potentionally Interesting, but Awfullly OOC<span></li>
<li><span>OOC<span></li>
<li><span>Korra's closer to TheChick than the ActionGirl from canon<span></li>
<li><span>It's a dark fic, but it'll probably become known as THE lok darkfic<span></li>
<li><span>Interesting, if not a touch... arrogant<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AButterflyEffect">
AButterflyEffect </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Where to start...
<span></li>
<li><span>not for everyone, but definitely interesting<span></li>
<li><span>Erratic, but also refreshing and enjoyable.<span></li>
<li><span>Enjoyed It<span></li>
<li><span>A heartfelt romance.<span></li>
<li><span>A great fic if you like femslash.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AbyssalDreams">
AbyssalDreams </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by capeclare<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACageOfBloodAndCircumstance">
ACageOfBloodAndCircumstance </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>from comments/TheMightyGuy<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACageOfButterflies">
ACageOfButterflies </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACandleToTheSun">
ACandleToTheSun </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Fantastic.<span></li>
<li><span>A must-read<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ACanterlotWeddingAftermath">
ACanterlotWeddingAftermath </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>A Suprisng good read.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=ACarsLifeSparkysBigAdventure">
ACarsLifeSparkysBigAdventure </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Hilariously Bad!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACastleOfSilenceAndBones">
ACastleOfSilenceAndBones </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Hauntingly Beautiful<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by RNA<span></li>
<li><span>Comment by {{Tropers/Solandra}}<span></li>
<li><span>Comment by @/TinaBanina96<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=LightNovel&target_title=AccelWorld">
AccelWorld </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">LightNovel<span></li>
<li><span>A step up from Sword Art Online<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Accented Spanish and Sugar">
Accented Spanish and Sugar </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Its a crack pairing but it works so well<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AccidentalCompanions">
AccidentalCompanions </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>I liked it...<span></li>
<li><span>YMMV on this parade of despair<span></li>
<li><span>from comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AccidentalHeroOfTheGalaxy">
AccidentalHeroOfTheGalaxy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Accidental Hero<span></li>
<li><span>True to the spirit, but...<span></li>
<li><span>A fun read, but...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=AceAttorney">
AceAttorney </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VisualNovel<span></li>
<li><span>All in all a very good series.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=AceAttorneyInvestigationsMilesEdgeworth">
AceAttorneyInvestigationsMilesEdgeworth </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VisualNovel<span></li>
<li><span>Eureka! The ideal spin-off!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AceCombatAssaultHorizon">
AceCombatAssaultHorizon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Enthralling fun but frustratingly short<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=ACentaursLife">
ACentaursLife </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>A realistic take in a world with mythological human.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=LightNovel&target_title=ACertainMagicalIndex">
ACertainMagicalIndex </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">LightNovel<span></li>
<li><span>My Favorite Series<span></li>
<li><span>Too much wasted potential (Volumes 1 - 22, anime)<span></li>
<li><span>Magic, Espers, and crazy tech.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=ACertainScientificRailgun">
ACertainScientificRailgun </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Awesome manga with a bad anime.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACertainUnknownLevel0">
ACertainUnknownLevel0 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Must read!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACertainWorldOfDarkness">
ACertainWorldOfDarkness </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Nice<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AChanceToSayGoodbye">
AChanceToSayGoodbye </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=ACharlieBrownChristmas">
ACharlieBrownChristmas </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Oh, that we could always see such spirit through the year.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=AchilleTalon">
AchilleTalon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>a class of it's own<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AClashOfKings">
AClashOfKings </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>The War Has Begun<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=ACloudyPath">
ACloudyPath </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Technically well done, but bloated<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Acolyte of Zero">
Acolyte of Zero </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A new flavor<span></li>
<li><span>Not your ordinary familiar of zero fic<span></li>
<li><span>A different type<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACrownOfStars">
ACrownOfStars </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Blatant FixFic, but That's OK<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ActNatural">
ActNatural </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by desir<span></li>
<li><span>Comment by Kain<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ActOfValor">
ActOfValor </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Intense but overly sentimental<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ActRaiser">
ActRaiser </a>
</td>
<td class="item-list">

<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>WHO IS YOUR GOD NOW?!? ...Oh yeah, it's me.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACureForLove">
ACureForLove </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A cure for love - a great read!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ACurseOfTruth">
ACurseOfTruth </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Best Self-Insert fic, no doubt<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ADanceWithDragons">
ADanceWithDragons </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Winter Comes<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ADanceWithRogues">
ADanceWithRogues </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Great stealth and story, but unbalanced combat<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Adaptation">
Adaptation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Striped Chicken's Review<span></li>
<li><span>Joysweeper's review<span></li>
<li><span class="font-s text-light">Film<span></li>
<li><span>Near bullseye, but sadly a miss<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADarkerWorld">
ADarkerWorld </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A great short story<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ADarkRoom">
ADarkRoom </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>A Dark Room<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADarkSky">
ADarkSky </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Dark Sky Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AdAstra">
AdAstra </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>What is it even about?
<span></li>
<li><span>Deeply imperfect, but beautiful photography and strong acting save it.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AddictedToDeath">
AddictedToDeath </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>ladysekhmetka's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADemonLordsHero">
ADemonLordsHero </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review<span></li>
<li><span>Definitely worth a read<span></li>
<li><span>Meh.<span></li>
<li><span>Avoid at all costs<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ADevilsDiamond">
ADevilsDiamond </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>An interesting read, but with some heavy flaws.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADifferentKindOfSymmetry">
ADifferentKindOfSymmetry </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Madder Sk<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ADifferentKindOfTruth">
ADifferentKindOfTruth </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Long-winded Unecessary Fusion Fic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=ADifferentScroll">
ADifferentScroll </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Hey kids, do you like Hinata Hyuuga? <span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADishOfHerbs">
ADishOfHerbs </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Acacia<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebVideo&target_title=ADoseOfBuckley">
ADoseOfBuckley </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WebVideo<span></li>
<li><span>Whatever You Do, Don't Believe the Hype<span></li>
<li><span>The more "thinner" version of The amazing atheist<span></li>
<li><span>Re-review: My new opinion of Buckley<span></li>
<li><span>Great fun, Without any worry of an OD.<span></li>
<li><span>Entertaining, but valueless<span></li>
<li><span>Angry, sarcastic, mean, but fair.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADozenGlazedDoughnuts">
ADozenGlazedDoughnuts </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ADreamIsAWishYourHeartMakes">
ADreamIsAWishYourHeartMakes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by [=JuiceBoxHero=]<span></li>
 <li><span>Comment by otaku876<span></li>
<li><span>Comment by Chewybakaa<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AdrienAndTheTerribleHorribleNoGoodVeryBadDay">
AdrienAndTheTerribleHorribleNoGoodVeryBadDay </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Brief "What if?" exploration<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Advent Cirno">
Advent Cirno </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Gunbazca's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AdventurePonies">
AdventurePonies </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Fans would do better<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AdventureQuest">
AdventureQuest </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>You get what you pay for.<span></li>
<li><span>Great Plot, Polarizing Gameplay<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AdventureQuestWorlds">
AdventureQuestWorlds </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Simplified But Enjoyable<span></li>
<li><span>Adventure Quest Worlds review<span></li>
<li><span>AQ Worlds: A Review<span></li>
<li><span>A review by a long-time player<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AdventuresInTheMagicKingdom">
AdventuresInTheMagicKingdom </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Interesting idea, but not all that good<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AdventuresOfHuckleberryFinn">
AdventuresOfHuckleberryFinn </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Racist, foul languaged, and unflattering.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AdventuresOfSonicTheHedgehog">
AdventuresOfSonicTheHedgehog </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Technically terrible, yet entertaining<span></li>
<li><span>Such a blast, insane fun at its finest<span></li>
<li><span>It was fun as a kid, and it's fun now.<span></li>
<li><span>Okay for kids, but can't be seriously enjoyed<span></li>
<li><span>''Adventures of Sonic the Hedgehog''<span></li>
</ul>

</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AdventureTime">
AdventureTime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Season 6: Winning me back<span></li>
<li><span>Silly Yet Serious<span></li>
<li><span>Not for all but good 3 out of 5<span></li>
<li><span>Season 5: Soaring Highs and Pitiful Lows<span></li>
<li><span>Unique, but not great.<span></li>
<li><span>A Globdamn Miracle<span></li>
<li><span>Gets better after Season 2<span></li>
<li><span>There's something that just caught me off guard...<span></li>
<li><span>Awesome!<span></li>
<li><span>From great and fun to- Lesser fun but still Great<span></li>
<li><span>Adventure Time...revised!<span></li>
<li><span>A Strange Tale of Discovery<span></li>
<li><span>A Grand Finale For All But Three Of Its Most Important Characters
<span></li>
<li><span>The Ice King Arc<span></li>
<li><span>Good, but Weird.<span></li>
<li><span>The most subversively funny show on TV.<span></li>
<li><span>Like a correction of Flapjack<span></li>
<li><span>Took a Shotgun Blast to the Quality<span></li>
<li><span>My two cents on the current state of the series....<span></li>
<li><span>Why is the MartyStu more accepted than the MarySue?<span></li>
<li><span>"Too Old"<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AdventureTimeDistantLands">
AdventureTimeDistantLands </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Obsidian (Spoiler Free)
<span></li>
<li><span>BMO (Spoiler-free)
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=AdventureTimeMarcelineAndTheScreamQueens">
AdventureTimeMarcelineAndTheScreamQueens </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Waste of time and money<span></li>
<li><span>Not terrible, but would benefit from fleshing out.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Advice and Trust">
Advice and Trust </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>More Waff than you can shake your Proggressive Knife at<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AdviceFromPinkiePie">
AdviceFromPinkiePie </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Well, that was...<span></li>
<li><span>very impressed<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Aegukga">
Aegukga </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>An amazing insight into both characters.<span></li>
</ul>

</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Aeon14">
Aeon14 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Aeon 14 is good solid space opera with a comic touch
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AeonLegionLabyrinth">
AeonLegionLabyrinth </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>A Victim of the Perils of Self-Publishing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AeonNatumEngel">
AeonNatumEngel </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>LatwPIAT's review<span></li>
<li><span>LavanyaSix's review<span></li>
<li><span>GentlemensDame883's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=LightNovel&target_title=AestheticaOfARogueHero">
AestheticaOfARogueHero </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">LightNovel<span></li>
<li><span>Dull and trite<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AFairlyOddChristmas">
AFairlyOddChristmas </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Fairly Odd Christmas - Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AFairlyOddMovieGrowUpTimmyTurner">
AFairlyOddMovieGrowUpTimmyTurner </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>WTH is this?<span></li>
<li><span>A worthy attempt, but lets not try it again<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AFeastForCrows">
AFeastForCrows </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>So Begins The Slow Part<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AFeastInAzkaban">
AFeastInAzkaban </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Brilliant<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AFewAdjustments">
AFewAdjustments </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review for A Few Adjustments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=AForce">
AForce </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>Why?<span></li>
<li><span>A disappointing mess<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AForeverThing">
AForeverThing </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Kathadrion<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AForfeitOfDreams">
AForfeitOfDreams </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by notquiteanonymous<span></li>
<li><span>A good work for newcomers<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=After the Fires Fade">
After the Fires Fade </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Hands Down, Best Prototype Fic I've Read<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=AfterLastSeason">
AfterLastSeason </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>This is the actual worst movie ever<span></li>
<li><span class="font-s text-light">Main<span></li>
<li><span>Why this screws with my head.<span></li>
<li><span>Can you even call this a movie?!<span></li>
<li><span>...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AfterMASH">
AfterMASH </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Neither Shakespeare nor M*A*S*H, but also not so bad<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AftermathRewritten">
AftermathRewritten </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by person5455426<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AftermathTheDBChronicles">
AftermathTheDBChronicles </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Interesting idea...less than stellar execution<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AfterSchoolNightmare">
AfterSchoolNightmare </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Worth it.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AfterTheClockStrikesTwelve">
AfterTheClockStrikesTwelve </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Marlee Cross<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AfterTheEnd">
AfterTheEnd </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>After the End<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AfterTheFairyTaleEnds">
AfterTheFairyTaleEnds </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Cinderflame's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AfterTheFall">
AfterTheFall </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Unique and Inventive Ensemble Piece.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AfterTheRain">
AfterTheRain </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Skadi<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AfterWarGundamX">
AfterWarGundamX </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>A really great series.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AFunny">
AFunny </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Anoymous review from the comments section<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Theatre&target_title=AFunnyThingHappenedOnTheWayToTheForum">
AFunnyThingHappenedOnTheWayToTheForum </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Theatre<span></li>
<li><span>A Funny Thing Happened On The Way To The Forum<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AgainAndAgain">
AgainAndAgain </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Probably one of my favorite fanfics<span></li>
<li><span>Moving comments to reviews<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Against All Odds">
Against All Odds </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>KWSN's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AgainstADarkBackground">
AgainstADarkBackground </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>How could it not be tragedy, with that title?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AgainstTheMoon">
AgainstTheMoon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review
<span></li>
<li><span>Reccomended<span></li>
<li><span>Against the Moon<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span>Against The Moon<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AGameOfThrones">
AGameOfThrones </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Intrigue Incarnate<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Creator&target_title=AgathaChristie">
AgathaChristie </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Creator<span></li>
<li><span>The thing about Dame Agatha's Characters -<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AgentCarter">
AgentCarter </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Wonderfully clever<span></li>
<li><span>{{The War On Straw}}: [[RecycledTheSeries The Series]]<span></li>
<li><span>First 3 Episodes - Very promising indeed<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AgentOrange">
AgentOrange </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AgentsOfMayhem">
AgentsOfMayhem </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Decent story and interesting characters hampered by a lackluster world<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AgentsOfSHIELD">
AgentsOfSHIELD </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Season 2: Or how to grow a beard<span></li>
<li><span>So-So Super Secret Spies<span></li>
<li><span>On board for season 2<span></li>
<li><span>S.O.S. Review (Spoilers) duh<span></li>
<li><span>It's definitly worth it<span></li>
<li><span>Honest review<span></li>
<li><span>Far Better Than It Has Any Right To Be<span></li>
<li><span>Definitely Grew its Beard<span></li>
<li><span>Average at first, but it gets so much better<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AgentUSA">
AgentUSA </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Experimental and highly original<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AgeOfHeroesSaga">
AgeOfHeroesSaga </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Mainstream, but not good.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AgeOfWar">
AgeOfWar </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Good on the first try, but loses steam later.<span></li>
</ul>

</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=Aggretsuko">
Aggretsuko </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Decent slice of life work, but nothing that will blow your socks off<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGiftOfTheHeart">
AGiftOfTheHeart </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by slugyfan<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AGirlWalksHomeAloneAtNight">
AGirlWalksHomeAloneAtNight </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Oooh it's Gorgeous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGloriousPast">
AGloriousPast </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Call1992<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Agora">
Agora </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Earnest, but Disingenuous and Clunky<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGranaryAdventureTheUnderdogStory">
AGranaryAdventureTheUnderdogStory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Simply amazing<span></li>
<li><span>Review by {{Tropers/Horriblefilm}}<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AGrandDayOut">
AGrandDayOut </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>An underrated Start Off.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGreenSunIlluminatesTheVoid">
AGreenSunIlluminatesTheVoid </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>From comments<span></li>
<li><span>A solid crossover<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGrimTaleOfReapers">
AGrimTaleOfReapers </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Amazing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGrudgeNotHeld">
AGrudgeNotHeld </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AGuideToAccidentalMatchmaking">
AGuideToAccidentalMatchmaking </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">FanficRecs<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHandInHoldingHands">
AHandInHoldingHands </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Actually pretty mediocre.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AHardDaysNight">
AHardDaysNight </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Fun showcase of 60s pop culture<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AHatInTime">
AHatInTime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Cute as heck, but not dumbed-down.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Script&target_title=AHDotComTheSeries">
AHDotComTheSeries </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Script<span></li>
<li><span>Alright, about the AHdotCom series<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AHeartOfBrokenGlass">
AHeartOfBrokenGlass </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Seriously, read it.<span></li>
<li><span>Read it<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHero">
AHero </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Informative, but Flawed<span></li>
<li><span>funy and good<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHistoryOfMagic">
AHistoryOfMagic </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>By The Otaku Ninja<span></li>
<li><span>By Tropers/AceOfScarabs<span></li>
<li><span>By Constantly Comic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AhMyGoddess">
AhMyGoddess </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Gateway to Heaven<span></li>
<li><span>Two Episodes I Liked<span></li>
<li><span>Ah, My Goddess! Your series is wonderful!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AhoGirl">
AhoGirl </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>I do not like it
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHomeAwayFromHome">
AHomeAwayFromHome </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Home Away From Home<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHundredYearsOrMore">
AHundredYearsOrMore </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Two Words: Slow Burn<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AHuntersTail">
AHuntersTail </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>well<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AIArtificialIntelligence">
AIArtificialIntelligence </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>A dreadful and shmaltzy experience<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AikanMuyo">
AikanMuyo </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Original Comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Air and Darkness">
Air and Darkness </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>from comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AirbendersChildSeries">
AirbendersChildSeries </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>ALMOST Perfect<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebComic&target_title=AirForceBlues">
AirForceBlues </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WebComic<span></li>
<li><span>The Las Vegas Arc<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AirGear">
AirGear </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Air Gear: A Harsh Critique <span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Airplane">
Airplane </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Random gags thrown onto a normal movie<span></li>
<li><span>Funniest movie ever, or double your money back.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=Airwolf">
Airwolf </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Black Helicopters during the height of the Cold War<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AIsFor">
AIsFor </a>
</td>
<td class="item-list">

<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by [=ToThineOwnself=]<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AishiteruzeBaby">
AishiteruzeBaby </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>A refreshing, wonderful family show<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=Aisopos">
Aisopos </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>An underrated masterpiece.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AiYoriAoshi">
AiYoriAoshi </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>I am inadequate<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AJauntThroughTime">
AJauntThroughTime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>somewhat fun, but nothing new or good.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AkaiKatana">
AkaiKatana </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Akai Katana for the X-box 360<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AkameGaKill">
AkameGaKill </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Brilliant hopes, crappy anime<span></li>
<li><span>A good concept pushed down to not-good by the characters and the length<span></li>
<li><span class="font-s text-light">Manga<span></li>
<li><span>MST 3 K Mantra embodied
<span></li>
<li><span>Mindless Shounen Fun
<span></li>
<li><span>Akame Ga Kill<span></li>
<li><span>A manga that takes you for an idiot.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Akane">
Akane </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>CrypticMirror's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Akane the Suicidal">
Akane the Suicidal </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>KhymChanur's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=AkaneIroNiSomaruSaka">
AkaneIroNiSomaruSaka </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VisualNovel<span></li>
<li><span>In a word: Average<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AkatsukiNoYona">
AkatsukiNoYona </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Fast review of the main 3 characters from Akatsuki No Yona<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AKB0048">
AKB0048 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>More than just music videos<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Videogame&target_title=AkibasTrip">
AkibasTrip </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Videogame<span></li>
<li><span>Tries to be something more, but sadly just can't.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AKindOfMagic">
AKindOfMagic </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>I wote this a long time ago toward someone's poster fanart of the show on DeviantART- And I still stand by that statement today.<span></li>
<li><span>1st review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AKIRA">
AKIRA </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>A masterpiece<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AKissOfClichédProportions">
AKissOfClichédProportions </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>yep, sums it all up pretty well.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AkumaNoRiddle">
AkumaNoRiddle </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>A Breath Of Fresh Air<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Aladdin">
Aladdin </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>My favorite disney movie<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Aladdin2019">
Aladdin2019 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Yet another lazy Disney remake<span></li>
<li><span>Redundant But Not Bad<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Disney&target_title=AladdinAndTheKingOfThieves">
AladdinAndTheKingOfThieves </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Disney<span></li>
<li><span>Good, but a bit rough around the edges. Also, Genie is annoying.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AladdinTheCarpetSpeaks">
AladdinTheCarpetSpeaks </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AladdinTheSeries">
AladdinTheSeries </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Hypest show yo!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ALandFitForHeroes">
ALandFitForHeroes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Brilliant, but not perfect<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AlanWake">
AlanWake </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Move Toward the Light<span></li>
<li><span>''American Nightmare'': A Different Kind of Monster<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=AlbusPotterSeries">
AlbusPotterSeries </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>This series was great!<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Writing needs work, but incredible content<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AldnoahZero">
AldnoahZero </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Or how to not write a mecha anime 101<span></li>
<li><span>The kind of anime I would love to be able to hate<span></li>
<li><span>Could count as a Gundam AU<span></li>
<li><span>Best to make your own decision<span></li>
<li><span>A look upon Aldnoah.Zero Season 1<span></li>
<li><span>A Letdown<span></li>
<li><span>A Disappointment<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=Alex">
Alex </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Painful<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Alexander">
Alexander </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>How do you fuck that up?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlexanderHarrisAndTheShadowCouncil">
AlexanderHarrisAndTheShadowCouncil </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Oh, the dangers of SerialEscalation<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AlexandraQuick">
AlexandraQuick </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Breathing Life into Wizarding America<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Moving comments to reviews pt 2<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span>Magical America's not all it's cracked up to be<span></li>
<li><span>Has issues, but it's readable<span></li>
<li><span>Decent First Installment, Excellent Afterwards<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlexandriadTheSongOfFire">
AlexandriadTheSongOfFire </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>From comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AlexRider">
AlexRider </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>''Scorpia Rising''<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AlfiesHome">
AlfiesHome </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>don't know how this would work as a bedtime story, awful read<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlfredJonesAndTheOverprotectivePrefect">
AlfredJonesAndTheOverprotectivePrefect </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by chibiaries<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlfredTheGreat">
AlfredTheGreat </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>OP's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Algeria">
Algeria </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Fade<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlHuriya">
AlHuriya </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by [=YourFormerSelf=]<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Alice">
Alice </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>An experience, not a story<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Alice and the City of Puppeteers">
Alice and the City of Puppeteers </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Shinj117's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=Alice2009">
Alice2009 </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">Series<span></li>
<li><span>Not bad, but not brilliant.<span></li>
<li><span>I didn't really like it<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AliceInWonderland2010">
AliceInWonderland2010 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Someone cared about this movie...where did they go?<span></li>
<li><span>Underland is superior to Wonderland<span></li>
<li><span>Pretty On the Surface But That's About It.<span></li>
<li><span>Not Burton's best, but not as bad as people say<span></li>
<li><span>I don't get why everyone hates it.<span></li>
<li><span>Definitely not for Alice lovers<span></li>
<li><span>A dissapointingly unremarkable waste of potential.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AliceMadnessReturns">
AliceMadnessReturns </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Far From "All Bark and No Bite"<span></li>
<li><span>Wonderful.<span></li>
<li><span>A little off, it seemed<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Alicorn">
Alicorn </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Just a reminder, flashfic versus real writing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Alien">
Alien </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Viewing It Differently
<span></li>
<li><span>Dead Franchise in a shallow grave.<span></li>
<li><span>Not That Great<span></li>
<li><span>A Great Work That Would be Followed by Lesser Minds<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Alien3">
Alien3 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>A mediocre standalone film, but a blasphemous sequel.<span></li>
<li><span>This should not have been.<span></li>
<li><span>A Fitting end to a truly Awe-inspiring Science Fiction Series<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AlienCovenant">
AlienCovenant </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>More like Alien: Cop-out<span></li>
<li><span>God awful mess, just like Prometheus<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AlienIsolation">
AlienIsolation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>The ultimate Alien game (with a few shortcomings)<span></li>
<li><span>It made me jump<span></li>
<li><span>Overall an incredibly good game. some minor faults.<span></li>
 <li><span>Everyone Will Hear You Scream<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Aliens">
Aliens </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Aliens<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AliensColonialMarines">
AliensColonialMarines </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>It isn't terrible<span></li>
<li><span>AVP: R was only slight worse- which says a lot<span></li>
<li><span>Hot Garbage (spoilers)<span></li>
<li><span>As far as licensed lames go: It's so okay it's average.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AlienSwarm">
AlienSwarm </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Exciting, Atmospheric, and Totally Free!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ALifebetweenheavenAndEarth">
ALifebetweenheavenAndEarth </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AlitaBattleAngel">
AlitaBattleAngel </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Leeloo Dallas Multi-Fail
<span></li>
<li><span>Great manga adaptation, good standalone movie
<span></li>
<li><span>Jumbled Story, Outstanding Visuals<span></li>
<li><span>Alita is Better Than Expected
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ALittleLightReading">
ALittleLightReading </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Fix fic, but don't hold that against it<span></li>
<li><span>Good Read<span></li>
<li><span>A crackfic with a sudden dash of seriousness<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ALittleMoreTime">
ALittleMoreTime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Seconded!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ALittleMurder">
ALittleMurder </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Marlee Cross' review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=All That Really Mattered">
All That Really Mattered </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Power flower Peanut's Review<span></li>
</ul>

</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=all the kings horses and all the kings men (couldnt put me back together again)">
all the kings horses and all the kings men (couldnt put me back together again) </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Superbly written
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=All We Know Is Falling">
All We Know Is Falling </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Dropped the ball<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllAlongTheWatchtower">
AllAlongTheWatchtower </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Come for a laugh, stay for the psychology. Or vice-versa.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AllAmericanBoys">
AllAmericanBoys </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>&#9733;&#9733;&#9733;&#9733;&#9734; - 3.77/4
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AllDogsGoToHeaven">
AllDogsGoToHeaven </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>The Two Movies<span></li>
<li><span>Heaven or Hell? Priest or prisoner? Acolyte or slave?<span></li>
<li><span>My Favorite Animated Movie, Hands-Down.<span></li>
<li><span>For kids, apparently<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AllenGregory">
AllenGregory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Stay away from this show, period.<span></li>
<li><span>Not the worst animated show of all time, but definitely a contender<span></li>
<li><span>It's About as Bad as you can Conceive<span></li>
<li><span>Mercy Killed at 7 Episodes.<span></li>
<li><span>I GOT THE JOKE!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllHeEverWanted">
AllHeEverWanted </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by {{Tropers/Solandra}}<span></li>
<li><span>Comment by {{Tropers/Marionetta}}<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AllIWantForChristmas">
AllIWantForChristmas </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>My favorite Christmas movie<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AllMonstersAttack">
AllMonstersAttack </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">Film<span></li>
<li><span>The worst Godzilla movie, ever.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllOfAFluttershy">
AllOfAFluttershy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A good read: heartily recommended<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllOurHopes">
AllOurHopes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Elenor<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AllPointsBulletin">
AllPointsBulletin </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>It's the shooter you've all been waiting for! Sort of...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AllQuietOnTheWesternFront">
AllQuietOnTheWesternFront </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Must see for any thoughtful person...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllRoadsLeadToRome">
AllRoadsLeadToRome </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>All Roads Lead To Rome<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllsFairInLoveAndSorcery">
AllsFairInLoveAndSorcery </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=AllStarBatmanAndRobinTheBoyWonder">
AllStarBatmanAndRobinTheBoyWonder </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Everyone is insane<span></li>
<li><span>All Star Batman and Robin - Bloody Good Fun<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=AllStarSuperman">
AllStarSuperman </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>One of Superman's greatest.<span></li>
<li><span>An incredibly good story<span></li>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>The End Of An Era. R.I.P. Dwayne Mc Duffie (Kirbypower's Review of All-Star Superman)<span></li>
<li><span>Finally, someone who really knows how to write Superman.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllThatIHad">
AllThatIHad </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Moved comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllTheDementorsOfAzkaban">
AllTheDementorsOfAzkaban </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Just my 2 cents...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AllTheMoneyInTheWorld">
AllTheMoneyInTheWorld </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Worth Every Penny<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=LightNovel&target_title=AllYouNeedIsKill">
AllYouNeedIsKill </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">LightNovel<span></li>
<li><span>The movie was better.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllYouNeedIsLove">
AllYouNeedIsLove </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>feral's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AllYouNeedToDoIsAsk">
AllYouNeedToDoIsAsk </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Humorph<span></li>
<li><span>Amishqueen<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlmostLikeFlying">
AlmostLikeFlying </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Sweet jebus<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AlmostNakedAnimals">
AlmostNakedAnimals </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Penguin Massacre said it all.<span></li>
<li><span>ECH, DISGUSTING.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AloneInTheDark">
AloneInTheDark </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>So much potential<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ALongAndLonelyNight">
ALongAndLonelyNight </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Gemmifer's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ALoveLustStoryToldThroughBeautifulFingersSweatSlickPalms">
ALoveLustStoryToldThroughBeautifulFingersSweatSlickPalms </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AlphaAndOmega">
AlphaAndOmega </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
 <li><span>Yep, it's pretty bad<span></li>
<li><span>{{Balto}} without the charisma or likeability<span></li>
<li><span>Take off the nostalgia goggles.<span></li>
<li><span>One of the worst movies I've ever seen.<span></li>
<li><span>Not perfect, but far from awful<span></li>
<li><span>Not for Plot, But for Characters<span></li>
<li><span>Is it underrated? Hard to say.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlphabetSoup">
AlphabetSoup </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>At least there's one awesome Black and White fic out there.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AlphaProtocol">
AlphaProtocol </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>This generation's overlooked gem<span></li>
<li><span>This needs to be a cult classic<span></li>
<li><span>Shakey, but stirring<span></li>
<li><span>Love this game<span></li>
<li><span>Know what this game is, and is not, and you'll love it.<span></li>
<li><span>Closest thing we'll ever see to a new Vampire: The Masquerade: Bloodlines.<span></li>
<li><span>Choice is Your Weapon<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Alphaville">
Alphaville </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>I hate this movie<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Altered Destinies">
Altered Destinies </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Running From Your Premise<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AlteredCarbon">
AlteredCarbon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>A Carbon Copy of Staid Tropes
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlteredDestinies">
AlteredDestinies </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>In a word, meh<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>The Tygre's review<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span>Coulda Been A Contender<span></li>
<li><span>A lot more than meets the summary<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Alternate Incarceration">
Alternate Incarceration </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Marlee Cross' review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlternateHistory">
AlternateHistory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Joysweeper's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Website&target_title=AlternateHistoryDotCom">
AlternateHistoryDotCom </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Website<span></li>
<li><span>Personal experience with AlternateHistory.com<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebComic&target_title=ALutaContraOsFentisseiros">
ALutaContraOsFentisseiros </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WebComic<span></li>
<li><span>A Luta Contra of Fentisseiros - From his neighbor's POV<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlwaysByYourSide">
AlwaysByYourSide </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AlwaysMySlyBunnyAlwaysMyDumbFox">
AlwaysMySlyBunnyAlwaysMyDumbFox </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Good, but not great<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Am I Being Punished">
Am I Being Punished </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>sauronlulz' review<span></li>
<li><span>feral's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=Amagami">
Amagami </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Romantic love as a deeper friendship<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AmandaKnoxMurderOnTrialInItaly">
AmandaKnoxMurderOnTrialInItaly </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>The writing problems don't end with the title.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AManOfStature">
AManOfStature </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
<li><span>Review [yes, I do know that's obvious...]<span></li>
<li><span>fan fiction at its best<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMansDrink">
AMansDrink </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>ClandestineClear's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Amants">
Amants </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Futsuno<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMaraudersPlan">
AMaraudersPlan </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Really good<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Amato">
Amato </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Moaku<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMatterOfHonor">
AMatterOfHonor </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>carla's review<span></li>
<li><span>Zaptech's review<span></li>
 <li><span>Amusing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMatterofTime">
AMatterofTime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>So great<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=Amazing free shooter">
Amazing free shooter </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Main<span></li>
<li><span>Amazing free shooter<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmazingAnimals">
AmazingAnimals </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>nostalgia<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AmbiencePlatoonMoebiusFour">
AmbiencePlatoonMoebiusFour </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Question<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Amelia">
Amelia </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Too Good for Fanfiction<span></li>
<li><span>Pretty Damn Refreshing<span></li>
<li><span>Had potential, ultimately disappointing<span></li>
<li><span>One of the most unbelievable fics I've read, great if you don't mind amoral perversion<span></li>
<li><span>Cannot Recommend<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMemoryofaGhost">
AMemoryofaGhost </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Short Piece that Sticks Out<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=America2017">
America2017 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Comes from a genuine place, but a little too eager for its own good<span></li>
<li><span>Holy menstruation! This makes OMD look good.
<span></li>
<li><span>Amateurish and poorly thought-out.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AmericanDad">
AmericanDad </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Weird<span></li>
<li><span>Seth MacFarlane's daimond in the rough<span></li>
<li><span>The American Dad After School Special<span></li>
<li><span>On the whole, not so bad<span></li>
<li><span>Most annoying show on Earth.<span></li>
<li><span>It's pretty underrated<span></li>
<li><span>It's Come a Long Way<span></li>
<li><span>I HATE this show!!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AmericanGods">
AmericanGods </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Apparently, Neil Gaiman can fail.<span></li>
<li><span>If you haven't read this book since you were a teen, *hoo boy*...<span></li>
<li><span>A Road Trip on Four Flat Tyres<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanGods2017">
AmericanGods2017 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Should Have Been One Season Only
<span></li>
<li><span>See, I told you it Should Have Been One Season
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryApocalypse">
AmericanHorrorStoryApocalypse </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>We Need to Talk About the Mouth Feel
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryAsylum">
AmericanHorrorStoryAsylum </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Best season thus far...<span></li>
<li><span>All right, which of you psychiatrists didn't kill someone today?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryCoven">
AmericanHorrorStoryCoven </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>My Favourite So Far<span></li>
<li><span>No spell can make this season not-unwatchable.<span></li>
<li><span>Fun, but pretty damn stupid<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryFreakShow">
AmericanHorrorStoryFreakShow </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
 <li><span>Precarious as Always<span></li>
<li><span>What the other guy said.<span></li>
<li><span>Dull and aimless<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryHotel">
AmericanHorrorStoryHotel </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Much better writing, but still comes up short.<span></li>
<li><span>Style slitting the throat of Substance and drinking its blood...<span></li>
<li><span>It's a Graveyard Trash<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryMurderHouse">
AmericanHorrorStoryMurderHouse </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Never horrifying, sometimes horrible<span></li>
<li><span>Haunted house hijinks? Hell yeah!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanHorrorStoryRoanoke">
AmericanHorrorStoryRoanoke </a>
</td>
<td class="item-list">

<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Oh, sweet, bloody effort<span></li>
<li><span>An Uptick in Quality<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AmericanHustle">
AmericanHustle </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Poor balance, but some good<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AmericanNinjaWarrior">
AmericanNinjaWarrior </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>The only thing better than this show itself, is the messages it sends<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AmericanPsycho">
AmericanPsycho </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Great movie, bland book.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AmericaSavesTheDayAndOtherLies">
AmericaSavesTheDayAndOtherLies </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by [=JenKunoichi351=]<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AmericaTF2">
AmericaTF2 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Anoymous review from the comments section<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMightyDemonSlayerGroomsSomePonies">
AMightyDemonSlayerGroomsSomePonies </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Exactly whats on the tin and...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AMightyWind">
AMightyWind </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>My second favorite of Guest's work<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AMillionWaysToDieInTheWest">
AMillionWaysToDieInTheWest </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Eh.<span></li>
<li><span>*Yawn*<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMillionWaysToSayILoveYou">
AMillionWaysToSayILoveYou </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>TheAffableParanoiac's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=AMinorVariation">
AMinorVariation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>In Between<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AmnesiaAMachineForPigs">
AmnesiaAMachineForPigs </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Can't believe it's called a sequel<span></li>
<li><span>Disappointing<span></li>
<li><span>A Machine for Sheep<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AmnesiaTheDarkDescent">
AmnesiaTheDarkDescent </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Stupid story; serious scares<span></li>
<li><span>Probably great, if only I could play it<span></li>
<li><span>I'll never be scared of another horror game again.<span></li>
<li><span>Not Perfect, but Absolutely Terrifying Regardless<span></li>
<li><span>An uninspired frightfest<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AmongTheSleep">
AmongTheSleep </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Man, that baby is HARDCORE.<span></li>
<li><span>Linear, scripted, cliched in some ways, but still scary and with some originality<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AmoreBello">
AmoreBello </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Belladonna<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AmorOmniaVincit">
AmorOmniaVincit </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by {{Tropers/Pszczola}}<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMotherInLawsLove">
AMotherInLawsLove </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review: A Mother In Law's Love by Perspicacity<span></li>
<li><span>Moving comments to reviews<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMothersLove">
AMothersLove </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Not really worth recommending in retrospect.<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Interesting Idea, but Hindsight is 20/20
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AMountainImWillingToDieOn">
AMountainImWillingToDieOn </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Great beginning, less satisfying ending.<span></li>
<li><span>An intense, fairly well-written fanfic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Amphibia">
Amphibia </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Slow but promising, but tries to hard to be the next Gravity Falls
<span></li>
<li><span>Another failure by the Disney Channel.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Amplify">
Amplify </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Pretty damn good.<span></li>
<li><span>Simply Intriguing<span></li>
<li><span>Attend<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=Amulet">
Amulet </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>One of the best graphic novels I've read...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AmuriInStarOcean">
AmuriInStarOcean </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Cute Girls in Space Save the World<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Amusement">
Amusement </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Altogether too brief<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AmyRoseInSonicTheHedgehog">
AmyRoseInSonicTheHedgehog </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Amazing trilogy<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=An Unwilling Angel">
An Unwilling Angel </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFicRecs<span></li>
<li><span>Nitramy's review<span></li>
<li><span>Willbyr's review<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Mandatory for Shinji/Rei shippers<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnADAsBestFriend">
AnADAsBestFriend </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=AnalogueAHateStory">
AnalogueAHateStory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VisualNovel<span></li>
<li><span>Good but...<span></li>
<li><span>A good visual novel afflicted with a few problems.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AnAmericanCarol">
AnAmericanCarol </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Not Great, but Worth Seeing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AnAmericanCrime">
AnAmericanCrime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Dark and Gripping, Pulls No Punches<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AnAmericanTail">
AnAmericanTail </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>The Treasure of Manhattan Island-- Awful? Or just mediocre?<span></li>
<li><span>Fievel Goes West<span></li>
<li><span>The Original,The Best<span></li>
<li><span>Aimed at kids, but a solid period peice.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Ananke">
Ananke </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Moving comments to reviews<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Anathem">
Anathem </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Fascinating if you're willing to take it on.<span></li>
<li><span>My first Stephenson work<span></li>
<li><span>Anti-good science fiction, worth reading (probably)<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnAunt\\\'sLove">
AnAunt\\\'sLove </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Hearty Recommendations with Caveat<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnAuspiciousBeginning">
AnAuspiciousBeginning </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>TheEvilOboist's review<span></li>
<li><span>GwenStacyWannabe's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Anchorman2TheLegendContinues">
Anchorman2TheLegendContinues </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Not a legend, still a worthy successor<span></li>
<li><span>A lot like the first.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AncillaryJustice">
AncillaryJustice </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Overly Hyped.<span></li>
<li><span>Splendid Cups of Tea for Everyone<span></li>
<li><span>Ancillary Sword<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=And Around Again A - Cinderella Phenomenon Tale">
And Around Again A - Cinderella Phenomenon Tale </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A truly high-quality fic
<span></li>
 <li><span>A really good story!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFicRecs&target_title=And If That Dont Work">
And If That Dont Work </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFicRecs<span></li>
<li><span>unsigned review<span></li>
<li><span>Crazael's review<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Worth a look, especially if you like GenderFlip<span></li>
<li><span>Too much GunPorn<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=And So, I Wait">
And So, I Wait </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>from comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=And then suddenly, Ninjas">
And then suddenly, Ninjas </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>From comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AndAnotherThing">
AndAnotherThing </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>OH GOD NO!<span></li>
<li><span>Your Mileage May Vary<span></li>
<li><span>It's Good. Really.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AndiMack">
AndiMack </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Too Good for Disney?
<span></li>
<li><span>GOOD SHOW!!!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AndIMustScream">
AndIMustScream </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Yeah... NO.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AndInHisEyesAGalaxy">
AndInHisEyesAGalaxy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AndInTheEnd">
AndInTheEnd </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Hey Its MJ<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AndItsAllNiceAndCuteWorkingForTheUNNot">
AndItsAllNiceAndCuteWorkingForTheUNNot </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AndTearsYetFall">
AndTearsYetFall </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Greatkingrat88<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Videogame&target_title=AndYetItMoves">
AndYetItMoves </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Videogame<span></li>
<li><span>Pretty fun, in a trippy sort of way.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnEndlessProcessionOfLittleOnes">
AnEndlessProcessionOfLittleOnes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Zefire<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnEntryWithABang">
AnEntryWithABang </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>op's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ANewHeroInANewLand">
ANewHeroInANewLand </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>link not working<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ANewHope">
ANewHope </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Star Wars: Episode IV- A New Hope<span></li>
<li><span>It's Aged Beautifully but...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ANewWorldANewWay">
ANewWorldANewWay </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Agreed with the previous reviewer.<span></li>
<li><span>A Novel Idea That Lost Its Luster<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ANewWorldTheStoryOfALostShinobi">
ANewWorldTheStoryOfALostShinobi </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>great<span></li>
<li><span>A New World The Story Of A Lost Shinobi<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=Angel">
Angel </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Fawn's review<span></li>
<li><span class="font-s text-light">Series<span></li>
<li><span>The Jasmine Arc<span></li>
<li><span>Season Five<span></li>
<li><span>Hole in the world.<span></li>
<li><span>Has no right to be as good as it is<span></li>
<li><span>Angel Season 1<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AngelBeats">
AngelBeats </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>The time of your (after)life<span></li>
<li><span>A lovely series that should have lasted longer...<span></li>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Far Better Than What I Was Expecting<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AngelDensetsu">
AngelDensetsu </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Funniest manga I've ever read<span></li>
<li><span>I really do not like this series.<span></li>
<li><span>A different opinion<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Angelic Shadows">
Angelic Shadows </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>An oft-dark and sometimes gloriously soaring piece<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AngelinaBallerina">
AngelinaBallerina </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Good, but Tragic, although not in the way you would think<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebComic&target_title=Angels2200">
Angels2200 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WebComic<span></li>
<li><span>Pure fantasy fuel<span></li>
<li><span>Dramatic, exciting and even funny at times<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AngelSanctuary">
AngelSanctuary </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Angel Sanctuary review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AngelsAndDemons">
AngelsAndDemons </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>A good read<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Theatre&target_title=AngelsInAmerica">
AngelsInAmerica </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Theatre<span></li>
<li><span>Gonna get killed for this review...<span></li>
<li><span>Better as a Book...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AngieTribeca">
AngieTribeca </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=Angrybirds">
Angrybirds </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>A slightly flawed but highly addictive game<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AngryBirds2">
AngryBirds2 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>A good game ruined by a greedy company.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AngryBirdsGo">
AngryBirdsGo </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Really cool and enjoyable - well done, Rovio!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AngryVideoGameNerdTheMovie">
AngryVideoGameNerdTheMovie </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>More impressed with the production than the product
<span></li>
<li><span>just no<span></li>
<li><span>Check it out if you're a fan of AVGN, but don't expect too much.<span></li>
<li><span>It's hokey, low-budget, and juvenile...vintage AVGN!<span></li>
<li><span>An alright watch, though a ways removed from the web series<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ANightIWillNeverForget">
ANightIWillNeverForget </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by North Bay 180<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnIllusionAShadow">
AnIllusionAShadow </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Elenor<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=TabletopGame&target_title=AnimaBeyondFantasy">
AnimaBeyondFantasy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">TabletopGame<span></li>
<li><span>Fan of the game...<span></li>
<li><span>Another fan of the game...<span></li>
</ul>
 </td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AnimalFaceOff">
AnimalFaceOff </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Documentary-heroes fighting each other.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AnimalJam">
AnimalJam </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>This game is okay for me, while good for others.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Animaniacs">
Animaniacs </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>The best. Period.<span></li>
<li><span>A classic show, though not without its flaws.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebVideo&target_title=AniMat">
AniMat </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">WebVideo<span></li>
<li><span>An Otherwise Talented Individual Who Has Some Major Problems<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime: Pokémon&target_title=Anime: Pokémon">
Anime: Pokémon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime: Pokémon<span></li>
<li><span>A Creative Cornucopia of Ideas<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Animorphs">
Animorphs </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Wonderful<span></li>
<li><span>Visser, K.A. Applegate (Animorphs series)<span></li>
<li><span>Somehow Better Than When I Was a Kid<span></li>
<li><span>Read it!... If You Have Patience And Dedication<span></li>
<li><span>My childhood<span></li>
<li><span>Doesn’t hold up as well as some claim, but not bad.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnimorphsDementia">
AnimorphsDementia </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>So much idiot ball<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnIncidentAndJerusalem">
AnIncidentAndJerusalem </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by {{Tropers/ShinyBulbasaur}}<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=AnISOTInGrimdark">
AnISOTInGrimdark </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Great potential, not so good execution<span></li>
<li><span>It's a badly constructed Fanfic.<span></li>
<li><span>Good? Bad? Or something else?<span></li>
</ul>

</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AnitaBlake">
AnitaBlake </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Guilty Pleasure turned into Awkward Morning After<span></li>
<li><span>''Anita Blake: Vampire Hunter''- A Feminist Perspective<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AnnaDressedInBlood">
AnnaDressedInBlood </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Good. Surprisingly, good.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AnnaKarenina">
AnnaKarenina </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>An perceptively accurate mess<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Creator&target_title=AnneMcCaffrey">
AnneMcCaffrey </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Creator<span></li>
<li><span>Freedom's Landing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AnneOfGreenGables">
AnneOfGreenGables </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Underrated<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AnneWithAnE">
AnneWithAnE </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Just...why?
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=Annihilation">
Annihilation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>Some of the best works by Marvel ever.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Annihilation2018">
Annihilation2018 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>You know when you feel something's wrong but you feel like you have to keep moving forward?<span></li>
<li><span>2018`s Roadside Picnic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnOfficerAndSomeGentlemen">
AnOfficerAndSomeGentlemen </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A classic fanfic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AnoHanaTheFlowerWeSawThatDay">
AnoHanaTheFlowerWeSawThatDay </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Tear Jerker for spring 2011<span></li>
<li><span>Simply Gorgeous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Anon">
Anon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>I Quote Amanda Seyfried Here, "Nothing I Want You to See"<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Another">
Another </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>A Short Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Another Butterfly Effect">
Another Butterfly Effect </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review for Another Butterfly Effect - By Draconic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Another Meeting">
Another Meeting </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>from comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Another Side, Another Story">
Another Side, Another Story </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>The Links dead somebody fix this.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Another typical Kid/OC fic">
Another typical Kid/OC fic </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Another typical Kid/OC fic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnotherBrother">
AnotherBrother </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Otempora's review<span></li>
<li><span>Black Charizard's review<span></li>
<li><span>LavanyaSix's review<span></li>
<li><span>Aryashi's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnotherLife">
AnotherLife </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>sauronlulz's review<span></li>
<li><span>@/{{Mew24ever}}'s review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AnotherLife2019">
AnotherLife2019 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Spectacularly bad<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnotherPlaceToFall">
AnotherPlaceToFall </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by {{Tropers/Solandra}}<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnotherPrisonerAnotherProfessor">
AnotherPrisonerAnotherProfessor </a>
</td>
<td class="item-list">

<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Stunning<span></li>
<li><span>Good at first<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnotherStory">
AnotherStory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Why?<span></li>
<li><span>Unlimited_Archer's review<span></li>
<li><span>Don't Waste Your Time<span></li>
<li><span>GosuroriOtaku's review<span></li>
<li><span>Dhomochevsky's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnotherUtopiaFalls">
AnotherUtopiaFalls </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by mariic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AnotherWay">
AnotherWay </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Kinda Mary Sue...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Antagonist">
Antagonist </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>First Review of This Here<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AntFarm">
AntFarm </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Hey, it's TookALevelInJerkass, the Sitcom!<span></li>
<li><span>A.N.T Farm Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Anthem">
Anthem </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Rand's Novella is Objectively Boring<span></li>
<li><span>Gary Stu<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=Anthropology">
Anthropology </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Started out strong, and then fell flat on its face<span></li>
<li><span>One of the best fanfics in the Equestria universe.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnThusNothingIsSacred">
AnThusNothingIsSacred </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Writing for Loon's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Antichrist">
Antichrist </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Nonsensical, Pretentious Garbage<span></li>
 <li><span>Chaos Reigns, Indeed<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=AntiHeroes">
AntiHeroes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>anti-HEROES<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AntMan1">
AntMan1 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>HeartIsAnAwesomePower: TheMovie<span></li>
<li><span>Good but...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AntManAndTheWasp">
AntManAndTheWasp </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>MCU: The filler episode (Spoilers)
<span></li>
<li><span>A worthy follow-up to Ant-Man<span></li>
<li><span>Funnier Than the First, But Lacking Some of the Heart<span></li>
<li><span>A Placeholder for a Marvel Movie
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Antz">
Antz </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Meh<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnUnbreakableBond">
AnUnbreakableBond </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Angel Flower<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnUnexpectedReturn">
AnUnexpectedReturn </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>An Unexpected Hit<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnUnlikelyFriendship">
AnUnlikelyFriendship </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Lady Iapetus<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AnUntitledStory">
AnUntitledStory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>An experince that becomes larger than you'd imagine.<span></li>
<li><span>An Amazing Game<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AnyWish">
AnyWish </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Genuinely Creepy.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AoharuXMachinegun">
AoharuXMachinegun </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">Manga<span></li>
<li><span>Sports Series disgused as a romantic comedy<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFicRecs&target_title=Aoi">
Aoi </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFicRecs<span></li>
<li><span>InkkiBookman's review<span></li>
<li><span>A punch in the gut<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>The most heart-wrenching Nail Fic ever!<span></li>
<li><span>Sithking Zero's Review<span></li>
<li><span>Mai's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AoiHana">
AoiHana </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Subdued masterpiece<span></li>
<li><span>Great Heart but Not All There<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AoiSekaiNoChuushinDe">
AoiSekaiNoChuushinDe </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Fun concept, bad execution<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=AoiShiro">
AoiShiro </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VisualNovel<span></li>
<li><span>Blue Castle<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=APartner">
APartner </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Partner<span></li>
<li><span>A Partner<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebComic&target_title=APathToGreaterGood">
APathToGreaterGood </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WebComic<span></li>
<li><span>How sprite comics should be done<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=APerpendicularExpression">
APerpendicularExpression </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Slice of life?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=APictureOfSarah">
APictureOfSarah </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by @/{{Mariecat}}<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=APlaceForWarriors">
APlaceForWarriors </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Place For Warriors<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=APlaceFurtherThanTheUniverse">
APlaceFurtherThanTheUniverse </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Highly Recommended
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=APlaceToCallHome">
APlaceToCallHome </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Relaxing daytime/quarantine telly<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ApocalypseMeow">
ApocalypseMeow </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by @/KorenSteen<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ApocalypseNow">
ApocalypseNow </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>A Masterpiece with a Marlon Brando-Shaped Hiccup<span></li>
<li><span class="font-s text-light">Main<span></li>
  <li><span>Apocalypse Now Redux: A Harrowing Psychedelic Journey<span></li>
<li><span>Apocalypse HUH?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VisualNovel&target_title=ApolloJusticeAceAttorney">
ApolloJusticeAceAttorney </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VisualNovel<span></li>
<li><span>Not a catastrophe... but definitely a dramatic misfire.<span></li>
<li><span>A different, interesting take on Ace Attorney<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ApotheosisMHA">
ApotheosisMHA </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>It got bad after a while.
<span></li>
<li><span>A bad joke
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AppearancesAreDeceiving">
AppearancesAreDeceiving </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by [=SteamGoth=]<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=Appleseed">
Appleseed </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Appleseed Ex Machina: Sci-fi heroic bloodshed fun, all the more impressive given [[SurprisinglyImprovedSequel its predecessor]].<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ApprenticePotter">
ApprenticePotter </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>It's a big world out there...<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span>Heed the Angry!Harry part<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=APrairieHomeCompanion">
APrairieHomeCompanion </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">Film<span></li>
<li><span>A Down-Home Classic!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AProtectorsPride">
AProtectorsPride </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Why does it not have its page yet?<span></li>
<li><span>Ehh...<span></li>
<li><span>Simply the best you will find<span></li>
<li><span>Awesome.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=APsychiatricEvaluation">
APsychiatricEvaluation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Short but sweet<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=Aquaman">
Aquaman </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Better Than I Expected.<span></li>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>Aquaman / SuperFriends<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Aquaman2018">
Aquaman2018 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Wall-to-wall clichés<span></li>
<li><span>So let's talk about Aquaman<span></li>
<li><span>Serviceable entertainment<span></li>
<li><span>No One Will Ever Make Fun of Aquaman Again
<span></li>
<li><span>Could be really good, ended up merely entertaining.<span></li>
<li><span>...And, in yet another installment of reviews coming out loooong after everyone's already made up their minds...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=Aquaria">
Aquaria </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Deep in the Ocean of Gaming Lies a Pearl...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AQUATEENHUNGERFORCE">
AQUATEENHUNGERFORCE </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Funny, but not for everybody<span></li>
<li><span>Started Strong. Went Downhill Hard.<span></li>
<li><span>A mixed bag by anyother name<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AQuietPlace">
AQuietPlace </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>"Quiet Place" is proof that movies with lazy writing CAN sell like hotcakes <span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AQuietWalkInTheNoondayHeat">
AQuietWalkInTheNoondayHeat </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ArashiNoYoruNi">
ArashiNoYoruNi </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Arashi No Yoru Ni (Anime)<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Machinima&target_title=ArbyNTheChief">
ArbyNTheChief </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Machinima<span></li>
<li><span>What can a man do with an xbox and a couple of action figures? A whole lot<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ArcanumOfSteamworksAndMagickObscura">
ArcanumOfSteamworksAndMagickObscura </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>So Much Wasted Potential<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Archer">
Archer </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>[Season 9] Nuuuuuupe
<span></li>
<li><span>it's funny but I hate almost all the characters.<span></li>
<li><span>[Season 10] We Can Rebuild Him, Right?
<span></li>
<li><span>Archer - Strongly Recommended<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Archimage">
Archimage </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Looney Toons<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=Archipelago">
Archipelago </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>Like its namesake, much more than it appears on the surface<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Archmage">
Archmage </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Epic<span></li>
<li><span>Best Read<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ArcOfSacrifices">
ArcOfSacrifices </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Remarkable in places, but also remarkably long<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Sacrifices... (Spoilers herein)<span></li>
<li><span>Really enjoyed this<span></li>
<li><span>Intense, Will Blow You Away<span></li>
<li><span>An Outstanding Story<span></li>
<li><span>An excellent premise<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ArcRiseFantasia">
ArcRiseFantasia </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>This game can go to hell.<span></li>
 </ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ArcStyleBaseball3D">
ArcStyleBaseball3D </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Fun, but a lot of room for improvement<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=ArddunLleuad">
ArddunLleuad </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>Good, once you get past....<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Are You Gonna Eat That">
Are You Gonna Eat That </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>In A Word: Delicious<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ARecurringNightmareWithPopcorn">
ARecurringNightmareWithPopcorn </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by oathkeeper85<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ArenaOfValor">
ArenaOfValor </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Arena of Valor Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AreYouAfraidOfTheDark">
AreYouAfraidOfTheDark </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>The Tale of the Lonely Ghost<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AreYouOnOurSideOrAreYouATraitor">
AreYouOnOurSideOrAreYouATraitor </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AreYouThereGodItsMeCanada">
AreYouThereGodItsMeCanada </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review<span></li>
<li><span>Comment by {{Tropers/Solandra}}<span></li>
<li><span>Comment by [=RsS=]<span></li>
<li><span>Comment by Naganonamy<span></li>
<li><span>Comment by Frada<span></li>
<li><span>Are You There God? It's Me, Canada.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Argo">
Argo </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Oscar-worthy and tense, but with a few dull parts<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=LightNovel&target_title=AriaTheScarletAmmo">
AriaTheScarletAmmo </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">LightNovel<span></li>
<li><span>Review of light novels with reference to anime: Clichéd, but strong when originality shines through<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=Arisa">
Arisa </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Infurating, But Also Forgettable<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=ArkhamAsylumASeriousHouseOnSeriousEarth">
ArkhamAsylumASeriousHouseOnSeriousEarth </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Main<span></li>
<li><span>Grant Morrison's Metaphysical Epic or Grant Morrison's Epic Misstep?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ARKSurvivalEvolved">
ARKSurvivalEvolved </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Great fun, but with a huge time investment<span></li>
<li><span>A flawed game with great potential<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ARMA">
ARMA </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Good game, bad time period<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Armed Resistance">
Armed Resistance </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>ninjadude853's review<span></li>
<li><span>Kazeto's review<span></li>
<li><span>Lustheron's review<span></li>
<li><span>fsdfsdfsd's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=ArmoredTrooperVOTOMS">
ArmoredTrooperVOTOMS </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>The Realest of Real - At least on the Mecha front<span></li>
<li><span>A little-known classic of the 80s Real Robot scene<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ARMS">
ARMS </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>A truly hardcore motion control game<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ArmyMen">
ArmyMen </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Army Men: RTS<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ArnaalukTheWomanUnderTheIce">
ArnaalukTheWomanUnderTheIce </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>My Little Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ARoadToSomewhere">
ARoadToSomewhere </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Tempscire<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AroundTheFountain">
AroundTheFountain </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>loracarol's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=ArrestedDevelopment">
ArrestedDevelopment </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Masterpiece.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=Arrietty">
Arrietty </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Miyazaki knocks it out of the park again...but in a different way<span></li>
<li><span>Worth it, I guess<span></li>
<li><span>Breathtaking Animation and Heartwarming Characters, but Not Much of a Story<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Arrival">
Arrival </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Thematically, an excellent film. Science is a little iffy, pacing is slow.<span></li>
<li><span>An Idiot Plot Where Mankind Are the Idiots<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=Arrow">
Arrow </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Train Wreck<span></li>
<li><span>Aims High And Rarely Misses<span></li>
<li><span>Make this the DC version of the MCU!<span></li>
<li><span>A good series, for CW.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Arrow18MissionLogsALoneRanger">
Arrow18MissionLogsALoneRanger </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ponies IN SPACE<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ArtemisFowl">
ArtemisFowl </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Yay to the first half, boo to the rest<span></li>
<li><span>The First Book Stands on its Own<span></li>
<li><span>Not fantastic, but entertaining<span></li>
<li><span>Just stop reading after the third book<span></li>
<li><span>Fun, funny, and worth the read<span></li>
<li><span>A Loss of Potential<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ArtemisFowlTheAztecIncident">
ArtemisFowlTheAztecIncident </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Not Worth It<span></li>
<li><span>BonUs's review<span></li>
<li><span>Nope.<span></li>
 <li><span>Beja's Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ArtemisFowlTheBookOfAges">
ArtemisFowlTheBookOfAges </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Paradoxes..<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=Arthur">
Arthur </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Used to be great.<span></li>
<li><span>Realistic depiction of how a child's mind works<span></li>
<li><span>Great show for Families and Kids<span></li>
<li><span>My report on Elwood City (It was founded in Something-03)<span></li>
<li><span>Arthur's (Im)Perfect Christmas<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ArthurAndTheInvisibles">
ArthurAndTheInvisibles </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Stick to the International Version<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ArthurChristmas">
ArthurChristmas </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Arthur Christmas<span></li>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Underrated and utterly magnificent<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=ArTonelico2">
ArTonelico2 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Whatever You Want Its In Here<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=ArTonelico3">
ArTonelico3 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Main<span></li>
<li><span>Dissappointingly enjoyable.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AsAboveSoBelow">
AsAboveSoBelow </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Difficult to qualify<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Asatsuki Dou">
Asatsuki Dou </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Kryptik's review<span></li>
<li><span>Hylarn's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=Ascendant">
Ascendant </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span> Ascendant review up until chapter 41<span></li>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Enjoyable, but with a major flaw<span></li>
 <li><span>Ascendant Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AScoutsStory">
AScoutsStory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review by {{Tropers/Quanyails}}<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASeaOfStars">
ASeaOfStars </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Worth Reading<span></li>
<li><span>Lina Inverse Has the Grand Line Blues<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASecondChanceAtLife">
ASecondChanceAtLife </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Worth the wait<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASecretGate">
ASecretGate </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Moved comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ASeparation">
ASeparation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Hands down the best film of 2011...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ASerbianFilm">
ASerbianFilm </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>A Serbian Tragedy.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ASeriesOfUnfortunateEvents">
ASeriesOfUnfortunateEvents </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>The Entertaining Expedition<span></li>
<li><span>The film and the (first) book<span></li>
<li><span>My Childhood<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=ASeriesOfUnfortunateEvents2017">
ASeriesOfUnfortunateEvents2017 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Arc The First - A Good Beginning<span></li>
<li><span>Maybe a Little Too Unfortunate<span></li>
<li><span>A Not So Fortunate Series<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AsGodIsMyWitnessIThoughtTurkeysCouldFly">
AsGodIsMyWitnessIThoughtTurkeysCouldFly </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Dune<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Ashes">
Ashes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
 <li><span>Ashes<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AshesAshes">
AshesAshes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Candelabra's review<span></li>
<li><span>An unsigned review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AshesOfThePast">
AshesOfThePast </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ashes of the Past<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=AshesToAshes">
AshesToAshes </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Main<span></li>
<li><span>Rising from the Ashes<span></li>
</ul>
</td>
</tr>
 <tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AshikabiNoShinobi">
AshikabiNoShinobi </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AsItShouldBe">
AsItShouldBe </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Selryam's review<span></li>
<li><span>Marlee Cross' review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Blog&target_title=AskFlufflePuff">
AskFlufflePuff </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Blog<span></li>
<li><span>SO CUTE<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=AskFriskAndCompany">
AskFriskAndCompany </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>yea<span></li>
<li><span>I Love It<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AskMeAnything">
AskMeAnything </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Nani<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Blog&target_title=AskTheMainFour">
AskTheMainFour </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Blog<span></li>
<li><span>Mixed Feelings<span></li>
<li><span>Interesting Blog<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AsLongAsYouKnowThatPotter">
AsLongAsYouKnowThatPotter </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
 <li><span>Moving comments to reviews<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASnakeNamedVoldemort">
ASnakeNamedVoldemort </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Great<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASolidPlan">
ASolidPlan </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A solid plan<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ASongOfIceAndFire">
ASongOfIceAndFire </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Overall, Fantastic.<span></li>
<li><span>The Jury is still out<span></li>
<li><span>kinda like Bleach<span></li>
<li><span>Epic Series to Sold Franchise: 11 Years to Screw Your Fans<span></li>
<li><span>Enjoyable for many, but I've given up.<span></li>
<li><span>A Feast for Crows<span></li>
<li><span>A Clash of Kings<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=ASparkOfGenius">
ASparkOfGenius </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>The height of mediocrity.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=ASparkOfIceAndFire">
ASparkOfIceAndFire </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>irelevent<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Aspirations">
Aspirations </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Why did we dredge this up.<span></li>
<li><span>Such promise wasted...<span></li>
<li><span>Interesting premise...<span></li>
<li><span>Moving comments to reviews<span></li>
<li><span>Entertaining enough but has serious problems.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ASpyInTheNeighborhood">
ASpyInTheNeighborhood </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Casual, laid-back local espionage<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AssassinationClassroom">
AssassinationClassroom </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>You'll wish to be in a classroom like this<span></li>
<li><span>Anime review: Okay series, bad adaptation<span></li>
<li><span>Brilliance<span></li>
<li><span>A surprisingly satsifying blend of eclectic elements.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AssassinationOfAHighSchoolPresident">
AssassinationOfAHighSchoolPresident </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>!!What is exactly the ending??:<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AssassinsCreed2016">
AssassinsCreed2016 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>WorthIt.<span></li>
<li><span>I did not enjoy this movie.<span></li>
<li><span>Flawed, but Admirably Faithful<span></li>
<li><span>Couple rough spots on a great work<span></li>
<li><span>Assassins Creed 2016 is the Worst Movie Ever, and Anyone Who Tells You Otherwise is Wrong
<span></li>
<li><span>A Tediously Bad Cutscene<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=AssassinsCreedBrahman">
AssassinsCreedBrahman </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
 <li><span>Great Story...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedBrotherhood">
AssassinsCreedBrotherhood </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Like Assassin's Creed 2. But More.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedI">
AssassinsCreedI </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>See where it all started<span></li>
<li><span>The purest game...<span></li>
<li><span>Gets boring really fast<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedII">
AssassinsCreedII </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Second Rate, Third Person<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedIII">
AssassinsCreedIII </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Lots of Potential, Too Many Problems<span></li>
<li><span>History in Assassin’s Creed III<span></li>
<li><span>I Like to be in Ah-mer-ee-ka<span></li>
<li><span>Grandeur and Folly!<span></li>
<li><span class="font-s text-light">Videogame<span></li>
<li><span>It's not like I wanted it to be<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedIVBlackFlag">
AssassinsCreedIVBlackFlag </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>An unnecessary novelization which adds nothing<span></li>
<li><span>Could be better...<span></li>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>A title I SHOULD despise.<span></li>
<li><span class="font-s text-light">Videogame<span></li>
<li><span>Possibly the best AC game by far<span></li>
<li><span>Of Wooden Ships and Iron Men<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedRevelations">
AssassinsCreedRevelations </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>A notable failure of a game.<span></li>
<li><span>A BIT better than I remembered<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedRogue">
AssassinsCreedRogue </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>First Impressions - Can't really complain<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedSyndicate">
AssassinsCreedSyndicate </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Not revolutionary, but a great game and solid installment<span></li>
<li><span>Jack the Ripper review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssassinsCreedUnity">
AssassinsCreedUnity </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Honestly? A lot of fun.<span></li>
<li><span>Crap.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssaultOnDarkAthena">
AssaultOnDarkAthena </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>An excellent update and expansion that really should have explained that there was a 'lean' button.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AssaultSuitsValken">
AssaultSuitsValken </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Gundamesque in all the best ways<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Assimilation">
Assimilation </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>FireLizardInABottle's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AStarIsBorn2018">
AStarIsBorn2018 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Brilliant and Mystifying
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AsTheWorldFallsDown">
AsTheWorldFallsDown </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by @/MarleeCross<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AsToldByGinger">
AsToldByGinger </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Great Show, go watch it.<span></li>
<li><span>Great, Classic Show<span></li>
<li><span>Bland with a capital B<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AStormOfSwords">
AStormOfSwords </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>No Turning Back<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AStormyRelationship">
AStormyRelationship </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Dune<span></li>
<li><span>Comment by Darkgloomie<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AStoryAboutMyUncle">
AStoryAboutMyUncle </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Decent aesthetic, but too repetitive and not very memorable<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AStrangerInPonyville">
AStrangerInPonyville </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Chris-Chan Memes Do Not a Fanfic Make<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AstroBoy">
AstroBoy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Far better than expected, but still feels a bit rushed.<span></li>
<li><span>A more emotional and interesting film than its crappy marketing lets on<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AStudyInGold">
AStudyInGold </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A Study In Gold<span></li>
<li><span>A fanfic that fails to use Zootopia for its crossover<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AStudyInMagic">
AStudyInMagic </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Certainly Interesting and Worth Reading<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASummonGoesWrong">
ASummonGoesWrong </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A refreshing change of pace<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Anime&target_title=AsuraCryin">
AsuraCryin </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Anime<span></li>
<li><span>Nothing Special, But Enjoyable Nonetheless<span></li>
</ul>

</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AsurasWrath">
AsurasWrath </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>While probably not for everyone, Asura's Wrath is a game truly unlike any other.<span></li>
<li><span>Asura's Wrath DLC Review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ASwiftlyTiltingPlanet">
ASwiftlyTiltingPlanet </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Still My Favorite<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ASwitchedChance">
ASwitchedChance </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A fresh spin on this cliché<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Theatre&target_title=AsYouLikeIt">
AsYouLikeIt </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Theatre<span></li>
<li><span>Good if your a fan of the Bard.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=At The Moriya Shrine">
At The Moriya Shrine </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Major Tom's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=ATaleOf">
ATaleOf </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>The Beast Within Has Nothing To Do With The Beast<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ATalkingCat">
ATalkingCat </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>What happens when a gay porn director makes a family movie?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AtelierMeruruTheApprenticeOfArland">
AtelierMeruruTheApprenticeOfArland </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>AHHH RAISE YOUR LUNCHTIME AHHH SING YOUR SUNLOVE AHHH SHOW YOUR LIFE!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AtelierRoronaTheAlchemistOfArland">
AtelierRoronaTheAlchemistOfArland </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Oh god Astrid, noooooo<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AtelierTotoriTheAdventurerOfArland">
AtelierTotoriTheAdventurerOfArland </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>This game is lucky I loved the characters<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFicRecs&target_title=AtFirst,JustALittle">
AtFirst,JustALittle </a>
</td>
<td class="item-list">
 <ul>
<li><span class="font-s text-light">FanFicRecs<span></li>
<li><span>Examing Tropes and Stereotypes<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AThousandSplendidSuns">
AThousandSplendidSuns </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>An Eye-Opening Experience<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AThroneOfBayonets">
AThroneOfBayonets </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Fitz's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ATimeAndTimesAndHalfATime">
ATimeAndTimesAndHalfATime </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Moved comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=ATimeToKill">
ATimeToKill </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>The Actual 'Justice' Happens Early On<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AtlantaNights">
AtlantaNights </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>A poignant tale of heartbreak and betrayal<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AtlantisTheLostEmpire">
AtlantisTheLostEmpire </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Overall, a decent movie!<span></li>
<li><span>Needed more polish<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Atlas">
Atlas </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Definitely Worth It<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AtlasShrugged">
AtlasShrugged </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Atlas Shrugged Part I: Nothing Makes Sense<span></li>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Variations on a theme<span></li>
<li><span>Trees died for this nonsense<span></li>
<li><span>This would make for a fun Saturday Morning Cartoon.<span></li>
<li><span>This is John Galt<span></li>
<li><span>Good to learn the Philosophy. terrible as a novel<span></li>
<li><span>Atlas Shrugged: Part 3: The Revenge of the Shrugging<span></li>
<li><span>Atlas Shrugged Part II - Electric Boogaloo<span></li>
<li><span>Atlas Shrugged - The first, and hopefully last, of a movie trilogy<span></li>
<li><span>Anviliciousness Isn't Always Bad<span></li>
</ul>
</td>
 </tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ATokyoSenshiInQueenReisCourt">
ATokyoSenshiInQueenReisCourt </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Looney Toons<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AtomicBetty">
AtomicBetty </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Why Betty is One of the Best<span></li>
<li><span>Looking at it now...<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AtomicBlonde">
AtomicBlonde </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Style over substance<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AtomicPuppet">
AtomicPuppet </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>Tons of Fun<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AtomZombieSmasher">
AtomZombieSmasher </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>"Make me proud... El Presidente."<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WebVideo&target_title=AtopTheFourthWall">
AtopTheFourthWall </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WebVideo<span></li>
<li><span>The best channel awesome creator<span></li>
<li><span>Stagnation is the name of the game<span></li>
<li><span>Mechakara<span></li>
<li><span>Funny and worthy of being on the site, but...<span></li>
<li><span>Above all else, fun.<span></li>
<li><span>A little too negative for my taste<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Attack on Titan: The Ponies from Afar">
Attack on Titan: The Ponies from Afar </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Disrecommended.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AttackOfTheClones">
AttackOfTheClones </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>An Earnest Film about Balance (or Lack Thereof)<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AttackOnTitan">
AttackOnTitan </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Unique world-building, unoriginal protagonist<span></li>
<li><span>The Only Enemy is Pacing >Revised<<span></li>
<li><span>This Seems Familiar...<span></li>
<li><span>Interesting and Inventive but not without Flaws<span></li>
<li><span>Not As Awesome As Fans Say, But Damn Good Manga (NO SPOILERS)<span></li>
<li><span>Improves As It Goes On, Despite Glaring Flaws
<span></li>
<li><span>Ignoring Hype... Still a Great Yarn. And Read the Manga, Seriously.<span></li>
<li><span>DBZ-Level Poor Pacing Really Hurts This<span></li>
<li><span>Attack on Titan....good start but it gets bogged down by many flaws<span></li>
<li><span>A Bumbling Effort<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=atthecenter">
atthecenter </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>One of the best Frozen/Rise of the Guardians crossovers<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ATwistOfChance">
ATwistOfChance </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>From comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=ATwistOfFate">
ATwistOfFate </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ryan Lohner's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=Atypical">
Atypical </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Painfully Typical<span></li>
<li><span>Possibly the best autism show out right now<span></li>
<li><span>An excellent example of Growing the Beard
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=AudieMurphy">
AudieMurphy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Main<span></li>
<li><span>Ride Clear of Diablo (1954)<span></li>
<li><span>No Name On The Bullet (1959)<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AufWiedersehenSweetheart">
AufWiedersehenSweetheart </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review<span></li>
<li><span>Comment by Nani<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Theatre&target_title=AugustOsageCounty">
AugustOsageCounty </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Theatre<span></li>
<li><span>A Film Review - Did It Work Better As A Play?<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=AUReverse">
AUReverse </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>Everything wrong with Kevedd in one convienient package<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Aurora Borealis">
Aurora Borealis </a>
</td>
<td class="item-list">

<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Good solid prequel<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Austenland">
Austenland </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>A Bunch of Not Things<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Austraeoh">
Austraeoh </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>MLP meets The Odyssey<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Main&target_title=AutoTuneTheNews">
AutoTuneTheNews </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Main<span></li>
<li><span>Very original.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Avalanche">
Avalanche </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Really Good but makes similar mistakes as canin<span></li>
<li><span>From comments<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Avalon">
Avalon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by {{Tropers/Liangnui}}<span></li>
<li><span>Comment by Aspen<span></li>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>It holds up well.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=AvasDemon">
AvasDemon </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>Great... if you don't mind waiting<span></li>
<li><span>This is worth checking out<span></li>
<li><span>A Beautiful Piece of Work.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=Avatar">
Avatar </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Summing it up.<span></li>
<li><span>Risk and reward with Quoting in the movies.<span></li>
<li><span>Special Edition: 8 minutes that should have been in the original release<span></li>
<li><span>Physically painful to sit through<span></li>
<li><span>Predictable but worth it.<span></li>
<li><span>Avatar: Acceptable plot, terrible visuals<span></li>
<li><span>Not for people who want good plot<span></li>
<li><span>Disney's Pocahontas Was Better<span></li>
<li><span>Entertaining? Absolutely!<span></li>
<li><span>Crappy plot needed the Evil Overlord's List.<span></li>
<li><span>Despite its plot issues...<span></li>
<li><span>Characters ARE kind of flat, but I couldn't care less.<span></li>
 <li><span>Caught me off-guard<span></li>
<li><span>Cameron has lost his shine<span></li>
<li><span>The only reason to see it is for the effects...<span></li>
<li><span>Fails to bridge uncanny valley but beautiful all the same<span></li>
<li><span>To beat a dead horse...<span></li>
<li><span>Good.....Could Be Better<span></li>
<li><span>Need more than 3d glassed to comprehend the stupidity<span></li>
<li><span>Got the Oscars it deserved.<span></li>
<li><span>Once the effects fade, a mediocre blockbuster is revealed<span></li>
<li><span>Had a Nice Plot Twist, Though.<span></li>
<li><span>Preachy. Annoying, Stupid...<span></li>
<li><span>Horrible.<span></li>
<li><span>Pretty isn't the same as interesting<span></li>
<li><span>I can't think of a title.<span></li>
<li><span>so okay it's average<span></li>
<li><span>In Defence of Avatar (and Unoriginality in General)<span></li>
<li><span>Stop Hating On It<span></li>
<li><span>It's better the first time you watch it<span></li>
<li><span>Surprisingly subtle conflict<span></li>
<li><span>It's not great because it's great. It's great because it looks great.<span></li>
<li><span>The Truthiness of Reviews<span></li>
<li><span>Just Sit Back and Enjoy The Ride.<span></li>
<li><span>[[strike:James Cameron's]] Joe Letteri's '''''Avatar'''''<span></li>
<li><span>A common misconception<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarAangAnAnnotatedBibliography">
AvatarAangAnAnnotatedBibliography </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>SalFishFin's review<span></li>
<li><span>Ryan Lohner's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarBookFourAir">
AvatarBookFourAir </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ryan Lohner's review<span></li>
<li><span>Piccolosaur's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarIzukuTheLastBender">
AvatarIzukuTheLastBender </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Good premise, elementary school level writing<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarLadiesInLove">
AvatarLadiesInLove </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>ProgenyExMachina's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarofVictory">
AvatarofVictory </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Review by Nerdman3000<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AvatarTheLastAirbender">
AvatarTheLastAirbender </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Franchise<span></li>
<li><span>Avatar TLA Series<span></li>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>One of the best animated series I've ever seen<span></li>
<li><span>One of America's best TV exports<span></li>
<li><span>Not the most ambitious series of all time but very well executed. Biggest issue to me is some pacing problems. <span></li>
<li><span>A Truly Marvelous Masterpiece<span></li>
<li><span>Not for everyone. The impressions from season I<span></li>
<li><span>The best fantasy you'll ever see on television - for young and old<span></li>
<li><span>Season 2 - A Great Improvement<span></li>
<li><span>Good? Extremely. Great? Absolutely! All time classic? Eh...<span></li>
<li><span>Good, but not God's gift to western animation<span></li>
<li><span>Basically, believe the hype<span></li>
<li><span>Balance is the name of the game<span></li>
<li><span>An fine example of a kids' show done right.<span></li>
<li><span>One of the best cartoons of the decade<span></li>
<li><span>Greatest Cartoon of all time,....<span></li>
<li><span>Season 1 - A Rough but Promising Start<span></li>
<li><span>Not a Fan
<span></li>
<li><span>Season 3 - Mostly good, with a slightly iffy resolution<span></li>
<li><span>Not the best cartoon/TV show/anything ever. In fact, it's pretty awful.<span></li>
<li><span>This Made Me Believe in American Animation Again<span></li>
<li><span>A Favorite of Many that Deserves the Love<span></li>
<li><span class="font-s text-light">Westernanimation<span></li>
<li><span>The best show to ever have aired on television, ever.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=AvatarTheLastAirbenderThePromise">
AvatarTheLastAirbenderThePromise </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Decent enough, minus two big problems.<span></li>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>Nonsense Plot, Weirdly Pro-White Man's Burden Message<span></li>
<li><span>Inadequate<span></li>
<li><span>Great, but I have an issue<span></li>
<li><span>Good, but disappointing<span></li>
<li><span>Enough Ookie already, get with the Story!<span></li>
<li><span>Avatar: RealityEnsues<span></li>
<li><span>Actually pretty good<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=AvatarTheLastAirbenderTheSearch">
AvatarTheLastAirbenderTheSearch </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>The story would be great... if it made the slightest bit of sense!<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarTheLastFirebender">
AvatarTheLastFirebender </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ryan Lohner's review<span></li>
<li><span>Night's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AvatarTheLegendOfKeana">
AvatarTheLegendOfKeana </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>FireLizardInABottle's review<span></li>
<li><span>Ryan Lohner's review<span></li>
<li><span>AckSed's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AvengersAgeOfUltron">
AvengersAgeOfUltron </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>Too much Whedon<span></li>
<li><span>Ultimately, a failure in expectations.
<span></li>
<li><span>Shattered my faith in the MCU. (SPOILERS)<span></li>
<li><span>Too much of a good thing is still a good thing<span></li>
<li><span>It's not terrible. It's not!<span></li>
<li><span>My review (Spoilers)<span></li>
<li><span>Hulkbusting Expectations<span></li>
<li><span>It had a potential to be the best<span></li>
<li><span>Fetch the Hatchet
<span></li>
 <li><span>Good, but failed<span></li>
<li><span>Entertaining, but it didn't reach its potential<span></li>
<li><span>Did Marvel jump the shark?<span></li>
<li><span>Could have been better-spoilers alert<span></li>
<li><span>Avengers: Age of Ultron<span></li>
<li><span>A complete mess of a movie in dire need of a Director's cut<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Comicbook&target_title=AvengersArena">
AvengersArena </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Comicbook<span></li>
<li><span>Character driven versus plot driven<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=WesternAnimation&target_title=AvengersAssemble">
AvengersAssemble </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">WesternAnimation<span></li>
<li><span>You Maniacs! You blew it up!<span></li>
<li><span>Thunderbolts story arc: a terrible adaptation of an awesome comic<span></li>
<li><span>Ultron Arc Review. Spoilers Abound.<span></li>
<li><span>Season 2 Review<span></li>
<li><span>Season 1: 2/5 stars<span></li>
<li><span>Premiere: Actually pretty decent<span></li>
<li><span>Avengers Assemble, my first impressions<span></li>
<li><span>Actually Worse then Ultimate Spider-Man<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=AvengersDisassembled">
AvengersDisassembled </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Everything wrong with "Avengers Disassembled" in 400 words or less (spoilers!!) (duh..)<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AvengersEndgame">
AvengersEndgame </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>The ultimate payoff of 11 years of buildup...as long as you don't think too much about the plot.<span></li>
 <li><span>This review is obsolete
<span></li>
<li><span>MCU Rehash (Rereview)
<span></li>
<li><span>The quintessential Marvel movie<span></li>
<li><span>Avengers: Endgame delivers satisfying emotional moments but the plot doesn't withstand a lot of scrutiny.
<span></li>
<li><span>Beautiful Send Off<span></li>
<li><span>An Irreplaceable First-Time Viewing<span></li>
<li><span>A perfect ending to a massive series (No spoilers)<span></li>
<li><span>A huge love letter to the entire MCU.<span></li>
<li><span>A good conclusion of the Infinity Saga, but the expectations are too high<span></li>
<li><span>7.5/10 movie, 11/10 cinetmatic experience. <span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AvengersInfinityWar">
AvengersInfinityWar </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>The Greatest Comic Book Film I have Ever Watched<span></li>
<li><span>Marvel *still* has something new for us. (Non-spoiler review)<span></li>
<li><span>Ouch<span></li>
<li><span>Infinity War might finally be too much of a good (or evil) thing<span></li>
<li><span>It deserves credit for not being quite the unholy mess it could've been...<span></li>
<li><span>Big Setup for a Big Payoff
<span></li>
<li><span>Better Than the Other Two (cf the Definition of Faint Praise)<span></li>
<li><span>Avengers: Infinity War - Thanos cometh!<span></li>
<li><span>All Flash, No Bang (No spoilers)<span></li>
<li><span>8/10 Movie, 10/10 cinematic experience.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=ComicBook&target_title=AvengersVsXMen">
AvengersVsXMen </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">ComicBook<span></li>
<li><span>Bottom line: Who won? (spoiler warning)<span></li>
<li><span>They Just Don't Care<span></li>
<li><span>Because The Avengers had a successful movie. and Marvel wanted to compete with DC's New 52.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Average Joe in Bullet Hell">
Average Joe in Bullet Hell </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Kerreb17's review<span></li>
<li><span>Flash of Sonic's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Theatre&target_title=AVeryPotterMusical">
AVeryPotterMusical </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Theatre<span></li>
<li><span>So much better than I thought it would be...<span></li>
<li><span>They Look Like They're Having Fun. I'm Not.<span></li>
<li><span>Shamless Gushing (You have been warned!)<span></li>
<li><span>Overall Outstanding<span></li>
<li><span>Love, all but one.<span></li>
<li><span>Fans of the series will not want to miss this!<span></li>
<li><span>A Hilarious Performance<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AVerySpookyHalloween">
AVerySpookyHalloween </a>
</td>
<td class="item-list">
<ul>
 <li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Purple Panther Girl<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AVisitToWammysHouse">
AVisitToWammysHouse </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>feral's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanFic&target_title=AVoiceAmongTheStrangers">
AVoiceAmongTheStrangers </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanFic<span></li>
<li><span>A good [=HiE=]<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Avoid it.">
Avoid it. </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Avoid it.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Awakening">
Awakening </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Not the same Awakening<span></li>
<li><span>Comment by Peach_Tea<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AwakeningNCIS">
AwakeningNCIS </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Across The Stars<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AWalkAmongTheTombstones">
AWalkAmongTheTombstones </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>See it<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Awesome Gendo">
Awesome Gendo </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Worth the Time.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Awesome.">
Awesome. </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Awesome.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=AwfulHospital">
AwfulHospital </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>Absurd, grotesque, yet lovable.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Fanfic&target_title=AWildBadficAppearedCommentaries">
AWildBadficAppearedCommentaries </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Fanfic<span></li>
<li><span>Definitely within [[SturgeonsLaw the worthwhile 10%]] of the MST genre<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=AWildSheepChase">
AWildSheepChase </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>Not strange enough<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Series&target_title=AwkwafinaIsNoraFromQueens">
AwkwafinaIsNoraFromQueens </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Series<span></li>
<li><span>Nora Good Show.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AwkwardEnergyMinaDeku">
AwkwardEnergyMinaDeku </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Awkward Energy<span></li>
<li><span><span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AwkwardQuestions">
AwkwardQuestions </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Awkward Questions by earthstar<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AWOL">
AWOL </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Rain Krystal<span></li>
<li><span>Comment by {{Tropers/RBMIfan}}<span></li>
<li><span>Comment by Archangel Unmei<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AWorldWithoutRainbows">
AWorldWithoutRainbows </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>A World Without Rainbows brief review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AWrenchInTheGears">
AWrenchInTheGears </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Annoymous review from the comments section<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Film&target_title=AWrinkleInTime2018">
AWrinkleInTime2018 </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Film<span></li>
<li><span>These wrinkles just don't iron out.
<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Webcomic&target_title=AxeCop">
AxeCop </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>Heartwarming, Funny, and Reminiscent of Your Early Childhood<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=VideoGame&target_title=AxiomVerge">
AxiomVerge </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">VideoGame<span></li>
<li><span>Good on its own merits, but don't listen to the Metroid hype<span></li>
 <li><span>The Metroid Influence is Clear<span></li>
<li><span>A love letter to the creepier games of the NES<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AxisPowersHetalia">
AxisPowersHetalia </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>To Be Approached With Caution<span></li>
<li><span>Well, I like it.<span></li>
<li><span>Not for everyone, but if you like it, you'll love it<span></li>
<li><span>Love it or Hate it type of deal; seems to be little middle ground<span></li>
<li><span>Meh<span></li>
<li><span>I really like it<span></li>
<li><span>It was better as a webcomic.<span></li>
<li><span>Has Issues, But Worth a Try<span></li>
<li><span>I don't see why it needs to be in WWII<span></li>
<li><span>Has a lot of potential.<span></li>
<li><span>Great Premise Ruined by Execution<span></li>
<li><span>Fandom Rules<span></li>
<li><span>(Mostly) Silly series, "interesting" fanbase<span></li>
<li><span class="font-s text-light">Webcomic<span></li>
<li><span>Something that brings back memories...<span></li>
<li><span>Hetalia<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Ayanami: Vengeance">
Ayanami: Vengeance </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Contingency Lasers. This story needs to have them used on it.<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AYearWithQ">
AYearWithQ </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>YES.<span></li>
<li><span>Great fic<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Literature&target_title=Aztec">
Aztec </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Literature<span></li>
<li><span>The Aztec by Gary Jennings<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AzulaTrilogy">
AzulaTrilogy </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Ryan Lohner's review<span></li>
<li><span>Inspiring Tale of Adventure<span></li>
<li><span>J Blaze's review<span></li>
<li><span>AckSed's review<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=Manga&target_title=AzumangaDaioh">
AzumangaDaioh </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">Manga<span></li>
<li><span>Sweet dreams are made of these<span></li>
<li><span>High School Memories<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AzumangaDaiohInSpace">
AzumangaDaiohInSpace </a>
</td>
<td class="item-list">
 <ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Tropers/KoR<span></li>
<li><span>Comment by Tropers/{{Selryam}}<span></li>
<li><span>Comment by Tropers/FishCalledWaldo<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AzumangaEpica">
AzumangaEpica </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Tropers/DontKillBugs<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=AzumangaUndPanzer">
AzumangaUndPanzer </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Less Than The Sum of Its Parts<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Azuology">
Azuology </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Tropers/DontKillBugs<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=Azuvengers">
Azuvengers </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>Comment by Tropers/FishCalledWaldo<span></li>
<li><span>Comment by Anonymous<span></li>
<li><span>Comment by Anonymous<span></li>
</ul>
</td>
</tr>
<tr class="item">
<td class="item-link">
<a class="suppagelink bold" href="/pmwiki/reviews.php?target_group=FanficRecs&target_title=A\\\'FamiliarofZero\\\'and\\\'LiberalCrimeSquad\\\'crossover">
A\\\'FamiliarofZero\\\'and\\\'LiberalCrimeSquad\\\'crossover </a>
</td>
<td class="item-list">
<ul>
<li><span class="font-s text-light">FanficRecs<span></li>
<li><span>It looks like it has potential<span></li>
</ul>
</td>
</tr>
</tbody>
</table>
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
