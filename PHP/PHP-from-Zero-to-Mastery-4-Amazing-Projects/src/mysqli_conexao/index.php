<?php

  $conn = new mysqli("172.22.0.2", "root", "root", "cursophp");

  //Para verificar erros na conexão
  // if($conn->connect_errno){
  //   echo "Erro na conexão! <br>";
  // };

  // $sql = "SELECT * FROM pessoas";

  // $result =  $conn->query($sql);

  // print_r($result);


  // $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
  // $q = "DROP TABLE teste";

  // $q = "INSERT INTO pessoas (nome, idade) VALUES ('nome de teste', '20')";

  // $conn->query($q);

  // $q = "SELECT * FROM pessoas";

  // $result = $conn->query($q);
  // $conn->close();

  // $pessoa = $result->fetch_assoc();

  // $pessoas = $result->fetch_all();

  // print_r($pessoas);

  /** Inserindo dados com prepared **/

  // $nome = "nome de teste 5";
  // $idade = 31;

  // $stmt = $conn->prepare("INSERT INTO pessoas (nome, idade) VALUES (?, ?)");

  // $stmt->bind_param("ss", $nome, $idade);

  // $stmt->execute();


  // $idade = 2;

  // $stmt = $conn->prepare("SELECT * FROM pessoas WHERE idade > ?");
  // $stmt->bind_param("i", $idade);
  // $stmt->execute();
  // $result = $stmt->get_result();
  // $data = $result->fetch_all();

  // print_r($data);


  // $idade = 30;

  // $stmt = $conn->prepare("SELECT * FROM pessoas WHERE idade = ?");

  // $stmt->bind_param("i", $idade);

  // $stmt->execute();
  // $result = $stmt->get_result();
  // $item = $result->fetch_row();

  // print_r($idade);
  // $conn->close();




  // $id = 30;

  // $stmt = $conn->prepare("UPDATE pessoas SET nome = ?, descricao = ? WHERE id = ?");

  // $nome = "sofa";
  // $descricao = "lorem ipsum dolor sit amum dolor sit amet";
  // $stmt->bind_param("ssi", $nome, $descricao, $id);
  // $stmt->execute();

  // if($stmt->error){
  //   echo "Error: ". $stmt->error;
  // };




  // $id = 11;
  // $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
  // $stmt->bind_param("s", $id);
  // $stmt->execute();
  // $conn->close();