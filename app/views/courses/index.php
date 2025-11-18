<!DOCTYPE html>
<html>
<head>
  <title>Courses</title>
  <link rel="stylesheet" href="/lecture/app/public/assets/bootstrap.min.css">
  <script src="/lecture/app/public/bootstrap.bundle.min.js"></script>
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
  <a class="btn btn-primary mb-3" href="index.php?route=courses/create">Add Course</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SKS</th>
        <th>ACTIONS</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($data as $row): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['sks'] ?></td>
          <td>
            <a class="btn btn-success"
               href="index.php?route=courses/edit&id=<?= $row['id'] ?>">Edit</a>

            <a class="btn btn-danger"
               href="index.php?route=courses/delete&id=<?= $row['id'] ?>"
               onclick="return confirm('Yakin hapus course ini?')">
               Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
