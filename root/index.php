<?php
include_once("php_includes/check_login_status.php");
$sql= "SELECT username, avatar FROM users WHERE avatar IS NOT NULL AND activated='1' ORDER BY RAND() LIMIT 32";
$query = mysqli_query($db_conx, $sql);
$usernumrows= mysqli_num_rows($query);
$userlist= "";
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	$u= $row["username"];
	$avatar= $row["avatar"];
	$profile_pic= 'user/' .$u.'/'.$avatar;
    $userlist .= '<a href="user.php?u='.$u.'" title="'.$u.'"><img src="'.$profile_pic.'" alt="'.$u.'" style="weidth:100px; height:100px; margin:10px;"></a>';
}
$sql= "SELECT COUNT(id) FROM user WHERE activated='1'";
$query = mysqli_query($db_conx,$sql);
$row = mysqli_fetch_row($query);
$usercount =row[0];


?>

<?php include_once("template_pageTop.php"); ?>

<div id="pageMiddle">
<div class="fix slider">
<div class="slider-wrapper theme-light">
<div class="nivoSlider"id="slider">  
<img src="image/banner.jpg"alt="This site developed by Saidur Rohman"title="Farming Assistant Web Service System "/> 
<img src="image/slider.jpg"alt=""/>
<img src="image/nivo.jpg"alt=""/>
<img src="image/n.jpg"alt=""/>
<img src="image/1.jpg"alt=""/>
<img src="image/2.jpg"alt=""/>
<img src="image/3.jpg"alt=""/>
<img src="image/4.jpg"alt=""/>
<img src="image/5.jpg"alt=""/>
<img src="image/rice.jpg"alt=""/>
<img src="image/7.jpg"alt=""/>

 </div>
 </div>
 </div>
 </div>
 
 
 <div id="content_body">

	<div id="main_content">
	<p>
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	</p>
		
	</div>
<?php include_once("sidebar.php");?>	


</div>
 
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>
<?php include_once("template_pageBottom.php"); ?>
