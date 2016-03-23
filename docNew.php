
  <?php

    require("connection.php");

    if(isset($_POST['btnSubmit']))
    {
        $rtype = $_POST['resType'];

        if($rtype == "resident")
        {
            $ln = $_POST['ln'];
            $fn = $_POST['fn'];
            $mn = $_POST['mn'];

            $dob = $_POST['dob'];
            $cs = $_POST['cs'];


            $q = mysqli_query($con, "select * from resident_personaldata where LastName = '$ln'and FirstName = '$fn'and MidName = '$mn'and Birthdate = '$dob'and CivilStatus = '$cs'");

            

            
            

                while($row = mysqli_fetch_array($q))
                {
                        


                    if($row == null)
                    {
                        echo" <script type = text/javascript>
                            alert('no records');
                            </script>";

                    }
                       else
                    {
                        echo"<script type = text/javascript>
                        alert('successful request');
                        </script>";



                        $idRes = $row[0];
                    

                    }


                    $query = mysqli_query($con, "insert into request values (null, 'Document', '$idRes', now(), 'new', null)");
               
                }


        }

         header('Location: Doc_New.php');
    }


    else if (isset($_POST['btnUpdate']))
    {
        $id = $_POST['re'];
        $st = $_POST['res'];


        $query = mysqli_query($con, "update request set Status = '$st' where ReqID = '$id'");


            header('Location: Doc_New.php');
    }


?>