<?php 
/*
@my_oj



╭─┅─═ঊঈঊঈ═─┅╮
 (https://t.me/my_oj/87)
*/

ob_start();
error_reporting(0);
$myoj = '1414751064:AAFOxhN_twbNST9Nt9TfZHRNp71nmjaxeuE'; //توکن ربات
$t000c = "542281366"; //ایدی پشتیبان
$botid = "getlinkfile"; //ایدی ربات
define('API_KEY',$myoj);
function t000cYousefi($method,$datas=[]){$url = "https://api.telegram.org/bot".API_KEY."/".$method;$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);$res = curl_exec($ch);
if(curl_error($ch)){var_dump(curl_error($ch));}else{
return json_decode($res);}}
function sendmessage($chat_id, $text, $model){t000cYousefi('sendMessage',[
'chat_id'=>$chat_id,'text'=>$text,'parse_mode'=>$mode]);}
function senddocument($chat_id,$document,$caption){t000cYousefi('senddocument',[
'chat_id'=>$chat_id,'document'=>$document,
'caption'=>$caption]);}
function edit($chat_id,$meesage_id,$text,$reply_markup){t000cYousefi('editMessageText',[
'chat_id'=>$chat_id,'message_id'=>$message_id,
'text'=>$text,'reply_markup'=>$reply_markup]);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$first_name = $update->message->from->first_name;
$first = $update->callback_query->from->first_name;
$data = $update->callback_query->data;
$query=$update->callback_query;
$inline=$update->inline_query;
if(preg_match('/^\/([Ss]tart)/',$text)){
t000cYousefi('sendmessage', [
'chat_id' => $chat_id,
'text' =>"✨ سلام, $first_name !
فقط کافیست یک فایل تلگرام را برای من ارسال کنید و من شما را به عنوان لینک مستقیم به آن پرونده بدست می آورم تا بتوانید با استفاده از مدیر بارگیری خارجی ، مانند IDM ، ADM و غیره ، فایل را بارگیری کنید.
  

 
 

 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"کانال سورس"],['text'=>"💁🏻 کمک"]],
[['text'=>"📠 پیام به مدیریت"],['text'=>"🌟 نظر دادن به ربات"]],],

'resize_keyboard'=>true])]);}
elseif(isset($message->photo)){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = t000cYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
t000cYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ لطفا صبر کنید  ...",]);
sleep(2);
t000cYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"فایل شما با موفقیت اپلود شد ! ✅

📥 اسم فایل : $patch

🏷 حجم فایل : $siz

ℹ️از لینک های بارگیری سریع برای فایل های کوچک استفاده کنید!

❌ از فیـــــــلتر شکن جهت دانلود استفاده کنید! ❌

📍لینک شما با موفقیت ساخته شد ! جهت دانلود کلیک کنید! 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 دانلود فایل",'url'=>"https://api.telegram.org/file/bot$myoj/$patch"]],
[['text'=>"♻️ دوباره",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->sticker)){
$sticker = $message->sticker;
$file = $sticker->file_id;
$get = t000cYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
t000cYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ لطفا صبر کنید! ...",]);
sleep(2);
t000cYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"فایل شما با موفقیت اپلود شد ! ✅

📥 اسم فایل : $patch

🏷 حجم فایل : $siz

ℹ️از لینک های بارگیری سریع برای فایل های کوچک استفاده کنید!

❌ از فیـــــــلتر شکن جهت دانلود استفاده کنید! ❌

📍لینک شما با موفقیت ساخته شد ! جهت دانلود کلیک کنید! 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 دانلود فایل",'url'=>"https://api.telegram.org/file/bot$myoj/$patch"]],
[['text'=>"♻️ ریست",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->voice)){
$voice = $message->voice;
$file = $voice->file_id;
$get = t000cYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
t000cYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ لطفا صبر کنید! ...",]);
sleep(2);
t000cYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"فایل شما با موفقیت اپلود شد ! ✅

📥 اسم فایل : $patch

🏷 حجم فایل : $siz

ℹ️از لینک های بارگیری سریع برای فایل های کوچک استفاده کنید!

❌ از فیـــــــلتر شکن جهت دانلود استفاده کنید! ❌

📍لینک شما با موفقیت ساخته شد ! جهت دانلود کلیک کنید! 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 دانلود فایل",'url'=>"https://api.telegram.org/file/bot$myoj/$patch"]],
[['text'=>"♻️ ریست",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->audio)){
$audio = $message->audio;
$file = $audio->file_id;
$get = t000cYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
t000cYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ لطفا صبر کنید! ...",]);
sleep(2);
t000cYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"فایل شما با موفقیت اپلود شد ! ✅

📥 اسم فایل : $patch

🏷 حجم فایل : $siz

ℹ️از لینک های بارگیری سریع برای فایل های کوچک استفاده کنید!

❌ از فیـــــــلتر شکن جهت دانلود استفاده کنید! ❌

📍لینک شما با موفقیت ساخته شد ! جهت دانلود کلیک کنید! 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 دانلود فایل",'url'=>"https://api.telegram.org/file/bot$myoj/$patch"]],
[['text'=>"♻️ ریست",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->video)){
$video = $message->video;
$file = $video->file_id;
$get = t000cYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
t000cYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ لطفا صبر کنید! ...",]);
sleep(2);
t000cYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"فایل شما با موفقیت اپلود شد ! ✅

📥 اسم فایل : $patch

🏷 حجم فایل : $siz

ℹ️از لینک های بارگیری سریع برای فایل های کوچک استفاده کنید!

❌ از فیـــــــلتر شکن جهت دانلود استفاده کنید! ❌

📍لینک شما با موفقیت ساخته شد ! جهت دانلود کلیک کنید! 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 دانلود فایل",'url'=>"https://api.telegram.org/file/bot$myoj/$patch"]],
[['text'=>"♻️ ریست",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->document)){
$document = $message->document;
$file = $document->file_id;
$get = t000cYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
t000cYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ لطفا صبر کنید! ...",]);
sleep(2);
t000cYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"فایل شما با موفقیت اپلود شد ! ✅

📥 اسم فایل : $patch

🏷 حجم فایل : $siz

ℹ️از لینک های بارگیری سریع برای فایل های کوچک استفاده کنید!

❌ از فیـــــــلتر شکن جهت دانلود استفاده کنید! ❌

📍لینک شما با موفقیت ساخته شد ! جهت دانلود کلیک کنید! 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 دانلود فایل",'url'=>"https://api.telegram.org/file/bot$myoj/$patch"]],
[['text'=>"♻️ ریست",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif($text == "کانال سورس"){
t000cYousefi('SendMessage',['chat_id'=>$chat_id,
'text'=>"کانال سورس اواع ربات",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"سورس دیباگ و رایگان",'url'=>"https://t.me/my_oj/87"]],
],'resize_keyboard'=>true])]);}	  
elseif($text == "💁🏻 کمک"){
t000cYousefi('sendmessage', ['chat_id' => $chat_id,
'text' =>"✨ سلام, $first_name !
فقط کافیست یک فایل تلگرام را برای من ارسال کنید و من شما را به عنوان لینک مستقیم به آن پرونده بدست می آورم تا بتوانید با استفاده از مدیر بارگیری خارجی ، مانند IDM ، ADM و غیره ، فایل را بارگیری کنید.
  


  


  از هرجای تلگرام یک فایل رو فروارد کنید من به صورت لینک بهت تحویل میدم! @$t000c",]);}
elseif($text == "📠 پیام به مدیریت"){
t000cYousefi('sendmessage', ['chat_id' => $chat_id,
'text' =>"امیدواریم از ربات خوشتون اومده باشه جهت پشنهادات و انتقادات پیام بفرستید! @$t000c 

همچنین ، آن را با دوستان خود به اشتراک بگذارید 

  
مدیریت ربات 
🇮🇳@$t000c
------------
دیگر کانال ها! 
t.me/my_oj
@my_oj",]);}  
elseif($text == "🌟 نظر دادن به ربات"){ 
t000cYousefi('sendmessage', ['chat_id' => $chat_id,
'text' =>"Please Spend Few Seconds,
نظرات خود را به @s000bot  بگویید
 ",]);} 

if (is_file("error_log")){//@my_oj
unlink("error_log");}
?>
