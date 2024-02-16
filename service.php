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
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
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

      <!-- 
        - #SERVICE
      -->

      <section class="about" id="about">
        <h2 style="color: #333; text-align: center;font-size: 40px; margin-bottom:5%;">Our Services</h2>
        <div class="container">
          <div class="about-content">
            <!-- <p class="section-subtitle">Our Main Focus</p>    -->
            <h2 class="h2 section-title" style="display:inline-block;">Architectural Design</h2>
            <a target="_blank" href="architectural.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>
            <p class="about-text">
              Architectural design is like a careful dance between art and engineering. Our goal is to craft buildings
              where every detail works together in harmony, guided by a clear vision. It's not just about making things
              look good; it's about ensuring that every part serves a meaningful purpose. Think of it as creating structures
              where every element plays a role in bringing a thoughtful and intentional design to life. It's about making spaces
              that are both beautiful and functional.
            </p>
          </div>
          <img src="ConstructionStructure.png" alt="House interior" class="" style="border-radius: 5%; width :90%" />
        </div>

        <div class="container" style="margin-top:7%">
          <img src="int.jpg" alt="House interior" class="" style="border-radius: 5%;width :90%" />
          <div class="about-content">
            <h2 class="h2 section-title" style="display:inline-block;">Interior Design </h2>
            <a target="_blank" href="interiordesign.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>
            <p class="about-text">
              Interior design speaks without words, telling the story of your space. We use colors and textures like a script,
              making sure your surroundings not only look good but also work well for you. It's about creating a space that tells
              your story and meets your needs, both in how it looks and how it functions. Our goal is to make your space not just visually pleasing,
              but also a place that serves you in every way
            </p>
          </div>
        </div>

        <div class="container" style="margin-top:7%">
          <div class="about-content">



            <h2 class="h2 section-title" style="display:inline-block;">Vastu Shastra</h2>
            <a target="_blank" href="vastushastra.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>




            <p class="about-text">
              Vastu Shastra is like our guide for a balanced and harmonious life. It guides how we design and build spaces,
              ensuring they resonate with a sense of balance and harmony. Following its principles means creating places that
              "speak" the language of balance, making our surroundings feel just right. It's like a compass that helps us make
              spaces where we can live and work peacefully.
              Vastu Shastra is all about creating a positive and harmonious environment in our homes and workplaces.
            </p>

          </div>
          <img src="VastuShastra.png" alt="House interior" class="" style="border-radius: 5%;width :90%" />
        </div>


        <div class="container" style="margin-top:7%">
          <img src="ArchitecturalDesign.png" alt="House interior" class="" style="border-radius: 5%;width :90%" />
          <div class="about-content">


            <h2 class="h2 section-title" style="display:inline-block;">Construction Structure</h2>
            <a target="_blank" href="construction.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>




            <p class="about-text">
              A construction structure is like the skeleton and building blocks that make sure buildings are strong, secure,
              and last a long time. It includes the framework, the materials, and how everything is put together. Think of
              it as the recipe for creating stable and safe architectural wonders. It's like a puzzle where each piece is
              carefully chosen to make sure the whole thing stands tall and stays strong for a very long time. So, when we
              talk about construction structure, we mean the essential elements that go into making buildings sturdy and enduring.
            </p>

          </div>
        </div>


        <div class="container" style="margin-top:7%">
          <div class="about-content">


            <h2 class="h2 section-title" style="display:inline-block;">Solar Management</h2>
            <a target="_blank" href="solar.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>

            <p class="about-text">
              Making the most of the sun's power: we're really good at using sunlight to create energy.
              Our skills in capturing sunlight and generating solar power in smart ways help us make sure we
              use energy efficiently.
              It's like getting the most out of the sun to provide effective and sustainable energy solutions
            </p>

          </div>
          <img src="solar rooftop.jpeg" alt="House interior" class="" style="border-radius: 5%;width :90%" />
        </div>

        <div class="container" style="margin-top:7%">
          <img src="prop.jpg" alt="House interior" class="" style="border-radius: 5%;width :90%" />
          <div class="about-content">


            <h2 class="h2 section-title" style="display:inline-block;">Property Management</h2>
            <a target="_blank" href="property.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>

            <p class="about-text">
              Managing a property involves doing many different things to keep it in good shape and make sure everyone is happy.
              It's like a juggling act taking care of repairs, finding good people to live there, and making sure everyone gets along.
              Plus, it's about being smart with money, making sure the property stays valuable. It's not just about watching over things;
              it's about dealing with the tricky stuff in real estate to make a place where both owners and tenants can be successful and happy
            </p>

          </div>
        </div>

        <div class="container" style="margin-top:7%;margin-bottom:7%">
          <div class="about-content">

            <h2 class="h2 section-title" style="display:inline-block;">Business Consultation</h2>
            <a target="_blank" href="consultation.php" class="card-link" style="text-decoration: none; display:inline-block;">
              <p class="section-subtitle" style="font-size: 20px; justify-content:center; display:inline-block;"><ion-icon name="arrow-forward-outline" style="font-size: 30px; color: #ea732f;padding-left:4%;display:inline-block;"></ion-icon></p>
            </a>

            <p class="about-text">
              At Structure Buildify, Business Consultation means taking care of everything from fixing things promptly to building positive relationships
              with tenants and managing finances wisely. It's not just about managing properties; it's a comprehensive approach aimed at making sure each
              property thrives and keeps its value over time
            </p>

          </div>
          <img src="./assets/images/consultation.png" alt="House interior" class="" style="border-radius: 5%;width :90%" />
        </div>

        <!-- 
        - #FEATURES
      -->


        <button class="sticky-button btn">
          <a target="_blank" href="calculate.php" style="color: black">Cost Calculator</a>
        </button>
        <!-- 
        - #BLOG
      -->

        <!-- 
        - #CTA
      -->
      </article>

        <section class="cta">
          <div class="container" style="margin-top:7%">
            <div class="cta-card">
              <div class="card-content">
                <h2 class="h2 card-title">Looking for a dream home?</h2>

                <p class="card-text">
                  We can help you realize your dream of a new home
                </p>
              </div>

              <a target="_blank" href="calculate.php"><button class="btn cta-btn">
                  Cost Calculator<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
            </div>
          </div>
        </section>
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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>