<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - Structure Buildify - Transforming Spaces</title>

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
        position: sticky;
        top: 90%;
        transform: translateY(-50%) rotate(-90deg);
        left: 20px;

       
        color: white;
        border: none;

        cursor: pointer;
        z-index: 1000;
        transform-origin: left;}
        @media (max-width: 768px) {
      .container:nth-child(2) {
      flex-direction: column-reverse;
      text-align: center;
    }

    .container:nth-child(2) img {
      width: 100%;
      margin-bottom: 15px;
    }
  }
     
  @media (max-width: 768px) {
    .container {
      display: flex;
      flex-direction: column;
      text-align: center;
    }

    .container img {
      width: 100%;
      margin-bottom: 15px;
    }}

    .container:nth-child(2) {
      order: -1;
    }
    .responsive-container {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    text-align: center;
    
  }

  .responsive-item {
    width: 40%; 
    max-width: 300px; 
    background-color: #e0e0e0;
    padding: 15px;
    margin: 10px;
    border-radius: 10%;
    text-align: center;
  }

  .arrow {
    display: inline-block;
  }

  @media (min-width: 768px) {
    .responsive-item {
      width: 30%; 
    }
    
    .arrow {
      display: block;
    }
  }




  
    </style>
  </head>

  <body>
    
  <?php
include("header.php");
?>
    <main>
      <button class="sticky-button btn">
        <a target="_blank" href="calculate.php" style="color: black">Cost Calculator</a>
      </button>
      <article>
        <!-- 
        - #HERO
      -->

        <!-- 
        - #ABOUT
      -->

 <section class="about" id="about">
 <h2 style="color: #333; text-align: center;font-size: 40px; margin-bottom:5%;">About Us</h2>
 <div class="container" >        
<div class="about-content">
<p class="section-subtitle">About Us</p>  
  <h2 class="h2 section-title">Structure Buildify</h2>
  <p class="about-text">
    In the heart of Jhansi, Structure Structure Buildify stands as the epitome of tailored living. With a commitment to exceptional design and
    quality craftsmanship, we take pride in building homes that
    exceed expectations. From initial vision to the last interior
    touch, your dream home journey unfolds seamlessly with us.
  </p>
    </div>
  <img src="ab1.jpg" alt="House interior" class="" style="border-radius: 5%;" />
</div>

          <div class="container" style="margin-top:7%">
           <img src="about(1).jpeg" alt="House interior" class="" style="border-radius: 5%;"/>
                    <div class="about-content">
              <p class="about-text">
              Structure Buildify stands as a testament to personalized living. Guided by a passion for 
              exceptional design and meticulous craftsmanship, we take pride in crafting homes that go above 
              and beyond expectations. From the inception of your dream home to the final interior flourish,
               your journey unfolds seamlessly with us. At Structure Structure Buildify, we don't just build homes;
                we weave the threads of your vision into a living reality, creating spaces that reflect individuality 
                and excellence.
              </p>
            </div>
          </div>

          <div class="container"  style="margin-top:7%" >        
            <div class="about-content">
                  <!-- <h2 class="h2  section-title">Structure  Buildify</h2> -->
                       <p class="about-text">
                       Guided by a passion for unique design and careful craftsmanship, we build homes that not only meet but exceed your expectations. 
                       Our commitment to excellence ensures that every aspect of your dream home journey is seamless and satisfying.
                       Our spaces aren't just buildings; they're personalized expressions of your individuality and a commitment to excellence.
                        Your story unfolds in the homes we build, where comfort, style, and top-quality construction come together effortlessly.
                                     </p>
                               </div>
                                <img src="about(2).jpg" alt="House interior" class="" style="border-radius: 5%;" />
                                  </div>
                     </section>




<section class="locate" style="text-align: center; margin-top:7%; margin-bottom:7%;">
<h1 style="margin-bottom: 10px; font-size:20px">At the core of Jhansi, we don't just build structures</h1>
  <h2 style="margin-bottom: 20px; color:#ea732f;font-size:40px"> we craft stories in every corner</h2>
  <p style="max-width: 600px; margin: 0 auto;">
  Each corner of our builds narrates a story, an intricate blend of design, dreams, and lasting memories.
  </p>

  <div class="responsive-container">
  <div class="responsive-item">
    <h3>Expertise and Experience</h3>
    <p></p>
  </div>
  <div class="arrow">
    ----->
  </div>
  <div class="responsive-item">
    <h3>Innovation</h3>
    <p></p>
  </div>
  <div class="arrow">
    ----->
  </div>
  <div class="responsive-item">
    <h3>Client-Centric Approach</h3>
    <p></p>
  </div>
</div>
<div style="display: flex; justify-content: center; margin-top: 10px;margin-left: 5%;margin-right: 5%;flex-wrap:wrap;">
    <div style="width: 500px; margin-left: 5%;">
      <img src="up-in-india.jpg" alt="Left Image" style="width: 100%; border-radius: 10px;margin-top: 15%">
    </div>
    <div style="width: 500px; margin-top:12%">
      <img src="up-map.jpg" alt="Right Image" style="width: 100%; border-radius: 10px;">
    </div>
  </div>
</section>



        <!-- 
        - #SERVICE
      -->

        <!-- 
        - #PROPERTY
      -->
      <section class="service" id="service" style="background-color: #f5f5f5; padding: 40px 0; text-align: center;">
    <h2 class="h2 section-title">We are Uttar Pradesh's Leading</h2>
    <!-- <p class="section-subtitle">Home Designers</p> -->
    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center;">

        <div class="service-item" style="flex: 1; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; position: relative; background-image: url(services1.jpg);">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative;">
                <h2 class="h2 section-title" style="margin-top: 0; font-size: 2.5rem;">Modern Designs</h2>
            </div>
        </div>

        <div class="service-item" style="flex: 1; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; position: relative; background-image: url(qw1.jpg);">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative;">
                <h2 class="h2 section-title" style="margin-top: 0; font-size: 2.5rem;">Quality Work</h2>
            </div>
        </div>

        <div class="service-item" style="flex: 1; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; position: relative; background-image: url(a1.webp);">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative;">
                <h2 class="h2 section-title" style="margin-top: 0; font-size: 2.5rem;">Affordable Prices</h2>
            </div>
        </div>

    </div>
</section>



                        <!-- 
        - #BLOG
      -->

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
