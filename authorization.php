<?php
session_start();

// Подключение к базе данных
$host = 'MySql-8.2'; // или ваш хост
$db = 'my_database'; // имя вашей базы данных
$user = 'root'; // имя пользователя
$pass = ''; // пароль

$conn = new mysqli($host, $user, $pass, $db);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Функция для завершения сеанса (выход)
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Получение данных из POST-запроса (регистрация или авторизация)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Проверка, это регистрация или авторизация
    if (isset($_POST['first_name'])) {
        // РЕГИСТРАЦИЯ

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];

        // Проверка на наличие email в базе данных
        $emailCheckQuery = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $emailCheckQuery->bind_param("s", $email);
        $emailCheckQuery->execute();
        $result = $emailCheckQuery->get_result();

        if ($result->num_rows > 0) {
            // Если email уже существует, сохраняем ошибку в сессии
            $_SESSION['error'] = "Этот email уже зарегистрирован";
            header("Location: loginForm.php");
            exit();
        }

        // Если email не найден, продолжаем регистрацию
        $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Хеширование пароля

        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $phone, $email, $passwordHash);

        if ($stmt->execute()) {
            // Успешная регистрация
            $_SESSION['user'] = $first_name; // Сохраняем имя пользователя в сессии
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Ошибка: " . $stmt->error;
            header("Location: loginForm.php"); // Перенаправление на форму при ошибке
            exit();
        }

        $stmt->close();
    } else {
        // АВТОРИЗАЦИЯ

        // Проверка email и пароля
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Проверяем пароль
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['first_name']; // Сохраняем имя пользователя в сессии
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['error'] = "Неверный пароль";
                header("Location: loginForm.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Пользователь с таким email не найден";
            header("Location: loginForm.php");
            exit();
        }

        $stmt->close();
    }
}

$conn->close();
?>
