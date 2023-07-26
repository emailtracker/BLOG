<?php $this->load->view('layout/header')?>

<div style="margin: 20px;">
  <div class="container">

	<div class="row d-flex justify-content-center ">
		<h1 class='text-center'>Add Detail</h1>
  <form class="form-control" method="POST" action="<?= base_url()?>/main/dept_data" >
    <div class="mb-3">
      <label for="Name" class="form-label"> Name:</label>
      <input type="text" class="" name="Name" id="Name" placeholder="Enter  name" required>
    </div>
    
    <div class="mb-3">
      <label for="department" class="form-label"> Department:</label>
      <select class="form-select" name='department'>
  <option >Open this select menu</option>
  <!-- <option value="<?php echo $dept->department ?>"></option> -->
  <?php foreach($abc as $row) : ?>
                            <option value="<?= $row['department'];?>"><?= $row['department'];?></option>
                          <?php endforeach; ?>
</select>
    </div>
    <div class="mb-3">
      <label for="Age" class="form-label"> Age:</label>
      <input type="number" class="" name="Age" id="Age" placeholder="Enter age" required>
    </div>
    <div class="mb-3">
      <label for="Salary" class="form-label"> Salary:</label>
      <input type="number" class="" name="Salary" id="Salary" placeholder="Enter Salary" required>
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>


  </form>
</div>
</div>
</div>
</body>
</html>






