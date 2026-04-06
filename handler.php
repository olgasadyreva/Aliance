<?php
// Простая функция для парсинга .env файла
function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        putenv("$name=$value");
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }
}

// Загружаем .env
loadEnv(__DIR__ . '/.env');

// Получаем значения
$token = getenv('BOT_TOKEN');
$chat_id = getenv('CHAT_ID');

$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

$text = "";

foreach ($formData as $key => $value) {
  $text .= $key . "<b>" . $value . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}
