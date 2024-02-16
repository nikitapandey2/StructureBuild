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

    .card {
      box-sizing: border-box;
      margin: 10px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height: 20%;  
    } */
     .card-30 {
      flex: 1 0 30%;
    } 

    .card-50 {
      flex: 1 0 50%;
      
      
    }

    

    h2 {
      margin-bottom: 10px;
      color: #333;
    }

    p {
      color: #666;
    }

    @media only screen and (max-width: 900px) {
      .flex-container {
      flex-direction: column;
    }
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
    color: white;
    border: none;
    cursor: pointer;
    z-index: 1000;
    transform-origin: left;
  }
  .order-1 {
    order: 1;
  }

  .order-2 {
    order: 2; 
  }
  @media (min-width: 900px) {
    .card-50 {
      width: 100%; 
    }   
  } 
  @media screen and (max-width: 1024px) {
        .card-30 {
            flex: 100%;
            max-width: 100%;
            padding: 10px;
        }
    } 
</style>
</head>
<body>
<?php
include("header.php");
?>

<div class="flex-container" style="display: flex;">
  <div class="card-left" style="flex: 1; padding:15px; margin-left:5px;margin-right:5px;">
    <img style="width: 100%; height: 100%; object-fit: cover;" src="hiring.jpg" alt="">
  </div>

  <div class="card-right" style="flex: 1;padding:15px;  margin-left:5px;margin-right:5px; background-color:aliceblue;">
    <div class="about-content">
      <h2 class="h2 section-title" style="font-weight:bold;">Became a builder of dreams with structure buildify</h2>
      <p class="about-text">
        Are you passionate about shaping the future of construction and making a lasting impact on the built environment? Structure Buildiify is on the lookout for talented individuals to join our dynamic team! If you thrive in a collaborative, innovative, and fast-paced environment, we want to hear from you.
      </p>
      <p class="about-text">
        At Structure Buildiify, we are committed to revolutionizing the construction industry through cutting-edge technologies and sustainable practices. We take pride in fostering a culture of creativity, diversity, and continuous learning. As a part of our team, you'll have the opportunity to work on exciting projects, collaborate with industry experts, and contribute to the development of groundbreaking solutions.
      </p>
      <a target="_blank" href="https://www.linkedin.com/company/structurebuildify/"></a>
    </div>
  </div>
</div>

<br />

  <h1 class="h2 section-title" style="font-weight:700; text-align: center; ">Explore Careers</h1>
  <div class="flex-container">
    <div class="card card-30">
    <a target="_blank" href="salesexecutivejd.php" class="about-content">
    <h2 class="h2 section-title" style="font-size:35px">Sales Executive</h2>
    <p class="about-text">
       <b> Min Exp</b><br />  1 year
    </p>
</a>
<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button></a>

</div>
    <div class="card card-30">
    <a target="_blank" href="telecaller.php" class="about-content">
            <h2 class="h2 section-title" style="font-size:35px">Telecaller (Female)</h2>
           <p class="about-text">
            <b> Min Exp</b>
<br />
1 years
             </p>
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button></a>
    </div>


    <div class="card card-30">
    <a target="_blank" href="project assosciate.php" class="about-content">
            <h2 class="h2 section-title" style="font-size:35px">Project Associate</h2>
           <p class="about-text">
            <b> Min Exp</b>
<br />
1 years
            </p>
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button></a>
</div>
    <div class="card card-30">
    <a target="_blank" href="civil engineer.php" class="about-content">
            <h2 class="h2 section-title" style="font-size:35px">Civil Engineer</h2>
           <p class="about-text">
            <b> Min Exp</b>
<br />
1 years
            </p>
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button></a>
    </div>

. 
    <div class="card card-30">
    <a target="_blank" href="property manager.php" class="about-content">
            <h2 class="h2 section-title" style="font-size:35px">Property Manager</h2>
            <p class="about-text">
            <b> Min Exp</b>
<br />
1 years
            </p>
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button></a>
      

</div>
<div class="card card-30">
<a target="_blank" href="community manager.php" class="about-content">
            <h2 class="h2 section-title" style="font-size:35px">Community Manager</h2>
            <p class="about-text">
            Min Exp
<br />
1 years
            </p>
            </p>
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe_1eX-w_JyDmn8Yx0WNznZg-B5uy6kYEW9gDcHZaU6lOD6cw/viewform?usp=sf_link">
    <button class="btn" type="button"><span class="flex-1 whitespace-no-wrap">Apply</span></button></a>

    </div>
    </div>
  </div>
</article>
</main>
<?php
include("footer.php");
?>
<script src="./assets/js/script.js"></script>
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
