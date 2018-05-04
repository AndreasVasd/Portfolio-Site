<!DOCTYPE html>
<html lang="en">
<head>
  <title>Andreas Vasdekis | Web development &amp design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Develompent &amp Design">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript, Responsive Web Design, Porfolio Site">
  <meta name="Andreas Vasdekis">


    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">


    
    <!-- Include fa awseome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom css -->
    <link href="custom.css" rel="stylesheet">

   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- JavaScript Form Validator -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    
    </head>
    <body background="Images/contact.jpg">
        
        <!--Loader-->
        <div class="preloader"></div>
                 
        <!-- Return to top arrow -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>


        
         <!-- Bootstrap class / δημιουργία του γκρι πλασίου στο header(και γενικά τρόπος δημιουργίας header-menu)-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <!-- Δημιουργία του icon όταν μικραίνει η οθόνη-3 span classes γιατί θέλω τις τρεις γραμμούλες -->
     
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">          
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
        </button>

        
    </div>
      <!-- Δημιουργία του menu -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="home.html"><i class="fa fa-home color-home"></i></a></li>
          
        <li><a href="about.html">About</a></li>
        <li><a href="http://localhost/Portfolio-Site/Blog/wordpress/">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        
      
        <!-- Social Buttons -->
        <li><a href="https://github.com/AndreasVasd" target="_blank" id="tooltip1" data-toggle="tooltip" title="Github"><i class="fa fa-github color-github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/andreas-vasdekis" target="_blank" id="tooltip2" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin color-linkedin"></i></a></li>
        <li><a href="https://www.twitter.com" target="_blank" id="tooltip3" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter color-twitter"></i></a></li>
        </ul>
        
        
        <!-- Το custom search bar που τοποθετήσαμε -->

      <ul class="nav navbar-nav navbar-right">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        
      </ul>
      </div>
        
        </div>
        </nav>
        
        <!-- Get In Touch -->
        <div class="container">
            <div id="contact">
                <h3><i class="fa fa-users fa-fw-2"></i>Get In Touch</h3>
                <p>Do you have any questions? Please do not hesitate to contact me directly. I will come back to you within matter of hours to help you.</p>
            </div>
        </div>
        
        
       <!-- Form -->
        
        
        
        <div class="my_form">
        <div class="container">

            <div class="row">

                 <div class="col-sm-8 col-sm-offset-2">  <!-- μετατοπίζω δεξιά κατά offset --> 
                    
                    <form id="contact-form" method="post" action="contact.php" role="form"> <!-- We will send the contact form values via POST to the PHP script called contact.php -->

    <div class="messages"></div> <!-- display the success or error message after sending the form via AJAX -->

   <div class="controls"> 

        <!-- Standard Bootstrap forms markup is used - rows, columns, form groups. Form groups are Bootstrap helpers that take care of the appropriate vertical spacing in the form. -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <!-- Standard Bootstrap forms markup is used - rows, columns, form groups. Form groups are Bootstrap helpers that take care of the appropriate vertical spacing in the form. -->
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div> <!-- custom error messages -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <!-- Send button -->
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary btn-send" name="send" value="Send message">
            </div>
        </div>
        
        <!--PHP script -->
        
<?php
/**
 * This example shows how to handle a simple contact form.
 */
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';

       //Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
            require 'vendor/autoload.php';
    
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'andreas_vasdekis@windowslive.com';  // SMTP username
    $mail->Password = '***';                       // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('andreas_vasdekis@windowslive.com', 'Andreas Vasdekis');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('andreas_vasdekis@windowslive.com', 'Andreas Vasdekis');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'New Form Submission';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Surname: {$_POST['surname']}
Phone: {$_POST['phone']}
Message: {$_POST['message']}
EOT;
        
       //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
          echo  $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            echo $msg = 'Message sent! Thanks for contacting us.';
        }
        } else {
           echo $msg = 'Invalid email address, message ignored.'; 
        }
}
?>
        
        <div class="row">
            <div class="col-sm-12">
                <p class="text-muted"><strong>*</strong> These fields are required. 
                    
                    
            </div>
        </div>
   </div> 
                        

</form>
            </div>
        </div>
            </div>
        </div>
        
        
        <!-- Footer -->
        
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 myCols">
                    <h5>Get started</h5>
                    <hr class="grammi" style="width: 60px;"> <!-- η hr γραμμή -->   <ul>
                    
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Useful Info</h5>
                    <hr class="grammi" style="width: 60px;">
                    <ul class="fa-ul">
                       
                       <li><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Website: <a href="home.html">www.andreas.com</a></li>
                        <li><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;Email: andreas_vasdekis@windowslive.com</li>
                        <li><i class="fa fa-phone-square fa-fw" aria-hidden="true"></i>&nbsp;Phone: +30 6980794725</li>
                    </ul>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Friendly Sites</h5>
                    <hr class="grammi" style="width: 60px;">
                    <ul>
                        <li><a target="_blank" href="https://www.css-weekly.com">www.css-weekly.com</a></li>
                        <li><a target="_blank" href="https://www.tutorialzine.com">www.tutorialzine.com</a></li>
                        <li><a target="_blank" href="https://www.1stwebdesigner.com">www.1stwebdesigner.com</a></li>
                    </ul>
                </div>
               
            </div>
        </div>
        <div class="social-networks">
            <a href="https://github.com/AndreasVasd" class="github" target="_blank" id="tooltip1" data-toggle="tooltip" title="Github"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/andreas-vasdekis" class="linkedin" target="_blank" id="tooltip2" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.twitter.com" class="twitter" target="_blank" id="tooltip3" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text </p>
        </div>
    </footer>
            
        <!-- Preloader script -->
        <script>
             	
	$(window).on("load", function () {
        $(".preloader").delay(350).fadeOut(600, function ()
{
            $(this).remove();
        });
		
	});
        </script>
                
        <!-- Return to top script -->
        <script type="text/javascript" src="ret_to_top.js"></script> 

           
    
    </body>
</html>
