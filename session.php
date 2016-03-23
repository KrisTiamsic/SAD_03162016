<?php
	session_start();
	require("connection.php");	

	
	if(isset($_POST['btnSubmit'])){
		$username = $_POST['strPerAcc_Username'];
		$pwd = $_POST['strPerAcc_Password'];
		$q = mysqli_query($con, "select * from tblPersonnel_Account where strPerAcc_Username = '".$_POST['strPerAcc_Username']."' AND strPerAcc_Password = '".$_POST['strPerAcc_Password']."'");
		$row = mysqli_fetch_array($q);
		$num = mysqli_num_rows($q);
		
		if($num>0){
			session_start();
			isset($_SESSION['username'])?$_SESSION['username']:"";
			isset($_SESSION['pwd'])?$_SESSION['pwd']:"";
			$_SESSION['username'] = $row['strPerAcc_Username'];
			$_SESSION['pwd'] = $row['strPerAcc_Password'];
			
			if($_SESSION['username']=='admin'){
				if($_SESSION['pwd']=='password'){
					header("location:Doc_New.php");
				}
			}else{
				header("location:Doc_New.php");
			}
		}else{
			?>
			<script>alert('Wrong Input');</script>
			<?php
		}
	}
?>
