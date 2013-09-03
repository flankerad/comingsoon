<?php
// Get Data	

session_start();
//connect.php
$server	    = 'localhost';//Enter name of your database server generally its same
$username	= '';//Enter your username
$password	= '';//Enter your database password


if(!mysql_connect($server, $username, $password))
{
 	exit('Error: Oops! something went wrong please visit after a while');
}

   $email = strip_tags($_POST['email']);

   $db = mysql_query("CREATE DATABASE IF NOT EXISTS `launch_email`");

    if(!$db)	
	
	{ exit('Error: Oops! something went wrong please visit after a while');}
	
	else
     {		
       mysql_select_db("launch_email");
					
       $sql = mysql_query("CREATE TABLE IF NOT EXISTS `launch_email`.`mail`(`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                    `email` VARCHAR(50) NOT NULL)
					 ENGINE = MyISAM") or die(mysql_error());
								


					 $insert = mysql_query("INSERT INTO mail VALUES ('','$email') ") or die (mysql_error());
				    
		}			 
				
/*/ Send Message
mail( "yournameeeee@gmail.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $url\nMessage: $message\n",
"From: Forms <forms@example.net>" );*/
?>
<style>
	#label, #email, #submit { display: none;}
	.text { color:#36B930}
</style>
<span class="text">Thank You!!<br>
for your interest, looking forward to launch keep tight &amp; fasten your seatbelts.</span>



