<?php 
	
	session_start();
	//richiamo il file cnnectiondb.php per la connessione con il db
    require_once('connectiondb.php');
    
    //verifica se il bottone "login" sia stato effettivamente premuto
   	if(isset($_POST['login'])){
      //verificata la condizione si passa alla connessione con il db
      
      /*acquisisce tramite metodo POST (non in chiaro) le informazioni inserite 
      dall'utente all'interno del form di login*/
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      
	
      /*seleziona dal database tutte le tuple della tabella users aventi i campi di
      username e password corrispondenti a quanto inserito dall'utente*/
      $query = "select * from users where username = '$username'";
	  
      //mette il risultato della query precedente all'interno della variabile "result"
      $result = mysqli_query($conn, $query);
	  
      //conta le righe restituite da result
      $num = mysqli_num_rows($result);
      
      //verifica se le righe restituite da result sono pari ad 1
      if($num == 1){
		//in caso affermativo
      	$row = mysqli_fetch_assoc($result);
		//verifica che la password inserita sia ccrretta
		if(password_verify($password,$row['password'])){
          //in caso afferamtivo si viene riportati nella main page del sito web
          header('location: ../html/mainPage.html');	
		}else{
			//in caso contrario si restituisce un messaggio di errore
        	echo 'Errore';
        }
      }else{
      	//in caso contrario si rimane all'interno della pagina di login
        header('location: ../../index.html');
      }
    }
?>
