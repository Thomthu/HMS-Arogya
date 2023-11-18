<?php

$con=new mysqli('localhost','root','','arogyamedi');

if($con->connect_errno)
{
       echo $con->connect_error;
       die();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor</title>
    <link rel="stylesheet" href="trails.css">
    <link rel="stylesheet" href="tab.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/40/undefined/external-heart-health-care-and-medical-flatart-icons-flat-flatarticons.png"/></span>
                        <span class="title"> <span>A</span>rogya <span>M</span>edi <span>C</span>are</span>
                    </a>
                </li>
                <li>
                    <a href="ind.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/homestuck.png"/></span>
                        <span class="title">dash board</span>
                    </a>
                </li>
                <li>
                    <a href="ward.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/hospital-room--v1.png"/></span>
                        <span class="title"> ward </span>
                    </a>
                </li>
                <li>
                    <a href="staff.php">
                        <span class="icon"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/undefined/external-staff-music-festival-flaticons-flat-flat-icons-2.png"/></span>
                        <span class="title"> staff</span>
                    </a>
                </li>
                <li>
                    <a href="doctor.php">
                        <span class="icon"><img src="https://img.icons8.com/color/40/undefined/doctor-male-skin-type-2.png"/></span>
                        <span class="title">doctor </span>
                    </a>
                </li>
                <li>
                    <a href="nurse.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/nurse-female--v1.png"/></span>
                        <span class="title">nurse </span>
                    </a>
                </li>
                <li>
                    <a href="patient.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/patient-oxygen-mask.png"/></span>
                        <span class="title">patient </span>
                    </a>
                </li>
                <li>
                    <a href="appoinment.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/planner.png"/></span>
                        <span class="title">appoinment </span>
                    </a>
                </li>
                <li>
                    <a href="payment.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/cash-in-hand.png"/></span>
                        <span class="title">payment </span>
                    </a>
                </li>
                <li>
                    <a href="users.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/group.png"/></span>
                        <span class="title">users </span>
                    </a>
                </li>
                <li>
                    <a href="operation theatre.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/hospital-room--v2.png"/></span>
                        <span class="title">operation theatre </span>
                    </a>
                </li>
                <li>
                    <a href="room.php">
                        <span class="icon"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/40/undefined/external-room-plastic-surgery-flaticons-flat-flat-icons.png"/></span>
                        <span class="title">room </span>
                    </a>
                </li>
                
                <li>
                    <a href="login.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/exit.png"/></span>
                        <span class="title">log out </span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <!--main-->
    <div class="main">
        
        <div class="topbar">
            <div class="toggle"> 
                <img src="https://img.icons8.com/ios-filled/50/undefined/menu--v1.png"/>
            </div>
         <!--search-->
         <div class="Search">
            <label >
                <input type="text" placeholder="Search here">
                <img src="https://img.icons8.com/ios-filled/40/undefined/search--v1.png"/>  
            </label>
        </div>

        <!--userimg-->
        <div class="user">
            <img src="img/usr.jpg">
        </div>
        <h3>Doctor</h3>
    </div>
 </div>
 <div class="row">
    <div class="col-75">
      <div class="container1">
        <form action="doctor.php" method="POST">
            <div class="heading"><h3>Doctor<img src="https://img.icons8.com/color/40/undefined/doctor-male-skin-type-2.png"/></h3></div>
            
          <div class="row">
            <div class="col-50">
              <label for="email"> Doctor id</label>
              <input type="text" id="email" name="doc_id" placeholder="Enter your id">
              <label for="fname">Doctor name</label>
              <input type="text" id="fname" name="doc_name" placeholder="Enter your name">
              <label for="adr"> Address</label>
              <input type="text" id="adr" name="address" placeholder="Enter your address">
              <label for="adr"> Email</label>
              <input type="text" id="adr" name="email" placeholder="Enter your email">
          </div>
  
            <div class="col-50">
              
                <div class="col-50">
                    <!--text change to num problem--> 
                    <label for="fname"> T.P Number</label>
                    <input type="text" id="tp" name="tp_number" placeholder="contact number" >
                    <label for="email"> Doctor type</label>
                    <select name="doc_type" id="doc-type"> 
                    <option ></option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Dentist">Dentist</option> 
                        <option value="Eye-surgeon">Eye-surgeon</option> 
                        <option value="Neurologist">Neurologist</option> 
                        <option value="OPD">OPD</option> 
                        <option value="Phychiatrist">Phychiatrist</option> 
                        
                    </select>
                    <br>
                    <br>
                    <br>

                    <label for="adr"> Gender</label> <!--name check-->
                    <input type="radio" id="adr"  value="male"name="gender" placeholder="542 W. 15th Street">Male
                    <input type="radio" id="adr" value="female"name="gender" placeholder="542 W. 15th Street">Female
                </div>
            </div>
  
          </div>
          <div>
            <input type="submit"  name="submit" value="ADD" class="btn">
            <input type="submit" name="update" value="UPDATE" class="btn">
            <input type="submit" name="delete" value="DELETE" class="btn">
            <input type="submit" name="clear"value="CLEAR" class="btn">
          </div>
          
        </form>
        <?php  
              //insert query
                 if(isset($_POST['submit']))
                 {
                    $doctor_id=$_POST['doc_id'];
                    $doctor_name=$_POST['doc_name'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $tp_number=$_POST['tp_number'];
                    $doctor_type=$_POST['doc_type'];
                    $gender=$_POST['gender'];
                    if($doctor_id!="" &&$doctor_name!="" &&$address!="" &&$email!="" &&$tp_number!="" &&$doctor_type!="" &&$gender!="" )
                    {
                    $sql="INSERT INTO doctor(doctor_id,doctor_name,address,email,tp_number,doctor_type,gender) VALUES(' $doctor_id','$doctor_name',' $address','$email',' $tp_number','$doctor_type','$gender')";
                    if($con->query($sql))
                    {
                        echo "<script>alert('You Have Successfully Add The Doctor Record');</script>";
                    }
                    else
                    {
                        echo"<script>alert('Add Data Failed');</script>";
                    }
                    }
                    else
                    {
                        echo"<script>alert('All Fields Required');</script>";
                    }

                    }
                
     
            ?>
             <?php
                        //delete query
                        
                        if(isset($_POST['delete']))
                        {
                            if($_POST['doc_id']!=null)
                            {
                                $doctor_id=$_POST['doc_id'];
                                $sql="DELETE FROM doctor WHERE doctor_id='$doctor_id'";
                                if($con->query($sql))
                                {
                                    echo "<script>alert('You Have Successfully Deleted The Doctor Record');</script>";
                                }
                                else
                                {
                                    echo"<script>alert('Delete Data Faild');</script>";
                                }
                                
                                }
                                 else
                                {
                                    echo"<script>alert('All Fields Required');</script>";
                                }
                            
                                                 
                        }
                        ?>
            
                                <!--update query-->
                                <?php
                 if(isset($_POST['update']))
                 {  
                    $doctor_id=$_POST['doc_id'];
                    $doctor_name=$_POST['doc_name'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $tp_number=$_POST['tp_number'];
                    $doctor_type=$_POST['doc_type'];
                    $gender=$_POST['gender'];
                    if($doctor_id!="" && $doctor_name!="" && $address!="" && $email!="" && $tp_number!="" && $doctor_type!=""  && $gender!="")
                    {
                    $sql="UPDATE doctor SET doctor_name='$doctor_name',address='$address',email='$email',tp_number='$tp_number',doctor_type='$doctor_type',gender='$gender' WHERE doctor_id='$doctor_id'";
                    if($con->query($sql))
                    {
                        echo"<script>alert('You Have Successfully Updated The Doctor Record');</script>";
                    }
                    else
                    {
                        echo"<script>alert('Update Data Faild');</script>";
                    }
                    }
                    else
                    {
                        echo"<script>alert('All Fields Required');</script>";
                    }

                 }

                 
            ?>
           
            
    </div>
    <div class="apptable">
      <table class="table" border="2">
          <thead class="head">
            <tr>
              <th scope="col">Doctor id</th>
              <th scope="col">Doctor name</th>
              <th scope="col">Address</th>
              <th scope="col">Email</th>
              <th scope="col">T.P Number</th>
              <th scope="col">Doctor type</th>
              <th scope="col">Gender</th>
            </tr>
          </thead>
          <tbody class="tbody">
          
     <?php

                          
          $result=mysqli_query($con,"SELECT * FROM doctor");  //input table name
          while($row=mysqli_fetch_array($result))
         {
      ?>
          <tr>
              <th scope="row"><?php echo $row['doctor_id']; ?></th>
              <td><?php echo $row['doctor_name']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['tp_number']; ?></td>
              <td><?php echo $row['doctor_type']; ?></td>
              <td><?php echo $row['gender']; ?></td>
              

          </tr>	
       <?php
        }
    ?>                
                 
             
            
          

          </tbody>
        </table>
    </div>
      </div>
    </div>

</div>

 

    <script>
            //menuToggle
      let toggle =document.querySelector('.toggle');
      let navigation =document.querySelector('.navigation');
      let main =document.querySelector('.main');

     toggle.onclick = function(){
         navigation.classList.toggle('active');
         main.classList.toggle('active');
     }

              //add hovered class in selected list item
      let list = document.querySelectAll('.navigation li');
      function activeLink(){
          list.forEach((item)=>
          item.classList.remove('hovered'));
          this.classList.add('hovered');
      }
      list.forEach((item) =>
      item.addEventListener('mouseover',activeLink));
    </script>
    
</body>
</html>