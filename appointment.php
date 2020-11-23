<?php
require 'configure.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Appointment</title>

</head>
<body>
<div class="form">
		<form action="appointment.php" method="POST">
		<input type="email" name="Email" placeholder="Email" required="required">
		<input type="date" name="Date" placeholder="Date" required="required">
  <button type="submit" class="button" name="submit">Schedule Appointment</button>
		
</form>
	</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])) 
{
    $email=$_POST['Email'];
    $date=$_POST['Date'];

    $query1="INSERT INTO appointment VALUES ('$email','$date')";
    $query_run=mysqli_query($conn,$query1);
    if ($query_run) 
    {
        echo "Appointment Scheduled Successfully!";
    }
    else
    {
        echo "Error!";
    }
}
?>
