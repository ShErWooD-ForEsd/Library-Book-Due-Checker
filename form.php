<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>
<?php

include "functions.php";

//return date brought in and show in string & UNIX format
$return_date = $_GET['returnDate'];
$return_stamp = strtotime($return_date);
echo ($return_date . "\n" . $return_stamp . "<br>");

//due date brought in and show in string & UNIX format
$due_date = $_GET['dueDate'];
$due_stamp = strtotime($due_date);
echo ($due_date . "\n" . $due_stamp . "<br>");



    // if ($return_stamp < $due_stamp) {
    //     echo "Book on time";
    // }
    // if ($return_stamp > $due_stamp) {
    //     echo "Book is late";
    // } else if ($return_stamp == $due_stamp) {
    //     echo "Book is due today";}



?>