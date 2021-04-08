<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil BMI</title>
</head>

<body>
  <div class="container mt-5 mb-5 p-5" style="background: grey;">
    <h2>
      <p>Hasil Evaluasi BMI</p>
    </h2><br>
    <?php
    class BMI
    {
      public $nama;
      public $tinggi_badan;
      public $berat_badan;
      public $umur;
      public $jenis_kelamin;
    }

    function __construct($nama, $tinggi_badan, $berat_badan, $umur, $jenis_kelamin)
    {
      $this->nama = $nama;
      $this->tinggi_badan = $tinggi_badan;
      $this->berat_badan = $berat_badan;
      $this->umur = $umur;
      $this->jenis_kelamin = $jenis_kelamin;
    }

    $nama = $_POST['nama'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    echo "Nama : " . $nama . '<br/>';
    echo "Tinggi Badan : " . $tinggi_badan . '<br/>';
    echo "Berat Badan : " . $berat_badan . '<br/>';
    echo "Umur : " . $umur . '<br/>';
    echo "Jenis Kelamin : " . $jenis_kelamin . '<br/>';
    ?>

  </div>
</body>

</html>