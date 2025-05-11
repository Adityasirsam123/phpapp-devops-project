<?php
require_once 'db.php';

if (isset($_POST['addtask'])) {
    $task_add = $_POST['textfield'];
    if (!empty($task_add)) {
        $task_add_query = "INSERT INTO task_table (task_name) VALUES  ('$task_add')";
        $add_query = $dbcon->query($task_add_query);
    }

    // Make sure this is called before any output
    header('Location: index.php');
    exit; // Stop script execution here
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> eb154fd (added k8s manifest)
