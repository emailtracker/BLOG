<?php $this->load->view('layout/header')?>


<h1 class='text-center mt-3'></h1>

<h3 class=' mt-3'>List data</h3>


<div class="container" id='msgg'>
	<div class="row">
		<div class="col-md-4 offset-4 "> 
			<?php $msg= $this->session->userdata('success') ?>
			<?php if(!empty($msg)){ ?>
		<div class="alert alert-success" role="alert">
				<?= $msg?>
	</div>
	<?php }?>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Age</th>
	  <th scope="col">Salary</th>

	  <!-- <th scope="col">Date</th> -->

	  <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
	<?php if(!empty($input)){?> 
		<?php foreach ($input as $value):?>

    <tr>
      <td><?php echo $value['Employee_ID'] ?></td>
      <td><?php echo $value['Name'] ?></td>
      <td><?php echo $value['department'] ?></td>
      <td><?php echo $value['Age'] ?></td>
	  <!-- <td><?php if( $value['type']=='featured'){
		echo 'Featured';
	  } 
	  elseif($value['type']=='promo'){
		echo 'Promotional';

	  }
	  else{
		echo 'N/A';

	  }
	   ?></td> -->
	   <td><?php echo $value['Salary']?></td>

	  <!-- <td><?php echo $value['created_at'] ?></td> -->
	  <td>
		<a href="<?= base_url()?>main/edit_view/<?= $value['Employee_ID']?>"><button  class="btn btn-success">Edit</button></a>
		<a href="<?= base_url()?>main/delete/<?= $value['Employee_ID']?>"><button  class="btn btn-danger">Delete</button></a>

	  </td>


    </tr>
    <?php endforeach;?>
	<?php }else{?>
		<tr>
		<td>NO data available</td>
	   </tr>
    <?php }?>
  
  </tbody>
</table>
		</div>
	</div>
</div>




<script>
		setTimeout(function(){
			location.reload()
		},3000)
	
</script>

<?php $this->load->view('layout/footer')?>

