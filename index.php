<!DOCTYPE html>
<html lang="en">
<head>
	<title>DH | KANGPOKPI</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
<meta charset="utf-8">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome (Must be included after Bootstrap CSS for proper styling) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- jQuery (Should be loaded before Bootstrap JS for potential dependencies) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 JS (Includes Popper.js, required for dropdowns and tooltips) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>

body {
    font-size:13px;
}
/* header part start */
.header {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Push clock to the right */
    background-color: #fff;
    padding: 10px 20px;
    height: 80px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    white-space: nowrap; /* Prevents text from wrapping */
}

.left {
    display: flex;
    align-items: center;
}

.logo img {
    height: 80px;
    width: 80px;
    margin-right: 10px;
}

.title {
    font-weight: bold;
    font-size: 13px;
    white-space: nowrap; /* Ensures it stays in one line */
   
}
.navbar-nav .dropdown-menu {
            display: none;
        }
        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
        }
.custom-navbar {
    background-color:#2ecc71; /* Dark background */
}
.custom-navbar .navbar-nav .nav-link {
    color: white !important; /* Change text color */
}

.dropdown-menu {
    right: 0 !important; /* Aligns dropdown within navbar */
    left: auto !important;
    min-width: 150px; /* Adjust width if needed */
    max-width: 90vw; /* Prevents it from overflowing screen width */
    white-space: nowrap; /* Prevents wrapping issues */
}












/* header part end */

/* menu-bar start */
/* Main menu bar styling */
.menu-bar {
    background: #9BDF50;
    height: 30px;
    width: 100%;
}

/* Hide menu icon */
.menu-bar ul .icon {
    display: none;
}

/* Menu list styling */
.menu-bar ul {
    display: inline-flex;
    list-style: none;
    color: brown;
    text-align: center;
    height: 30px;
    cursor: pointer;
    line-height: 30px;
}

.menu-bar ul li {
    width: 140px;
    border: 1px solid #9BDF50;
}

.menu-bar ul li:hover {
    background: white;
    border: 1px solid #9BDF50;
    color: black;
    border-radius: 2px;
}

/* Menu links */
.menu-bar a {
    color: brown;
    text-decoration: none;
}

.menu-bar ul li a:hover {
    color: black;
}

/* Hide submenus by default */
.sub-menu-1,
.sub-menu-2,
.sub-menu-3,
.sub-menu-4 {
    display: none;
}

/* Remove default padding & margin from submenus */
.sub-menu-1 ul,
.sub-menu-2 ul,
.sub-menu-3 ul,
.sub-menu-4 ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

/* Submenu item styling */
.sub-menu-1 ul li,
.sub-menu-2 ul li,
.sub-menu-3 ul li,
.sub-menu-4 ul li {
    width: 138px;
    text-align: center;
}

/* Submenu display on hover */
.menu-bar ul li:hover .sub-menu-1,
.menu-bar ul li:hover .sub-menu-2,
.menu-bar ul li:hover .sub-menu-3,
.menu-bar ul li:hover .sub-menu-4 {
    display: block;
    position: absolute;
    background: transparent;
    margin-top: -2px;
    width: 140px;
    text-align: center;
    z-index: 1;
}

.menu-bar ul li:hover .sub-menu-1 { height: 30px; }
.menu-bar ul li:hover .sub-menu-2 { height: 258px; }
.menu-bar ul li:hover .sub-menu-3 { height: 220px; }
.menu-bar ul li:hover .sub-menu-4 { height: 127px; }

/* Display submenu list items on hover */
.menu-bar ul li:hover .sub-menu-1 ul,
.menu-bar ul li:hover .sub-menu-2 ul,
.menu-bar ul li:hover .sub-menu-3 ul,
.menu-bar ul li:hover .sub-menu-4 ul {
    display: block;
    cursor: pointer;
}

