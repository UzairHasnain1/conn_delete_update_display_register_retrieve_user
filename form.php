<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<center>

<form method="post" id="my_form" action="process.php">
		<br>Institute name:<br><br>
		<input type="institute_name" name="institute_name">
		<br><br>
		<br>First name:<br><br>
		<input type="text" name="first_name">
		<br><br>
		Last name:<br><br>
		<input type="text" name="last_name">
		<br><br>
		Course_name:<br><br>
		<input type="Course_name" name="course_name">
		<br><br>
		Grade:<br><br>
		<input type="text" name="grade">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>

</center>


<script>
    const from = documentgetElementById('my_form');

    form.reset();
</script>


</body>
</html>