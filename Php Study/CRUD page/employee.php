<?php
require_once dirname(__DIR__) . '/logic/logic.php';
$list = outputInfo();
deleteEmployee();
?>

<!DOCTYPE html>
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
            <div class="container text-center mt-3">


                <div class="card text-center">
                    <div class="card-header fw-bold">
                        Блок добавления сотрудника
                    </div>
                    <div class="card-body">
                        <p class="card-text">Здесь вы можете добавить сотрудника, нажав на кнопку ниже.</p>
                        <a href="AddEmployee.php" class="btn btn-primary">Добавить сотрудника</a>

                    </div>

                </div>
                <?php if(count(array($list)) > 0): ?>
                    <table class="table  table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">age</th>
                                <th scope="col">salary</th>
                                <th scope="col">редактирование</th>
                                <th scope="col">удаление</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list as $item): ?>
                            <tr>
                                <td><?=$item['id']?></td>
                                <td><?=$item['name']?></td>
                                <td><?=$item['age']?></td>
                                <td><?=$item['salary']?></td>
                                <form action="EditEmployee.php" method="get">
                                    <td><button type="submit" class="btn btn-default" name="editEmployee" value="<?=$item['id']?>">Редактировать</button></td>
                                </form>
                                <form action="employee.php" method="get">
                                    <td><button type="submit" class="btn btn-danger" name="deleteEmployee" value="<?=$item['id']?>">Удалить</button></td>
                                </form>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                <?php endif;?>
            </div>
		</div>
	</body>
</html>


