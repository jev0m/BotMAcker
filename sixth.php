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
$ch = "@i_BRK"; // Your Channel //
$admin = 1005274894; // Your ID //
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
if($text == '/start' and !in_array($from_id, $get_ids)){ 
    bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'ahyaa'){ bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- اهلا بك عزيزي في قسم الاحيائي\n- اختر القسم الذي تريده من الازرار بلاسفل",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- كتب الاحيائي','callback_data'=>'ktbahyaa'],['text'=>'- ملازم الاحيائي','callback_data'=>'mlahyaa']],[['text'=>'- ملخصات الاحيائي','callback_data'=>'mlksahyaa']],[['text'=>'- وزاريات الاحيائي','callback_data'=>'wzahyaa'],['text'=>'- اختبارات الاحيائي','callback_data'=>'aktbarahyaa']],[['text'=>'- رجوع','callback_data'=>'brokback']],]])]);}
if($data == 'ktbahyaa'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/107','caption'=>'- كتاب الفيزياء',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/108','caption'=>'- كتاب الرياضيات',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/110','caption'=>'- كتاب القواعد',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/111','caption'=>'- كتاب الانكليزي ملون',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/112','caption'=>'- كتاب الانكليزي نشاط',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/113','caption'=>'- كتاب الكيمياء',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/115','caption'=>'- كتاب الاحياء',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/116','caption'=>'- كتاب الاسلاميه',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/117','caption'=>'- كتاب الادب',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'mlahyaa'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/118','caption'=>'- ملزمة الفيزياء',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/127','caption'=>'- ملزمة القواعد',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/121','caption'=>'- ملزمة الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/122','caption'=>'- ملزمة الرياضيات',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/124','caption'=>'-  ملزمة الكيمياء الجزء الاول',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/130','caption'=>'-  ملزمة الكيمياء الجزء الثاني',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/125','caption'=>'- ملزمة الاحياء الوراثه',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/133','caption'=>'- ملزمة الاحياء كامله',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/126','caption'=>'- ملزمة الانكليزي',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'mlksahyaa'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/90','caption'=>'- ملخص الكيمياء الفصل الاول',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/91','caption'=>'- ملخص الكيمياء الفصل الثاني',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/92','caption'=>'- ملخص الكيمياء الفصل الثالث',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/93','caption'=>'- ملخص الكيمياء الفصل الرابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/94','caption'=>'- ملخص الكيمياء الفصل الخامس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/95','caption'=>'- ملخص الكيمياء الفصل السادس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/96','caption'=>'- ملخص الكيمياء الفصل السابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/98','caption'=>'- ملخص الفيزياء قسم المسائل',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/100','caption'=>'- ملخص الفيزياء قسم الكلامي',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'aktbarahyaa'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/60','caption'=>'- اختبار كيمياء مسائل',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/61','caption'=>'- اختبار كيمياء كلامي',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/62','caption'=>'- اختبار فيزياء الفصل الاول',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/63','caption'=>'- اختبار فيزياء الفصل الثاني',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/64','caption'=>'- اختبار فيزياء الفصل الثالث',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/65','caption'=>'- اختبار فيزياء الفصل الرابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/66','caption'=>'- اختبار فيزياء الفصل الخامس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/67','caption'=>'- اختبار فيزياء الفصل السادس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/68','caption'=>'- اختبار فيزياء الفصل السابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/69','caption'=>'- اختبار فيزياء الفصل الثامن',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/70','caption'=>'- اختبار فيزياء الفصل التاسع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/71','caption'=>'- اختبار فيزياء الفصل العاشر',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/72','caption'=>'- اختبار الاحياء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/79','caption'=>'- اختبار الانكليزي قطع الكتاب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/80','caption'=>'- اختبار الانكليزي قطع الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/81','caption'=>'- اختبار الانكليزي ( القواعد - المعاني - التوصيلات - الاملاء )',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/82','caption'=>'- اختبار القواعد الاستفهام',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/83','caption'=>'- اختبار القواعد التعجب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/84','caption'=>'- اختبار القواعد التقديم والتأخير',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/85','caption'=>'- اختبار القواعد المدح والذم',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/86','caption'=>'- اختبار القواعد الاستثناء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/87','caption'=>'- اختبار القواعد التوكيد',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/89','caption'=>'- اختبار الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/88','caption'=>'- اختبار الرياضيات',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'wzahyaa'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/48','caption'=>'- وزاريات الكيمياء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/50','caption'=>'- وزاريات الفيزياء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/52','caption'=>'- وزاريات الرياضيات',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/53','caption'=>'- وزاريات الاسلاميه',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/54','caption'=>'- وزاريات القواعد',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/55','caption'=>'- وزاريات الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/56','caption'=>'- وزاريات الانكليزي',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/57','caption'=>'- وزاريات الاحياء الوراثه',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/58','caption'=>'- وزاريات الاحياء كامله',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
// تطبيقي //
if($data == 'ttbe'){ bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- اهلا بك عزيزي في قسم التطبيقي\n- اختر القسم الذي تريده من الازرار بلاسفل",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- كتب التطبيقي','callback_data'=>'ktbttbe'],['text'=>'- ملازم التطبيقي','callback_data'=>'mlttbe']],[['text'=>'- ملخصات التطبيقي','callback_data'=>'mlksttbe']],[['text'=>'- وزاريات التطبيقي','callback_data'=>'wzttbe'],['text'=>'- اختبارات التطبيقي','callback_data'=>'aktbarttbe']],[['text'=>'- رجوع','callback_data'=>'brokback']],]])]);}
if($data == 'ktbttbe'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/105','caption'=>'- كتاب الاقتصاد',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/106','caption'=>'- كتاب الفيزياء',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/109','caption'=>'- كتاب الرياضيات',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/111','caption'=>'- كتاب الانكليزي ملون',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/112','caption'=>'- كتاب الانكليزي نشاط',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/114','caption'=>'- كتاب الكيمياء',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/110','caption'=>'- كتاب القواعد',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/116','caption'=>'- كتاب الاسلاميه',
]);
 bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/117','caption'=>'- كتاب الادب',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .

",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'mlttbe'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/119','caption'=>'- ملزمة الفيزياء',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/127','caption'=>'- ملزمة القواعد',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/121','caption'=>'- ملزمة الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/122','caption'=>'- ملزمة الرياضيات',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/131','caption'=>'-  ملزمة الكيمياء الجزء الاول',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/132','caption'=>'-  ملزمة الكيمياء الجزء الثاني',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/120','caption'=>'- ملزمة الاقتصاد',
]);
   bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/126','caption'=>'- ملزمة الانكليزي',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'mlksttbe'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/90','caption'=>'- ملخص الكيمياء الفصل الاول',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/91','caption'=>'- ملخص الكيمياء الفصل الثاني',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/92','caption'=>'- ملخص الكيمياء الفصل الثالث',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/93','caption'=>'- ملخص الكيمياء الفصل الرابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/94','caption'=>'- ملخص الكيمياء الفصل الخامس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/95','caption'=>'- ملخص الكيمياء الفصل السادس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/96','caption'=>'- ملخص الكيمياء الفصل السابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/99','caption'=>'- ملخص الفيزياء قسم المسائل',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/101','caption'=>'- ملخص الفيزياء قسم الكلامي',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/103','caption'=>'- ملخص الاقتصاد',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'aktbarttbe'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/60','caption'=>'- اختبار كيمياء مسائل',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/61','caption'=>'- اختبار كيمياء كلامي',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/62','caption'=>'- اختبار فيزياء الفصل الاول',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/63','caption'=>'- اختبار فيزياء الفصل الثاني',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/64','caption'=>'- اختبار فيزياء الفصل الثالث',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/65','caption'=>'- اختبار فيزياء الفصل الرابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/66','caption'=>'- اختبار فيزياء الفصل الخامس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/67','caption'=>'- اختبار فيزياء الفصل السادس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/68','caption'=>'- اختبار فيزياء الفصل السابع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/69','caption'=>'- اختبار فيزياء الفصل الثامن',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/70','caption'=>'- اختبار فيزياء الفصل التاسع',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/71','caption'=>'- اختبار فيزياء الفصل العاشر',
]);
 bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/73','caption'=>'- اختبار الاقتصاد الفصل الاول',
]);
    bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/74','caption'=>'- اختبار الاقتصاد الفصل الثاني',
]);
 bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/75','caption'=>'- اختبار الاقتصاد الفصل الثالث',
]);
 bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/76','caption'=>'- اختبار الاقتصاد الفصل الرابع',
]);
 bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/77','caption'=>'- اختبار الاقتصاد الفصل الخامس',
]);
 bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/78','caption'=>'- اختبار الاقتصاد الفصل السادس',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/79','caption'=>'- اختبار الانكليزي قطع الكتاب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/80','caption'=>'- اختبار الانكليزي قطع الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/81','caption'=>'- اختبار الانكليزي ( القواعد - المعاني - التوصيلات - الاملاء )',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/82','caption'=>'- اختبار القواعد الاستفهام',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/83','caption'=>'- اختبار القواعد التعجب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/84','caption'=>'- اختبار القواعد التقديم والتأخير',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/85','caption'=>'- اختبار القواعد المدح والذم',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/86','caption'=>'- اختبار القواعد الاستثناء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/87','caption'=>'- اختبار القواعد التوكيد',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/89','caption'=>'- اختبار الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/88','caption'=>'- اختبار الرياضيات',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'wzttbe'){
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/49','caption'=>'- وزاريات الكيمياء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/51','caption'=>'- وزاريات الفيزياء',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/52','caption'=>'- وزاريات الرياضيات',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/53','caption'=>'- وزاريات الاسلاميه',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/54','caption'=>'- وزاريات القواعد',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/55','caption'=>'- وزاريات الادب',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/56','caption'=>'- وزاريات الانكليزي',
]);
    bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/59','caption'=>'- وزاريات الاقتصاد',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
