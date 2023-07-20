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
       <div class="col-sm-6">
      <div class="form-container">
<h2 class="text-center">Subscribe for Latest Updates </h2>
      <p id="msgsub" style="text-align: center;"></p>
      <div id="form_area">
        <form id="userForm" method="POST">
    <input type="text" name="email" id="email" class="form-control"  placeholder="Enter Your Email..">
      <span class="text-danger hidden" id="emailError"></span>
    <br>
    <center><button name="sub_process" class="sub_btn btn btn-primary" id="subscribeButton">Subscribe </button> <img src="loader.gif" height="auto" width="50" id="subloader"></center>
    </form>
    </div>
    </div>
</div>
     <div class="col-sm-3">
         
     </div>
	</div>
</body>
</html>