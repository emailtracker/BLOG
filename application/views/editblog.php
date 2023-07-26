

<?php $this->load->view('layout/header')?>



<div class="container">

	<div class="row d-flex justify-content-center ">
		<h1 class='text-center'>Edit Blog</h1>
		<div class="col-md-6">
	<form name='formAdd' id='formAdd' action="<?= base_url()?>main/edit_post/<?= $blog['Employee_ID']?>" method="post" >
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" name='Name' value='<?= $blog['Name']?>'  id="Name" aria-describedby="emailHelp">
	<p><?= form_error('Name')?></p>
  </div>

  <div class="mb-3">
    <label for="Department" class="form-label">Department</label>
	<select class="form-select" name='department'>
  <option >Open this select menu</option>
  <!-- <option value="<?php echo $dept->department ?>"></option> -->
  <?php foreach($edit as $rows) : ?>
                            <option value="<?= $rows['department'];?>"><?= $rows['department'];?></option>
                          <?php endforeach; ?>
</select>
    

  </div>

  <div class="mb-3">
    <label for="Age" class="form-label">Age</label>
    <input type="text" class="form-control" name="Age" value='<?= $blog['Age']?>' id="Age" aria-describedby="emailHelp">
	<p><?= form_error('Age')?></p>

  </div>
	</div>
  <div class="d-flex justify-content-center">
	<div class="mb-3 form-group" >
    <label for="Salary" class="form-label">Salary</label>
		<input type="number" class="" name="Salary" value='<?= $blog['Salary']?>' id="Salary" aria-describedby="emailHelp" required>
    </div>
  </div>


	<div class="d-flex justify-content-center">
 <div class="mb-3 form-group">
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="<?= base_url()?>main/cancel"><button type="submit" class="btn btn-primary">Cancel</button>
</a>
</div>
</div>
</form>
		</div>
	</div>
</div>




<?php $this->load->view('layout/footer')?>



