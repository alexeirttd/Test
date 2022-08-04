<?php
require_once dirname(__DIR__) . '/logic/logic.php';
signUp();
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
<div class="container ">
    <!--signIn form-->
    <h1 class="text-center fw-bold title-sign">Sign up page</h1>
    <?php if (isset($errors)): ?>
        <?php echo '<div style="color: red;">' . $errors . '</div>'; ?>
    <?php endif; ?>
    <form class="form-margin" name="doSignUp" method="post" action="signUp.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your nickname</label>
            <input type="text" class="form-control" value="<?php echo @$_POST['username']; ?>" name="username" placeholder="Example nickname" id="exampleInputEmail1" >

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your e-mail address</label>
            <input type="email" class="form-control" value="<?php echo @$_POST['user_email']; ?>" name="user_email" placeholder="example@mail.ru" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter your password</label>
            <input type="password" class="form-control" value="<?php echo @$_POST['password']; ?>" name="password" placeholder="Password field" id="exampleInputPassword1">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm your password</label>
            <input type="password" class="form-control" value="<?php echo @$_POST['conf_password']; ?>" name="conf_password" placeholder="Confirm your password here" id="exampleInputPassword1">
            <?php echo '<div style="color: red;">' . @$_POST['message'] . '</div>'; ?>
        </div>

        <button name="doSignUp" type="submit" class="btn btn-primary container-fluid">Sign up</button>


    </form>

</div>

</body>

</html>