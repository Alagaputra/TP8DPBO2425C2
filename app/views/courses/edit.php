<!DOCTYPE html>
<html>
<head>
  <title>Edit Course</title>
  <link rel="stylesheet" href="/lecture/app/public/assets/bootstrap.min.css">
  <script src="/lecture/app/public/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?route=courses">Courses</a>
  </div>
</nav>

<div class="col-lg-6 m-auto">
  <form method="post" action="index.php?route=courses/update">

    <div class="card mt-4">

      <div class="card-header bg-warning text-white">
        <h3>Edit Course</h3>
      </div>

      <div class="card-body">

        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>NAME:</label>
        <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required><br>

        <label>SKS:</label>
        <input type="number" name="sks" value="<?= $row['sks'] ?>" class="form-control" required><br>

      </div>

      <div class="card-footer">
        <button class="btn btn-success">Update</button>
        <a class="btn btn-secondary" href="index.php?route=courses">Cancel</a>
      </div>

    </div>
  </form>
</div>

</body>
</html>
