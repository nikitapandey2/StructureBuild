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
      .property-list {
        grid-template-columns: 1fr;  
    }

    @media (min-width: 768px) {
        .property-list {
            grid-template-columns: repeat(2, 1fr);  
        }
    }
    .before-after {
            display: flex;
            flex-direction: column;  
            align-items: stretch;  
            justify-content: space-between;  
            margin-bottom: 20px;
            text-align: center; 
            font-size:170%;
            
        }

        .before-after img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            margin-left: 20px;
            margin-right: 20px; 
            border-radius:8% ;
        }
       .before{
        margin-right:5%;
       }
       .after{
        margin-right:2%;
       }


        @media (min-width: 768px) {
            .before-after {
                flex-direction: row; 
            }

            .before, .after {
                flex: 1; 
            }
        }
        .service-item {
        flex: 1;
        margin: 10px;
    }

    @media (max-width: 768px) {
        .service-item {
            flex: 0 0 100% !important;
            border-radius:10%!important;
            margin-bottom:4%!important;
        }
    }
    @media (max-width: 768px) {
  #cor {
    display: none;
  }
}
   

   
.slider-container {
        width: 90%; 
        margin: 5% auto; 
        overflow: hidden;
        display: flex;
        justify-content: center; 
        align-items: center; 
    }
    
    .districts-wrapper {
        display: flex;
        transition: transform 0s ease; 
    }
    
    p.district {
      margin-right:1% ;
    text-align: center;
    line-height: 100px; 
    background-color: #fff;
    white-space: nowrap;
    font-size: 25px;
    color: #ea732f;
    font-weight: bold;
}
</style>

    
  </head>

  <body >
 
<?php
include("header.php");
?>

    <main>
      <article>
        <!-- 
        - #HERO
      -->

        <section class="hero" id="home">
          <div class="container">
            <div class="hero-content">
             

              <h2 class="h1 hero-title" style="font-weight:bold;">
              Structure Buildify - Transforming Spaces
                            </h2>
              <p class="hero-subtitle">
                    <span style="font-weight: bold; font-size: 1.5em;margin-top:20px;"> Crafting Homes, Creating Memories: Your Personal Touch, Our
                Expertise.</span>
              </p>

              <!-- <p class="hero-text">
                "Design Your Lifestyle, Build Your Home with Structure Buildify."<br />
                Empower your lifestyle with Structure Buildify – where visionary designs
                seamlessly fuse with expert construction, creating a bespoke
                sanctuary that embodies your unique identity
              </p> -->

              <a target="_blank" href="contact.php"
                ><button class="btn" style="display: flex">
                  Make An Enquiry<ion-icon
                    name="arrow-forward-outline"
                    style="margin-top: 4px; margin-left: 5px"
                  ></ion-icon></button
              ></a>
            </div>

            <figure class="hero-banner hover-out">
              <img
                src="./assets/images/Frame.png"
                alt="Modern house model"
                class="w-100 hover-in"
              />
            </figure>
          </div>
        </section>

        <!-- 
        - #ABOUT
      -->

        <section class="about" id="about">
          <div class="container">
            <figure class="about-banner hover-out" style="margin-right: 20px;">>
            <img src="ab1.jpg" alt="House interior" class="" style="border-radius: 5%;"/>
                    <div class="about-content">
            </figure>
            <div class="about-content">
              <p class="section-subtitle">About Us</p>
              <h2 class="h2 section-title">Structure  Buildify.</h2>
              <p class="about-text">
                In the heart of Jhansi, Structure Structure Buildify stands as the epitome
                of tailored living. With a commitment to exceptional design and
                quality craftsmanship, we take pride in building homes that
                exceed expectations. From initial vision to the last interior
                touch, your dream home journey unfolds seamlessly with us.
              </p>

              <ul class="about-list">
                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                  <p class="about-item-text">Smart Home Design</p>
                </li>

                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                  <p class="about-item-text">Beautiful Scene Around</p>
                </li>

                <li class="about-item">
                  <div class="about-item-icon">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                  <p class="about-item-text">Exceptional Lifestyle</p>
                </li>

                <li class="about-item">
                  <div class="about-item-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>

                  <p class="about-item-text">Complete 24/7 Security</p>
                </li>
              </ul>

              <!-- <p class="callout">
                We believe that the best homes are built with care and attention
                to detail, which is why we use only the highest quality
                materials and construction methods.
              </p> -->

              <a target="_blank" href="#service" class="btn" style="display: flex"
                >Our Services
                <ion-icon
                  name="arrow-forward-outline"
                  style="margin-top: 4px; margin-left: 5px"
                ></ion-icon
              ></a>
            </div>
          </div>
        </section>

        <!-- 
        - #SERVICE
      -->

        <section class="service" id="service">
          <div class="container">
            <p class="section-subtitle">Our Services</p>
            <h2 class="h2 section-title">Our Main Focus</h2>         
 <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center;">
