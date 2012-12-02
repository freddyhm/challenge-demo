<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

    <title>Growple</title>

    <link rel="stylesheet" href="css/growpstyle.css" type="text/css" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3.1'></script>

    <script>

        $(document).ready(function(){


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
                  fbConnected();
                } 
              });
            } 

        });
       
    </script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>
    <script type='text/javascript' src='js/growple.js'></script>
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/recorder.js"></script>
    <script type="text/javascript" src="js/stopwatch-with-lap.js"></script>
    </head>

<body>
<div id="fb-root"></div>
    <div id="page-wrap">
        <div id="header">
            <h1>Welcome To Growple</h1>
        </div>