<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="all_student";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if($conn){
		?>
			<script>
			//	alert("Connection Successfully");
			</script>
		<?php
	}else{
		?>
			<script>
				alert("Connection  Falid");
			</script>
		<?php
	}
?>