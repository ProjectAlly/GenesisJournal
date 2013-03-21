<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'title.php';?>
<link rel="stylesheet" href="css/960.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/search.css" type="text/css" />
<style type="text/css">
body {
	background: #f9fafb url(images/pages/bg.gif) top repeat-x;
}
#bluetext a{color:blue;}
#bluetext a:hover{text-decoration: underline;}
</style>
<script type="text/javascript">
function checkform()
{
	var searchf = document.getElementById('searchfield');
	if (search.value == " ") {
		var theDiv = document.getElementById("<ID_OF_THE_DIV>");
		theDiv.innerHTML += "<YOUR_CONTENT>"; 
		return false;
	}
	var elem=document.forms['searchbox'].elements['search_type'];
	len=elem.length-1;
	chkvalue='';
	for(i=0; i<=len; i++)
	{
		if(elem[i].checked)chkvalue=elem[i].value;	
	}
	if(chkvalue=='')
	{
		alert('No search type is selected');
		return false;
	}
	return true;
}

</script>


</head>
<body>
	<div class="container_16" id="main">
		
		<?php include('header.php')?>
		<!-- SUBMENU -->
		<div class="grid_16" id="display">
			<ul id="subNavigation">
				<li><a class="current">SEARCH FOR ARTCLES IN OUR JOURNALS</a></li>
			</ul>
		</div>
		<!-- /SUBMENU -->
		<div class="clear"></div>
		
	</div><!-- /#main -->
			
	<div class="container_16" id="content">
		
		<div class="grid_11 content" id="two_col">
			<div class="search">
			<h2>Search</h2>
				<form class="searchform" method="post" name="searchbox" onSubmit="checkform()" action="<?PHP echo $_SERVER['PHP_SELF']; ?>">
				<input class="searchfield" type="text" name="search_param" id="searchfield" size="30" maxlength="255" value="" />
				<input class="searchbutton" type="submit" value="Go" />
				<br/><b>Search By</b><br/>
				<input type="radio" name="search_type" id="search_type" value="author" />Author<br/>
				<input type="radio" name="search_type" id="search_type" value="keyword" />Keyword<br/>
				<input type="hidden" name="submitted" value="1" />
				<div id="error"></div>
				</form>
			<?php 	
				if(isset($_POST['submitted'])){
					if(isset($_POST['search_param']))
						$param = $_POST['search_param'];
					if(isset($_POST['search_type']))
						$type = $_POST['search_type'];
					mysql_connect('localhost','root','','genesis');
					mysql_select_db('genesis');
					if(isset($type)){
						if($type == 'author'){
							$author = $param;
							echo '<p>';
						    echo '<h3> Search Parameter:'.$param.'</h3>';
						    $qry_author = "SELECT * FROM authors WHERE author='$author'";
						    $result_author = mysql_query($qry_author);
						    while($row_author = mysql_fetch_array($result_author))
						    {
						        $article_id = $row_author['article_id'];
						        $qry_article_author = "SELECT * FROM articles WHERE article_id = '$article_id'";
						        $result_article_author = mysql_query($qry_article_author);
						        while($row_article_author = mysql_fetch_array($result_article_author))
						        {
						        	echo '<b>'.$row_article_author['title'].'</b>';
						            echo "<br/>";
						            ?>
						            <span id="bluetext"><strong><a href="<?php 
						            		echo "abstract.php?article=".$row_article_author['site_id'];
									?>" >[Abstract]</a></strong></span>
	                    			<br/>
	                    			<span id="bluetext"><strong><a href="<?php 
	                    					echo "data/Articles/".$row_article_author['magazine']."/".$row_article_author['volume']."/".$row_article_author['site_id'].".pdf";
									?>" target="_blank">[Full Text PDF]</a></strong></span>
						            <?php 
						            //echo $row_article_author['']
						            echo "<br/>";
						            echo "<br/>";
						            
						        }
						        echo '</p>';
						    }
							//echo mysql_affected_rows();
						}
					    elseif($type == 'keyword'){
						    //for keyword
						    $keyword = $param;
						    echo '<h3> Search Parameter : '.$param.'</h3>';
						    $qry_keyword = "SELECT * FROM keywords WHERE keyword='$keyword'";
						    $result_keyword = mysql_query($qry_keyword);
						    while($row_keyword = mysql_fetch_array($result_keyword))
						    {
						        $article_id = $row_keyword['article_id'];
						        $qry_article_keyword = "SELECT * FROM articles WHERE article_id = '$article_id'";
						        $result_article_keyword = mysql_query($qry_article_keyword);
						        while($row_article_keyword = mysql_fetch_array($result_article_keyword))
						        {
						    		echo "<p>";
						            echo '<b>'.$row_article_keyword['title'].'</b>';
						            echo "<br/>";
						            ?>
						            <span id="bluetext"><strong><a href="<?php 
						            		echo "abstract.php?article=".$row_article_keyword['site_id'];
									?>" >[Abstract]</a></strong></span>
	                    			<br/>
	                    			<span id="bluetext"><strong><a href="<?php 
	                    					echo "data/Articles/".$row_article_keyword['magazine']."/".$row_article_keyword['volume']."/".$row_article_keyword['site_id'].".pdf";
									?>" target="_blank">[Full Text PDF]</a></strong></span>
						            <?php 
						            								//echo $row_article_keyword['']
								    echo "</p>";
					                echo "<br/>";
						            echo "<br/>";
						        }
						    }
						}
					}	
				//echo mysql_affected_rows();
				    mysql_close();
				//while(mysql)
			}
			?>
			</div>			
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
