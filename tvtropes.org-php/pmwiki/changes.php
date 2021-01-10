<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>New Edits - TV Tropes</title>
<meta name="description" content="Check the most recent changes made to the TV Tropes wiki. " />
<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@tvtropes" />
<meta name="twitter:owner" content="@tvtropes" />
<meta name="twitter:title" content="New Edits - TV Tropes" />
<meta name="twitter:description" content="Check the most recent changes made to the TV Tropes wiki. " />
<meta name="twitter:image:src" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:site_name" content="TV Tropes" />
<meta property="og:locale" content="en_US" />
<meta property="article:publisher" content="https://www.facebook.com/tvtropes" />
<meta property="og:title" content="New Edits" />
<meta property="og:type" content="" />
<meta property="og:url" content="https://tvtropes.org/pmwiki/changes.php" />
<meta property="og:image" content="https://static.tvtropes.org/logo_blue_small.png" />
<meta property="og:description" content="Check the most recent changes made to the TV Tropes wiki. " />
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
<a href="/pmwiki/pmwiki.php/Main/FirstEpisodeResurrection" class="button-random-trope" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random trope');"></a>
<a href="/pmwiki/pmwiki.php/Film/WhenAStrangerCalls" class="button-random-media" rel="nofollow" onclick="ga('send', 'event', 'button', 'click', 'random media');"></a>
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
<div class="ImgUploadModalStub" data-page-type="Changes"></div>
<div class="login-alert" style="display: none;">
You need to <a href="/pmwiki/login.php" style="color:#21A0E8">login</a> to do this. <a href="/pmwiki/login.php?tab=register_account" style="color:#21A0E8">Get Known</a> if you don't have an account
</div>
</div>
<div id="main-content" class="page-Changes class-new-edits">
<div id="main-entry" class="with-sidebar">
<h1 itemprop="headline" class="entry-title">New Edits</h1>
<a href="#mobile-actions-toggle" id="mobile-actionbar-toggle" class="mobile-actionbar-toggle mobile-on" data-click-toggle="active">
<p class="tiny-off">Go To</p><span></span><span></span><span></span><i class="fa fa-pencil"></i></a>
<nav id="mobile-actions-bar" class="mobile-actions-wrapper mobile-on"></nav>
<div id="main-article" class="article-content" itemprop="articleBody">
<div class="two-column gutter-topx2">
<div class="column-box left">
<span class="filter-sort">
<form action="http://tvtropes.org/pmwiki/el.php" class="search-form recent-changes-header-search">
<input type="text" name="findfor" placeholder="Search by Troper" class="form-control">
<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>
</span>
</div>
<div class="column-box right">
<select id="filter-menu">
<option value="All">All (no filtering)</option>
<option value="Discussions">Discussions</option>
<option value="Main">Main</option>
<option value="newaccounts">New Accounts</option>
<option value="largechange">Large Changes</option>
<option value="Trope Repair">Trope Repair Shop</option>
<option value="Image Pickin">Image Pickin'</option>
<option value="--1">-- Namespaces --</option>
<option value="AATAFOVS">AATAFOVS</option>
<option value="Analysis">Analysis</option>
<option value="Awesome">Awesome!</option>
<option value="Characters">Character Sheet</option>
<option value="Comicbook">Comic Books</option>
<option value="DarthWiki">Darth Wiki</option>
<option value="Discontinuity">Discontinuity</option>
<option value="FanFic">FanFic</option>
<option value="FanFicRecs">FanFic Recs</option>
<option value="Film">Film</option>
<option value="Fridge">Fridge</option>
<option value="Funny">Funny</option>
<option value="Game">Games</option>
<option value="Gush">Gushing</option>
<option value="Headscratchers">Headscratchers</option>
<option value="Heartwarming">Heartwarming</option>
<option value="Horrible">Bad? Horrible!</option>
<option value="HoYay">Ho Yay</option>
<option value="Laconic">Laconic</option>
<option value="Literature">Literature</option>
<option value="Memes">Memes</option>
<option value="Narm">Narm</option>
<option value="NightmareFuel">Nightmare Fuel</option>
<option value="Pantheon">Pantheon</option>
<option value="PlayingWith">Playing With ...</option>
<option value="Quotes">Quotes Wiki</option>
<option value="Recap">Recap</option>
<option value="Series">Series</option>
<option value="SoYouWantTo">So, you want to...</option>
<option value="SugarWiki">Sugar Wiki</option>
<option value="Synopsis">Synopses</option>
<option value="TearJerker">Tear Jerker</option>
<option value="TitleBin">Title Bin</option>
<option value="Trivia">Trivia</option>
<option value="Tropers">Tropers</option>
<option value="UsefulNotes">Useful Notes</option>
<option value="Videogames">Video Games</option>
<option value="WallBangers">Wall Bangers</option>
<option value="WorldBuilding">Worldbuilding</option>
<option value="WesternAnimation">Western Animation</option>
<option value="WMG">Wild Mass Guessing</option>
<option value="--2">-- Languages --</option>
<option value="Eo">Esperanto</option>
<option value="Fi">Finnish</option>
<option value="Fr">French</option>
<option value="De">German</option>
<option value="It">Italian</option>
<option value="Es">Spanish</option>
<option value="Se">Swedish</option>
</select>
</div>
</div>
<hr />
<div class="button-group skinny font-s text-right">
<a href="/pmwiki/changes.php">All</a>
<a href="/pmwiki/changes.php?sort_by=today">Today</a>
<a href="/pmwiki/changes.php?sort_by=newaccounts">New Accounts</a>
<a href="/pmwiki/changes.php?sort_by=largechange">Large Changes</a>
</div>
<table class="font-s mobile-font-xs mobile-flexbox gutter-top">
<thead class="bold">
<tr>
<th class="extra_css_70 extra_css_order_2" data-mobile-width="70" data-mobile-order="2">Date</th>
<th class="extra_css_70 extra_css_order_1" data-mobile-width="70" data-mobile-order="1">[REV] Entry</th>
<th class="extra_css_70 extra_css_order_3" data-mobile-width="70" data-mobile-order="3">Troper</th>
<th style="width:10%" class="extra_css_30 extra_css_order_2 extra_css_text_center" data-mobile-width="30" data-mobile-order="2" data-inner-margin="80" data-align="center">History</th>
</tr>
</thead>
<tbody>
<tr class="post-list">
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:05:11</td>
<td class="extra_css_70 extra_css_order_1">[505] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/SuperiorSpecies" target="_blank">Main: Superior Species</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Synchronicity">Synchronicity</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.SuperiorSpecies"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:04:53</td>
<td class="extra_css_70 extra_css_order_1">[002] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/ThreeHeartsAndThreeLions" target="_blank">YMMV: Three Hearts And Three Lions</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/JeremySkunk">Jeremy Skunk</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.ThreeHeartsAndThreeLions"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:04:38</td>
<td class="extra_css_70 extra_css_order_1">[2318] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/FireEmblemThreeHouses" target="_blank">YMMV: Fire Emblem Three Houses</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Blackress">Blackress</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.FireEmblemThreeHouses"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:04:31</td>
<td class="extra_css_70 extra_css_order_1">[033] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Literature/ThreeHeartsAndThreeLions" target="_blank"><span class="namespace Literature"></span>Literature: Three Hearts And Three Lions</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/JeremySkunk">Jeremy Skunk</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Literature.ThreeHeartsAndThreeLions"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:04:27</td>
<td class="extra_css_70 extra_css_order_1">[281] <a class="newgrouplink" href="/pmwiki/pmwiki.php/ShoutOut/CriminalCase" target="_blank">Shout Out: Criminal Case</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Lord-LemonHead">Lord-Lemon Head</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=ShoutOut.CriminalCase"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:04:05</td>
<td class="extra_css_70 extra_css_order_1">[820] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Franchise/FinalFantasy" target="_blank">Franchise: Final Fantasy</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/HeavyMetalHermitCrab">Heavy Metal Hermit Crab</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Franchise.FinalFantasy"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:52</td>
<td class="extra_css_70 extra_css_order_1">[068] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Fanfic/CheatCodeSupportStrategist" target="_blank">Fanfic: Cheat Code Support Strategist</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Milarqui">Milarqui</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Fanfic.CheatCodeSupportStrategist"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:43</td>
<td class="extra_css_70 extra_css_order_1">[320] <a class="newgrouplink" href="/pmwiki/pmwiki.php/CrapsackWorld/WesternAnimation" target="_blank">Crapsack World: Western Animation</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Kissinger113">Kissinger 113</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=CrapsackWorld.WesternAnimation"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:31</td>
<td class="extra_css_70 extra_css_order_1">[1181] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/LeagueOfLegends" target="_blank">YMMV: League Of Legends</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/JohnnyBeBad">Johnny Be Bad</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.LeagueOfLegends"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:27</td>
<td class="extra_css_70 extra_css_order_1">[1212] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/HufflepuffHouse" target="_blank">Main: Hufflepuff House</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/CookingCat">Cooking Cat</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.HufflepuffHouse"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:10</td>
<td class="extra_css_70 extra_css_order_1">[181] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Film/ChildrensPartyAtThePalace" target="_blank"><span class="namespace Film"></span>Film: Childrens Party At The Palace</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/VanillaFlare">Vanilla Flare</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Film.ChildrensPartyAtThePalace"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:04</td>
<td class="extra_css_70 extra_css_order_1">[012] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Literature/StarWarsLightOfTheJedi" target="_blank"><span class="namespace Literature"></span>Literature: Star Wars Light Of The Jedi</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/CommanderVisor">Commander Visor</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Literature.StarWarsLightOfTheJedi"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:03:00</td>
<td class="extra_css_70 extra_css_order_1">[437] <a class="newgrouplink" href="/pmwiki/pmwiki.php/UsefulNotes/MajorLeagueSoccer" target="_blank">Useful Notes: Major League Soccer</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/KYCubbie">KY Cubbie</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=UsefulNotes.MajorLeagueSoccer"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:58</td>
<td class="extra_css_70 extra_css_order_1">[318] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Memes/SuperSmashBrosUltimate" target="_blank">Memes: Super Smash Bros Ultimate</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/InterGuy584">Inter Guy 584</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Memes.SuperSmashBrosUltimate"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:54</td>
<td class="extra_css_70 extra_css_order_1">[204] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Funny/FrasierSeasons1To6" target="_blank"><span class="namespace Funny"></span>Funny: Frasier Seasons 1 To 6</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/mlsmithca">mlsmithca</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Funny.FrasierSeasons1To6"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:48</td>
<td class="extra_css_70 extra_css_order_1"> </td>
<td class="extra_css_70 extra_css_order_3"></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:33</td>
<td class="extra_css_70 extra_css_order_1">[020] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Creator/KenjiIto" target="_blank">Creator: Kenji Ito</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/HeavyMetalHermitCrab">Heavy Metal Hermit Crab</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Creator.KenjiIto"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:26</td>
<td class="extra_css_70 extra_css_order_1">[039] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Creator/JohnBuchan" target="_blank">Creator: John Buchan</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/JB39">JB 39</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Creator.JohnBuchan"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:17</td>
<td class="extra_css_70 extra_css_order_1">[531] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/AndImTheQueenOfSheba" target="_blank">Main: And Im The Queen Of Sheba</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/ANTMuddle">ANT Muddle</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.AndImTheQueenOfSheba"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:07</td>
<td class="extra_css_70 extra_css_order_1">[197] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/AkashicRecords" target="_blank">Main: Akashic Records</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Willowleaf24">Willowleaf 24</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.AkashicRecords"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:02:02</td>
<td class="extra_css_70 extra_css_order_1">[012] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Headscratchers/LoliRock" target="_blank">Headscratchers: Loli Rock</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Astraea802">Astraea 802</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Headscratchers.LoliRock"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:01:54</td>
<td class="extra_css_70 extra_css_order_1">[011] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RealityEnsues/StarWarsParanormalitiesTrilogy" target="_blank">Reality Ensues: Star Wars Paranormalities Trilogy</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/SpectacularTroper">Spectacular Troper</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RealityEnsues.StarWarsParanormalitiesTrilogy"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:01:27</td>
<td class="extra_css_70 extra_css_order_1">[005] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RealityEnsues/ServiceWithASmile" target="_blank">Reality Ensues: Service With A Smile</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/SpectacularTroper">Spectacular Troper</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RealityEnsues.ServiceWithASmile"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:01:27</td>
<td class="extra_css_70 extra_css_order_1">[075] <a class="newgrouplink" href="/pmwiki/pmwiki.php/ComicBook/Hellions2020" target="_blank"><span class="namespace ComicBook"></span>Comic Book: Hellions 2020</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/kikiandlala">kikiandlala</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=ComicBook.Hellions2020"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:01:21</td>
<td class="extra_css_70 extra_css_order_1">[055] <a class="newgrouplink" href="/pmwiki/pmwiki.php/WMG/DreamSMP" target="_blank"><span class="namespace WMG"></span>WMG: Dream SMP</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/DryingPan">Drying Pan</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=WMG.DreamSMP"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:01:11</td>
<td class="extra_css_70 extra_css_order_1">[099] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/BackyardSports" target="_blank">YMMV: Backyard Sports</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/MrEightThreeOne">Mr Eight Three One</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.BackyardSports"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:01:03</td>
<td class="extra_css_70 extra_css_order_1">[065] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Recap/ArrowS3E22ThisIsYourSword" target="_blank"><span class="namespace Recap"></span>Recap: Arrow S 3 E 22 This Is Your Sword</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Sine71">Sine 71</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Recap.ArrowS3E22ThisIsYourSword"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:59</td>
<td class="extra_css_70 extra_css_order_1">[006] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RealityEnsues/PrincessOfTheBlacks" target="_blank">Reality Ensues: Princess Of The Blacks</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/SpectacularTroper">Spectacular Troper</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RealityEnsues.PrincessOfTheBlacks"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:55</td>
<td class="extra_css_70 extra_css_order_1">[985] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/ActionMom" target="_blank">Main: Action Mom</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Willowleaf24">Willowleaf 24</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.ActionMom"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:52</td>
<td class="extra_css_70 extra_css_order_1">[016] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Recap/SpongeBobSquarePantsS13E1APlaceForPetsLockdownForLove" target="_blank"><span class="namespace Recap"></span>Recap: Sponge Bob Square Pants S 13 E 1 A Place For Pets Lockdown For Love</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/N8han11">N8han 11</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Recap.SpongeBobSquarePantsS13E1APlaceForPetsLockdownForLove"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:51</td>
<td class="extra_css_70 extra_css_order_1">[052] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Characters/StephenVlog" target="_blank"><span class="namespace Characters"></span>Characters: Stephen Vlog</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/heartauthor">heartauthor</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Characters.StephenVlog"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:35</td>
<td class="extra_css_70 extra_css_order_1">[003] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Recap/TheZetaProjectS1E1TheAccomplice" target="_blank"><span class="namespace Recap"></span>Recap: The Zeta Project S 1 E 1 The Accomplice</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/luiz4200">luiz 4200</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Recap.TheZetaProjectS1E1TheAccomplice"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:34</td>
<td class="extra_css_70 extra_css_order_1">[277] <a class="newgrouplink" href="/pmwiki/pmwiki.php/UsefulNotes/ThePresidents" target="_blank">Useful Notes: The Presidents</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/bowserbros">bowserbros</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=UsefulNotes.ThePresidents"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:32</td>
<td class="extra_css_70 extra_css_order_1">[008] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RealityEnsues/PokemonShadowOfTime" target="_blank">Reality Ensues: Pokemon Shadow Of Time</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/SpectacularTroper">Spectacular Troper</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RealityEnsues.PokemonShadowOfTime"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:29</td>
<td class="extra_css_70 extra_css_order_1">[123] <a class="newgrouplink" href="/pmwiki/pmwiki.php/WebVideo/StephenVlog" target="_blank">Web Video: Stephen Vlog</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/heartauthor">heartauthor</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=WebVideo.StephenVlog"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 14:00:15</td>
<td class="extra_css_70 extra_css_order_1">[417] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/CobraKai" target="_blank">YMMV: Cobra Kai</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Hfxjfrvnn">Hfxjfrvnn</a></li> <span class="bubble red">New</span></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.CobraKai"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:59:52</td>
<td class="extra_css_70 extra_css_order_1">[816] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RoleEndingMisdemeanor/Politics" target="_blank">Role Ending Misdemeanor: Politics</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/hopeshalllive">hopeshalllive</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RoleEndingMisdemeanor.Politics"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:59:41</td>
<td class="extra_css_70 extra_css_order_1">[022] <a class="newgrouplink" href="/pmwiki/pmwiki.php/WebAnimation/TheCrystalGemsSayBeAntiRacist" target="_blank">Web Animation: The Crystal Gems Say Be Anti Racist</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/CrowTR0bot">Crow T R0bot</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=WebAnimation.TheCrystalGemsSayBeAntiRacist"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:59:11</td>
<td class="extra_css_70 extra_css_order_1">[028] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/SherlockS02E01AScandalInBelgravia" target="_blank">YMMV: Sherlock S 02 E 01 A Scandal In Belgravia</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/WilliamShakesman">William Shakesman</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.SherlockS02E01AScandalInBelgravia"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:59:06</td>
<td class="extra_css_70 extra_css_order_1">[004] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RealityEnsues/NoChanceForFate" target="_blank">Reality Ensues: No Chance For Fate</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/SpectacularTroper">Spectacular Troper</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RealityEnsues.NoChanceForFate"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:56</td>
<td class="extra_css_70 extra_css_order_1">[401] <a class="newgrouplink" href="/pmwiki/pmwiki.php/IThoughtItMeant/MToN" target="_blank">I Thought It Meant: M To N</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Unicorndance">Unicorndance</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=IThoughtItMeant.MToN"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:56</td>
<td class="extra_css_70 extra_css_order_1">[343] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/ActionGirlfriend" target="_blank">Main: Action Girlfriend</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Willowleaf24">Willowleaf 24</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.ActionGirlfriend"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:55</td>
<td class="extra_css_70 extra_css_order_1">[517] <a class="newgrouplink" href="/pmwiki/pmwiki.php/IThoughtItMeant/GToI" target="_blank">I Thought It Meant: G To I</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Unicorndance">Unicorndance</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=IThoughtItMeant.GToI"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:54</td>
<td class="extra_css_70 extra_css_order_1">[666] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Characters/WithPearlAndRubyGlowing" target="_blank"><span class="namespace Characters"></span>Characters: With Pearl And Ruby Glowing</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/chelonianmobile">chelonianmobile</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Characters.WithPearlAndRubyGlowing"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:51</td>
<td class="extra_css_70 extra_css_order_1">[790] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Film/GodzillaKingOfTheMonsters2019" target="_blank"><span class="namespace Film"></span>Film: Godzilla King Of The Monsters 2019</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Derv0sB2">Derv0s B 2</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Film.GodzillaKingOfTheMonsters2019"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:31</td>
<td class="extra_css_70 extra_css_order_1">[2639] <a class="newgrouplink" href="/pmwiki/pmwiki.php/YMMV/Persona5" target="_blank">YMMV: Persona 5</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/Prometheos2">Prometheos 2</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=YMMV.Persona5"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:26</td>
<td class="extra_css_70 extra_css_order_1">[237] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Funny/DreamSMP" target="_blank"><span class="namespace Funny"></span>Funny: Dream SMP</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/HopeSoSure">Hope So Sure</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Funny.DreamSMP"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:22</td>
<td class="extra_css_70 extra_css_order_1">[195] <a class="newgrouplink" href="/pmwiki/pmwiki.php/DiscOneNuke/RoleplayingGames" target="_blank">Disc One Nuke: Roleplaying Games</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/HeavyMetalHermitCrab">Heavy Metal Hermit Crab</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=DiscOneNuke.RoleplayingGames"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
<td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:16</td>
<td class="extra_css_70 extra_css_order_1">[004] <a class="newgrouplink" href="/pmwiki/pmwiki.php/RealityEnsues/GoingAnotherWay" target="_blank">Reality Ensues: Going Another Way</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/SpectacularTroper">Spectacular Troper</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=RealityEnsues.GoingAnotherWay"><i class="fa fa-history"></i></a></td>
</tr>
<tr class="dark opacity-in">
 <td class="extra_css_70 extra_css_order_2"> 2021-01-06 13:58:15</td>
