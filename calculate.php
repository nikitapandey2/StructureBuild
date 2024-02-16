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
      .calculator {
        background-color: #fff;

        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      form {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
      }
      .form-group {
        margin-bottom: 15px;
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="number"],
      input[type="text"] {
        width: 100%;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
      }
      table {
        border-collapse: collapse;
        width: 50%;
        margin: auto;
      }
      th,
      td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
      }
      th {
        background-color: #f2f2f2;
      }
      .chart-container {
        width: 40%;
        margin: auto;
      }
      .cal {
        display: flex;
        flex-wrap: wrap;
      }
      @media only screen and (max-width: 500px) {
        .cal {
          display: block;
        }
        .chart-container {
          width: 80%;
          margin: auto;
        }

      }
      .flex{
        display:flex;
      }
      .modal {
        display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 1);
    z-index: 1;
  }

  .modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  
    width: 100%;
    text-align: center;
  }

  

  #contactForm {
    display: flex;
    flex-direction: column;
  }

  #contactForm label,
  #contactForm input,
  #contactForm button {
    margin:10px 0;
  }

    </style>
  </head>

  <?php
include("header.php");
?>

    <main>
      <article>
        <section class="about" id="about">
          <div class="container">
            <!-- <p class="section-subtitle">Our Cost</p> -->

            <h2 class="h2 section-title">Building Material Cost Calculator</h2>
          </div>
          <div class="calculator">
            <form id="calculator-form">
              <div class="form-group">
                <label for="state">State:</label>
                <select
                  id="state"
                  name="state"
                  onchange="populateCities()"
                  required
                >
                  <option value="" selected disabled>Select State</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                </select>
              </div>
              <div class="form-group">
                <label for="city">City:</label>
                <select id="city" name="city" required>
                  <option value="" selected disabled>Select City</option>
                  <!-- Cities will be populated dynamically based on the selected state -->
                </select>
              </div>

              <div class="form-group">
                <label for="quantity">Area(in sq.ft)</label>
                <input type="number" id="quantity" name="quantity" required />
              </div>

              <!-- <div class="form-group">
                <label for="unit-price">Unit Price ($):</label>
                <input
                  type="number"
                  id="unit-price"
                  name="unit-price"
                  step="0.01"
                  required
                />
              </div> -->
              <div class="form-group">
                <!-- <label for="total-cost">Total Cost:</label> -->
                <!-- Result will be displayed below this element -->
                <p id="result" style="font-weight: bold"></p>
              </div>
              <button class="btn" type="button" onclick="validateAndSubmit()">
        Calculate
    </button>
            </form>
          </div>
        </section>
        <!-- Add this modal at the end of your HTML body -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <!-- <span class="close" onclick="closeModal()">&times;</span> -->
    <h2>Contact Information</h2>
    <form id="contactForm" onsubmit="return submitContactForm()" action="sheet.php" method="POST">
    <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="mobile">Mobile Number:</label>
      <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>

      <button class="btn" type="submit" onclick="submitContactForm(event)">Submit</button>
    </form>
  </div>
