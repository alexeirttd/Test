<?php

require_once dirname(__DIR__) . '/logic/logic.php';
$employee = editEmployee();
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страница с сотрудниками</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div id="wrapper">
    <div class="container">
        <form class="form-margin" method="post" action="EditEmployee.php">
            <div class="mb-3">
                <label class="form-label">id</label>

                <input name="newId" type="number" class="form-control" placeholder="0" value="<?=$employee['id']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">name</label>
                <input name="newName" type="text" class="form-control" placeholder="Алексей" value="<?=$employee['name']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input name="newAge" type="number" class="form-control" placeholder="17" value="<?=$employee['age']?>">
            </div>

            <div class="mb-3">
                <label class="form-label">salary</label>
                <input name="newSalary" type="number" class="form-control" placeholder="200" value="<?=$employee['salary']?>">
            </div>


            <div class="text-center">
                <button name="saveEmployee" value="<?=$_GET['editEmployee']?>" class="btn btn-primary" type="submit">Сохранить изменения</button>

            </div>
        </form>
    </div>
</div>
</body>
</html>
