<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menghitung BMI (Body Mass Index) </title>
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
    <h1 class="title">Body Mass Index
      <div class="close"></div>
    </h1>
    <form action="<?= base_url('index.php/bmi/result') ?>" method="GET">
      <div class="input-container">
        <input type="text" id="" required="required" name="nama" />
        <label for="">Nama</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="" required="required" name="tinggi" />
        <label for="">Tinggi Badan</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="" required="required" name="berat" />
        <label for="">Berat Badan</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit" value="Y"><span>RESULT</span></button>
      </div>
    </form>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?= base_url(); ?>assets/index.js"></script>
</body>
</html>