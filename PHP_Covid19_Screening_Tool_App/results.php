<?php 

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$age = $_POST["age"];
$travel = $_POST['travel'];
$temp = $_POST['temperature'];

$results_id = $firstName . $lastName . $age;
	
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title> Covid-19 Quickie</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- external css -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Indie+Flower&family=Patrick+Hand&family=Source+Sans+Pro&family=Zilla+Slab&display=swap" rel="stylesheet">
  <!-- favicon -->
  <link rel='icon' href='favicon.ico' type='image/x-icon'/ >

</head>
<body>
  
<a id="link" href="./index.php"> <button class="btn btn-info">Back to Home</button></a>

<div class="overall">
    <div class="container">
      <div class="app-container">
        <div class="app-head-container">
          <h1 id="title">[Summary of results]</h1>
        </div>

        <div class="app-body-container">

          <div class="row">
            <h4 class="col-md-5  col-sm-12 text-md-right text-sm-center"> Results ID: </h4>
            <p class="col-md-7 col-sm-10 text-md-left results"><?php echo sha1($results_id) ?></p>
          </div>

          <div class="row">
            <h4 class="col-md-5  col-sm-12 text-md-right text-sm-center"> Patient Name: </h4>
            <p class="col-md-7 col-sm-10 text-md-left results"><?php echo $firstName ?></p>
          </div>

          <div class="row">
            <h4 class="col-md-5  col-sm-12 text-md-right text-sm-center"> Patient Last Name: </h4>
            <p class="col-md-7 col-sm-10 text-md-left results"><?php echo $lastName ?></p>
          </div>  

          <div class="row">
            <h4 class="col-md-5 col-sm-12 text-md-right text-sm-center"> Patient Age: </h4>
            <p class="col-md-7 col-sm-10 text-md-left results"><?php echo $age ?></p>
          </div> 

          <div class="row">
            <h4 class="col-md-5 col-sm-12 text-md-right text-sm-center"> Travelled outside the country: </h4>
            <p class="col-md-7 col-sm-10 text-md-left results"><?php echo $travel ?></p>
          </div> 

          <div class="row">
            <h4 class="col-md-5 col-sm-12 text-md-right text-sm-center"> Temperature: </h4>
            <p class="col-md-7 col-sm-10 text-md-left results"><?php if($temp == "above") { echo "Above 37.5 &#8451;"; } else { echo "Below 37.5 &#8451;";} ?></p>
          </div>   
        
        </div>

        
        
      </div>
    </div>

  </div>

  <img src="./assets/images/doctors.png" class="doctor">  

<div class="faqs">
  <div class="container main-container">
    <h2 class="faqstitle">COVID-19 FAQS</h2>
    <div class="group">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
                1. WHAT ARE CORONAVIRUSES?
              </button>
            </h3>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <p>Coronaviruses are a large family of viruses causing a range of illnesses, from the common cold to more serious infections such as those caused by Middle East Respiratory Syndrome-related Coronavirus (MERS-CoV) and Severe Acute Respiratory Syndrome-related Coronavirus (SARS-CoV). Coronavirus can also cause a variety of diseases in farm animals and domesticated pets.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo">
                2. WHAT IS THE SOURCE OF THE COVID-19 VIRUS?
              </button>
            </h3>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Animals are the most likely source of the COVID-19. It is possible that the COVID-19 virus originated from animals before it infected humans. However, the specific source of COVID-19 virus is yet to be confirmed.</p>

              <p>To protect yourself: avoid direct contact with animals and surfaces in contact with animals; practice food safety measures at all times; handle raw meat, milk or animal organs with care to avoid contamination of uncooked foods; avoid consuming raw or undercooked animal products.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThirteen">
            <h3 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                3. IS COVID-19 FATAL?
              </button>
            </h3>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>COVID-19 could be fatal, but this happens rarely. According to WHO, 82% of infected patients will have mild presentations, 15% will have severe manifestations, and only 3% will be critical. As mentioned before, older people, people with compromised immune systems, and people with pre-existing medical conditions, such as diabetes and heart disease, are more prone to fall severely ill with the virus. Around 2% of people infected with the disease have died.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourth">
                4. IS THERE A TREATMENT AND VACCINE FOR COVID-19?
              </button>
            </h3>
          </div>
          <div id="collapseFourth" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Not yet. As of now, there is no specific treatment for or vaccine against COVID-19. However, many of the symptoms can be treated based on the patient’s clinical conditions. Supportive care for infected persons is highly effective. Most of those infected have recovered with only supportive care.</p>

              <p>Vaccines and specific drug treatments are currently being developed and are tested through clinical trials. WHO and DOH are coordinating with those who are developing the vaccines and medicines to determine possible availability of these resources.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFifth">
                5. WHAT CAN I DO TO PREVENT THE SPREAD OF COVID-19?
              </button>
            </h3>
          </div>
          <div id="collapseFifth" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>DOH advises the public to practice protective measures. It is still the best way to protect oneself against COVID-19.</p>

              <ol>
                <li>
                  Practice frequent and proper handwashing - wash hands often with soap and water for at least 20 seconds. Use an alcohol-based hand sanitizer if soap and water are not available.
                </li>
                <li>
                  Practice proper cough etiquette.
                  <ul>
                    <li>
                      Cover mouth and nose using tissue or sleeves/bend of the elbow when coughing or sneezing.
                    </li>
                    <li>
                      Move away from people when coughing.
                    </li>
                    <li>
                      Do not spit.
                    </li>
                    <li>
                      Throw away used tissues properly.
                    </li>
                    <li>
                      Always wash your hands after sneezing or coughing.
                    </li>
                    <li>
                      Use alcohol/sanitizer.
                    </li>
                  </ul>
                </li>
                <li>
                  Maintain distance of at least one meter away from individual/s experiencing respiratory symptoms.
                </li>
                <li>
                  Avoid unprotected contact with farm or wild animals (alive or dead), animal markets, and products that come from animals (such as uncooked meat).
                </li>
                <li>
                  Ensure that food is well-cooked.
                </li>
              </ol>

            </div>
          </div>
        </div> 
        <div class="emergencyhotline">
          <h2 class="title2">Emergency Hotline Numbers</h2>

          <p>
            Emergency hotlines 02-894-COVID (02-894-26843) and 1555 for people who suspect they are infected with COVID-19
          </p>

          <p>
            The DOH said the public can ask questions about the disease caused by the novel coronavirus or request assistance if they are experiencing symptoms
          </p>
        </div>      
      </div>  

    </div>
  </div>
</div>



<footer class="footer1">
  <p class="copy">Copyright &copy; Developed by = [Vince De Honor, Arwyne De Guzman, Kyle Brendon Chan]</p>
</footer>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- external js -->
<script src="./assets/js/script.js"></script>
</body>
</html>
