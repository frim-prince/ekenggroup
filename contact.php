<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ostacor">
    <meta name="keywords" content="HTML,CSS,JavaScript,jquery">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
         
          <title>EKENG</title>
          <!-- bootstrap -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <!-- Custom CSS: custom Styles -->
          <link href="css/animate.css" rel="stylesheet">
          <link href="css/viewbox.css" rel="stylesheet">
          <link href="css/main.css" rel="stylesheet">
<style>
.banner {
    display: flex;
    align-items: center;
    height: 50vh;
    color: #fff;
    position: relative;
    text-transform: uppercase;
    background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url('images/banner.jpg');
}
.banner  h1 {
    text-align: left;
}
footer {background-image: url("images/banner-customers.jpg");background-repeat: no-repeat;background-size: cover;background-position: top;}
</style>
          
          <!-- Google Font and font-awesome -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,300,400,400i,500,500i,600,700,900" rel="stylesheet">
                
          <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
           
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
  </head>
  
<!-- Body Start-->
<body>
<!-- Navbar Start-->
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/ekengLOLO.PNG" alt="ekengLOLO"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <!-- Nav links -->
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="index.php">home</a></li>
                   <li class="hidden-xs">|</li>
                   <li><a href="about.php">About</a></li>
                   <li class="hidden-xs">|</li>
                   <li><a href="services.php">services</a></li>
                   <li class="hidden-xs">|</li>
                   <li><a href="portfolio.php">portfolio</a></li>
                   <li class="hidden-xs">|</li>
                   <li><a href="blog.php">Blog</a></li>
                   <li class="hidden-xs">|</li>
                   <li><a href="contact.php">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navbar Ended-->

<!-- Jumbotron Start-->
<div class="text-center banner">
   <div class="gradient"></div>
    <div class="container">
       <div class="row">
           <div class="col-md-12">
                <h1 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="800">Contact</h1>
           </div>
       </div>
    </div>
</div>
<!-- Jumbotron Ended-->
<!-- Contact Section Start -->
<section class="contact">
<div class="container">
  <div class="row">
    <div class="col-sm-6 col" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
         <h3>Have a Project in Mind?</h3>
         <h4>lets make something awesome</h4>
         <p>Feel free to reach out to us so we can customize a product to suit your needs.
          <h4>E-K-E-N-G we undertand you better</h4></p>
    <address>
         <p><i class="fa fa-map-marker" aria-hidden="true"></i> NO.29 Lesley Opoku-Ware Drive,Ridge Extension,Kumasi.
</p>
         <p><i class="fa fa-clock-o" aria-hidden="true"><span></span></i>08:00 am - 5:00 pm    Mondays -- Fridays </p>
         <p><i class="fa fa-phone" aria-hidden="true"></i>Tel:0322-499-941</p>
     </address>
    </div>
    <form method="post">
      <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
         
     if(isset($_POST["submit"])){  
       $name=$_POST["name"];
       $email=$_POST["email"];
       $message=$_POST["message"];
       
   require 'vendor/autoload.php';
 
$mail = new PHPMailer;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        
//$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 25;
$mail->SMTPAuth = false;
$mail->SMTPSecure = false;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username ='frimprincy@gmail.com';                 // SMTP username
$mail->Password ='pope@0504';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, $name);
$mail->addAddress('info@theekenggroup.com');//;'peter@fiagbe.com';'social@9logix.com');     // Add a recipient
              // Name is optional

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contact Us';
$mail->Body    = "
                  <!DOCTYPE html>
                  <html>
                  <head>
                    <title></title>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                    <meta http-equiv='content-type' content='text/html; charset=ISO-8859-15'>
                  </head>
                  <body>
                      <div style='border:0.5px solid black;padding:5px;'>
                   
                   <div style='padding-bottom:30px;padding-top: 30px;padding-left: 3px;padding-right: 3px; '>
                       <img  src='' class='center'>
                        
                      <p style='text-align: center; font-weight: bold; font-family: Times'>THE EKENG GROUP</p>
                      <p style='text-align: center; font-size: 12px;font-family: Times'>INNOVATIVE-EXCELLENCE-INTERGRITY</p>
                      <p style='text-align: center; font-size: 12px;font-family: Times' >EVANS AFRIYIE</p>
                   </div>
                  
                 <div style='border:border:0.1px solid black; padding: 5px; ' >$message</div>
                  <div >
                   <div style='padding-bottom:30px;padding-top: 30px;padding-left: 3px;padding-right: 3px; font-size: 12px; '>
                        
                      <p style='text-align: center;  font-family: Times'>29 LESLEY OPOKU-WARE DRIVE,</p>
                      <p style='text-align: center;font-family: Times'>EXTENSION-KUMASI</p>
                      <p style='text-align: center;font-family: Times'>WWW.THEEKENGGROUP.COM,</p>
                      <p style='text-align: center;font-family: Times'>P.O.BOX,1136,</p>
                      <p style='text-align: center;font-family: Times'>OBUASI-ADANSI,</p>
                       <p style='text-align: center;font-family: Times'>TEL:+233-322-499-941,</p>
                       <p style='text-align: center;font-family: Times'>Admin@theekenggroup.com,</p>
                   </div>
                  </div>
               </div>
                  </body>
                  </html>
                 ";

    
        if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo" <div class='alert alert-success'>
    <strong>Success!</strong> Email has been sent
  </div>";
}
    }
     




       ?>
    <div class="col-sm-6 col">
      <div class="row" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <div class="col-sm-6 col form-group">
          <input class="form-control" name="name" placeholder="Your Name" type="text" required />
        </div>
        <div class="col-sm-6 col form-group">
          <input class="form-control" name="email" placeholder="Your Email Id" type="email" required />
        </div>
      </div>
      <textarea class="form-control" name="message" placeholder="Your Message" rows="8" required></textarea>
      <div class="row">
        <div class="col-sm-12 col form-group">
          <button  type="submit" name="submit" class="btn btn-default pull-left">SUBMIT</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</section>
<!-- Contact Section Ended -->




<!-- Footer section Start -->
<footer>
    <!-- container Start-->
    <div class="container">
       <div class="row" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
           <ul>
               <li><a href="index.php">Home </a></li><li class="semicolon">|</li>
               <li><a href="services.php">our services</a></li><li class="semicolon">|</li>
               <li><a href="portfolio.php">portfolio</a></li><li class="semicolon">|</li>
               <li><a href="blog_single.php">Read Blog</a></li><li class="semicolon">|</li>
               <li><a href="support.php">contact</a></li><li class="semicolon">|</li>
               <li><a href="support.php">support</a></li>
           </ul>
           <p><p>(C) 2020 All rights reserved <span><a href="https://Ekeng-Electronic.com</editable/websites/html5" target="_blank" style="color: #b9b203;">EKENG.</a></span>Designed by <span><a href="https://Ekeng-IT/editable/websites/html5" target="_blank" style="color: #03b9b3;">Ekeng-Electronic.com</a></span></p>
       </div>
       <div  class="footer-logo">
              <a href="index.php"><img src="images/EKEN.png" alt="footer-logo"></a>
       </div>
    </div>
    <!-- container Ended-->
</footer>
<!-- Footer section Ended --> 

<div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
</div>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/animate.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.viewbox.min.js"></script>
    <script src="js/custom.js"></script>

    </body>
  <!-- Body Ended -->
</html>
