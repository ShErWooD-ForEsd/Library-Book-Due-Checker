<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>

<!-- This document creates the form that is used on index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Do I need to attach CSS other links on these form and nav pages as well? -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="text-bg-light p-5 mt-2 fs-3">
        <!-- get method used to get the information submitted by the user and sets how the form is used-->
        <form action="" method="Get">
            <label for="returnDate">Return Date:&nbsp;</label>
            <input type="date" id="returnDate" name="returnDate"><br><br>
            <lable for="dueDate">Due Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</lable>
            <input type="date" id="dueDate" name="dueDate"><br><br><br>
            <input type="submit" value="Submit" class="btn btn-secondary btn-outline-light">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>