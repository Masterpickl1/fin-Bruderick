<?php   
session_start();
require("courses.php");

    if(isset($_POST['table']) and strlen($_SESSION['username'])>0) {
        // Set Table
        if ($_POST['table'] == "courses") {
            $table = new Courses(
                $_POST['id'],
                $_POST['courseName'],
                $_POST['holePar1'],
                $_POST['holePar2'],
                $_POST['holePar3'],
                $_POST['holePar4'],
                $_POST['holePar5'],
                $_POST['holePar6'],
                $_POST['holePar7'],
                $_POST['holePar8'],
                $_POST['holePar9'],
                $_POST['holePar10'],
                $_POST['holePar11'],
                $_POST['holePar12'],
                $_POST['holePar13'],
                $_POST['holePar14'],
                $_POST['holePar15'],
                $_POST['holePar16'],
                $_POST['holePar17'],
                $_POST['holePar18']
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