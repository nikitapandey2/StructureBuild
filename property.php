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
              <img src="property Management.jpg" alt="House interior" class="hover-in2" />

              <!-- <img
                src="pr2.jpg"
                alt="House interior"
                class="abs-img hover-in2"
              /> -->
            </figure>

            <div class="about-content">
              <p class="section-subtitle">Our main Service</p>

              <h2 class="h2 section-title">Property Management</h2>

              <p class="about-text">
                At Structure Buildify, property management means taking care of everything
                – from fixing things promptly to building positive relationships
                with tenants and managing finances wisely. It's not just about
                managing properties; it's a comprehensive approach aimed at
                making sure each property thrives and keeps its value over time
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
 <h2 style="color: #333; text-align: center;font-size: var(--fs-2); margin-bottom:5%;font-color:var(--dark-jungle-green)">Excellence in Property Management</h2>
 <div class="container" >        
<div class="about-content">
  <h3 class="h2 section-title">Proactive Maintenance</h3>
  <p class="about-text">
  Achieving excellence in property management involves a proactive approach to maintenance. Our team prioritizes regular inspections,
     prompt repairs, and preventive measures to ensure properties are well-maintained, minimizing potential issues and enhancing overall asset value.
    </div>
  <img src="assets/images/prm(1).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
</div>

<div class="container" style="margin-top:7%">
<img src="assets/images/prm(2).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
                    <div class="about-content">
                    <h3 class="h2 section-title">Tenant Satisfaction</h3>
              <p class="about-text">
              We prioritize tenant satisfaction as a key indicator of excellence. From effective communication and swift issue resolution to creating a comfortable living environment,
     our property management focuses on meeting the needs and expectations of tenants, fostering positive relationships, and promoting tenant retention.
    </div>
          </div>

          <div class="container"style="margin-top:7%;margin-bottom:7%" >        
<div class="about-content">
  <h3 class="h2 section-title">Financial Precision</h3>
  <p class="about-text">
  Excellence in property management extends to financial acumen. We maintain transparent financial practices, ensuring accurate accounting, budget adherence, 
    and timely reporting. Our commitment to financial precision enables property owners to have a clear overview of their investments, making informed decisions 
    for long-term success.
     </div>
  <img src="assets/images/prm(3).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
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
