<?php 
  require "src/conexao-bd.php";
  require "src/modelo/Produto.php";
  require "src/Repositorio/ProdutoRepositorio.php";

  $produtoRepositorio = new ProdutoRepositorio($pdo);
  $produtoRepositorio->deletar($_GET['id']);