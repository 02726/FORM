<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Nama Pemilik Sawit</title>
    <link href="bootstrap.min.css" rel="stylesheet" >
		  <style>
body {
	background-color: #20B2AA; 
}
}
  </style
  </head>
  </head>
  <body>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Perkebunan Sawit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Daftar Nama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pengisian Data</a>
        </li>
        <li class="nav-item ">
         <a class="nav-link" href="#">Penghapusan Data</a>
        </li>
           </div>
  </div>
</nav>
    <h1>Daftar Nama Pemilik Sawit</h1>
<?php

$servername = "localhost";
$username = "Raja";
$password = "sim2282";
$dbname = "sawit";

$mysqli = new mysqli($servername, $username, $password, $dbname);
# check connection
if ($mysqli->connect_errno) {
echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();
}
?>
<div class="container">
<table class="table align-middle">
  <thead class="table-dark">
	<tr class="align-middle">
      <th scope="col">KodePe</th>
      <th scope="col">Nama Pemilik</th>
	  <th scope="col">Nomor HP</th>
      <th scope="col">Alamat Provinsi</th>
	  <th scope="col">Alamat Kabupaten</th>
      <th scope="col">Luas Lahan</th>
      <th scope="col">Jenis Benih</th>
	  <th scope="col">Jarak Tanam</th>
	  <th scope="col">Harga</th>
      <th scope="col">Penyakit</th>
	  <th scope="col">Pupuk</th>
    </tr>
  </thead>
  <tbody>
<?php
$con=mysqli_connect("Localhost","Raja","sim2282","sawit");
//Check connection
if(mysqli_connect_errno())
{
echo"Failed to connect to MySQL:".mysqli_connect_error();
}

$result=mysqli_query($con,"SELECT*FROM `pemilik`");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['KodePe'] . "</td>";
echo "<td>" . $row['Nama Pemilik'] . "</td>";
echo "<td>" . $row['Nomor HP'] . "</td>";
echo "<td>" . $row['Alamat Provinsi'] . "</td>";
echo "<td>" . $row['Alamat Kabupaten'] . "</td>";
echo "<td>" . $row['Luas Lahan'] . " ha </td>";
echo "<td>" . $row['Jenis Benih'] . "</td>";
echo "<td>" . $row['Jarak Tanam'] . "</td>";
echo "<td>" . $row['Harga'] . "</td>";
echo "<td>" . $row['Penyakit'] . "</td>";
echo "<td>" . $row['Pupuk'] . "</td>";
echo "</tr>";
}
?>
  </tbody>
</table>
</div>

    <script src="bootstrap.bundle.min.js" ></script>
  </body>
</html>