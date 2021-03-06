


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
    
    function get_data(value){
    $.ajax({
        url: "getFacName.php",
        type: "POST",
        dataType: "HTML",
        async: false,
        data: {value: value}
        success: function(data) {
          $("#txtFacName").html(data);                
        }
     });
 }

</script>


        <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                 $(wrapper).append('<center> <div class="form-group"> <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px"> <tbody  style="text-align: center"> <tr>  <td>  <label class="control-label"> Day</label> </td> <td> <select class="form-control" id="txtFDay[]" name="txtFDay[]"> <option>Monday</option> <option>Tuesday</option><option>Wednesday</option> <option>Thursday</option> <option>Friday</option> <option>Saturday</option> <option>Sunday</option> </select> </td> <td> <label class="control-label"> From*</label> </td> <td> <input type="time" class="form-control" id="txtTimeFrom[]" name="txtTimeFrom[]" required="required"> </td> <td>    <label class="control-label"> To*</label> </td><td> <input type="time" class="form-control" id="txtTimeTo[]" name="txtTimeTo[]" required="required"> </td></tr> </tbody></table></center>'); //add input box
               
               }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
            
            
        });

        
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
                   Maintenance
                    
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
                                    <h2>Facility Schedule</h2>
                                    
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#fsched" style="float:right"><span class='glyphicon glyphicon-plus' aria-hidden='true' style="color:white"></span>   Add Facility Schedule</button>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:14px; text-align: center">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"select FSchedNo, FacilitySchedID, Day, OpeningTime, ClosingTime, FSchedStatus, facility.FacilityID, facility.FacilityDesc from facility, facility_schedule where FacilitySchedID = facility.FacilityID and FSchedStatus = 'active'");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                
                                                <th>Sched No</th>
                                                <th>Facility Name</th>
                                                <th>Day</th>
                                                <th>Opening Time</th>
                                                <th>Closing TIme</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>";

                                         while($row = mysqli_fetch_array($q))
                                            {
                                                $sno =  $row['FSchedNo'];
                                                $facName = $row['FacilityDesc'];
                                                $day = $row['Day'];
                                                $otime = $row['OpeningTime'];
                                                $ctime= $row['ClosingTime'];


                                                echo "
                                            <tr class='odd pointer'>
                                               

                                                <td >$sno</td>
                                                <td >$facName</td>
                                                <td >$day</td>
                                                <td >$otime</td>
                                                <td >$ctime</td>
                                                <td> 
                                                

                                                    <span data-toggle='tooltip' title='Edit' data-placement='left'><button class='btn btn-success' data-toggle='modal' data-target='#fschedEdit' id = 'btnEdit' name = 'btnEdit' value = '$sno' onclick = 'modalEdit(this)'><i class='glyphicon glyphicon-pencil' aria-hidden='true'> </i></button></span>

                                                    <span data-toggle='tooltip' title='Delete' data-placement='left'> <button class='btn btn-danger' data-toggle='modal' data-target='#fschedDelete' id = 'btnDelete' name = 'btnDelete' value = '$sno' onclick = 'modalDelete(this)'><i class='glyphicon glyphicon-remove' aria-hidden='true'> </i></button></span>
                                                </td>
                                                <td>
                                                   
                                                </td>
                                            </tr>";
                                        }
                                        echo"
                                        </tbody>";
?>
                                    </table>
                                   

                                    
                                </div>
    
                                    
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
                            <span class="lead"> <i class="fa fa-institution"></i> Barangay Requesting and Event Monitoring System</span>
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
    <form method = "POST" action = "mfsched.php">
  <div class="modal fade" id="fsched" role="dialog">
    <div class="modal-dialog modal-sm" style="width:700px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Facility</h4>
        </div>
		
        <div class="modal-body">
			<form method="post">
					
        <center>
		 <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>

                    <td>  <label class="control-label"> Facility ID </label> </td>
                     <td>       <select
                                
                                class="form-control"
                                id="txtFacID"
                                name="txtFacID"
                                onchange="get_data(this.value)"
                                required="required">
                                    <?php

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

            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                <span style="font-size: 12px; padding: 0 10px;">
                    Schedule of Availability<!--Padding is optional-->
                </span>
            </div> 

    <center>
    <div class="input_fields_wrap">
        <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

            <tbody  style="text-align: center">
                <tr>
                   
                        <td>  <label class="control-label"> Day</label> </td>
                        <td> <select
                                    
                                    class="form-control"
                                    id="txtFDay[]"
                                    name="txtFDay[]"
                                    >
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                </select> </td>
                  
                        <td>    <label class="control-label"> From*</label> </td>
                        <td>       <input type="time"
                                     
                                    class="form-control"
                                    id="txtTimeFrom[]"
                                    name="txtTimeFrom[]"
                                    required="required"> </td>
                   

                        <td>    <label class="control-label"> To*</label> </td>
                        <td>       <input type="time"
                                     
                                    class="form-control"
                                    id="txtTimeTo[]"
                                    name="txtTimeTo[]"
                                    required="required"> </td>
                 

                </tr>

                
            </tbody>
        </table>
    </div>

                        
                        
                       
                        <button  
                                    class="add_field_button btn btn-default" 
                                    name="addSched" 
                                    id="addSched"
                                    onclick="disable()"
                                    >
                                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Add Schedule
                           </button>
        
    </center>

        
                            
      

        <div class="modal-footer">
		  <button type="submit" class="btn btn-primary" name = "btnSubmit">Submit</button>
        </div>
		</form>
	
        </div>
      </div>
      
    </div>
  </div>

