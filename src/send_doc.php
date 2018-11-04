<?php

// Telegram var
$caption = urlencode("File to send !!!");
$chat_id = "000000000";
$token = "744205053:AAH9GZH1gwNQ_7XZTj_GegpnT4H_ir75fpk";

// File var
$file_name = "file.txt";
$file_path = "./directory/{$file_name}";
$mime_type = mime_content_type($file_path);

// Send file
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.telegram.org/bot{$token}/sendDocument?caption={$caption}&chat_id={$chat_id}",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type: multipart/form-data'
    ],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'document' => curl_file_create($file_path, $mime_type , $file_name)
    ]
]);
$data = curl_exec($curl);
curl_close($curl);
?>