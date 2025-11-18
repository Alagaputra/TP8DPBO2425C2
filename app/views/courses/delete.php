<!DOCTYPE html>
<html>
<head>
    <title>Delete Course</title>
    <link rel="stylesheet" href="/lecture/app/public/assets/bootstrap.min.css">
    <script src="/lecture/app/public/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?route=courses">Courses</a>
  </div>
</nav>

<div class="container mt-5">

    <div class="card">
        <div class="card-header bg-danger text-white">
            <h4>Delete Course</h4>
        </div>

        <div class="card-body">
            <p>Yakin ingin menghapus course berikut?</p>

            <ul>
                <li><strong>ID:</strong> <?= $row['id'] ?></li>
                <li><strong>Name:</strong> <?= $row['name'] ?></li>
                <li><strong>SKS:</strong> <?= $row['sks'] ?></li>
            </ul>

            <div class="mt-3">
                <a href="index.php?route=courses" class="btn btn-secondary">Cancel</a>

                <a href="index.php?route=courses/delete&id=<?= $row['id'] ?>&confirm=yes"
                   class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    </div>

</div>

</body>
</html>
