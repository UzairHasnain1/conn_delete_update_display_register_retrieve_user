<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <style>

    table,thead,tr,th,td{
        border:2px solid black;
        background-color: bisque;
    }

    table{
        width:70%;
        text-align:center;
    }


    </style>



</head>
<body>


<center>

<table>
<thead>
<tr>
<th>INSTITUTE_NAME</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>COURSE_NAME</th>
<th>GRADE</th>

<th colspan=2>ACTION</th>
</tr>
</thead>

<tbody>

<?php

include 'newconn.php';

$selectquery = "  SELECT * from employee";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){

?>

<tr>
<td><?php echo $res['institute_name']; ?></td>
<td><?php echo $res['first_name']; ?></td>
<td><?php echo $res['last_name']; ?></td>
<td><?php echo $res['course_name']; ?></td>
<td><?php echo $res['grade']; ?></td>

<td><a href="update.php?institute_name=<?php echo $res['institute_name']; ?> first_name=<?php echo $res['first_name']; ?>&last_name=<?php echo $res['last_name']; ?>&course_name=<?php echo $res['course_name']; ?>&grade=<?php echo $res['grade']; ?>">Update</a></td>
<td><a href="delete.php?institute_name=<?php echo $res['institute_name']; ?> first_name=<?php echo $res['first_name']; ?>&last_name=<?php echo $res['last_name']; ?>&course_name=<?php echo $res['course_name']; ?>&grade=<?php echo $res['grade']; ?>">Delete</a></td>
<?php

}

?>

</tbody>

</table>
</center>



</body>
</html>