<?php 
$sname=$_REQUEST['student name'];
$dob=$_REQUEST['date of birth'];
$rlgn=$_REQUEST['religion'];
$gender=$_REQUEST['gender'];
$ntionlty=$_REQUEST['nationality'];
$stage=$_REQUEST['stage'];
$add=$_REQUEST['address'];
$fname=$_REQUEST['father name'];
$mname=$_REQUEST['mother name'];
$apnt=$_REQUEST['apnt'];


if(isset($_POST['btn']))
{
$host="localhost";
$user="root";
$password="";
$bd="family_school";

    $conn= mysqli_connect ($host,$user,$password,$db);

    $insert= "insert into student_data values('$sname','$dob','$rlgn','$gender','$ntionlty','$stage','$add','$fname','$mname','$apnt')";

    mysqli_query($conn, $insert);
    
    if($conn){
        echo("<h1 style='color:green;'> You have registered successfully!</h1>");
    }
    else{
        echo("<h1 style='color:red;'> You have not registered yet!</h1>");

    }
}
?>