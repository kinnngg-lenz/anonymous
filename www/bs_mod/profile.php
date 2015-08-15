<!doctype html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta charset="utf-8">
		<title> profile</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/profile.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <script src="js/profile.js"></script>
    </head>

	<body>
        <div class="header">
            <div class="container">                       
                <div class="row">
                    
                    <div class="col-md-2 col-xs-2">
                        <img class="profile-image img-responsive pull-left img-m" src="img/profile.png" alt="James Lee">
                        <button type="button" class="btn btn-default btn-xs res">
                                <i class="glyphicon glyphicon-wrench"></i>
                        </button>

                    
                    </div>
                        <div class="col-md-10 col-xs-10">
                        <div class="container bac">
                           <div id="carousel">                  
                                <div id="user_carousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#user_carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#user_carousel" data-slide-to="1"></li>
                                        <li data-target="#user_carousel" data-slide-to="2"></li>
                                        <li data-target="#user_carousel" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">

                                            <div class="item active">
                                                <div class="pro-con pull-left">
                                                        <h2 class="name">James Lee</h2>
                                                        <h3 class="desc">Web App Developer</h3>   
                                                        <ul class="social  list-inline c">
                                                            <li><a href="#"><i class="fa  fa-twitter fa-c"></i></a></li>                   
                                                            <li><a href="#"><i class="fa fa-google-plus fa-c "></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin fa-c"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-github-alt fa-c"></i></a></li>                  
                                                            <li class="last-item"><a href="#"><i class="fa fa-hacker-news fa-c"></i></a></li>                 
                                                        </ul> 
                                                        
                                                    </div>
                                                </div>
                                           
                                           
                                        


                                    <div class="item">
                                        
                                        <h2 class="car-text">Promote yourself</h2>
                                        <hr>
                                        <h3>Start showing your talents and build audience</h3>
                                    </div>
                                    <div class="item">
                                        
                                        <h2 class="car-text">Promote yourself</h2>
                                        <hr>
                                        <h3>Start showing your talents and build audience</h3>
                                    </div>
                                    <div class="item">
                                        <h2 class="car-text">Promote yourself</h2>
                                        <hr>
                                        <h3>Start showing your talents and build audience</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>                
        </div>        
        </div>                      

<!--tabs -->

    <div class="row">
            <div class="col-xs-12 ">
                <div class="panel with-nav-tabs panel-default xx">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs tts">
                                <li class="active tts"><a href="#tab1default" data-toggle="tab" class="tts">About Me</a></li>
                                <li><a href="#tab2default" data-toggle="tab" class="tts" >My Achievements</a></li>
                                <li><a href="#tab3default" data-toggle="tab" class="tts">Professional Profile</a></li>
                                <li><a href="#tab4default" data-toggle="tab" class="tts">My Things</a></li>
                                <li><a href="#tab5default" data-toggle="tab" class="tts">Endorsements</a></li>
                                <li><a href="#tab6default" data-toggle="tab" class="tts">Ranking</a></li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#tab7default" data-toggle="tab">Default 4</a></li>
                                        <li><a href="#tab8default" data-toggle="tab">Default 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                               <?php include_once("./php_includes/profile_about.php"); ?>
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <?php include_once("./php_includes/profile_achievements.php") ?>
                            </div>
                            <div class="tab-pane fade" id="tab3default">Default 3</div>
                            <div class="tab-pane fade" id="tab4default">Default 4</div>
                            <div class="tab-pane fade" id="tab5default">Default 5</div>
                            <div class="tab-pane fade" id="tab6default">Default 6</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




                                          
             
       
        

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/profile.js"></script>
        
	</body>


</html>