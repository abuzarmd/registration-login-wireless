 <?php
   session_start();
    $username=$_POST['username'];
	$password=$_POST['password'];
      if($username=="rehan"&&$password=="123")
	  {
        $_SESSION['username']=$username;
        header('location:http://localhost/wireless/home.php');		
	  }
	  else
	  {
	    header('location:http://localhost/wireless/login.php');		

	  }
?>