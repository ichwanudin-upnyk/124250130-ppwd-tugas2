<?php
    	$email_input=$_POST['email']; $password_input=$_POST['password'];
    	$users=[
    		['admin@gmail.com','passwordbaru'],
    		['office@gmail.com','kantorKita123'],
    		['124250130@student.upnyk.ac.id','adadeh']
    	];

    $correct=false;
	foreach ($users as $user){
		if($user[0]==$email_input && $user[1]==$password_input) $correct=true; 
	}
	if($correct) header("Location: dashboard.php");
	else echo "error<br><a href='login.php'>back</a>";
?>
