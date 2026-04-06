<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8743237870:AAGEuOhj-260Z4CUY2yfKOF2g58okhFz7l0";
$chat_id = "-5174752769";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

$text = "";

foreach ($formData as $key => $value) {
  $text .= $key . urlencode($value);
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}
