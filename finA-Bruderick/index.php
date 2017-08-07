<?php
session_start();
require("persons.php");

    if(isset($_POST['table']) and strlen($_SESSION['username'])>0) {
        // Set Table
        if ($_POST['table'] == "persons") {
            $table = new Persons(
                $_POST['id'],
                $_POST['name'],
                $_POST['email'],
                $_POST['mobile'],
                $_POST['pic']
            );
        }

        // Select Action
            if($_POST['action'] == "displayList"  ) $table->displayListScreen();
        elseif($_POST['action'] == "displayCreate") $table->displayCreateScreen();
        elseif($_POST['action'] == "createRecord" ) $table->createRecord();
        elseif($_POST['action'] == "displayRead"  ) $table->displayReadScreen();
        elseif($_POST['action'] == "displayUpdate") $table->displayUpdateScreen();
        elseif($_POST['action'] == "updateRecord" ) $table->updateRecord();
        elseif($_POST['action'] == "displayDelete") $table->displayDeleteScreen();
        elseif($_POST['action'] == "deleteRecord" ) $table->deleteRecord();
    } else {
		echo "<div class='form-actions'>You are required to log in to use TeeTyme:
                                <a class='btn btn-success' href='https://csis.svsu.edu/~djbruder/cis355/fin/'>Login</a></div>";
	}
?>