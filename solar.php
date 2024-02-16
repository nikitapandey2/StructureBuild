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
            
          <img src="solar rooftop.jpeg" alt="House interior" class="hover-in2" style="width: 100%; border-radius: 20px; margin-right:15%;" />


              <!-- <img
                src="./assets/images/Rectangle 37.png"
                alt="House interior"
                class="abs-img hover-in2"
              />-->
          

            <div class="about-content">
              <p class="section-subtitle">Our main Service</p>

              <h2 class="h2 section-title">Solar Management</h2>

              <p class="about-text">
                At the forefront of solar innovation, we unlock the potential of
                sunlight through meticulous utilization and expert energy
                harvest. Our strategic approach sets a stage where efficiency
                meets environmental responsibility.
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
                our mastery in sunlight utilization, energy harvest, and
                strategic solar power generation sets the stage for efficient
                usage.
              </p>

              <a target="_blank" href="service.php" class="btn">Our Services</a>
            </div>
          </div>
        </section>




        
        <section class="let" id="let" style="text-align: center; position: relative;">
        
        <section class="about" id="about">
 <h2 style="color: #333; text-align: center;font-size: var(--fs-2); margin-bottom:5%;font-color:var(--dark-jungle-green)">Solar Precision, Resource Optimization.</h2>
 <div class="container" >        
<div class="about-content">
  <h3 class="h2 section-title">Sustainable Energy Source:</h3>
  <p class="about-text">
  Buildify prioritizes sustainable practices by incorporating solar management in its projects. 
  Utilizing solar energy is an eco-friendly solution that harnesses power from the sun, a renewable resource. 
  This commitment to sustainable energy not only reduces the environmental impact but also aligns 
  with Buildify's dedication to creating eco-conscious and energy-efficient buildings. </p>
    </div>
  <img src="assets/images/solarm(1).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
</div>

<div class="container" style="margin-top:7%">
<img src="assets/images/solarm(2).jpg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
                    <div class="about-content">
                    <h3 class="h2 section-title">Cost-Efficiency and Long-Term Savings</h3>
              <p class="about-text">
              Solar management implemented by Buildify is a strategic choice for long-term cost efficiency. Solar technologies help minimize reliance on conventional energy sources, leading to lower utility bills over the lifespan of a building. By investing in solar solutions, Buildify not only contributes to environmental conservation but also provides clients with the advantage of substantial long-term savings on energy costs.</p>
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
  <img src="assets/images/inte(3).jpeg" alt="House interior" class="" style="border-radius: 15%; width:100%;height:100%; margin: 0 auto; border: 4px solid #ea732f;" />
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
