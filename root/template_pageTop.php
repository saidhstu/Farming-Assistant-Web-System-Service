<?php
// It is important for any file that includes this file, to have
// check_login_status.php included at its very top.
$envelope = '<img src="images/note_dead.jpg" width="22" height="12" alt="Notes" title="This envelope is for logged in members">';
$loginLink = '<a href="login.php">Log In</a> &nbsp; | &nbsp; <a href="signup.php">Sign Up</a>';
if($user_ok == true) {
	$sql = "SELECT notescheck FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$row = mysqli_fetch_row($query);
	$notescheck = $row[0];
	$sql = "SELECT id FROM notifications WHERE username='$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
    if ($numrows == 0) {
		$envelope = '<a href="notifications.php" title="Your notifications and friend requests"><img src="images/note_still.jpg" width="22" height="12" alt="Notes"></a>';
    } else {
		$envelope = '<a href="notifications.php" title="You have new notifications"><img src="images/note_flash.gif" width="22" height="12" alt="Notes"></a>';
	}
    $loginLink = '<a href="user.php?u='.$log_username.'">'.$log_username.'</a> &nbsp; | &nbsp; <a href="logout.php">Log Out</a>';
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bar/bar.css"/>
<link rel="stylesheet" type="text/css" href="css/dark/dark.css"/>
<link rel="stylesheet" type="text/css" href=css/default/default.css"/>
<link rel="stylesheet" type="text/css" href="css/light/light.css"/>
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css"/>

<meta charset="UTF-8">
<title>Farming Assistant web Service System</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<script src="js/main.js"></script>
</head>
<body>



<div id="pageTop">
  <div id="pageTopWrap">
    <div id="pageTopLogo">
      <a href="http://farmingassistant.freeiz.com">
        <img src="images/logo.png" alt="logo" title="Farming Assistant">
      </a>
    </div>
    <div id="pageTopRest">
      <div id="menu1">
        <div>
          <?php echo $envelope; ?> &nbsp; &nbsp; <?php echo $loginLink; ?>
        </div>
      </div>
      <div id="menu2">
<ul class="mainPortion">
           <li> <a href="http://farmingassistant.freeiz.com">Home </a></li>
         
          <li><a href="#">Fruit Crops</a>
                <ul class="dropdown">
                  <li><a href="mango.php">Mango</a></li>
                  <li><a href="pineapple.php">Pineapple</a>
                  <li><a href="orange.php">Orange</a>
                  <li><a href="#">JuckFruit farming </a></li>
                  <li><a href="#">Banana</a></li>
                  <li><a href="#">Plum fruit</a></li>
				  <li><a href="#">Lichi</a></li>
				  <li><a href="#">Papaya</a></li>
				  <li><a href="#">Guava</a></li>
				  <li><a href="#">Strawberry cultivation</a></li>
                </ul>
            
            </li>
			
          <li><a href="#">Fish Resource</a>
		  
		   <ul class="dropdown">
                   
                  <li><a href="fish1.php">Conservation of domestic fish and cultivation</a></li>
                  
                  <li><a href="fish2.php">Intensive cultivation of Pangasius</a>
				  <li><a href="fish3.php">Cage fish farming</a></li>
                  
                  <li><a href="fish4.php">Shrimp farmming</a></li>
                <li><a href="fish5.php">-Mixed-mixed cotton with Rui National Fish </a></li>
                </ul>
		 
		  </li>
		  <li><a href="#">Oil Crops</a>
		   <ul class="dropdown">
                   
                  <li><a href="Oil2.php">Sunflower</a></li>
                  <li><a href="Oil1.php">Soybean</a></li>
                  <li><a href="Oil3.php">Linseed</a></li>
                  <li><a href="Oil4.php">Peanut </a></li>
                  <li><a href="Oil5.php">Mustard</a></li>
                  
                </ul>
		  
		  </li>
		  <li><a href="#">Flower Cutivation</a>
		  <ul class="dropdown">
                  <li><a href="flower1.php">Tuberose plantation method</a></li>
                  <li><a href="flower2.php">Rose farming method</a></li>
                  <li><a href="flower3.php">On the commercial basis flower production.</a></li>
                  <li><a href="flower4.php">Marigold farming system</a></li>
                  <li><a href="flower5.php">Gladiolus cultivation method</a></li>
                  
                </ul>
            
		  
		  </li>
		  <li><a href="#">Vegetables Crops</a>
		  <ul class="dropdown">
                  <li><a href="vegetables1.php">Brinjal Cultivation</a></li>
                  <li><a href="vegetables2.php">Tomatoes Cultivation</a></li>
                  <li><a href="vegetables3.php">Cabbage crop</a></li>
                  <li><a href="vegetables4.php">Cauliflower </a></li>
                  <li><a href="vegetables5.php">Bean</a></li>
                  <li><a href="vegetables6.php">Red Spinach</a></li>
				   <li><a href="vegetables7.php">Karala Cultivation</a></li>
				   
                </ul>
            
		  </li>
		  <li><a href="#">Livestock</a>
		  
		  <ul class="dropdown">
                  <li><a href="#">Urea molasses straw</a></li>
                  <li><a href="#">Cow fattening technology</a></li>
                  <li><a href="#">Introduction to the species of animal species</a></li>
                  <li><a href="#">Livestock worms </a></li>
                  <li><a href="#">Keeping the Black Bengal goat</a></li>
                 
                </ul>
            
		  </li>
         
		    <li><a href="#">Economical Crops</a>
		  
		  <ul class="dropdown">
                  <li><a href="economic1.php">Jute</a></li>
              
                  <li><a href="economic2.php">Sugar cane</a></li>
                  <li><a href="economic3.php">Tea</a></li>
                  <li><a href="economic4.php">Cotton</a></li>
 
                </ul>
            
		  </li>
		    
		<style>
		
		.mainPortion {
	margin: 0;
	padding: 0;
	list-style: none;
}
    
.mainPortion li {
	display: inline;
    position: relative;
}
    
    .mainPortion li:hover .dropdown{
        left: 0px;
    }
    
    
    
    
.mainPortion li a {
	display: inline-block;
	color: #fff;
	text-decoration: none;
	padding: 6px 9px;
	border-left: 1px solid #fff;
}
    
    .mainPortion li:first-child a{
        	border-left: 0px solid #fff;

    }
    
    
.dropdown {
	position: absolute;
	top: 22px;
	left: -9999px;
	z-index: 1000;
	background: #380606;
	margin: 0px;
	padding: 0;
	width: 198px;
}
    
.dropdown li {
	display: block;
}
    
.dropdown li a {
	display: block;
	border-bottom: 1px solid #fff;
}
		</style>
		
		
      </div>
    </div>
  </div>
</div>