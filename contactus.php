<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Minic - Contact Us</title>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
    
        <a href="" class="logo"><img src="img/logo1.png" alt="" srcset=""></a>
    
        <nav class="navbar">
        <a href="home.php">Our World</a>
    <a href="about.php">Our Story</a>
    <a href="index.php">Reviews</a>
    <a href="contactus.php">Contact Us</a>
        </nav>
    
      
    
    </header>
    <main>
      <section class="contact" id="contact">
        <h1 class="heading"><span> contact </span> us</h1>

        <div class="row">
          <form action="https://formsubmit.co/d25a2089e2b29f703282be5185e08ade" method="POST" >

            <input type="text" placeholder="Your Name" class="box" name="Name"/>
            <input type="email" id="email" placeholder="Email id" class="box" name="email"/>
            <textarea
              name="Message"
              class="box"
              placeholder="How can we help you?"
              id=""
              cols="30"
              rows="10"
            ></textarea>
            <button type="submit">Send</button>
          </form>

          <div class="image">
            <img src="img/contact.jpg" alt="" />
          </div>
        </div>
      </section>
    </main>
    <!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">Our World</a>
    <a href="about.php">Our Story</a>
    <a href="index.php">Reviews</a>
    <a href="contactus.php">Contact Us</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">example@gmail.com</a>
            <a href="#">Aligarh, india - 202002</a>
        </div>

    </div>

    <div class="credit"> created by <span>Ariba & Suzain</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
  </body>
</html>
