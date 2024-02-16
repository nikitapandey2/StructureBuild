<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Structure Buildify - Transforming Spaces</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="logo.png" type="image/svg+xml" />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    .contact {
      display: flex;
      flex-direction: column;
    }
    input, button {
      width: 400px;
      padding: 15px;
      margin-bottom: 10px;
    }
    @media (max-width: 420px) {
      input {
        width: 100%;
        padding: 10px;
        margin-top: auto;
      }
    }
  </style>
  <body>
    
<?php
include("header.php");
?>

    <main>
      <article>
        <section class="hero" id="home">
          <div class="container">
            <div class="hero-content">
              <!-- <p class="hero-subtitle">
                <ion-icon name="home"></ion-icon>

                <span>Structure Buildify - Transforming Spaces</span>
              </p>
              <p class="hero-subtitle">
                <span>Contact Us</span>
              </p> -->

              <h2 class="h1 hero-title">
                If You Have Any Query, <br /> Contact Us
              </h2>

              <form class="contact" action="sendtosheet.php" method="POST">
                <input type="text" placeholder="Full Name" name="name" required />
                <input type="number" placeholder="Mobile Number" name="mobileno" required />
                <input type="email" placeholder="Email" name="email" required />
                <input type="text" placeholder="Message" name="message" required />
                <button class="btn" type="submit">Send</button>
              </form>
            </div>
            <figure class="hero-banner">
              <img src="contact.png" alt="Modern house model" class="w-100" />
            </figure>
          </div>
        </section>
      </article>
    </main>

    <?php
include("footer.php");
?>
    <!-- 
  - custom js link
-->
    <script src="./assets/js/script.js"></script>

    <!-- 
  - ionicon link
-->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
