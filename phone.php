<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>
<?php
$json_data = file_get_contents('co.json');
$result = json_decode($json_data, true);
print_r ($result);
?>

<?php 
foreach($result)
?>

<div class="w3-container w3-center">
<div class="container">
  <br>
  <h3>สเปคมือถือ</h3>
  <div class="row">
    <div class="col">
  <img src="https://media-cdn.bnn.in.th/266447/OPPO-Smartphone-A78-Glowing-Purple-5G-1-square_medium.jpg" alt="Avatar" style width="277.6" height="277.6">
  <h5>OPPO A 78 5G</h5>
  <h5>8,499 บาท</h5>
  <a href="oppo78.php"class="w3-btn w3-green">Accept</a>
    </div>
    <div class="col">
  <img src="https://media-cdn.bnn.in.th/270911/OPPO-Smartphone-Reno8TSunrise-Gold-1-square_medium.jpg" alt="Avatar"  style width="277.6" height="277.6">
  <h5>OPPO Reno8 T 5G</h5>
  <h5>13,990 บาท</h5>
  <a href="oppoReno.php"class="w3-btn w3-green">Accept</a>
    </div>

    <div class="col">
  <img src="https://media-cdn.bnn.in.th/269611/Samsung-Smartphone-Galaxy-S23-Ultra-Phantom-Black-5G-1-square_medium.jpg" alt="Avatar" style width="277.6" height="277.6">
  <h5>Samsung Galaxy 23 Ultra
  </h5>
  <h5> 43,900 บาท</h5>
  <a href="samsum.php"class="w3-btn w3-green">Accept</a>
    </div>
  </div>
</div>

</div>

<div class="w3-container w3-center">

</div>





<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>
