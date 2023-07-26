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