</form>

    <!-- Modal -->
    <form method = "POST" action = "mfacility.php">
  <div class="modal fade" id="facilityEdit" role="dialog">
    <div class="modal-dialog modal-sm" style="width:600px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Facility</h4>
        </div>
        
        <div class="modal-body">
            <form method="post">
                    <div class="form-inline" hidden="hidden">
                        <div style = "float:right">
                        <label class="control-label"> Facility ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="EtxtFacID"
                                name = "EtxtFacID"
                                readonly="readonly"
                                >
                        </div>   
                    </div>

                   <center>
         <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

                    <tbody  style="text-align: center">
                <tr>

                    <td>    <label class="control-label"> Name*</label> </td>
                    <td>       <input type="text"
                                 
                                class="form-control"
                                id="EtxtFacName"
                                name="EtxtFacName"
                                required="required"> </td>
                </tr>
                <tr>
                    <td>  <label class="control-label"> Category</label> </td>
                     <td>       <select
                                
                                class="form-control"
                                id="EtxtFacCate"
                                name="EtxtFacCate"
                                >
                                    <option>Educational</option>
                                    <option>Conference/Meeting</option>
                                    <option>Multi-purpose</option>
                                    <option>Sports</option>
                            </select> </td>
                </tr>

                <tr>
                     <td>   <label class="control-label"> Address*</label> </td>
                     <td>       <input type="text" 
                                
                                class="form-control"
                                id="EtxtFacAddress"
                                name="EtxtFacAddress"
                                required="required"> </td>
                </tr>
                    
            </div>      
                    
</tbody>
</table>
</center>
                    
            </div>      
                    

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name = "btnSubmitEdit">Submit</button>
        </div>
        </form>
    
        </div>
      </div>
      
    </div>
  </div>

</form>

    <form method = "POST" action = "mfacility.php">
  <div class="modal fade" id="facilityDelete" role="dialog">
    <div class="modal-dialog modal-sm" style="width:600px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure you want to DELETE this facility?</h4>
        </div>
        
        <div class="modal-body">
            <form method="post">
                    <div class="form-inline" hidden="hidden">
                        <div style = "float:right">
                        <label class="control-label"> Facility ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="DtxtFacID"
                                name = "DtxtFacID"
                                readonly="readonly";
                                >
                        </div>   
                    </div>
               
                    
                    <center>
         <table  style="border-spacing: 17px;border-collapse: separate;font-size: 14px">

                    <tbody  style="text-align: center">
                <tr>

                    <td>    <label class="control-label"> Name*</label> </td>
                    <td>       <input type="text"
                                 
                                class="form-control"
                                id="DtxtFacName"
                                name="DtxtFacName"
                                readonly="readonly"> </td>
                </tr>
                <tr>
                    <td>  <label class="control-label"> Category</label> </td>
                     <td>       <select
                                
                                class="form-control"
                                id="DtxtFacCate"
                                name="DtxtFacCate"
                                readonly
                                >
                                    <option>Educational</option>
                                    <option>Conference/Meeting</option>
                                    <option>Multi-purpose</option>
                                    <option>Sports</option>
                            </select> </td>
                </tr>

                <tr>
                     <td>   <label class="control-label"> Address*</label> </td>
                     <td>       <input type="text" 
                                
                                class="form-control"
                                id="DtxtFacAddress"
                                name="DtxtFacAddress"
                                readonly="readonly"> </td>
                </tr>
                    
            </div>      
                    
</tbody>
</table>
</center>     
                    

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name = "btnSubmitDelete">Submit</button>
        </div>
        </form>
    
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