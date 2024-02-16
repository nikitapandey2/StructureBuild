<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Structure Buildify - Transforming Spaces</title>

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
    <style>
      .sticky-button {
        position: fixed;
        top: 90%;
        transform: translateY(-50%) rotate(-90deg);
        left: 20px;

        /* background-color: #3498db; */
        color: white;
        border: none;

        cursor: pointer;
        z-index: 1000;
        transform-origin: left;
      }
      h1,
      h2,
      h3 {
        text-align: center;
        margin-bottom: 20px;
      }
      h2,
      h3 {
        margin-top: 20px;
      }
      p,
      h4 {
        margin: auto;
        margin-bottom: 20px;
        text-align: left;
        width: 80%;
        display: flex;
        gap: 20px;
      }
    </style>
  </head>

  <body>
    
  <?php
include("header.php");
?>

    <main>
      <article>
        <!-- 
        - #HERO
      -->

        <!-- 
        - #ABOUT
      -->

        <section class="about" id="about">
          <div>
            <h1 class="h2">Terms & Conditions</h1>

            <p>
              These terms and conditions shall govern your use of our website.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon>
              By using our website, you accept these terms and conditions in
              full; accordingly, if you disagree with these terms and conditions
              or any part of these terms and conditions, you must not use our
              website.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon>If you [register with our
              website, submit any material to our website or use any of our
              website services], we will ask you to expressly agree to these
              terms and conditions.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon>
              You must be at least 18 years of age to use our website; by using
              our website or agreeing to these terms and conditions, you warrant
              and represent to us that you are at least 18 years of age.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon>Our website uses cookies; by
              using our website or agreeing to these terms and conditions, you
              consent to our use of cookies in accordance with the terms of our
              ‘privacy and cookies policy’.
            </p>
            <h2 class="h3">Licence to use website</h2>
            <p>You may:</p>
            <h4>(a) view pages from our website in a web browser;</h4>
            <h4>
              (b) download pages from our website for caching in a web browser;
            </h4>
            <h4>(c) print pages from our website;</h4>
            <h4>(d) stream audio and video files from our website; and</h4>
            <h4>(e) use our website services by means of a web browser,</h4>
            <p>
              subject to the other provisions of these terms and conditions.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon>Except as expressly permitted
              BY THE provisions of these terms and conditions, you must not
              download any material from our website or save any such material
              to your computer.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon> You may only use our website
              for your own personal and business purposes, and you must not use
              our website for any other purposes.
            </p>
            <p>
              <ion-icon name="ellipse"></ion-icon> Except as expressly permitted
              by these terms and conditions, you must not edit or otherwise
              modify any material on our website.
            </p>
            <h3>
              Unless you own or control the relevant rights in the material, you
              must not:
            </h3>
            <h4>
              (a) republish material from our website including republication on
              another website;
            </h4>
            <h4>(b) sell, rent or sub-license material from our website;</h4>
            <h4>(c) show any material from our website in public;</h4>
            <h4>
              (d) exploit material from our website for a commercial purpose; or
            </h4>
            <h4>(e) redistribute material from our website.</h4>
            <h2 class="h3">
              If you have quries regarding Terms and Conditions cotact us at
              <a target="_blank" href="mailto:contact@structurebuildify.com">contact@structurebuildify.com</a>
            </h2>
          </div>
        </section>

        <!-- 
        - #CTA
      -->

        <section class="cta">
          <div class="container">
            <div class="cta-card">
              <div class="card-content">
                <h2 class="h2 card-title">Looking for a dream home?</h2>

                <p class="card-text">
                  We can help you realize your dream of a new home
                </p>
              </div>

              <a target="_blank" href="calculate.php"
                ><button class="btn cta-btn" >
                  Cost Calculator<ion-icon
                    name="arrow-forward-outline" ></ion-icon></button
                ></a>    
            </div>
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
