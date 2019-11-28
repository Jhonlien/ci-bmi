<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hasil / Result Menghitung BMI (Body Mass Index) </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/style.css">
</head>
<body>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <div class="toggle"></div>
    <h1 class="title" style="color: #ccc">Result</h1>
    <h4>Hallo, <?= $nama ?> </h4>
    <h4>Tinggi : <?= $tinggi ?> , Berat: <?= $berat ?></h4> 
    <h4>Hasil Kesimpulan BMI anda Adalah :</h4>
    <h1 class="title"><?= $hasil ?></h1>
    <div class="button-container">
        <a href="<?= base_url('index.php/bmi/')?>"><button><span>RESULT</span></button></a>
      </div>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?= base_url(); ?>assets/index.js"></script>
</body>
</html>