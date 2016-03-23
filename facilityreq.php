<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
               
                $datereq = $_POST['FRDate'];
                $sur = $_POST['FtxtSur'];
                $given = $_POST['FtxtGiven'];
                $mid = $_POST['FtxtMid'];
                $address = $_POST['FAddress'];
                $mobile = $_POST['FMobile'];
                $dateres = $_POST['FResDate'];
                $timefrom = $_POST['FResTimeFrom'];
                $timeto = $_POST['FResTimeTo'];
                $purpose = $_POST['FPurpose'];
                $facility = $_POST['txtFacID'];

                $query1 = "insert into nonresident(LastName, FirstName, MidName, Address, ContactNo) values ('$sur', '$given', '$mid', '$address', 'mobile')";

                $res1 = mysqli_query($con, $query1);
                if(!$res1){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }

                $id = mysqli_insert_id($con);

                $query2 = "insert into request(OfficialID, RequestorID, ReqDate) values ('1', '$id', '$datereq')";

                $res2 = mysqli_query($con, $query2);
                if(!$res2){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }


                $id2 = mysqli_insert_id($con);

                $query3 = "insert into facility_request(FReqID,FacilityID, Date, TimeFrom, TimeTo, Purpose, FReqStatus) values ('$id2', '$facility', '$dateres','$timefrom', '$timeto', '$purpose', 'active')";

                $res3 = mysqli_query($con, $query3);
                if(!$res3){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
       
       
        }
         else if(isset($_POST['btnSubmitEdit']))
        {

                $reqID = $_POST['EFReqID'];
                $status = $_POST['FStatus'];

                $query = "update facility_request set FReqStatus ='$status' where FReqID = '$reqID'";

                $res = mysqli_query($con, $query);

                if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
        }


        header('location: Fac_Req.php');

?>