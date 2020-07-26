<?php
		$link = mysqli_connect("localhost","root","","simple");
		
		if(mysqli_connect_errno()) {
		printf("CONNECT FAILED: %s\n", mysqli_connect_error());
		exit();
		}
		
		$query = "INSERT INTO user ('first_name','last_name','birthday','gender','D_ID','address','phone') values('$_POST[first_name]','$_POST[last_name]','$birthday','$gender','$D_ID','$address','$phone')";
		
		if($result = mysqli_query($link, $query)) {
			echo "NEW RECORD INSERTED SUCCESFULLY"; 
			
		} else {
			echo "ERROR: Could not execute $sql. " . mysqli_error($link);
		}


?>