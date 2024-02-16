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
              <img src="co1.jpg" alt="House interior" class="hover-in2" />

              <!-- <img
                src="./assets/images/Rectangle 37.png"
                alt="House interior"
                class="abs-img hover-in2"
              />-->
            </figure>

            <div class="about-content">
              <p class="section-subtitle">Our main Service</p>

              <h2 class="h2 section-title">Construction Structure</h2>

              <p class="about-text">
                Architectural design involves creating plans, designs, and
                structures for buildings and spaces that are functional,
                aesthetically pleasing, and sustainable.
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
                Certainly! Architectural design encompasses various elements
                that contribute to the creation and planning of buildings and
                spaces. This involves a thoughtful blend of functionality, aesthetics, and cutting-edge techniques. Our focus is on creating structures that not only 
                meet technical specifications but also stand out for their innovative design elements.
              </p>

              <a target="_blank" href="service.php" class="btn">Our Services</a>
            </div>
          </div>
        </section>

   <!-- why construction -->
        
        <section class="let" id="let" style="text-align: center; position: relative;">
        <section class="about" id="about">
 <h2 style="color: #333; text-align: center;font-size: var(--fs-2); margin-bottom:5%;font-color:var(--dark-jungle-green)">Structuring Success, Building Excellence</h2>
 <div class="container" >        
<div class="about-content">
  <h3 class="h2 section-title">Precision Engineering</h3>
  <p class="about-text">
  Our constructional structure approach is anchored in precision engineering, where every detail is meticulously planned and executed. From the foundation to the framework,
     we emphasize accuracy and quality in construction. Our commitment to precision ensures the durability, stability, and longevity of the structure, providing a solid foundation for long-term success.
      </p>
    </div>
  <img src="assets/images/cs(1).jpg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
</div>

<div class="container" style="margin-top:7%">
<img src="assets/images/cons(2).jpg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
                    <div class="about-content">
                    <h3 class="h2 section-title">Innovative Design Integration</h3>
              <p class="about-text">
              Beyond the traditional, we seamlessly integrate innovative design principles into the constructional structure. This involves a thoughtful blend of functionality, aesthetics, 
    and cutting-edge techniques. Our focus is on creating structures that not only meet technical specifications but also stand out for their innovative design elements. 
    This approach ensures that our constructions not only endure but also inspire and contribute to the architectural landscape
     </p>
            </div>
          </div>

          <div class="container"style="margin-top:7%;margin-bottom:7%" >        
<div class="about-content">
  <h3 class="h2 section-title">Client Satisfaction</h3>
  <p class="about-text">
  Our client-centric approach ensures that your vision is seamlessly integrated into our designs.
        With open communication and adaptability, we deliver spaces that exceed expectations.Through collaborative 
        consultations, we prioritize your input, crafting spaces that not only meet but surpass your unique aspirations.
         Your satisfaction is not just a goal; it's the driving force behind our commitment to exceptional design and 
         personalized service</p>
    </div>
  <img src="assets/images/cons(3).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
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
