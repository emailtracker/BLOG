

<?php $this->load->view('layout/header')?>



<div class="container">

	<div class="row d-flex justify-content-center ">
		<h1 class='text-center'>Add Detail</h1>
		<div class="col-md-6">
	<form name='formAdd' id='formAdd' action="<?= base_url()?>main/add" method="post" >
  <div class="mb-3">
    <label for="title" class="form-label">Name</label>
    <input type="text" class="form-control" name='Name' value='<?= set_value('Name') ?>'  id="Name" aria-describedby="emailHelp">
	<p><?= form_error('Name')?></p>
  </div>

  <div class="mb-3">
    <label for="Department" class="form-label">Department</label>
    <select class="form-select" name='department'>
  <option >Open this select menu</option>
  <!-- <option value="<?php echo $dept->department ?>"></option> -->
  <?php foreach($abc as $row) : ?>
                            <option value="<?= $row['department'];?>"><?= $row['department'];?></option>
                          <?php endforeach; ?>
</select>
    

  </div>

  <div class="mb-3">
    <label for="Age" class="form-label">Age</label>
    <input type="text" class="form-control" name="Age" value='<?= set_value('Age') ?>' id="Age" aria-describedby="emailHelp">
	<p><?= form_error('Age')?></p>

  </div>
	<div class="mb-3">
    <label for="Salary" class="form-label">salary</label>
		<input type="number" class="form-control" name="Salary" value='<?= set_value('Salary') ?>' id="Salary" aria-describedby="emailHelp">
    

  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		</div>
	</div>
</div>

<!DOCTYPE html>
<html>
<head>
  <title>Department Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

<div style="margin: 20px;">
  <h2>Department Information</h2>
  <form class="form-control" method="POST" action="<?= base_url()?>/main/dept_subm" >
    <div>
      <label for="deptName" class="form-label">Department Name:</label>
      <input type="text" class="" name="department" id="deptName" placeholder="Enter department name" required>
    </div>
    <!-- <div>
      <label for="deptDescription">Description:</label>
      <textarea id="deptDescription" placeholder="Enter department description" required></textarea>
    </div> -->
    <div>
      <input type="submit" value="Submit">
    </div>


  </form>
</div>

</body>
</html>



<?php $this->load->view('layout/footer')?>



