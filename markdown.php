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
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$bot = '@'.bot('getme',['bot'])->result->username;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data     = $update->callback_query->data;

$temp = json_decode(file_get_contents('temp.json'),true);
$msg = json_decode(file_get_contents('msgs.json'),true);
if ($message->photo or $message->document or $message->video or $message->voice or $message->audio) {
    $text = $message->caption;
}
if (!file_exists('temp.json')) {
    file_put_contents("temp.json", '{}');
}if (!file_exists('msgs.json')) {
    file_put_contents("msgs.json", '{"last":1}');
}
if ($text == '/start') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• اهلا بك عزيزي في ⚜ ،
- بوت نشر وحذف وصنع انلاين + ماركداون 🔱؛",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']],
            
            ]
            ])
        ]);
}

if ($data == 'cr') {
    $temp[$chat_id2]['mode'] = 'head';
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id,
        'text'=>"• ارسل رأس الرساله ، 📩 •
• من الممكن ان تكون ؛ 
- رساله نصيه ، ملصق ، صوره ، فديو ، مقطع صوتي ، ملف ، صوره بالكتابه ، صوره متحركه ، كليشه . . . ⚜️"
        ]);
         file_put_contents('temp.json', json_encode($temp));
}
if ($temp[$chat_id]['mode'] == 'head') {
    if ($message->text) {
        $temp[$chat_id]['type'] = 'text';
        $temp[$chat_id]['text'] = $text;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));
    }
    if ($message->photo) {
        $temp[$chat_id]['type'] = 'photo';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->photo[0]->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->video) {
        $temp[$chat_id]['type'] = 'video';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->video->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->voice) {
        $temp[$chat_id]['type'] = 'voice';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->voice->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->audio) {
        $temp[$chat_id]['type'] = 'audio';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->audio->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
     if ($message->sticker) {
        $temp[$chat_id]['type'] = 'sticker';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->sticker->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
    if ($message->document) {
        $temp[$chat_id]['type'] = 'doc';
        $temp[$chat_id]['caption'] = $text;
        $temp[$chat_id]['file_id'] = $message->document->file_id;
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم الحفظ ، هل تريد اضافةه ازرار شفافةه !؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>"نعم ",'callback_data'=>'yes'],['text'=>"لا",'callback_data'=>"no"]]
                ]
                ])
            ]);
        $temp[$chat_id]['mode'] = null;
    file_put_contents('temp.json', json_encode($temp));    
    }
}
if ($data == 'no') {
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id,
        'text'=>'انتظر قليلا . . .'
        ]);
    if ($temp[$chat_id2]['type'] == 'text') {
        $msg[$msg['last'] + 1]['type'] = 'text';
        $msg[$msg['last'] + 1]['text'] = $temp[$chat_id2]['text'];
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$temp[$chat_id2]['text'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'photo') {
        $msg[$msg['last'] + 1]['type'] = 'photo';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendPhoto',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'video') {
        $msg[$msg['last'] + 1]['type'] = 'video';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendvideo',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'audio') {
        $msg[$msg['last'] + 1]['type'] = 'audio';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendaudio',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'voice') {
        $msg[$msg['last'] + 1]['type'] = 'voice';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendvoice',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'caption'=>$temp[$chat_id2]['caption'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'sticker') {
        $msg[$msg['last'] + 1]['type'] = 'sticker';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('sendsticker',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    if ($temp[$chat_id2]['type'] == 'doc') {
        $msg[$msg['last'] + 1]['type'] = 'doc';
        $msg[$msg['last'] + 1]['file_id'] = $temp[$chat_id2]['file_id'];
        $msg[$msg['last'] + 1]['caption'] = $temp[$chat_id2]['caption'];
        bot('senddocument',[
            'chat_id'=>$chat_id2,
            'file_id'=>$temp[$chat_id2]['file_id'],
            'parse_mode'=>'html'
            ]);
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
            'chat_id'=>$chat_id2,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    }
    $temp[$chat_id2]['type'] = null;
    $temp[$chat_id2]['mode'] = null;
    $temp[$chat_id2]['text'] = null;  
    $temp[$chat_id2]['caption'] = null;
    $temp[$chat_id2]['file_id']= null;
    file_put_contents('temp.json', json_encode($temp));
    file_put_contents('msgs.json', json_encode($msg));
}
if ($data == "yes") {
    $temp[$chat_id2]['mode'] = 'keyboard';
    file_put_contents('temp.json', json_encode($temp));
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id,
        'text'=>"• قم بارسال قائمة الازرار هكذا 🚩 •

النص = الرابط
النص = الرابط , النص = الرابط
النص = الرابط , النص = الرابط , النص = الرابط

مثال .. 
text = t.me
text = t.me , text = t.me
text = t.me , text = t.me , text = t.me"
        ]);
}
if ($text != '/start' and $temp[$chat_id]['mode']=='keyboard') {
    $i=0;
    $keyboard = [];
    $keyboard["inline_keyboard"] = [];
    $rows = explode("\n",$text);
        foreach($rows as $row){
            $j=0;
            $keyboard["inline_keyboard"][$i]=[];
            $bottons = explode(",",$row);
                foreach($bottons as $botton){
                    $data = explode("=",$botton."=");
                    $Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
                    $keyboard["inline_keyboard"][$i][$j] = $Ibotton;
                    $j++;
                }
                $i++;
            }
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'انتظر قليلا . . .'
        ]);
    $reply_markup=json_encode($keyboard);
    if ($temp[$chat_id]['type'] == 'text') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$temp[$chat_id]['text'],
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
    $msg[$msg['last']]['text'] = $temp[$chat_id]['text'];
    $msg[$msg['last']]['type'] = 'text_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'photo') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendPhoto',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'html',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'photo_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
   
    if ($temp[$chat_id]['type'] == 'voice') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendvoice',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'html',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'voice_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'audio') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendaudio',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'html',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'audio_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'sticker') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendsticker',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'sticker_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'doc') {
        $msg['last'] = $msg['last'] + 1;
        bot('senddocument',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'doc_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    if ($temp[$chat_id]['type'] == 'video') {
        $msg['last'] = $msg['last'] + 1;
        bot('sendvideo',[
        'chat_id'=>$chat_id,
        'file_id'=>$temp[$chat_id]['file_id'],
        'caption'=>$temp[$chat_id]['caption'],
        'parse_mode'=>'html',
        'reply_markup'=>($reply_markup)
        ]);
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot.' '.$msg['last'],
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'- انشاء رسالةه جديدة 📨 -','callback_data'=>'cr']]]])
            ]);
    
        $msg[$msg['last']]['file_id'] = $temp[$chat_id]['file_id'];
        $msg[$msg['last']]['caption'] = $temp[$chat_id]['caption'];
    $msg[$msg['last']]['type'] = 'video_keyboard';
    $msg[$msg['last']]['reply_markup'] = $keyboard;
    }
    $temp[$chat_id]['type'] = null;
    $temp[$chat_id]['mode'] = null;
    $temp[$chat_id]['text'] = null;  
    $temp[$chat_id]['caption'] = null;
    $temp[$chat_id]['file_id']= null;
    file_put_contents('temp.json', json_encode($temp));
    file_put_contents("msgs.json", json_encode($msg));
}
$inline = $update->inline_query->query;
if ($inline) {
    $type = $msg[$inline]['type'];
    if ($type == 'text_keyboard') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>$msg[$inline]['text']],
            'reply_markup'=>$msg[$inline]['reply_markup']
          ]])
        ]);
    }
    if ($type == 'text') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>$msg[$inline]['text']],
          ]])
        ]);
    }
    if ($type == 'voice') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'voice_keyboard') {
       if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'voice',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'voice_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'photo') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'photo_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'photo',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'photo_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'sticker') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'sticker',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'sticker_file_id'=>$msg[$inline]['file_id'],

          ]])
        ]);
    }
    if ($type == 'sticker_keyboard') {
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'sticker',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'sticker_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
          ]])
        ]);
    }
    if ($type == 'audio') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'audio_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'audio',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'audio_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'video') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'video_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'video_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'video_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'video_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'video',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'video_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
    if ($type == 'doc_keyboard') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'document_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'document_file_id'=>$msg[$inline]['file_id'],
                'reply_markup'=>$msg[$inline]['reply_markup'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
     if ($type == 'doc') {
        if($msg[$inline]['caption'] != null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'document_file_id'=>$msg[$inline]['file_id'],
                'caption'=>$msg[$inline]['caption'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
        if($msg[$inline]['caption'] == null){
        bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'document',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"- اضغط لارسال المنشور ،",
                'document_file_id'=>$msg[$inline]['file_id'],
                'input_message_content'=>['parse_mode'=>'HTML'],
          ]])
        ]);
        }
    }
}
$chs = json_decode(file_get_contents('ch.json'),true);
$d = json_decode(file_get_contents('d.json'),true);
if ($message->forward_from_chat) {
    $ok = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$message->forward_from_chat->id))->ok;
    if ($ok == true) {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>'- القناه ، @'.$message->forward_from_chat->username."\n - تم اضافتها ؛ "
        ]);
        $chs[] = '@'.$message->forward_from_chat->username;
        file_put_contents('ch.json', json_encode($chs));
    } else {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- البوت ليس ادمن ؛ "
        ]);
    }
}
if (preg_match('/^\/send .*/', $text)) {
    $text = trim(str_replace('/send ', '', $text));
    if ($msg[$text]['type'] != null) {
        $s = str_shuffle("ABCD1234");
        $a = str_shuffle("EFGHI5678");
        foreach ($chs as $key => $value) {
            if ($msg[$text]['type'] == 'text') {
                $p = bot('sendMessage',[
                    'chat_id'=>$value,
                    'text'=>$msg[$text]['text'],
                    'parse_mode'=>'html',
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            } elseif ($msg[$text]['type'] == 'text_keyboard') {
               $p = bot('sendMessage',[
                    'chat_id'=>$value,
                    'text'=>$msg[$text]['text'],
                    'parse_mode'=>'html',
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
               
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            } elseif($msg[$text]['type'] == 'photo') {
                $p = bot('sendphoto',[
                    'chat_id'=>$value,
                    'photo'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }elseif($msg[$text]['type'] == 'photo_keyboard') {
                $p = bot('sendphoto',[
                    'chat_id'=>$value,
                    'photo'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'audio' ) {
                $p = bot('sendaudio',[
                    'chat_id'=>$value,
                    'audio'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }elseif($msg[$text]['type'] == 'audio_keyboard') {
                $p = bot('sendaudio',[
                    'chat_id'=>$value,
                    'audio'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'voice' ) {
                $p = bot('sendvoice',[
                    'chat_id'=>$value,
                    'voice'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'voice_keyboard') {
                $p = bot('sendvoice',[
                    'chat_id'=>$value,
                    'voice'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'doc') {
                $p = bot('senddocument',[
                    'chat_id'=>$value,
                    'document'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'doc_keyboard') {
                $p = bot('senddocument',[
                    'chat_id'=>$value,
                    'document'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'video' ) {
                $p = bot('sendvideo',[
                    'chat_id'=>$value,
                    'video'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
                file_put_contents('d.json', json_encode($d));
            }elseif( $msg[$text]['type'] == 'video_keyboard') {
                $p = bot('sendvideo',[
                    'chat_id'=>$value,
                    'video'=>$msg[$text]['file_id'],
                    'caption'=>$msg[$text]['caption'],
                    'parse_mode'=>'html',
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            elseif($msg[$text]['type'] == 'sticker' ) {
                $p = bot('sendsticker',[
                    'chat_id'=>$value,
                    'sticker'=>$msg[$text]['file_id'],
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }elseif( $msg[$text]['type'] == 'sticker_keyboard') {
                $p = bot('sendsticker',[
                    'chat_id'=>$value,
                    'sticker'=>$msg[$text]['file_id'],
                    'reply_markup'=>json_encode($msg[$text]['reply_markup'])
                ]);
                
               $d[$s.'-'.$a] =  [$p->result->message_id => $p->result->chat->id];
               file_put_contents('d.json', json_encode($d));
            }
            bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- للحذف ارسل ، \n /del ".$s.'-'.$a
        ]);
        }
    } else {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- لم يتم العثور على الكود ؛ "
        ]);
    }
}
if (preg_match('/^\/del .*/', $text)) {
    $text = trim(str_replace('/del ', '', $text));
   foreach ($d[$text] as $key => $value) {
       bot('deletemessage',[
        'chat_id'=>$value,
        'message_id'=>$key
       ]);
       $d[$text] = null;
       file_put_contents('d.json', json_encode($d));
   }
}
if (preg_match('/\/delch .*/', $text)) {
    $text = trim(str_replace('/delch ', '', $text));
    if (in_array($text, $chs)) {

        $s = str_replace('"@'.$text.'",', '', file_get_contents("ch.json"));
        file_put_contents("d.json", $s);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>'- القناه ، '.$text."\n - تم حذفها ؛ "
        ]);
    } else {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"- لم يتم العثور على القناه ؛ "
        ]);
    }   
}
