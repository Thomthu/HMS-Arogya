<?php

$con=new mysqli('localhost','root','','arogyamedi');

if($con->connect_errno)
{
       echo $con->connect_error;
       die();
}
$selectpid=mysqli_query($con,"SELECT patient_id FROM patient");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ward</title>
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
        <h3>Ward</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-75">
          <div class="container1">
            <form action="ward.php" method="POST">
                <div class="heading"><h3>Ward<img src="https://img.icons8.com/color/48/undefined/hospital-room--v1.png"/></h3></div>
                
              <div class="row">
                <div class="col-50">
                  
                  <label for="fname">Ward id</label>
                  <input type="text" id="fname" name="w_id" placeholder="ward id">
                  <label for="email">Patient_id</label>
                   <select class="" name="pat" id="doc-type">
                    <option value=""></option>
                     <?php
                          while($row=mysqli_fetch_array($selectpid))
                     {
                     ?>
                                         
                     <option value="<?php echo $row['patient_id']; ?>"><?php echo $row['patient_id']; ?></option>
                     <?php
                     }
                     ?>
                    </select>
                  <br>
                  <br>
                  <label for="adr"> No.of.beds</label>
                  <input type="int" id="doc-type" name="nob" placeholder="No.of.beds">
                  
              </div>
      
                <div class="col-50">
                  
                    <div class="col-50">
                        
                        
                        <label for="email"> Block name</label>
                        <select name="b_name" id="doc-type"> 
                            <option ></option> 
                            <option value="A">A</option>
                            <option value="B">B</option> 
                            <option value="C">C</option> 
                            <option value="D">D</option> 
                            <option value="E">E</option> 
                            
                        </select>
            
                    </div>
                    <br>
                    <label for="adr"> Start date</label>
                    <input type="date" id="date" name="s_date" placeholder="Enter your address">
                    <label for="adr"> End date</label>
                    <input type="date" id="date" name="e_date" placeholder="Enter your address">
                </div>
      
              </div>
              <div>
                <input type="submit" name="submit" value="ADD" class="btn">
                <input type="submit" name="update"value="UPDATE" class="btn">
                <input type="submit" name="delete"value="DELETE" class="btn">
                <input type="reset" value="CLEAR" class="btn">
              </div>
              
            </form>
            <?php  
              //insert query
                 if(isset($_POST['submit']))
                 {
                    $ward_id=$_POST['w_id'];
                    $patient_id=$_POST['pat'];
                    $no_of_beds=$_POST['nob'];
                    $block_name=$_POST['b_name'];
                    $start_date=$_POST['s_date'];
                    $end_date=$_POST['e_date'];
                    if($ward_id!="" &&$patient_id!="" &&$no_of_beds!="" &&$block_name!="" &&$start_date!="" &&$end_date!="" )
                    {
                    $sql="INSERT INTO ward(ward_id,patient_id,no_of_beds,block_name,start_date,end_date) VALUES('$ward_id','$patient_id',' $no_of_beds','$block_name','$start_date','$end_date')";
                    if($con->query($sql))
                    {
                        echo "<script>alert('You Have Successfully Add The Ward Record');</script>";
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
                            if($_POST['w_id']!=null)
                            {
                                $ward_id=$_POST['w_id'];
                                $sql="DELETE FROM ward WHERE ward_id='$ward_id'";
                                if($con->query($sql))
                                {
                                    echo "<script>alert('You Have Successfully Deleted The Ward Record');</script>";
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
            <?php
                 if(isset($_POST['update'])) //update
                 {  
                    $ward_id=$_POST['w_id'];
                    $patient_id=$_POST['pat'];
                    $no_of_beds=$_POST['nob'];
                    $block_name=$_POST['b_name'];
                    $start_date=$_POST['s_date'];
                    $end_date=$_POST['e_date'];
                    if($ward_id!="" &&$patient_id!="" &&$no_of_beds!="" &&$block_name!="" &&$start_date!="" &&$end_date!="" )
                    {
                    $sql="UPDATE ward SET patient_id='$patient_id',no_of_beds='$no_of_beds',block_name='$block_name',start_date='$start_date',end_date='$end_date' WHERE ward_id='$ward_id'";
                    if($con->query($sql))
                    {
                        echo"<script>alert('You Have Successfully Updated The Ward Record');</script>";
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
                  <th scope="col">Ward id</th>
                  <th scope="col">Patient id</th>
                  <th scope="col">No.of.beds</th>
                  <th scope="col">Block name</th>
                  <th scope="col"> Start date</th>
                  <th scope="col">End date</th>
                </tr>
              </thead>
              <tbody class="tbody">
              <?php

                          
                $result=mysqli_query($con,"SELECT * FROM ward");  //input table name
                while($row=mysqli_fetch_array($result))
              {
              ?>
              <tr>
                  <th scope="row"><?php echo $row['ward_id']; ?></th>
                  <td><?php echo $row['patient_id']; ?></td>
                  <td><?php echo $row['no_of_beds']; ?></td>
                  <td><?php echo $row['block_name']; ?></td>
                  <td><?php echo $row['start_date']; ?></td>
                  <td><?php echo $row['end_date']; ?></td>

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