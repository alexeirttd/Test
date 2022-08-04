<?php
require_once dirname(__DIR__) . '/logic/logic.php';
addEmployee();
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страница с сотрудниками</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div id="wrapper">
    <div class="container">
        <form class="form-margin" method="post" action="AddEmployee.php">
            <div class="mb-3">
                <label class="form-label">id</label>
                <input name="id" type="number" class="form-control" placeholder="0">
            </div>
            <div class="mb-3">
                <label class="form-label">name</label>
                <input name="name" type="text" class="form-control" placeholder="Алексей">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input name="age" type="number" class="form-control" placeholder="17">
            </div>

            <div class="mb-3">
                <label class="form-label">salary</label>
                <input name="salary" type="number" class="form-control" placeholder="200">
            </div>


            <div class="text-center">
                    <button name="addEmployee" class="btn btn-primary" type="submit">Добавить сотрудника</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
