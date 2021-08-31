<html>

<head>
  <meta charset="utf-8">
  <title>About Us</title>
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
</head>

<body>

<?php include "components/navbar.html" ?>

<?php
$countryyErr = $cityErr = $addressErr =$continenttErr = $descriptionErr = "";
$countryy = $city = $address = $continentt = $description = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["countryy"])) {
    $countryyErr = "Country is required";
  } else {
    $countryy = test_input($_POST["countryy"]);
    // sprawdzenie czy pole posiada tylko litery 
    if (!preg_match("/^[a-zA-Z-' ]*$/",$countryy)) {
      $countryyErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }
    
  if (empty($_POST["description"])) {
    $descriptionErr = "Description is required";
  } else {
    $description = test_input($_POST["description"]);
  }

  if (empty($_POST["continentt"])) {
    $continenttErr = "Continent is required";
  } else {
    $continentt = test_input($_POST["continentt"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="newAdd"> 
<form method="post" class="formAdd" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="radio" name="continentt" class="formAdd-radio"<?php if (isset($continentt) && $continentt=="Asia") echo "checked";?> value="Asia">Asia
  <input type="radio" name="continentt" class="formAdd-radio"<?php if (isset($continentt) && $continentt=="Africa") echo "checked";?> value="Africa">Africa
  <input type="radio" name="continentt" class="formAdd-radio"<?php if (isset($continentt) && $continentt=="Australia") echo "checked";?> value="Australia">Australia  
  <input type="radio" name="continentt" class="formAdd-radio"<?php if (isset($continentt) && $continentt=="Europe") echo "checked";?> value="Europe">Europe
  <input type="radio" name="continentt" class="formAdd-radio"<?php if (isset($continentt) && $continentt=="North America") echo "checked";?> value="North America">North America
  <input type="radio" name="continentt" class="formAdd-radio"<?php if (isset($continentt) && $continentt=="South America") echo "checked";?> value="South America">South America 
  <span class="error"> <?php echo $continenttErr;?></span>
  <br><br>

  <input type="text" name="countryy" placeholder="Country..." value="<?php echo $countryy;?>">
  <span class="error"> <?php echo $countryyErr;?></span>
  <br><br>
  <input type="text" name="city" placeholder="City..." value="<?php echo $city;?>">
  <span class="error"> <?php echo $cityErr;?></span>
  <br><br>
  <input type="text" name="address" placeholder="Address..." value="<?php echo $address;?>">
  <span class="error"><?php echo $addressErr;?></span>
  <br><br>
  <textarea name="description" placeholder="Description..." rows="5" cols="40"><?php echo $description;?></textarea>
  <span class="error"><?php echo $descriptionErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Send">

</form>


<?php

if($continentt!=null && $countryy!=null && $city!=null && $address!=null && $description!=null){

$string = 'Continent: '.$continentt.' Country: '.$countryy.' City: '.$city.' Address: '.$address.' Description: '.$description.' ' ;

$before = file_get_contents('files/baza.csv');
$new = $before.PHP_EOL.$string;

if(file_put_contents('files/baza.csv',$new) !==false){
  echo "<h2>Thank you for your support in developing!</h2>";
  echo $string; 
} else {
  echo "<h2>Something went wrong, please try again</h2>";
}

}
?>
</div>


<?php include "components/footer.html" ?> 

</body>

</html>