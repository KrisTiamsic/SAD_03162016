<script type = text/javascript>


  function docPrice(x)
  {
      var chID = "chPrice_id_" + x.value;
      var hidden_id = "hidden_id_" + x.value;
      var hidden_desc = "hidden_desc_" + x.value;
      var hidden_fee = "hidden_fee_" + x.value;


      var id = document.getElementById(hidden_id).value;
      var desc = document.getElementById(hidden_desc).value;
      var fee = parseFloat(document.getElementById(hidden_fee).value);

      var tot =  parseFloat(document.getElementById('total').value)

      if(document.getElementById(chID).checked == true)
      {
          document.getElementById('total').value = tot + fee;



      }
      else
      {
          document.getElementById('total').value = tot - fee;

      }

  }

  function pass(x)
  {
        document.getElementById('req').value = x.value;
  }

  function upStat(x)
  {
        document.getElementById('re').value = x.value;

        var hidden_rstat = "hidden_rstat_" + x.value;

        var stat = document.getElementById(hidden_rstat).value;

        document.getElementById('res').value = stat;
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

    <title>Barangay Information System</title>

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
                    <!-- /sid
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
            <form method = POST action = 'docs.php'>
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
                                    <h2>Requests </h2>
                                
                                    <div class="clearfix"></div>
									
                                </div>
									    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newReq">Add New Request</button>

                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newReqDoc">Add Document</button>
                                
                                <div class="x_content">
                                
								<table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px">
                                        <thead>
                                            <tr class="headings">
                                                
                                        <th>Request ID</th>
                                        <th>Request Type</th>
                                        <th>Requestor</th>
                                        <th>Date Requested</th>
                                        <th>Status</th>
                                        <th>Update</th>

                                        <th>View</th>
                                        <th></th>
                                  </tr>
                                        </thead>

                                        <tbody>

                                            <?php

                                            require("connection.php");

                                            $q = mysqli_query($con, "select * from request, resident_personaldata where RequestorID = ResidentID ");

                                            while($row = mysqli_fetch_array($q))
                                            {
                                                $reqid = $row['ReqID'];
                                                $resid = $row['LastName'].", ".$row['FirstName']." ".$row['MidName'];
                                                $reqdate = $row['ReqDate'];
                                                $reqStat = $row['Status'];

                                                echo"


                                            <tr class='odd pointer'>
                                            <td>$reqid</td>
                                            <td>Document</td>
                                            <td>$resid</td>
                                            <td>$reqdate</td>
                                            <td>$reqStat</td>
                                            <td>
                                                <button type = 'button' data-toggle = 'modal' data-target = '#updateStat' onclick = 'upStat(this)' value = '$reqid' class='btn btn-primary'>Update Status</button>
                                            <td> <button type='submit' class='btn btn-success' data-toggle='modal' data-target='#viewDoc' value = $reqid onclick = 'pass(this)' id = 'btnDocs' name = 'btnDocs'>Document</button></td>
                                                
                                            </td>
                                            <td>
                                                <input type = hidden value = $reqid id = 'hidden_rid_$reqid'  >
                                                <input type = hidden value = $reqStat id = 'hidden_rstat_$reqid'>


                                            </td>

                                            
                                            
                                           </tr>";

                                            }?>
                                        </tbody>

                                    </table>
                                   
                                    
                                </div>
                                <br>  
                                <!---->
                                
                                
                                    
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

            </form>
                <!-- /page content -->
            </div>

        </div>





        




          <form method=post action = "docNew.php">
  <div class="modal fade" id="updateStat" role="dialog">
    <div class="modal-dialog modal-sm">
    
 
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Document Request</h4>
        </div>
        
        <div class="modal-body">
                    <br>
                       
                    <div class="form-inline">
                        <div >
                        <label class="control-label"> Request ID:</label> 
                        <input type = text  
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="re"
                                name = "re"
                                >

                        

</div>
                        <label class="control-label"> Status:</label> 
<select   
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="res"
                                name = "res"
                                >
                                <option> new </option>
                                <option> done </option>
                                <option> released </option>
                            </select>
<br>
<br>
<br>

</div>





</div>
 
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary" name = "btnUpdate" >Submit</button>
        </div>
        
    
        </div>
      </div>
      
    </div>
  </div>
  </form>









   <form method=post>
  <div class="modal fade" id="newReqDoc" role="dialog">
    <div class="modal-dialog modal-lg">
    
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Document Request</h4>
        </div>
        
        <div class="modal-body">
                    <br>
                       
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Request ID::</label> 
                            <select  
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="requ"
                                name = "requ"
                                >
                                <?php
                                $query = mysqli_query($con,"select * from request left JOIN dr_details on request.ReqID = dr_details.DocReqID where dr_details.DocReqID is null");

            while($row = mysqli_fetch_array($query))
            {
                echo "<option> $row[ReqID]</option>";
            }

                                ?>
                            </select>
                        </div>   


                    </div>

<br>
<br>
<br>

<?php

                            require("connection.php");
                            $q = mysqli_query($con, "Select * from document where DocStatus != 'inactive'");

                            echo"<table align = center style = width:50%>
                            <thead>
                              <th></th>
                              <th>Document</th>
                              <th>Fee</th>
                              <th></th>

                            </thead>
                            <tbody>";

                            while($row = mysqli_fetch_array($q))
                            {
                              $id = $row['DocID'];
                              $description = $row['DocDescription'];
                              $fee = $row['Price'];

                               echo "<tr>
                                                
                                <td> 
                                  <input type = checkbox value = $id onclick = 'docPrice(this)' name = 'chPrice[]' id = 'chPrice[]'>
                                </td>
                                <td>$description</td>
                                <td>$fee</td>
                                               
                                <td>
                                  <input type = 'hidden' value = '$id' id='hidden_id_$id'>
                                  <input type = 'hidden' value = '$description' id='hidden_desc_$id'>
                                  <input type = 'hidden' value = '$fee' id='hidden_fee_$id'>
                                                
                                </td>

                                </tr>
                                ";
                                                
                            }
                            echo "</tbody>
                            </table>";

                            ?>
                            



                    <br>
                    <br>
                    <br>
                    
                    
                                
                    
                
                
                    <br>
                                
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary" name = "btnSubmitDoc" >Submit</button>
        </div>
        
    
        </div>
      </div>
      
    </div>
  </div>
  </form>

  <?php
    require("connection.php");
    if(isset($_POST['btnSubmitDoc']))
    {

        $drID = $_POST['requ'];
        if(isset($_POST['chPrice']))
        {
            foreach ($_POST['chPrice'] as $i) 
            {

                $query = mysqli_query($con, "insert into dr_details values ('$drID', '$i', null, 'new')");
            }
        }
    }
  ?>






















  <form method=post>
  <div class="modal fade" id="viewDoc" role="dialog">
    <div class="modal-dialog modal-lg">
    
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Document Request</h4>
        </div>
        
        <div class="modal-body">
            
                
                
                    <br>
                       
                
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Request ID::</label> 
                            <input type = text  
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="req"
                                name = "req"
                                readonly = "readonly"

                                >
                                
                        </div>   


                    </div>

<br>


                <table align = center>

                    <thead>
                        <th> DOCUMENTS </th>

                    </thead>
                    <tbody>
                        <?php



                        require("connection.php");

                        if(isset($_POST['btnView']))
                        {

                            $rid = $_POST['lol'];

                            echo " <script type = text/javascript> alert('hihihihihi') </script>"; 
                        $query = mysqli_query($con, "select DocDescription from dr_details, document where DocReqID = '$rid' and document.DocID = dr_details.DocID");

                        while($row = mysqli_fetch_array($query))
                        {
                            $docs = $row['0'];

                            echo "<tr>
                                <td>
                                    $docs
                                </td>

                            </tr>";
                        

                        }
                        }
                        ?>

                    </tbody>
                </table>
<br>

                    
                    
                                
                    
                
                
                    <br>
                                
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary" name = "btnSubmit" data-toggle="modal" data-target="#newReqDoc" >Submit</button>
        </div>
        
    
        </div>
      </div>
      
    </div>
  </div>
  </form>















    <!-- Modal -->
    <form method=post action='docNew.php'>
  <div class="modal fade" id="newReq" role="dialog">
    <div class="modal-dialog modal-sm">
    
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Document Request</h4>
        </div>
        
        <div class="modal-body">
            
                
				
                    <br>
                       
				
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Request ID::</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="surname"
                                readonly="readonly"
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="form-inline" >
                        <label class="control-label"> Requestor Type:</label> <br>
                        <div class="radio">
                            <input type="radio" name="resType" id="resType" value="resident" checked> Resident
                            <input type="radio" name="resType" id="resType" value="nresident"> Non-Resident

                        </div>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Requestor:</label> <br>
                        <label> Surname:</label>
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="ln"
                                name = "ln"
                                required="required"> <br>

                                <label> Given Name:</label>
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="fn"
                                name = "fn"
                                required="required"><br>

                                <label> Middle Name:</label>
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="mn"
                                name = "mn"
                                required="required">
                    </div>
                    <br>
                    
					<div class="form-inline">
                        <label class="control-label"> Address:</label> <br>
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="surname"
                                required="required">
                    </div>
                    <br>
                    
					<div class="form-inline">
                        <label class="control-label"> Date of Birth:</label> 
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="dob"
                                name ="dob"
                                required="required">
                    </div>
                    <br>
                    
					<div class="form-inline">
                        <label class="control-label"> Civil Status:</label> 
                            <select id = "cs"  name = "cs">
							<option>Single</option>
							<option>Married</option>
							<option>Divorced</option>
							<option>Widow</option>
							</select>
							</div>
                    <br>
                    
					            
					
                
				
                    <br>
                				
        <div class="modal-footer">
          
		  <button type="submit" class="btn btn-primary" name = "btnSubmit" data-toggle="modal" data-target="#newReqDoc" >Submit</button>
        </div>
		
	
        </div>
      </div>
      
    </div>
  </div>
  </form>










































  <!-- Modal -->
  <div class="modal fade" id="newdoc" role="dialog">
    <div class="modal-dialog modal-sm">
    
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Document</h4>
        </div>
        
        <div class="modal-body">
            <form method=post>
                
				
					<div class="form-inline">
						<label class="control-label">Date Requested:</label>
                            <input type="text" 
                                class="form-control"
                                 style="margin-left:26px"
                                placeholder="MM/DD/YYYY" 
                                data-inputmask="'mask': '99/99/9999'"
                                required="required">
                    </div>
                    <br>
                       
				
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Request ID::</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="surname"
                                readonly="readonly"
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Requestor:</label> 
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="surname"
                                required="required">
                    </div>
                    <br>
                    
					<div class="form-inline">
                        <label class="control-label"> Address:</label> <br>
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="surname"
                                required="required">
                    </div>
                    <br>
                    
					<div class="form-inline">
                        <label class="control-label"> Date of Birth:</label> 
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="surname"
                                required="required">
                    </div>
                    <br>
                    
					<div class="form-inline">
                        <label class="control-label"> Civil Status:</label> 
                            <select>
							<option>Single</option>
							<option>Married</option>
							<option>Divorced</option>
							<option>Widow</option>
							</select>
							</div>
                    <br>
                    
					            
					<div class="form-inline">
						<label class="control-label" style="font-size:15px">Document Request</label><br>
						<label style="margin-left:10px">Barangay Clearance/Certificate:</label><br>
                          <input type="checkbox" class="tableflat" id="chkPassport" onclick="EnableDisableTextBox(this) " style="margin-left:20px"><label>Regular Clearance</label></input><br>
						  <input type="checkbox" class="tableflat" style="margin-left:20px"><label >LOAN purpose</label></input><br><br>						  
                          <input type="checkbox" class="tableflat"><label>Certificate of Indigency</label></input><br>
						  <input type="checkbox" class="tableflat"><label>Certificate to File Action</label></input><br>
						  <label style="margin-left:10px">Business Clearance:</label><br>
						  <input type="checkbox" class="tableflat"style="margin-left:20px"><label>for capital 10,000 below</label></input><br>
						  <input type="checkbox" class="tableflat"style="margin-left:20px"><label>for capital 10,000-100,000</label></input><br>
						  <input type="checkbox" class="tableflat"style="margin-left:20px"><label>for capital 100,000 above</label></input><br>
						  <label style="margin-left:30px">Business Name:</label><input type="text" class="tableflat" style="margin-left:30px"></input><br>
                          <input type="checkbox" class="tableflat"><label>Barangay ID</label></input><br>
                          <input type="checkbox" class="tableflat"><label>Medical Assistance/Senior Citizen</label></input><br>
                          <input type="checkbox" class="tableflat"><label>Referral Recommendation</label></input><br>
                          <input type="checkbox" class="tableflat"><label>Filling Fee</label></input><br>

						  </div>
                    <br>
                
				<div class="form-inline">
                        <label class="control-label" disabled> Total Price </label> 
                            <input type="text" 
                                style="margin-left:12px"
                                class="form-control"
                                id="surname"
                                required="required">
                    </div>
                    <br>
					
					<div class="form-inline">
					<label  style="font-size:15px" class="control-label">Status</label>
					<select type="dropdown" class="control-label" style="width:100px"> 
						 <option></option>
						 <option>New</option>
						 <option>Active/Pending</option>
						 <option>Approved by Secretary</option>
						 <option>Approved by Chairman</option>
						 <option>Released</option>
						 <option>Unclaimed</option>
					</select>
					</div>
                    <br>
                				
        <div class="modal-footer">
          
		  <button type="submit" class="btn btn-primary">Submit</button>
        </div>
		</form>
	
        </div>
      </div>
      
    </div>
  </div>





































  
  
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