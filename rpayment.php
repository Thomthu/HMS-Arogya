<?php

$con=new mysqli('localhost','root','','arogyamedi');

if($con->connect_errno)
{
       echo $con->connect_error;
       die();
}
$selectpid=mysqli_query($con,"SELECT patient_id FROM patient");
$did=mysqli_query($con,"SELECT doctor_id  FROM doctor");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    
    <link rel="stylesheet" href="trails.css">
    <link rel="stylesheet" href="tab.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#mcharge,#rcharge,#dcharge").keyup(function(){
                var total=0;
                var a=Number($("#mcharge").val());
                var b=Number($("#rcharge").val());//code to calculate total payment
                var c=Number($("#dcharge").val());
                var total=a+b+c;
                $("#tot").val(total);
                });
            });
            
        </script>
    
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
    
    
        </div>
    
    </div>
</div>
<div class="row">
    <div class="col-75">
      <div class="container1">
        <form action="payment.php" method="POST">
            <div class="heading"><h3>Payment<img class="pay"src="https://img.icons8.com/color/48/undefined/cash-in-hand.png"/></h3></div>
            
          <div class="row">
            <div class="col-50">
              
              <label for="fname">Payment id</label>
              <input type="text" id="fname" name="pay_id" placeholder="Payment id">
              <label for="email"> Doctor id</label>
              <select class="" name="doc_id" id="doc-type">
                  <option value=""></option>
                <?php
                    while($row=mysqli_fetch_array($did))
                {
                ?>
                  <option value="<?php echo $row['doctor_id']; ?>"><?php echo $row['doctor_id']; ?></option>
                <?php
                }
                ?>
              </select>
              <br>
              <br>
             
              <label for="email">Patient id </label>
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
             
              <label for="fname">  Time</label>
              <input type="time" id="date" name="time" placeholder="contact number" >
              <label for="fname"> Date</label>
              <input type="date" id="date" name="date" placeholder="N.I.C.NO" >
              
           
          </div>
  
            <div class="col-50">
              
                <div class="col-50">
                    <label for="adr">Medicine charge</label>
                    <input type="text" id="mcharge" name="m_charge" placeholder="medicine charge">

                    <label for="fname"> Room charge</label>
                    <input type="text" id="rcharge" name="r_charge" placeholder="room charge" >
                    <label for="fname"> Doctor charge</label>
                    <input type="text" id="dcharge" name="d_charge" placeholder="doctor charge" >
                 
                
                
               
                <label for="adr">Total</label>
               <input type="text" id="tot" name="total" placeholder="Total">

            
 
                </div>
            </div>
  
          </div>
          <div>
            <input type="submit" name="submit" value="ADD" class="btn">
            <input type="submit" name="update" value="UPDATE"class="btn">
            <input type="submit" name="delete" value="DELETE"class="btn">
            <input type="submit" name="clear" value="CLEAR"class="btn">
          </div>
          
        </form>
        <?php  
              //insert query
                 if(isset($_POST['submit']))
                 {
                    $payment_id=$_POST['pay_id'];
                    $doctor_id=$_POST['doc_id'];
                    $patient_id=$_POST['pat_id'];
                    $time=$_POST['time'];
                    $date=$_POST['date'];
                    $medicine_charge=$_POST['m_charge'];
                    $room_charge=$_POST['r_charge'];
                    $doctor_charge=$_POST['d_charge'];
                    $total=$_POST['total'];
                    if($payment_id!="" &&$doctor_id!="" &&$patient_id!="" &&$time!="" &&$date!="" &&$medicine_charge!="" &&$room_charge!=""  &&$doctor_charge!="" &&$total!="" )
                    {
                    $sql="INSERT INTO payment(payment_id,doctor_id,patient_id,time,date,medicine_charge,room_charge,doctor_charge,total) VALUES('$payment_id','$doctor_id',' $patient_id','$time','$date','$medicine_charge','$room_charge','$doctor_charge','$total')";
                    if($con->query($sql))
                    {
                        echo "<script>alert('You Have Successfully Add The Payment Record');</script>";
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
                            if($_POST['pay_id']!=null)
                            {
                                $payment_id=$_POST['pay_id'];
                                $sql="DELETE FROM payment WHERE payment_id='$payment_id'";
                                if($con->query($sql))
                                {
                                    echo "<script>alert('You Have Successfully Deleted The Payment Record');</script>";
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
                 if(isset($_POST['update']))          //update query
                 {  
                    $payment_id=$_POST['pay_id'];
                    $doctor_id=$_POST['doc_id'];
                    $patient_id=$_POST['pat_id'];
                    $time=$_POST['time'];
                    $date=$_POST['date'];
                    $medicine_charge=$_POST['m_charge'];
                    $room_charge=$_POST['r_charge'];
                    $doctor_charge=$_POST['d_charge'];
                    $total=$_POST['total'];
                    if($payment_id!="" &&$doctor_id!="" &&$patient_id!="" &&$time!="" &&$date!="" &&$medicine_charge!="" &&$room_charge!=""  &&$doctor_charge!="" &&$total!="" )
                    {
                    $sql="UPDATE payment SET doctor_id='$doctor_id',patient_id='$patient_id',time='$time',date='$date',medicine_charge='$medicine_charge',room_charge='$room_charge',doctor_charge='$doctor_charge',total='$total' WHERE payment_id='$payment_id'";
                    if($con->query($sql))
                    {
                        echo"<script>alert('You Have Successfully Updated The Payment Record');</script>";
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
              <th scope="col"> Payment id</th>
              <th scope="col">Doctor id </th>
              <th scope="col">Patient id</th>
              <th scope="col">Time</th>
              <th scope="col">Date</th>
              <th scope="col">Medicine charge</th>
              <th scope="col"> Room charge</th>
              <th scope="col">Doctor charge</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody class="tbody">
          <?php

                          
             $result=mysqli_query($con,"SELECT * FROM payment");  //input table name
             while($row=mysqli_fetch_array($result))
            {
           ?>
           <tr>
            <th scope="row"><?php echo $row['payment_id']; ?></th>
            <td><?php echo $row['doctor_id']; ?></td>
            <td><?php echo $row['patient_id']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['medicine_charge']; ?></td>
            <td><?php echo $row['room_charge']; ?></td>
            <td><?php echo $row['doctor_charge']; ?></td>
            <td><?php echo $row['total']; ?></td>


           </tr>	
           <?php
            }
           ?>              
          

          </tbody>
        </table>
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