<?php
require_once dirname(__DIR__) . '/logic/logic.php';
$caseList = casesInfo();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страница со списком дел</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<main class="container">

    <form method="post" action="AddCases.php">
        <button name="addCases" class="btn btn-primary">Добавить дело</button>
    </form>
    <form method="post">
        <button class="btn btn-danger">Удалить дело</button>
    </form>
    <?php if(count(array($caseList)) > 0): ?>
        <?php foreach($caseList as $item): ?>
    <div class="list-group">
        <a href="#" class="parent list-group-item list-group-item-action flex-column align-items-start ">

            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?=$item['title']?></h5>
               <p>
                    <small><?=$item['date']?></small>
               </p>
            </div>
            <p class="mb-1"><?=$item['description']?></p>
            <small><?=$item['priority']?></small>


        </a>

    </div>
        <?php endforeach;?>
    <?php endif;?>
</main>
</body>
</html>


