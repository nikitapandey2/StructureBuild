<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Assosciate</title>
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
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

   

    h2 {
      margin-bottom: 10px;
      color: #333;
      text-align:center;
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
      margin-bottom: 5px!important;
    }
  }
</style>



</head>


<body>
<?php
include("header.php");
?>

<h2 class="h2 section-title" style="text-align:left;">Project Assosciate</h2>
  <div class="flex-container">
  <div class="card-left" style="width: 47%;margin-right:15px;margin-left:15px; padding-left: 15px; padding-right: 15px; background-color: hsl(210, 100%, 97%)">
  <div class="about-content">
    <h2 class="h3 section-title" style="text-align:left;">DESCRIPTION</h2>
    <p class="about-text">
    The Project Associate position at Structure Buildify involves actively contributing to project management, coordinating tasks,
     and ensuring the successful execution of assigned projects. Project Associates will work closely with project teams, analyze project
      requirements, and support in implementing project plans. <br>
        <strong>Roles &amp; Responsibilities</strong>
      <ul>
        <li> Collaborate with project teams to understand project goals and requirements.
        <li>Assist in developing project plans, timelines, and resource allocation.
        <li>Coordinate project tasks and ensure timely completion of project milestones.
        <li>Communicate effectively with team members and stakeholders to provide project updates.
        <li>Analyze project data and prepare reports for project evaluation.
        <li>Contribute to problem-solving and decision-making processes within the project team.
        <li>Ensure adherence to project timelines and budget constraints.</ul>
    </p>
      <strong>Requirements</strong>
      <ul>
        <li> Bachelor's degree in a relevant field
        <li>Strong organizational and communication skills
        <li>Proficient in project management tools and basic computer applications
        
      </ul>
    </p>
      <strong>Experience</strong>
      <ul>
        <li> Prior experience in telecalling or customer service is a plus but not mandatory.
        <li> 
      </ul>
    </p>
    </div>
    </div>

    <div class="card-right" style="width: 47%;margin-left:15px;padding-left: 15px; padding-right: 15px; background-color:hsl(210, 100%, 97%);">
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
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button>
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
