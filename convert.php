<?php

flush();

ob_start();

set_time_limit(0);

error_reporting(0);

ob_implicit_flush(1);

date_default_timezone_set('Asia/Damascus');

$get_toke = file_get_contents('info.php');

$get_token = explode("\n", $get_toke);

$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");

$json_info = json_decode($url_info);

$user = $json_info->result->username;

$bot_id = $json_info->result->id;

$admin = $get_token[1];

$API_KEY = $get_token[0];

define('API_KEY',$API_KEY);

function bot($method,$datas=[]){$x_BRK = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$x_BRK";
$x_BRKjson = file_get_contents($url); return json_decode($x_BRKjson);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$i_BRK = $admin; 
$x_BRK = file_get_contents("x_BRK.txt");
$x_BRK0 = file_get_contents("x_BRK0.txt");
$x_BRK1= file_get_contents("x_BRK1.txt");
$x_BRK5 = file_get_contents("x_BRK2.txt");
$x_BRK6 = file_get_contents("x_BRK3.txt");
$x_BRK20 = json_decode(file_get_contents('php://input'));
$x_BRK18 = $update->message;
$chat_id = $x_BRK18->chat->id;
$text = $x_BRK18->text;
$data = $x_BRK20->callback_query->data;
$x_BRK12 = $x_BRK20->callback_query->message->chat->id;
$x_BRK14 =  $x_BRK20->callback_query->message->message_id;
$x_BRK15 = $x_BRK18->from->first_name;
$x_BRK16 = $x_BRK18->from->username;
$x_BRK11 = $x_BRK18->from->id;
$x_BRK2 = explode("\n",file_get_contents("x_BRK4.txt"));
$x_BRK3 = count($x_BRK2)-1;
if ($x_BRK18 && !in_array($x_BRK11, $x_BRK2)) {
    file_put_contents("x_BRK4.txt", $x_BRK11."\n",FILE_APPEND);
  }
$x_BRK9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK0&user_id=".$x_BRK11);
$x_BRK10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK1&user_id=".$x_BRK11);
if($x_BRK18 && (strpos($x_BRK9,'"status":"left"') or strpos($x_BRK9,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK9,'"status":"kicked"') or strpos($x_BRK10,'"status":"left"') or strpos($x_BRK10,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- عذرا عزيزي يجب عليك الاشتراك في قناة البوت اولا

$x_BRK0
$x_BRK1",
]);return false;}
if($text == "/start" and $x_BRK11 == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- اهلا بك في قائمة اوامر الادمن',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- قناة الاشتراك الاجباري الاولى' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK0"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK1"]],
[['text'=>'قناة الاشتراك الاجباري الثانيه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK2"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK3"]],
[['text'=>'- - عرض قنوات الاشتراك الاجباري' ,'callback_data'=>"x_BRK4"]],
[['text'=>'- قائمة الاذاعه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة نص' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد المشتركين' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- التواصل' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"x_BRK11"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"x_BRK12"]],
   ] 
   ])
]);
}
if($data == "x_BRK" ){
bot('EditMessageText',[
'chat_id'=>$x_BRK12,
'message_id'=>$x_BRK14,
"text"=>'- اهلا بك في قائمة اوامر الادمن',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- قناة الاشتراك الاجباري الاولى' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK0"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK1"]],
[['text'=>'قناة الاشتراك الاجباري الثانيه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK2"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK3"]],
[['text'=>'- - عرض قنوات الاشتراك الاجباري' ,'callback_data'=>"x_BRK4"]],
[['text'=>'- قائمة الاذاعه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة نص' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد المشتركين' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- التواصل' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"x_BRK11"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"x_BRK12"]],
   ] 
   ])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK0"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK0");
}
if($text and $x_BRK == "x_BRK0" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم حفظ $text كقناة اولى للاشتراك الاجباري
- تأكد من رفع البوت ادمن بلقناة" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK0.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK1"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK0.txt");
}
if($data == "x_BRK2"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK1");
}
if($text and $x_BRK == "x_BRK1" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم حفظ $text كقناة ثانيه للاشتراك الاجباري
- تأكد من رفع البوت ادمن بلقناة" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK1.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK3"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK1.txt");
}
if($data == "x_BRK4"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- هذه هي قائمة قنوات الاتشراك الاجباري
1 => $x_BRK0
- - - - - 
2 => $x_BRK1",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK5"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل الرساله ليتم توجيهها لجميع المشتركين',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK2");
}
if($x_BRK18 and $x_BRK == "x_BRK2" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم توجيه الرساله ل$x_BRK3 مشترك",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('forwardMessage', [
'chat_id'=>$x_BRK2[$i],
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK6"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل النص الان ليتم نشره لجميع المشتركين',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK3");
}
if($text and $x_BRK == "x_BRK3" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم نشر رسالتك ل$x_BRK3 مشترك" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('sendMessage', [
'chat_id'=>$x_BRK2[$i],
'text'=>$text
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK7"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- عدد مشتركين البوت $x_BRK3",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK11"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تفعيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK3.txt","x_BRK");
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 != $i_BRK){
bot('forwardMessage', [
'chat_id'=>$i_BRK,
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 == $i_BRK){
bot('sendMessage',[
'chat_id'=>$x_BRK18->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}
if($data == "x_BRK12"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تعطيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK3.txt");
}
if (!is_dir('co')) {
	mkdir('co');
}
if($text == "/start"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>" اهلا بك عزيزي 🔱 • [$name](tg://user?id=$chat_id)

في بوت تحويل الصيغ ☑ ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'قائمة التحويلات 🗒', 'callback_data'=>"hkt"]],
        ]
])
]);
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
}

