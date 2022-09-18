<?php
	
		include('upload-code.php'); // Include upload code Script page.
		include("delete-code.php"); // Include delete code Script page.
		include("connectionw.php"); // Include delete code Script page.
		include("banner_code.php");
		
	?>

<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Image Upload</title>
	<style>
	
		html, body{background: white; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 40px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #735999; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
	</head>

	<body>


	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="upload-design.php">Product Management <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="banner_design.php">Banner Managament</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Hi! soban<span></span> </a></li>
        <li><a href="admin/login.php">Sign out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<!-------------------Main Content------------------------------>
	<div class="container main" >
		<div class="image-box">
			<h2>Image Upload</h2>
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
					<input type="text" placeholder="Enter image name" name="img-name" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">
				<strong>
					<?php if(isset($error)){echo $error;}?>
				</strong>
			</div>
		</div>
		
		<div class="col-md-6">
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Name</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
					    if(mysqli_num_rows($product_result) > 0)
					    {
					    	while($row = mysqli_fetch_array($product_result))
					        {
					        ?>
						      <tr>
						        <td><?php echo $row['id'];?></td>
						        <td><?php echo $row['img_name'];?></td>
						        <td>$<?php echo $row['img_path'];?></td>
						        <td>
						        	<a href="#" class="btn btn-primary">Edit</a>
						        </td>
						      </tr>
						    <?php 
							}
						}
						?>

				      
				    </tbody>
				  </table>
			</div>
			<div class="image-box">
			<h2>Image Delete</h2>
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="col-sm-12 login-box">
					<input type="text" placeholder="Enter image id" name="img-id" class="tb" />
					<br><br><br><input type="submit" value="Delete" name="btn_delete" class="btn" />
				</div>
				<div class="col-lg-12">
					<div class="msg">
							<strong>
								<?php if(isset($error)){echo $error;}?>
							</strong>

					</div>
				</div>
			</form>
		</div>
	</div>
	</body>
	</html>