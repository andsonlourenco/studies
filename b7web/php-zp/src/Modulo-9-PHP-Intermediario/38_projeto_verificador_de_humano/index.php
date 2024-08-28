<?php 
  session_start();
  $n1 = rand(0, 10);
  $n2 = rand(0, 10);

  $_SESSION['v'] = $n1 + $n2;
?>

<h1>Verificador de Humanos</h1>
<form action="verificador.php" method="POST">
  <?php echo $n1; ?> + <?php echo $n2; ?> = 
  <input name="total" type="number">
  <input type="submit" value="Verificar">
</form>