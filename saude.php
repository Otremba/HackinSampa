<?php
session_start();

$conexao = mysqli_connect('localhost', 'root', 'bcd127', 'hackinsampa');
 ?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="logo">
      <img src="img/logo.png" alt="">
    </div>
    <?php
    $sql = "select * from tbl_unidade_saude";

    $select = mysqli_query($conexao,$sql);

    while($rsVP = mysqli_fetch_array($select))
    {
     ?>
    <div class="post">
      <div class="imagem-post">
        <img src="<?php echo ($rsVP['img']);?>" alt="">

      </div>
      <div class="titulo-post">
        <?php echo ($rsVP['ESTABELECI']);?>
      </div>
      <div class="titulo-post1">
        <?php echo ($rsVP['ENDERECO']);?>
      </div>
      <div class="avalia">
        8.5
      </div>
    </div>
    <?php
      }
     ?>
    <div class="post">
      <div class="imagem-post">
        <img src="img/sp.jpg" alt="">

      </div>
      <div class="titulo-post">
        UBS - Vila prudente
      </div>
      <div class="titulo-post1">
        500m - subprefeitura mooca
      </div>
      <div class="avalia">
        8.5
      </div>
    </div>
  </body>
</html>
