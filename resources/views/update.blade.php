<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Application</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
</head>
<body>
@include('inc.header')
@foreach($articles as $articles_update)	
<form action='{{ url("/update_change/{$articles_update->id}") }}' method="post">
  {{csrf_field()}}
  <fieldset>
    <legend>Laravel CRUD Application</legend>         
	
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
  <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$articles_update->name}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$articles_update->mobile}}">
    </div>
    @endforeach
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@include('inc.footer')
</body>
</html>