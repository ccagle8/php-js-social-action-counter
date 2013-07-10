<?php
/*
 * Social Action Counting
 * 
 * GitHub Repo: https://github.com/ccagle8/php-js-social-action-counter
 * 
 * @created 06/10/2013
 * @author Chris Cagle <admin@cagintranet.com>
 * 
 */
 
 
$_SESSION['page_to_count'] = 'unique_id_for_this_page'; // this assumes you want to track stats for different pages on your site.

?>
<!doctype html>
<html lang="en">
  <head>

		<meta charset="utf-8">
		<title>Social Media Action Counting Demo</title>
		
		<!-- 
		 Still Important: some buttons pull from this...
		-->
		<meta name="description" content="">
		
		<!-- 
		 OpenGraph Data 
		 More Information: https://developers.facebook.com/docs/opengraph/
		-->
		<link rel="canonical" href="">
		<meta property="og:url" content=""/>
		<meta property="og:type" content=""/>
		<meta property="og:title" content=""/>
		<meta property="og:description" content="">
		<meta property="og:image" content=""/>
		<meta property="og:image:type" content="image/png"> <!-- Assuming you're using a PNG file... -->
		
		<!-- 
		 Twitter Cards Data 
		 More Information: https://dev.twitter.com/docs/cards
		-->
		<meta name="twitter:card" value="summary">
		<meta name="twitter:site" value="">
		<meta name="twitter:url" content=""/>
		<meta name="twitter:title" content=""/>
		<meta name="twitter:description" content=""/>
		<meta name="twitter:image" content=""/>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	</head>

  <body>

  	<!--
  	 These are the Big 4 social media vertical boxes. 
  	 Facebook | Twitter | LinkedIn | GooglePlus
  	 
  	 Note: Some are non-standard or unpublished layouts, but this is what's needed to create the social counting system.
  	-->
		<div id="fb-root"></div>
		<div class="fb-like" data-send="false" data-layout="box_count" data-width="70" data-show-faces="false" ></div> &nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="https://twitter.com/share" data-count="vertical" class="twitter-share-button" >Tweet</a> &nbsp;&nbsp;&nbsp;&nbsp; 
		<script type="IN/Share" data-showzero="true" data-counter="top" data-onsuccess="linkedClick" ></script> &nbsp;&nbsp;&nbsp;&nbsp; 
		<g:plusone size="tall" callback="plusClick" annotation="vertical-bubble" ></g:plusone>


		<script src="//platform.linkedin.com/in.js" type="text/javascript" ></script>
		<!-- 
		 Facebook Notice: Replace 'XXXXXXXXXX' with your own App ID. 
		 Get it here: https://developers.facebook.com/apps/ 
		--> 
		<script src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=XXXXXXXXXX" type="text/javascript" ></script> 
		<script src="//platform.twitter.com/widgets.js" type="text/javascript" ></script>
		<script src="//apis.google.com/js/plusone.js" type="text/javascript" ></script>
		
		
		
		<!-- The file that does the magic -->
		<script src="social.js" type="text/javascript" ></script>

  </body>
</html>