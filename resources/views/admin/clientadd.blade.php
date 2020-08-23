
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
 <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


  <div class="container">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ URL::route('logout') }}">logout</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  </div>
  @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
   <div class="container">
    <form action="{{ URL::route('fileUpload') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="email">Client Name:</label>
    <input type="text"  name="client_name" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Client Image:</label>
    <input type="file"  name ="client_image_logo" class="form-control" id="file">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
   </div>
  </body>

</html>