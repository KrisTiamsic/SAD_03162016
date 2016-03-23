<?php
    date_default_timezone_set("Asia/Manila");
    $date = date("Y/m/d");
?>

<script type = text/javascript>
    function modalEdit(x)
    {
       // var hidden_reqID= "hidden_reqID_" + x.value;


       // var reqID = document.getElementById(hidden_reqID).value;
        
        document.getElementById('EFReqID').value = x.value;

        
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BREMS</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-institution"></i> <span style="font-size:13px">BREMS</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <br />

                   <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="home.html"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                </li>
                               <li><a><i class="fa fa-gears"></i> Maintenance <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="#">Request Monitoring Module</a>
                                            <ul class="nav child_menu" style="display: none">
                                                <li><a href="maintenance_official.php">Barangay Personnel</a>
                                                </li> 

                                                <li><a href="maintenance_docu.php">Document</a>
                                                </li>

                                                <li><a href="maintenance_items.php">Item</a>
                                                </li>

                                                <li><a href="maintenance_facility.php">Facility</a>
                                                </li>

                                                <li><a href="maintenance_facilitysched.php">Facility Schedule</a>
                                                </li>

                                             </ul>
                                        </li>

                                         <li><a href="#">Event Monitoring Module</a>
                                            <ul class="nav child_menu" style="display: none">
                                                <li><a href="maintenance_resident.php">Resident</a>
                                                </li>

                                                <li><a href="maintenance_household.php">Household</a>
                                                </li>

                                                <li><a href="maintenance_family.php">Family</a>
                                                </li>

                                                 
                                            </ul>
                                        </li>    
                                            
                                    </ul>
                                        
                                </li>
                               <li><a><i class="fa fa-desktop"></i> Transaction <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                            <ul class="nav child_menu" style="display: none">
                                            
                                            </ul>
                                            </li>
                                        <li><a href="">Events Requests</a>
                                            <ul class="nav child_menu" style="display: none">
                                            </ul>
                                        </li>
                                        <li><a href="Doc_New.php">Document Requests</a>
                                            <ul class="nav child_menu" style="display: none">

                                            </ul>
                                        </li>
                                         <li><a href="Item_New.php">Items Requests</a>                                        
                                        </li>
                                       
                                
                                    </li>
                                        <li><a href="Fac_Req.php">Facilities Requests</a>
                                            <ul class="nav child_menu" style="display: none">
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                 </li>
                                        <li><a><i class="fa fa-file-text"></i> Query <span class="fa fa-chevron-down"></span></a>
                                        </li>
                                        <li><a><i class="fa fa-bar-chart-o"></i> Report<span class="fa fa-chevron-down"></span></a>
                                        </li>
                                       
                                    </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i>  Admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown">
                                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Profile</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                   Transaction
                    
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Facility Request </h2>
                                
                                    <div class="clearfix"></div>
                                    
                                </div>
                                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#facilityreq">Add New Request</button>
                                        
                                        <button style="float:right"type="submit" class="btn btn-danger" data-toggle="modal" data-target="#cancelledreq">View Cancelled</button>
                                        <button style="float:right"type="submit" class="btn btn-info" data-toggle="modal" data-target="#finishedreq">View Finished</button>
                                        
                                        <button style="float:right"type="submit" class="btn btn-warning" data-toggle="modal" data-target="#activereq">View Active</button>
                                <div class="x_content">
                                
                                     
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:14px; text-align: center">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select ReqID, FacilityDesc, LastName, FirstName, MidName, ReqDate, Date, TimeFrom,TimeTo,Purpose,FReqStatus from request, nonresident, facility_request, facility where ReqID=FReqID and nonresident.RequestorID = request.RequestorID and facility.FacilityID = facility_request.FacilityID");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                
                                                <th>Request ID</th>
                                                <th>Facility</th>
                                                <th>Requestor</th>
                                                <th>Date Requested</th>
                                                <th>Date Needed</th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <th>Purpose</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>";

                                         while($row = mysqli_fetch_array($q))
                                            {
                                                $reqID = $row['ReqID'];
                                                $facility = $row['FacilityDesc'];
                                                $lname = $row['LastName'];
                                                $fname = $row['FirstName'];
                                                $mname = $row['MidName'];
                                                $reqdate = $row['ReqDate'];
                                                $resdate = $row['Date'];
                                                $timefrom = $row['TimeFrom'];
                                                $timeto = $row['TimeTo'];
                                                $purpose = $row['Purpose'];
                                                $status = $row['FReqStatus'];

                                                $name = $fname . ' ' . $mname . " " . $lname;
                                                


                                                echo "
                                            <tr class='odd pointer'>
                                               

                                                <td >$reqID</td>
                                                <td >$facility</td>
                                                <td >$name</td>
                                                <td >$reqdate</td>
                                                <td >$resdate</td>
                                                <td >$timefrom</td>
                                                <td >$timeto</td>
                                                <td >$purpose</td>
                                                <td >$status</td>


                                                <td> 
                                                

                                                    <span data-toggle='tooltip' title='Edit' data-placement='left'><button class='btn btn-success' data-toggle='modal' data-target='#Efacilityreq' id = 'btnEdit' name = 'btnEdit' value = '$reqID' onclick = 'modalEdit(this)'><i class='glyphicon glyphicon-pencil' aria-hidden='true'> </i></button></span>

                                                </td>
                                                <td>
                                                
                                                    <input type = 'hidden' value = '$reqID' id = 'hidden_reqID_$reqID'>
                                                </td>
                                            </tr>";
                                        }
                                        echo"
                                        </tbody>";
