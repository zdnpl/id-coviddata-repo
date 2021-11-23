<?php 
//api
$url = file_get_contents('https://api.kawalcorona.com/indonesia'); 
$data = json_decode($url, true);
//var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Covid Data.id</title>
  </head>
  <body style="background: #E0E3E2">
    <div class="container text-white" style="padding: 40px; background: #094C80; border-bottom-right-radius: 30px; border-bottom-left-radius: 30px;">
    <h1 class="fw-bold">COVID DATA - INDONESIA</h1>
  </div>
    <div class="container" style=" margin-top: 30px;">
      <div class="row mt-4">
        <!-- Positif -->
        <div class="col-md-3">
          <div class="card mb-4 shadow " style="background: #9D1F42; border-radius: 10px">
            <div class="card-body text-white">
              
              <h1 class="card-text text-center" style="font-size: 55px"><?= $data[0]['positif']; ?></h1>
              <p class="card-title text-center" style="font-size: 17px; margin-top: -10px">Positif</p>
            </div>
          </div>
        </div>
        <!-- Positif -->
        <!-- Dirawat -->
        <div class="col-md-3">
          <div class="card mb-4 shadow " style="background: #B97843; border-radius: 10px">
            <div class="card-body text-white">
              
              <h1 class="card-text text-center" style="font-size: 55px"><?= $data[0]['dirawat']; ?></h1>
              <p class="card-title text-center" style="font-size: 17px; margin-top: -10px">Dirawat</p>
            </div>
          </div>
        </div>
        <!-- Dirawat -->
        <!-- Sembuh -->
        <div class="col-md-3">
          <div class="card mb-4 shadow" style="background: #387878; border-radius: 10px">
            <div class="card-body text-white">
              
              <h1 class="card-text text-center" style="font-size: 55px"><?= $data[0]['sembuh']; ?></h1>
              <p class="card-title text-center" style="font-size: 17px; margin-top: -10px">Sembuh</p>
            </div>
          </div>
        </div>
        <!-- Sembuh -->
        <!-- Meninggal -->
        <div class="col-md-3">
          <div class="card mb-4 shadow " style="background: #595959; border-radius: 10px">
            <div class="card-body text-white">
              
              <h1 class="card-text text-center" style="font-size: 55px"><?= $data[0]['meninggal']; ?></h1>
              <p class="card-title text-center" style="font-size: 17px; margin-top: -10px">Meninggal</p>
            </div>
          </div>
        </div>
        <!-- Meninggal -->
        <!-- other -->
        <p class="text-center mt-2">~zdnpl | Sumber : <a href="https://api.kawalcorona.com/indonesia">https://api.kawalcorona.com/indonesia</a>.</p>
        <!-- other -->

        
        
        
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
