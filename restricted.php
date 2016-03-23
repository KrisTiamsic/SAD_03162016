<?php
	session_start();
	
	if(isset($_SESSION['username'])){
		$strPerAcc_Username = $_SESSION['username'];
	}else{
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
		<script type = \"text/javascript\">
		alert(\"unauthorized access! going back to main menu.\");
		</script>";
	}
?>
