<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>

<?php
$return_date = $_GET['returnDate'];
$due_date = $_GET['dueDate'];
$returned = strtotime($return_date);
$due = strtotime($due_date);



?>