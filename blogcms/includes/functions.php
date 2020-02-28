<?php	

	function message()
	{
		if (isset($_SESSION['succcessMessage']) && $_SESSION['succcessMessage'] != "") {
			echo "<div class='alert alert-success'>".$_SESSION['succcessMessage']."</div>";
			$_SESSION['succcessMessage'] = "";
		}elseif (isset($_SESSION['errorMessage']) && $_SESSION['errorMessage'] != "") {
			echo "<div class='alert alert-danger'>".$_SESSION['errorMessage']."</div>";
			$_SESSION['errorMessage'] = "";
		}
	}//end message function

?>