<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>
<?php

function write_copyright_notice()                                           //function that adds my name, plus the copyright symbol, and the current year
{
    $year = date('Y');
    echo '&copy; ' . $year . " " . "Elizabeth Sherwood";
}

if (isset($_GET['returnDate'])) {
    function run_date_form()                                                    //This function takes the information from the form and writes out the dates
    {
        $return_date = $_GET['returnDate'];                                     //This grabs the name from the form and the data entered for the return date
        $date1 = date_create($return_date);                                     //Converts the date into another date format
        $return_string = strtotime($return_date);                               //converts the date into a UNIX string

        $due_date = $_GET['dueDate'];                                           //Grabs the due date from the form submission
        $date2 = date_create($due_date);                                        //Converts the date into another date format
        $due_string = strtotime($due_date);                                     //converts the date into a UNIX string

        $interval = date_diff($date1, $date2);                                  //this takes the dates and lets us know how many days difference there is in the two dates

        if ($due_string > $return_string) {                                     //if loop. Here is says if the due date string is larger than the return date it is to:
            echo "RETURNED - " . $return_date . "<br>";                             //write out the return date in easy format for readers
            echo "DUE - " . $due_date . "<br>";                                     //write out the due date in easy to read format
            echo "<br><u>Book is due in: </u>";                                     //write out in how many days it is due
            print($interval->format('<u>%d days, %m months, %y years!</u>'));       //add the specific amount of days/months/years is left for it
        }
        if ($due_string < $return_string) {                                     //this if is same as above, but it focuses on if the book is overdue
            echo "RETURNED - " . $return_date . "<br>";
            echo "DUE - " . $due_date . "<br>";
            echo "<br><u>Book is overdue by: </u>";
            print($interval->format('<u>%d days, %m months, %y years!</u>'));
        }
        if ($date2 == $date1) {                                                 //this if is for if the due date & return date are the same
            echo "RETURNED - " . $return_date . "<br>";
            echo "DUE - " . $due_date . "<br>";
            echo "<br><u>Book is due today!</u>";                               //no print out for the interval here as it is due today.
        } else {                                                                //the else section is the catch all
        }
    }
}

?>