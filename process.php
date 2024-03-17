<?php
include_once 'conn.php';
if(isset($_POST['save']))
{
    $first_name = $_POST['institute_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Email = $_POST['course_name'];
    $city_name = $_POST['grade'];

    $sql = "INSERT INTO record (first_name,last_name,Email,city_name)
    VALUES ('$first_name','$last_name','$city_name','$Email')";
    if(mysqli_query($conn,$sql))  {
        // echo "New record created  successfully !";
        header('location:show.php');
    }

}




?>