<!doctype html>
<html>
<head>
<title> Create Event </title>
</head> 
<body> 
<h1> Create Event <h1> 
</body> 

<form method="POST" action="/createevent"
 accept-charset="UTF-8" class="form">
 
 <input name="_token" type="hidden" value="{{ csrf_token() }}">

 

 <div class="form-group">
 <label for="name">Your Name</label>
 <input class="form-control" placeholder="Your name"
 name="first_name" type="text">
 </div>


 <div class="form-group">
 <label for="name">Your Name</label>
 <input class="form-control" placeholder="Your name"
 name="last_name" type="text">
 </div>


 <div class="form-group">
 <input class="btn btn-primary" type="submit" value="Submit">
 </div>
 </form>


</body>
</html> 