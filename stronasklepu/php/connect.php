<?php

  
$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$email = $_POST['email'];
	$numer_telefonu = $_POST['numer_telefonu'];
	$wiadomosc = $_POST['wiadomosc'];


	// Połączenie do bazy danych

	$conn = new mysqli('localhost','root','','sklep3b');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into formularz_kontaktowy(imie, nazwisko, email, numer_telefonu, wiadomosc) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $imie, $nazwisko, $email, $numer_telefonu, $wiadomosc);
		$stmt->execute();
		echo "Pomyślnie wysłano formularz";
		$stmt->close();
		$conn->close();
	}
  ?>