<?php
require_once dirname(__DIR__) . '/logic/database.php';



function outputInfo() {
   $pdo = DB_Connect();
   $sql = "SELECT * FROM employee";
   $connect = $pdo->prepare($sql);
   $connect->execute();
   return $connect->fetchAll();
}

function deleteEmployee() {
    if (key_exists('deleteEmployee', $_GET))
    {
        if (isset($_GET['deleteEmployee'])) {
            $employee['employeeId'] = $_GET['deleteEmployee'];
            $pdo = DB_Connect();
            $sql = "DELETE FROM `employee` WHERE `employee`.`id` = :employeeId";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($employee);
        }
    }
}

function addEmployee() {
    if (key_exists('addEmployee', $_POST))
    {
        if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['salary'])) {
            $employee['id'] = htmlspecialchars($_POST['id']);
            $employee['name'] = htmlspecialchars($_POST['name']);
            $employee['age'] = htmlspecialchars($_POST['age']);
            $employee['salary'] = htmlspecialchars($_POST['salary']);
            $sql = "INSERT INTO employee (`id`, `name`, `age`, `salary`) VALUES (:id, :name, :age, :salary)";
            $pdo = DB_Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($employee);
            header("Location: employee.php");
        }
        else
        {
            echo "Ошибка! Все поля должны быть заполнены!";
        }
    }
}

function editEmployee() {

    if (key_exists('editEmployee', $_GET)) {
        if (isset($_GET['editEmployee']) && !empty($_GET['editEmployee'])) {

            $employeeInfo = [];
            $employee['employeeId'] = $_GET['editEmployee'];
            $pdo = DB_Connect();
            $sql = "SELECT * FROM `employee` WHERE `employee`.`id` = :employeeId";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($employee);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $key => $value)
            {
                foreach ($value as $valueKey => $item)
                {
                    $employeeInfo["$valueKey"] = $item;
                }
            }
            return $employeeInfo;
        }
    }
    if (key_exists('saveEmployee', $_POST)) {
        if ((isset($_POST['newId']) && isset($_POST['newName']) && isset($_POST['newAge']) && isset($_POST['newSalary'])) &&
            (!empty($_POST['newId']) && !empty($_POST['newName']) && !empty($_POST['newAge']) && !empty($_POST['newSalary']))) {

            $newEmployeeInfo['employeeId'] = htmlspecialchars($_POST['saveEmployee']);
            $pdo = DB_Connect();

            $newEmployeeInfo['newId'] = htmlspecialchars($_POST['newId']);
            $newEmployeeInfo['newName'] = htmlspecialchars($_POST['newName']);
            $newEmployeeInfo['newAge'] = htmlspecialchars($_POST['newAge']);
            $newEmployeeInfo['newSalary'] = htmlspecialchars($_POST['newSalary']);


            $sql = "UPDATE employee SET employee.id = :newId, employee.name = :newName, employee.age = :newAge, employee.salary = :newSalary WHERE employee.id = :employeeId";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($newEmployeeInfo);
            header("Location: employee.php");

        }
        else
        {
            header("Location: EditEmployee.php?editEmployee=".$_POST['saveEmployee']);
            echo "Ошибка! Все поля должны быть заполнены!";
        }
    }
}


function guestBook() {
  $date = date('Y-m-d H:i:s');


    if (key_exists('saveReviewButton', $_POST))
    {
        if (!empty($_POST['guest_name']) && !empty($_POST['text'])) {
            $review['guest_name'] = htmlspecialchars($_POST['guest_name']);
            $review['text'] = htmlspecialchars($_POST['text']);
            $review['date'] = $date;
            $sql = "INSERT INTO review (`guest_name`, `text`, `data`) VALUES (:guest_name, :text, :date)";
            $pdo = DB_Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($review);

            header("Location: guestBook.php");
        }
        else
        {
            echo "Ошибка! Все поля должны быть заполнены!";
        }
    }


    if (key_exists('saveReviewPageButton', $_POST))
    {
        if (!empty($_POST['guest_name']) && !empty($_POST['text'])) {
            $review['guest_name'] = htmlspecialchars($_POST['guest_name']);
            $review['text'] = htmlspecialchars($_POST['text']);
            $review['date'] = $date;
            $sql = "INSERT INTO review (`guest_name`, `text`, `data`) VALUES (:guest_name, :text, :date)";
            $pdo = DB_Connect();
            $stmt = $pdo->prepare($sql);
            $request = $stmt->execute($review);

            for ($i = 0; $i < 5; $i++) {
                if (count($request) > 4) {
                    header('Location: guestBookPage.php?page=' . $i);
                }
            }
            header("Location: guestBookPage.php");
        }
        else
        {
            echo "Ошибка! Все поля должны быть заполнены!";
        }
    }


}
function guestBookInfo() {
    $pdo = DB_Connect();
    $sql = "SELECT guest_name, text, data FROM review";
    $connect = $pdo->prepare($sql);
    $connect->execute();
    return $connect->fetchAll();
}

