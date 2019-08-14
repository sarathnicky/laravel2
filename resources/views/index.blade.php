<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Applications</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
</head>
<body>
@include('inc.header')	
<form>
  <fieldset>
    <legend>Laravel CRUD Applications</legend>    
	<a href='{{ url("/create/") }}'' type="button" class="btn btn-danger">Add New</a>
    @foreach($articless as $articles)
    <table>
    <th>id</th>
    <th>name</th>
    <th>Mobile</th>
    <tr>
    	<td>{{ $articles->id}}</td>
    	<td>{{ $articles->name}}</td>
    	<td>{{ $articles->mobile}}</td>
    	<td><a href='{{ url("/update/{$articles->id}") }}'' type="button" class="btn btn-primary">Edit</a></td>
    	<td><a href='{{ url("/delete/{$articles->id}") }}'' type="button" class="btn btn-danger">Delete</a></td>
		<td><a href='{{ url("/create/") }}'' type="button" class="btn btn-danger">Add New</a></td>
		<td><a href='{{ url("/login/") }}'' type="button" class="btn btn-warning">Login</a></td>
    </tr>
    </table>
    @endforeach
    </fieldset>    
</form>
@include('inc.footer')
</body>
</html>