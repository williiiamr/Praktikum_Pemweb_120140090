<?php
  function toRoman($num) {
  $integer = [ 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 ];
  $roman = [ 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I' ];

  $result = '';

  for ($i = 0; $i < count($integer); $i++) {
    while ($integer[$i] <= $num) {
      $result .= $roman[$i];
      $num -= $integer[$i];
    }
  }

  return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6</title>
</head>
<body>
    <style>
          body {
              margin: 0;
              padding: 0;
              max-width: 2000px;
              background-color: rgb(147, 177, 167);
          }
          form {
              max-width: 200px;
          }
          #btn{
              height: 30px;
              width: 70px;
              border-radius: 20px;
              background-color: black;
              color: white;
              font-family: Helvetica;
              margin-top: 20px;
          }
          #btn:hover {
            background-color: white;
            color: black;
            cursor: pointer;
          }
          h1,label{
              font-family: Helvetica ;
          }
        
    </style>
    <center>
      <h1>120140090 - William Rusli - Praktikum Pemweb D</h1>
      <form method="get">
        <label id= "title" for="roman">Masukan angka yang ingin diubah</label>
        <input type="number" name="roman">
        <button id="btn" type="submit">submit</button>
      </form>
    
    <div class="hasil">
      <?php 
      if (isset($_GET['roman'])){
        $result = $_GET['roman'];
        echo "<h1>" . toRoman($result) ."</h1>";
      }
      ?>
    </div>
    </center>
</body>
</html>