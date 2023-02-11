<?php 

ob_start();
//توکن ربات خود را زیر وارد کنید
$API_KEY = 'tokennnnnnnnnnnnnnnnnnnnnnnnnnnnnn';
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
	
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text2 = $message ;
$first_name = $update->message->chat->first_name;
$username = $update->message->chat->username;

if($text2 != null){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"🟢 NAME : $first_name \n\n🟣 Chat Id : $chat_id\n\n🔵 Username : @$username   ",
	]);
	}
	

   
?>
