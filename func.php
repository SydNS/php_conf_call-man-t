<?php 

$conn = mysqli_connect('localhost','root','','conference_db');

if (isset($_POST['login_submit'])) {

    $uname=$_POST['uname'];
    $paswd=$_POST['pswd'];


$query="select * from users_login_tb where username='$uname' and password='$paswd'";

$result=mysqli_query($conn,$query);

if (mysqli_num_rows($result)==1) {
   
    header("Location:adminpanel.php");
    echo '<script>alert("Enter Correct Details")</script>';

}else {
    echo "window.open('index.php')";
    header("Location:index.php");
    echo '<script>alert("Enter Correct Details")</script>';
        
}
}
?>