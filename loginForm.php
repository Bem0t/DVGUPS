<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Авторизация</title>
  <link rel="icon" href="./img/another/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./css/styleLoginForm.css" />
  <style>
    .hidden {
      display: none;
    }

    .error {
      color: red;
      font-size: 0.9em;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <form id="loginForm" action="/authorization.php" method="post">
      <h2>Вход</h2>
      <input type="hidden" name="action" value="login"> <!-- Поле для идентификации действия -->
      <div class="input-field">
        <input type="email" name="email" required />
        <label>Введите ваш email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required />
        <label>Введите пароль</label>
      </div>
      <?php
      session_start();
      if (isset($_SESSION['error'])) {
        echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']); // Удалить ошибку после вывода
      }
      ?>
      <button type="submit">Войти</button>
      <div class="register">
        <p>У вас нет аккаунта? <a href="#" id="showRegister">Зарегистрироваться</a></p>
      </div>
    </form>

    <form id="registerForm" action="/authorization.php" method="post" class="hidden">
      <h2>Регистрация</h2>
      <input type="hidden" name="action" value="register"> <!-- Поле для идентификации действия -->
      <div class="input-field">
        <input type="text" name="first_name" required />
        <label>Введите ваше имя</label>
      </div>
      <div class="input-field">
        <input type="text" name="last_name" required />
        <label>Введите вашу фамилию</label>
      </div>
      <div class="input-field">
        <input type="tel" name="phone" required maxlength="11" />
        <label>Введите номер телефона</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" required />
        <label>Введите ваш email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required />
        <label>Введите пароль</label>
      </div>
      <?php
      session_start();
      if (isset($_SESSION['error'])) {
        echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']); // Удалить ошибку после вывода
      }
      ?>
      <button type="submit">Зарегистрироваться</button>
      <div class="login">
        <p>Уже есть аккаунт? <a href="#" id="showLogin">Войти</a></p>
      </div>
    </form>


    <div id="errorMessage" class="error hidden"></div>
  </div>

  <script src="./js/login.js"></script>
  <!-- Подключение внешнего скрипта -->
</body>

</html>
?>