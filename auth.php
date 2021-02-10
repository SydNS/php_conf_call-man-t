<?php 
include_once('conn.php');
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


if (isset($_POST['signup_submit'])) {

    $uname=$_POST['uname'];
    $tel=$_POST['tel'];
    $residence=$_POST['residence'];
    $paswd=$_POST['pswd'];
    $paswd2=$_POST['pswd2'];

    if ($paswd!=$paswd2) {
        echo '<script>alert("Password dont Match")</script>';
        echo "window.open('index.php')";
          
    }else {
        
$query="select * from users_login_tb where username='$uname' and password='$paswd'";

$result=mysqli_query($conn,$query);

if (mysqli_num_rows($result)==1) {
   
    header("Location:adminpanel.php");

}else {
    echo "window.open('index.php')";
    header("Location:index.php");
    echo '<script>alert("Enter Correct Details")</script>';
        
}
        
    }


}

?>