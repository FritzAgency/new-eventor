<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link href="{{ asset('/css/test.css') }}" rel="stylesheet">
<link href="{{ asset('css/test.css') }}" rel="stylesheet" type="text/css" >
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-sm-12"
<form class="form-horizontal" role="form">
    <h2>Create Event</h2>
    <div class="form-group">
        
        <div class="col-sm-12">
            <label for="firstName" class="col-sm-5 control-label" style="text-align:left;">Event Name</label>
            <input type="text" id="firstName" placeholder="Name Of Event" class="form-control" autofocus>
        </div>
    </div>
    <div class="form-group">
            <div class="col-sm-12">
                    <label for="description" class="col-sm-5 control-label" style="text-align:left;">Description</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Write a short note to descripe your event"></textarea>
            </div>
    </div>

    <div class="form-group">
            <div class="col-sm-12">
                    <label class="radio-inline">
                    <input type="radio" name="optradio">Free
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="optradio">Paid
                    </label>
            </div>
    </div>
    <div class="form-group">
            <div class="col-sm-12">
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
                    <div class="col-sm-12">
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
                                    <div class="col-sm-12">
                                        <label for="Org Address" class="col-sm-12 control-label" style="text-align:left;">Address</label>
                                        <input type="text" id="OrgAddress" placeholder="Enter Address" class="form-control">
                                    </div>
                                </div>
                    <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <label for="city" class="col-sm-5 control-label" style="text-align:left;">City</label>
                                    <select id="city" class="form-control" placeholder="choose city">
                                            <option>Choose City</option>
                                            <option>Ikorodun</option>
                                            <option>Mushin</option>
                                            <option>Egbeda</option>
                                            <option>Lekki</option>
                                            <option>Fiji</option>
                                            <option>Swoww</option>
                                            <option>Haitoi</option>
                                    </select>
                                    </div>
                             <div class="col-sm-6">
                                    <label for="lga" class="col-sm-5 control-label" style="text-align:left;">LGA</label>
                                    <select id="LGA" class="form-control">
                                        <option>Choose LGA</option>
                                        <option>Alimosho</option>
                                        <option>Egbeda</option>
                                        <option>Eko</option>
                                        <option>Beeni</option>
                                        <option>Oniru</option>
                                        <option>Ijesah</option>
                                        <option>Here</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <i class="material-icons">&#xe567;</i>
{{--  <div class="form-group">
         <div class="col-sm-12">
            <label for="password" class="col-sm-5 control-label" style="text-align:left;">Password</label>
            <input type="password" id="password" placeholder="Password" class="form-control">
        </div>
    </div>
    <div class="form-group">
    <div class="col-sm-12">
                    <label for="birthDate" class="col-sm-5 control-label" style="text-align:left;">Date of Birth</label>
            <input type="date" id="birthDate" class="form-control">
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
    </div>   --}}
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


<<<<<<< HEAD
<div class="container" style="width:500px;">


<form class="form-horizontal" role="form" method="POST" action="/createevent" enctype="multipart/form-data">

<input name="_token" type="hidden" value="{{ csrf_token() }}">

@if ( count( $errors ) > 0 )
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif

<h2>1. What</h2>
<hr class="separator">


<div class="row btn-primary" style="width:20%; boarder-radius: 50%;">
<div class="col-md-6" style="padding:5px 0px 0px 0px; margin:auto;">
<p>Public</p>
</div>
<div class="col-md-6" style="padding:5px 0px 0px 0px; margin:auto;">
<p>Private</p>
</div>

</div>


<div class="form-group">
<h4 style="padding-left: 15px;">Event Title<span class="fa fa-asterisk text-danger"> *</span></h4> 
<div class="col-sm-6">
<input type="text" id="" name="title" placeholder="Event Title" class="form-control" autofocus>
</div>
</div>