<td class="extra_css_70 extra_css_order_1">[2453] <a class="newgrouplink" href="/pmwiki/pmwiki.php/Main/DanBrowned" target="_blank">Main: Dan Browned</a></td>
<td class="extra_css_70 extra_css_order_3"><a class="minorlink" href="/pmwiki/pmwiki.php/Tropers/LotteV">Lotte V</a></li></td>
<td class="extra_css_30 extra_css_order_2 extra_css_text_center"><a rel="nofollow" class="history-btn" href="/pmwiki/article_history.php?article=Main.DanBrowned"><i class="fa fa-history"></i></a></td>
</tr>
</tr>
</tbody>
</table>
</div>
<nav class="pagination-box button-group text-center gutter-topx2" data-total-pages="376" data-url-prefix="/pmwiki/changes.php?sort_by=All&page=">
<span class="pagination-jump-box-wrapper mobile-on">
<form class="pagination-jump-box hidden-until-active font-m">
<input value="1" type="tel">
<a href="#jump-to-page" title="Jump to page" class="color-white dead-button" onClick="activate_jump_menu(this);return false;">GO <i class="fa fa-angle-right"></i></a>
</form>
</span>
<a href="/pmwiki/changes.php?sort_by=All&page=1" class="mobile-off ">
<span class="current-page"> 1 </span> </a>
<a href="/pmwiki/changes.php?sort_by=All&page=2" class="mobile-off ">
2 </a>
<a href="/pmwiki/changes.php?sort_by=All&page=3" class="mobile-off ">
3 </a>
<a href="#jump-to-page" title="Jump to page" class="pagination-jump-box-toggle mobile-on dead-button" onClick="toggle_jump_menu(this);return false;">
<span class="font-s">page 1 of 376</span>
</a>
<a href="/pmwiki/changes.php?sort_by=All&page=2">
<span class="mobile-on"><i class="fa fa-angle-right"></i></span>
<span class="mobile-off">Next</span>
</a>
<a href="/pmwiki/changes.php?sort_by=All&page=376">
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