/* Submenu list item styling */
.menu-bar ul li:hover .sub-menu-1 ul li,
.menu-bar ul li:hover .sub-menu-2 ul li,
.menu-bar ul li:hover .sub-menu-3 ul li,
.menu-bar ul li:hover .sub-menu-4 ul li {
    width: 138px;
    border-radius: 0;
    text-align: center;
    border: 1px dotted white;
}

.btn {
    display: inline-block;
    padding: 2px 4px;
    background-color: #007bff; /* blue background */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    font-size: 13px;
}
.btn-green {
    background: #82e0aa ;
}
.btn-dgreen{
    background: #45b39d;
}
.btn-blue{
    background:#5dade2;
}


.btn-green:hover,.btn-blue:hover,.btn-dgreen:hover {
    background:white;
    border:1px solid green;
}








.over {
    background-image:url(digital-tool.jpg);
    background-size:cover;
    background-position:center;
   
  
}






.container{
    width:100%;
    margin:auto;
    flex-wrap: wrap;
    justify-content:space-around;
    display:flex;
   
}
.training-items {
    flex-basis: 20%;
    margin: 20px 10px;
    padding: 20px;
    background: white;
    box-shadow: 0px 0px 10px 3px lightgray;
    
    /* Center content inside */
    display: flex;  
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center horizontally */
    text-align: center; /* Center text (if needed) */
}

.training-items1 {
    flex-basis:23%;
    margin:20px 10px;
    text-align:center;
    padding:20px 20px;
    background:white;
    box-shadow:0px 0px 10px 3px lightgray
}
 .custom-container {
        max-width: 1200px; /* Increase this value to make the container wider */
    }

  table {
       
        border-collapse: collapse;
        width: 100%;
        
    }

    td {
        border: 1px solid lightgrey;
        text-align: left;
       

    }

    th {
        border: 1px solid lightgrey;
        text-align: center;
      
        background-color: lightgreen;
        font-weight: normal;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
   z-index: 1;
}

.sticky + .content {
  padding-top: 60px;
}
#contact {
    min-height: 100vh; /* Makes the section at least as tall as the screen */
    padding: 50px 20px; /* Adjust as needed */
}
#services {
    min-height: 100vh; /* Makes the section at least as tall as the screen */
    padding: 50px 20px; /* Adjust as needed */
}
#hospital {
    min-height: 100vh; /* Makes the section at least as tall as the screen */
    padding: 50px 20px; /* Adjust as needed */
}

/* Responsive styles for screens less than 600px wide */
@media screen and (max-width: 600px) {
    .menu-bar :not(:first-child) {
        display: none;
    }
    .menu-bar ul .icon {
        display: block;
        text-align: right;
        position: absolute;
        right: 5px;
    }
}

/* Styles when the "responsive" class is added */
@media screen and (max-width: 600px) {
    .menu-bar.responsive :not(:first-child) {
        display: block;
    }
    .menu-bar.responsive ul {
        position: relative;
        display: flex;
        flex-direction: column;
        text-align: left;
        text-indent: 10px;
    }
    .menu-bar.responsive {
        padding: 5px;
        background: #9BDF50;
        text-align: left;
        height: 30px;
        width: 100%;
    }
    .menu-bar.responsive ul li:hover .sub-menu-1,
    .menu-bar.responsive ul li:hover .sub-menu-2 {
        display: block;
        position: relative;
        background: #9BDF50;
        height: auto;
        width: auto;
        text-align: left;
        z-index: 1;
    }
    .menu-bar.responsive ul li:hover .sub-menu-2 {
        width: 120px;
        color: white;
    }
}

/* Additional responsive styles for small screens */
@media only screen and (min-width: 200px) and (max-width: 600px) {
    .container {
        width: 100%;
        flex-direction: column;
    }
    .training-items {
        margin: 10px;
    }
}

/* Responsive utility class */
.responsive {
    width: 100%;
    height: auto;
}


