<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Blog Application</h2>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


  <form action="{{url('store')}}"method="POST"enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{old('title')}}"> <br>
    </div>
    <div class="form-group">

      <label for="description">Description:</label>
      <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Write something....." value="{{old('description')}}">{!!old('description')!!}</textarea> <br>

     <label for="image">image:</label>
      <input type="file" class="form-control" id="image" placeholder="image" name="image"><br>

<button type="Submit" class="btn btn-success">Submit</button>




</body>
</html>
