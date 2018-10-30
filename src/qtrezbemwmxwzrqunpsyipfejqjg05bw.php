<?php
ini_set('error_reporting', E_ALL);

// Set url to send back response message
$bot_token = "648488813:AAGA2U2dX3aX1RyU1a5D8MEEoX2Lxi12Rig";
$website = "https://api.telegram.org/bot".$bot_token;

// Get message contenant
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

// Get commands and user id
$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

// Command test
switch($message){
	case "/test":
		send_message($chat_id, "Server response test");
		break;
	case "/hi":
		send_message($chat_id, "Server response hi");
		break;
	default:
		send_message($chat_id, "Server response default");
		break;
}

// Send message back to user
function send_message($chat_id, $message){
	$ur1 = $GLOBALS['website']."/sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
	file_get_contents($ur1);
}
?>