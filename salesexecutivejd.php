<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      align-items: center;
      justify-content: center;
      background-color: #f4f4f4;
    }

    .flex-container {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      margin: auto;
    }

    .fl{
      width:100%;
    }

   

    h2 {
      margin-bottom: 10px;
      color: #333;
    }

    p {
      color: #666;
    }
   
  </style>

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
 
</style>
<style>
  @media only screen and (max-width: 768px) {
    .card-left,
    .card-right {
      width: 100% !important;
      margin-right: 0 !important;
      margin-left: 0 !important;
      padding-left: 15px !important;
      padding-right: 15px !important;
      margin-top: 5px;
      margin-bottom: 5px;
    }
  }
</style>



</head>


<body>
<?php
include("header.php");
?>

<h2 class="h2 section-title" style="text-align:left;">Sales Executive</h2>


<div class="flex-container" style="display: flex; margin-bottom:15px;">

<div class="card-left" style="width: 47%;margin-right:15px;margin-left:15px; padding-left: 15px; padding-right: 15px; background-color: hsl(210, 100%, 97%);">
  
    <div class="about-content">

        <h2 class="h3 section-title" style="text-align:left;">DESCRIPTION</h2>
        <p class="about-text">
            The Sales Executive position at Structure Buildify involves building relationships with clients to understand 
            their needs and presenting our company's services to them. The Sales Executive will be responsible for creating
            and implementing sales strategies, managing sales activities, and achieving sales targets. This is a full-time
            on-site role located in Jhansi
        </p>
        <p>
            <strong>Requirements</strong>
            <ul>
                <li> Graduate degree in any Stream </li>
                <li>Excellent communication skills in Hindi, English</li>
                <li> Comfortable with phone and laptop communication</li>
            </ul>
        </p>

    </div>
</div>

<div class="card-right" style="width: 47%;margin-left:15px;padding-left: 15px; padding-right: 15px; background-color: hsl(210, 100%, 97%);">
    <div class="about-content">

        <h2 class="h3 section-title" style="text-align:left;">ABSTRACT</h2>

        <p class="about-text">
            Seeking a dynamic Sales Executive Telecaller and Project Manager
        </p>
        <p class="about-text">
            Min Exp
            <br />
            1 year
        </p>
        <p class="about-text">
            APPLY BY
            <br />
            January 31st 2024
        </p>
    </div>
    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
        <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button>
    </a>
</div>
</div>
 
  <!-- 
  - #FEATURES
--></article>
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