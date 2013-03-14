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

.aboutus {
	padding-left: 166px;
}
</style>
</head>

<body>
<?php 
	$abs_file = "data/Articles/Pharmagene/Volume 1/abstracts/abstract_".$_GET['article'].".php";
?>

	<div class="container_16" id="main">
		<?php include ('header.php')?>
		
		<?php include ($abs_file); ?>
		
		<!-- #right -->
		<div class="grid_5" id="one_col">
			<?php include ('sidebar.php'); ?>

		</div><!-- /#right -->
		<div class="clear"></div>
		
	</div><!-- /#content -->
			
	<div id="footerwrapper">

		<?php include('footer.php'); ?>

	</div><!-- /#footerwrapper -->

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
