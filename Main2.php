<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>W.M.Chamith Sandaruwan's Portfolio as a Graphic Designer</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="script.js"></script>
  
</head>

<body>
  <?php include ("validation.php"); ?>
  <!--  include ("contactme.php"); -->
  <!--logo-->
  <header class="header">
    <a href="#" class="logo">Eyetoolgraphics.</a>
    
    <nav class="navbar">
      <a href="#" class="active">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="portfolio.pdf" target="_blank">Portfolio</a>
      <a href="#">Contact</a>
    </nav>
    
  </header>
<!--home-->
  <section class="home">
    <div class="home-content">
      <h1>Hi, I'm Chamith Sandaruwan</h1>
      <h3>Graphic Designer</h3>
      <p>I'm a versatile, creative, and innovative graphic designer with experience in freelancing. I have the ability and patience to make quick decisions and deliver exceptional designs.</p>
      <div class="btn-box">
        <a href="CV chamith.pdf" target="_blank">SeeMe</a>
        <a href="#" target="_blank">Hire Me</a>
      </div>
    </div>

    <div class="home-icons">
      <a href="https://web.facebook.com/chamith.sandaruwan.31" target="_blank"><i class='bx bxl-facebook'></i></a>
      <a href="https://wa.link/hkf1e0" target="_blank"><i class='bx bxl-whatsapp'></i></a>
      <a href="https://www.tiktok.com/chamithsandaruwan" target="_blank"><i class='bx bxl-tiktok'></i></a>
      <a href="https://www.youtube.com/channel/UCugO9DzeHxnfliJ5mY86xhA" target="_blank"><i class='bx bxl-youtube'></i></a>
      <a href="https://www.linkedin.com/in/chamith-sandaruwan-96a40b244/" target="_blank"><i class='bx bxl-linkedin'></i></a>
    </div>
    <div>
      <a href="CV chamith.pdf" target="_blank" class="btn"> Downlord CV</a>
    </div>
    
  </section>

<!--about-->
  <section class="about" id="about">
    <div class="about-img">
      <img src="me3.png" width="610px" height="900px" alt="">
    </div>

    <div class="about-content">
      <h2 class="heading">About <span>Me</span></h2>
      <h3>Graphic Designer</h3>
    </div>
    <p>I'm a versatile, creative, and innovative graphic designer with experience in freelancing.<br>
       I have the ability and patience to make quick decisions and deliver exceptional designs.</p><br>
      <a href="#" class="btn" >Read More</a>
  </section>


<!--services section design-->
  <section class="services" id="services">
    <h2 class="heading">Our Services</h2>

     <div class="services-contaier">
        <div class="services-box">
          <i class='bx bxs-paint'></i>
           <h3>Logo Designing</h3>
          <p>We will create creative and unique logos for your company</p>
          <a href="#" class="btn" >Read More</a>
       </div>

       <div class="services-box">
        <i class='bx bxs-paint'></i>
         <h3>Youtube thumbnails</h3>
        <p>We will create creative youtube thumbnail designing for your youtube content.</p>
        <a href="#" class="btn" >Read More</a>
     </div>

     <div class="services-box">
      <i class='bx bxs-paint'></i>
       <h3>Leaflets</h3>
      <p>We will create leaflets for printing or sharing</p>
      <a href="#" class="btn" >Read More</a>
   </div>

   <div class="services-box">
    <i class='bx bxs-paint'></i>
     <h3>Birthday Cards</h3>
    <p>We will create beautiful and amazing birthday cards for your girl/boyfriends, <br>family members and other peoples</p>
    <a href="#" class="btn" >Read More</a>
 </div>

 <div class="services-box">
  <i class='bx bxs-paint'></i>
   <h3>Others</h3>
  <p>Contact me to all graphic designing and check my portpolio</p>
  <a href="#" class="btn" >Read More</a>
</div>

    </div>
  </section>
  

  <!--contact me section design-->
<section class="contact" id="contact">
    <h2 class="heading">Contact Me</h2>
    <p> <span class="error">*required field </span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="input-box">
            <input type="text" name="name" placeholder="Full Name">
            <span class="error"><?php echo $nameErr;?></span>
            <input type="email" name="email" placeholder="Email Address">
            <span class="error"><?php echo $emailErr;?></span>
        </div>
        <div class="input-box">
            <input type="number" name="mobile_number" placeholder="Mobile Number">
            <span class="error"><?php echo $mobileNumErr;?></span>
            <input type="text" name="email_subject" placeholder="Email Subject">
        </div>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
</section>


</body>

</html>

