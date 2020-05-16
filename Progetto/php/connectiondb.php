<?php 

  //avviene la connessione con il database "my_activityplanner
  $conn = mysqli_connect("localhost","root","","my_activityplanner");

  //verifica se la connesione è andata a buon fine
  if(!$conn){
      //se la verifica dovesse andare a fallire, allora verrà restituito un errore 
      die("Connessione non avvenuta: " . mysqli_connect_error());	
  }
?>