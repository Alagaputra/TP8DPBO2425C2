<!DOCTYPE html>
<html>

<head>
  <title>Create Lecturer</title>
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
    <form method="post" action="index.php?route=lecturers/store">
      <br><br>

      <div class="card">

        <div class="card-header bg-primary">
          <h1 class="text-white text-center">Create Lecturer</h1>
        </div><br>

        <label>NAME:</label>
        <input type="text" name="name" class="form-control" required> <br>

        <label>NIDN:</label>
        <input type="text" name="nidn" class="form-control" required> <br>

        <label>PHONE:</label>
        <input type="text" name="phone" class="form-control" required> <br>

        <label>JOIN DATE:</label>
        <input type="date" name="join_date" class="form-control" required> <br>

        <button class="btn btn-success" type="submit">Submit</button><br>
        <a class="btn btn-info" href="index.php?route=lecturers">Cancel</a><br>

      </div>
    </form>
  </div>

</body>
</html>
