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
	  
	    <article>
			  <h1>Module 1.</h1>
			  <h3>Based On Network Formation And Architecture</h3>
		  <form action="module1.php"> <input type="submit" id="searchBtn" value="go" />  </form>
		</article>
		
		<article>
			  <h1>Module 2.</h1>
			  <h3>Based On Communication Coverage Area</h3>
		  <form action="module2.php"> <input type="submit" id="searchBtn" value="go" />  </form>
		</article>
		
		<article>
			  <h1>Module 3.</h1>
			  <h3>Based On Access Technology</h3>
		  <form action="module3.php"> <input type="submit" id="searchBtn" value="go" />  </form>
		</article>
		
		<article>
			  <h1>Module 4.</h1>
			  <h3>Based On Sattelite Network</h3>
		  <form action="module4.php"> <input type="submit" id="searchBtn" value="go" />  </form>
		</article>
		
		
		
	  </section>
	<!--  
   <aside id="login_form">
          <form action="validation.php" method="post" onsubmit="return validation()">
            <table>
             <tr>
	          <td>username</td>
	  	      <td> <input type="text" name="username"/></td>
	         </tr>
	
	         <tr>
	          <td>password</td>
	   	      <td> <input type="password" name="password"/></td>
	        </tr>
	
	        <tr>
	         <td></td>
	  	     <td> <input type="submit" value="login"/></td>
	       </tr>
	
          </table>
       </form>
   </aside>
   -->
	 <footer id="footer">
	    Copyright @2017
	 </footer>
	
	 </div>
</body>
</html>