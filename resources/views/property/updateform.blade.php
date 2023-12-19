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
    <h2>Property form</h2>
    <form action="/property/{{$data->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$data->name}}">
        </div>
        <div class="mb-3">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$data->address}}">
        </div>
        <div class="mb-3">
            <label for="rooms">rooms:</label>   
            <input type="number" class="form-control" id="rooms" placeholder="Enter no of rooms" name="rooms" value="{{$data->rooms}}">
        </div>       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</body>
</html>
