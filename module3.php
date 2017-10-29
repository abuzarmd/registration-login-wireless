<?php
    session_start();
	if(!isset($_SESSION['username']))
	header('location:http://localhost/wireless/login.php');		

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>homepage</title> 
    <link rel="stylesheet" href="main.css" />	
</head>
<body>
  <?php  $_SESSION['username'];?>
 
	  <div id="big_wrapper">
	  <header id="top_header">
	    <h1>wireless network</h1>
	  </header>
	  
	  <nav id="top_menu"> 
	    <ul> 
	         <li><a href="home.php">Home</a></li>
	         <li><a href="#">menu bar!!</a></li>
			 <li><a href="logout.php">Logout</a></li>

		</ul>
	  </nav>
	  
	  <section id="main_section">
	           <h2>Based On Access Technology</h2>
	    <article>
			  <h1>Module 1..</h1>
			  <h3>GSM Network</h3>
		  <input type="submit" id="searchBtn" value="go" />
		</article>
		
		<article>
			  <h1>Module 2.</h1>
			  <h3>TDMA Network</h3>
		  <input type="submit" id="searchBtn" value="go" />
		</article>
		
		<article>
			  <h1>Module 3.</h1>
			  <h3>CDMA Network</h3>
		  <input type="submit" id="searchBtn" value="go" />
		</article>
		
		
	  </section>
	  
  
	 <footer id="footer">
	    Copyright @2017
	 </footer>
	
	 </div>
</body>
</html>