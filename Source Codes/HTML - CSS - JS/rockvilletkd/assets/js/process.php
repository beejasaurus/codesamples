<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>US Royal Martial Arts | Tae Kwon Do, Hap Ki Do, Abacus Mental Math, After School Programs, Seasonal Camp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">    
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/RTKDtheme-content.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../ico/favicon.ico">
    
    <link type="text/plain" rel="author" href="http://rockvilletkd.com/humans.txt" />
  </head>

  <body>
<div id="wrap">
    <div class="container">
      <div class="row">
        <div class="span4 offset8">
          <ul class="inline contact-area">
            <li><a href="http://www.facebook.com/pages/US-Royal-Martial-Arts/125236160820046"><img src="../images/usrma/facebook-icon.png" class="facebook" alt="Facebook"></a></li>
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
              <a href="../../index.php">Home</a>
            </li>
            <li><a href="../../instructor.html">Instructor</a></li>
            <li><a href="../../programs.html">Programs</a></li>
            <li><a href="../../schedule.html">Schedule</a></li>
            <li><a href="../../gallery.php">Gallery</a></li>
            <li><a href="../../contact.php">Contact Us</a></li>
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
                  <h1>Thank You!</h1>
                    <p>2 Lessons and a free uniform for only $19.99:
                      <form>
                        <button type="submit" class="btn btn-danger span2">Sign up today!</button>                    
                      </form>
                    </p>
                  </div>
                </div>
              </div>
              
              
          </div> <!-- Hero Container End -->
        </div>
      </header>    
      
      
        <div class="container content-area">
            
            
        <div class="row hidden-desktop visible-phone visible-tablet">
        <div class="span12">
        <h2>Thank You!</h2>
            <h3>2 Lessons and a free uniform for only $19.99!</h3>
          <div class="block">
              <div class="done"><b>Thank you!</b> We have received your message.
                </div>
                <p>
                  <form class="form-inline" name="sign-up" action="process.php" method="post">
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
            
            
          <div class="row">
            <div class="span6">
              
        
<?php
 
//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$telephone = ($_GET['telephone']) ?$_GET['telephone'] : $_POST['telephone'];
$age = ($_GET['age']) ?$_GET['age'] : $_POST['age'];
 
//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;
 
//Simple server side validation for POST data, of course, 
//you should validate the email
if (!$name) $errors[count($errors)] = 'Please enter your name.';
if (!$email) $errors[count($errors)] = 'Please enter your email.'; 
if (!$telephone) $errors[count($errors)] = 'Please enter your comment.';

 
//if the errors array is empty, send the mail
if (!$errors) {
 
    //recipient - change this to your name and email
    $to = 'rockvilletkd@gmail.com';   
    //sender
    $from = $name . ' <' . $email . '>';
     
    //subject and the html message
    $subject = $name . '-  is interested in USRMA'; 
    $message = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head></head>
    <body>
    <table>
        <tr><td>Name</td><td>' . $name . '</td></tr>
        <tr><td>Email</td><td>' . $email . '</td></tr>
        <tr><td>Telephone</td><td>' . $telephone . '</td></tr>
        <tr><td>Age</td><td>' . $age . '</td></tr>
    </table>
    </body>
    </html>';
 
    //send the mail
    $result = sendmail($to, $subject, $message, $from);
     
    //if POST was used, display the message straight away
    if ($_POST) {
        if ($result) echo '        
        <h1>Thank you! We have received your message.</h1>
        ';
        else echo 'Sorry, unexpected error. Please try again later';
         
    //else if GET was used, return the boolean value so that 
    //ajax script can react accordingly
    //1 means success, 0 means failed
    } else {
        echo $result;   
    }
 
//if the errors array has values
} else {
    //display the errors message
    for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
    echo '<a href="index.php">Back</a>';
    exit;
}
 
 
//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";
     
    $result = mail($to,$subject,$message,$headers);
     
    if ($result) return 1;
    else return 0;
}
?>

<h2>Address</h2>
              <address>
                5244 Randolph Road<br>
                Rockville, MD 20852<br>
                (Between El Patio & Dollar Tree)
              </address>
              </p>
              <h2>Contact</h2>
              <p>
              Phone: <a href="tel:3017701007">(301) 770-1007</a><br>
              Email: <a href="RockvilleTKD@gmail.com">RockvilleTKD@gmail.com</a><br>
              </p>
              <h2>Hours:</h2>
              <p>
              <table class="table-striped table-hover">
                <tr>
                  <td>Day</td>
                  <td>Open</td>
                  <td>Close</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>1:00pm</td>
                  <td>9:00pm</td>
                </tr>
                <tr>
                  <td>Tuesday</td>
                  <td>1:00pm</td>
                  <td>9:00pm</td>
                </tr>
                <tr>
                  <td>Wednesday</td>
                  <td>1:00pm</td>
                  <td>9:00pm</td>
                </tr>
                <tr>
                  <td>Thursday</td>
                  <td>1:00pm</td>
                  <td>9:00pm</td>
                </tr>
                <tr>
                  <td>Friday</td>
                  <td>1:00pm</td>
                  <td>9:00pm</td>
                </tr>
                <tr>
                  <td>Saturday</td>
                  <td>9:00am</td>
                  <td>2:00pm</td>
                </tr>
                <tr>
                  <td>Sunday</td>
                  <td>Close</td>
                  <td>&nbsp;</td>
                </tr>
               </table>
            </div>
        
            <div class="span6">
              <div id="store-front">
                <img src="../images/usrma/droppedImage.jpg" class="img-polaroid">
              </div>
              
              <div id="map">
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=US+Royal+Martial+Arts,+Randolph+Road,+Rockville,+MD&amp;aq=0&amp;oq=us+royal+martial+arts&amp;sll=39.043016,-77.120017&amp;sspn=0.089994,0.209255&amp;ie=UTF8&amp;hq=US+Royal+Martial+Arts,+Randolph+Road,+Rockville,+MD&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=13975442011953993691&amp;ll=39.052684,-77.105365&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=US+Royal+Martial+Arts,+Randolph+Road,+Rockville,+MD&amp;aq=0&amp;oq=us+royal+martial+arts&amp;sll=39.043016,-77.120017&amp;sspn=0.089994,0.209255&amp;ie=UTF8&amp;hq=US+Royal+Martial+Arts,+Randolph+Road,+Rockville,+MD&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=13975442011953993691&amp;ll=39.052684,-77.105365" style="color:#0000FF;text-align:left">View Larger Map</a></small>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /container -->
    
    <footer class="footer">



      
    </footer>
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script src="bootstrap-transition.js"></script>
    <script src="bootstrap-alert.js"></script>
    <script src="bootstrap-modal.js"></script>
    <script src="bootstrap-dropdown.js"></script>
    <script src="bootstrap-scrollspy.js"></script>
    <script src="bootstrap-tab.js"></script>
    <script src="bootstrap-tooltip.js"></script>
    <script src="bootstrap-popover.js"></script>
    <script src="bootstrap-button.js"></script>
    <script src="bootstrap-collapse.js"></script>
    <script src="bootstrap-carousel.js"></script>
    <script src="bootstrap-typeahead.js"></script>
<script src="process.js"></script>
  </body>
</html>

