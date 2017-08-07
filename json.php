<?php
session_start();
  include "databaseJSON.php";
  
  if (strlen($_SESSION['username'])>0) {
		if(isset($_GET["id"]) > 0){
			echo json_encode(
				Database::prepare(
				'SELECT id, name, email, mobile FROM `tt_persons` where id=' . $_GET["id"],
				array()
				)->fetchAll(PDO::FETCH_ASSOC)
			);
		} else {
			echo json_encode(
				Database::prepare(
				'SELECT id, name, email, mobile FROM `tt_persons`',
				array()
			)->fetchAll(PDO::FETCH_ASSOC)
		);}
	} else {	  
		echo "<div class='form-actions'>You are required to log in to use TeeTyme:
                                <a class='btn btn-success' href='https://csis.svsu.edu/~djbruder/cis355/fin/'>Login</a></div>";
	} 
  
?>
