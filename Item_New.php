  <script>
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
                    <!-- /sid                 <!-- /sidebar menu -->

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
                                    <h2>Requests </h2>
                                
                                    <div class="clearfix"></div>
                                    
                                </div>

  <button type="submit" class="btn btn-success" name="btnnewreq" data-toggle="modal" data-target="#form"> Add New Request</button>
  <button type="submit" class="btn btn-success" name="btnnewreq" data-toggle="modal" data-target="#reqitem"> Add Borrow Items</button>
                                <div class="x_content">
                                
                                <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px">
                                        <thead>
                                            <tr class="headings">
                                                
                                        <th>Request ID</th>
                                        <th>Requestor</th>
                                        <th>Date Requested</th>
                                        <th>Status</th>
                                        <th>Update</th>
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
                                            <td>$resid</td>
                                            <td>$reqdate</td>
                                            <td>$reqStat</td>
                                            <td>
                                                <button type = 'button' data-toggle = 'modal' data-target = '#updateStat' onclick = 'upStat(this)' value = '$reqid' class='btn btn-primary'>Update Status</button>
                                            </td>
                                            <td>
                                                <input type = hidden value = $reqid id = 'hidden_rid_$reqid' name = >
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

















        <!--update-->
 <form method=post action = "itemNew.php">
  <div class="modal fade" id="updateStat" role="dialog">
    <div class="modal-dialog modal-sm">
    
 
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Item Request</h4>
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
                                style="margin-left:20px; width:100px";
                                class="form-control"
                                id="res"
                                name = "res"
                                >
                                <option> new </option>
                                <option> released </option>
                                <option> returned </option>
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


<!---FROM OF ADD REQUEST-->

  <form method=post action="itemNew.php">
 <div class="modal fade" id="form" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: Montserrat;">Request Items</h4>
        </div>
        
        <div class="modal-body">
                     <div class="form-inline">
                 <label style="margin-left: 10px;">Request ID:</label> 
                            <input type="text" class="form-control" name="reqitemid" placeholder="ID" style="margin-right: 10px;" readonly="readonly">
              <label style="margin-left: 10px;">Resident ID:</label> 
              <input type="text" class="form-control" name="residentID" placeholder="ID" style="margin-right: 10px;" readonly="readonly">
                         <div class="form-inline" hidden="hidden">
                            <label class="control-label" style="margin-left: 20px;"> Requestor Type:</label> <br>
                        <div class="radio" style="margin-left: 70%;">
                            <input type="radio" name="resType" id="resType" checked value="resident"> Resident
                            <input type="radio" name="resType" id="resType" value="nresident"> Non-Resident
                        </div> </div>
                    </div>
                    <br>
                    <div class="form-inline">
                    <label style="margin-left: 10px;">Borrower's Details</label>  <br>
                   <label style="margin-left: 10px;">First Name: </label>  
                    <input type="text" class="form-control" name="txtfn" placeholder="First name" style="margin-right: 5px;">
                    <label style="margin-left: 5px;">Middle Name: </label>  
                    <input type="text" class="form-control" name="txtmn" placeholder="Middle Name" style="margin-right: 5px;">
                    <label style="margin-left: 5px;">Last Name: </label>  
                    <input type="text" class="form-control" name="txtln" placeholder="Last Name" style="margin-right: 5px;">
                   <br> <br>
                    <label style="margin-left: 10px;">Address:</label>  
                            <input type="text" class="form-control" name="add" placeholder="Address" size="100" style="margin-right: 10px;">
                     <br> <br>
                    <label>Date of Birth:</label>    
                            <input type="date"  value="2016-12-31" class="form-control" name="bday" placeholder=" YYYY/MM/DD" style="margin-right: 10px;">
                        <label class="control-label"> Civil Status:</label> 
                            <select id = "cs"  name = "cs">
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widow</option>
                            </select>
                            </div>          
                        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="btnSubmitItem"  data-toggle="modal" data-target="#reqitem">Submit</button>
        </div>

      </div>
    </div>
  </div>
  </form>