<a target="_blank" href="architectural.php">
    <div class="service-item" style="position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(ConstructionStructure.png); display: flex; flex-direction: column; justify-content: center;">
        <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
            <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                <a target="_blank" href="architectural.php" style="text-decoration: none; color: inherit;">Architectural<br> Design</a>
            </h3>
        </div>
        <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
    </div>
</a>

<a target="_blank" href="interiordesign.php">
        <div class="service-item" style="position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(int.jpg); display: flex; flex-direction: column; justify-content: center;">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
                <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                    <a target="_blank" href="interiordesign.php" style="text-decoration: none; color: inherit;">Interior Design</a>
                </h3>
            </div>
            <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        </div>
    </a>

    <a target="_blank" href="vastushastra.php">
        <div class="service-item" style="position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(./assets/images/vastu.jpg); display: flex; flex-direction: column; justify-content: center;">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
                <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                    <a target="_blank" href="vastushastra.php" style="text-decoration: none; color: inherit;">Vastu Shastra</a>
                </h3>
            </div>
            <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        </div>
    </a>

    <a target="_blank" href="construction.php">
        <div class="service-item" style="position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(ArchitecturalDesign.png); display: flex; flex-direction: column; justify-content: center;">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
                <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                    <a target="_blank" href="construction.php" style="text-decoration: none; color: inherit;">Construction <br>Structure</a>
                </h3>
            </div>
            <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        </div>
    </a>

</div>


<div class="container" style="display: flex; flex-wrap: wrap; justify-content: center;">

    <a href="">
        <div class="service-item" style="flex: 1; position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(rooftop.jpeg); display: flex; flex-direction: column; justify-content: center;">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
                <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                    <a target="_blank" href="solar.php" style="text-decoration: none; color: inherit;">Solar Management</a>
                </h3>
            </div>
            <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        </div>
    </a>

    <a href="">
        <div class="service-item" style="flex: 1; position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(propertymanag.avif); display: flex; flex-direction: column; justify-content: center;">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
                <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                    <a target="_blank" href="property.php" style="text-decoration: none; color: inherit;">Property Management</a>
                </h3>
            </div>
            <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        </div>
    </a>

    <a href="">
        <div class="service-item" style="flex: 1; position: relative; background-size: cover; background-position: center; height: 300px; margin: 10px; border-radius: 10px; overflow: hidden; background-image: url(./assets/images/consultation.png); display: flex; flex-direction: column; justify-content: center;">
            <div class="service-content" style="color: #fff; z-index: 1; position: relative; text-align: center;">
                <h3 class="h3 card-title" style="color: inherit; font-weight: bold; font-size: 32px;">
                    <a target="_blank" href="consultation.php" style="text-decoration: none; color: inherit;">Business Consultation</a>
                </h3>
            </div>
            <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        </div>
    </a>

