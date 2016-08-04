<?php 
	$base_url = 'http://studentloanhelpdesk.com';
	$siteName = $_SERVER['SERVER_NAME'];
	$siteUrl = 'http://'.$siteName.'.com';

	if($base_url != $siteUrl){
		header('Location: '.$siteUrl);
		die();
	}

	$aff_id  = $_GET['aff_id'];
	$sub_id1 = $_GET['sub_id1'];
	$sub_id2 = $_GET['sub_id2'];
	$offer_id = $_GET['offer_id'];
	$url = $base_url.'/?aff_id='.$aff_id.'&sub_id1='.$sub_id1.'&sub_id2='.$sub_id2.'&offer_id='.$offer_id;
 ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>StudentLoanHelpDesk.com</title>
	
	<link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link rel="stylesheet" media="screen and (max-width: 730px)" href="css/narrow.css">
	<link rel="stylesheet" media="screen and (min-width: 731px) and (max-width: 1040px)" href='css/medium.css'>
	<link rel="stylesheet" media="screen and (min-width: 1041px)" href='css/wide.css'>
	
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/wide.css">
	<![endif]-->
	
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/wide.css">
	<![endif]-->
	
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="css/wide.css">
	<![endif]-->
	
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> 
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
	<script type="text/javascript" src="js/jcarousellite_1.0.1.min.js"></script>
	
	<!-- Mobile Detection -->
	<script> type="text/javascript"
		if ($(window).width() < 731)
		{
			mf_isMobile = true;
		}
		else
		{
			mf_isMobile = false;
		}
	</script>
	<!-- END Mobile Detection -->
	
	<script type="text/javascript">
	// ROTATING ARTICLES (SIMPLY SCROLL)
	(function($) {
		$(function() {
			$("#scroller").simplyScroll();
		});
	})(jQuery);
	
	$(document).ready(function (){
		$('#button a').click(function(){
			var integer = $(this).attr('rel');
			$('#myslide .cover').animate({left:-680*(parseInt(integer)-1)})  /*----- Width of div mystuff (here 680) ------ */
			$('#button a').each(function(){
			$(this).removeClass('active');
				if($(this).hasClass('button'+integer)){
					$(this).addClass('active')}
			});
		});	
	});
	
	// SLIDER (JCAROUSELLITE)
	$(function() {
		$(".sliderContent").jCarouselLite({
			btnNext: ".btnNext",
			btnPrev: ".btnPrevious",
			visible: 4
		});
	});
	</script>
	
	<!--[if lt IE 7]>
		<style type="text/css">
			#wrapper { height:100%; }
		</style>
	<![endif]-->
