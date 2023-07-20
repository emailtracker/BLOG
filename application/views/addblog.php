

<?php $this->load->view('layout/header')?>



<div class="container">

	<div class="row d-flex justify-content-center ">
		<h1 class='text-center'>Add Blog</h1>
		<div class="col-md-6">
	<form name='formAdd' id='formAdd' action="<?= base_url()?>main/add" method="post" >
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name='title' value='<?= set_value('title') ?>'  id="title" aria-describedby="emailHelp">
	<p><?= form_error('title')?></p>
  </div>

  <div class="mb-3">
    label for="description" class="form-label">Description</label>
	<textarea class="form-control" name="description"  placeholder="Leave a comment here" id="description"><?= set_value('description') ?></textarea>
	<p><?= form_error('description')?></p>

  </div>

  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" name="author" value='<?= set_value('author') ?>' id="author" aria-describedby="emailHelp">
	<p><?= form_error('author')?></p>

  </div>
	<div class="mb-3">
    <label for="author" class="form-label">Type</label>
		<select class="form-select" name='type'>
  <option >Open this select menu</option>
  <option value="featured">Featured</option>
  <option value="promo">Promotional</option>
</select>
    

  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		</div>
	</div>
</div>




<?php $this->load->view('layout/footer')?>