</div>


        </section>

        <!-- 
        - #PROPERTY
      -->



      <section class="property" id="property">
        <div class="container">
            <p class="section-subtitle" style="color: #333; font-size: 18px;">Properties</p>
            <h2 class="h2 section-title" style="margin: 20px 0; color: #333;">Residential Development</h2>
            <section class="before-after">
        <div class="before">
            <h2>Before</h2>
            <img src="assets/images/RDU2.jpg" alt="Before Image">
        </div>
        <div class="after">
            <h2>After</h2>
            <img src="assets/images/RDA2.jpg" alt="After Image">
        </div>
    </section>

               </section>


        <button class="sticky-button btn">
          <a target="_blank" href="calculate.php" style="color: black">Cost Calculator</a>
        </button>
        
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
        - #FEATURES
      -->

        <section class="features">
          <div class="container">
            <p class="section-subtitle">Our Aminities</p>

            <h2 class="h2 section-title">Building Aminities</h2>

            <ul class="features-list">
              <li>
                <a target="_blank" href="#" class="features-card">
                  <div class="card-icon">
                    <ion-icon name="car-sport-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Parking Space</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>
<li>
              <a target="_blank" href="#" class="features-card">
                  <div class="card-icon">
                    <ion-icon name="shield-checkmark-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Private Security</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>
                 <li>
                 <a target="_blank" href="#" class="features-card">
                  <div style="width: 35%; height: 35%; display: flex; align-items: center; justify-content: center;border-radius: 50%; background-color: hsl(8, 100%, 97%); padding:5%;" class="card-icon">
      
                 <img  style="width: 100%; height: 100%;" src="assets/images/bathtub.png" alt="Pooja Room Icon">
                 </div>

                  <h3 class="card-title">Attached bathroom</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href="#" class="features-card">
                  <div class="card-icon">
                    <ion-icon name="bed-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">King size bed</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href="#" class="features-card">
                  <div class="card-icon">
                    <ion-icon name="home-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">Smart homes</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href="#" class="features-card">
                  <div class="card-icon">
                  <ion-icon name="happy-outline"></ion-icon>
                  </div>

                  <h3 class="card-title">kids Room</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>
              <li>
              <a target="_blank" href="#" class="features-card">
                  <div style="width: 45%; height: 45%; display: flex; align-items: center; justify-content: center;border-radius: 50%; background-color: hsl(8, 100%, 97%); ;" class="card-icon">
      
                 <img  style="width: 100%; height: 100%;" src="assets/images/pooja.png" alt="Pooja Room Icon">
                 </div>
              <h3 class="card-title">Pooja Room</h3>
                  <div class="card-btn">
                     <ion-icon name="arrow-forward-outline"></ion-icon>
                      </div>
                  </a>
                    </li> 

              <li>
              <a target="_blank" href="#" class="features-card">
                  <div style="width: 40%; height: 40%; display: flex; align-items: center; justify-content: center;border-radius: 50%; background-color: hsl(8, 100%, 97%); padding:5%;" class="card-icon">
      
                 <img  style="width: 100%; height: 100%;" src="assets/images/bench.png" alt="Pooja Room Icon">
                 </div>

                  <h3 class="card-title">Garden Sitout</h3>

                  <div class="card-btn">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </section>
        <!-- why choose us -->


        <section id="cor" class="cor">
      <div class="container" data-aos="fade-up" style="background-color:fff">
       <header class="section-header" style="align-items: center; text-align: center; padding:3%">
    <h2>why choose us</h2>         
        <div class="container-3">
          <!-- Left Container -->
          <div class="left-container">
            <!-- Top Content -->
            <div class="top-container" style="padding:5% 5% 5% 5%; margin-bottom: 20%;">
              <div class="icon-with-text" style="padding-bottom:5%;">
                <h1>Dedicated Team</h1>           
                 </div>
                  <p>Dedicated Team ensuring excellence in every Buildify project</p>
            </div>
            <!-- Bottom Content -->
            <div class="bottom-container" style="padding:5% 5% 5% 5%; margin-bottom: 20%;">
              <div class="icon-with-text"  style="padding-bottom:5%;">
                <h1>Innovation</h1>
              </div>
              <p>Innovative solutions driving progress at Buildify, where creativity meets construction excellence to redefine the future of architecture.</p>
            </div>
          </div>
        <div class="circle-container">
          <div class="inner-circle">
           </div>
        </div>
           <!-- Right Container -->
        <div class="right-container">
          <!-- Top Content -->
          <div class="top-container" style="padding:5% 5% 5% 5%; margin-bottom: 20%;">
            <div class="icon-with-text" style="padding-bottom:5%;">
              <h1>Futuristic Architectural Design</h1>
            </div>
           <p> Futuristic Architectural Designs shaping the future with innovation at Buildify.</p>          </div>
          <!-- Bottom Content -->
          <div class="bottom-container" style="padding:5% 5% 5% 5%; margin-bottom: 20%;">
            <div class="icon-with-text"  style="padding-bottom:5%;">
             <h1>Quality Work</h1>
            </div>
            <p>Exceptional quality craftsmanship defining every Buildify project.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


 
        <!-- <script>
          AOS.init(); // Initialize AOS library
        </script> -->

      
