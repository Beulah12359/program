<?php
   //initialize errors variable
       $errors = "";

	//connect to database
       
	
	// insert a quote if submit button is clicked
	

		if (empty($_POST['task'])) 
                   {
			$errors = "You must fill in the task";
                                                                 
                                                                 
                                                                 
                }else{

			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: lindex.php');
		}
	                                                                  //}	

	// ...
?>







<!DOCTYPE html>
<html>
<head>
<title> to do list application</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="post" action="lindex.php" class="input_form">
<?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">submit</button>
	</form>
</body>
</html>