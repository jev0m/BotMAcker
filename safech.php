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

define('security',$API_KEY);

function bot($method,$datas=[]){$x_BRK = http_build_query($datas);
$url = "https://api.telegram.org/bot".security."/".$method."?$x_BRK";
$x_BRKjson = file_get_contents($url); return json_decode($x_BRKjson);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$i_BRK =$admin; 
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
if($text == "/sudo" and $x_BRK11 == $admin){
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
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
    $message = $update->message;
    $text = $message->text;
    $chat_id = $message->chat->id;
    $from_id = $message->from->id;
    $message_id = $message->message_id;
    $first_name = $message->from->first_name;
    $username = $message->from->username;
}
if(isset($update->channel_post)){
    $chid           = $update->channel_post->chat->id;
    $chtext         = $update->channel_post->text;
    $messageid      = $update->channel_post->message_id;
    $document       = $update->channel_post->document;
    $sticker        = $update->channel_post->sticker;
    $photo          = $update->channel_post->photo;
    $video          = $update->channel_post->video;
    $forward        = $update->channel_post->forward_from_chat;
    $contact        = $update->channel_post->contact;
    $audio          = $update->channel_post->audio;
}

$documents = "المتحركة";
$stickers = "الملصقات";
$photos = "الصور";
$videos = "الفيديو";
$forwards = "التوجيه";
$contacts = "المواقع";
$audios = "الصوت";
$links = "الروابط";
$usernames = "المعرفات";
$json_security_channels = json_decode(file_get_contents("data/$chid.json"),true);
if($json_security_channels["lock"]["document"] == "close"){
if(isset($document )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["sticker"] == "close"){
if(isset($sticker )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["photo"] == "close"){
if(isset($photo )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["video"] == "close"){
if(isset($video )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["forward"] == "close"){
if(isset($forward )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["contact"] == "close"){
if(isset($contact )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["audio"] == "close"){
if(isset($audio )){  
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["link"] == "close"){
if (strstr($text ,"t.me") == true or strstr($text ,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me" ) == true or strstr($text ,"T.me") == true or strstr($text ,"T.Me") == true or strstr($caption,"T.ME") == true or strstr($caption,"Telegram.me" )== true or strstr($text ,"://") == true or strstr($text ,".com") == true or strstr($caption,"www.") == true or strstr($caption,".org" ) == true or strstr($text ,".online") == true or strstr($text ,".net") == true or strstr($caption,".ml") == true or strstr($caption,".cf" )) {   
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
if($json_security_channels["lock"]["username"] == "close"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
bot('deletemessage',[
    'chat_id'=>$chid,
    'message_id'=>$messageid
    ]);
  }
  }
  if( $chtext == "تفعيل" ){
        mkdir ("data");
        $json_security_channels = '{"lock": {"document": "open" "username": "open" "photo": "open" "link": "open" "video": "open" "forward": "open" "contact": "open" "audio": "open" "sticker": "open"},}';
        $json_security_channels = json_decode($json_security_channels,true);
        $json_security_channels = json_encode($json_security_channels,true);
        file_put_contents("data/$chid.json",$json_security_channels);
	    bot('sendmessage',[
	    'chat_id'=>$chid,
	    'text'=>"
☑️ ¦ تم تفعيل البوت في القناة
📡 ¦ ايدي القناة `$chid`
",'parse_mode'=>"markdown",
        'reply_to_message_id'=>$messageid,
        ]);
        }
        


if(preg_match('/^(مسح) (.*)/', $chtext, $delete)){
       for($m=$messageid; $m>=$messageid-$delete[2]; $m--){
       bot('deletemessage',[
       'chat_id' => $chid,
       'message_id' =>$m,]);
       }
       bot('sendmessage',[
       'chat_id' => $chid,
       'text' =>"✅ ¦ تم *$chtext* من رسائل المنشورات",'parse_mode'=>"markdown",
       ]);
       }
if($chtext =="قفل الصور" ){
$json_security_channels["lock"]["photo"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $photos بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح الصور" ){
$json_security_channels["lock"]["photo"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $photos بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}


if($chtext =="قفل الفيديو" ){
$json_security_channels["lock"]["video"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $videos بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح الفيديو" ){
$json_security_channels["lock"]["video"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $videos بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}


if($chtext =="قفل الملصقات" ){
$json_security_channels["lock"]["sticker"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $stickers بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
 }

if($chtext =="فتح الملصقات" ){
$json_security_channels["lock"]["sticker"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $stickers بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}


if($chtext =="قفل المتحركة" ){
$json_security_channels["lock"]["document"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $documents بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح المتحركة" ){
$json_security_channels["lock"]["document"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $documents بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
 }


if($chtext =="قفل التوجيه" ){
$json_security_channels["lock"]["forward"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $forwards بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}


if($chtext =="فتح التوجيه" ){
$json_security_channels["lock"]["forward"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $forwards بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="قفل الصوت" ){
$json_security_channels["lock"]["audio"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $audios بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح الصوت" ){
$json_security_channels["lock"]["audio"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $audios بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}


if($chtext =="قفل الموقع" ){
$json_security_channels["lock"]["contact"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $contacts بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح الموقع" ){
$json_security_channels["lock"]["contact"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $contacts بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="قفل الروابط" ){
$json_security_channels["lock"]["link"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $links بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح الروابط" ){
$json_security_channels["lock"]["link"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $links بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="قفل المعرفات" ){
$json_security_channels["lock"]["username"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔐 ¦ تم قفل $usernames بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if($chtext =="فتح المعرفات" ){
$json_security_channels["lock"]["username"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
	bot('sendmessage',[
	'chat_id'=>$chid,
	'text'=>"🔓 ¦ تم فتح $usernames بنجاح ؛√",
  'reply_to_message_id'=>$messageid,
 ]);
}

if( $chtext == "الاوامر" ){
            bot('sendmessage',[
	        'chat_id'=>$chid,
	        'text'=>"
- اوامر الحمايه

1 = فتح - قفل المعرفات
2 = فتح - قفل الروابط
3 = فتح - قفل الصوت
4 = فتح - قفل التوجيه
5 = فتح - قفل الفيديو
6 = فتح - قفل الصور
7 = فتح - قفل الملصقات
8 = فتح - قفل المتحركة
9 = فتح - قفل الموقع
10 = مسح + عدد الرسائل للمسح
11 = الرابط لجلب رابط القناة
", 'reply_to_message_id'=>$messageid,
        ]);
        }
if( $text == "/start" ){
            bot("sendmessage",[
            "chat_id"=>$chat_id,
            "text"=>"
- اهلا بك عزيزي في بوت حماية القنوات
- الان يمكنك حماية قناتك من الادمن الغير موثوق
- ارفع البوت ادمن بلقناة وارسل تفعيل
- ارسل الاوامر بلقناة لمعرفة اوامر الحمايه
", 'reply_to_message_id'=>$message_id,
        ]);
        }
    $linkex = json_decode(file_get_contents("https://api.telegram.org/bot".security."/exportChatInviteLink?chat_id=$chid"));
    $linkchannel = $linkex->result;
    if( $chtext == "الرابط" ){
            bot('sendmessage',[
	        'chat_id'=>$chid,
	        'text'=>"
رابط القناة هو 
$linkchannel
", 'reply_to_message_id'=>$messageid,'disable_web_page_preview'=>true,
        ]);
        }

 