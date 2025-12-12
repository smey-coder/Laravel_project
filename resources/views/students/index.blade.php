<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="display-3">Student</div>
    <table class="table table-hover">
      <thead class="table-warning">
        <th>SID</th>
        <th>Name</th>
        <th>Actions</th>
      </thead>
      <tbody class="table-light">
        @foreach ($students as $s)
        <tr>
          <td>{{ $s->sid }}</td>
          <td>{{ $s->name }}</td>
          <td>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>