?>
                                    </table>
                                    
                                </div>
                                <br>  
                                
                                
                                
                                    
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
                    <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Developed by PUP 2016 | 
                            <span class="lead"> <i class="fa fa-institution"></i> Barangay Request and Event Monitoring System</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
                    
                </div>
                <!-- /page content -->
            </div>

        </div>
  <!-- Modal -->
    <form method = "POST" action = "facilityreq.php">
  <div class="modal fade" id="facilityreq" role="dialog">
    <div class="modal-dialog modal-sm" style="width:700px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Facility Request</h4>
        </div>
        
        <div class="modal-body">

           
                    <div class="form-inline" hidden>
                        <div style = "float:right">
                        <label class="control-label"> Request ID:</label> 
                            <input  type="text" 
                                class="form-control"
                                id="FReqID"
                                name = "FReqID"
                                readonly 
                                >
                        </div>   
                    </div>
       
        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>

                    <td>    <label class="control-label"> Date Requested </label> </td>
                    <td>       <input type="text"
                                style="width:150px"
                                class="form-control"
                                id="FRDate"
                                name="FRDate"
                                value="<?php echo $date;?>"
                                readonly="readonly"> </td>
                </tr>

            </tbody>
        </table>
        <!--rooooow-->  
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Requestor Details <!--Padding is optional-->
                                        </span>
                            </div>

         <center>
         <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">

            <tr>
                                        <td><div class="radio" style="text-align: left">
                                                <label>
                                                    <input type="radio"  id="FResident" name="FResident" value = "Resident"> Resident
                                                </label>
                                            
                                           
                                                <label>
                                                    <input type="radio"  id="FResident" name="FResident" value = "NonResident"> Nonresident
                                                </label>
                                            </div></td>
            </tr>

        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>
                    <td><label for="lastname">Surname*</label></td> 
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="FtxtSur" 
                                                   placeholder="Surname" 
                                                   name = "FtxtSur" 
                                                   REQUIRED></td>
                                 
                                
                                   
                                        <td><label for="firstname">Given Name*</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="FtxtGiven" 
                                                   placeholder="Given Name" 
                                                   name = "FtxtGiven" 
                                                   REQUIRED></td>
        
                                
                                        <td><label for="midname">Middle Name*</label>   </td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="FtxtMid" 
                                                   placeholder="Middle Name" 
                                                   name = "FtxtMid" REQUIRED></td>
                </tr>
        </tbody>
</table>
</center>

        <center>
        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>
                     <td>   <label class="control-label"> Address*</label> </td>
                     <td>       <input type="text" 
                                
                                class="form-control"
                                id="FAddress"
                                name="FAddress"
                                required="required"> </td>

                    <td>   <label class="control-label"> Mobile No*</label> </td>
                     <td>       <input type="text" 
                                
                                class="form-control"
                                id="FMobile"
                                name="FMobile"
                                required="required"> </td>
                </tr>
                    
            </div>  
            </tbody>
        </table>    
        </center>
                    

                     <!--rooooow-->  
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Reservation Details <!--Padding is optional-->
                                        </span>
                            </div>

        <center>
        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>
                     <td>   <label class="control-label"> Date*</label> </td>
                     <td>       <input type="date" 
                                
                                class="form-control"
                                id="FResDate"
                                name="FResDate"
                                required="required"> </td>

                    <td>   <label class="control-label"> From </label> </td>
                     <td>       <input type="time" 
                                class="form-control"
                                id="FResTimeFrom"
                                name="FResTimeFrom"
                                required="required"> </td>

                    <td>   <label class="control-label"> To </label> </td>
                     <td>       <input type="time" 
                                class="form-control"
                                id="FResTimeTo"
                                name="FResTimeTo"
                                required="required"> </td>

                </tr>
                    
            </div>  
            </tbody>
        </table>    
        </center>

        <center>
        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>

                                <td><label for="age">Purpose* </label></td>
                                        <td><textarea rows = "2"
                                                    column = "50" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="FPurpose" 
                                                   name = "FPurpose" 
                                                   required="required">

                                            </textarea> </td>

                                <td>  <label class="control-label"> Facility </label> </td>
                                <td>  <select
                                    
                                    class="form-control"
                                    id="txtFacID"
                                    name="txtFacID"
                                    onchange="get_data(this.value)"
                                    required="required">
                                        <?php
                                            include("connection.php");

                                            $q=mysqli_query($con, "select FacilityID, FacilityDesc from facility where FacilityStatus='active'");

                                                while ($row=mysqli_fetch_array($q)) {

                                                    $id = $row['FacilityID'];

                                                    echo"<option value=$id>" . $row['FacilityDesc'] . "</option>";
                                                }
                                        ?>
                                </select> </td>



                </tr>
                
                    
            </div>  
            </tbody>
        </table>    
        </center>

                       

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name = "btnSubmit">Submit</button>
        </div>
    
        </div>
      </div>
      
    </div>
  </div>

