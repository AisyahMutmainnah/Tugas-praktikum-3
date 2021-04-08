<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewsport" content="width=device-width,initial-scale=1.0">
  <title>Form BMI</title>
  <style type="text/css">
    body {
      margin: 50px 0px;
      padding: 0px;
      text-align: center;
      align: center;
    }
  </style>
</head>

<body>
  <form method="POST" action="halamanbmi.php">
    <div class="text-center"> <br><br><br><br><br>
      <h2 class="mb-5">Form Isian Indeks Massa Tubuh (BMI)</h2>
    </div>
    Nama : <input type="text" name="nama"><br><br>
    Tinggi Badan : <input type="number" name="tinggi_badan"><br><br>
    Berat Badan : <input type="number" name="berat_badan"><br><br>
    Umur : <input type="number" name="umur"><br><br>
    Jenis kelamin : <input type="radio" id="male" name="gender" value="male">
    <label for="male">Laki-laki</label>
    <input type="radio" id="female" name="gender" value="female" checked="checked">
    <label for="female">Perempuan</label><br><br>
    <input type="submit" name="submit">
  </form>
</body>

</html>