</style>
</head>
<body>
<div  id="home" >    


 <div class="header">
    <div class="left">
        <div class="logo">
            <img src="/chc/admin/template/assets/img/logo/nrhmlogo.png" alt="NRHM Logo">
        </div>
        <div class="title">DISTRICT HOSPITAL Kangpokpi</div>
    </div>
    <div class="clock">
        <div id="clockbox"></div>
    </div>
</div>


</div>
 <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#hospital">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="outpatient.php">Outpatient Services</a></li>
                            <li><a class="dropdown-item" href="inpatient.php">Inpatient Services</a></li>
                            <li><a class="dropdown-item" href="emergency.php">Emergency Care</a></li>
                            <li><a class="dropdown-item" href="diagnostics.php">Diagnostics & Lab Tests</a></li>
                            <li><a class="dropdown-item" href="maternity.php">Maternity & Childcare</a></li>
                            <li><a class="dropdown-item" href="pharmacy.php">Pharmacy</a></li>
                            <li><a class="dropdown-item" href="surgery.php">Surgical Procedures</a></li>
                            <li><a class="dropdown-item" href="specialist.php">Specialist Consultations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="departmentDropdown" role="button" data-bs-toggle="dropdown">Department</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="surgery.php">Surgery</a></li>
                            <li><a class="dropdown-item" href="medicine.php">Medicine</a></li>
                            <li><a class="dropdown-item" href="ent.php">ENT</a></li>
                            <li><a class="dropdown-item" href="general.php">General</a></li>
                            <li><a class="dropdown-item" href="obgyn.php">Obstetric & Gynaecology</a></li>
                            <li><a class="dropdown-item" href="icu.php">Intensive Care Unit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="onlineServicesDropdown" role="button" data-bs-toggle="dropdown">Online Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ticketing.php">Registration</a></li>
                            <li><a class="dropdown-item" href="billing.php">Billing</a></li>
                            <li><a class="dropdown-item" href="appointment.php">Appointment</a></li>
                            <li><a class="dropdown-item" href="telemedicine.php">Telemedicine</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#forms">Forms</a></li>
                    <li class="nav-item"><a class="nav-link" href="#notices">Notices</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown">
        Login
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="chc/admin/template/chc_kangpokpi/admin_login.php">Login</a></li>
    </ul>
</li>

                </ul>
            </div>
        </div>
    </nav>

<div class="content" >
   <img src="images/photo1.png" class="responsive" alt="chc-kpi" >
