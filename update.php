<?php

include 'newconn.php';

$institute_name = $_POST['institute_name'];

$showquery = "SELECT * from record ";

$showdata = mysqli_query($conn,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['btn'])){
    $first_name = $_POST['institute_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['course_name'];
    $grade = $_POST['grade'];

$query = " update record set institute_name='$institute_name', 
first_name='$first_name', last_name='$last_name', 
course_name='$course_name', grade='$grade' where userid=$userid ";

$res = mysqli_query($conn,$query);

header('location:show.php');


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<center>
    <form method="post" id="myform">
        <br>Institute name:<br><br>
		<input name="institute name" value="<?php echo $arrdata['institute name']; ?>"/>
		<br><br>
		First name:<br><br>
		<input name="first_name" value="<?php echo $arrdata['first_name']; ?>"/>
		<br><br>
		Last name:<br><br>
		<input name="last_name" value="<?php echo $arrdata['last_name']; ?>"/>
		<br><br>
		Course name:<br><br>
		<input name="course name" value="<?php echo $arrdata['course name']; ?>"/>
		<br><br>
		Grade:<br><br>
		<input name="grade" value="<?php echo $arrdata['grade']; ?>"/>
		<br><br>
		<input type="submit" name="btn" value="submit">
	</form>
</center>

</body>
</html>