<!DOCTYPE html>
<html>
<head>
      <script src="myscript.js"></script>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <div id="wrapper">
 <header id ="top_header">
 <h2> Wireless Network</h2>
 </header>
 <!-- <div id="form">  -->
 <form action="validation.php" method="post" onsubmit="return validation()">
   <h2>LOGIN WINDOW</h2>
  <table>
    <tr>
	  <td>username:</td>
	  	 <td> <input type="text" name="username" placeholder="Enter Username"/></td>
	</tr>
	
	<tr>
	  <td>password:</td>
	  	 <td> <input type="password" name="password" placeholder="Enter Password"/></td>
	</tr>
	
	<tr>
	  <td></td>
	  	 <td> <input id="btn-login" type="submit" value="login"/></td>
	</tr>
	
  </table>
  </form>
  <!-- </div>  -->

 </div>
 
</body>
</html>