</div>
</div>
<div class="training-section" id="hospital" style="text-align:center;margin-top:20px">
    <br>
          <h4>ABOUT HOSPITAL </h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="training-items1">
                
                <h6>ABHA SCAN AND SHARE - HOW IT WORKS?</h6>
                <br>
                
                <div style="text-align:left">
                 <mark style="background-color:#7D7DFF;color:white;display: inline-block;  margin-bottom: 10px;"><h8 >Step 1 :Scan the QR Code</h8> </mark> <br>
                 <p>Scan the QR code using QR Code Scanner / phone camera / any of the below ABDM enabled apps.</p>
                    
                </div>
                <br>
                <div style="text-align:left">
                 <mark style="background-color:#7D7DFF;color:white;display: inline-block;  margin-bottom: 10px;"><h8 >Step 2 :Install ABDM Enabled App</h8> </mark> <br>
                 <p>Install any ABDM enabled Personal Health Records app(If not already installed) and register / login.</p>
                    
                </div>
                <br>
                 <div style="text-align:left">
                 <mark style="background-color:#7D7DFF;color:white;display: inline-block;  margin-bottom: 10px;"><h8 >Step 3 :Share Profile</h8> </mark> <br>
                 <p>Share profile with the hospital and generate the registration token.</p>
                    
                </div>
                <br>
                  <div style="text-align:left">
                 <mark style="background-color:#7D7DFF;color:white; display: inline-block;  margin-bottom: 10px;"><h8 >Step 4 :Get OP Slip</h8> </mark> <br>
                 <p>Get OP slip from the registration counter as per your token.</p>
                    
                </div>
           </div>
        </div>
        <div class="col-md-3">
            <div class="training-items1">
                <h6>Hospital Hours</h6>
                <table style="width:100%;margin-top:40px">
                     <tr>
                         <td>OPD Timing:</td>
                         <td>Monday to Friday</td>
                         <td>10:00 am to 2:00 pm </td>
                     </tr>
                     <tr>
                         <td>Emergency Timing</td>
                         <td>Monday to Sunday</td>
                         <td>24 hrs X 7 days and night</td>
                         
                     </tr>
                      <tr>
                         <td>Immunisation Timing</td>
                         <td>Tuesday & Thursday</td>
                         <td>10:am to 2:pm</td>
                         
                     </tr>
                      <tr>
                         <td>ANC OPD</td>
                         <td>Every Wednesday</td>
                         <td>10:am to 2:pm</td>
                         
                     </tr>
                </table>
         <br>
                <button>Read More</button> 
                
                
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="training-items1">
                
                <h6>OPD,Emergency,IPD CHART</h6>
                <table style="width:100%;margin-top:40px">
               <tr>
                   <th>Service</th>
                   <th>Daily</th>
                   <th>Monthly</th>
                   <th>Yearly</th>
               </tr>
               <tr>
                   <td>OPD</td>
                   <td><?php
                        $conn=mysqli_connect('localhost', 'u548833904_sanjeep', 'Chckpi@2024', 'u548833904_chckpi');
                        
                        // Check connection
                        if (mysqli_connect_errno())
                        {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                        $date=date('Y-m-d');
                        
                        $sql = "SELECT * FROM `hospital_record_2024` where dateentry='$date' and ticket_type='OPD'"; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                      
                        
                        ?></td>
                                           <td><?php
                      
                        
                        $sql = "SELECT * FROM `hospital_record_2024` where MONTH(dateentry) = MONTH(CURDATE()) AND  YEAR(dateentry) = YEAR(CURDATE()) and ticket_type='OPD'"; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                    
                        
                        ?></td>
                                           <td><?php
                       
                        
                        $sql = "SELECT * FROM `hospital_record_2024` where `dateentry` > DATE_SUB(CURDATE(), INTERVAL 12 MONTH) and ticket_type='OPD'"; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                      
                        
                        ?></td>
                                       </tr>
                                       <tr>
                                           <td>Emergency</td>
                                           <td><?php
                      
                        
                        $sql = "SELECT * FROM `hospital_record_2024` where dateentry='$date' and ticket_type='EMERGENCY'"; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                     
                        
                        ?></td>
                                           <td><?php
                      
                        
                        $sql = "SELECT * FROM `hospital_record_2024` where MONTH(dateentry) = MONTH(CURDATE()) AND  YEAR(dateentry) = YEAR(CURDATE()) and ticket_type='EMERGENCY'"; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                    
                        
                        ?></td>
                                           <td><?php
                      
                        
                        
                        $sql = "SELECT * FROM `hospital_record_2024` where `dateentry` > DATE_SUB(CURDATE(), INTERVAL 12 MONTH) and ticket_type='EMERGENCY'"; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                       
                        
                        ?></td>
                                       </tr>
                                       <tr>
                                           <td>IPD</td>
                                           <td><?php
                      
                        
                        $sql = "SELECT * FROM `admission_record_2024` where adm_date='$date' "; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                       
                        
                        ?></td>
                                           <td><?php
                      
                        $sql = "SELECT * FROM `admission_record_2024` where MONTH(adm_date) = MONTH(CURDATE()) AND  YEAR(adm_date) = YEAR(CURDATE()) "; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                      
                        
                        ?></td>
                                           <td><?php
                      
                        
                        $sql = "SELECT * FROM `admission_record_2024` where `adm_date` > DATE_SUB(CURDATE(), INTERVAL 12 MONTH) "; 
                        
                        $result=mysqli_query($conn,$sql);
                        
                          // Return the number of rows in result set
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          // Free result set
                          mysqli_free_result($result);
                        
                      
                        
                        ?></td>
               </tr>
               <tr>
                   <td>ANC</td>
                   <td>0</td>
                   <td>0</td>
                   <td></td>
                   
               </tr>
               <tr>
                   <td>Delivery</td>
                   <td>0</td>
                   <td>0</td>
                   <td></td>
                  
           </table>
           <br>
                <button>Read More</button> 
                
                
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="training-items1">
                <div style="text-align:left">            
                          <h6>Staff duty roster for today</h6>

                           <?php
// Function to display staff names and qualifications or "Absent" if no staff are assigned
function displayStaffRoster($staff_cat) {
    $conn = mysqli_connect('localhost', 'u548833904_sanjeep', 'Chckpi@2024', 'u548833904_chckpi');
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return;
    }
    
    $date = date('Y-m-d');
    $q = "SELECT staff_name, qualification FROM `staff_roster` WHERE date='$date' AND staff_cat='$staff_cat' ORDER BY `staff_name` ASC";
    
    $counter = 0;
    $query = mysqli_query($conn, $q);
    
    if ($query) {
        // Check if there's any result
        if (mysqli_num_rows($query) == 0) {
            echo '<div style="color:red">No staff assigned today.</div>';
        } else {
            while ($res = mysqli_fetch_array($query)) {
                $staff_name = trim($res['staff_name']);
                $qualification = trim($res['qualification']);
                
                // If staff name is empty, display 'Absent'
                echo ++$counter . '. ' . ($staff_name ? htmlspecialchars($staff_name) : 'Absent');
                
                // If qualification is not empty, display it after the name
                if ($qualification) {
                    echo ' - (' . htmlspecialchars($qualification) . ')';
                }
                
                echo '<br>';
            }
        }
    }
    mysqli_close($conn);
}
?>


    
    
    <div>
        <strong>Doctor:</strong><br>
        <?php displayStaffRoster('Doctor'); ?>
    </div>
    
    <div>
        <strong>Nurse:</strong><br>
        <?php displayStaffRoster('Nurse'); ?>
    </div>
    
    <div>
        <strong>Lab Technician:</strong><br>
        <?php displayStaffRoster('Lab technician'); ?>
    </div>
    
    <div>
        <strong>Pharmacist:</strong><br>
        <?php displayStaffRoster('Pharmacist'); ?>
    </div> 
    
    <div>
        <strong>DEO:</strong><br>
        <?php displayStaffRoster('DEO'); ?>
    </div>


                </div>              
            </div>
        </div>
    </div>
