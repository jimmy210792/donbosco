<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Don Bosco</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
      </div>
      <!--/.navbar-header-->
      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="index.php"><i class="fa fa-globe"></i><span>Home</span></a>
            </li>
            <li class="dropdown">
                <a href="login.html"><i class="fa fa-globe"></i><span>Contact us</span></a>
            </li>
             <li class="dropdown">
                <a href="login.html"><i class="fa fa-globe"></i><span>Connect</span></a>
            </li>
             <li class="dropdown">
                <a href="login.html"><i class="fa fa-globe"></i><span>Maps & Directions</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Courses</span></a>
                <ul class="dropdown-menu">
                  <li><a href="courses.html">Courses Categories</a></li>
                  <li><a href="courses.html">Courses list</a></li>
                  <li><a href="course_detail.html">Courses detail</a></li>
                  </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i><span>Events</span></a>
                 <ul class="dropdown-menu">
                  <li><a href="events.html">Event1</a></li>
                  <li><a href="events.html">Event2</a></li>
                  <li><a href="events.html">Event3</a></li>
                 </ul>
            </li>
           
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
                <ul class="dropdown-menu search-form">
                 <form>        
                            <input type="text" class="search-text" name="s" placeholder="Search...">    
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                       </form>
              </ul>
            </li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
      <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About us<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="about.php">Vision & Mission</a></li>
               <li><a href="about.php">Administration</a></li>
                <li><a href="about.php">History</a></li>
                <li><a href="about.php">Don Bosco</a></li>
                   <li><a href="about.php">Educational Philosophy</a></li>

              </ul>
            </li>
        <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Study with us<span class="caret"></span></a>       
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                          </div>
                          <div class="tab-pane" id="women">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#men" role="tab" data-toggle="tab">School</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">College</a></li>
                   </ul>                    
        </div>        
      </li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>
            </li>
  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>
            </li>
              <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span></a>       
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                          </div>
                          <div class="tab-pane" id="women">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#men" role="tab" data-toggle="tab">School</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">College</a></li>
                   </ul>                    
        </div>        
      </li>
          <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<span class="caret"></span></a>        
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                          </div>
                          <div class="tab-pane" id="women">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#men" role="tab" data-toggle="tab">School</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">College</a></li>
                   </ul>                    
        </div>        
      </li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Download Links<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>
            </li>
           
            
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>