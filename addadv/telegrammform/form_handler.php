<?php
$token = '6558826186:AAEUgON3pgMa9nu6vcgyu7ypiviXhxYCN-M';
$chat_id = '885823489';
$text = $_POST['text'];
$inn = $_POST['inn'];
$email = $_POST['email'];
$category = $_POST['category'];
$description = $_POST['description'];

$message = "Новая заявка:\n\n";
$message .= "Фио: " . $text . "\n";
$message .= "ИНН/ОГРН: " . $inn . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Категория: " . $category . "\n";
$message .= "Описание: " . $description;

$url = "https://api.telegram.org/bot" . $token . "/sendMessage";

$data = array(
    'chat_id' => $chat_id,
    'text' => $message
);
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_RETURNTRANSFER => true
);

$curl = curl_init();
curl_setopt_array($curl, $options);
$result = curl_exec($curl);
curl_close($curl);

if ($result === false) {
    // handle error
} else {
    // handle success
}
?>