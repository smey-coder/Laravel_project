<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<div class="container mt-4">

  <h1 class="display-5">Student List</h1>
  <a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Create</a>

  <table class="table table-hover">
    <thead class="table-warning">
      <tr>
        <th>SID</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $s)
      <tr>
        <td>{{ $s->sid }}</td>
        <td>{{ $s->name }}</td>
        <td>
          <a href="{{ route('students.show', $s->sid) }}" class="btn btn-primary btn-sm">View</a>
          <a href="{{ route('students.edit', $s->sid) }}" class="btn btn-info btn-sm">Edit</a>

          <form method="POST"
                action="{{ route('students.destroy', $s->sid) }}"
                class="d-inline">
            @csrf
            @method('delete')
            <button type="button" class="btn btn-danger btn-sm xyz">
              Delete
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $students->links('pagination::bootstrap-5') }}

</div>

<script>
// CONFIRM DELETE
document.querySelectorAll('.xyz').forEach(btn => {
  btn.addEventListener('click', function () {
    let form = this.closest('form');

    Swal.fire({
      title: "Are you sure?",
      text: "This item will be permanently deleted.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "Yes, delete!"
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
      }
    });
  });
});
</script>

{{-- SUCCESS MESSAGE --}}
@if (session('success'))
<script>
Swal.fire({
  title: "Drag me!",
  icon: "success",
  draggable: true
});
</script>
@endif

</body>
</html>
