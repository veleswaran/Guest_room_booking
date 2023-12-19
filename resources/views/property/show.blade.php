<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
    <h2>Property List Table</h2>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Property Name</th>
            <th>Address</th>
            <th>Number of rooms</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($property as $pro)
            <tr>
                <td>{{$pro->name}}</td>
                <td>{{$pro->address}}</td>
                <td>{{$pro->rooms}}</td>
                <td class="d-flex">
                    <form method="POST" action="/property/{{$pro->id}}" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/property/{{$pro->id}}/edit" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</body>
</html>
