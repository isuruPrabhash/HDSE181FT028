<?php
	$username = 'abc';
	$pass= 'pass123';
if(isset($_POST['username']) && isset(&_POST['password']))
{
	if(($_POST['username']==$user) && ($_POST['password']==$pass))
	{
		if(isset($_POST['rememberme']))
		{
			setcookie('username',$_POST['username'],time()+60*5,'www');
			setcookie('password',$_POST['password'],time()+60*5,'www');
		}
	header();
	}
	else
	{
		*/reload login page
	}
}
?>