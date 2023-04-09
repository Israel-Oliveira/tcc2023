<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/style/produto-style/style-produto.css" />
  <title>Lanche</title>
</head>

<body>
  <div class="titulo">
    <a href="./categoria.php">
      <img src="./upload/img/btnvoltar.png" /><img />
    </a>
    <header>
      <h1>Lanche</h1>
    </header>
    <p>R$ 28,90</p>
  </div>

  <div class="imagem">
    <img src="./upload/img/lanche2.png" /><img />
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
      provident, quasi adipisci sint magnam perferendis optio, enim, voluptate
      consectetur temporibus velit! Ducimus quia nemo, et ea excepturi
      voluptatem minus ipsa.
    </p>
  </div>

  <div class="centralizar">
    <div class="quantidade">
      <div class="subtrai"></div>
      <div class="valor">
        <label for="" id="valor">0</label>
      </div>
      <div class="adiciona"></div>
    </div>
  </div>

  <div class="incluir">
    <div class="adicionais">
      <h3>Que tal um adicional?</h3>
      <p>Escolha até 3 opções</p>
    </div>
  </div>

  <div class="incluir1">
    <div class="adicional1">
      <div class="adPart1">
        <img src="bacon.png" alt="" />
      </div>
      <div class="adPart2">
        <div class="addText">
          <p class="add">Adicional de Bacon</p>
          <p class="conta">R$ 3,50</p>
        </div>
        <p class="soma">+</p>
      </div>
    </div>

    <div class="adicional1">
      <div class="adPart1">
        <img src="./alface.png" alt="" />
      </div>
      <div class="adPart2">
        <div class="addText">
          <p class="add">Adicional de Bacon</p>
          <p class="conta">R$ 3,50</p>
        </div>
        <p class="soma">+</p>
      </div>
    </div>
  </div>

  <div class="carrinho">
    <div class="carrinho2">
      <p>Adicionar ao carrinho</p>
    </div>
  </div>

  <script src="./assets/js/produto/script-produto.js"></script>

<?php include './template/footer.php'; ?>