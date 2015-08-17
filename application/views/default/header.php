<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
		<meta charset="utf-8" />
      	<meta http-equiv="X-UA-Compatible" content="IE=9" />
      	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $title;?></title>
	    <!--- Start CSS and JavaScript -->  
			      <!-- css -->
	    <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css" />
	    <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css"  />
	    <link rel="stylesheet" href="<?php echo base_url(); ?>css/megamenu.css" />
	    <link rel="stylesheet" href="<?php echo base_url(); ?>css/dol-style.css" />
	            
	    <script src="<?php echo base_url(); ?>js/modernizr.js"></script>
	    <!--[if lt IE 9]>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
	    <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	    <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
	    <![endif]-->
	      
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script><!-- Scripts for the dropdown megamenu and flexslider -->
	    <script src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script><!-- Scripts for the highlights banner -->
	    <script><!-- Scripts for the dropdown megamenu especially for the smart phone -->
	       $(document).ready(function($){
	           $('.megamenu').megaMenuCompleteSet({
	               menu_speed_show : 300, // Time (in milliseconds) to show a drop down
	               menu_speed_hide : 200, // Time (in milliseconds) to hide a drop down
	               menu_speed_delay : 200, // Time (in milliseconds) before showing a drop down
	               menu_effect : 'open_close_fade', // Drop down effect, choose between 'hover_fade', 'hover_slide', 'open_close_fade' etc.
	               menu_click_outside : 1, // Clicks outside the drop down close it (1 = true, 0 = false)
	               menu_show_onload : 0, // Drop down to show on page load (type the number of the drop down, 0 for none)
	               menu_responsive:1 // 1 = Responsive, 0 = Not responsive
	           });
	       });
	    </script>
	    <!-- Hook up the FlexSlider -->
	    <script type="text/javascript" charset="utf-8">
	      // Can also be used with $(document).ready()
				$(window).load(function() {
				$('.flexslider').flexslider({
				 animation: "slide",
	       			 mousewheel: false,  
							});
				});
	    </script>
	    <!-- End scripts for the dropdown megamenu  -->
	    <!--- End  CSS and JavaScript -->  
	    
	    <!-- Start DAP -->
	    <script language="javascript" id="_fed_an_ua_tag" src="<?php echo base_url(); ?>/includes/analytics/federated-analytics.js?agency=DOL"></script>
	    <!-- Start DAP -->
	        
	        
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
        <!-- css styles -->
    </head>
    <body class="hp">