<p class="section-subtitle" style="margin-top:20px;">House and Home design</p>
<h2 class="h2 section-title">Leatest trends in house and home design</h2>
<section class="container-1">
  <a href="details.php" class="card">
    <img src="1.png" alt="Card Image">
    <div class="card-content">
      <h3>Area: 950sqft - 1100sqft</h3>
    </div>
  </a>
  <a href="details2.php" class="card">
    <img src="2.b.png" alt="Card Image">
    <div class="card-content">
      <h3>Area: 1150sqft - 1300sqft</h3>
    </div>
  </a>
  <a href="details3.php" class="card">
    <img src="3.a.png" alt="Card Image">
    <div class="card-content">
      <h3>Area: 1350sqft - 1500sqft</h3>
    </div>
  </a>
  <a href="details4.php" class="card">
    <img src="1.png" alt="Card Image">
    <div class="card-content">
      <h3>Area: 1550sqft - 1800sqft</h3>
    </div>
  </a>
</section>



 

     
        <!-- 
        - #BLOG
      -->

        <!-- <section class="blog" id="blog">
          <div class="container">
            <p class="section-subtitle">News & Blogs</p>

            <h2 class="h2 section-title">Leatest News Feeds</h2>

            <ul class="blog-list has-scrollbar">
              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/blog-1.png"
                      alt="The Most Inspiring Interior Design Of 2021"
                      class="w-100"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-content-top">
                      <ul class="card-meta-list">
                        <li>
                          <a target="_blank" href="#" class="card-meta-link">
                            <ion-icon name="person"></ion-icon>

                            <span>by: Admin</span>
                          </a>
                        </li>

                        <li>
                          <a target="_blank" href="#" class="card-meta-link">
                            <ion-icon name="pricetags"></ion-icon>

                            <span>Interior</span>
                          </a>
                        </li>
                      </ul>

                      <h3 class="h3 blog-title">
                        <a target="_blank" href="#"
                          >The Most Inspiring Interior Design Of 2021</a
                        >
                      </h3>
                    </div>

                    <div class="blog-content-bottom">
                      <div class="publish-date">
                        <ion-icon name="calendar"></ion-icon>

                        <time datetime="2022-27-04">Apr 27, 2022</time>
                      </div>

                      <a target="_blank" href="#" class="read-more-btn">Read More</a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/blog-2.jpg"
                      alt="Recent Commercial Real Estate Transactions"
                      class="w-100"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-content-top">
                      <ul class="card-meta-list">
                        <li>
                          <a target="_blank" href="#" class="card-meta-link">
                            <ion-icon name="person"></ion-icon>

                            <span>by: Admin</span>
                          </a>
                        </li>

                        <li>
                          <a target="_blank" href="#" class="card-meta-link">
                            <ion-icon name="pricetags"></ion-icon>

                            <span>Estate</span>
                          </a>
                        </li>
                      </ul>

                      <h3 class="h3 blog-title">
                        <a target="_blank" href="#"
                          >Recent Commercial Real Estate Transactions</a
                        >
                      </h3>
                    </div>

                    <div class="blog-content-bottom">
                      <div class="publish-date">
                        <ion-icon name="calendar"></ion-icon>

                        <time datetime="2022-27-04">Apr 27, 2022</time>
                      </div>

                      <a target="_blank" href="#" class="read-more-btn">Read More</a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/blog-3.jpg"
                      alt="Renovating a Living Room? Experts Share Their Secrets"
                      class="w-100"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-content-top">
                      <ul class="card-meta-list">
                        <li>
                          <a target="_blank" href="#" class="card-meta-link">
                            <ion-icon name="person"></ion-icon>

                            <span>by: Admin</span>
                          </a>
                        </li>

                        <li>
                          <a target="_blank" href="#" class="card-meta-link">
                            <ion-icon name="pricetags"></ion-icon>

                            <span>Room</span>
                          </a>
                        </li>
                      </ul>

                      <h3 class="h3 blog-title">
                        <a target="_blank" href="#"
                          >Renovating a Living Room? Experts Share Their
                          Secrets</a
                        >
                      </h3>
                    </div>

                    <div class="blog-content-bottom">
                      <div class="publish-date">
                        <ion-icon name="calendar"></ion-icon>

                        <time datetime="2022-27-04">Apr 27, 2022</time>
                      </div>

                      <a target="_blank" href="#" class="read-more-btn">Read More</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section> -->
 
        <div class="container">
            <p class="section-subtitle">Our Services</p>
            <h2 class="h2 section-title">Discover our reach</h2>   </div>    
            <div class="slider-container">
    <div class="districts-wrapper">
        
        <p class="district">Agra</p>
        <p class="district">Aligarh</p>
        <p class="district">Allahabad</p>
        <p class="district">Ambedkar Nagar</p>
        <p class="district">Amethi</p>
        <p class="district">Amroha</p>
        <p class="district">Auraiya</p>
        <p class="district">Azamgarh</p>
        <p class="district">Badaun</p>
        <p class="district">Bagpat</p>
        <p class="district">Bahraich</p>
        <p class="district">Bahraich</p>
        <p class="district">Balrampur</p>
        <p class="district">Banda</p>
        <p class="district">Barabanki</p>
        <p class="district">Bareilly</p>
        <p class="district">Basti</p>
        <p class="district">Bijnor</p>
        <p class="district">Bulandshahr</p>
        <p class="district">Chandauli</p>
        <p class="district">Chitrakoot</p>
        <p class="district">Deoria</p>
        <p class="district">Etah</p>
        <p class="district">Etawah</p>
        <p class="district">Faizabad</p>
        <p class="district">Farrukhabad</p>
        <p class="district">Fatehpur</p>
        <p class="district">Firozabad</p>
        <p class="district">Gautam Buddha Nagar</p>
        <p class="district">Ghaziabad</p>
        <p class="district">Ghazipur</p>
        <p class="district">Gonda</p>
        <p class="district">Gorakhpur</p>
        <p class="district">Hamirpur</p>
        <p class="district">Hapur</p>
        <p class="district">Hardoi</p>
        <p class="district">Hathras</p>
        <p class="district">Jalaun</p>
        <p class="district">Jaunpur</p>
        <p class="district">Jhansi</p>
        <p class="district">Kannauj</p>
        <p class="district">Kanpur Dehat</p>
        <p class="district">Kanpur Nagar</p>
        <p class="district">Kasganj</p>
        <p class="district">Kaushambi</p>
        <p class="district">Hathras</p>
        <p class="district">Jalaun</p>
        <p class="district">Jaunpur</p>
        <p class="district">Jhansi</p>
        <p class="district">Kannauj</p>
        <p class="district">Kanpur Dehat</p>
        <p class="district">Kanpur Nagar</p>
        <p class="district">Kasganj</p>
        <p class="district">Kaushambi</p>
        <p class="district">Hathras</p>
        <p class="district">Jalaun</p>
        <p class="district">Jaunpur</p>
        <p class="district">Jhansi</p>
        <p class="district">Kannauj</p>
        <p class="district">Kanpur Dehat</p>
        <p class="district">Kanpur Nagar</p>
        <p class="district">Kasganj</p>
        <p class="district">Kaushambi</p>
        <p class="district">Kushinagar</p>
        <p class="district">Lakhimpur Kheri</p>
        <p class="district">Lalitpur</p>
        <p class="district">Lucknow</p>
        <p class="district">Maharajganj</p>
        <p class="district">Mahoba</p>
        <p class="district">Mainpuri</p>
        <p class="district">Mathura</p>
        <p class="district">Mau</p>
        <p class="district">Kanpur Dehat</p>
        <p class="district">Kanpur Nagar</p>
        <p class="district">Kasganj</p>
        <p class="district">Kaushambi</p>
        <p class="district">Kushinagar</p>
        <p class="district">Lakhimpur Kheri</p>
        <p class="district">Lalitpur</p>
        <p class="district">Lucknow</p>
        <p class="district">Maharajganj</p>
        <p class="district">Mahoba</p>
        <p class="district">Mainpuri</p>
        <p class="district">Mathura</p>
        <p class="district">Mau</p>        
        <p class="district">Meerut</p>
        <p class="district">Mirzapur</p>
        <p class="district">Moradabad</p>
        <p class="district">Muzaffarnagar</p>
        <p class="district">Pilibhit</p>
        <p class="district">Pratapgarh</p>
        <p class="district">Rae Bareli</p>
        <p class="district">Rampur</p>
        <p class="district">Saharanpur</p>
        <p class="district">Sant Kabir Nagar</p>
        <p class="district">Sant Ravidas Nagar</p>
        <p class="district">Sambhal</p>
        <p class="district">Shahjahanpur</p>        
        <p class="district">Shamli</p>
        <p class="district">Shravasti</p>
        <p class="district">Siddharthnagar</p>
        <p class="district">Sitapur</p>
        <p class="district">Sonbhadra</p>
        <p class="district">Sultanpur</p>
        <p class="district">Unnao</p>
        <p class="district">Varanasi (Kashi)</p>

    </div>
