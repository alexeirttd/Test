<?php
require_once dirname(__DIR__) . '/logic/logic.php';
addCases();
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страница с добавлением дела</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div id="wrapper">
    <div class="container">
        <form class="form-margin" method="post" action="AddCases.php">
            <div class="mb-3">
                <label class="form-label">title</label>
                <input name="title" type="text" class="form-control" placeholder="Какое-то дело">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input name="description" type="text" class="form-control" placeholder="Описание дела">
            </div>
            <div class="mb-3">
                <label class="form-label">Приоритет дела(от 1 до 5)</label>
                <input name="priority" type="number" class="form-control" placeholder="1...5">
            </div>


            <div class="text-center">
                <button name="addCase" class="btn btn-primary" type="submit">Добавить дело</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
