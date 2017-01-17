<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Venta</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">


	<!-- Custom Fonts -->
	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="ingreso col-xs-6 col-xs-offset-3">


		<h1 class="col-xs-12  ">AdminLTE</h1>
		<form   action="<?php echo base_url();?>cLogin/ingresar" method="post">

			<div class="form-group has-feedback">
				<input type="text" name="Txtusuario" class="form-control" placeholder="usuario">
				
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="Txtpass" class="form-control" placeholder="Password">
				
			</div>
			<div class="row">


				<div class="col-xs-12 col-md-6  col-md-offset-6">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
				</div>
				
			</div>	
		</form>

	</div>
	
	
</body>
</html>