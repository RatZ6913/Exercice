<?php

require_once __DIR__ . './bdd.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (!empty($_POST['add-tasks'])) {
    if (!empty($_POST['task'])) {
      $textTask = $_POST['task'];
      $addTasks->execute();
    }
  }

  if(!empty($_POST['edit-task'])){
    
  }


}