</div>

        <section class="cal">
          <div class="chart-container">
            <canvas id="myPieChart" width="400" height="400"></canvas>
          </div>
          <div class="chart-container">
            <canvas id="myChart"></canvas>
          </div>
        </section>

        <section>
          <h2 class="h2 section-title">Cost by Resource Allocation</h2>

          <table id="resourceTable">
            <tr>
              <th>Resource</th>
              <th>Allocation (%)</th>
              <th>Result</th>
            </tr>
            <tr>
              <td>Resource 1</td>
              <td>
                <input
                  type="number"
                  id="resource1"
                  onchange="calculateCost()"
                  value="0"
                />
              </td>
              <td><span id="result1">0</span></td>
            </tr>
            <tr>
              <td>Resource 2</td>
              <td>
                <input
                  type="number"
                  id="resource2"
                  onchange="calculateCost()"
                  value="0"
                />/Bag
              </td>
              <td><span id="result2">0</span></td>
            </tr>
            <!-- Add more rows for other resources as needed -->
            <tr>
              <td><strong>Total Cost:</strong></td>
              <td></td>
              <td><span id="totalCost">0</span></td>
            </tr>
          </table>
        </section>
        <section class="service" id="service">
          <div class="container">
            <p class="section-subtitle">Our Services</p>

            <h2 class="h2 section-title">Our Main Focus</h2>

            <ul class="service-list">
              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <img src="ArchitecturalDesign.png" alt="Service icon" />
                  </div>

                  <h3 class="h3 card-title">
                    <a target="_blank" href="architectural.php">Architectural Design</a>
                  </h3>

                  <p class="card-text">
                    Architectural design at its core is the delicate balance of
                    artistry and engineering. We create structures where every
                    detail harmonizes with a purposeful vision.
                  </p>

                  <a target="_blank" href="architectural.php" class="card-link">
                    <span>Get Started</span>

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <img
                      src="int.jpg"
                      alt="Service icon"
                      style="width: 250px"
                    />
                  </div>

                  <h3 class="h3 card-title">
                    <a target="_blank" href="interiordesign.php">Interior Design</a>
                  </h3>

                  <p class="card-text">
                    Interior design is the silent storyteller of your space. We
                    script narratives with color, texture, all while ensuring
                    your surroundings serve you functionally and aesthetically.
                  </p>

                  <a target="_blank" href="interiordesign.php" class="card-link">
                    <span>Get Started</span>

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <img
                      src="VastuShastra.png"
                      alt="Service icon"
                      style="width: 270px"
                    />
                  </div>

                  <h3 class="h3 card-title">
                    <a target="_blank" href="vastushastra.php">Vastu Shastra</a>
                  </h3>

                  <p class="card-text">
                    Vastu Shastra, is our compass for balanced living. Its
                    principles echo through design and construction, creating
                    spaces that speak the language of harmony.
                  </p>

                  <a target="_blank" href="vastushastra.php" class="card-link">
                    <span>Get Started</span>

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <img src="ConstructionStructure.png" alt="Service icon" />
                  </div>

                  <h3 class="h3 card-title">
                    <a target="_blank" href="construction.php">Construction Structure</a>
                  </h3>

                  <p class="card-text">
                    Construction structure refers to the framework, materials,
                    and assembly used to build stable, safe, and enduring
                    architectural creations.
                  </p>

                  <a target="_blank" href="construction.php" class="card-link">
                    <span>Get Started</span>

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <img
                      src="solar.jpg"
                      alt="Service icon"
                      style="width: 170px"
                    />
                  </div>

                  <h3 class="h3 card-title">
                    <a target="_blank" href="solar.php">Solar Management</a>
                  </h3>

                  <p class="card-text">
                    "Unlocking solar potential: our mastery in sunlight
                    utilization, energy harvest, and strategic solar power
                    generation sets the stage for efficient usage.
                  </p>

                  <a target="_blank" href="solar.php" class="card-link">
                    <span>Get Started</span>

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <img
                      src="prop.jpg"
                      alt="Service icon"
                      style="width: 240px"
                    />
                  </div>

                  <h3 class="h3 card-title">
                    <a target="_blank" href="property.php">Property Management</a>
                  </h3>

                  <p class="card-text">
                    Property management navigates maintenance intricacies,
                    leasing dynamics, tenant relationships, and financial wisdom
                    for lasting value.
                  </p>

                  <a target="_blank" href="property.php" class="card-link">
                    <span>Get Started</span>

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <section class="cta">
          <div class="container">
            <div class="cta-card">
              <div class="card-content">
                <h2 class="h2 card-title">Looking for a dream home?</h2>

                <p class="card-text">
                  We can help you realize your dream of a new home
                </p>
              </div>

              <button class="btn cta-btn">
                <span>Explore Properties</span>

                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

<script>
 function openModal() {
    document.getElementById("myModal").style.display = "flex";
  }

  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }

  function validateAndSubmit() {
    var form = document.getElementById("calculator-form");

    // Check if the form is valid
    if (form.checkValidity()) {
        // If valid, open the modal
        openModal();
    } else {
        // If not valid, trigger the default HTML form validation
        form.reportValidity();
    }
}

