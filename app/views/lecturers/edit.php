<!DOCTYPE html>
<html>

<head>
  <title>Edit Lecturer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="/lecture/app/public/assets/bootstrap.min.css">
  <script src="/lecture/app/public/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php?route=lecturers">Lecturers</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?route=lecturers">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-lg-6 m-auto">

    <form method="post" action="index.php?route=lecturers/update">

      <br><br>
      <div class="card">

        <div class="card-header bg-warning">
          <h1 class="text-white text-center">Update Lecturer</h1>
        </div><br>

        <input type="hidden" name="id" value="<?= $row['id'] ?>" class="form-control">

        <label>NAME:</label>
        <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required> <br>

        <label>NIDN:</label>
        <input type="text" name="nidn" value="<?= $row['nidn'] ?>" class="form-control" required> <br>

        <label>PHONE:</label>
        <input type="text" name="phone" value="<?= $row['phone'] ?>" class="form-control" required> <br>

        <label>JOIN DATE:</label>
        <input type="date" name="join_date" value="<?= $row['join_date'] ?>" class="form-control" required> <br>

        <button class="btn btn-success" type="submit">Update</button><br>
        <a class="btn btn-info" href="index.php?route=lecturers">Cancel</a><br>

      </div>
    </form>
  </div>

</body>
</html>
