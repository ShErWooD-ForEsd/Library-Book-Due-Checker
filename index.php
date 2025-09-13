<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>
<?php
include "functions.php";
include "form.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book Due Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="align-middle text-center bg-secondary p-3 m-3" style="background-image: url('img/library.jpg');">
    <div class="badge text-bg-dark p-4 fs-1">
        <h1>Library Book Due Checker</h1>
    </div><br>
    <div class="badge text-bg-light p-5 mt-2 fs-3">
        <form action="form.php" method="Get">
            <label for="returnDate">Return Date:&nbsp;</label>
            <input type="date" id="returnDate" name="returnDate"><br><br>
            <lable for="dueDate">Due Date:&nbsp;</lable>
            <input type="date" id="dueDate" name="dueDate"><br><br><br>
            <input type="submit" value="Submit" class="btn btn-dark">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>