function submitContactForm(event) {
  event.preventDefault();
    // Validate the contact form here before proceeding
    let mobile = document.getElementById("mobile").value;
    let name = document.getElementById("name").value;

    // Example: Check if mobile and email are not empty
    if (mobile.trim() === "" || name.trim() === "") {
        alert("Please provide both name and mobile number.");
        return;
    }

    closeModal();

    // After submitting, show charts after a delay
    setTimeout(function () {
        calculateTotal();
    }, 3000); // 10 seconds delay
}
document.querySelector("#calculator-form").addEventListener("submit", function (event) {
    // Prevent the default form submission
    event.preventDefault();
    
    // Handle form submission with custom logic
    validateAndSubmit();
});
// Event listener for the main form


    document.querySelector("#contactForm button").addEventListener("click", submitContactForm);
  function calculateTotal() {
    const quantity = parseFloat(document.getElementById("quantity").value);
    // const unitPrice = parseFloat(document.getElementById("unit-price").value);
    const totalCost = quantity * 1600;
    let resultElement = document.getElementById("result");
    resultElement.textContent = "Total Cost: ₹" + totalCost;
    displayBarChart(totalCost);
    displayPieChart(totalCost);
  }
  function displayBarChart() {
    let ctx = document.getElementById("myChart").getContext("2d");
    let myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: [
          "Floor and Tiling",
          "Wire Fitting",
          "Other Expenses",
          "Labor Charges",
          "Material Cost",
        ],
        datasets: [
          {
            label: "Expenditure",
            data: [10, 20, 15, 25, 30],
            backgroundColor: [
              "rgba(255, 99, 132, 0.5)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(255, 206, 86, 0.5)",
              "rgba(75, 192, 192, 0.5)",
              "rgba(153, 102, 255, 0.5)",
            ],
            borderColor: "#fff", // White color border for bars
            borderWidth: 1,
          },
        ],
      },
      options: {
        indexAxis: "y",
        responsive: true,
        scales: {
          x: {
            beginAtZero: true,
          },
        },
      },
    });
  }
  function displayPieChart() {
    let ctx = document.getElementById("myPieChart").getContext("2d");
    let myPieChart = new Chart(ctx, {
      type: "pie",
      data: {
        labels: [
          "Floor and Tiling (10%)",
          "Wire Fitting (20%)",
          "Other Expenses (15%)",
          "Labor Charges (25%)",
          "Material Cost (30%)",
        ],
        datasets: [
          {
            label: "Expenditure",
            data: [10, 20, 15, 25, 30],
            backgroundColor: [
              "rgba(255, 99, 132, 0.5)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(255, 206, 86, 0.5)",
              "rgba(75, 192, 192, 0.5)",
              "rgba(153, 102, 255, 0.5)",
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
            ],
            borderColor: [
              "#fff", // White color border between segments
              "#fff",
              "#fff",
              "#fff",
              "#fff",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        tooltips: {
          callbacks: {
            label: function (tooltipItem, data) {
              let dataset = data.datasets[tooltipItem.datasetIndex];
              let total = dataset.data.reduce((acc, curr) => acc + curr);
              let currentValue = dataset.data[tooltipItem.index];
              let percentage = ((currentValue / total) * 100).toFixed(2) + "%";
              return data.labels[tooltipItem.index] + ": " + percentage;
            },
          },
        },
      },
    });
  }
  function calculateCost() {
    let resource1 = parseInt(document.getElementById("resource1").value);
    let resource2 = parseInt(document.getElementById("resource2").value);
    // Add more variables for other resources if needed

    // Calculate result for each resource (resource * 100)
    let result1 = resource1 * 100;
    let result2 = resource2 * 100;
    // Add calculations for other resources as needed

    // Display results for each resource
    document.getElementById("result1").textContent = result1;
    document.getElementById("result2").textContent = result2;
    // Display total cost (sum of results)
    let totalCost = result1 + result2; // Add results of all resources
    // Add results of other resources as needed

    document.getElementById("totalCost").textContent = totalCost;
  }
  function populateCities() {
    let stateSelect = document.getElementById("state");
    let citySelect = document.getElementById("city");

    let selectedState = stateSelect.value;
    citySelect.innerHTML = "";

    let cities = [];

    switch (selectedState) {
      case "Andhra Pradesh":
        cities = [
          "Adilabad",
          "Anantapur",
          "Chittoor",
          "Kakinada",
          "Guntur",
          "Hyderabad",
          "Karimnagar",
          "Khammam",
          "Krishna",
          "Kurnool",
          "Mahbubnagar",
          "Medak",
          "Nalgonda",
          "Nizamabad",
          "Ongole",
          "Hyderabad",
          "Srikakulam",
          "Nellore",
          "Visakhapatnam",
          "Vizianagaram",
          "Warangal",
          "Eluru",
          "Kadapa",
        ];
        break;
      case "Arunachal Pradesh":
        cities = [
          "Anjaw",
          "Changlang",
          "East Siang",
          "Kurung Kumey",
          "Lohit",
          "Lower Dibang Valley",
          "Lower Subansiri",
          "Papum Pare",
          "Tawang",
          "Tirap",
          "Dibang Valley",
          "Upper Siang",
          "Upper Subansiri",
          "West Kameng",
          "West Siang",
        ];
        break;
      case "Assam":
        cities = [
          "Baksa",
          "Barpeta",
          "Bongaigaon",
          "Cachar",
          "Chirang",
          "Darrang",
          "Dhemaji",
          "Dima Hasao",
          "Dhubri",
          "Dibrugarh",
          "Goalpara",
          "Golaghat",
          "Hailakandi",
          "Jorhat",
          "Kamrup",
          "Kamrup Metropolitan",
          "Karbi Anglong",
          "Karimganj",
          "Kokrajhar",
          "Lakhimpur",
          "Marigaon",
          "Nagaon",
          "Nalbari",
          "Sibsagar",
          "Sonitpur",
          "Tinsukia",
          "Udalguri",
        ];
        break;
      case "Bihar":
        cities = [
          "Araria",
          "Arwal",
          "Aurangabad",
          "Banka",
          "Begusarai",
          "Bhagalpur",
          "Bhojpur",
          "Buxar",
          "Darbhanga",
          "East Champaran",
          "Gaya",
          "Gopalganj",
          "Jamui",
          "Jehanabad",
          "Kaimur",
          "Katihar",
          "Khagaria",
          "Kishanganj",
          "Lakhisarai",
          "Madhepura",
          "Madhubani",
          "Munger",
          "Muzaffarpur",
          "Nalanda",
          "Nawada",
          "Patna",
          "Purnia",
          "Rohtas",
          "Saharsa",
          "Samastipur",
          "Saran",
          "Sheikhpura",
          "Sheohar",
          "Sitamarhi",
          "Siwan",
          "Supaul",
          "Vaishali",
          "West Champaran",
          "Chandigarh",
        ];
        break;
      case "Chhattisgarh":
        cities = [
          "Bastar",
          "Bijapur",
          "Bilaspur",
          "Dantewada",
          "Dhamtari",
          "Durg",
          "Jashpur",
          "Janjgir-Champa",
          "Korba",
          "Koriya",
          "Kanker",
          "Kabirdham (Kawardha)",
          "Mahasamund",
          "Narayanpur",
          "Raigarh",
          "Rajnandgaon",
          "Raipur",
          "Surguja",
        ];
        break;
      case "Goa":
        cities = ["North Goa", "South Goa"];
        break;
      case "Gujrat":
        cities = [
          "Ahmedabad",
          "Amreli district",
          "Anand",
          "Banaskantha",
          "Bharuch",
          "Bhavnagar",
          "Dahod",
          "The Dangs",
          "Gandhinagar",
          "Jamnagar",
          "Junagadh",
          "Kutch",
          "Kheda",
          "Mehsana",
          "Narmada",
          "Navsari",
          "Patan",
          "Panchmahal",
          "Porbandar",
          "Rajkot",
          "Sabarkantha",
          "Surendranagar",
          "Surat",
          "Vyara",
          "Vadodara",
          "Valsad",
        ];
        break;
      case "Haryana":
        cities = [
          "Ambala",
          "Bhiwani",
          "Faridabad",
          "Fatehabad",
          "Gurgaon",
          "Hissar",
          "Jhajjar",
          "Jind",
          "Karnal",
          "Kaithal",
          "Kurukshetra",
          "Mahendragarh",
          "Mewat",
          "Palwal",
          "Panchkula",
          "Panipat",
          "Rewari",
          "Rohtak",
          "Sirsa",
          "Sonipat",
          "Yamuna Nagar",
        ];
        break;
      case "Himachal Pradesh":
        cities = [
          "Bilaspur",
          "Chamba",
          "Hamirpur",
          "Kangra",
          "Kinnaur",
          "Kullu",
          "Lahaul and Spiti",
          "Mandi",
          "Shimla",
          "Sirmaur",
          "Solan",
          "Una",
        ];
        break;
      case "Jammu and Kashmir":
        cities = [
          "Anantnag",
          "Badgam",
          "Bandipora",
          "Baramulla",
          "Doda",
          "Ganderbal",
          "Jammu",
          "Kargil",
          "Kathua",
          "Kishtwar",
          "Kupwara",
          "Kulgam",
          "Leh",
          "Poonch",
          "Pulwama",
          "Rajauri",
          "Ramban",
          "Reasi",
          "Samba",
          "Shopian",
          "Srinagar",
          "Udhampur",
        ];
        break;
      case "Jharkhand":
        cities = [
          "Bokaro",
          "Chatra",
          "Deoghar",
          "Dhanbad",
          "Dumka",
          "East Singhbhum",
          "Garhwa",
          "Giridih",
          "Godda",
          "Gumla",
          "Hazaribag",
          "Jamtara",
          "Khunti",
          "Koderma",
          "Latehar",
          "Lohardaga",
          "Pakur",
          "Palamu",
          "Ramgarh",
          "Ranchi",
          "Sahibganj",
          "Seraikela Kharsawan",
          "Simdega",
          "West Singhbhum",
        ];
        break;
      case "Karnataka":
        cities = [
          "Bagalkot",
          "Bangalore Rural",
          "Bangalore Urban",
          "Belgaum",
          "Bellary",
          "Bidar",
          "Bijapur",
          "Chamarajnagar",
          "Chikkamagaluru",
          "Chikkaballapur",
          "Chitradurga",
          "Davanagere",
          "Dharwad",
          "Dakshina Kannada",
          "Gadag",
          "Gulbarga",
          "Hassan",
          "Haveri district",
          "Kodagu",
          "Kolar",
          "Koppal",
          "Mandya",
          "Mysore",
          "Raichur",
          "Shimoga",
          "Tumkur",
          "Udupi",
          "Uttara Kannada",
          "Ramanagara",
          "Yadgir",
        ];
        break;
      case "Kerala":
        cities = [
          "Alappuzha",
          "Ernakulam",
          "Idukki",
          "Kannur",
          "Kasaragod",
          "Kollam",
          "Kottayam",
          "Kozhikode",
          "Malappuram",
          "Palakkad",
          "Pathanamthitta",
          "Thrissur",
          "Thiruvananthapuram",
          "Wayanad",
        ];
        break;
      case "Madhya Pradesh":
        cities = [
          "Alirajpur",
          "Anuppur",
          "Ashok Nagar",
          "Balaghat",
          "Barwani",
          "Betul",
          "Bhind",
          "Bhopal",
          "Burhanpur",
          "Chhatarpur",
          "Chhindwara",
          "Damoh",
          "Datia",
          "Dewas",
          "Dhar",
          "Dindori",
          "Guna",
          "Gwalior",
          "Harda",
          "Hoshangabad",
          "Indore",
          "Jabalpur",
          "Jhabua",
          "Katni",
          "Khandwa (East Nimar)",
          "Khargone (West Nimar)",
          "Mandla",
          "Mandsaur",
          "Morena",
          "Narsinghpur",
          "Neemuch",
          "Panna",
          "Rewa",
          "Rajgarh",
          "Ratlam",
          "Raisen",
          "Sagar",
          "Satna",
          "Sehore",
          "Seoni",
          "Shahdol",
          "Shajapur",
          "Sheopur",
          "Shivpuri",
          "Sidhi",
          "Singrauli",
          "Tikamgarh",
          "Ujjain",
          "Umaria",
          "Vidisha",
        ];
        break;
      case "Maharashtra":
        cities = [
          "Ahmednagar",
          "Akola",
          "Amravati",
          "Aurangabad",
          "Bhandara",
          "Beed",
          "Buldhana",
          "Chandrapur",
          "Dhule",
          "Gadchiroli",
          "Gondia",
          "Hingoli",
          "Jalgaon",
          "Jalna",
          "Kolhapur",
          "Latur",
          "Mumbai City",
          "Mumbai suburban",
          "Nandurbar",
          "Nanded",
          "Nagpur",
          "Nashik",
          "Osmanabad",
          "Parbhani",
          "Pune",
          "Raigad",
          "Ratnagiri",
          "Sindhudurg",
          "Sangli",
          "Solapur",
          "Satara",
          "Thane",
          "Wardha",
          "Washim",
          "Yavatmal",
        ];
        break;
      case "Manipur":
        cities = [
          "Bishnupur",
          "Churachandpur",
          "Chandel",
          "Imphal East",
          "Senapati",
          "Tamenglong",
          "Thoubal",
          "Ukhrul",
          "Imphal West",
        ];
        break;
      case "Meghalaya":
        cities = [
          "East Garo Hills",
          "East Khasi Hills",
          "Jaintia Hills",
          "Ri Bhoi",
          "South Garo Hills",
          "West Garo Hills",
          "West Khasi Hills",
        ];
        break;
      case "Mizoram":
        cities = [
          "Aizawl",
          "Champhai",
          "Kolasib",
          "Lawngtlai",
          "Lunglei",
          "Mamit",
          "Saiha",
          "Serchhip",
        ];
        break;
      case "Nagaland":
        cities = [
          "Dimapur",
          "Kohima",
          "Mokokchung",
          "Mon",
          "Phek",
          "Tuensang",
          "Wokha",
          "Zunheboto",
        ];
        break;
      case "Orissa":
        cities = [
          "Angul",
          "Boudh (Bauda)",
          "Bhadrak",
          "Balangir",
          "Bargarh (Baragarh)",
          "Balasore",
          "Cuttack",
          "Debagarh (Deogarh)",
          "Dhenkanal",
          "Ganjam",
          "Gajapati",
          "Jharsuguda",
          "Jajpur",
          "Jagatsinghpur",
          "Khordha",
          "Kendujhar (Keonjhar)",
          "Kalahandi",
          "Kandhamal",
          "Koraput",
          "Kendrapara",
          "Malkangiri",
          "Mayurbhanj",
          "Nabarangpur",
          "Nuapada",
          "Nayagarh",
          "Puri",
          "Rayagada",
          "Sambalpur",
          "Subarnapur (Sonepur)",
          "Sundergarh",
        ];
        break;
      case "Punjab":
        cities = [
          "Amritsar",
          "Barnala",
          "Bathinda",
          "Firozpur",
          "Faridkot",
          "Fatehgarh Sahib",
          "Fazilka",
          "Gurdaspur",
          "Hoshiarpur",
          "Jalandhar",
          "Kapurthala",
          "Ludhiana",
          "Mansa",
          "Moga",
          "Sri Muktsar Sahib",
          "Pathankot",
          "Patiala",
          "Rupnagar",
          "Ajitgarh (Mohali)",
          "Sangrur",
          "Nawanshahr",
          "Tarn Taran",
        ];
        break;
      case "Rajasthan":
        cities = [
          "Ajmer",
          "Alwar",
          "Bikaner",
          "Barmer",
          "Banswara",
          "Bharatpur",
          "Baran",
          "Bundi",
          "Bhilwara",
          "Churu",
          "Chittorgarh",
          "Dausa",
          "Dholpur",
          "Dungapur",
          "Ganganagar",
          "Hanumangarh",
          "Jhunjhunu",
          "Jalore",
          "Jodhpur",
          "Jaipur",
          "Jaisalmer",
          "Jhalawar",
          "Karauli",
          "Kota",
          "Nagaur",
          "Pali",
          "Pratapgarh",
          "Rajsamand",
          "Sikar",
          "Sawai Madhopur",
          "Sirohi",
          "Tonk",
          "Udaipur",
        ];
        break;
      case "Sikkim":
        cities = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
        break;
      case "Tamil Nadu":
        cities = [
          "Ariyalur",
          "Chennai",
          "Coimbatore",
          "Cuddalore",
          "Dharmapuri",
          "Dindigul",
          "Erode",
          "Kanchipuram",
          "Kanyakumari",
          "Karur",
          "Madurai",
          "Nagapattinam",
          "Nilgiris",
          "Namakkal",
          "Perambalur",
          "Pudukkottai",
          "Ramanathapuram",
          "Salem",
          "Sivaganga",
          "Tirupur",
          "Tiruchirappalli",
          "Theni",
          "Tirunelveli",
          "Thanjavur",
          "Thoothukudi",
          "Tiruvallur",
          "Tiruvarur",
          "Tiruvannamalai",
          "Vellore",
          "Viluppuram",
          "Virudhunagar",
        ];
        break;
      case "Tripura":
        cities = [
          "Dhalai",
          "North Tripura",
          "South Tripura",
          "Khowai",
          "West Tripura",
        ];
        break;
      case "Uttar Pradesh":
        cities = [
          "Agra",
          "Allahabad",
          "Aligarh",
          "Ambedkar Nagar",
          "Auraiya",
          "Azamgarh",
          "Barabanki",
          "Budaun",
          "Bagpat",
          "Bahraich",
          "Bijnor",
          "Ballia",
          "Banda",
          "Balrampur",
          "Bareilly",
          "Basti",
          "Bulandshahr",
          "Chandauli",
          "Chhatrapati Shahuji Maharaj Nagar",
          "Chitrakoot",
          "Deoria",
          "Etah",
          "Kanshi Ram Nagar",
          "Etawah",
          "Firozabad",
          "Farrukhabad",
          "Fatehpur",
          "Faizabad",
          "Gautam Buddh Nagar",
          "Gonda",
          "Ghazipur",
          "Gorakhpur",
          "Ghaziabad",
          "Hamirpur",
          "Hardoi",
          "Mahamaya Nagar",
          "Jhansi",
          "Jalaun",
          "Jyotiba Phule Nagar",
          "Jaunpur district",
          "Ramabai Nagar (Kanpur Dehat)",
          "Kannauj",
          "Kanpur",
          "Kaushambi",
          "Kushinagar",
          "Lalitpur",
          "Lakhimpur Kheri",
          "Lucknow",
          "Mau",
          "Meerut",
          "Maharajganj",
          "Mahoba",
          "Mirzapur",
          "Moradabad",
          "Mainpuri",
          "Mathura",
          "Muzaffarnagar",
          "Panchsheel Nagar district (Hapur)",
          "Pilibhit",
          "Shamli",
          "Pratapgarh",
          "Rampur",
          "Raebareli",
          "Saharanpur",
          "Sitapur",
          "Shahjahanpur",
          "Sant Kabir Nagar",
          "Siddharthnagar",
          "Sonbhadra",
          "Sant Ravidas Nagar",
          "Sultanpur",
          "Shravasti",
          "Unnao",
          "Varanasi",
        ];
        break;
      case "Uttarakhand":
        cities = [
          "Almora",
          "Bageshwar",
          "Chamoli",
          "Champawat",
          "Dehradun",
          "Haridwar",
          "Nainital",
          "Pauri Garhwal",
          "Pithoragarh",
          "Rudraprayag",
          "Tehri Garhwal",
          "Udham Singh Nagar",
          "Uttarkashi",
        ];
        break;
      case "West Bengal":
        cities = [
          "Birbhum",
          "Bankura",
          "Bardhaman",
          "Darjeeling",
          "Dakshin Dinajpur",
          "Hooghly",
          "Howrah",
          "Jalpaiguri",
          "Cooch Behar",
          "Kolkata",
          "Maldah",
          "Paschim Medinipur",
          "Purba Medinipur",
          "Murshidabad",
          "Nadia",
          "North 24 Parganas",
          "South 24 Parganas",
          "Purulia",
          "Uttar Dinajpur",
        ];
        break;
      default:
        cities = ["Select State First"];
        break;
    }

    populateOptions(citySelect, cities);
  }

  function populateOptions(selectElement, optionsArray) {
    for (let i = 0; i < optionsArray.length; i++) {
      let option = document.createElement("option");
      option.text = optionsArray[i];
      option.value = optionsArray[i];
      selectElement.appendChild(option);
    }
  }
</script>