<div class="form-group">
<h4 style="padding-left: 15px;">Description<span class="fa fa-asterisk text-danger"> *</span></h4>
<div class="col-sm-12">
<textarea type="description" name="description" id="description" placeholder="Write a short passage to describe your event " class="form-control"></textarea>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<label class="radio-inline">
<input type="radio" name="free" value="1">free
</label>
<label class="radio-inline">
<!--input type="radio" name="free" value="0"-->paid
</label>
</div>
</div>
<div class="dropdown">
<p class="dropdown-toggle" type="text" data-toggle="dropdown">Sponsors
<span class="caret"></span></p>
<ul class="dropdown-menu">
<li><input type="text" placeholder="Sponsors Name" /></li>
<li><div class="file btn btn-sm btn-primary">
Upload
<input type="file" name="file"/>
</div></li>
</ul>
</div>

<div class="form-group">
<h4 style="padding-left: 15px;">Organizer Name<span class="fa fa-asterisk text-danger"> *</span></h4>
<div class="col-sm-12">
<input type="text" id="orgName" placeholder="Organizer Name" name="org_name" class="form-control">
</div>
</div>

<div class="form-group">
<h4 style="padding-left: 15px;">Event Flier<span class="fa fa-asterisk text-danger"> *</span></h4>
<div class="col-sm-12">
<div>
<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fd3n8a8pro7vhmx.cloudfront.net%2Fveracitymedia%2Fpages%2F2027%2Fattachments%2Foriginal%2F1463445378%2Fold-glyph.png%3F1463445378&imgrefurl=http%3A%2F%2Fwww.veracitymedia.com%2Fblog&docid=a3c3YHov8srV8M&tbnid=6__FB_V9qh1wmM%3A&vet=10ahUKEwjlhIKItOzZAhWIvxQKHUXFDiEQMwiBAigFMAU..i&w=300&h=300&client=ubuntu&bih=676&biw=1366&q=former%20instagram%20logo&ved=0ahUKEwjlhIKItOzZAhWIvxQKHUXFDiEQMwiBAigFMAU&iact=mrc&uact=8" alt="">
</div>
<div class="file btn btn-lg btn-primary">
Upload
<input type="file" name="event_flyer"/>
</div>
</div>
</div>

<div class="form-group">
<h4 style="padding-left: 15px;">Organizer Logo<span class="fa fa-asterisk text-danger"> *</span></h4>
<div class="col-sm-12">
<div class="file btn btn-lg btn-primary">
Upload
<input type="file" name="org_logo"/>
</div>
</div>
</div>

<hr class="separator">
<h2>2. Where</h2>
<hr class="separator">
<h2>Address</h2>

<div class="form-group"> <!-- Street 1 -->
<input type="text" class="form-control" id="street1_id" name="Address" placeholder="Home Address">
</div>					

<div class="row">
<div class="form-group col-sm-6"> <!-- State Button -->
<select class="form-control" id="state_id" name="state">
<option value="AA">Choose a State</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>					
</div>									

<div class="form-group col-sm-6"> <!-- State Button -->
<select class="form-control" id="state_id" name="city">
<option value="AA">Choose City</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>					
</div>
</div>

<div class="form-group"> <!-- Zip Code-->
<div class="col-sm-3">
<p><span class="glyphicon glyphicon-map-marker"> Map</span></p>
</div>
</div>


<hr class="separator">
<h2>3. When</h2>
<hr class="separator">

<div class="form-group">
<div class="row">
<div class="col-sm-6">
<h3>Start</h3>
</div>

<div class="col-sm-6">
<h3>End</h3>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-sm-3">
<input type="text" id="startTime" placeholder="Start Time" name="startTime" class="form-control">
</div>

<div class="col-sm-3">
<input type="text" id="startDate" placeholder="Start Date" name="startDate" class="form-control">
</div>

<div class="col-sm-3">
<input type="text" id="StartTime" placeholder="End Time" name="EndTime" class="form-control">
</div>

<div class="col-sm-3">
<input type="text" id="EndDate" placeholder="End Date" name="EndDate" class="form-control">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-sm-12">
<div class="dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle">Schedule Multiple Activities <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><form class="form-group"></li>
<li><a href="#">Fill Form</a></li>
</ul>
</div>
</div>
</div>
<hr class="separator">
<h2>4. How</h2>
<hr class="separator">

<div class="form-group">
<div class="row">
<div class="col-sm-4">
<input type="text" id="free" placeholder=" Free +" name="free" class="form-control">
</div>