</div>

      

<div class="training-section" id="services" style="text-align:center;margin-top:20px">
    <br>
        <h6>Our Services </h6>
        <div class="container">
            <div class="training-items">
                <img src="images/pmbjk.jpg" width="130px" height="100px"/>
                <h6>Pardhan Mantri Bharatiya Jan Aushadi Kendra</h6>
                <p>Making quality medicines available at affordable prices for all, particularly the poor and disadvantaged, through exclusive outlets "Jan Aushadhi Medical Store", so as to reduce out of pocket expenses in healthcare.</p>
                <button>Read More</button>
            </div>
            <div class="training-items">
                <img src="images/pmjay.png" width="130px" height="100px"/>
                <h6>Pardhan Mantri Jan Arogya Joyana</h6>
                <p>Ayushman Bharat PM-JAY is the largest health assurance scheme in the world which aims at providing a health cover of Rs. 5 lakhs per family per year for secondary and tertiary care hospitalization to over 12 crores poor and vulnerable families (approximately 55 crore beneficiaries) that form the bottom 40% of the Indian population. </p>
                <button>Read More</button>
            </div>
            <div class="training-items">
                 <img src="images/abha.jpg" width="130px" height="100px"/>
                <h6>Ayushman Bharat Health Account</h6>
                <p>ABHA number is a 14 digit number that will uniquely identify you as a participant in India’s digital healthcare ecosystem. ABHA number will establish a strong and trustable identity for you that will be accepted by healthcare providers across the country. Seamless sign up for PHR (Personal Health Records) applications such as ABDM ABHA application for Health data sharing.</p>
                <button>Read More</button>
            </div>
            <div class="training-items">
                <img src="images/jsy.jpg" width="130px" height="100px"/>
                <h6>JANANI SURAKSHA YOJANA</h6>
                <p>JananiSurakshaYojana (JSY) is a safe motherhood intervention under the National Health Mission. It is being implemented with the objective of reducing maternal and neonatal mortality by promoting institutional delivery among poor pregnant women. The scheme, launched on 12 April 2005 by the Hon’ble Prime Minister, is under implementation in all states and Union Territories (UTs), with a special focus on Low Performing States (LPS).JSY is a centrally sponsored scheme, which integrates cash assistance with delivery and post-delivery care. The Yojana has identified Accredited Social Health Activist (ASHA) as an effective link between the government and pregnant women.</p>
                <button>Read More</button>
            </div>
       </div>
