<!doctype html>

<html>

<head>
<title> Dashboard </title>

</head>
<body>

@if(!Auth::guest())	
<h1>Welcome</h1> {{ Auth::user()->first_name }}
@else
<a href="#login"> login </a>
@endif

@if(!Auth::guest())
<a href="/logout">Logout 
@else
<a href="/signup">signup</a>
@endif


</body> 

</html> 