if($data == "hkt"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>" ارسل بصمه لتحويلها الىmp3
ارسلmp3 تحويلها الى بصمه
ارسل صورة لتحويلها الى ملصق +png
ارسل ملصق لتحويله الى صورة 
ارسل فيدو يتحويله الى صوت + متحركة
ارسل فيديو نوت لتحويله الى فديو ",
'show_alert'=>true
]);
}
if ($message->photo) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->photo[1]->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.png",file_get_contents($file));
	    bot('sendsticker',[
	    	'chat_id'=>$chat_id,
	    	'sticker'=>new CURLFile("co/$chat_id.png")
	    ]);
	    unlink("co/$chat_id.png");
}
if ($message->photo) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->photo[1]->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.png",file_get_contents($file));
	    bot('senddocument',[
      'chat_id'=>$chat_id,
      'document'=>new CURLFile("co/$chat_id.png")
     ]);
     unlink("co/$chat_id.png");
}
if ($message->sticker) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->sticker->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.jpg",file_get_contents($file));
	    bot('sendphoto',[
	    	'chat_id'=>$chat_id,
	    	'photo'=>new CURLFile("co/$chat_id.jpg")
	    ]);
	    unlink("co/$chat_id.jpg");
}
if ($message->sticker ){
 $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->sticker->file_id])->result->file_path;
     file_put_contents("co/$chat_id.png",file_get_contents($file));
     bot('senddocument',[
      'chat_id'=>$chat_id,
      'document'=>new CURLFile("co/$chat_id.png")
     ]);
     unlink("co/$chat_id.png");
}
if ($message->video) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("co/$chat_id.mp4")
	    ]);
	    unlink("co/$chat_id.mp4");
}

if ($message->video) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp4",file_get_contents($file));
	    bot('senddocument',[
	    	'chat_id'=>$chat_id,
	    	'document'=>new CURLFile("co/$chat_id.mp4")
	    ]);
	    unlink("co/$chat_id.mp4");
}
if ($message->video) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$chat_id,
	    	'voice'=>new CURLFile("co/$chat_id.ogg")
	    ]);
	    unlink("co/$chat_id.ogg");
}
if ($message->video) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp3",file_get_contents($file));
	    bot('sendaudio',[
	    	'chat_id'=>$chat_id,
	    	'audio'=>new CURLFile("co/$chat_id.mp3")
	    ]);
	    unlink("co/$chat_id.mp3");
}
if ($message->voice) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->voice->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp3",file_get_contents($file));
	    bot('sendaudio',[
	    	'chat_id'=>$chat_id,
	    	'audio'=>new CURLFile("co/$chat_id.mp3")
	    ]);
	    unlink("co/$chat_id.mp3");
}
if ($message->audio) {
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$chat_id,
	    	'voice'=>new CURLFile("co/$chat_id.ogg")
	    ]);
	    unlink("co/$chat_id.ogg");
}