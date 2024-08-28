<?php 
session_start();
if(!empty($_POST['total'])){
  $n = intval($_POST['total']);
  if($_SESSION['v'] == $n){
    echo "HUMANO!";
  }else {
    echo "FAKE!";
  }
}else {
  header("Location: index.php");
}
?>