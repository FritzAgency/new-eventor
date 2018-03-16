<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>


    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
  
<div class="container text-center" style="width: 90%">    
  <div class="row content">
    <div class="col-sm-6 sidenav" id="small">
        <div class="row content" style="height:200px;">
            <div class="col-sm-11 sidenav" id="small">
                {{-- carousel for media --}}
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                      
                        {{-- <!-- Wrapper for slides --> --}}
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="../img/generatedpic.jpg" alt="image from uploaded 1" style="width: 800px;">
                          </div>
                          
                          <div class="item">
                            <img src="../img/generatedpic.jpg" alt="image from uploaded 1" style="width: 800px;">
                          </div>
                      
                          <div class="item">
                            <img src="../img/generatedpic.jpg" alt="image from uploaded 1" style="width: 800px;">
                          </div>
                        </div>
                      
                        {{-- <!-- Left and right controls --> --}}
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

 
                      <div class="w3-container">
                        <div class="w3-bar w3-white">
                          <button class="w3-bar-item w3-button tablink" style="font-weight:bold; font-size:18px; margin-left:30px; padding-left:5px; border-radius:7px; width:120px; height:40px; background-color:grey;" onclick="openCity(event,'hiking')">Hiking</button>
                          <button class="w3-bar-item w3-button tablink" style="font-weight:bold; font-size:18px; padding-left:5px; border-radius: 4%; width:120px; height:40px; background-color:grey;" onclick="openCity(event,'jogging')">Jogging</button>
                          <button class="w3-bar-item w3-button tablink" style="font-weight:bold; font-size:18px; padding-left:5px; border-radius: 4%; width:120px; height:40px; background-color:grey;" onclick="openCity(event,'dance')">Dance</button>
                          <button class="w3-bar-item w3-button tablink" style="font-weight:bold; font-size:18px; padding-left:5px; border-radius: 4%; width:120px; height:40px; background-color:grey;" onclick="openCity(event,'tour_guide')">Tour Guide</button>
                          <button class="w3-bar-item w3-button tablink" style="font-weight:bold; font-size:18px; padding-left:5px; border-radius: 4%; width:120px; height:40px; background-color:grey;" onclick="openCity(event,'tasks')">Tasks</button>
                        </div>
                        
                        <div id="hiking" class="w3-container w3-border city" style="background-color:#ffffff;">
                          <div class="row">
                            <div class="col-sm-6">
                              <p style="text-align: justify;background: white; padding: 10px;">Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). The term bushwalking is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927.</p>
                            </div>
                            <div class="col-sm-6" style="margin:auto; padding: 40px 0px 0px 0px;">
                              <p style="font-weight: bold; margin-top: 20px;">Time</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <p style="font-weight: bold;">-</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <div>
                              <button class="btn btn-primary btn-lg" style="margin-top: 20px; width:50%;">Schedule</button>
                            </div>
                            </div>
                          </div>
                        </div>
                      
                        <div id="jogging" class="w3-container w3-border city" style="display:none; background-color:#ffffff;">
                          <div class="row">
                            <div class="col-sm-6">
                              <p style="text-align: justify;background: white; padding: 10px;">Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). The term bushwalking is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927.</p>
                            </div>
                            <div class="col-sm-6" style="margin:auto; padding: 40px 0px 0px 0px;">
                              <p style="font-weight: bold; margin-top: 20px;">Time</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <p style="font-weight: bold;">-</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <div>
                              <button class="btn btn-primary btn-lg" style="margin-top: 20px; width:50%;">Schedule</button>
                            </div>
                            </div>
                          </div> 
                        </div>
                      
                        <div id="dance" class="w3-container w3-border city" style="display:none; background-color:#ffffff;">
                          <div class="row">
                            <div class="col-sm-6">
                              <p style="text-align: justify;background: white; padding: 10px;">Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). The term bushwalking is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927.</p>
                            </div>
                            <div class="col-sm-6" style="margin:auto; padding: 40px 0px 0px 0px;">
                              <p style="font-weight: bold; margin-top: 20px;">Time</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <p style="font-weight: bold;">-</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <div>
                              <button class="btn btn-primary btn-lg" style="margin-top: 20px; width:50%;">Schedule</button>
                            </div>
                            </div>
                          </div>
                        </div>
              
                        <div id="tour_guide" class="w3-container w3-border city" style="display:none; background-color:#ffffff;">
                          <div class="row">
                            <div class="col-sm-6">
                              <p style="text-align: justify;background: white; padding: 10px;">Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). The term bushwalking is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927.</p>
                            </div>
                            <div class="col-sm-6" style="margin:auto; padding: 40px 0px 0px 0px;">
                              <p style="font-weight: bold; margin-top: 20px;">Time</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <p style="font-weight: bold;">-</p>
                              <input type="text" placeholder="12:00PM" style="width:35%; top-margin: 10px;">
                              <div>
                              <button class="btn btn-primary btn-lg" style="margin-top: 20px; width:50%;">Schedule</button>
                            </div>
                            </div>
                          </div>
                        </div>
              
                        <div id="tasks" class="w3-container w3-border city" style="display:none; background-color:#ffffff;">
                          <p style="text-align: justify;background: white; padding: 10px;">tasks conent in here</p>
                        </div>
                      </div>

            </div>
            <div class="col-sm-1 sidenav" id="small">
                <div style="height: 150px; background-color: grey;">
                    
                </div>
                <div style="height: 150px; background-color: f1f1f1;">
                    
                </div>
                <div style="height: 150px; background-color: grey;">
                    
                </div>
        
            </div>
        </div>
    </div>
    <div class="col-sm-6 sidenav" id="small" style="padding: 36px 10px 0 31px;">
        <div>
          <h1 style="text-align: left;">A Trip To The <br> Hills of Idanre</h1>
        </div>
        <div class="w3-row">
          <a href="javascript:void(0)" onclick="openCity1(event, 'about');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" id="wee">Aout</div>
          </a>
          <a href="javascript:void(0)" onclick="openCity1(event, 'sponsors');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" id="wee">Sponsors</div>
          </a>
          <a href="javascript:void(0)" onclick="openCity1(event, 'location');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" id="wee">Location</div>
          </a>
          <a href="javascript:void(0)" onclick="openCity1(event, 'location');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" id="wee">Vendors</div>
          </a>
        </div>
      
        <div id="about" class="w3-container city1" style="display:none">
         <p>
          Play paper games. You don’t need to have any special equipment or boxed games to have a lot of fun. There are plenty of games you can play simply with a pen and paper and your friends.
          
              Play MASH.[4] MASH is a fun, customizable game that will let you find out who you’re going to marry, where you’ll live, and how many kids you’ll have.
              Play truth or dare. Truth or dare is a classic game to play with friends. Just make sure you set some ground rules for dares before you begin to play.
              Enjoy two truths and a lie.[5] This game is a great way to get to know more about your friends. Everyone writes down two things that are true about themselves and one thing that isn’t true. Then, you have to guess which was the lie.
              Play charades with your friends. You can either decide on a category or write down a bunch of possibilities beforehand, and place them all in a bowl for players to choose from.</p>
        </div>
      
        <div id="sponsors" class="w3-container city1" style="display:none">
          <p>contents for sponsors goes in here</p> 
        </div>
      
        <div id="location" class="w3-container city1" style="display:none">
          <p>content for location goes in here</p>
        </div>

        <div id="vendors" class="w3-container city1" style="display:none">
          <p>content for vendors goes in here</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-red";
  }

  function openCity1(evt1, cityName1) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
    }
    document.getElementById(cityName1).style.display = "block";
    evt1.currentTarget.firstElementChild.className += " w3-border-red";
  }
</script>
</body>
</html>
