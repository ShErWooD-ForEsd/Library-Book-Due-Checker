<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>
<?php

function run_date_form()
{
    $return_date = $_GET['returnDate'];
    $date1 = date_create($return_date);
    $return_string = strtotime($return_date);

    $due_date = $_GET['dueDate'];
    $date2 = date_create($due_date);
    $due_string = strtotime($due_date);
    $interval = date_diff($date1, $date2);

    if ($due_string > $return_string) {
        echo "RETURNED - " . $return_date . "<br>";
        echo "DUE - " . $due_date . "<br>";
        echo "<br><u>Book is due in: </u>";
        print($interval->format('<u>%d days!</u>'));
    }
    if ($due_string < $return_string) {
        echo "RETURNED - " . $return_date . "<br>";
        echo "DUE - " . $due_date . "<br>";
        echo "<br><u>Book is overdue by: </u>";
        print($interval->format('<u>%d days!</u>'));
    }
    if ($date2 == $date1) {
        echo "RETURNED - " . $return_date . "<br>";
        echo "DUE - " . $due_date . "<br>";
        echo "<br><u>Book is due today!</u>";
    } else {
    }
}

function write_copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year . " " . "Elizabeth Sherwood";
}
?>