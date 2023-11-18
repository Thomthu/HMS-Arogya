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
    <title>room</title>
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
        <h3>Room</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-75">
          <div class="container1">
            <form action="room.php" method="POST">
                <div class="heading"><h3>Room<img src="https://img.icons8.com/external-flaticons-flat-flat-icons/40/undefined/external-room-plastic-surgery-flaticons-flat-flat-icons.png"/></h3></div>
                
              <div class="row">
                <div class="col-50">
                  <label for="email">  Room id</label>
                  <input type="text" id="email" name="r_id" placeholder="room id">
                  <label for="fname">Room name</label>
                  <input type="text" id="fname" name="r_name" placeholder="room name">
                  <label for="adr"> Start date</label>
                  <input type="date" id="date" name="s_date" placeholder="Enter your address">
                  
              </div>
      
                <div class="col-50">
                  
                    <div class="col-50">
                        
                        <label for="email"> Room type</label>
                        <select name="r_type" id="doc-type"> 
                            <option ></option>
                            <option value="ac"  >AC</option>
                            <option value="non/ac" >Non AC</option> 
                            
                        </select>
                        <br>
                        <br>
                       
                        <label for="email">patient_id</label>
                        <select class="" name="pat_id" id="doc-type">
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
                        <label for="adr"> End date</label>
                        <input type="date" id="date" name="e_date" placeholder="Enter your address">
                        
                    </div>
                </div>
      
              </div>
              <div>
                <input type="submit"  name="submit" value="ADD" class="btn">
                <input type="submit" name="update" value="UPDATE" class="btn">
                <input type="submit" name="delete" value="DELETE" class="btn">
                <input type="submit" name="clear" value="CLEAR" class="btn">
              </div>
              
            </form>
            <?php  
              //insert query
                 if(isset($_POST['submit']))
                 {
                    $room_id=$_POST['r_id'];
                    $room_name=$_POST['r_name'];
                    $start_date=$_POST['s_date'];
                    $room_type=$_POST['r_type'];
                    $patient_id=$_POST['pat_id'];
                    $end_date=$_POST['e_date'];
                    if($room_id!="" &&$room_name!="" &&$start_date!="" &&$room_type!="" &&$patient_id!="" &&$end_date!="" )
                    {
                    $sql="INSERT INTO room(room_id,room_name,start_date,room_type,patient_id,end_date) VALUES('$room_id','$room_name',' $start_date','$room_type','$patient_id','$end_date')";
                    if($con->query($sql))
                    {
                        echo "<script>alert('You Have Successfully Add The Room Record');</script>";
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
                            if($_POST['r_id']!=null)
                            {
                                $room_id=$_POST['r_id'];
                                $sql="DELETE FROM room WHERE room_id='$room_id'";
                                if($con->query($sql))
                                {
                                    echo "<script>alert('You Have Successfully Deleted The Room Record');</script>";
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
                    $room_id=$_POST['r_id'];
                    $room_name=$_POST['r_name'];
                    $start_date=$_POST['s_date'];
                    $room_type=$_POST['r_type'];
                    $patient_id=$_POST['pat_id'];
                    $end_date=$_POST['e_date'];
                    if($room_id!="" &&$room_name!="" &&$start_date!="" &&$room_type!="" &&$patient_id!="" &&$end_date!="" )
                    {
                    $sql="UPDATE room SET room_name='$room_name',start_date='$start_date',room_type='$room_type',patient_id='$patient_id',end_date='$end_date' WHERE room_id='$room_id'";
                    if($con->query($sql))
                    {
                        echo"<script>alert('You Have Successfully Updated The Room Record');</script>";
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
                  <th scope="col"> Room id</th>
                  <th scope="col"> Room name</th>
                  <th scope="col"> Start date</th>
                  <th scope="col"> Room type</th>
                  <th scope="col"> patient id</th>
                  <th scope="col"> End date</th>
                  
                </tr>
              </thead>
              <tbody class="tbody">
                <?php

                          
                       $result=mysqli_query($con,"SELECT * FROM room ");  //input table name
                       while($row=mysqli_fetch_array($result))
                 {
                 ?>
                   <tr>
                       <th scope="row"><?php echo $row['room_id']; ?></th>
                       <td><?php echo $row['room_name']; ?></td>
                       <td><?php echo $row['start_date']; ?></td>
                       <td><?php echo $row['room_type']; ?></td>
                       <td><?php echo $row['patient_id']; ?></td>
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