function casesInfo() {
    $pdo = DB_Connect();
    $sql = "SELECT description, date, title, priority FROM cases";
    $connect = $pdo->prepare($sql);
    $connect->execute();
    return $connect->fetchAll();
}

function addCases() {
    $date = date('Y-m-d H:i:s');
    if (key_exists('addCase', $_POST))
    {
        if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['priority'])) {
            $cases['title'] = htmlspecialchars($_POST['title']);
            $cases['description'] = htmlspecialchars($_POST['description']);
            $cases['priority'] = htmlspecialchars($_POST['priority']);
            $cases['date'] = $date;
            $sql = "INSERT INTO cases (`title`, `date`, `description`, `priority`) VALUES (:title, :date, :description, :priority)";
            $pdo = DB_Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($cases);
            header("Location: planList.php");
        }
        else
        {
            echo "Ошибка! Все поля должны быть заполнены!";
        }
    }
}

function signUp() {
    $pdo = DB_Connect();
    if (isset($_POST['doSignUp'])) {
       $username = $_POST['username'];
       $user_email = $_POST['user_email'];
       $password = md5($_POST['password']);
       $conf_password = md5($_POST['conf_password']);

        //Array for insertion data to the table
        $data = array(':username' => $username,
            ':user_email' => $user_email,
            ':password' => $password
        );


        if ($password === $conf_password) {
           if (empty($_POST['username'])) {
               $errors = 'Поле "Имя пользователя" обязательно должно быть заполнено!';
           }
           else {
               $username = $username;
           }
           if (empty($_POST['user_email'])) {
               $errors = 'Поле "E-mail" обязательно должно быть заполнено!';

           }
           else {
               $user_email = $user_email;
           }
           if (empty($_POST['password'])) {
               $errors = 'Поле "Пароль" обязательно должно быть заполнено!';
           }
           else {
               $password = $password;
              }
           if (empty($_POST['conf_password'])) {
               $errors = 'Поле "Подтверждение пароля" обязательно должно быть заполнено!';
           }
           else {
               $conf_password = $conf_password;
           }
//           if (empty($usernameErrors) && empty($user_emailErrors) && empty($passwordErrors) && empty($conf_passwordErrors)) {
            if (empty($errors)) {
               //insert data to the table
               $query = $pdo->prepare("INSERT INTO `users`(`username`, `user_email`, `password`) VALUES (:username, :user_email, :password)");
               $query->bindValue(':password', $password, PDO::PARAM_INT);
               $result = $query->execute($data);
               if ($result) {
                   $_POST['message'] = "Sign up  completed!";
                   header('Location: signIn.php');
               } else {
                   $_POST['message'] = "Try to sign up again";
               }
           }
        } else {
            $_POST['message'] = "Passwords don't match";
        }

    }
}

function signIn()
{
    $pdo = DB_Connect();

//array for the check
    $checks = [];

    if (isset($_POST['doLogin'])) {


        if (!isset($_POST['user_email'])) {
            $errors = 'Please, enter your email!';
        } else {
            $checks['user_email'] = $_POST['user_email'];
        }

        if (!isset($_POST['password'])) {
            $errors = 'Please, enter your password!';
        } else {
            $checks['password'] = $_POST['password'];
        }
        $password = md5($_POST['password']);
        if (empty($errors)) {
            $sql = "SELECT * FROM `USERS` WHERE `user_email` = ?";
            $query = $pdo->prepare($sql);
            $query->execute([$checks['user_email']]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                if ($result['password'] === md5($checks['password'])) {
                    $_SESSION['signInUser'] = $checks['user_email'];
                    header('Location: ../index.php');
                    exit();
                } else {
                    $errors = "Incorrect password";
                    echo $errors;
                }
            } else {
                $errors = 'Invalid email';

            }
        }
    }
}