</head>
<body>
	<div id="container"> 
		<header>
		<div id="headerOldBrowsers">
	    	<a id="logo" href="<?php echo $url; ?>"><h1>StudentLoanHelpDesk<span>.com</span></h1></a>
			<!-- <button id="btnFacebook" onclick="javascript:void(0)"></button> -->
			<!-- <button id="btnGoogle" onclick="javascript:void(0)"></button> -->
		</div>
		<!-- <div id="headerCenterText" style="display: block; clear: left;">Advertisement</div> -->
	    </header>
		<div id="subHead">
			<!--NAVIGATION-->
			<!-- <div id="nav">
				<a class="navLink" href="javascript:void(0)">HOME</a> |
				<a class="navLink" href="javascript:void(0)">CREDIT CARDS</a> |
				<a class="navLink" href="javascript:void(0)">PERSONAL FINANCE</a> |
				<a class="navLink" href="javascript:void(0)">ONLINE DEGREE</a>
			</div> -->
			<!--END NAVIGATION-->
			
			<!--NAVIGATION **MOBILE**-->
			<!-- <form name="navMobileForm">
				<select  id="navMobile" name="navMobile" size="1" onChange="go()">
					<option value="" selected="selected"></option> 
					<option value="javascript:void(0)">CREDIT CARDS</option>
					<option value="javascript:void(0)">PERSONAL FINANCE</option>
					<option value="javascript:void(0)">ONLINE DEGREE</option>
				</select>
			</form> -->
			<script type="text/javascript">
				<!--
				function go(){
				location=
				document.navMobileForm.navMobile.
				options[document.navMobileForm.navMobile.selectedIndex].value
				}
				//-->
			</script>
			<!--END NAVIGATION **MOBILE**-->
		</div>
		<div id="mainBody">
			<div id="mainColumn">
				<div id="articleContent">
					<div class="headerSection">
						Top Headlines
					</div>
					<h1>The Student Loan Programs Your Lender Doesn’t Want You to Know</h1>
					<a href="<?php echo $url; ?>"><img id="articlePhoto" class="photoArticle" alt="The Home Refinancing Plan Banks Don't Want You Knowing" src="images/student-loans.jpg"></a>				
					<div class="articleFootnote">
						<div class="articleFootnote">
							<div id='author'>By Janice Smith</div>
							<div id='published'>
								Last updated: January 1st, 2016
							</div>
						</div>
					</div>
					<img class="photoArticleMobile" alt="The Home Refinancing Plan Banks Don't Want You Knowing" src="images/student-loans.jpg">
					<p><strong>When student borrowers visit Student Loan Help Desk they might be surprised at the programs they qualify for.</strong></p>
					<p>There has never been a better time to reduce or forgive your student loan payments. In November, President Obama signed a new student loan law called <!-- <a href="http://time.com/money/4089638/student-loans-income-based/" target="_blank"> --><span style="color: blue; text-transform: uppercase; text-decoration: underline;">REPAYE</span><!-- </a>  --> that<strong> caps the amount you have to pay towards your student loans at 10% of your income.</strong></p>
					<p>The best part is that there is no catch! If you have <strong>federal student loans</strong> you qualify for this – no matter what! Unfortunately, like all government programs there is some paperwork involved and you may not know which programs you immediately qualify for. That’s where Student Loan Help Desk can help.</p>
					<blockquote><strong>Quick Version:</strong> Student borrowers are taking advantage of a new law that went into effect in December 2015 to <strong>dramatically reduce their student loan payments or forgive them completely. </strong><a href="<?php echo $url; ?>">Click here to see if you qualify now.</a></blockquote>
					<h2>Finally, some relief for student borrowers.</h2>
					<p>It’s no secret that US college students leave with huge amounts of debt, many times more than anywhere else in the world. The government has ignored this problem for years, allowing tuition to continue to rise. However, finally after protests and complaints from millions of Americans, they decided to act:</p>
					<ol>
						<li><strong>You can reduce your student loan payments immediately to 10% of income</strong></li>
						<li><strong>Depending on your earnings or job, you may qualify for full loan forgiveness</strong></li>
					</ol>
					<p>Even though Sallie Mae is technically a federal loan program, they are still run like a for-profit company, so you better believe they will not be calling you up to let you know about this. You have to read the news and find out for yourself.</p>
					<blockquote style="max-width: 595px;"><em>Tens of millions of students qualify for these programs, but because the government has hardly spent any money advertising the program – it costs them money in interest payments! – hardly anyone knows about it.</em><br /> <a href="<?php echo $url; ?>">Instantly see online &gt;&gt;</a></blockquote>
					<p>This is why it's a no-brainer – there is no fee to apply for the program, and as long as you have loans you qualify. It only takes a few minutes with an expert consultant to find out how much you can save.</p>
					<h2>Act Now Before A New President Comes In</h2>
					<p>Even though this is the law of the land now, since it was an executive order you never know if these programs will be eliminated by the next President. Act now, and lock in these new payment plans before they are gone.</p>
					<p><strong>Here's how:</strong></p>
					<ul>
						<li style="margin: 10px;">Click one of the links and visit Student Loan Help Desk</li>
						<li style="margin: 10px;">Fill out a very short form, and then speak to an agent on the phone to qualify you for programs. No private info (Social Security #, etc) is required. Just your name and contact info!</li>
					</ul>
					<h2>Tap&nbsp;Your Debt Amount:</h2>
					<p><br /><br /> <a class="buttonAge" href="<?php echo $url; ?>">$5K</a> &nbsp; <a class="buttonAge" href="<?php echo $url; ?>">$10K</a> &nbsp; <a class="buttonAge" href="<?php echo $url; ?>">$20K</a> &nbsp; <br /><br /><br /> <a class="buttonAge" href="<?php echo $url; ?>">$30K</a> &nbsp; <a class="buttonAge" href="<?php echo $url; ?>">$40K</a> &nbsp; <a class="buttonAge" href="<?php echo $url; ?>">Over $50K</a></p>
					<p>&nbsp;</p>
					<p><a href="<?php echo $url; ?>"><span class="advertorialBtnLg">Learn More &gt;&gt;</span></a></p>
				</div>
				<!--END ARTICLE CONTENT-->
			</div>
			<div id="rightColumn">
				<div class="adSpace300x250">
					<!-- <div class="headerSection">PUT YOUR ADS HERE</div> -->
					<a id="rightCol300x600Link" href="<?php echo $url; ?>"><img src="images/debt-amount.jpg" style="margin: 20px 0 10px;"></a>					
				</div>
				<!-- <div id="facebook"></div> -->
			</div>
			<div class="clearBoth"></div>
		</div>
		<footer>
		<div id="footerOldBrowsers">
			<div id="footerNav">
				<a class="footerLink" href="../contact.php">Contact Us</a> |
				<a class="footerLink" href="../privacy.php">Privacy Policy</a> |
				<a class="footerLink" href="../terms.php">Terms of Use</a>
				<br style="clear: both;" />
				&copy; <?php date_default_timezone_set('America/New_York'); echo date('Y'); ?> StudentLoanHelpDesk.com. All rights reserved.
			</div>
		</div>
		</footer> 
	</div>
</body>
</html>
