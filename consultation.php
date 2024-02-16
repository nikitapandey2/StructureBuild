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
  </head>

  <body>
    
  <?php
include("header.php");
?>

    <main>
      <article>
        <section class="about" id="about">
          <div class="container">
            <figure class="about-banner hover-out">
              <img src="bc1.jpg" alt="House interior" class="hover-in2" />

              <!-- <img
                src="BC2.png"
                alt="House interior"
                class="abs-img hover-in2"
              /> -->
            </figure>

            <div class="about-content">
              <p class="section-subtitle">Our main Service</p>

              <h2 class="h2 section-title">Business Consultation</h2>

              <p class="about-text">
                At Structure Buildify, Business Consultation means taking care of
                everything – from fixing things promptly to building positive
                relationships with tenants and managing finances wisely. It's
                not just about managing properties; it's a comprehensive
                approach aimed at making sure each property thrives and keeps
                its value over time
              </p>

              <ul class="about-list">
                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>

                  <p class="about-item-text">Modern Design</p>
                </li>

                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>

                  <p class="about-item-text">Quality of Work</p>
                </li>

                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>

                  <p class="about-item-text">Affordable Prices</p>
                </li>

                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>

                  <p class="about-item-text">Complete 24/7 Security</p>
                </li>
              </ul>

              <p class="callout">
                At Structure Buildify, property management goes beyond maintenance . It's
                a strategic blend of satisfaction, financial acumen, and care,
                ensuring lasting value in every property we oversee.
              </p>

              <a target="_blank" href="service.php" class="btn">Our Services</a>
            </div>
          </div>
        </section>


        <section class="let" id="let" style="text-align: center; position: relative;">
              
        <section class="about" id="about">
 <h2 style="color: #333; text-align: center;font-size: var(--fs-2); margin-bottom:5%;font-color:var(--dark-jungle-green)">Expertise in Business Consultation</h2>
 <div class="container" >        
<div class="about-content">
  <h3 class="h2 section-title">Industry Mastery</h3>
  <p class="about-text">
  Our team possesses in-depth knowledge and understanding of various industries. We stay abreast of industry trends, regulations, and market dynamics, 
    allowing us to offer tailored consultation services that align with the specific needs and challenges of your business sector
     </div>
  <img src="assets/images/bcon(1).jpg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
</div>

<div class="container" style="margin-top:7%">
<img src="assets/images/bcon(2).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
                    <div class="about-content">
                    <h3 class="h2 section-title">Strategic Problem-Solving</h3>
              <p class="about-text">
              With a wealth of experience, we excel in strategic problem-solving. We analyze complex business issues, identify key challenges, and develop customized solutions. 
    Our expertise lies in creating effective strategies that enhance operational efficiency, mitigate risks, and foster sustainable growth for your business.
    </div>
          </div>

          <div class="container"style="margin-top:7%;margin-bottom:7%" >        
<div class="about-content">
  <h3 class="h2 section-title">Client-Centric Approach</h3>
  <p class="about-text">
  Our commitment to client success is unwavering. We engage in a collaborative process, actively listening to your concerns and goals.
     By understanding your unique business context, we deliver consultation services that are not only expertly crafted but also highly
      relevant and impactful. Your success is our priority.
       </div>
  <img src="assets/images/bcon(3).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
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

              <button class="btn cta-btn">
                <span>Explore Properties</span>

                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
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
