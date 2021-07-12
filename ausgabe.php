<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
  <div class="menu">
      <div class="btn"><i class="fa fa-home" aria-hidden="true"></i>
Home</div>
      <div class="btn"><i class="fa fa-desktop" aria-hidden="true"></i>
Website</div>
      <div class="btn"><i class="fa fa-line-chart" aria-hidden="true"></i>
Marketing</div>
      <div class="btn"><i class="fa fa-mobile" aria-hidden="true"></i>
Mobile App</div>
      <div class="btn"><i class="fa fa-envelope-o" aria-hidden="true"></i>
Contact</div>
  </div>
   <div class="contact-title">
      <?php echo "<h1>Hello ".$_POST['name']."</h1>"; ?>
       <h2>We are alwaye ready to serve you!</h2>
       <div class="contact-ausgabe">
        <?php
           echo '<u> Deine Nutzerdaten: </u><br>';
        ?>
       </div>
       <div class="daten">   
        <?php
            echo 'Name: ' .$_POST['name'].'<br>';
            echo 'Email: ' .$_POST['email'].'<br>';
            echo 'Sprache: ' .$_POST['sprache'].'<br>';
            echo 'Message: ' .$_POST['message'].'<br>';
        ?>  
    </div>
   </div>
    
    
</body>
</html>
