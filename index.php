<?php
  include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./src/js/script.js" defer></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" defer></script>
    <title>carrossel</title>
</head>
<body>
  <?php
   $query_slides = "SELECT id, imagens FROM slides WHERE situacao = 1";
   $result_slides = $conn->prepare($query_slides);
   $result_slides->execute();
   //$quantidade_slides=$result_slides->rowCount();
   //var_dump($quantidade_slides);
  ?>
    <div class="container">
        <div class="conteudo">
            <div id="carouselExampleCaptions" class="carousel slide w-100 h-100" data-bs-ride="false">
                <div class="carousel-indicators ">
                  <?php
                    $controle=0;
                    
                    while($controle <$result_slides->rowCount()){
                      $ativo ="";
                      if($controle == 0){
                        $ativo="active";
                      }
                      echo "<button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='$controle' class='$ativo' aria-current='true' aria-label='Slide $controle'></button>";
                      $controle++;
                    }
                  ?>
                  
                 <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
                </div>
                <div class="carousel-inner w-100 h-100">
                  <?php
                  $controle = 0;
                    while($row_slide = $result_slides->fetch(PDO::FETCH_ASSOC)){
                      extract($row_slide);
                      $ativo="";
                      if($controle == 0){
                        $ativo = "active";
                      }
                      //var_dump($row_slide);
                      
                      echo "<div class='carousel-item $ativo w-100 h-100'>";
                      echo" <img src='./src/image/$id/$imagens' class='d-block w-100 h-100 ' alt='...'>";
                      echo"         <div class='carousel-caption d-none d-md-block'>";
                      echo"            <h5>First slide label</h5>";
                      echo"          <p>Some representative placeholder content for the first slide.</p>";
                      echo"        </div>";
                      echo"      </div>";
                      $controle++;
                    }
                  ?>
                  <!--<div class="carousel-item active w-100 h-100">
                    <img src="./src/image/1/armadura01.png" class="d-block w-100 h-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./src/image/2/armadura02.png" class="d-block w-100 h-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./src/image/3/armadura03.png" class="d-block w-100 h-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>-->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="cadastro">
            <div class="conteudo01"></div>
            <div class="conteudo02"></div>
        </div>
    </div>    
</body>
</html>