<!doctype html>
<html class="no-js" lang="en">
   <head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title;?></title>
    <meta name="description" content="DOL">   <!-- Use no more than 200 characters. This short line of text will appear 1-on-1 in the search results. Create and add a different meta description tag for every page.-->   
	<!--- Start CSS and JavaScript -->  
	<script src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
	<!-- css -->
	<?php 
	echo link_tag('assets/css/foundation.css'); 
	echo link_tag('assets/css/megamenu.css'); 
	echo link_tag('assets/css/dol-style.css'); 
	?>
          
    <script src="http://www.dol.gov/homepage/js/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
    <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
      
    <script type="text/javascript" src="http://www.dol.gov/homepage/js/scripts.js"></script><!-- Scripts for the dropdown megamenu and flexslider -->
    
	<!--- End  CSS and JavaScript -->  
        
    <!-- Start DAP -->
        <!--<script language="javascript" id="_fed_an_ua_tag" src="/includes/analytics/federated-analytics.js?agency=DOL"></script>-->
        <!-- Start DAP -->        

		<!--
		<script>
		/**
		* Function that tracks a click on an outbound link in Google Analytics.
		* This function takes a valid URL string as an argument, and uses that URL string
		* as the event label.
		*/
		var trackOutboundLink = function(url) {
		   ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
			 function () {
			 document.location = url;
			 }
		   });
		}
		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-33496658-2', 'dol.gov');
		  ga('create', 'UA-32505487-1', 'auto', {'name': 'newTracker'});  // New tracker.
		  ga('send', 'pageview');
		  ga('newTracker.send', 'pageview'); // Send page view for new tracker.
		</script>
		 -->      
   	</head>
    <body class="hp">
   <body class="hp">
             
         <!--- Start Top banner --> 
         <div class="wrapper">
<div class="hide"> <a href="#maincontent"> Skip to Main Content</a> </div>
<!--Start Banner --> 
<a name="top"></a>
<div class="row top-header" role="banner">
      <div class="large-6 columns"> <a href="<?php echo base_url(); ?>"> <span class="brand"></span>
        <h1 class="header-logo-type">UNITED STATES <br>
          DEPARTMENT OF LABOR </h1>
        </a> </div>
      <div class="large-2 columns">
        <div class="social-block right hide-for-small"> <a href="/cgi-bin/leave-dol.asp?exiturl=http://www.facebook.com/departmentoflabor&exitTitle=www.Facebook.com&fedpage=no"  class="sm-facebook">Facebook</a> 
        <a href="/cgi-bin/leave-dol.asp?exiturl=http://twitter.com/usdol&exitTitle=www.Twitter.com&fedpage=no" class="sm-twitter">Twitter</a> 
        <a href="/cgi-bin/leave-dol.asp?exiturl=http://www.instagram.com/USDOL&exitTitle=www.instagram.com/USDOL&fedpage=no" class="sm-instagram">DOL Instagram</a> 
        <a href="/rss/" class="sm-rss">RSS</a> 
        <a href="javascript:window.open('https://public.govdelivery.com/accounts/USDOL/subscriber/new','Popup','width=800,height=500,toolbar=no,scrollbars=yes,resizable=yes'); void('');"
				 ONCLICK="window.status='Subscribe'; return true"
				 ONMOUSEOVER="window.status='Subscribe'; return true"
				 ONMOUSEOUT="window.status=''; return true" class="sm-email">Email</a> </div>
      </div>
      <div class="large-4 columns">
        <div id="searchbox">
          <form accept-charset="UTF-8" action="http://search.usa.gov/search" id="search_form" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
            <div class="small-10 columns">
              <input type="search" name="query" placeholder="Find it in DOL" title="Find it in DOL" required="required" >
            </div>
            <div class="small-2 columns">
              <input type="hidden" name="affiliate" value="u.s.departmentoflabor">
              <input type="image"  src="http://www.dol.gov/homepage/img/icon-search.png"  vspace="4"  alt="Search DOL" class="usagov-submit">
            </div>
          </form>
        </div>
      </div>
    </div>

	<!--End Banner --> 
	<!--- End Top banner -->