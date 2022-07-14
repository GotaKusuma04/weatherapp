<?php
$api_url = "https://api.openweathermap.org/data/2.5/weather?q=makassar&appid=f2943a92c229aee776b7559a5fd4cdcd";

$weater_data = json_decode(file_get_contents($api_url),true);


// if(array_key_exists('submit', $_GET)){
//     // mengecek jika input kosong
//     if(!$_GET['city']){$error = "Inputan Anda Kososng";}
// }
// if ($_GET['city']){
//     $api_url = file_get_contents( "https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=d904cd6e0cecab2b12eea1f24a380420");

//     $weater_data = json_decode(file_get_contents($api_url),true);
// }
// ?>

<link rel="stylesheet" href="style.css">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('./images/background2.jpg');">
      
  <!-- <div class="row mt-2">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <input type="text" method="GET" class="form-control input-keyword" placeholder="Enter City's or Country's Name" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div> -->
    <div class="isi" >
    <div class="container" >
        
        <div class="container" style="text-align: center;">
            <h1 class="display-4"><?php print_r($weater_data['name']);?></h1>
            <p class="lead">Cuaca : <?php print_r($weater_data['weather'][0]['description']);?>.</p>
            <h4 class="card-title">Tempratur : <?php print_r($weater_data['main']['temp']- 273.15);?> °С </h4>
            <p class="card-text">Tempratur Min : <?php print_r($weater_data['main']['temp_min']- 273.15);?> °С</p>
            <p class="card-text">Tempratur Max : <?php print_r($weater_data['main']['temp_max']- 273.15);?> °С</p>
            <p class="card-text">kecepatan Udara : <style></style><?php print_r($weater_data['wind']['speed']);?></p>
            <p class="card-text">Awan : <style></style><?php print_r($weater_data['clouds']['all']);?> %</p>
        </div>
        
        </div>
    <!-- Content here -->
    
    </div>
    </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

