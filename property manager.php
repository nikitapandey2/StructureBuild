<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Manager</title>
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

    .card {
      box-sizing: border-box;
      margin: 10px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-50 {
      flex: 1 0 50%;
    }

    .card-30 {
      flex: 1 0 30%;
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
  @media only screen and (max-width: 768px) {
    .card-left,
    .card-right {
      width: 100% !important;
      margin-right: 0 !important;
      margin-left: 0 !important;
      padding-left: 15px !important;
      padding-right: 15px !important;
      margin-top: 5px;
      margin-bottom: 10px;
    }
  }
</style>



</head>


<body>
<?php
include("header.php");
?>

<h2 class="h2 section-title" style="text-align:left;">Property Manager</h2>
  <div class="flex-container">
  <div class="card-left" style="width: 47%;margin-right:15px;margin-left:15px; padding-left: 15px; padding-right: 15px; background-color: hsl(210, 100%, 97%);">
    <div class="about-content">
    <h2 class="h3 section-title" style="text-align:left;">DESCRIPTION</h2>
    <p class="about-text">
    The Property Manager position at Structure Buildify involves overseeing and managing residential or commercial properties to ensure smooth operations.
     Property Managers will be responsible for handling tenant relationships, property maintenance, and financial aspects of property management. 
     This is a full-time role that may require on-site presence
        <strong>Roles &amp; Responsibilities</strong>
      <ul>
      <li>Manage day-to-day operations of assigned properties, including leasing, maintenance, and tenant relations.
      <li>Screen and select tenants, handle leasing agreements, and address tenant concerns.
      <li>Coordinate maintenance and repairs, ensuring properties are well-maintained.
      <li>Develop and implement property management plans to optimize property performance.
      <li>Conduct regular property inspections and address any issues promptly.
      </ul>
    </p>
      <strong>Requirements</strong>
      <ul>
      <li> Bachelor's degree in Business, Real Estate, or a related field
      <li>Strong communication and interpersonal skills
         <li>Knowledge of property management laws and regulations
           <li>Proficiency in property management software and basic accounting
        
      </ul>
    </p>
      <strong>Experience</strong>
      <ul>
        <li> Previous experience in property management or a related field is preferred.
        <li> 
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
1 years
            </p>
            <p class="about-text">
            APPLY BY
<br />
January 31st 2024
            </p>
    </div>
    <button class="" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button>
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
