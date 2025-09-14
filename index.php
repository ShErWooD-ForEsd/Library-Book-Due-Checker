<!-----------------------
Library Book Due Checker
Name: Elizabeth Sherwood
Due: Monday, 9/15/2025
------------------------>
<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book Due Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="align-middle text-center bg-dark p-3 m-3">
    <?php include "nav.php" ?>
    <div style="background-image: url('img/library.jpg');">
        <div class="text-bg-dark p-4 container-fluid">
            <h1>Library Book Due Checker</h1>
        </div><br>

        <div class="text-bg-light p-5 mt-2 fs-3">
            <?php include "form.php" ?>
            <h2 class="badge text-bg-secondary p-5 mt-2 fs-3"><?php run_date_form() ?></h2>
        </div><br>
    </div>
    <footer class="fixed-bottom text-light m-1 p-1">
        <?php write_copyright_notice(); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>