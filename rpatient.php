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
    <title>patient</title>
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
                    <a href="rind.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/homestuck.png"/></span>
                        <span class="title">dash board</span>
                    </a>
                </li>
                <li>
                    <a href="rward.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/hospital-room--v1.png"/></span>
                        <span class="title"> ward </span>
                    </a>
                </li>
                <li>
                    <a href="rstaff.php">
                        <span class="icon"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/undefined/external-staff-music-festival-flaticons-flat-flat-icons-2.png"/></span>
                        <span class="title"> staff</span>
                    </a>
                </li>
                <li>
                    <a href="rdoctor.php">
                        <span class="icon"><img src="https://img.icons8.com/color/40/undefined/doctor-male-skin-type-2.png"/></span>
                        <span class="title">doctor </span>
                    </a>
                </li>
                <li>
                    <a href="rnurse.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/nurse-female--v1.png"/></span>
                        <span class="title">nurse </span>
                    </a>
                </li>
                <li>
                    <a href="rpatient.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/patient-oxygen-mask.png"/></span>
                        <span class="title">patient </span>
                    </a>
                </li>
                <li>
                    <a href="rappoinment.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/planner.png"/></span>
                        <span class="title">appoinment </span>
                    </a>
                </li>
                <li>
                    <a href="rpayment.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/cash-in-hand.png"/></span>
                        <span class="title">payment </span>
                    </a>
                </li>
                
                <li>
                    <a href="ropp.php">
                        <span class="icon"><img src="https://img.icons8.com/color/48/undefined/hospital-room--v2.png"/></span>
                        <span class="title">operation theatre </span>
                    </a>
                </li>
                <li>
                    <a href="rroom.php">
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
        <h3>Patient</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-75">
          <div class="container1">
            <form action="patient.php" method="POST">
                <div class="heading"><h3>Patient<img src="https://img.icons8.com/color/48/undefined/patient-oxygen-mask.png"/></h3></div>
                
              <div class="row">
                <div class="col-50">
                  <label for="email">  Patient id</label>
                  <input type="text" id="email" name="pat_id" placeholder="Enter your id">
                  <label for="fname">Patient name</label>
                  <input type="text" id="fname" name="pat" placeholder="Enter your name">
                   <label for="adr"> Address</label>
                  <input type="text" id="adr" name="address" placeholder="Enter your address">
                  <label for="adr"> Age</label>
                  <input type="int" id="doc-type" name="age" placeholder="Enter your age">
              </div>
      
                <div class="col-50">
                  
                    <div class="col-50">
                        
                        <label for="fname"> T.P Number</label>
                        <input type="int" id="doc-type" name="tp_number" placeholder="contact number" >
                        <label for="email"> Blood group</label>
                        <select name="b_grp" id="doc-type"> 
                            <option ></option>
                            <option value="A">A</option>
                            <option value="B">B</option> 
                            <option value="-O">-O</option> 
                            <option value="+O">+O</option> 
                            <option value="+AB">+AB</option> 
                           
                            
                        </select>
                        
                         

                        <br>
    
                        <label for="adr"> Gender</label>
                        <input type="radio" id="adr"  value="male" name="gender" placeholder="542 W. 15th Street">Male
                        <input type="radio" id="adr" value="female" name="gender" placeholder="542 W. 15th Street">Female
                    </div>
                    <label for="fname"> Reason for admit</label>
                    <textarea  class="texta"  type="text" name="reason" id="" cols="30" rows="4"></textarea>
                </div>
             
      
              </div>
              <div>
                <input type="submit" name="submit"value="ADD" class="btn">
                <input type="submit" name="update"value="UPDATE" class="btn">
                <input type="submit" name="delete" value="DELETE" class="btn">
                <input type="submit" name="clear"value="CLEAR" class="btn">
              </div>
              
            </form>
            <?php  
              //insert query
                 if(isset($_POST['submit']))
                 {
                    $patient_id=$_POST['pat_id'];
                    $patient_name=$_POST['pat'];
                    $address=$_POST['address'];
                    $age=$_POST['age'];
                    $tp_number=$_POST['tp_number'];
                    $blood_group=$_POST['b_grp'];
                    $gender=$_POST['gender'];
                    $reason_for_admit=$_POST['reason'];
                    if($patient_id!="" &&$patient_name!="" &&$address!="" &&$age!="" &&$tp_number!="" &&$blood_group!="" &&$gender!=""  &&$reason_for_admit!="")
                    {
                    $sql="INSERT INTO patient(patient_id,patient_name,address,age,tp_number,blood_group,gender,reason_for_admit) VALUES('$patient_id','$patient_name',' $address','$age','$tp_number','$blood_group','$gender','$reason_for_admit')";
                    if($con->query($sql))
                    {
                        echo "<script>alert('You Have Successfully Add The Patient Record');</script>";
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
                            if($_POST['pat_id']!=null)
                            {
                                $patient_id=$_POST['pat_id'];
                                $sql="DELETE FROM patient WHERE patient_id='$patient_id'";
                                if($con->query($sql))
                                {
                                    echo "<script>alert('You Have Successfully Deleted The Patient Record');</script>";
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
                 if(isset($_POST['update']))
                 {  
                    $patient_id=$_POST['pat_id'];
                    $patient_name=$_POST['pat'];
                    $address=$_POST['address'];
                    $age=$_POST['age'];
                    $tp_number=$_POST['tp_number'];
                    $blood_group=$_POST['b_grp'];
                    $gender=$_POST['gender'];
                    $reason_for_admit=$_POST['reason'];
                    if($patient_id!="" &&$patient_name!="" &&$address!="" &&$age!="" &&$tp_number!="" &&$blood_group!="" &&$gender!=""  &&$reason_for_admit!="")
                    {
                    $sql="UPDATE patient SET patient_name='$patient_name',address='$address',age='$age',tp_number='$tp_number',blood_group='$blood_group',gender='$gender' WHERE patient_id='$patient_id'";
                    if($con->query($sql))
                    {
                        echo"<script>alert('You Have Successfully Updated The Patient Record');</script>";
                    }
                    else
                    {
                        echo"<script>alert('Update DataFaild');</script>";
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
                  <th scope="col"> Patient id</th>
                  <th scope="col">Patient name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Age</th>
                  <th scope="col">T.P Number</th>
                  <th scope="col">Blood group</th>
                  <th scope="col"> Gender</th>
                  <th scope="col">Reason for admit</th>
                </tr>
              </thead>
              <tbody class="tbody">
              <?php

                          
                  $result=mysqli_query($con,"SELECT * FROM patient");  //input table name
                  while($row=mysqli_fetch_array($result))
               {
               ?>
                <tr>
                    <th scope="row"><?php echo $row['patient_id']; ?></th>
                    <td><?php echo $row['patient_name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['tp_number']; ?></td>
                    <td><?php echo $row['blood_group']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['reason_for_admit']; ?></td>


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