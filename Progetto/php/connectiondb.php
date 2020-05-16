<?php 
  
  //effettua la connessione al db
  $conn = mysqli_connect("localhost","root","","my_activityplanner");

  //verifica che la connessione non sia stata effettuata
  if(!$conn){
  	  //in casi affermativo viene restituito un messaggio di errore
      die("Connection error: " . mysqli_connect_error());	
  }
?>