</form>





  <!-- Modal -->
    <form method = "POST" action = "facilityreq.php">
  <div class="modal fade" id="Efacilityreq" role="dialog">
    <div class="modal-dialog modal-sm" style="width:600 px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Facility Request</h4>
        </div>
        
        <div class="modal-body">

        <center>
        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>

           
                    
                       <td>  <label class="control-label"> Request ID</label> </td>
                        <td>    <input  type="text" 
                                class="form-control"
                                id="EFReqID"
                                name = "EFReqID"
                                readonly 
                                > </td>

                    
                    </tr>
                    <tr>
                        <td><label class="control-label"> Status</label> </td>
                        <td>  <select  
                                class="form-control"
                                name="FStatus"
                                required="FStatus"> 
                                    <option>Active</option>
                                    <option>Finished</option>
                                    <option>Cancelled</option>
                            </select> </td>
                
                </tr>
            </tbody>
        </table>        

        
                       

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name = "btnSubmitEdit">Submit</button>
        </div>
    
        </div>
      </div>
      
    </div>
  </div>

</form>


 <!-- Modal -->
    <form method = "POST" action = "facilityreq.php">
  <div class="modal fade" id="activereq" role="dialog">
    <div class="modal-dialog modal-lg" style="width:1000 px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Active Request</h4>
        </div>
        
        <div class="modal-body">

        <center>
        
                                
                                     
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:14px; text-align: center">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select ReqID, FacilityDesc, LastName, FirstName, MidName, ReqDate, Date, TimeFrom,TimeTo,Purpose,FReqStatus from request, nonresident, facility_request, facility where ReqID=FReqID and nonresident.RequestorID = request.RequestorID and facility.FacilityID = facility_request.FacilityID and FReqStatus='Active'");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                
                                                <th>Request ID</th>
                                                <th>Facility</th>
                                                <th>Requestor</th>
                                                <th>Date Requested</th>
                                                <th>Date Needed</th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <th>Purpose</th>
                                                <th>Status</th>
                                               


                                            </tr>
                                        </thead>
                                        <tbody>";

                                         while($row = mysqli_fetch_array($q))
                                            {
                                                $reqID = $row['ReqID'];
                                                $facility = $row['FacilityDesc'];
                                                $lname = $row['LastName'];
                                                $fname = $row['FirstName'];
                                                $mname = $row['MidName'];
                                                $reqdate = $row['ReqDate'];
                                                $resdate = $row['Date'];
                                                $timefrom = $row['TimeFrom'];
                                                $timeto = $row['TimeTo'];
                                                $purpose = $row['Purpose'];
                                                $status = $row['FReqStatus'];

                                                $name = $fname . ' ' . $mname . " " . $lname;
                                                


                                                echo "
                                            <tr class='odd pointer'>
                                               

                                                <td >$reqID</td>
                                                <td >$facility</td>
                                                <td >$name</td>
                                                <td >$reqdate</td>
                                                <td >$resdate</td>
                                                <td >$timefrom</td>
                                                <td >$timeto</td>
                                                <td >$purpose</td>
                                                <td >$status</td>


                                               
                                            </tr>";
                                        }
                                        echo"
                                        </tbody>";
?>
                                    </table>
                                    
                              
            </center>

        
                       

        <div class="modal-footer">
        
        </div>
    
        </div>
      </div>
      
    </div>
  </div>


</form>




