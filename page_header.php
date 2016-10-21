<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>Tokyo Thyme</title>
    	<link href="/style/base.css" rel="stylesheet">
		<link href="/scripts/jquery-ui/jquery-ui.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/images/Icon.ico">
		<script src="/scripts/jquery.js"></script>
		<script src="/scripts/jquery-ui/jquery-ui.js"></script>
		<script src="/scripts/functions.js"></script>
		<?php include_once('auth.php'); ?>
    </head>
    <body>
        <!-- header / GNB -->
    	<div id="header">       
        	<div id="logo">
    			<a href="/index.html"><img src="/images/Logo2.jpg" alt="Tokyo Thyme" width="400" height="75"></a>
    		</div>
            <div id="headerinfo">
                <!-- SNS -->
                <div id="acc">
                    <a href="http://www.yelp.ca/biz/tokyo-thyme-vancouver" target="_blank"><img src="/images/Yelp.png" alt="Yelp" width="30" height="30"></a>
                    <a href="https://www.zomato.com/vancouver/tokyo-thyme-arbutus-ridge" target="_blank"><img src="/images/Urbanspoon.png" alt="Urbanspoon" width="30" height="30"></a>
                    <a href="https://www.facebook.com/pages/Tokyo-Thyme/144095502300686?fref=ts" target="_blank"><img src="/images/Facebook.png" alt="Facebook" width="30" height="30"></a>
                    <a href="https://twitter.com/tokyothyme" target="_blank"><img src="/images/Twitter.png" alt="Twitter" width="30" height="30"></a>
                      
                &nbsp;&nbsp;
                <a href="/login.html"><img src="/images/people.png" alt="Login Status" width="30" height="30"><p id="headertext2"><b>&nbsp;
				
				<?php
					$u = array();
					if(isLoggedIn() && !empty($u = getUser())) 
						echo $u['fname']." ".@$u["lname"];
					else
						echo "Sign In";
				?>
				
				</b></p></a>
                    
                </div>
				<div id="headertext">
					<p><b>Ph: 604-263-3262</b></p>
				</div>
    			<br>
    			<br>
    			<br>
    			<div id="h_navbar">
    				<ul>
    					<li><a href="/menu.html">Menu</a></li>
    					<li><a href="/order.html">Ordering</a></li>
    					<li><a href="/contact.html">Contact</a></li>
    					<li><a href="/careers.html">Careers</a></li>
    				</ul>
    			</div>
    		</div>
    	</div>
        <!-- body -->
    	<div id="main">
    		<div id="mainbody">
