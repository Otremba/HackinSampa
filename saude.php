<?php
session_start();
$conexao = mysqli_connect('localhost', 'root', 'bcd127', 'hackinsampa');
 ?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
  <body>
    <?php
      $sql="SELECT * FROM tbl_unidade_saude";
            $select = mysqli_query($conexao,$sql);
            // echo ($sql);
        while ($rsVP = mysqli_fetch_array($select))

        // $_SESSION['img'] = $rsVP['img'];

        {

       ?>
    <a href="orgao_saude.php?id=<?php echo($rsVP['ID']) ?>">
      <div class="orgao">
        <div>
          <img src="<?php echo($rsVP['img'])?>" height="70px" width="70px">
        </div>
        <div class="texto">
            <p><?php echo($rsVP['ESTABELECI'])?></p>

            <div class="">
              <?php echo($rsVP['ENDERECO']) ?>
            </div>
        </div>
      </div>
    </a>
    <?php

      }
     ?>
  </body>
</html>
