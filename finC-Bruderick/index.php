<?php
session_start();
require("rounds.php");
    if(isset($_POST['table']) and strlen($_SESSION['username'])>0) {
        // Set Table
        if ($_POST['table'] == "rounds") {
            $table = new Rounds(
                $_POST['id'],
                $_POST['userID'],
                $_POST['courseID'],
                $_POST['seqNum'],
                $_POST['hole1'],
                $_POST['hole2'],
                $_POST['hole3'],
                $_POST['hole4'],
                $_POST['hole5'],
                $_POST['hole6'],
                $_POST['hole7'],
                $_POST['hole8'],
                $_POST['hole9'],
                $_POST['hole10'],
                $_POST['hole11'],
                $_POST['hole12'],
                $_POST['hole13'],
                $_POST['hole14'],
                $_POST['hole15'],
                $_POST['hole16'],
                $_POST['hole17'],
                $_POST['hole18']
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