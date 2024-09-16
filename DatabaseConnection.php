<?php
   if(isset($_POST["B1"]))
   {
	$con=mysqli_connect("localhost","Pratik","@Pratik123","College");
	if($con)
	{
		echo "<h3>Connection Established Successfully!!!";
		$query="insert into biodata values('hello','hii')";
		if(mysqli_query($con,$query))
		{
			echo "inserted successfully";
		}
		else{
			echo "error";
		}
	}
	else
	{
		echo "<h3>Connection Error";
	}
   }
    if(isset($_POST["B2"]))
	{
	$con=mysqli_connect("localhost","Pratik","@Pratik123","College");
	if($con)
	{
		echo "<h3>Connection Established Successfully!!!";
		$query="update biodata set fname='nikhil' where lname='navale'";
		if(mysqli_query($con,$query))
		{
			echo "updated successfully";
		}
		else{
			echo "error";
		}
	}
	else
	{
		echo "<h3>Connection Error";
	}
	}

?>