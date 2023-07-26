<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="icon" href="<?= base_url()?>assets/img/core-img/favicon.ico">

<!-- Style CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/style.css">
	<title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Database</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	  <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="<?= base_url()?>main/home">View Page</a>
        </li>
				<li class="nav-item">
          <!-- <a class="nav-link" href="<?= base_url()?>main/latest">Home</a> -->
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>main/add_page">Add page</a>
        </li>
		<li class="nav-item ms-5">
          <a class="nav-link fw-bolder" style="color:red" href="<?= base_url()?>main/logout">Sign Out</a>
        </li>
        
  
    </div>
  </div>
</nav>