</div>

<div class="training-section" id="contact" style="text-align:center;margin-top:20px">
<div class="container-fluid mt-9" >
    <div class="row g-4">
        <!-- Left Section: Contact Info & Map -->
        <div class="col-md-8 mb-4 mb-md-0">
            <div class="border border-secondary rounded p-4 shadow h-100" >
                <h6 class="text-center mb-3">Get in Touch</h6>
                <p><strong>Address:</strong> Kangpokpi Ward No. 12, Kangpokpi District, Manipur</p>
                <p><strong>Email:</strong> chckangpokpi24@gmail.com</p>
                <p><strong>Phone:</strong> +9233168824</p>
                <div class="rounded overflow-hidden" style="height: 600px;">
                    <div class="ratio ratio-16x9 rounded overflow-hidden" style="weight: 100%;">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d902.8904471947881!2d93.97026739866104!3d25.15050191744019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1739676303086!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section: Contact Form -->
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="border border-secondary rounded p-4 shadow h-100" style="text-align:left">
                <h6 class="text-center mb-3">Send Us a Message</h6>
                <form id="contactForm" action="includes/contact_process.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div  style="text-align:center">
                    <button type="submit"  class="btn btn-green w-70">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div> 
<br>
<div class="container-fluid" style="padding:0px">
        <div class="row" style="height:auto;background:#005757;color:white;text-align:center;font-size:12px">
            <br>
            <p>Content Owned by District Hospital Kangpokpi<br>
                ©  Developed And Hosted By Staff of DH Kangpokpi<br>
Government of Manipur</p>
</div>
</div>

<!-- Bootstrap Modal -->
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Message Sent Successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="okButton">OK</button>
            </div>
        </div>
    </div>
</div>





<script>
$(document).ready(function () {
    $("#contactForm").submit(function (event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            type: "POST",
            url: "includes/contact_process.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#successModal").modal("show"); // Show Bootstrap modal
                } else {
                    alert(response.message); // Show error message if failed
                }
            },
            error: function () {
                alert("Something went wrong. Please try again.");
            }
        });
    });

    // Redirect to chckpi.in when clicking OK button
    $("#okButton").click(function () {
        window.location.href = "https://chckpi.in";
    });
});
</script>




<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("myTopnav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction1() {
  var x = document.getElementById("myTopnav");
  if (x.className === "menu-bar") {
    x.className += " responsive";
  } else {
    x.className = "menu-bar";
  }
}
</script>

<script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}
if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;
var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;

}
GetClock();
setInterval(GetClock,1000);
</script>


	<!-- ================== BEGIN BASE JS ================== -->
	<script src="chc/admin/template/assets/js/app.min.js"></script>
	<script src="chc/admin/template/assets/js/theme/apple.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="chc/admin/template/assets/js/demo/login-v2.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>

