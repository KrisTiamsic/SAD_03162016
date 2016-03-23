<?php

            
           

   
              
            require("connection.php");
                
                

            if(isset($_POST['btnSubmit']))
            {
            
                 $Day = array();
            $TimeFrom = array();
            $TimeTo = array();

                if((isset($_POST["txtTimeFrom"])) && (isset($_POST["txtFDay"])) && (isset($_POST["txtTimeTo"])))
                {

                    $ctr = 0;
                    foreach($_POST["txtFDay"] as $key => $text_field){
                         $Day[$ctr] = "";
                        $Day[$ctr] .= $text_field;
                        $ctr++;
                    }
                    
                    $ctr = 0;
                    foreach($_POST["txtTimeFrom"] as $key => $text_field){
                        $TimeFrom[$ctr] = "";
                        $TimeFrom[$ctr] .= $text_field;
                        $ctr++;
                    }

                    $ctr = 0;
                    foreach($_POST["txtTimeTo"] as $key => $text_field){
                        $TimeTo[$ctr] = "";
                        $TimeTo[$ctr] .= $text_field;
                        $ctr++;
                    }
                    
                    $ctr = 0;
                        while ((isset($TimeTo[$ctr])) && ($TimeFrom[$ctr]!=" "))
                        {
                               
                               $ID = $_POST['txtFacID'];         
                            
                        $query = "insert into facility_schedule( FacilitySchedID, Day, OpeningTime, ClosingTime, FSchedStatus) values ('$ID','$Day[$ctr]', '$TimeFrom[$ctr]', '$TimeTo[$ctr]','active')";

                             //$query = "insert into facility_schedule( FacilitySchedID, Day, OpeningTime, ClosingTime, FSchedStatus) values ('1','$Day[$ctr]', '$TimeFrom[$ctr]', '$TimeTo[$ctr]','active')";

                            $res = mysqli_query($con, $query);

                            if(!$res){
                                //echo"$facID";
                                die("query failed " . mysqli_error($con));
                            }
                            else{
                                echo "data updated";
                            }
                            $ctr++;
                        }//while
                }
            }
         header('location: maintenance_facilitysched.php');
?>