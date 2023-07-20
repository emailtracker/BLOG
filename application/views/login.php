<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-4 ">
			<?php $mag=$this->session->userdata('msg')?>
			<?php if(!empty($mag)){ ?>

		<div class="alert alert-danger" role="alert">
				<?php echo $mag?>
	</div>
	<?php } ?>



		<form action='<?= base_url()?>main/index' method="post" id='loginForm' name='loginForm'>
			<h1 class='mt-2 text-center'>Login Form</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" value='<?= set_value('username')?>' id="username" name='username' aria-describedby="emailHelp">
		<p><?= form_error('username')?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name='password' id="password">
		<p><?= form_error('password')?></p>
  </div>
 
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>
		</div>
	</div>
</div>
	



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
