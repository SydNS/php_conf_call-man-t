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
mysqli_close($conn);
}


if (isset($_POST['signup_submit'])) {

    $uname=$_POST['uname'];
    $tel=$_POST['tel'];
    $residence=$_POST['residence'];
    $paswd=$_POST['pswd'];
    $paswd2=$_POST['pswd2'];

    if ($paswd!=$paswd2) {
        
        echo '<script>alert("Passwords dont Match")</script>';
        
        header("Location:signup.php");
            
          
    }else {
        

        $sql = "INSERT INTO `user_details` (`id`, `username`, `password`, `telephone`, `class`, `school`, `residence`) VALUES (NULL, 'syd nsiimbe', 'sydney', '0701234567', 'p8', 'Kps', 'Kla');";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        
    }


}

?>