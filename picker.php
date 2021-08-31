<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Choose city</title>
  <link rel="stylesheet" href="css/picker.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />


</head>

<body>


  <!--navbar -->
  <?php include "components/navbar.html" ?>

  <!--content  -->

  <div class="picker-section">

    <h2>Choose a continent : </h2>

    <select id="id_continent" onchange="countryChange(this);" multiple>
      <option value="North America">North America</option>
      <option value="South America">South America</option>
      <option value="Asia">Asia</option>
      <option value="Europe">Europe</option>
    </select>
    <div class="input-group">
      <form action="" method="post">
      <select id="country" name="country" onchange="countryShow(this);">
        <option value="0">Select continent first</option>
      </select>
      <input id="id_button" type="submit" name="submit"value="Search" />
      </form>
    </div>
  
    
 <?php

  $rowNumber = 0;
 
  if(isset($_POST['submit'])){
    if(!empty($_POST['country'])) {
        $selected = $_POST['country'];
        echo "<br><br><h2>You have chosen: </h2>" . "<h2>" .$selected."</h2><br>";
   $filename = "files/".$selected.".csv";

  if (($fp = fopen($filename, "r")) !== FALSE) 
  {
    while (($row = fgetcsv($fp)) !== FALSE) 
    {
    
      echo "<div style='display: flex; margin-top:20px; margin-bottom:20px;'><table style='width:1000px; border: 1px solid black; padding:10px; border-radius: 15px;'>\n\n";
        $colNumber = count($row);

        echo "<p> </p>";

        $rowNumber++;
 
        for ($x=0; $x < $colNumber; $x=$x+2) 
        {
          echo "<tr style='text-align: left;'>";

          echo "<td style='text-align: left; width:100px;'>".$row[$x]. "</td>";

          echo "<td style='text-align: left;'>".$row[$x+1]. "</td>";

          echo "</tr>\n";

        }

        echo "</table></div>";        
    }
    $wynik = $rowNumber * strlen($selected);
    echo "Ilość liter w nazwie kraju pomnożona przez ilość dostępnych miejsc: " .$wynik;

 
    fclose($fp);
}

}
}
?>

 
</div>


  <div class="picker-section">
  </div>


  <!--footer-->
  <?php include "components/footer.html" ?>


  <script src="picker.js"></script>

</body>

</html>