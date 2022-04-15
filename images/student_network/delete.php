<?php
	include('config.php');
	$id=$_GET['id'];
	$deletequery="delete from all_list where id=$id";
	$query=mysqli_query($conn,$deletequery);
	header("location:table_create.php");
	if($query){
		?>
		<script>alert("Delate Successfully");</script>
		<?php
	}else{
		?>
		<script>alert("Delate Not Successfully");</script>
		<?php
	}
	
?>