</div>    

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
    <script>
    
    const districtsWrapper = document.querySelector('.districts-wrapper');
    const districtWidth = document.querySelector('.district').offsetWidth;
    let currentPosition = 0;
    const totalWidth = districtsWrapper.offsetWidth;
    const containerWidth = document.querySelector('.slider-container').offsetWidth;

    function slideDistricts() {
        currentPosition -= districtWidth;
        districtsWrapper.style.transition = 'transform 0s ease';
        districtsWrapper.style.transform = 'translateX(' + currentPosition + 'px)';

       
        if (Math.abs(currentPosition) >= totalWidth) {
            currentPosition = 0;
            districtsWrapper.style.transition = 'none'; 
            districtsWrapper.style.transform = 'translateX(' + currentPosition + 'px)';
            setTimeout(() => {
                districtsWrapper.style.transition = 'transform 0s ease'; 
            }, 100); 
        }
        setTimeout(slideDistricts, 200);
    }

    setTimeout(slideDistricts, 200); 

   
    window.addEventListener('load', () => {
        currentPosition = 0;
        districtsWrapper.style.transition = 'none'; 
        districtsWrapper.style.transform = 'translateX(' + currentPosition + 'px)';
        setTimeout(() => {
            districtsWrapper.style.transition = 'transform 0s ease'; 
        }, 100); 
    });
</script>

  </body>
</html>






 