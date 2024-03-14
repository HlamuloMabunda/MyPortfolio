<?php
include 'header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
  <br>
    <div class="container">
        <h2 style="text-align:center;">Get in touch with me here</h2>
    <hr></hr>
      </div>
    <br>
    <div class="row">
<div class="col" style="margin:2%;">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.2026004134186!2d28.160953274965422!3d-25.994179855452494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e86c6ce9de7%3A0xb174e0e2948cce2a!2sSnapdragon%20St%2C%20Kaalfontein%2C%20Midrand%2C%201632!5e0!3m2!1sen!2sza!4v1704706000699!5m2!1sen!2sza" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 <h3>South Africa, Gauteng<br> 
  1685 Midrand, Kaalfontein ext 13<br>
  4409/59 Snapdragon street  
 </h3>
</div>
 <div class="col">
 <div style="display: inline-block;">
  <form action="contact_form.php" method="POST">
    <div class="row">
    <label>Full Name:</label>
    <br>
    <input type="text" id="name" name="name">
    <br>
    <label>Email:</label>
     <br>
   <input type="text" id="email" name="email">
    <br>
 </div>
    <div class="row">
    <label>Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number">
    <br>
 </div>
 <div class="row">
    <label>Message:</label>
    <br>
  <textarea id="message" name="message" rows="6" cols="50"></textarea>
    <br>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-6">
    <button type="submit" class="btn btn-success" name="sendbtn" style="width:100%;">SEND</button>
 </div>
 <div class="col-sm-6">
    <button type="reset" class="btn btn-danger" name="clearbtn" style="width:100%;">CLEAR</button>   
 </div>
  </div>
</form>
</div>

 </div>   
</div>
<?php
include 'footer.html';
?>
</body>
</html>