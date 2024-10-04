const authForm = document.getElementById("authForm");
const registerForm = document.getElementById("registerForm");
const showRegister = document.getElementById("showRegister");
const showLogin = document.getElementById("showLogin");
const errorMessage = document.getElementById("errorMessage");

const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const passwordPattern = /^(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;

function validateForm(form) {
  const inputs = form.querySelectorAll("input");
  for (const input of inputs) {
    if (!input.value) {
      return 'Поле "${input.previousElementSibling.innerText}" не должно быть пустым.';
    }
    if (input.type === "email" && !emailPattern.test(input.value)) {
      return "Некорректный email.";
    }
    if (input.type === "password" && !passwordPattern.test(input.value)) {
      return "Пароль должен содержать минимум 8 символов и хотя бы 1 спецсимвол.";
    }
    if (input.type === "tel") {
      // Проверяем, что номер состоит только из цифр и имеет длину 11
      const phonePattern = /^\d{11}$/;
      if (!phonePattern.test(input.value)) {
        return "Номер телефона должен содержать 11 цифр и состоять только из цифр.";
      }
    }
  }
  return null;
}

document
  .getElementById("showRegister")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Предотвращаем переход по ссылке
    document.getElementById("loginForm").classList.add("hidden"); // Скрываем форму входа
    document.getElementById("registerForm").classList.remove("hidden"); // Показываем форму регистрации
  });
  
document
  .getElementById("showLogin")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Предотвращаем переход по ссылке
    document.getElementById("registerForm").classList.add("hidden"); // Скрываем форму регистрации
    document.getElementById("loginForm").classList.remove("hidden"); // Показываем форму входа
  });
  const urlParams = new URLSearchParams(window.location.search);
  const name = urlParams.get('name');

  // Если имя существует, меняем текст кнопки
  if (name) {
      document.getElementById('authButton').textContent = "${decodeURIComponent(name)}!";
  }