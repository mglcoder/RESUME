<?php


?>
<?php
	include('config.php');
	error_reporting(0);
	$id=$_GET['id'];
	$update="select * from all_list where id={$ids}";
	$update=mysqli_query($conn,$update);
	$arrdata=mysqli_fetch_array($update);

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg " style="background:rgba(0,0,0,0.1);">
		<div class="container">
			<a href="#" class="navbar-brand"><span style="color:#fff">STUD</span><span style="color:red;">ENT<span style="color:yellow;">_</span><span style="color:gery;">NET</span><span style="color:#fff">WORK</span></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse"data-target="#menu">
			<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav ml-auto text-center">
					<li class="nav-item"><a href="index.php"class="nav-link" id="mm">HOME</a>
					<li class="nav-item"><a href="table_create.php"class="nav-link" id="mm">STUDENT LIST</a></li>
					<li class="nav-item"><a href="#"class="nav-link" id="mm">DELETE</a></li>
					<li class="nav-item"><a href="#"class="nav-link" id="mm">UPDATE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row py-5">
			<div class="col-8 col-sm-6 col-md-4" style="background:#fff; margin:0 auto;border-radius:4px;">
				<form class="card-lg text-center"  action="" method="post" autocomplete="off">
					<div class="form-group mt-5">
						<input type="text" class="form-control" placeholder="Name" name="nm" value="<?php echo $arrdata['name']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Mobile number" name="mob" value="<?php echo $arrdata['name']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $arrdata['name']; ?>">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="pwd" value="<?php echo $arrdata['name']; ?>">
					</div>
					<div style="font-size:18px;"name="gender" class="ml-1" value="<?php echo $arrdata['name']; ?>">
						Male<input type="radio" value="male" name="gender" class="ml-2">
						Female<input type="radio" value="female" name="gender" class="ml-2">
						Other<input type="radio" value="other" name="gender" class="ml-2">
					</div>
					<button type="submit" class="btn btn-primary" style="margin:8px; width:150px;" name="regbtn">Register</button>
				</form>
			</div> 
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
	if(isset($_POST['regbtn'])){
		
		$name=$_POST['nm'];
		$mobile=$_POST['mob'];
		$email=$_POST['email'];
		$password=$_POST['pwd'];
		$gender=$_POST['gender'];
		
		/*echo $name."<br>";
		echo $mobile."<br>";
		echo $email."<br>";
		echo $password."<br>";
		echo $gender."<br>";*/
		
		$sql="INSERT INTO `all_list`(`name`,`mob`,`email`,`pwd`,`gender`) VALUES ('$name','$mobile','$email','$password','$gender')";
		
		$result=mysqli_query($conn,$sql);
		
		if($result){
			?>
				<script>
					alert("Data Successfully")
				</script>
			<?php
		}else{
			?>
				<script>
					alert("Data Not Successfully")
				</script>
			<?php
		}
	}





?>