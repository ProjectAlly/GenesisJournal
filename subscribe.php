<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'title.php';?>
<link rel="stylesheet" href="css/960.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style type="text/css">
body {
	background: #f9fafb url(images/pages/bg.gif) top repeat-x;
}
table {
	border: 1px;
}
</style>
</head>

<body>
	<div class="container_16" id="main">
		
		<?php include('header.php')?>
		<!-- SUBMENU -->
		<div class="grid_16" id="display">
			<ul id="subNavigation">
				<li><a class="current">Subscribe</a></li>
			</ul>
		</div>
		<!-- /SUBMENU -->
		<div class="clear"></div>
		
	</div><!-- /#main -->
			
	<div class="container_16" id="content">
		
		<div class="grid_11 content" id="two_col">
		<h2>Subscribe</h2>
			<p>
			<b>Download PDF for subscription rates</b>
			<br/>
			<a href="data/Subscriptions.pdf" target="_blank">
				<img src="images/pages/download_button.png" align="middle" height="20%" width="20%"/>
			</a>
			</p>	
		</div><!-- /#two_col -->

		<div class="grid_5" id="one_col">
			<?php include('sidebar.php'); ?>		
		</div><!-- /#one_col -->

		<div class="clear"></div>
		
	</div><!-- /#content -->
		
	<div id="footerwrapper">
		<?php include('footer.php'); ?>
	</div><!-- /#footerwrapper -->

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
