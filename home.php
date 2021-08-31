<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="Weronika Warwas" />
  <meta name="description" content="Programowanie aplikacji internetowych" />
  <title>World Trip</title>
  <link rel="stylesheet" href="css/style.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />


</head>

<body>


  <!--navbar -->

  <?php include "components/navbar.html" ?>

  <!--content    -->

  <div class="hero-container">
    <h1>YOUR PERFECT TRIP</h1>
    <p>Let's build better trips together!</p>
    <div class="hero-btns">
      <button id="startBtn" class="hero-btn-outline">
        START
      </button>
    </div>
  </div>

  <!--**************************************<-->

  <div class="cards-team">
    <h1 style="text-align:center">Where will be your next travel destination ?</h1>
    <div class="cards-row">

      <div class="cards-column">
        <div class="cards-card">
          <img src="img/paris1.jpg" alt="Name" id="paris" style="width:100%">
          <div class="cards-container">
            <h2>Paris</h2>
          </div>
        </div>
      </div>

      <div class="cards-column">
        <div class="cards-card">
          <img src="img/london2.jpg" alt="Name" style="width:100%">
          <div class="cards-container">
            <h2>London</h2>
          </div>
        </div>
      </div>

      <div class="cards-column">
        <div class="cards-card">
          <img src="img/newyork2.jpg" alt="Name" style="width:100%">
          <div class="cards-container">
            <h2>New york</h2>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--footer-->

  <?php include "components/footer.html" ?>
 

  <script src="home.js"></script>
</body>

</html>