<!---FROM OF ADD REQUEST ITEMS-->







  <form method=post>
 <div class="modal fade" id="reqitem" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: Montserrat;">Request Items</h4>
        </div>
        
        <div class="modal-body">
                     <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Request ID:</label> 
                            <select  
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="requ"
                                name = "requitem"
                                >
                                <?php
                                require("connection.php");
                                $query = mysqli_query($con,"select * from request");

            while($row = mysqli_fetch_array($query))
            {
                echo "<option> $row[ReqID]</option>";
            }

                    ?>
                                </select>
                        </div>

               <label style="margin-left: 10px;">Borrowing Details</label>  <br>     
              <label>Date of Reservation:</label>  
                    <input type="date"   value="2016-01-01" class="form-control" name="datetime" placeholder=" YYYY/MM/DD" style="margin-right: 10px;">
                 <br><br>
                 <label style="margin-left: 10px;">Purpose:</label> 
                      <input type="text" class="form-control" name="purpose" placeholder="Purpose" style="margin-right: 10px;">
                        <br><br>
                    </div>

           <div class="form-inline">     
               <label style="margin-left: 25px;"> Items: </label><br>

               <?php
                            require("connection.php");
                            $q = mysqli_query($con, "Select * from item_inventory where ItemStatus != 'inactive'");

                            echo"<table align = center style = width:50%>
                            <thead>
                              <th></th>
                              <th>Item</th>
                              <th>Quantity</th>
                              <th></th>

                            </thead>
                            <tbody>";

                            while($row = mysqli_fetch_array($q))
                            {
                              $id = $row['ItemID'];
                              $description = $row['ItemDesc'];
                              $quan = $row['ItemQuantity'];

                               echo "<tr>
                                                
                                <td> 
                                  <input type = checkbox value = $id name = 'item[]''>
                                </td>
                                <td>$description</td>
                                <td>$quan</td>
                                               
                                <td>
                                  <input type = 'hidden' value = '$id' id='hidden_id_$id'>
                                  <input type = 'hidden' value = '$description' id='hidden_desc_$id'>
                                  <input type = 'hidden' value = '$quan' id='hidden_quan_$id'>
                                                
                                </td>

                                </tr>
                                ";
                                                
                            }
                            echo "</tbody>
                            </table>";

                            ?>
</div> <!--form inline-->

                            </div> <!--///modal body-->

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="itemsubmit">Submit</button>
        </div>

    </div>
</div>
</div>
</form>
<?php
        $bor = $_POST['requitem'];
        $date = $_POST['datetime'];
        $pur = $_POST['purpose'];

    if (isset($_POST['itemsubmit']))
    {

        $query = mysqli_query($con, "insert into borrowing_request values ('$bor', '$date','$pur')");

    if(isset($_POST['item']))
        {
            foreach ($_POST['item'] as $i) 
            {

                $query = mysqli_query($con, "insert into borrow_request_detail values ('$bor','$i','new')");
            }
        }
            header('Location: Item_New.php');
    }


?>



          <form method=post>
 <div class="modal fade" id="additemform" role="dialog">
 
    <div class="modal-dialog modal-lg">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: Montserrat;">Add Item</h4>
        </div>
        
        <div class="modal-body">

                     <div class="form-inline">
                <label class="control-label"> Item Description: </label> 
                            <select  
                                style="margin-left:20px; width:150px";
                                class="form-control"
                                id="items"
                                name = "items"
                                >

                                <?php
                                require("connection.php");
                                $query = mysqli_query($con,"select ItemDesc from item_inventory");

            while($row = mysqli_fetch_array($query))
            {
                echo "<option> $row[ItemDesc]</option>";
            }
                                ?>

                            </select>

                    <label style="margin-left: 5px;">Quantity: </label>  
                    <input type="number" class="form-control" name="quan" min="1" placeholder="Quantity" style="margin-right: 5px;">
                </div> </div> <!--modal body-->

<br>

        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary" name="btnitemadd">Submit</button>
        </div>
                    <?php
            require("connection.php");
            if (isset($_POST['btnitemadd']))
            {
                $quan = $_POST['quan'];
                 $item = $_POST['items'];
                 echo "<script> alert('$item'); </script>";
            $selectitemID = mysqli_query($con,"select ItemID from item_inventory where ItemDesc = '$item' ");
                        while($row = mysqli_fetch_array($selectitemID))
                        {
                            $item = $row['0'];
                        }

                 $query = mysqli_query($con, "insert into added_items values (NULL, '$item', null, '$quan', now())");                          
            }
            ?>


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
                  <!-- Modal add item content-->
                  
                <!-- /page content -->
            </div>

        </div>

</body>

</html>