<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/Igno/view/css/style.css">
    <title>BLah</title>
</head>

<?php
if (isset($_POST['submit'])){
        $errors = [];
    if (!preg_match('/^[a-zA-Z]{2,100} $/', $_POST['name'])){
        $errors[] = "Vardas per ilgas";
    }


    $justPrice = $_POST['price'];
    $weight = $_POST['weight'];
    $weightPrice = 0;
    if ($weight >= 20){
        ($price = $justPrice + 30) && ($weightPrice = $weightPrice + 30);
    }

    $direction = $_POST['direction'];
    $inputHome = $_POST['inputHome'];
    $flightNumber = $_POST['flightNumber'];
    $totalPrice = $price*1.21;
    if (!preg_match('/^[\w\d]{0,100} $/',
        $lastName = $_POST['lastName'])){
        $errors[] = "Pavardė per ilga";
    } else {$lastName = $_POST['lastName'];}
    if (!preg_match('/^[\d]{11} $/',
        $idCode = $_POST['idCode'])){
        $errors[] = "Asmens kodą sudaro 11 skaitmenų";
    } else {$idCode = $_POST['idCode'];}

}
?>



<body>

<?php

$bagazas = [5,10,15,20,25,30,35,40,45,50];

$skrydzioNr = ['JB-255','JB-254','JB-256','JB-257','JB-258','JB-259'];

$iKurSkrenda = ['Vilnius','Kaunas','Klaipėda', 'Panevėžys', 'Šiauliai', 'Alytus'];

$IsKurSkrenda = ['Vilnius','Kaunas','Klaipėda', 'Panevėžys', 'Šiauliai', 'Alytus'];

?>

      <div class="container">
          <?php if($errors):?>

          <div class=errors">
            <ul>
                <?php foreach ($errors as $error):?>
                <li><?=$error;?></li>
            </ul>
              <?php endforeach;?>
          </div>
          <?php endif;?>
          <h2>Bilieto užsakymo forma</h2>
          <form method="post">
              <div class="form-group">
                  <label for="inputWight">Bagažo svoris</label>
                  <select name="weight" id ="" class="form-control" required>
                      <option selected disabled>--Pasirinkite--</option>
                      <?php foreach ($bagazas as $svoris):?>
                          <option value="<?=$svoris?>"><?=$svoris?></option>
                      <?php endforeach;?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="inputDirection">Pasirinkite skrydžio kryptį</label>
                  <select name="direction" id ="" class="form-control">
                      <option selected disabled>--Pasirinkite--</option>
                      <?php foreach ($iKurSkrenda as $kryptis):?>
                          <option value="<?=$kryptis?>"><?=$kryptis?></option>
                      <?php endforeach;?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="inputHome">Pasirnkite iš kur skrisite</label>
                  <select name="inputHome" id ="" class="form-control">
                      <option selected disabled>--Pasirinkite--</option>
                      <?php foreach ($IsKurSkrenda as $isKur):?>
                          <option value="<?=$isKur?>"><?=$isKur?></option>
                      <?php endforeach;?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="flightNumber">Pasirnkite skrydžio numerį</label>
                  <select name="flightNumber" id ="" class="form-control" required>
                      <option selected disabled>--Pasirinkite--</option>
                      <?php foreach ($skrydzioNr as $skrydis):?>
                          <option value="<?=$skrydis?>"><?=$skrydis?></option>
                      <?php endforeach;?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="inputID">Asmens kodas</label>
                  <input type="number" class="form-control" id="inputID" name="idCode">
              </div>
              <div class="form-group">
                  <label for="inputName">Vardas</label>
                  <input type="text" class="form-control" id="inputName" name="name">
              </div>
              <div class="form-group">
                  <label for="inputLastName">Pavardė</label>
                  <input type="text" class="form-control" id="inputLastName" name="lastName">
              </div>
              <div class="form-group">
                  <label for="inputComments">Pastabos:</label>
                  <input type="text" class="form-control" id="inputComments" name="comments">
              </div>
              <div class="form-group">
                  <label for="inputPrice">Skrydžio kaina</label>
                  <input type="number" class="form-control" id="inputPRice" name="price">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Užsakyti skrydį</button>
          </form>


          <div class="container ticketContainer">
              <div class="row ticket">
                  <div class="row ticketHead">
                      <h4>Tikrai nepadirbtas skrydžio bilietas</h4>
                  </div>
                  <div class="row ticketInfo">
                      <div class="col-8 mainInfo">
                          <div class="row directionsInfo">
                              <div class="flightNumber">Skrydžio numeris: <?=$flightNumber?></div>
                              <div class="col time"><?php echo "Bilieto uždakymo data: " . date("Y/m/d")?></div>
                              <div class="col fromTo"><p>IŠ<br>Į</p></div>
                              <div class="col directions"><?=$inputHome?><br><?=$direction?></div>
                          </div>
                          <div class="row timeInfo">
                              <div class="col departure">Išvyksta: 2020/02/20 15:20</div>
                              <div class="col arrival">Atvyksta: 2020/02/20 15:50</div>
                              <div class="col flightTime">Kelionės trukmė: 00.30</div>
                          </div>
                          <div class="row personalInfo">
                              <div class="col passangerName">Keleivio vardas: <?=$name?></div>
                              <div class="col passangerLastName">Keleivio pavardė: <?=$lastName?></div>
                              <div class="col passangerId">ID: <?=$idCode?></div>
                          </div>
                      </div>
                      <div class="col-4 priceInfo align-self-start">
                          <div class="row priceHead">Kaina ir moksečiai</div>
                          <div class="row pricing">
                              <div class="col priceTag">
                                  <p>Kelionės kaina: <?=$justPrice?> € <br>Bagažas: <?=$weightPrice?> €<br>PVM: 21%</p>
                              </div>
                              <div class="col priceAmount">
                                  <p><br><br></p>
                              </div>
                          </div>
                          <div class="row priceTotal">
                              Viso: <?=$totalPrice?>  €
                          </div>
                      </div>
                  </div>
              </div>
          </div>





      </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



