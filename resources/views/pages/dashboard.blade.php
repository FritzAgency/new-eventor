<!doctype html>

<html>

<head>
<title> Dashboard </title>

</head>
<body>

@if(!Auth::guest())	
<h1> Welcome, {{ Auth::user()->first_name }}</h1></br> 
@else
<a href="#login"> login </a>
@endif

@if(!Auth::guest())
<p> <a href="/logout">Logout </p>
@else
<a href="/signup">signup</a>
@endif


</body> 

</html> 