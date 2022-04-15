<?php
	include('config.php');
	error_reporting(0);
	
	$sql="SELECT * FROM all_list";
	$result=mysqli_query($conn,$sql);


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
		<div class="container py-5">
		<div class="row">
			<div class="col-md-12">
				<table id="table">
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>MOBILE NUMBER</th>
						<th>EMAIL</th>
						<th>PASSWORD</th>
						<th>GENDER</th>
						<th>UPDATE</th>
						<th>DELETE</th>
					</tr>
					<?php while($row=mysqli_fetch_assoc ($result)) { ?>
					
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['mob']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['pwd']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><a href="update.php?id=<?php echo $row['id'];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i></a></td>
						<td><a href="delete.php?id=<?php echo $row['id'];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></td>
					</tr>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script>
		$(document).ready(function () {
			$('[data-toggle="tooltip"]'),tolltip();
		});
	</script>
</body>
</html>