<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#" >
<head profile="http://gmpg.org/xfn/11">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# growple: http://ogp.me/ns/fb/growple#">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="msnbot" content="index,follow" />
<meta name="search engines" content="Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, Infoseek, Excite, Magellan, LookSmart, CNET, Googlebot" />
<meta name="distribution" content="global" />
<meta name="rating" content="general" />
<meta name="language" content="en" />
<meta property="fb:app_id" content="242404339189544" />
<meta property="og:type"           content="growple:challenge" /> 
<meta property="og:url"            content="http://growple.com/demo/" /> 
<meta property="og:title"          content="The Growple! CodeOff Challenge" /> 
<meta property="og:description"    content="Can we do it? ...yes...we..can!" /> 
<meta property="og:image"          content="https://s-static.ak.fbcdn.net/images/devsite/attachment_blank.png" /> 
<meta property="growple:what_"     content="!finishingdemo" /> 
<meta property="growple:who_"      content="Me" /> 
<meta property="growple:how_long_" content="24 hrs" /> 
<meta property="og:determiner" content="a" />


<title>
Growple!</title>
<style type="text/css">
.js .carousel_display {display: none;}
.js .portfolio_grid { display: none;}
</style>
<link rel="alternate" type="application/rss+xml" title="Growple! RSS Feed" href="http://growple.com/feed/" />
<link rel="pingback" href="http://growple.com/xmlrpc.php" />
<!-- google font -->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<!-- default stylesheet -->

<!-- growpledemo stylesheet -->
<link rel="stylesheet" href="css/growpstyle.css" type="text/css" />
<!-- growpledemo stylesheet end -->
<!-- prettyPhoto stylesheet -->

<!-- prettyPhoto stylesheet end -->
<!-- featured slider stylesheet -->
<!-- featured slider stylesheet end -->
<link rel="alternate" type="application/rss+xml" title="Growple! &raquo; Feed" href="http://growple.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Growple! &raquo; Comments Feed" href="http://growple.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Growple! &raquo; Let&#8217;s Growple! Comments Feed" href="http://growple.com/lets-growple/feed/" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3.1'></script>
<!-- Don't move this prettyPhoto script tag. It conflicts with another script, screws the login -->

<!-- Don't move this prettyPhoto script tag. It conflicts with another script, screws the login -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>
<script type='text/javascript' src='js/growple.js'></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/recorder.js"></script>
<script type="text/javascript" src="js/stopwatch-with-lap.js"></script>
<link rel="shortcut icon" href="http://growple.com/wp-content/uploads/2012/03/favicon.ico"/>
<!-- flash audio player -->

<script type="text/javascript">

  if($.browser.webkit == true)
  {
     $('#svComment1').css('margin', '209px 0px 0px 26px');
   
  }

  function postChallenge(postImg)
  {
    var msg = 'Hey ' + selectedFriendFirstName+ ', heard of Growple!? Check out their demo and tell me what you think! growple.com/demo';
 
      FB.api('me/photos', 'post', {
          message:msg,
          url:postImg        
      }, function(response){

          if (!response || response.error) {
          } else {
              postTag(response.id);
          }

      });
     }

  function postTag(photoid)
  {
     FB.api(photoid + '/tags', 'post', {
          tag_uid:selectedFriendID      
      }, function(response){

          if (!response || response.error) {
          } else {
              postComment(photoid);
          }

      });
  }

  function postComment(photoid)
  {

     FB.api(photoid + '/comments', 'post', {
          message:"www.growple.com/demo"      
      }, function(response){

          if (!response || response.error) {
          } else {
          }

      });
  }
</script>
</head>
<body class="home page page-id-228 page-template page-template-full-width-page-php" style="background: url('../../images/body_bg.jpg') fixed 100% 100%">
<br><br><br>
<div id="user-info"></div>
  <span id="flashcontent">
  </span>
<div id="main">
   <noscript>This site just doesn't work without JavaScript. Please enable Javascript in your browser.</noscript>
</div>
<img id="mediaBubble" src="images/views/common/bubble.png" /> 
<div id="mediaPlugins">
  <iframe id="mediaFbLike" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fgrowple&amp;width=200&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=213857558714363" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:82px;" allowTransparency="true"></iframe>
  <a href="https://twitter.com/Growple" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Growple</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://growple.com/demo/" data-text="Check this app demo out!" data-via="Growple" data-size="large" data-hashtags="GrowpleDemo">Tweet</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<div id="iphone">
  <div id="mainscreen">
  </div>
</div>


<!--footer-->
<div class="clear"></div>
<!--portfolio grid-->

<!--footer-end-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30362210-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- JS for Facebook Fanbox (with CSS Support) by H.-Peter Pfeufer [http://ppfeufer.de | http://blog.ppfeufer.de]  -->
<script type="text/javascript">



          var fbRoot = document.getElementById('fb-root');

          if (!fbRoot) {
            var body = document.getElementsByTagName('body')[0];
            fbRoot = document.createElement('div');
            fbRoot.id = 'fb-root';
            body.appendChild(fbRoot);
          }

          var loadNewScript = true;
          var script = fbRoot.getElementsByTagName('script');

          for (var i = 0, iMax = script.length; i < iMax; i++) {
            if (script[i].src === 'http://connect.facebook.net/en_US/all.js#xfbml=1') {
              loadNewScript = false;
              break;
            }
          }

          if (loadNewScript) {
            var elm = document.createElement('script');
            elm.src = 'http://connect.facebook.net/en_US/all.js#xfbml=1';
            elm.type = 'text/javascript';
            fbRoot.appendChild(elm);
          }

            /* Connection to facebook server */

              // Load the SDK Asynchronously
              (function(d){
               var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
               if (d.getElementById(id)) {return;}
               js = d.createElement('script'); js.id = id; js.async = true;
               js.src = "//connect.facebook.net/en_US/all.js";
               ref.parentNode.insertBefore(js, ref);
              }(document));
            
             // Init the SDK upon load
            window.fbAsyncInit = function() {
              FB.init({
                appId      : '325719784202371', // App ID
                channelUrl : '//'+window.location.hostname+'/channel', // Path to your Channel File
                status     : true, // check login status
                cookie     : true, // enable cookies to allow the server to access the session
                xfbml      : true,  // parse XFBML
                oauth      : true
              });

              // listen for and handle auth.statusChange events
              FB.Event.subscribe('auth.statusChange', function(response) {
                if (response.authResponse) {
                  // user has auth'd your app and is logged into Facebook
                  loadView('challengeview');
                } 
              });
            } 
          /* End of Connection to facebook server */

</script>
<!-- END of JS for Facebook Fanbox (with CSS Support) -->

</body></html>