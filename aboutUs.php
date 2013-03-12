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
				<li><a href="contact.html" class="current">Know us better</a></li>
			</ul>
		</div>
		<!-- /SUBMENU -->
		<div class="clear"></div>
		
	</div><!-- /#main -->
			
	<div class="container_16" id="content">
		
		<div class="grid_11 content" id="two_col">
			<h2>About Genesis Journal</h2>
			<p>
				Genesis Journal is an official publication from "Parul Arogya Seva Mandal", 
				a registered trust (www.parul.ac.in) started to promote
				educational activities since 1989 under the guidance of visionary
				person and founder chairman Dr. Jayesh K. Patel.
			</p>
			<blockquote>
			<h4>Vision</h4>
			<p>To establish a <b>'Gurukulam Par Excellence'</b> by making 'quality' an
			element of education.</p>
			</blockquote>
			<br/>
			<blockquote>
			<h4>Mission</h4>
			<p>To transform the students in a way that will bring a new value
			system in their thought process, create and innovate newer things
			for the benefit of society as a whole.</p>			
			</blockquote>
			<p style="text-align: justify">
				Genesis journal is a scientific, educational and professional publication of 
				"Parul Arogya Seva Mandal" trust committed to promote the highest professional
				and ethical standards of research and development activity and to work for 
				the growth, development and betterment in the field of professional,
				medical and paramedical education. 
			</p>
			<p style="text-align: justify">
				Pharmagene is a quarterly peer reviewed journal published by Genesis Journals 
				aiming to communicate high quality original research work, reviews and short 
				communications and propagate the knowledge base related to the 
				field of Pharmaceutical sciences.
			</p>
			<p style="text-align: center">
				<b>
				Parul Group of Institutes</b> is an hub comprising of more than 18
				self financed Institutes located in a campus of 100 acres providing
				world-class professional, medical and paramedical
				ranging from Pharmacy, Engineering and Technology, Computer
				Application, Management, Architecture, Homoeopathy, Ayurveda,
				Physiotherapy, Hotel Management,
				education etc. with more than 15000 students & 1000 teachers.
				courses Social Work, Teacher.<br/>
				<br/>
				<b>
				<a href="data/Pharmacogyn-CC-2.jpg" target="_blank">
				Click to Download our brochure.<br/><br/>
				<img src="data/Pharmacogyn-CC-2.jpg" align="middle"  height="30%" width="30%"/>
				</a></b>
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
