<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <body>
    <form action="latihan3.php" method="get">
      <div class="mb-3">
        <label for="InputAngka">Masukkan Angka</label>
        <input type="number" class="form-control" id="exampleInputNumber" aria-describedby="emailHelp" name="angkapertama">
      </div>
      <label for="InputSuhu">Pilih Satuan Suhu</label>
      <select class="form-select" name= "suhu">
        <option selected>Select...</option>
        <option value="1">Kelvin</option>
        <option value="2">Fahrenheit</option>
        <option value="3">Reamur</option>
      </select>
      <br>
      <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
  </body>
</html>