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
        position: sticky;
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
      <button class="sticky-button btn">
        <a target="_blank" href="calculate.php" style="color: black">Cost Calculator</a>
      </button>

      <article>
        <!-- 
        - #HERO
      -->

        <!-- 
        - #BLOG
      -->

        <section class="blog" id="blog">
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
        </section>

     <!-- 
    - #FOOTER
  -->
  <div class="whatsapp-button">
    <a
      href="https://wa.me/918858498822"
      target="_blank"
      rel="noopener noreferrer"
    >
      <img src="./assets/images/whatsapp.png" alt="WhatsApp Icon" />
    </a>
  </div>
  
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
