<?php

function check_login($con)
{

	if(isset($_SESSION['nom_chef']))
	{

		$id = $_SESSION['nom_chef'];
		$query = "select * from chef_departement where nom_chef = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
function check_login1($con1)
{

	if(isset($_SESSION['nom_ens']))
	{

		$id = $_SESSION['nom_ens'];
		$query = "select * from enseignant where nom_ens = '$id' limit 1";

		$result = mysqli_query($con1,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}?>