<div class="col-sm-4">
<input type="text" id="paid" placeholder=" Paid +" name="paid" class="form-control">
</div>

<!--@if(!Auth::guest())	
<h1> Welcome, {{ Auth::user()->first_name }}</h1></br> 
@else
<a href="#login"> login </a>
@endif

@if(!Auth::guest())
<p> <a href="/logout">Logout </p>
@else
<a href="/signup">signup</a>
@endif--> 
<div class="col-sm-4">
<input type="text" id="reserve" placeholder=" Reserved +" name="reserve" class="form-control">
</div>
</div> 
</div>

<h3>Tickets</h3>

<div class="form-group">
<div class="row">
<div class="col-sm-6">
<input type="text" id="quantity" placeholder="- Quantiy +" name="ticket_qty" class="form-control">
</div>

<div class="col-sm-6">
<input type="text" id="price" placeholder="- Price +" class="form-control" name="ticket_price">
</div>


</div> 
</div>

<h3>Link to Social Media</h3>

<div class="form-group">
<div class="row">
<div class="col-sm-6">
<input type="text" id="socialMedia" placeholder="Social Account" name="quantiy" class="form-control">
</div>
</div> 
</div>

<div class="form-group">
<div class="col-sm-12">
<div class="checkbox">
<label>
<input type="checkbox">I agree to the <a href="#">terms</a> of us 
</label>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-sm-6">
<button type="Submit" class="btn btn-primary btn-block">Save</button>
</div>                            
<div class="col-sm-6">
<button type="submit" class="btn btn-success btn-block">Preview</button>
</div>
</div>
</form>
<script type="text/javascript"
src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script> 
<script type="text/javascript"
src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
</script>
<script type="text/javascript"
src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>
<script type="text/javascript">
$('#datetimepicker').datetimepicker({
format: 'dd/MM/yyyy hh:mm:ss',
language: 'pt-BR'
});
</script>         

<div class="container">
<div class="row">
<div class="col-sm-12"
<form class="form-horizontal" role="form">
<h2>Create Event</h2>
<div class="form-group">

<div class="col-sm-12">
<label for="firstName" class="col-sm-5 control-label" style="text-align:left;">Event Name</label>
<input type="text" id="firstName" placeholder="Name Of Event" class="form-control" autofocus>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<label for="description" class="col-sm-5 control-label" style="text-align:left;">Description</label>
<textarea class="form-control" rows="5" id="comment" placeholder="Write a short note to descripe your event"></textarea>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<label class="radio-inline">
<input type="radio" name="optradio">Free
</label>
<label class="radio-inline">
<input type="radio" name="optradio">Paid
</label>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
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
<div class="col-sm-12">
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
<div class="col-sm-12">
<label for="Org Address" class="col-sm-12 control-label" style="text-align:left;">Organizer Address</label>
<input type="text" id="OrgAddress" placeholder="Enter Address" class="form-control">
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label for="city" class="col-sm-5 control-label" style="text-align:left;">City</label>
<select id="city" class="form-control" placeholder="choose city">
<option>Choose City</option>
<option>Ikorodun</option>
<option>Mushin</option>
<option>Egbeda</option>
<option>Lekki</option>
<option>Fiji</option>
<option>Swoww</option>
<option>Haitoi</option>
</select>
</div>
<div class="col-sm-6">
<label for="lga" class="col-sm-5 control-label" style="text-align:left;">LGA</label>
<select id="LGA" class="form-control">
<option>Choose LGA</option>
<option>Alimosho</option>
<option>Egbeda</option>
<option>Eko</option>
<option>Beeni</option>
<option>Oniru</option>
<option>Ijesah</option>
<option>Here</option>
</select>
</div>
</div>
</div>
<i class="material-icons">&#xe567;</i>
<div class="form-group">
<div class="col-sm-12">
<label for="password" class="col-sm-5 control-label" style="text-align:left;">Password</label>
<input type="password" id="password" placeholder="Password" class="form-control">
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<label for="birthDate" class="col-sm-5 control-label" style="text-align:left;">Date of Birth</label>
<input type="date" id="birthDate" class="form-control">
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