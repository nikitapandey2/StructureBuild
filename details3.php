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
      color: white;
      border: none;

      cursor: pointer;
      z-index: 1000;
      transform-origin: left;
    }

        @media only screen and (max-width: 768px) {
            .container-2 {
                flex-direction: column;
            }

            .column-1,
            .column-2 {
                width: 100%;
            }

            .column-3 {
                width: 100%;
                margin-top: 20px; 
            }
     
    .column-1 {
        width: 100%;
        display: flex;
        flex-wrap: nowrap; 
        justify-content: space-between;
    }

    .row {
        width: 100%;
        margin-bottom: 10px; 
    }

    .small-div {
        width: calc(30% - 10px);
        margin-right: 10px; 
    }

   
    .column-3 {
        width: 100%; 
        overflow: auto;
        height:100vh; 
    }
}

    </style>
</head>
<body>
     
<?php
include("header.php");
?>

<div class="container-2">
  <div class="column column-1">
    <div class="row">
      <div class="small-div">
        <img src="3.a.png" alt="Image 1" onclick="displayImage(this)">
      </div>     
    </div>
    <div class="row">
      <div class="small-div">
        <img src="3.b.png" alt="Image 2" onclick="displayImage(this)">
      </div>
    </div>
    <div class="row">
      <div class="small-div">
        <img src="3.c.png" alt="Image 3" onclick="displayImage(this)">
      </div>
    </div>
  </div>
  <div class="column column-2" id="displayed-image"></div>
  <div class="column column-3"style="height: 90vh;border: 1px solid #ea732f;">
    <h2 style="margin-top:5px;">Home is where love resides, memories are created, friends always belong, and laughter never ends.</h2>
  <p>Home is more than just a physical space; it's a sanctuary where the warmth of love fills every corner. It's where cherished memories are born, from the quiet moments of reflection to the joyous celebrations of life's milestones.</p>
  <h2 style="color: #A21D3C;margin-top:5px;">"Every hour is precious, make the most of it."</h3>
  <div style="display: flex;margin-top:5px;">
  <h3 style="margin: 0;">₹ 30 - 29 L </h3>
  <p style="margin: 0; margin-left: 10px; margin-top:10px;margin-top:5px;">(sdfc nhyhrtger)</p>
  </div>
  <h4 style="margin-top:3px;">start your construction with<span style="color:#ea732f">Structure Buildify</span></h4>
  <div style="display: flex; flex-wrap: wrap;margin-top:5px">
  <div style="flex: 1 0 45%; margin: 5px; border: 1px solid #ddd; padding: 10px;background-color:hsl(7, 56%, 91%);">4 Bedrooms</div>
  <div style="flex: 1 0 45%; margin: 5px; border: 1px solid #ddd; padding: 10px;background-color:hsl(7, 56%, 91%);">Living Room 1</div>
  <div style="flex: 1 0 45%; margin: 5px; border: 1px solid #ddd; padding: 10px;background-color:hsl(7, 56%, 91%);">Bathroom 4</div>
  <div style="flex: 1 0 45%; margin: 5px; border: 1px solid #ddd; padding: 10px;background-color:hsl(7, 56%, 91%);">kitchen 1</div>
</div>
<h4>Custome Rating:1604 people liked this design</h4>
<div style="flex: 1 0 100%; margin: 5px;">
    <a href="contact.php" style="display: inline-block; width: 100%; text-align: center; padding: 10px; background-color:#ea732f; color: #fff; text-decoration: none;margin-top:5px">Request a Call</a>
  </div>
  </div>
  <script>

  window.onload = function() {
    var defaultImage = document.querySelector('.small-div img'); 
    displayImage(defaultImage);
  };

    function displayImage(image) {
    var imageUrl = image.src;
    var displayedImage = document.getElementById('displayed-image');
    displayedImage.innerHTML = '<img src="' + imageUrl + '" class="full-image active" alt="Displayed Image">';

    var img = displayedImage.querySelector('img');
    if (img) {
      img.onload = function() {
        var column2Height = document.querySelector('.column-2').offsetHeight;
        var imageHeight = img.offsetHeight;
        if (imageHeight > column2Height) {
          img.style.height = column2Height + 'px';
        }
      };
    }
  }
</script>

</div>

<div style="display: flex;">
  <div style="width: 70%;">
    <h3 style="margin-top: 20px; padding: 10px; background-color:#ea732f; color: white;">Product Description</h3>
    <div style="display: flex; flex-wrap: wrap;">
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Plot Area</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Cost</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Style</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Width</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Length</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Building Types</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Building category</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Total Buildup Area</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Estimated cost area</div>
    </div>
  </div>
  <div style="width: 30%; ">
  
  </div>
</div>


<div style="display: flex;">
  <div style="width: 70%;">
    <h3 style="margin-top: 20px; padding: 10px; background-color: #ea732f; color: white;">Floor Description</h3>
    <div style="display: flex; flex-wrap: wrap;">
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Bedroom</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Living Room</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Bathroom</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Kitchen</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Study Room</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Family Lounge</div>
      <div style="flex: 1 0 30%; margin: 5px; border: 1px solid #ddd; padding: 10px; background-color: hsl(7, 56%, 91%);">Garden</div>
     </div>
  </div>


</div>
<?php
  include("footer.php");
  ?>
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