<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>US Royal Martial Arts | Gallery - Tae Kwon Do, Hap Ki Do, Abacus Mental Math, After School Programs, Seasonal Camp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the USRMA gallery. These are pictures of our facilities. Look at pictures of the school or dojo, and students doing Martial Arts and Abacus training.">
    <meta name="author" content="Bryan Neva - www.bryanneva.com">

    <!-- Le styles -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/RTKDtheme-content.css" rel="stylesheet">
  
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    
    <link type="text/plain" rel="author" href="http://rockvilletkd.com/humans.txt" />
  
  </head>

  <body>
    
    <div id="wrap">
    <div class="container">
      <div class="row">
        <div class="span4 offset8">
          <ul class="inline contact-area">
            <li><a href="http://www.facebook.com/pages/US-Royal-Martial-Arts/125236160820046"><img src="assets/images/usrma/facebook-icon.png" class="facebook" alt="Facebook"></a></li>
            <li class="middle">301.770.1007</li>
            <li><a href="mailto:RockvilleTKD@gmail.com">RockvilleTKD@gmail.com</a></li>
          </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container menu">
      <div class="row">
        <div class="span6 logo">
          <p>
            USRMA | US Royal Martial Arts
          </p>     
        </div>
        <div class="span6 pull-right clearfix">
          
          
          <!-- Begin Nav -->
          
          <ul class="nav nav-pills clearfix">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li><a href="instructor.html">Instructor</a></li>
            <li><a href="programs.html">Programs</a></li>
            <li><a href="schedule.html">Schedule</a></li>
            <li class="active"><a href="#">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
          
          <!-- End Nav -->
          
        </div>
      </div>
  
    </div>
  
      <header class="jumbotron masthead visible-desktop hidden-phone hidden-tablet">
        <div class="inner">
          <div class="container">
              <div class="row">
                <div class="span6 offset6">
                  <h1>Gallery</h1>
                    <p>2 Lessons and a free uniform for only $19.99:
                      <form method="link" action="index.php">
                        <button type="submit" class="btn btn-danger span2">Sign up today!</button>                    
                      </form>
                    </p>
                  </div>
                </div>
              </div>
              
              
          </div> <!-- Hero Container End -->
        </div>
      </header>    
      
      
      <div class="container content-area"><!-- body container begin -->
      
      
            <div class="row hidden-desktop visible-phone visible-tablet">
        <div class="span12">
          <h2>Gallery</h2>
          <h3>2 Lessons and a free uniform for only $19.99!</h3>
          <div class="block">
              <div class="done"><b>Thank you!</b> We have received your message.
                </div>
                <p>
                  <form class="form-inline" name="sign-up" action="assets/js/process.php" method="post">
                    <input type="text" class="input-med" placeholder="First and Last Name" name="name" id="name"><br>
                    <input type="text" class="input-med" placeholder="Email" name="email" id="email"><br>
                    <input type="text" class="input-phone" placeholder="Phone Number" name="telephone" id="telephone"><br>
                    <input type="text" class="input-age" placeholder="Age" name="age" id="Age"><br>
                    <button type="submit" class="btn btn-danger btn-large" id="submit">Sign up today!</button>
                    <div class="loading"></div>
                  </form>                  
                </p>
              </div>
              <div class="clearfix"></div>
        </div>
      </div>  

        <!-- Start Advanced Gallery Html Containers -->
        <div class="row">
          <ul class="thumbnails">
                <?php
                  $dir = "assets/images/gallery2/";
                  $files = "*.jpg";
                  $files2 = "*.jpeg";
                  $files3 = "*.JPG";
                  $files4 = "*.JPEG";
                  
                  $jpgs2 = glob($dir.$files);
                  $jpgs3 = glob($dir.$files2);
                  $jpgs4 = glob($dir.$files3);
                  $jpgs5 = glob($dir.$files4);
                  
                  foreach($jpgs2 as $filenames2){
                    echo "<li class='span3'>" . "\n" . "<a class='thumbnail' href='" . $filenames2 . "'>";
                    echo "\n" . "<img src='" . $filenames2 . "' alt=''></a></li>";
                    echo "\n" . "</li>" . "\n";
                  }
                  
                  foreach($jpgs3 as $filenames2){
                    echo "<li class='span3'>" . "\n" . "<a class='thumbnail' href='" . $filenames2 . "'>";
                    echo "\n" . "<img src='" . $filenames2 . "' alt=''></a></li>";
                    echo "\n" . "</li>" . "\n";
                  }
                  
                  foreach($jpgs4 as $filenames2){
                    echo "<li class='span3'>" . "\n" . "<a class='thumbnail' href='" . $filenames2 . "'>";
                    echo "\n" . "<img src='" . $filenames2 . "' alt=''></a></li>";
                    echo "\n" . "</li>" . "\n";
                  }
                  
                  foreach($jpgs5 as $filenames2){
                    echo "<li class='span3'>" . "\n" . "<a class='thumbnail' href='" . $filenames2 . "'>";
                    echo "\n" . "<img src='" . $filenames2 . "' alt=''></a></li>";
                    echo "\n" . "</li>" . "\n";
                  }
                  
                  
                ?>
            </ul>
          </div>
        </div>
        
        
        <div style="clear: both;"></div>
  
      
      </div> <!-- /container -->
    
    <footer class="footer">



      
    </footer>
    
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="assets/js/jquery.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/process.js"></script>
    
    <script src="jquery.placeholder.js?v=2.0.7"></script>
    <script>
      // To test the @id toggling on password inputs in browsers that don’t support changing an input’s @type dynamically (e.g. Firefox 3.6 or IE), uncomment this:
      // $.fn.hide = function() { return this; }
      // Then uncomment the last rule in the <style> element (in the <head>).
      $(function() {
       // Invoke the plugin
       $('input, textarea').placeholder();
       // That’s it, really.
      });
     </script>
  </body>
</html>


