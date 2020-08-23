
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
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Client Name</th>
      <th scope="col">Logo</th>
      <th scope="col">Created Date</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($records as $rec)
    <tr>
      <th scope="row">{{$rec->id}}</th>
      <td>{{$rec->client_name}}</td>
      <td><img src="{{ request()->root().Storage::url('app/public'.$rec->client_image_logo)}}"  alt="Team 1" style="width: 50px;height: 50px;"></td>
      <td>{{$rec->created_at}}</td>
	  <td><a href="{{ route('clientedit',$rec->id)}}">Edit</a>&nbsp;<a href="">Delete</a></td>
    </tr>
	@endforeach
   
  </tbody>
</table>
   </div>
  </body>

</html>