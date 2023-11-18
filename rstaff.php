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
    <title>staff</title>
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
        <h3>Staff</h3>
        </div>
    </div>
   
        </div>
        <div class="apptable">
          <table class="table" border="2">
              <thead class="head">
                <tr>
                  <th scope="col">Staff id</th>
                  <th scope="col">Staff name</th>
                  <th scope="col"> Email</th>
                  <th scope="col"> T.P Number</th>
                  <th scope="col"> Job role</th>
                  <th scope="col"> Gender</th>
                </tr>
              </thead>
              <tbody class="tbody">
              <?php

                          
                $result=mysqli_query($con,"SELECT * FROM staff");  //input table name
                while($row=mysqli_fetch_array($result))
               {
               ?>
               <tr>
               <th scope="row"><?php echo $row['staff_id']; ?></th>
               <td><?php echo $row['staff_name']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['tp_number']; ?></td>
               <td><?php echo $row['job_role']; ?></td>
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