<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'title.php';?>
<link rel="stylesheet" href="css/960.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/TitilliumText15L_100-TitilliumText15L_400.font.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<style type="text/css">

body {
	background: #f9fafb url(images/pages/bg.gif) top repeat-x;
}

.aboutus {
	padding-left: 166px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#contactForm input, #contactForm textarea').focus(function(){ $(this).stop().animate({backgroundColor: "#fff3c5"}, 500), $(this).css("borderColor", "#f89d1c") })
	
	$('#contactForm input, #contactForm textarea').blur(function(){ $(this).stop().animate({backgroundColor: "#fffff"}, 500), $(this).css("borderColor", "#97b2cd") });
})

$('#main').ready(function(){
	//process possible form errors
})
</script>
</head>

<body>
	<div class="container_16" id="main">
		<?php include ('header.php')?>
		
		<!-- SUBMENU -->
		<div class="grid_16" id="display">
			<ul id="subNavigation">
				<li><a class="current">JOIN OUR BOARD - BE A PART OF PHARMAGENE</a></li>
			</ul>
		</div>
		<!-- /SUBMENU -->
		<div class="clear"></div>
		
	</div><!-- /#main -->
			
	<div class="container_16" id="content">
		
		<div class="grid_11 content" id="two_col">
			<h2>Join as a Reviwer</h2>
			<p>
			Pharmagene will be pleased to accept your services as
			 experts in various fields of Pharmaceutical sciences as Reviewer. 
			 Reviewer must have at least three years of experience in the relevant 
			 field after completion of the education and at least three original
			  research papers in journal. Interested Faculty members, Researchers, 
			  Managers from organizations and institutions are requested to join us 
			  as Reviewers. 
			</p>
			<p>
			  Please mail us your biodata with passport size photograph along 
			  with consent form to <a href="mailto:pharmagenejournal@gmail.com">pharmagenejournal@gmail.com</a>. 
			</p>
			<p><b>Consent form is availaible for download.</b><br/>
			    <a href="data/Reviewer%20Consent%20Form.pdf" target="_blank">
					<img src="images/pages/download_button.png" align="middle" height="20%" width="20%"/>
				</a>
			</p>
			
		</div><!-- /#left -->
		<div class="grid_5" id="one_col">
			<?php include ('sidebar.php'); ?>

		</div><!-- /#right -->
		<div class="clear"></div>
		
	</div><!-- /#content -->
			
	<div id="footerwrapper">

		<?php include('footer.php'); ?>

	</div><!-- /#footerwrapper -->

<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10567708-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