<!-- Modal -->
    <form method = "POST" action = "facilityreq.php">
  <div class="modal fade" id="cancelledreq" role="dialog">
    <div class="modal-dialog modal-lg" style="width:1000 px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cancelled Request</h4>
        </div>
        
        <div class="modal-body">

        <center>
        
                                
                                     
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:14px; text-align: center">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select ReqID, FacilityDesc, LastName, FirstName, MidName, ReqDate, Date, TimeFrom,TimeTo,Purpose,FReqStatus from request, nonresident, facility_request, facility where ReqID=FReqID and nonresident.RequestorID = request.RequestorID and facility.FacilityID = facility_request.FacilityID and FReqStatus='Cancelled'");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                
                                                <th>Request ID</th>
                                                <th>Facility</th>
                                                <th>Requestor</th>
                                                <th>Date Requested</th>
                                                <th>Date Needed</th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <th>Purpose</th>
                                                <th>Status</th>
                                               


                                            </tr>
                                        </thead>
                                        <tbody>";

                                         while($row = mysqli_fetch_array($q))
                                            {
                                                $reqID = $row['ReqID'];
                                                $facility = $row['FacilityDesc'];
                                                $lname = $row['LastName'];
                                                $fname = $row['FirstName'];
                                                $mname = $row['MidName'];
                                                $reqdate = $row['ReqDate'];
                                                $resdate = $row['Date'];
                                                $timefrom = $row['TimeFrom'];
                                                $timeto = $row['TimeTo'];
                                                $purpose = $row['Purpose'];
                                                $status = $row['FReqStatus'];

                                                $name = $fname . ' ' . $mname . " " . $lname;
                                                


                                                echo "
                                            <tr class='odd pointer'>
                                               

                                                <td >$reqID</td>
                                                <td >$facility</td>
                                                <td >$name</td>
                                                <td >$reqdate</td>
                                                <td >$resdate</td>
                                                <td >$timefrom</td>
                                                <td >$timeto</td>
                                                <td >$purpose</td>
                                                <td >$status</td>


                                               
                                            </tr>";
                                        }
                                        echo"
                                        </tbody>";
?>
                                    </table>
                                    
                              
            </center>

        
                       

        <div class="modal-footer">
        
        </div>
    
        </div>
      </div>
      
    </div>
  </div>


</form>


<!-- Modal -->
    <form method = "POST" action = "facilityreq.php">
  <div class="modal fade" id="finishedreq" role="dialog">
    <div class="modal-dialog modal-lg" style="width:1000 px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Finished Request</h4>
        </div>
        
        <div class="modal-body">

        <center>
        
                                
                                     
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:14px; text-align: center">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select ReqID, FacilityDesc, LastName, FirstName, MidName, ReqDate, Date, TimeFrom,TimeTo,Purpose,FReqStatus from request, nonresident, facility_request, facility where ReqID=FReqID and nonresident.RequestorID = request.RequestorID and facility.FacilityID = facility_request.FacilityID and FReqStatus='Finished'");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                
                                                <th>Request ID</th>
                                                <th>Facility</th>
                                                <th>Requestor</th>
                                                <th>Date Requested</th>
                                                <th>Date Needed</th>
                                                <th>Time From</th>
                                                <th>Time To</th>
                                                <th>Purpose</th>
                                                <th>Status</th>
                                               


                                            </tr>
                                        </thead>
                                        <tbody>";

                                         while($row = mysqli_fetch_array($q))
                                            {
                                                $reqID = $row['ReqID'];
                                                $facility = $row['FacilityDesc'];
                                                $lname = $row['LastName'];
                                                $fname = $row['FirstName'];
                                                $mname = $row['MidName'];
                                                $reqdate = $row['ReqDate'];
                                                $resdate = $row['Date'];
                                                $timefrom = $row['TimeFrom'];
                                                $timeto = $row['TimeTo'];
                                                $purpose = $row['Purpose'];
                                                $status = $row['FReqStatus'];

                                                $name = $fname . ' ' . $mname . " " . $lname;
                                                


                                                echo "
                                            <tr class='odd pointer'>
                                               

                                                <td >$reqID</td>
                                                <td >$facility</td>
                                                <td >$name</td>
                                                <td >$reqdate</td>
                                                <td >$resdate</td>
                                                <td >$timefrom</td>
                                                <td >$timeto</td>
                                                <td >$purpose</td>
                                                <td >$status</td>


                                               
                                            </tr>";
                                        }
                                        echo"
                                        </tbody>";
?>
                                    </table>
                                    
                              
            </center>

        
                       

        <div class="modal-footer">
        
        </div>
    
        </div>
      </div>
      
    </div>
  </div>


</form>






  
        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>

        <!-- input mask -->
        <script src="js/input_mask/jquery.inputmask.js"></script>


        <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
           <!-- form validation -->
         <script src="js/validator/validator.js"></script>
    
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>

        <!-- input_mask -->
        <script>
            $(document).ready(function () {
                $(":input").inputmask();
            });
        </script>
        <!-- /input mask -->
</body>

</html>