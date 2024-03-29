<?php
require_once dirname(__DIR__) . '/logic/logic.php';

?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Тестовый проект</title>
</head>
<body>
<!--Header's menu-->
<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="#">Opportunities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="crudPage.php">Your projects</a>
                    </li>


                    <li class="user-session-place" style="margin-left: 1250px;">
                        <?php if (isset($_SESSION['signInUser'])) : ?>
                    <li class="nav-item ms-2 pt-1">
                        Вы авторизированы как <?php echo htmlspecialchars($_SESSION['signInUser'])?>
                    </li>
                    <li class="nav-item ms-2 me-2">
                        <a type="button" class="btn btn-danger btn-sm" href="logout.php">Выйти</a>
                    </li>
                    <?php else : ?>
                        <form name="signUpForm" class="d-flex " role="search">

                            <button class="btn  me-2" name="signUpButton" type="submit"><a href="signUp.php">SignUp</a></button>
                            <button class="btn " name="signInButton" type="submit"><a href="signIn.php">SignIn</a></button>
                        </form>
                    <?php endif;?>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>


</body>

</html>

