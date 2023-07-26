<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Subscribe & Unsubscribe system in PHP - Techno Smarter </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="subscribe_scripts.js"></script>
</head>
<body>
	<div class="container">
 <div class="row">
     <div class="col-sm-3">
     </div>
      <h2>Registration</h2>
<?php echo validation_errors(); ?>
<form action="<?php echo base_url('main/reg'); ?>" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" required>

  <label for="email">Email:</label>
  <input type="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" name="password" required>

  <input type="submit" value="Register">
</form>

     </div>
	</div>
</body>
</html>