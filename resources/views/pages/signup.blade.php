<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.scss')}}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

        <div class="container">
                <form class="form-horizontal" role="form">
                    <h2>Signup Form</h2>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
                            <span class="help-block">Last Name, eg.: Smith, Harry</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lasttName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                            <span class="help-block">Last Name eg.: Smith, Harry</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" id="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" id="birthDate" class="form-control" style="padding:2px">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label col-sm-3">Gender</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="femaleRadio" value="Female">Female
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="maleRadio" value="Male">Male
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                    
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">I accept <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
    
</body>
</html>