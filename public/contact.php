<?php  
	require __DIR__ . '/../app/src/get-username.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $json_data['user']['username']; ?>'s badges</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../app/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<?php
		include('../app/views/header.php');
		?>
		<div class="row">
			<div class="col-sm-8">
				<!-- main section  -->
				<?php include('../app/views/contact-form.php'); ?>

			</div>
			<div class="col-sm-4">
				<!-- sidebar section  -->
				<?php include('../app/views/sidebar.php'); ?>
			</div>
			
		
		</div>
		<div class="row">
			<div class="col=sm-12">
				<!-- footer section  -->
				<?php include('../app/views/footer.php'); ?>
			</div>
		</div>
	</div>

</body>
</html>