// ادبي //
if($data == 'adbe'){ bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- اهلا بك عزيزي في قسم التطبيقي\n- اختر القسم الذي تريده من الازرار بلاسفل",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- كتب الادبي','callback_data'=>'ktbadbe'],['text'=>'- ملازم الادبي','callback_data'=>'madbe']],[['text'=>'- رجوع','callback_data'=>'brokback']],]])]);}
if($data == 'ktbadbe'){
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/134','caption'=>'-  كتاب الاقتصاد',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/135','caption'=>'-  كتاب الجغرافيه',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/136','caption'=>'-  كتاب التاريخ',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/137','caption'=>'-  كتاب الرياضيات',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'madbe'){
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/138','caption'=>'-  ملزمة القواعد',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/139','caption'=>'-  ملزمة الادب',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/140','caption'=>'-  ملزمة النقد',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/141','caption'=>'-  ملزمة الاقتصاد',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/142','caption'=>'-  ملزمة الرياضيات',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/143','caption'=>'-  ملزمة التاريخ',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/144','caption'=>'-  ملزمة الجغرافيه 1',
]);
        bot('senddocument',[
'chat_id'=>$chat_id2,'document'=>'https://t.me/brokmakebots/145','caption'=>'-  ملزمة الجغرافيه 2',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'jdol'){
        bot('sendphoto',[
'chat_id'=>$chat_id2,'photo'=>'https://t.me/brokmakebots/147','caption'=>'- جدول لجميع الاقسام',
]);
    bot('sendMessage',[
'chat_id'=>$chat_id2,'text'=>"
~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}
if($data == 'brokback'){ 
    bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"~ مرحباً بَك في Sixth library | مكتبة السادس 📚
~ هنا تجد كل ما تحتاجه من كتب وملازم .ووزاريات ما عليك سوى اختيار ماذا تريد .
",
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>'- قسم الادبي','callback_data'=>'adbe']],
    [['text'=>'- قسم الاحيائي','callback_data'=>'ahyaa'],['text'=>'- قسم التطبيقي','callback_data'=>'ttbe']],
    [['text'=>'- جدول لجميع الاقسام','callback_data'=>'jdol']],
    ],
    ])
]);
}