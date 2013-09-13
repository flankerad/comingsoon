<?php
//-- database connection information
$server	    = 'localhost'; 
$username	= '';
$password	= '';
$database 	= 'launch_email'; 	//-- database should really be created manually.


try
{
	$dbh = new PDO("mysql:host=$server;dbname=$database", $username, $password);

	//-- create table
	$dbh->query("CREATE TABLE IF NOT EXISTS `$database`.`mail` (
					`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					`email` VARCHAR(255) NOT NULL
				) 
				ENGINE = MyISAM")

	$dbh->prepare('INSERT INTO mail VALUES ('', :?)');
	$dbh->execute(array($_POST['email']));

	//-- DO NOT USE BELOW CODE AS-IS!
	//-- Very easy for someone to use this form to send spam.

	/*/ Send Message
	mail( "yournameeeee@gmail.com", "Contact Form Submission",
	"Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $url\nMessage: $message\n",
	"From: Forms <forms@example.net>" );*/
}
catch (PDOException $ex)
{
	echo "Database Error: " . $ex->getMessage();
}
?>
<style>
	#label, #email, #submit { display: none;}
	.text { color:#36B930}
</style>
<span class="text">Thank You!!<br>
for your interest, looking forward to launch keep tight &amp; fasten your seatbelts.</span>



