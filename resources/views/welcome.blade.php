
<!doctype hmtl>
<html>

<head>
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
<h1><center>Homepage</center></h1>
    </div>
    <div class="container-fluid">
        <div class="row">
@foreach ($event as $event)
  <div class="col-md-3"><a href="/event/{{$event->id}}">  <img src="/{{$event->event_flyer}}" alt="event_flyer" height="150px" width="150px"/> </a> </div>
        @endforeach
</div>
</div>
    </body>

    </html>