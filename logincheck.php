<?php

$con=new mysqli('localhost','root','','arogyamedi');

if($con->connect_errno)
{
       echo $con->connect_error;
       die();
}

if(isset($_POST['submit'])){
    if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['usertype'])){
        echo"<script>alert('Please fill all the feilds and try Again');</script>";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $usertype=$_POST['usertype'];
     
        if($username!="admin" || $password!="232329"){
            echo"<script>alert('incorrect admin login');</script>";
        }
        elseif ( $username!="recep" || $password!="232329") {
            echo"<script>alert('incorrect receptionist login');</script>";
        }

//connecting server
       
//selecting database
        //$db=mysquli_select_db($conn,"arogya_health_care");
//fetch information from server db
        $query=mysqli_query($con,"SELECT * FROM login WHERE user_name='$username' AND password='$password' AND user_type='$usertype'");
        while($row=mysqli_fetch_array($query)){
            $user=$row['user_name'];
            $pass=$row['password'];
            $type=$row['user_type'];
            if($usertype=="admin"){
                header('Location:ind.php');
                exit();
            }
            elseif ($usertype=="receptionist") {
                header('Location:rind.php');
                exit();
            }
            else{
                echo"<script>alert('invalid user type');</script>";
            }
        }
               
        mysqli_close($con);
    }
}

?>




