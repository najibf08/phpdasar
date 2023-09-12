<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Umur: <input type="text" name="umur">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="laki-laki">laki-laki
  <input type="radio" name="gender" value="perempuan">perempuan
  <br><br>
  Makanan Favorite
    <input type="checkbox" name="makanan[]" value="sate ayam"> sate ayam<br>
    <input type="checkbox" name="makanan[]" value="sempolan"> sempolan<br>
    <input type="checkbox" name="makanan[]" value="mie ayam"> mie ayam<br> 
    <br>
    <input type="submit" name="submit" value="Submit">   


</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Mengambil nilai dari input field 
    $name = $_POST['name']; 
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $makanan = $_POST['makanan'];
     
    // Validasi data 
    if (empty($name) && empty($umur)) { 
      echo "Nama dan umur kosong"; 
    } else { 
        echo "Nama saya $name, <br> Umur saya $umur tahun, <br> Saya seorang $gender, <br> Makanan favoritku";
        foreach ($makanan as $favorite) {
            echo " $favorite";
        }        
    } 
  } 
?>
</body>
</html>
