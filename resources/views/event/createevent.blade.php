<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
        
        <div class="container">
                <div class="row">
                        <div class="col-sm-8"
                        <form class="form-horizontal" role="form">
                                        <h2>Create Event</h2>
                                        <div class="form-group">
                                            
                                            <div class="col-sm-7">
                                                <label for="firstName" class="col-sm-5 control-label" style="text-align:left;">Event Name</label>
                                                <input type="text" id="firstName" placeholder="Name Of Event" class="form-control" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-sm-7">
                                                        <label for="description" class="col-sm-5 control-label" style="text-align:left;">Description</label>
                                                        <textarea class="form-control" rows="5" id="comment" placeholder="Write a short note to descripe your event"></textarea>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <div class="col-sm-7">
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optradio">Free
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optradio">Paid
                                                        </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-sm-7">
                                        <ul class="nav navbar-nav">
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sponsors <b class="caret"></b></a>
                                                                <div class="dropdown-menu">
                                                                         <div class="form-group">
                                                                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                                                        <div class="col-lg-11">
                                                                                <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                                                                        </div>
                                                                        </div>
                                                                </div>
                                                        </li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                        <div class="col-sm-7">
                                                            <label for="orgName" class="col-sm-12 control-label" style="text-align:left;">Organizer Name</label>
                                                            <input type="text" id="OrgName" placeholder="Organizer Name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                                <div class="col-md-12">
                                                                                <form method="post" action="#" id="#">
                                                                             
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group files color">
                                                                                  <label>Attach Event Logo </label>
                                                                                  <input type="file" class="form-control" multiple="">
                                                                                </div>
                                                                                
                                                                              
                                                                            </form>
                                                                                
                                                                                
                                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                                        <div class="col-md-12">
                                                                                        <form method="post" action="#" id="#">
                                                                                     
                                                                                        
                                                                                        
                                                                                        
                                                                                        <div class="form-group files color">
                                                                                          <label>Attach Organizer Logo </label>
                                                                                          <input type="file" class="form-control" multiple="">
                                                                                        </div>
                                                                                        
                                                                                      
                                                                                    </form>
                                                                                        
                                                                                        
                                                                                    </div>
                                                                </div>
                                        <div class="form-group">
                                             <div class="col-sm-7">
                                                <label for="password" class="col-sm-5 control-label" style="text-align:left;">Password</label>
                                                <input type="password" id="password" placeholder="Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-sm-7">
                                                        <label for="birthDate" class="col-sm-5 control-label" style="text-align:left;">Date of Birth</label>
                                                <input type="date" id="birthDate" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <div class="col-sm-7">
                                                <label for="country" class="col-sm-5 control-label" style="text-align:left;">Country</label>
                                                <select id="country" class="form-control">
                                                    <option>Afghanistan</option>
                                                    <option>Bahamas</option>
                                                    <option>Cambodia</option>
                                                    <option>Denmark</option>
                                                    <option>Ecuador</option>
                                                    <option>Fiji</option>
                                                    <option>Gabon</option>
                                                    <option>Haiti</option>
                                                </select>
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
                                        </div> 
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Meal Preference</label>
                                            <div class="col-sm-9">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">I accept <a href="#">terms</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                        <div class="col-sm-4">
                        <div style="background-color: orange; height: 250px;">
                                <h3>Preview</h3>
                        </div>
                </div>
        </div>
</body>
</html>