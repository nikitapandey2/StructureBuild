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
      p {
        margin: auto;
        text-align: left;
        width: 80%;
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
            <h1 class="h2">Privacy & Policy</h1>

            <p>
              At Structure Structure Buildify, we take the privacy of our website visitors
              and customers seriously. Our privacy policy comprises 100%
              integrity that explains how we collect, use, and share your data.
            </p>
            <h2 class="h3">Why we collecting the information?</h2>
            <p>
              We only ask for personal information when we truly need it to
              provide a service to you. We collect it by fair and lawful means,
              with your knowledge and consent. We also let you know why we’re
              collecting it and how it will be used.
            </p>
            <h3>Website forms</h3>
            <p>
              We collect your information through our website, which contains
              the fields like name, email address, mobile number, postal
              address, city, state, and zip code. We use your information to
              inform you about the latest marketing and promotional offers for
              services you requested for further communication. Furthermore, we
              collect non-personal information like IP address, browser type,
              and operating system to ensure that no one other than you is
              logging into your data.
            </p>
            <h3>Cookies</h3>
            <p>
              Cookies are another source for collecting non-personal formation
              regarding your website, as they allow us to remember your
              preferences for improving your user experience as they enable us
              to remember your preferences and provide a better user experience.
              However, you can always opt out of the promotional and marketing
              offers and disable cookies in your browser settings.
            </p>
            <h3>Third- Party</h3>
            <p>
              Our website also integrates with third-party links like social
              media websites which would reveal your data to which we don't have
              access. Hence, it will help it you read the privacy policies
              before divulging your information.
            </p>

            <h2 class="h3">
              What are the parties to which we transfer your data?
            </h2>
            <p>
              We share your intormation with the following parties with your
              consent.
            </p>
            <h3>Service providers</h3>
            <p>
              We share your information with service providers, which enables
              them to keep in touch with you atter analyzing our services.
            </p>
            <h3>Business transfers</h3>
            <p>
              Suppose you wish to share your negotiation information, meager as
              the sale of your company's assets, financing, or acquisition of
              the whole or part of your business to another company, we share
              your information with the concerned party to assist you.
            </p>
            <h3>Business partners or affiliates</h3>
            <p>
              We share your information with our business partners or afiates
              comprising of a parent company and its subsidiaries and joint
              ventures to honor the policy and provide specific services or
              promotional otters.
            </p>
            <h3>Other Users</h3>
            <p>
              When you share persoral information to interact in public areas
              with other users or register through a third party integration,
              there is every possibility that other users would view your data,
              like name. profile, pictures, and activity description. to
              communicate with you.
            </p>
            <h3>Retaining personal data</h3>
            <p>
              We retain and use personal data required for internal analysis
              according to our legal obligations. After obtaining your
              permission, we process your information at the company's operating
              ofices and other places involving various parties, including
              transferring your data to computers outside your state.
            </p>
            <h3>Deleting your data</h3>
            <p>
              If you decide to get your data deleted from our system, we would
              like to respect that decision and provide you with the required
              assistance. Our data usage services enable you to amend, update.
              or delete specific information whenever you sign in to your
              accourt.
            </p>
            <h3>Data Disclosure</h3>
            <p>
              If you are looking forward to a meager acquisition or sale of the
              asset, we transter your data to the concerned parties and bring it
              to your notice before implementation.
            </p>
            <h3>Law/ Judicial enforcement</h3>
            <p>
              The company may divulge your information under speciic
              circumstances, where judicial aspects are one of them. We share
              your information in good faith, required for legal compliance,
              defending the company's rights over the property, preventing
              service misuse, investigating possible wrongdoing, and protecting
              against legal liability.
            </p>
            <h3>Personal Information</h3>
            <p>
              We take the security of personal information seriously and strive
              to use and protect your data in a way that would be commercially
              acceptable.
            </p>
            <h2 class="h3">
              If you have any quries regarding Privacy & Policies cotact us at
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
