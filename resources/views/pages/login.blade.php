<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/app.scss') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/app.scss') }}" />
</head>
<body>

        <div class="container" style="width:500px;">
                <form class="form-horizontal" role="form" action="" method="POST">

                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                  @if ( count( $errors ) > 0 )
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif
                    <h2>Login</h2>

                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Email</h4>
                        <div class="col-sm-12">
                            <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Password</h4>
                        <div class="col-sm-12">
                            <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                        </div>
                    </div>

                    <!--div class="form-group">
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"><a href="#">Remember me</a>
                                </label>
                            </div>
                        </div>
                    </div--> <!-- /.form-group -->
                    
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
    </form> 
</body>
</html>