<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/lecture/app/public/assets/bootstrap.min.css">
  <script src="/lecture/app/public/bootstrap.bundle.min.js"></script>

  <title>Lecturers</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <!-- BRAND -->
    <a class="navbar-brand" href="index.php?route=lecturers">Lecturers</a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">

        <!-- MENU COURSES -->
        <li class="nav-item">
          <a class="nav-link <?= (isset($_GET['route']) && ( $_GET['route'] === 'courses' || strpos($_GET['route'], 'courses/') === 0 )) ? 'active' : '' ?>"
             href="index.php?route=courses">Courses</a>
        </li>

      </ul>
    </div>

  </div>
</nav>





  <div class="container my-4">
    <div class="col-2 my-3">
      <a class="btn btn-primary" href="index.php?route=lecturers/create">Add New</a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>NIDN</th>
          <th>PHONE</th>
          <th>JOIN DATE</th>
          <th>ACTIONS</th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($data as $row): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['nidn'] ?></td>
          <td><?= $row['phone'] ?></td>
          <td><?= $row['join_date'] ?></td>
          <td>
            <a class="btn btn-success" href="index.php?route=lecturers/edit&id=<?= $row['id'] ?>">Edit</a>
            <a class="btn btn-danger" href="index.php?route=lecturers/delete&id=<?= $row['id'] ?>"
               onclick="return confirm('Yakin hapus?')">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>

    </table>
  </div>

</body>
</html>
