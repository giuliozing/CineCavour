<?php

$conn = new mysqli('localhost', 'ultra', 'KSDmc7gmg5qG', 'my_ultra');
//apri una connessione
$nome = $_POST['nome'];
$cognome=$_POST['cognome'];
$classe=$_POST['classe'];
$sezione=$_POST['sezione'];
$mail=$_POST['mail'];
$data=$_POST['data'];
$nomesicuro = $conn->real_escape_string($nome);
$cognomesicuro = $conn->real_escape_string($cognome);
$mailsicuro = $conn->real_escape_string($mail);
$result1 = $conn -> query("SELECT posti FROM serate WHERE giorno=$data") or die($conn->error);
$row1 = $result1->fetch_array(MYSQLI_ASSOC);
$result2= $conn -> query("SELECT * FROM spettatori WHERE serata=$data AND mail = '$mailsicuro'");
$postimenouno = $row1['posti'] - 1;
if($result2 -> num_rows > 0) require "./giaiscritto.html";//gestisci il caso in cui la stessa mail sia già stata presentata
else {
	if($row1['posti']>0){
    $result3 = $conn -> query("INSERT INTO `spettatori`(`nome`, `cognome`, `classe`, `sezione`, `mail`, `serata`) VALUES ('$nomesicuro', '$cognomesicuro', $classe, '$sezione','$mailsicuro',$data)") or die($conn->error);
    $result4= $conn-> query("UPDATE serate SET posti = $postimenouno WHERE giorno = $data") or die($conn->error);
    require "./ricevuto.html";
    }
	else require "./postiesauriti.html";
    }

?>
