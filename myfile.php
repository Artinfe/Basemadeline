<?php
define('MADELINE_BRANCH', '5.1.34');
ini_set('memory_limit', '1096M');
ini_set('display_errors', 0);
ini_set('memory_limit', -1);
ini_set('max_execution_time', 300);
if(!is_dir('files')){
mkdir('files');
}

if(!file_exists('madeline.php')){
copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

if(!file_exists('list/zaman.txt')){ 
               file_put_contents('list/zaman.txt',"off"); 
               }
if(!file_exists('online.txt')){
file_put_contents('online.txt','off');
}
if(!file_exists('time.txt')){
file_put_contents('time.txt','off');
}
if(!file_exists('Auto_restart.txt')){
file_put_contents('Auto_restart.txt', '');
}
if(!file_exists('list/ban.txt')){
     file_put_contents('list/ban.txt',"𝑩𝒂𝒏𝒆𝒅=>✅ 𝑼𝒏𝑩𝒂𝒏𝒆𝒅=>❌\n");
}

     if(!file_exists('list/vip.txt')){
          file_put_contents('list/vip.txt',"𝑽𝒊𝒑=>✅ 𝑼𝒏𝑽𝒊𝒑=>❌\n ");
          }

          if(!file_exists('list/mute.txt')){
               file_put_contents('list/mute.txt',"𝑴𝒖𝒕𝒆=>✅ 𝑼𝒏𝑴𝒖𝒕𝒆𝒅=>❌\n");
               }
include 'madeline.php';
$settings = [];
$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>1104347,'api_hash'=> 'edc1c6ab012c4191f7fa81a1bdfc27e7']];
$MadelineProto = new \danog\MadelineProto\API('oghabi.madeline', $settings);
$MadelineProto->start();
include 'jdf.php';
if(file_get_contents('list/zaman.txt') == 'on'){ 
date_default_timezone_set('Asia/Tehran'); 
    $time = date("H:i"); 
    $fonts = [["𝟶","𝟷","𝟸","𝟹","𝟺","𝟻","𝟼","𝟽","𝟾","𝟿​"], 
 ["𝟘","𝟙","𝟚","𝟛","𝟜","𝟝"," 𝟞","𝟟","𝟠","𝟡"], 
["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨"], 
["0"," 1","2","3","4","5","6","7","8","9"], 
["𝟬","𝟭","𝟮","𝟯","𝟰","𝟱","𝟲","𝟳","𝟴","𝟵"]]; 
 
//--------------------------------------------https://t.me/TAR_KESH---------------------------------- 
 $time = date("H:i"); 
    $time2 = str_replace(range(0,5),$fonts[array_rand($fonts)],date("H:i")); 
    $day_number = jdate('j'); 
    $month_number = jdate('n'); 
    $year_number = jdate('y'); 
    $day_name = jdate('l'); 
 
    $name = ["◍◍🅚🅘🅝🅖᷍⸎🌙❭","உⷮ ⷩ ⷷ🚸..½↠⃗🅚̪̪̪̪̪🅘̪̻͖̪̻͖🅝̪̪̪̪̪🅖̪̻͖̪̻͖͎⍖͞↱̶͞👑↲","≧⋮⃟꙰♥️⃟꙰🄺ְְ֔֔🄸ִ֗🄽ְְ֔֔🄶ִ֗≧⋮⃟꙰♥️⃟꙰↰"
,"༺ད༵ྃཌ༵ྃ༎ྂ🅚֘֘🅘ֶֶ🅝֘֘🅖ֶֶ༎ྂད༵ྃཌ༵ྃ༻","𖠄KٖIٖ⃟NٖGٖᵇᵒʸ҉","𝄄ⵂ𝄄⃟𝄄ⵂ𝄄꯭𝑒ꠋꠋ♚⃯ꠋ🅚̉🅘͇🅝̉🅖꯭͇͞♚⃯※ꠋꠋ𝄄ꠋⵂ𝄄⃟ꠋꠋ𝄄ⵂ𝄄","𖣔ٜ̽❰͞͞🧱❱🅚͝͝🅘͜🅝͝͝🅖͜𖣔ٜ̽❰͞͞🧱❱","͟͞≫͟͞☄ⓚ̅͜ⓘ̅͜ⓝ̅͜ⓖ̅͜☄͟͟͞͞≫͟͞","✩☆🅚͝͝🅘͜🅝͝͝🅖͜☆✩ "];
$bs="↬";
$br="️↫";

$ns="◄►";
$nr="◄►";
$n = $name[rand(0, count($name)-1)]; 
$MadelineProto->account->updateProfile(['first_name' => "$n$ns$time2$nr"]); 
$MadelineProto->account->updateProfile(['about' => "️$br$time2$bs"]); 
}

if(file_get_contents('online.txt') == 'on'){
$MadelineProto->account->updateStatus(['offline' => false]);
}
function closeConnection($message = 'HipHip...<br>TORBU_TM')
{
if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
return;
}
  @ob_end_clean();
  header('Connection: close');
  ignore_user_abort(true);
  ob_start();
  echo '<html><body><h1 style="margin-top:50px; text-align:center; color:white; text-shadow:1px 1px 15px black;">'.$message.'</h1></body</html>';
  $size = ob_get_length();
  header("Content-Length: $size");
  header('Content-Type: text/html');
  ob_end_flush();
  flush();
  $GLOBALS['exited'] = true;
}
function shutdown_function($lock)
{
  $a = fsockopen((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'tls' : 'tcp').'://'.$_SERVER['SERVER_NAME'], $_SERVER['SERVER_PORT']);
  fwrite($a, $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n".'Host: '.$_SERVER['SERVER_NAME']."\r\n\r\n");
  flock($lock, LOCK_UN);
  fclose($lock);
}

if (!file_exists('bot.lock')) {
touch('bot.lock');
}
$lock = fopen('bot.lock', 'r+');
$try = 1;
$locked = false;
while (!$locked) {
$locked = flock($lock, LOCK_EX | LOCK_NB);
if (!$locked) {
closeConnection();
if ($try++ >= 30) {
exit;
}
 sleep(1);
}
}
if(!file_exists('data.json')){
 file_put_contents('data.json', '{"power":"on","adminStep":"","typing":"off","zbt":"off","bold":"off","code":"off","lockpv":"off","time":"off","italic":"off","time":"off","mono":"off","poker":"off","akhri":"00:00:00","men":"off","men2":"off","part":"off","gamepv":"off","tag":"off","autochat":"off","under":"off","game":"off","strike":"off","fa1":"off","fa2":"off","khali":"off","fa3":"off","fa4":"off","fa5":"off","fa6":"off","fa7":"off","en1":"off","en2":"off","en3":"off","en4":"off","en5":"off","en6":"off","en7":"off","en8":"off","en9":"off","runf":"on","echo":"off","markread":"off","enemies":[],"answering":[]}');
}
class EventHandler extends \danog\MadelineProto\EventHandler
{
public function __construct($MadelineProto){
parent::__construct($MadelineProto);
}
public function onUpdateSomethingElse($update)
{
if (isset($update['_'])){
  if ($update['_'] == 'updateNewMessage'){
  onUpdateNewMessage($update);
  }
  else if ($update['_'] == 'updateNewChannelMessage'){
  onUpdateNewChannelMessage($update);
}
}
}

public function onUpdateNewChannelMessage($update)
{
 yield $this->onUpdateNewMessage($update);
}
public function onUpdateNewMessage($update){
$from_id = isset($update['message']['from_id']) ? $update['message']['from_id']:'';
  try {
 if(isset($update['message']['message'])){
 $text = $update['message']['message'];
 $msg_id = $update['message']['id'];
 $message = isset($update['message']) ? $update['message']:'';
 $MadelineProto = $this;
 date_default_timezone_set('Asia/Tehran');
 $time = date('H:i:s');
 $me = yield $MadelineProto->get_self();
 $admin = $me['id'];
 $chID = yield $MadelineProto->get_info($update);
 $peer = $chID['bot_api_id'];
 $type3 = $chID['type'];
 $time1=file_get_contents("time.txt");
 @$data = json_decode(file_get_contents("data.json"), true);
 $step = $data['adminStep'];
 if($from_id == $admin){
 if($text == '/exit;'){
  exit;
 }
   if(preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text, $m);
     $data['power'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Bot mode is now $m[2]</b>", 'parse_mode'=> 'HTML']);
   }
   
   if(preg_match("/^[\/\#\!]?(online) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(online) (on|off)$/i", $text, $m);
  file_put_contents('online.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Online mode is now $m[2]</b>", 'parse_mode'=> 'HTML']);
   }
   if(preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text, $m);
     $data['poker'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔸Poker mode is now $m[2]"]);
   }
if(preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text, $m);
$data['bold'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Bold mode is now $m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(code) (on|off)$/i", $text)){
          preg_match("/^[\/\#\!]?(code) (on|off)$/i", $text, $m);
          $data['code'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔸Code mode is now $m[2]"]);
          }
          if(preg_match("/^[\/\#\!]?(zaman) (on|off)$/i", $text)){ 
  preg_match("/^[\/\#\!]?(zaman) (on|off)$/i", $text, $m); 
  file_put_contents('list/zaman.txt', $m[2]); 
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔸Zaman mode is now $m[2]"]); 
   }
if(preg_match("/^[\/\#\!]?(under) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(under) (on|off)$/i", $text, $m);
$data['under'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Under mode is now $m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(mono) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(mono) (on|off)$/i", $text, $m);
$data['mono'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Mono mode is now$m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(men) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(men) (on|off)$/i", $text, $m);
$data['men'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Men mode is now $m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(tag) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(tag) (on|off)$/i", $text, $m);
$data['tag'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Tag mode is now$m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(zbt) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(zbt) (on|off)$/i", $text, $m);
$data['zbt'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Zbt mode is now$m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $text, $m);
     $data['gamepv'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "GᗩᗰIᑎGᑭᐯ 🗽ᗰOᗪE ᑎOᗯ $m[2]"]);
     }
if(preg_match("/^[\/\#\!]?(strike) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(strike) (on|off)$/i", $text, $m);
$data['strike'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Strike mode is now$m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text, $m);
$data['italic'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Italic mode is now$m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(men2) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(men2) (on|off)$/i", $text, $m);
$data['men2'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Men2 mode is now$m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(game) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(game) (on|off)$/i", $text, $m);
$data['game'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<b>🔸Game mode is now $m[2]</b>", 'parse_mode'=> 'HTML']);}
if(preg_match("/^[\/\#\!]?(time) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(time) (on|off)$/i", $text, $m);
     $data['time'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     if($m[2] == "on"){
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Time Now is On"]);   
   }else{
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Time Now is Off"]);
}}
      if(preg_match("/^[\/\#\!]?(fa1) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa1) (on|off)$/i", $text, $m);
     $data['fa1'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN1 FONT MODE IS $m[2]"]);
	 
   }
   if(preg_match("/^[\/\#\!]?(fa2) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa2) (on|off)$/i", $text, $m);
     $data['fa2'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN2 FONT MODE IS $m[2]"]);
	 
   }
   if(preg_match("/^[\/\#\!]?(fa3) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa3) (on|off)$/i", $text, $m);
     $data['fa3'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN3 FONT MODE IS $m[2]"]);
	 
   } 
   if(preg_match("/^[\/\#\!]?(fa4) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa4) (on|off)$/i", $text, $m);
     $data['fa4'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN4 FONT MODE IS $m[2]"]);
	 
   } 
   if(preg_match("/^[\/\#\!]?(fa5) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa5) (on|off)$/i", $text, $m);
     $data['fa5'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN5 FONT MODE IS $m[2]"]);
	 
   } 
   if(preg_match("/^[\/\#\!]?(fa6) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa6) (on|off)$/i", $text, $m);
     $data['fa6'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN6 FONT MODE IS $m[2]"]);
	 
   }
         if(preg_match("/^[\/\#\!]?(en2) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en2) (on|off)$/i", $text, $m);
     $data['en2'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH1 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en3) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en3) (on|off)$/i", $text, $m);
     $data['en3'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH3 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en4) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en4) (on|off)$/i", $text, $m);
     $data['en4'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH4 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en5) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en5) (on|off)$/i", $text, $m);
     $data['en5'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH5 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en6) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en6) (on|off)$/i", $text, $m);
     $data['en6'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH6 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en7) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en7) (on|off)$/i", $text, $m);
     $data['en7'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH7 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en8) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en8) (on|off)$/i", $text, $m);
     $data['en8'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH8 FONT MODE IS $m[2]"]);
	 
   } 
      if(preg_match("/^[\/\#\!]?(en9) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en9) (on|off)$/i", $text, $m);
     $data['en9'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH9 FONT MODE IS $m[2]"]);
	 
   } 

     if(preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text)){
          preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text, $m);
          $data['lockpv'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "lock pv now Is $m[2]"]);
        }
 if ($text == 'list run' or $text == 'لیست فعال') {
$fontfa1 = $data['fa1'];
$fontfa2 = $data['fa2'];
$fontfa3 = $data['fa3'];
$fontfa4 = $data['fa4'];
$fontfa5 = $data['fa5'];
$fontfa6 = $data['fa6'];
$fontfa7 = $data['fa7'];
$fonten1 = $data['en1'];
$fonten2 = $data['en2'];
$fonten3 = $data['en3'];
$fonten4 = $data['en4'];
$fonten5 = $data['en5'];
$fonten6 = $data['en6'];
$fonten7 = $data['en7'];
$fonten8 = $data['en8'];
$fonten9 = $data['en9'];
     $typings =$data['typing'];
     $gemepvs=$data['gamepv'];
    $hashtags =$data['tag'];
    $codes =$data ['code'];
    $pokers =$data ['poker'];
     $parts =$data ['part'];
    $monos =$data['mono'];
    $audios =$data['zbt'];
    $mens =$data['men'];
    $unders =$data['under'];
    $bolds =$data['bold'];
    $italics =$data['italic'];
    $echos =$data['echo'];
    $men2s =$data['men2'];
    $markreads =$data['markread'];
    $gamings =$data['game'];
    $strikes =$data['strike'];
$lockpvs=$data['strike'];
   


if( $typings == "on"){$fa11 = "✓";}
if( $typings == "off"){$fa11 = "✗";}
if($gemepvs == "on"){$fa12 = "✓";}
if($gemepvs == "off"){$fa12 = "✗";}
if($hashtags == "on"){$fa13 = "✓";}
if($hashtags == "off"){$fa13 = "✗";}
if( $codes == "on"){$fa14 = "✓";}
if( $codes == "off"){$fa14 = "✗";}
if($pokers == "on"){$fa15 = "✓";}
if($pokers == "off"){$fa15 = "✗";}
if($parts == "on"){$fa16 = "✓";}
if($parts == "off"){$fa16 = "✗";}
if($monos == "on"){$fa17 = "✓";}
if($monos == "off"){$fa17 = "✗";}
if($audios == "on"){$fa18 = "✓";}
if($audios == "off"){$fa18 = "✗";}
if($mens == "on"){$fa19 = "✓";}
if($mens == "off"){$fa19 = "✗";}
if($unders == "on"){$fa21 = "✓";}
if($unders == "off"){$fa21 = "✗";}
if($bolds == "on"){$fa22 = "✓";}
if($bolds == "off"){$fa22 = "✗";}
if($italics == "on"){$fa23 = "✓";}
if($italics == "off"){$fa23 = "✗";}
if($echos == "on"){$fa24 = "✓";}
if($echos == "off"){$fa24= "✗";}
if($men2s == "on"){$fa25 = "✓";}
if($men2s == "off"){$fa25 = "✗";}
if($markreads == "on"){$fa26 = "✓";}
if($markreads == "off"){$fa26 = "✗";}
if($gamings == "on"){$fa27 = "✓";}
if($gamings == "off"){$fa27 = "✗";}
if($strikes == "on"){$fa28 = "✓";}
if($strikes == "off"){$fa28 = "✗";}
if($lockpvs == "on"){$fa29 = "✓";}
if($lockpvs == "off"){$fa29 = "✗";}
if($fontfa1 == "on"){$fa1 = "✓";}
if($fontfa1 == "off"){$fa1 = "✗";}
if($fontfa2 == "on"){$fa2 = "✓";}
if($fontfa2 == "off"){$fa2 = "✗";}
if($fontfa3 == "on"){$fa3 = "✓";}
if($fontfa3 == "off"){$fa3 = "✗";}
if($fontfa4 == "on"){$fa4 = "✓";}
if($fontfa4 == "off"){$fa4 = "✗";}
if($fontfa5 == "on"){$fa5 = "✓";}
if($fontfa5 == "off"){$fa5 = "✗";}
if($fontfa6 == "on"){$fa6 = "✓";}
if($fontfa6 == "off"){$fa6 = "✗";}
if($fontfa7 == "on"){$fa7 = "✓";}
if($fontfa7 == "off"){$fa7 = "✗";}
if($fonten1 == "on"){$en1 = "✓";}
if($fonten1 == "off"){$en1 = "✗";}
if($fonten2 == "on"){$en2 = "✓";}
if($fonten2 == "off"){$en2 = "✗";}
if($fonten3 == "on"){$en3 = "✓";}
if($fonten3 == "off"){$en3 = "✗";}
if($fonten4 == "on"){$en4 = "✓";}
if($fonten4 == "off"){$en4 = "✗";}
if($fonten5 == "on"){$en5 = "✓";}
if($fonten5 == "off"){$en5 = "✗";}
if($fonten6 == "on"){$en6 = "✓";}
if($fonten6 == "off"){$en6 = "✗";}
if($fonten7 == "on"){$en7 = "✓";}
if($fonten7 == "off"){$en7 = "✗";}
if($fonten8 == "on"){$en8 = "✓";}
if($fonten8 == "off"){$en8 = "✗";}
if($fonten9 == "on"){$en9 = "✓";}
if($fonten9 == "off"){$en9 = "✗";}

  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "لیست فونت ها به ترتیب زیر است.

<b>•تایپینگ</b> = {<b> $fa11 </b>}
<b>•گیم پیوی</b> = {<b> $fa12 </b>}
<b>•هشتگ</b> = {<b> $fa13 </b>}
<b>•کد</b> = {<b> $fa14 </b>}
<b>•پوکر</b> = {<b> $fa15 </b>}
<b>•پارت</b> = {<b> $fa16 </b>}
<b>•مونوس</b> = {<b> $fa17 </b>}
<b>•صدا</b> = {<b> $fa18 </b>}
<b>•مینز</b> = {<b> $fa19 </b>}
<b>•زیرخط</b> = {<b> $fa21</b>}
<b>•بولد</b> = {<b> $fa22 </b>}
<b>•ایتالیک</b> = {<b> $fa23 </b>}
<b>•اکو</b> = {<b> $fa24 </b>}
<b>•مین 2</b> = {<b> $fa25 </b>}
<b>•مارکدون</b> = {<b> $fa26 </b>}
<b>•گیم</b> = {<b> $fa27 </b>}
<b>•استریک</b> = {<b> $fa28 </b>}
<b>•قفل پیوی</b> = {<b> $fa29 </b>}
<b>•فونت فارسی ¹ </b> = {<b> $fa1 </b>}
<b>•فونت فارسی² </b> = {<b> $fa2 </b>}
<b>•فونت فارسی³ </b> = {<b> $fa3 </b>}
<b>•فونت فارسی⁴ </b> = {<b> $fa4 </b>}
<b>•فونت فارسی⁵ </b> = {<b> $fa5 </b>}
<b>•فونت فارسی⁶ </b> = {<b> $fa6 </b>}
<b>•فونت فارسی⁷ </b> = {<b> $fa7 </b>}
<b>•فونت انگلیسی¹ </b> = {<b> $en1 </b>}
<b>•فونت انگلیسی² </b> = {<b> $en2 </b>}
<b>•فونت انگلیسی³ </b> = {<b> $en3 </b>}
<b>•فونت انگلیسی⁴ </b> = {<b> $en4 </b>}
<b>•فونت انگلیسی⁵ </b> = {<b> $en5 </b>}
<b>•فونت انکلیسی⁶ </b> = {<b> $en6 </b>}
<b>•فونت انکلیسی⁷ </b> = {<b> $en7 </b>}
<b>•فونت انگلیسی⁸ </b> = {<b> $en8 </b>}
<b>•فونت انگلیسی⁹ </b> = {<b> $en9 </b>}


", 'parse_mode' => 'html' ]);
 }
   if(preg_match("/^[\/\#\!]?(fa7) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(fa7) (on|off)$/i", $text, $m);
     $data['fa7'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "PARSIAN7 FONT MODE IS $m[2]"]);
	 
   }    
      if(preg_match("/^[\/\#\!]?(en1) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(en1) (on|off)$/i", $text, $m);
     $data['en1'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ENGLISH1 FONT MODE IS $m[2]"]);
	 
   } 
if(preg_match("/^[\/\#\!]?(screen) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(screen) (.*)$/i", $text, $m);

$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ɢᴇᴛᴛɪɴɢ ꜱᴄʀᴇᴇɴꜱʜᴏᴛ ꜰʀᴏᴍ ⁅ $m[2] ⁆ ᴡᴇʙ ꜱɪᴛᴇ :-)",'parseMarkDown_mode'=>""]);

$ound = "https://api.codebazan.ir/webshot/?text=1000&domain=".$mi;
$inputMediaGifExternal = ['_' => 'inputMediaGifExternal', 'url' => $ound];
$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal ,'reply_to_msg_id' => $msg_id,'message' => "اسکرین شات از سایت مورد نظر آماده شد 📸"]);
}
if(preg_match("/^[\/\#\!]?(webping) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(webping) (.*)$/i", $text, $m);
if($type3 == "supergroup" or $type3 == "chat" or $type3 == 'user'){
$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ɢᴇᴛᴛɪɴɢ ᴘɪɴɢ ꜰʀᴏᴍ ⁅ $m[2] ⁆ ᴡᴇʙꜱɪᴛᴇ :-)",'parse_mode'=>"MarkDown"]);
$r = file_get_contents("https://api.codebazan.ir/ping/?url=".$mi);
if($r != NULL){
    
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
ᴡᴇʙꜱɪᴛᴇ ᴘɪɴɢ ɪꜱ $r !!!
",
'parse_mode' => 'HTML','reply_to_msg_id' => $msg_id]);
}else{
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
 𝑌𝑜𝑢𝑟 𝐴𝑑𝑑𝑟𝑒𝑠 𝐼𝑠 ɪɴᴠᴀʟɪᴅ !
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id]);
}
}
}

 
if($text=='bk2' or $text=='بکیرمم' or $text=='bekiram'){
$bk = ["🇮🇷","✅","😒","👅","😈","💦","💋","🧿","♾","♻️","✊🏻","🤪","🚫","👽","🐆","🕊","⚘","🌵","🍭","🍩","🎈","🎃","🎁","🎗","🧸","💎","🎵","📟","📯","💻","🔋","📀","🪔","📚","💰","💳","🗂","📍","🔫","🛡","🩸","🗑","📿","⛔️","🚸","☣️","🔆","✳️","#️⃣","ℹ️","🔘","🔹️","❗️","❕","⚠️","🎒","🎏","🎯","🃏","🧱","🌐","♨️","💋","🚦","🚧","⚓️","🪂","🛰","🚀","🛸","⏳","🍌","🥕","👑","😎","🎩","😂","💀","🍓","🌭","🔪","☕️","🍔","🐌","🐝","🐉","🦈","🐙","🐠","🦉","🦇","🦅","🐍","🕸","😴","🤯","😳","☠️","🤖","👻","😼","💫","🕳","👨🏻‍💻",];
$Aa = $bk[rand(0, count($bk)-1)];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
$Aa$Aa$Aa$Aa 
$Aa               $Aa
$Aa                  $Aa
$Aa               $Aa
$Aa$Aa$Aa$Aa  
$Aa               $Aa
$Aa                  $Aa
$Aa               $Aa
$Aa$Aa$Aa$Aa"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
$Aa          $Aa
$Aa       $Aa
$Aa    $Aa
$Aa $Aa
$Aa
$Aa $Aa
$Aa    $Aa
$Aa       $Aa
$Aa          $Aa"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
$Aa$Aa$Aa$Aa        $Aa                $Aa
$Aa              $Aa      $Aa             $Aa
$Aa                 $Aa   $Aa          $Aa
$Aa              $Aa      $Aa        $Aa
$Aa$Aa$Aa$Aa       $Aa     $Aa
$Aa              $Aa      $Aa       $Aa
$Aa                 $Aa   $Aa          $Aa
$Aa              $Aa      $Aa             $Aa
$Aa$Aa$Aa$Aa        $Aa                $Aa"]);
}
if ($text == 'رقص2' or $text == 'دنس2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~( ._.)--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--(._. )~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~( ._.)--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--(._. )~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~( ._.)--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--(._. )~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)-~"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "-~(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~-(._. )--"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "--( ._.)~-"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "~~(._.)~~"]);}
if ($text == 'دانستنی' or $text=='danestani'  or $text=='danestani ') {
yield $MadelineProto->messages->sendMedia([
  'peer'  => $update,
    'media' => [
        '_' => 'inputMediaUploadedPhoto',
        'file' => 'http://api.codebazan.ir/danestani/pic/'
    ],
    'message' => 'دانستنی بخون اطلاعاتت زیاد شه ',
    'parse_mode' => 'HTML'
]);
}


if($text == "عید" or $text=='eyd'){ 

$eyd = file_get_contents('https://api.codebazan.ir/new-year'); 
$result = json_decode($eyd, true);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message'=> " شاید باورت نشه ولی دقیقا *".$result['day']."* روز و *".$result['hour']."* ساعت و *".$result['min']."*  دقیقه و *".$result['sec']."*  ثانیه مونده که عید برسه 😃😁🤩", 
'parse_mode' => 'MarkDown',
'reply_to_msg_id' => $message['id']
]); 
}


if($text == "ایا میدانید" or $text=='aya midanid'){ 

$aya = file_get_contents('https://api.keybit.ir/ayamidanid'); 
$ayaa = json_decode($aya, true);
    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=>" ایا میدانید : \n".$ayaa["text"].""]); 
}


if($text == "پ ن پ" or $text=='pnp'){ 

$pnp = file_get_contents('https://api.codebazan.ir/jok/pa-na-pa'); 
    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=>" پ ن پ : \n$pnp"]); 
}
if($text == "دیالوگ" or $text=='dialog'){ 

$dialog = file_get_contents('https://api.codebazan.ir/dialog'); 

    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=>" دیالوگ مورد نظر شما : \n$dialog"]); 
}
if($text == "داستان" or $text=='dastan'){ 

$dastan = file_get_contents('https://api.codebazan.ir/dastan'); 

    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=>" داسترن مورد نظر شما : \n$dastan"]); 
}
if($text == "بیو" or $text=='bio'){ 

$biografi = file_get_contents('http://api.codebazan.ir/bio'); 

    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=>" 𝖇𝖎𝖔 : \n$biografi"]); 
}
if($text == "ذکر" or $text=='Zekr'){ 

$zekr = file_get_contents('http://api.codebazan.ir/zekr'); 

    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id,'message'=>"ذکر امروز  : \n$zekr"]); 
} 
if($text == "حدیث" or $text=='hadis'){ 

$hadis = file_get_contents('https://api.codebazan.ir/hadis'); 

    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id,'message'=>"حدیث مورد نظر شما : \n$hadis"]); 
}
if($text == "خاطره" or $text=='khatereh'){ 

$khatereh = file_get_contents('https://api.codebazan.ir/jok/khatere'); 

    yield $MadelineProto->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=>" خاطره ماندگار مورد نظر شما : \n$khatereh"]); 
}

if ($text == ':)' or $text==':/'  or $text==':|') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":/"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":("]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":)"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "|:"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":/"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "/:"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":/"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":("]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":|"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":("]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "(:"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":("]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":)"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":("]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":/"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":|"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":)"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":("]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ":)"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😐"]);}

if (preg_match("/^[\/\#\!]?(تگ)(.*)$/i", $text)) {
     $chat = yield $this->getPwrChat($peer);
     $chats = $chat['participants'];
     while (sizeof($chats) >= 100) {
          $spl = $chats;
          $Safa = false;
          $chats = array_splice($spl, 100);
          foreach ($spl as $number => $up) {
              $id = $up['user']['id'];
              $Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";
          }
          yield $this->messages->sendMessage([
               'peer' => $peer,
               'message' => "balalllllllllll: \n$Safa",
               'parse_mode' => 'Markdown'
          ]);
     }
     $Safa = false;
     foreach ($chats as $number => $up) {
         $id = $up['user']['id'];
         if ($up['user']['type'] == "user")
               $Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";
      }
      yield $this->messages->sendMessage([
           'peer' => $peer,
           'message' => "bala Bashin : \n$Safa",
           'parse_mode' => 'Markdown'
      ]);
      return;
}
if ($text == 'proxy' or $text == 'proxy' or $text == 'پروکسی میخوام' or $text == 'proxy bde' or $text == 'proxy' or $text == 'پروکس' or $text == 'پروکصی') {
           $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
           http://api.codebazan.ir/mtproto/?type=html&channel=ProxyMTProto
           پروکسی میخوای بزن رولینک بگیر"]);
           }
if ($text == 'بشمار' or $text=='شمارش2'  or $text=='number2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "¹"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "²"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "³"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⁴"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "5"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⁶"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⁷"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⁸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⁹"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "10"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "¹¹"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "12"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "¹³"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "14"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "¹⁵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "16"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "¹⁷"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "18"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "¹⁹"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "20"]);}
if($text=='قلب ترکیب' or $text=='love tk'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '😐😐😐😐😐😐
😐😐😐😐😐😐
😐😐😐😐😐😐
😐😐😐😐😐😐
😐😐😐😐😐😐
😐😐😐😐😐😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😶😶😶😶😶😶
😐😐😐😐😐😐
😶😶😶😶😶😶
😐😐😐😐😐😐
😶😶😶😶😶😶
😐😐😐😐😐😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😂😂😂😂😂😂
😂😂😂😂😂😂
😂😂😂😂😂😂
😂😂😂😂😂😂
😂😂😂😂😂😂
😂😂😂😂😂😂']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😍😍😍😍😍😍
😍😍😍😍😍😍
😍😍😍😍😍😍
😍😍😍😍😍😍
😍😍😍😍😍😍
😍😍😍😍😍😍']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☹️☹️☹️☹️☹️☹️
☹️☹️☹️☹️☹️☹️
☹️☹️☹️☹️☹️☹️
☹️☹️☹️☹️☹️☹️
☹️☹️☹️☹️☹️☹️
☹️☹️☹️☹️☹️☹️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🥺🥺🥺🥺🥺🥺
🥺🥺🥺🥺🥺🥺
🥺🥺🥺🥺🥺🥺
🥺🥺🥺🥺🥺🥺
🥺🥺🥺🥺🥺🥺
🥺🥺🥺🥺🥺🥺']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '
🏀🏀🏀🏀
🏀🏀🏀🏀
🏀🏀🏀🏀
🏀🏀🏀🏀']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😐😐😐😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😐❤️😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧡🧡']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '😂']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🤣']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☹️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💖']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💙']);}
if ($text == 'کیا انلاین' or $text == 'انلاین') {
     $ChatOnlines = $MadelineProto->messages->getOnlines(['peer' => $peer, ]);
     yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $ChatOnlines]);
}
if ($text == 'فال' or $text=='fal'  or $text=='fall') {
     $link = json_decode(file_get_contents("https://api.codebazan.ir/fal/?type=json"),true);
     $sinam = $link['Result'];
     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"
    ʏᴏᴜʀ ғᴀʟʟᴇ
     ---------------------------
$sinam
     ---------------------------
     "]);
}
if ($text == 'ویروس'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '_______👾🕳']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '______👾_']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_____👾__']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '____👾___']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '___👾____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '__👾_____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_👾______']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '🛒👾_______']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_👾🧪______']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '__👾🧪_____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '___👾🧪____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '____👾🧪___']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_____👾🧪__']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '______👾🧪_']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_______👾🗑']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '______🗞👾_']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_____🗞👾__']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '____🗞👾___']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '___🗞👾____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '__🗞👾_____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_🗞👾______']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '🛒👾_______']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_👾🍏______']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '__👾🍏_____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '___👾🍏____']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '____👾🍏___']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_____👾🍏__']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '______👾🍏_']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '_____👾🍏__']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '____👾🍏___']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => '___👾🚩_']);}
if($text=='دنس'){

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️

▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▪️▫️▪️▫️▪️▫️
▫️▪️▫️▪️▪️▪️▫️▪️▫️
▫️▪️▫️▫️▫️▫️▫️▪️▫️
▫️▪️▪️▪️▪️▪️▪️▪️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '▪️▪️▪️▪️▪️▪️▪️▪️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▫️▪️▫️▪️▫️▪️
▪️▫️▪️▫️▫️▫️▪️▫️▪️
▪️▫️▪️▪️▪️▪️▪️▫️▪️
▪️▫️▫️▫️▫️▫️▫️▫️▪️
▪️▪️▪️▪️▪️▪️▪️▪️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => ':)']);

 }
if ($text == 'شب بخیر') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜              🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜             🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜            🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜           🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜          🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜         🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜        🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜       😕"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜      ☹️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜     😣"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜    😖"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜   😩"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜  🥱"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜 🥱"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😴"]);}
if($text=='شب خوش'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🌕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌖']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌗']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌘']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌑']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌒']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌓']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌔']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌓']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌘']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'شو خوش 😐❤️']);}
if($text=='قلبز'){



yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️          ❤️  ❤️          ❤️
       ❤️           ❤️           ❤️
           ❤️                    ❤️
               ❤️            ❤️
                   ❤️    ❤️
                        ❤️
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡          🧡  🧡          🧡
       🧡           🧡           🧡
           🧡                    🧡
               🧡            🧡
                   🧡    🧡
                        🧡
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛          💛  💛          💛
       💛           💛           💛
           💛                    💛
               💛            💛
                   💛    💛
                        💛
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚          💚  💚          💚
       💚           💚           💚
           💚                    💚
               💚            💚
                   💚    💚
                        💚
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙          💙  💙          💙
       💙           💙           💙
           💙                    💙
               💙            💙
                   💙    💙
                        💙
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💜                  💜
        💜  💜          💜   💜
    💜          💜  💜          💜
       💜           💜           💜
           💜                    💜
               💜            💜
                   💜    💜
                        💜
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🖤                  🖤
        🖤  🖤          🖤   🖤
    🖤          🖤  🖤          🖤
       🖤           🖤           🖤
           🖤                    🖤
               🖤            🖤
                   🖤    🖤
                        🖤
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍   🤍
    🤍          🤍  🤍          🤍
       🤍           🤍           🤍
           🤍                    🤍
               🤍            🤍
                   🤍    🤍
                        🤍
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💗                  💗
        💗  💗          💗   💗
    💗          💗  💗          💗
       💗           💗           💗
           💗                    💗
               💗            💗
                   💗    💗
                        💗
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️          ❤️  ❤️          ❤️
       ❤️           ❤️           ❤️
           ❤️                    ❤️
               ❤️            ❤️
                   ❤️    ❤️
                        ❤️
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡          🧡  🧡          🧡
       🧡           🧡           🧡
           🧡                    🧡
               🧡            🧡
                   🧡    🧡
                        🧡
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛          💛  💛          💛
       💛           💛           💛
           💛                    💛
               💛            💛
                   💛    💛
                        💛
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚          💚  💚          💚
       💚           💚           💚
           💚                    💚
               💚            💚
                   💚    💚
                        💚
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙          💙  💙          💙
       💙           💙           💙
           💙                    💙
               💙            💙
                   💙    💙
                        💙
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💜                  💜
        💜  💜          💜   💜
    💜          💜  💜          💜
       💜           💜           💜
           💜                    💜
               💜            💜
                   💜    💜
                        💜
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🖤                  🖤
        🖤  🖤          🖤   🖤
    🖤          🖤  🖤          🖤
       🖤           🖤           🖤
           🖤                    🖤
               🖤            🖤
                   🖤    🖤
                        🖤
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍   🤍
    🤍          🤍  🤍          🤍
       🤍           🤍           🤍
           🤍                    🤍
               🤍            🤍
                   🤍    🤍
                        🤍
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💗                  💗
        💗  💗          💗   💗
    💗          💗  💗          💗
       💗           💗           💗
           💗                    💗
               💗            💗
                   💗    💗
                        💗
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️          ❤️  ❤️          ❤️
       ❤️           ❤️           ❤️
           ❤️                    ❤️
               ❤️            ❤️
                   ❤️    ❤️
                        ❤️
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡          🧡  🧡          🧡
       🧡           🧡           🧡
           🧡                    🧡
               🧡            🧡
                   🧡    🧡
                        🧡
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛          💛  💛          💛
       💛           💛           💛
           💛                    💛
               💛            💛
                   💛    💛
                        💛
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚          💚  💚          💚
       💚           💚           💚
           💚                    💚
               💚            💚
                   💚    💚
                        💚
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙          💙  💙          💙
       💙           💙           💙
           💙                    💙
               💙            💙
                   💙    💙
                        💙
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💜                  💜
        💜  💜          💜   💜
    💜          💜  💜          💜
       💜           💜           💜
           💜                    💜
               💜            💜
                   💜    💜
                        💜
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🖤                  🖤
        🖤  🖤          🖤   🖤
    🖤          🖤  🖤          🖤
       🖤           🖤           🖤
           🖤                    🖤
               🖤            🖤
                   🖤    🖤
                        🖤
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍   🤍
    🤍          🤍  🤍          🤍
       🤍           🤍           🤍
           🤍                    🤍
               🤍            🤍
                   🤍    🤍
                        🤍
.']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💗                  💗
        💗  💗          💗   💗
    💗          💗  💗          💗
       💗           💗           💗
           💗                    💗
               💗            💗
                   💗    💗
                        💗
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️  🤍 ❤️  ❤️   🤍  ❤️
       ❤️   🤍 ❤️   🤍   ❤️
           ❤️   🤍  🤍   ❤️
               ❤️   🤍   ❤️
                   ❤️    ❤️
                        ❤️
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  ❤️ 🤍  🤍   ❤️  🤍
       🤍   ❤️ 🤍   ❤️   🤍
           🤍   ❤️  ❤️   🤍
               🤍   ❤️   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️  🤍 ❤️  ❤️   🤍  ❤️
       ❤️   🤍 ❤️   🤍   ❤️
           ❤️   🤍  🤍   ❤️
               ❤️   🤍   ❤️
                   ❤️    ❤️
                        ❤️
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  ❤️ 🤍  🤍   ❤️  🤍
       🤍   ❤️ 🤍   ❤️   🤍
           🤍   ❤️  ❤️   🤍
               🤍   ❤️   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡  🤍 🧡  🧡   🤍  🧡
       🧡   🤍 🧡   🤍   🧡
           🧡   🤍  🤍   🧡
               🧡   🤍   🧡
                   🧡    🧡
                        🧡
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  🧡 🤍  🤍   🧡  🤍
       🤍   🧡 🤍   🧡   🤍
           🤍   🧡  🧡   🤍
               🤍   🧡   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡  🤍 🧡  🧡   🤍  🧡
       🧡   🤍 🧡   🤍   🧡
           🧡   🤍  🤍   🧡
               🧡   🤍   🧡
                   🧡    🧡
                        🧡
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  🧡 🤍  🤍   🧡  🤍
       🤍   🧡 🤍   🧡   🤍
           🤍   🧡  🧡   🤍
               🤍   🧡   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛  🤍 💛  💛   🤍  💛
       💛   🤍 💛   🤍   💛
           💛   🤍  🤍   💛
               💛   🤍   💛
                   💛    💛
                        💛
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💛 🤍  🤍   💛  🤍
       🤍   💛 🤍   💛   🤍
           🤍   💛  💛   🤍
               🤍   💛   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛  🤍 💛  💛   🤍  💛
       💛   🤍 💛   🤍   💛
           💛   🤍  🤍   💛
               💛   🤍   💛
                   💛    💛
                        💛
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💛 🤍  🤍   💛  🤍
       🤍   💛 🤍   💛   🤍
           🤍   💛  💛   🤍
               🤍   💛   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚  🤍 💚  💚   🤍  💚
       💚   🤍 💚   🤍   💚
           💚   🤍  🤍   💚
               💚   🤍   💚
                   💚    💚
                        💚
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💚 🤍  🤍   💚  🤍
       🤍   💚 🤍   💚   🤍
           🤍   💚  💚   🤍
               🤍   💚   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚  🤍 💚  💚   🤍  💚
       💚   🤍 💚   🤍   💚
           💚   🤍  🤍   💚
               💚   🤍   💚
                   💚    💚
                        💚
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💚 🤍  🤍   💚  🤍
       🤍   💚 🤍   💚   🤍
           🤍   💚  💚   🤍
               🤍   💚   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙  🤍 💙  💙   🤍  💙
       💙   🤍 💙   🤍   💙
           💙   🤍  🤍   💙
               💙   🤍   💙
                   💙    💙
                        💙
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💙 🤍  🤍   💙  🤍
       🤍   💙 🤍   💙   🤍
           🤍   💙  💙   🤍
               🤍   💙   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙  🤍 💙  💙   🤍  💙
       💙   🤍 💙   🤍   💙
           💙   🤍  🤍   💙
               💙   🤍   💙
                   💙    💙
                        💙
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💙 🤍  🤍   💙  🤍
       🤍   💙 🤍   💙   🤍
           🤍   💙  💙   🤍
               🤍   💙   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💜                  💜
        💜  💜          💜  💜
    💜  🤍 💜  💜   🤍  💜
       💜   🤍 💜   🤍   💜
           💜   🤍  🤍   💜
               💜   🤍   💜
                   💜    💜
                        💜
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💜 🤍  🤍   💜  🤍
       🤍   💜 🤍   💜   🤍
           🤍   💜  💜   🤍
               🤍   💜   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           💜                  💜
        💜  💜          💜  💜
    💜  🤍 💜  💜   🤍  💜
       💜   🤍 💜   🤍   💜
           💜   🤍  🤍   💜
               💜   🤍   💜
                   💜    💜
                        💜
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  💜 🤍  🤍   💜  🤍
       🤍   💜 🤍   💜   🤍
           🤍   💜  💜   🤍
               🤍   💜   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🖤                  🖤
        🖤  🖤          🖤  🖤
    🖤  🤍 🖤  🖤   🤍  🖤
       🖤   🤍 🖤   🤍   🖤
           🖤   🤍  🤍   🖤
               🖤   🤍   🖤
                   🖤    🖤
                        🖤
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  🖤 🤍  🤍   🖤  🤍
       🤍   🖤 🤍   🖤   🤍
           🤍   🖤  🖤   🤍
               🤍   🖤   🤍
                   🤍    🤍
                        🤍
.']);yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🖤                  🖤
        🖤  🖤          🖤  🖤
    🖤  🤍 🖤  🖤   🤍  🖤
       🖤   🤍 🖤   🤍   🖤
           🖤   🤍  🤍   🖤
               🖤   🤍   🖤
                   🖤    🖤
                        🖤
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍  🤍
    🤍  🖤 🤍  🤍   🖤  🤍
       🤍   🖤 🤍   🖤   🤍
           🤍   🖤  🖤   🤍
               🤍   🖤   🤍
                   🤍    🤍
                        🤍
.']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '❤️']);
}
else if(preg_match("/^[\/\#\!]?(اذان) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(اذان) (.*)$/i", $text, $m);
                         $query = $m[2];
                         $url = json_decode(file_get_contents("https://api.codebazan.ir/owghat/?city=$query"),true);
                         $azann = $url["Result"];
                         $azan = $azann[0];
                     $sina1 = $azan['shahr'];
                     $azan2 = $azan['tarikh'];
                     $sina3 = $azan['azansobh'];
                     $sina4 = $azan['toloaftab'];
                     $sina5 = $azan['azanzohr'];
                     $sina6 = $azan['ghorubaftab'];
                     $sina7 = $azan['azanmaghreb'];
                     $sina8 = $azan['nimeshab'];
                     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
نام شهر  : $sina1
تاریخ : $azan2
-------------------
اذان صبح : $sina3
طلوع افتاب : $sina4
اذان ظهر : $sina5
غروب افتاب : $sina6
اذان مغرب : $sina7
نیمه شب : $sina8
-------------------

                    "]);
                    }



if($text=='موربع'){

yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥                              🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);


yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);


yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);


yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥                              🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️🔳🟥
🟥⬜️⬜️⬜️🔳⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️🔳⬜️⬜️⬜️🟥
🟥🔳⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🔳🔳🔳🔳🔳🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔳⬜️⬜️⬜️⬜️🟥
🟥⬜️🔳⬜️⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️⬜️🔳⬜️🟥
🟥⬜️⬜️⬜️⬜️🔳🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️🔳🟥
🟥⬜️⬜️⬜️🔳⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️🔳⬜️⬜️⬜️🟥
🟥🔳⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🔳🔳🔳🔳🔳🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔳⬜️⬜️⬜️⬜️🟥
🟥⬜️🔳⬜️⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️⬜️🔳⬜️🟥
🟥⬜️⬜️⬜️⬜️🔳🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥⬜️⬜️🔳⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '|تــــــــــــــــامـــــــــــــام|']);

}
if ($text == 'بکشش' or $text == 'bokoshesh') {
 yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '😐                     •🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐                    • 🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐                  •   🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐                •     🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐              •       🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐            •         🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐           •          🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐         •            🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐       •              🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐     •                🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐   •                  🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐 •                    🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😐•                     🔫']);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1,'message' => '😵                       🔫😏']);}
if ($text == 'bk' or $text == 'بکیرم') {
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           🤘    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           🤘    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        ??
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘"]);
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤬🤬🤬          🤬         🤬
😡         😡      😡       😡
🤬           🤬    🤬     🤬
😡        😡       😡   😡
🤬🤬🤬          🤬🤬
😡         😡      😡   😡
🤬           🤬    🤬      🤬
😡           😡    😡        😡
🤬       🤬        🤬          🤬
😡😡😡          😡            😡"]);}


if($text=='رقس' or $text=='رقاص'){

yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥
🟥🔲🔳🔲🟥
🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🔳🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🟥🟥🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪
🟪🔲🔳🔲🟪
🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🟪🟪🟪']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🔳🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🟪🟪🟪']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟪🟪🟪🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🟪🟪🟪']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦
🟦🔲🔳🔲🟦
🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🟦🟦🟦']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🔳🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🟦🟦🟦']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟦🟦🟦🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🟦🟦🟦']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '◻️🟩🟩◻️◻️
◻️◻️🟩◻️🟩
🟩🟩🔳🟩🟩
🟩◻️🟩◻️◻️
◻️◻️🟩🟩◻️']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟩⬜️⬜️🟩🟩
🟩🟩⬜️🟩⬜️
⬜️⬜️🔲⬜️⬜️
⬜️🟩⬜️🟩🟩
🟩🟩⬜️⬜️🟩']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'the end']);
}
if($text == 'number' or $text =='شمارش'  ){
$ed = yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>' ¹', 'parse_mode' => 'MarkDown' ]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +1,'message' =>' ² ','parse_mode' => 'MarkDown']);
 $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +2,'message' =>' ³ ','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +3,'message' =>' ⁴','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +4,'message' =>'⁵ ','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +5,'message' =>'⁶ ','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +6,'message' =>' ⁷','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +7,'message' =>' ⁸ ','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +8,'message' =>' ⁹ ','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +9,'message' =>' ¹⁰ ','parse_mode' => 'MarkDown']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
 $msg_id +10,'message' =>' sʜᴜᴛ shᴏᴅɪ 😈 ','parse_mode' => 'MarkDown']);
$Updates = yield $MadelineProto->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id, ]);
}
if($text=='جق' or $text=='jaq'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'درحال جق....']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<👌🏻=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<==👌🏻===']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<===👌🏻==']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<==👌🏻===']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<👌🏻=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<===👌🏻==']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<===👌🏻==']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<==👌🏻===']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💦💦<=====']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'پایان جق']);}
if($text=='ساک' or $text=='suck'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🗣 <=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣===']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣==']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣===']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=====']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💦💦<=====']);}

if($text=='بمیر کرونا' or $text=='Corona'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>'🦠  •   •   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   •   •   •   •   •   •   ◀  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   •   •   •   •   •   ◀   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   •   •   •   •   ◀   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   •   •   •   ◀   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   •   •   ◀   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   •   ◀   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   •   ◀   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   •   ◀   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  •   ◀   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🦠  ◀   •   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💥  •   •   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💉💊💉💊💉💊💉💊']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'we won']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'Corona Is Dead']);}
if($text=='پشم' or $text== 'پشمام'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍂🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍂🍁🌱🌿🍂🍁🌱🌿🍂🍁🌱🌿🍂🍁🌱']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍃🍂🍁🌱🌿☘️🍀🍃🍁🍂🌿🌱☘️🍀🍃']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'دیگه برگی برام نمونده ']);}
if($text=='قلب'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '💚💚💚💚💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💛💛💛💛💛']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧡🧡🧡🧡🧡']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💛💛💛💛💛']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💖💖💖💖💖']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💞💞💞💞💞']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💝💝💝💝💝']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💕💕💕💕💕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💗💗💗💗💗']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'I love🙂🧡']);}
 if ($text == 'del' or $text == '/del' or $text == 'حذف') {
                                                    if ($type3 == 'supergroup' or $type3 == 'chat') {
                                                        $gmsg = (yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]));
                                                        $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                                        $gms = (yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]));
                                                        $messag = $gms['messages'][0]['from_id'];
                                                        $MadelineProto->channels->deleteMessages(['channel' => $peer, 'id' => [$message]]);
                                                        $MadelineProto->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                                    }
                                                }
     if ($text == 'numberr' or $text == 'شمارت') {
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $iduser = $messag;
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "» درحال جست و جو . . . ! «"]);
                            file_put_contents("msgid25.txt", $msg_id);
                            file_put_contents("peer5.txt", "$peer");
                            file_put_contents("id.txt", "$messag");
                            yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
                            yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$messag"]);
                        } else {
                            if ($type3 == 'user') {
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "» درحال جست و جو . . . ! «"]);
                                file_put_contents("msgid25.txt", $msg_id);
                                file_put_contents("peer5.txt", "$peer");
                                file_put_contents("id.txt", "$peer");
                                yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
                                yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$peer"]);

                            }
                        }
                    }


if ($text == 'آپدیت' or $text=='اپدیت'  or $text=='آپدیت شو') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️10%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️20%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️30%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️40%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️50%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️60%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️▪️70%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️▪️▪️80%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️▪️▪️▪️90%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "️update....⌚️"]);}

if($text=='مربع' or $text=='mr1'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬛️⬜️??
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '??🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️??
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💙💙💙💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '|the end|']);} 
if($text=='مکعب' or $text=='mr'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💙💙💙💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '|☘the end☘|']);
}
 if ($text == "غزل") {
                                                $rand = rand(1, 99);
                                                $link = json_decode(file_get_contents("https://api.codebazan.ir/ghazalsaadi/?type=json&id=$rand"), true);
                                                $title = $link['title'];
                                                $contents = $link['contents'];
                                                (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "$title}\r\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\r\n$contents\r\n                                                    "]));
                                            }

if(preg_match("/^\/[Tt][Aa][Ss]\s(\d)/", $text, $rr)) {
@touch("tas.txt");
@file_put_contents("tas.txt", $rr[1]);
$diceo = ['_' => 'inputMediaDice', 'emoticon' => '🎲'];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "𝑺𝒆𝒏𝒅  𝑻𝒂𝒔 => <$rr[1]> 𝑭𝒐𝒓 𝒀𝒐𝒖 :)", 'parse_mode' => 'markdown' ]);
yield $this->messages->sendMedia(['peer'=>$peer,'media'=>$diceo,'message'=>"🎲"]);}
if(isset($update['message']['media']['_'])){
if($update['message']['media']['_'] == "messageMediaDice"){
if(is_numeric(file_get_contents("tas.txt"))){
$valueo = $update['message']['media']['value'];
if(file_exists("tas.txt") and $valueo != file_get_contents("tas.txt")){
yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
$diceo = ['_' => 'inputMediaDice', 'emoticon' => '🎲'];
yield $this->messages->sendMedia(['peer'=>$peer,'media'=>$diceo,'message'=>"🎲"]);
} else {
unlink("tas.txt");}}}}

if ($text == 'اینه' or $text=='mee') {
$me_id = $me['id'];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "`$me_id`",'parse_mode' => 'markdown']);}
if($text=='فاک' or $text=='fuck'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🖕🖕🏿🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🖕🖕🖕🏿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🖕🖕🏾🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🏿🖕🖕🏿🖕🖕🏿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🏿🖕🖕🏿🖕🖕🏿🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🖕🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘fucking you☘']);}


if($text=='پشتیبانی'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "جهت سوال و خرید و تمدید به ایدی زیر مراجعه کنید
@raimon_rbot"]);}
if($text=='💋' or $text=='بوس'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'ا']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'او']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول ی']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه ب']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه بو']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه بوس']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه بوس ب']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه بوس بد']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id +1,'message' => 'اول یه بوس بده']);}
if($text=='قلبز2' or $text=='qlb2'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '💚💛🧡❤️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💙💚💜🖤']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '❤️🤍🧡💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖤💜💙💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🤍🤎❤️💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🖤💜💚💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💝💘💗💘']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '❤️🤍🤎🧡']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💕💞💓🤍']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💜💙❤️🤍']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💙💜💙💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧡💚🧡💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💝💜💙❤️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💞🖤💙💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '♥️🧡❤️💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘💙I LOVE YOU💙☘']);}

if ($text == '/viplist' or $text=='listvip'  or $text=='لیست ویژه') {
     yield $MadelineProto->messages->sendMedia([
          'peer' => $peer,
          'media' => [
              '_' => 'inputMediaUploadedDocument',
              'file' => 'list/vip.txt',
              'attributes' => [
                  ['_' => 'documentAttributeVideo', 'round_message' => false, 'supports_streaming' => true]
              ]
          ],
          'message' => '𝑽𝒊𝒑 𝑼𝒔𝒆𝒓 𝑳𝒊𝒔𝒕👆🏽 ',
          'parse_mode' => 'HTML'
      ]); 
}
if ($text == '/banlist' or $text=='listban'  or $text=='لیست بن') {
     yield $MadelineProto->messages->sendMedia([
          'peer' => $peer,
          'media' => [
              '_' => 'inputMediaUploadedDocument',
              'file' => 'list/ban.txt',
              'attributes' => [
                  ['_' => 'documentAttributeVideo', 'round_message' => false, 'supports_streaming' => true]
              ]
          ],
          'message' => "𝑩𝒂𝒏 𝑼𝒔𝒆𝒓 𝑳𝒊𝒔𝒕👆🏽  ",
          'parse_mode' => 'HTML'
      ]); 
}
if ($text == '/mutelist' or $text=='listmute'  or $text=='لیست سکوت') {
     yield $MadelineProto->messages->sendMedia([
          'peer' => $peer,
          'media' => [
              '_' => 'inputMediaUploadedDocument',
              'file' => 'list/mute.txt',
              'attributes' => [
                  ['_' => 'documentAttributeVideo', 'round_message' => false, 'supports_streaming' => true]
              ]
          ],
          'message' => '𝑴𝒖𝒕𝒆 𝑼𝒔𝒆𝒓 𝑳𝒊𝒔𝒕👆🏽 ',
          'parse_mode' => 'HTML'
      ]); 
}
 if($message && $data['bold'] == "on"){
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<b>$text</b>",'parse_mode'=> 'HTML']);
}}
if($data['code'] == "on"){
                                   yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id,'message'=> '<code>'.$text.'</code>', 'parse_mode'=> 'HTML' ,]);
                                   }
 if($message && $data['strike'] == "on"){
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<s>$text</s>", 'parse_mode'=> 'HTML']);
}}
 if($message && $data['italic'] == "on"){
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<i>$text</i>", 'parse_mode'=> 'HTML']);
}}
 if($message && $data['under'] == "on"){
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<u>$text</u>", 'parse_mode'=> 'HTML']);
}}
 if($message && $data['mono'] == "on"){
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "`$text`", 'parse_mode' => 'markdown']);
}}
 if($message && $data['men'] == "on"){
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<a href='tg://user?id=$admin'>$text</a>", 'parse_mode'=> 'HTML']);
}}
 if($message && $data['men2'] == "on"){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
$messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
$gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
$messag = $gms['messages'][0]['from_id'];
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<a href='tg://user?id=$messag'>$text</a>", 'parse_mode'=> 'HTML']);
}}

 if($message && $data['tag'] == "on"){
@$text = str_replace(" ",'_',$text);
@$text = str_replace("",'#',$text);
$op = "#".$text;
echo $op;
if($update){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => $op]);
}}
else if(preg_match("/^[\/\#\!]?(f1font) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(f1font) (.*)$/i", $text, $m); 
                         $font = $m[2];
                         $font1 = ['ا', 'ب', 'پ', 'ی', 'ت','ک',  'گ', 'س','ح', 'ج', 'چ', 'ه', 'خ', 'ر', 'د' , 'ز', 'ژ', 'ش', 'ع','ف', 'ل', 'م', 'ن', 'و', 'ط',  'ص', 'ق', ];
						 $font2 = ['ا','بـ','پـ','یـ','تـ','ڪـ','گـ','سـ','حـ','جـ','چـ','هـ','ﺧ','ر','د','ز','ژ','شـ','عـ','فـ','لـ','مـ','نـ','و','طـ','صـ','قـ',]; 
                    $molai = str_replace($font1, $font2, $font);
                    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
                    فونت با اسم  $font ساخته شد
-------------------------
$molai
-------------------------
                    "]);
                    }
					                    else if(preg_match("/^[\/\#\!]?(f2font) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(f2font) (.*)$/i", $text, $m); 
                         $font = $m[2];
                         $font1 = ['ا', 'ب', 'پ', 'ی', 'ت','ک',  'گ', 'س','ح', 'ج', 'چ', 'ه', 'خ', 'ر', 'د' , 'ز', 'ژ', 'ش', 'ع','ف', 'ل', 'م', 'ن', 'و', 'ط',  'ص', 'ق', ];
						 $font2 = ['ߊ‌‌','ࡅߺ߲','ࡅߺ݆ߺ','ࡅ࡙ߺ','ࡅߺ߳','ܭ','ࡏަ','ࡄ','ܟߺ','ܟ̣ߺ','ܟ݆ߺ','ܣ','ܟ̇ߺ','ܝ‌','ܥ‌','ܝ‌̇','̇ܝ‌̈','ܝܝ݅ܝ','ࡏ','ܦ߭','ܠ','ܩ','̇ࡅ','ﻭ','ࡈࡋ','ࡎ','ܦ߳',];
                    $molai = str_replace($font1, $font2, $font);
                    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
                    فونت با اسم  $font ساخته شد
-------------------------
$molai
-------------------------
                    "]);
                    }
					

   if($data['fa1'] == 'on'){
                         $font1 = ['ا', 'ب', 'پ', 'ی', 'ت','ک',  'گ', 'س','ح', 'ج', 'چ', 'ه', 'خ', 'ر', 'د' , 'ز', 'ژ', 'ش', 'ع','ف', 'ل', 'م', 'ن', 'و', 'ط',  'ص', 'ق', ];
                         
                         $font2 = ['ߊ‌‌','ࡅߺ߲','ࡅߺ݆ߺ','ࡅ࡙ߺ','ࡅߺ߳','ܭ','ࡏަ','ࡄ','ܟߺ','ܟ̣ߺ','ܟ݆ߺ','ܣ','ܟ̇ߺ','ܝ‌','ܥ‌','ܝ‌̇','̇ܝ‌̈','ܝܝ݅ܝ','ࡏ','ܦ߭','ܠ','ܩ','̇ࡅ','ﻭ','ࡈࡋ','ࡎ','ܦ߳',];
						 
$ffa = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ffa", 'parse_mode' => 'html' ]); 
}

    if($data['fa3'] == 'on'){
		$text = strtoupper("$text");
$font1 = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$font2 = ['آ','اَِ','بَِ','پَِـَِـ','تَِـ','ثَِ','جَِ','چَِ','حَِـَِ','خَِ','دَِ','ذَِ','رَِ','زَِ','ژَِ','سَِــَِ','شَِـَِ','صَِ','ضَِ','طَِ','ظَِ','عَِ','غَِ','فَِ','قَِ','ڪَِــ','گَِــ','لَِ','مَِــَِ','نَِ','وَِ','هَِ','یَِ'];                 
$ff1a = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ff1a", 'parse_mode' => 'html' ]); 
}
    if($data['fa4'] == 'on'){
		$text = strtoupper("$text");
$font1 = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$font2 = ['آ','ا','بـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','پـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','تـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ثـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','جـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','چـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','حـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','خـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','د۪ٜ','ذ۪ٜ','ر۪ٜ','ز۪ٜ‌','ژ۪ٜ','سـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','شـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','صـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ضـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','طـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','ظـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','عـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','غـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','فـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','قـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','کـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','گـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','لـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','مـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','نـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','و','هـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','یـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ'];                 
$ff1a = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ff1a", 'parse_mode' => 'html' ]); 
}
    if($data['fa2'] == 'on'){
	$text = strtoupper("$text");	
$font1 = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$font2 = ['آ','ا','بـــ','پــ','تـــ','ثــ','جــ','چــ','حــ','خــ','دّ','ذّ','رّ','زّ','ژّ','ســ','شــ','صــ','ضــ','طــ','ظــ','عــ','غــ','فــ','قــ','کــ','گــ','لــ','مـــ','نـــ','وّ','هــ','یـــ'];               
$ff1a = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ff1a", 'parse_mode' => 'html' ]); 
}
    if($data['fa5'] == 'on'){
$text = strtoupper("$text");		
$font1 = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$font2 = ['آ','ا','بـ﹏ـ','پـ﹏ـ','تـ﹏ـ','ثـ﹏ــ','جـ﹏ــ','چـ﹏ـ','حـ﹏ـ','خـ﹏ـ','د','ذ','ر','ز','ژ','سـ﹏ـ','شـ﹏ـ','صـ﹏ــ','ضـ﹏ـ','طـ﹏ـ','ظـ﹏ــ','عـ﹏ـ','غـ﹏ـ','فـ﹏ـ','قـ﹏ـ','کـ﹏ـ','گـ﹏ـ','لـ﹏ــ','مـ﹏ـ','نـ﹏ـ','و','هـ﹏ـ','یـ﹏ـ'];               
$ff1a = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ff1a", 'parse_mode' => 'html' ]); 
}
    if($data['fa6'] == 'on'){
$text = strtoupper("$text");		
$font1 = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$font2 = ['آ','ا','ب̈́ـ̈́ـ̈́ـ̈́ـ','پ̈́ـ̈́ـ̈́ـ̈́ـ','ت̈́ـ̈́ـ̈́ـ̈́ـ','ث̈́ـ̈́ـ̈́ـ̈́ـ','ج̈́ـ̈́ـ̈́ـ̈́ـ','چـ̈́ـ̈́ـ̈́ـ','ح̈́ـ̈́ـ̈́ـ̈́ـ','خـ̈́ـ̈́ـ̈́ـ','د','ذ','ر','ز','ژ','سـ̈́ـ̈́ـ̈́ـ','شـ̈́ـ̈́ـ̈́ـ','ص̈́ـ̈́ـ̈́ـ̈́ـ','ض̈́ـ̈́ـ̈́ـ̈́ـ','ط̈́ـ̈́ـ̈́ـ̈́ـ','ظـ̈́ـ̈́ـ̈́ـ̈́ـ','ع̈́ـ̈́ـ̈́ـ̈́ـ','غ̈́ـ̈́ـ̈́ـ̈́ـ','فـ̈́ـ̈́ـ̈́ـ̈́ـ','قـ̈́ـ̈́ـ̈́ـ','کـ̈́ـ̈́ـ̈́ـ','گـ̈́ـ̈́ـ̈́ـ̈́ـ','ل̈́ـ̈́ـ̈́ـ̈́ـ','م̈́ـ̈́ـ̈́ـ̈́ـ','ن̈́ـ̈́ـ̈́ـ̈́ـ','و','ه̈́ـ̈́ـ̈́ـ̈́ـ','ی̈́ـ̈́ـ̈́ـ̈́ـ'];              
$ff1a = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ff1a", 'parse_mode' => 'html' ]); 
}
    if($data['fa7'] == 'on'){
$text = strtoupper("$text");
$font1 = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$font2 = ['آ','اؒؔ','بـ͜͡ــؒؔـ͜͝ـ','پـ͜͡ــؒؔـ͜͝ـ','تـ͜͡ــؒؔـ͜͝ـ','ثـ͜͡ــؒؔـ͜͝ـ','جـ͜͡ــؒؔـ͜͝ـ','چـ͜͡ــؒؔـ͜͝ـ','حـ͜͡ــؒؔـ͜͝ـ','خـ͜͡ــؒؔـ͜͝ـ','د۠۠','ذ','ر','ز','ژ','سـ͜͡ــؒؔـ͜͝ـ','شـ͜͡ــؒؔـ͜͝ـ','صـ͜͡ــؒؔـ͜͝ـ','ضـ͜͡ــؒؔـ͜͝ـ','طـ͜͡ــؒؔـ͜͝ـ','ظـ͜͡ــؒؔـ͜͝ـ','عـ͜͡ــؒؔـ͜͝ـ','غـ͜͡ــؒؔـ͜͝ـ','فـ͜͡ــؒؔـ͜͝ـ','قـ͜͡ــؒؔـ͜͝ـ','کـ͜͡ــؒؔـ͜͝ـ','گـ͜͡ــؒؔـ͜͝ـ','لـ͜͡ــؒؔـ͜͝ـ','مـ͜͡ــؒؔـ͜͝ـ','نـ͜͡ــؒؔـ͜͝ـ','وۘۘ','هـ͜͡ــؒؔـ͜͝ـ','یـ͜͡ــؒؔـ͜͝ـ'];              
$ff1a = str_replace($font1, $font2, $text);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$ff1a", 'parse_mode' => 'html' ]); 
}

    if($data['en1'] == 'on'){
@$a = str_replace( 'a', 'ꪖ', $text );
@$a = str_replace( 'b', '᥇', $a );
@$a = str_replace( 'c', 'ᥴ', $a );
@$a = str_replace( 'd', 'ᦔ', $a );
@$a = str_replace( 'e', 'ꫀ', $a );
@$a = str_replace( 'f', 'ᠻ', $a );
@$a = str_replace( 'g', 'ᧁ', $a );
@$a = str_replace( 'h', 'ꫝ', $a );
@$a = str_replace( 'i', '꠸', $a );
@$a = str_replace( 'j', '꠹', $a );
@$a = str_replace( 'k', 'ᛕ', $a );
@$a = str_replace( 'l', 'ꪶ', $a );
@$a = str_replace( 'm', 'ꪑ', $a );
@$a = str_replace( 'n', 'ꪀ', $a );
@$a = str_replace( 'o', 'ꪮ', $a );
@$a = str_replace( 'p', 'ρ', $a );
@$a = str_replace( 'q', 'ꪇ', $a );
@$a = str_replace( 'r', '᥅', $a );
@$a = str_replace( 's', 'ᦓ', $a );
@$a = str_replace( 't', 'ꪻ', $a );
@$a = str_replace( 'u', 'ꪊ', $a );
@$a = str_replace( 'v', 'ꪜ', $a );
@$a = str_replace( 'w', '᭙', $a );
@$a = str_replace( 'x', '᥊', $a );
@$a = str_replace( 'y', 'ꪗ', $a );
@$a = str_replace( 'z', 'ƺ', $a );
	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	}
 
if($data['en2'] == 'on'){
@$a = str_replace( 'a', '𝓪', $text );
@$a = str_replace( 'b', '𝓫', $a );
@$a = str_replace( 'c', '𝓬', $a );
@$a = str_replace( 'd', '𝓭', $a );
@$a = str_replace( 'e', '𝓮', $a );
@$a = str_replace( 'f', '𝓯', $a );
@$a = str_replace( 'g', '𝓰', $a );
@$a = str_replace( 'h', '𝓱', $a );
@$a = str_replace( 'i', '𝓲', $a );
@$a = str_replace( 'j', '𝓳', $a );
@$a = str_replace( 'k', '𝓴', $a );
@$a = str_replace( 'l', '𝓵', $a );
@$a = str_replace( 'm', '𝓶', $a );
@$a = str_replace( 'n', '𝓷', $a );
@$a = str_replace( 'o', '𝓸', $a );
@$a = str_replace( 'p', '𝓹', $a );
@$a = str_replace( 'q', '𝓺', $a );
@$a = str_replace( 'r', '𝓻', $a );
@$a = str_replace( 's', '𝓼', $a );
@$a = str_replace( 't', '𝓽', $a );
@$a = str_replace( 'u', '𝓾', $a );
@$a = str_replace( 'v', '𝓿', $a );
@$a = str_replace( 'w', '𝔀', $a );
@$a = str_replace( 'x', '𝔁', $a );
@$a = str_replace( 'y', '𝔂', $a );
@$a = str_replace( 'z', '𝔃', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	}
 if($data['en3'] == 'on'){
@$a = str_replace( 'a', 'ᗩ', $text );
@$a = str_replace( 'b', 'ᗷ', $a );
@$a = str_replace( 'c', 'ᑕ', $a );
@$a = str_replace( 'd', 'ᗪ', $a );
@$a = str_replace( 'e', 'E', $a );
@$a = str_replace( 'f', 'ᖴ', $a );
@$a = str_replace( 'g', 'G', $a );
@$a = str_replace( 'h', 'ᕼ', $a );
@$a = str_replace( 'i', 'I', $a );
@$a = str_replace( 'j', 'ᒍ', $a );
@$a = str_replace( 'k', 'K', $a );
@$a = str_replace( 'l', 'ᒪ', $a );
@$a = str_replace( 'm', 'ᗰ', $a );
@$a = str_replace( 'n', 'ᑎ', $a );
@$a = str_replace( 'o', 'O', $a );
@$a = str_replace( 'p', 'ᑭ', $a );
@$a = str_replace( 'q', 'ᑫ', $a );
@$a = str_replace( 'r', 'ᖇ', $a );
@$a = str_replace( 's', 'ᔕ', $a );
@$a = str_replace( 't', 'T', $a );
@$a = str_replace( 'u', 'ᑌ', $a );
@$a = str_replace( 'v', 'ᐯ', $a );
@$a = str_replace( 'w', 'ᗯ', $a );
@$a = str_replace( 'x', '᙭', $a );
@$a = str_replace( 'y', 'Y', $a );
@$a = str_replace( 'z', 'ᘔ', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	}
  if($data['en4'] == 'on'){
@$a = str_replace( 'a', '𝖆', $text );
@$a = str_replace( 'b', '𝖇', $a );
@$a = str_replace( 'c', '𝖈', $a );
@$a = str_replace( 'd', '𝖉', $a );
@$a = str_replace( 'e', '𝖊', $a );
@$a = str_replace( 'f', '𝖋', $a );
@$a = str_replace( 'g', '𝖌', $a );
@$a = str_replace( 'h', '𝖍', $a );
@$a = str_replace( 'i', '𝖎', $a );
@$a = str_replace( 'j', '𝖏', $a );
@$a = str_replace( 'k', '𝖐', $a );
@$a = str_replace( 'l', '𝖑', $a );
@$a = str_replace( 'm', '𝖒', $a );
@$a = str_replace( 'n', '𝖓', $a );
@$a = str_replace( 'o', '𝖔', $a );
@$a = str_replace( 'p', '𝖕', $a );
@$a = str_replace( 'q', '𝖖', $a );
@$a = str_replace( 'r', '𝖗', $a );
@$a = str_replace( 's', '𝖘', $a );
@$a = str_replace( 't', '𝖙', $a );
@$a = str_replace( 'u', '𝖚', $a );
@$a = str_replace( 'v', '𝖛', $a );
@$a = str_replace( 'w', '𝖜', $a );
@$a = str_replace( 'x', '𝖝', $a );
@$a = str_replace( 'y', '𝖞', $a );
@$a = str_replace( 'z', '𝖟', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	}
  if($data['en5'] == 'on'){
@$a = str_replace( 'a', '𝕒', $text );
@$a = str_replace( 'b', '𝕓', $a );
@$a = str_replace( 'c', '𝕔', $a );
@$a = str_replace( 'd', '𝕕', $a );
@$a = str_replace( 'e', '𝕖', $a );
@$a = str_replace( 'f', '𝕗', $a );
@$a = str_replace( 'g', '𝕘', $a );
@$a = str_replace( 'h', '𝕙', $a );
@$a = str_replace( 'i', '𝕚', $a );
@$a = str_replace( 'j', '𝕛', $a );
@$a = str_replace( 'k', '𝕜', $a );
@$a = str_replace( 'l', '𝕝', $a );
@$a = str_replace( 'm', '𝕞', $a );
@$a = str_replace( 'n', '𝕟', $a );
@$a = str_replace( 'o', '𝕠', $a );
@$a = str_replace( 'p', '𝕡', $a );
@$a = str_replace( 'q', '𝕢', $a );
@$a = str_replace( 'r', '𝕣', $a );
@$a = str_replace( 's', '𝕤', $a );
@$a = str_replace( 't', '𝕥', $a );
@$a = str_replace( 'u', '𝕦', $a );
@$a = str_replace( 'v', '𝕧', $a );
@$a = str_replace( 'w', '𝕨', $a );
@$a = str_replace( 'x', '𝕩', $a );
@$a = str_replace( 'y', '𝕐', $a );
@$a = str_replace( 'z', '𝕫', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	}	
  if($data['en6'] == 'on'){
@$a = str_replace( 'a', '𝙖', $text );
@$a = str_replace( 'b', '𝙗', $a );
@$a = str_replace( 'c', '𝙘', $a );
@$a = str_replace( 'd', '𝙙', $a );
@$a = str_replace( 'e', '𝙚', $a );
@$a = str_replace( 'f', '𝙛', $a );
@$a = str_replace( 'g', '𝙜', $a );
@$a = str_replace( 'h', '𝙝', $a );
@$a = str_replace( 'i', '𝙞', $a );
@$a = str_replace( 'j', '𝙟', $a );
@$a = str_replace( 'k', '𝙠', $a );
@$a = str_replace( 'l', '𝙡', $a );
@$a = str_replace( 'm', '𝙢', $a );
@$a = str_replace( 'n', '𝙣', $a );
@$a = str_replace( 'o', '𝙤', $a );
@$a = str_replace( 'p', '𝙥', $a );
@$a = str_replace( 'q', '𝙦', $a );
@$a = str_replace( 'r', '𝙧', $a );
@$a = str_replace( 's', '𝙨', $a );
@$a = str_replace( 't', '𝙩', $a );
@$a = str_replace( 'u', '𝙪', $a );
@$a = str_replace( 'v', '𝙫', $a );
@$a = str_replace( 'w', '𝙬', $a );
@$a = str_replace( 'x', '𝙭', $a );
@$a = str_replace( 'y', '𝙔', $a );
@$a = str_replace( 'z', '𝙯', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	} 
  if($data['en7'] == 'on'){
@$a = str_replace( 'a', '🅰', $text );
@$a = str_replace( 'b', '🅱', $a );
@$a = str_replace( 'c', '🅲', $a );
@$a = str_replace( 'd', '🅳', $a );
@$a = str_replace( 'e', '🅴', $a );
@$a = str_replace( 'f', '🅵', $a );
@$a = str_replace( 'g', '🅶', $a );
@$a = str_replace( 'h', '🅷', $a );
@$a = str_replace( 'i', '🅸', $a );
@$a = str_replace( 'j', '🅹', $a );
@$a = str_replace( 'k', '🅺', $a );
@$a = str_replace( 'l', '🅻', $a );
@$a = str_replace( 'm', '🅼', $a );
@$a = str_replace( 'n', '🅽', $a );
@$a = str_replace( 'o', '🅾', $a );
@$a = str_replace( 'p', '🅿', $a );
@$a = str_replace( 'q', '🆀', $a );
@$a = str_replace( 'r', '🆁', $a );
@$a = str_replace( 's', '🆂', $a );
@$a = str_replace( 't', '🆃', $a );
@$a = str_replace( 'u', '🆄', $a );
@$a = str_replace( 'v', '🆅', $a );
@$a = str_replace( 'w', '🆆', $a );
@$a = str_replace( 'x', '🆇', $a );
@$a = str_replace( 'y', '🆈', $a );
@$a = str_replace( 'z', '🆉', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	} 
  if($data['en8'] == 'on'){
@$a = str_replace( 'a', '𝗮', $text );
@$a = str_replace( 'b', '𝗯', $a );
@$a = str_replace( 'c', '𝗰', $a );
@$a = str_replace( 'd', '𝗱', $a );
@$a = str_replace( 'e', '𝗲', $a );
@$a = str_replace( 'f', '𝗳', $a );
@$a = str_replace( 'g', '𝗴', $a );
@$a = str_replace( 'h', '𝗵', $a );
@$a = str_replace( 'i', '𝗶', $a );
@$a = str_replace( 'j', '𝗷', $a );
@$a = str_replace( 'k', '𝗸', $a );
@$a = str_replace( 'l', '𝗹', $a );
@$a = str_replace( 'm', '𝗺', $a );
@$a = str_replace( 'n', '𝗻', $a );
@$a = str_replace( 'o', '𝗼', $a );
@$a = str_replace( 'p', '𝗽', $a );
@$a = str_replace( 'q', '𝗾', $a );
@$a = str_replace( 'r', '𝗿', $a );
@$a = str_replace( 's', '𝘀', $a );
@$a = str_replace( 't', '𝘁', $a );
@$a = str_replace( 'u', '𝘂', $a );
@$a = str_replace( 'v', '𝘃', $a );
@$a = str_replace( 'w', '𝘄', $a );
@$a = str_replace( 'x', '𝘅', $a );
@$a = str_replace( 'y', '𝘆', $a );
@$a = str_replace( 'z', '𝘇', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	} 
  if($data['en9'] == 'on'){
@$a = str_replace( 'a', '🅐', $text );
@$a = str_replace( 'b', '🅑', $a );
@$a = str_replace( 'c', '🅒', $a );
@$a = str_replace( 'd', '🅓', $a );
@$a = str_replace( 'e', '🅔', $a );
@$a = str_replace( 'f', '🅕', $a );
@$a = str_replace( 'g', '🅖', $a );
@$a = str_replace( 'h', '🅗', $a );
@$a = str_replace( 'i', '🅘', $a );
@$a = str_replace( 'j', '🅙', $a );
@$a = str_replace( 'k', '🅚', $a );
@$a = str_replace( 'l', '🅛', $a );
@$a = str_replace( 'm', '🅜', $a );
@$a = str_replace( 'n', '🅝', $a );
@$a = str_replace( 'o', '🅞', $a );
@$a = str_replace( 'p', '🅟', $a );
@$a = str_replace( 'q', '🅠', $a );
@$a = str_replace( 'r', '🅡', $a );
@$a = str_replace( 's', '🅢', $a );
@$a = str_replace( 't', '🅣', $a );
@$a = str_replace( 'u', '🅤', $a );
@$a = str_replace( 'v', '🅥', $a );
@$a = str_replace( 'w', '🅦', $a );
@$a = str_replace( 'x', '🅧', $a );
@$a = str_replace( 'y', '🅨', $a );
@$a = str_replace( 'z', '🅩', $a );
 	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$a", 'parse_mode' => 'html' ]); 
	} 	
if (preg_match("/^[\\/\\#\\!]?(put) (.*) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(put) (.*) (.*)\$/i", $text, $m);
                                                $count = $m[2];
                                                $count1 = $m[3];
                                                if (!file_exists($count)) {
													include 'config.php';
                                                    file_put_contents("$count", "$count1");
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل $m[2] ساخته شد و کلمه $count1 در داخل آن ذخیره شد
													لینک شما : $url$m[2]"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل مورد نظر وجود دارد"]));
                                                }
                                            }

if (preg_match("/^[\\/\\#\\!]?(touch) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(touch) (.*)\$/i", $text, $m);
                                                if (!file_exists($m[2])) {
													include 'config.php';
                                                    touch($m[2]);
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل $m[2] ساخته شد
													لینک شما : $url$m[2]"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل مورد نظر وجود دارد"]));
                                                }
                                            }

if (preg_match("/^[\\/\\#\\!]?(mkdir) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(mkdir) (.*)\$/i", $text, $m);
                                                if (!is_dir($m[2])) {
													include 'config.php';
                                                    mkdir($m[2]);
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "پوشه $m[2] ساخته شد
													لینک شما : $url$m[2]"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "پوشه مورد نظر وجود دارد"]));
                                                }
                                            }
if (preg_match("/^[\\/\\#\\!]?(unlink) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(unlink) (.*)\$/i", $text, $m);
                                                if (file_exists($m[2])) {
													include 'config.php';
                                                    unlink($m[2]);
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل شما حذف شد"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل مورد نظر وجود ندارد"]));
                                                }
                                            }
                                            if (preg_match("/^[\\/\\#\\!]?(rmdir) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(rmdir) (.*)\$/i", $text, $m);
                                                if (is_dir($m[2])) {
													include 'config.php';
                                                    rmdir($m[2]);
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "پوشه $m[2] حذف  شد"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "پوشه مورد نظر وجود ندارد"]));
                                                }
                                            }
                                            if (preg_match("/^[\\/\\#\\!]?(scandir) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(scandir) (.*)\$/i", $text, $m);
                                                if (is_dir($m[2])) {
													include 'config.php';
                                                    $scan = scandir($m[2]);
                                                    $txtx = "وجود دارد";
                                                    foreach ($scan as $scans) {
                                                       $txtx .= "$scans";
                                                    }
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "پوشه $m[2] وجود دارد
فایل های داخل پوشه  $scans "]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فایل مورد نظر وجود ندارد"]));
                                                }
                                            }
                                            if (preg_match("/^[\\/\\#\\!]?(isdir) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(isdir) (.*)\$/i", $text, $m);
                                                if (is_dir($m[2])) {
													include 'config.php';
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " وجود دارد $m[2]
													لینک شما : $url$m[2]"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "وجود ندارد"]));
                                                }
                                            }
                                            if (preg_match("/^[\\/\\#\\!]?(isfile) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(isfile) (.*)\$/i", $text, $m);
                                                if (file_exists($m[2])) {
													include 'config.php';
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " وجود دارد $m[2]
													لینک شما : $url$m[2]"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "وجود ندارد"]));
                                                }
                                            }
                                            if (preg_match("/^[\\/\\#\\!]?(unzip) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(unzip) (.*)\$/i", $text, $m);
                                                $zip = new ZipArchive();
                                                if ($zip->open('$m[2]') === TRUE) {
                                                    mkdir("../zipfiles");
                                                    $zip->extractTo('../zipfiles');
                                                    $zip->close();
													include 'config.php';
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "با موفقیت آنزیپ شد
													لینک شما : $url$m[2]"]));
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "زیپ مورد نظر وجود ندارد"]));
                                                }
                                            }
                                            if (preg_match("/^[\\/\\#\\!]?(copy) (.*) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(copy) (.*) (.*)\$/i", $text, $m);
                                                if (file_exists($m[2])) {
                                                    copy($m[2], $m[3]);
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ok $m[2] ok $m[3]"]));
                                                    unlink($m[2]);
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "."]));
                                                }
                                            }
 if (preg_match("/^[\\/\\#\\!]?(download) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(download) (.*)\$/i", $text, $m);
                                                if (isset($update['message']['reply_to_msg_id'])) {
                                                    $rp = $update['message']['reply_to_msg_id'];
                                                    $Chat = (yield $MadelineProto->getPwrChat($peer, false));
                                                    $type = $Chat['type'];
                                                    if (in_array($type, ['channel', 'supergroup'])) {
                                                        $messeg = (yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$rp]]));
                                                    } else {
                                                        $messeg = (yield $MadelineProto->messages->getMessages(['id' => [$rp]]));
                                                    }
													include 'config.php';
                                                    if (isset($messeg['messages'][0]['media'])) {
                                                        $media = $messeg['messages'][0]['media'];
                                                        (yield $MadelineProto->downloadToFile($media, $m[2]));
                                                        (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "دانلود شد $m[2]
لینک شما : $url$m[2]"]));
                                                    } 
                                            }
 }
if (preg_match("/^[\\/\\#\\!]?(tophoto)\$/i", $text)) {
                                                if (isset($update['message']['reply_to_msg_id'])) {
                                                    $rp = $update['message']['reply_to_msg_id'];
                                                    $Chat = (yield $MadelineProto->getPwrChat($peer, false));
                                                    $type = $Chat['type'];
                                                    if (in_array($type, ['channel', 'supergroup'])) {
                                                        $messeg = (yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$rp]]));
                                                    } else {
                                                        $messeg = (yield $MadelineProto->messages->getMessages(['id' => [$rp]]));
                                                    }
                                                    if (isset($messeg['messages'][0]['media'])) {
                                                        $media = $messeg['messages'][0]['media'];
                                                        (yield $MadelineProto->downloadToFile($media, "files/nima.jpg"));
                                                        (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ok"]));
                                                        (yield $MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => ['_' => 'inputMediaUploadedPhoto', 'file' => "files/nima.jpg", 'attributes' => [['_' => 'documentAttributeFilename', 'file_name' => "nima.jpg"]]], 'message' => '', 'parse_mode' => 'HTML']));
                                                        unlink('files/nima.jpg');
                                                    } else {
                                                        (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ok"]));
                                                    }
                                                } else {
                                                    (yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ok"]));
                                                }
                                            }
                                            if ($text == 'time off' or $text == "Time off" or $text == 'time off') {
                                                $MadelineProto->account->updateProfile(['last_name' => " "]);
                                                $MadelineProto->account->updateProfile(['about' => " "]);
                                            }
if ($text == 'ساعت') {
	    date_default_timezone_set('Asia/Tehran');
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'فرصت ها مثل ابر میگذرن قدرشونو بدون رفیق']);
for ($i=1; $i <= 60; $i++){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => date('H:i:s')]);
yield $MadelineProto->sleep(1);
	}
	}
	if ($text == 'ping' or $text == 'هوی' or $text == 'پینگ') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "<a href='tg://user?id=$admin'>ՕՌʟƗՌƐ SƐʟҒ📚</a>", 'parse_mode'=> 'HTML']);
  }
 if(preg_match("/^[\/\#\!]?(setanswer) (.*)$/i", $text)){
$ip = trim(str_replace("/setanswer ","",$text));
$ip = explode("|",$ip."|||||");
$txxt = trim($ip[0]);
$answeer = trim($ip[1]);
if(!isset($data['answering'][$txxt])){
$data['answering'][$txxt] = $answeer;
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "کلمه جدید به لیست پاسخ شما اضافه شد👌🏻"]);
}else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "این کلمه از قبل موجود است :/"]);
 }
}

if(preg_match("/^[\/\#\!]?(php) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(php) (.*)$/i", $text, $a);
if(strpos($a[2], '$MadelineProto') === false and strpos($a[2], '$this') === false){
$OutPut = eval("$a[2]");
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "`🔻 $OutPut`", 'parse_mode'=>'markdown']);
}
}
if(preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text, $a);
$oldtime = time();
$link = $a[2];
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_NOBODY, TRUE);
$data = curl_exec($ch);
$size1 = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD); curl_close($ch);
$size = round($size1/1024/1024,1);
if($size <= 200.9){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '🌵 Please Wait...
💡 FileSize : '.$size.'MB']);
$path = parse_url($link, PHP_URL_PATH);
$filename = basename($path);
copy($link, "files/$filename");
yield $MadelineProto->messages->sendMedia([
 'peer' => $peer,
 'media' => [
 '_' => 'inputMediaUploadedDocument',
 'file' => "files/$filename",
 'attributes' => [['_' => 'documentAttributeFilename',
 'file_name' => "$filename"]]],
 'message' => "🔖 Name : $filename
💠 [Your File !]($link)
💡 Size : ".$size.'MB',
 'parse_mode' => 'Markdown'
]);
$t=time()-$oldtime;
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✅ Uploaded ($t".'s)']);
unlink("files/$filename");
} else {
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '⚠️ خطا : حجم فایل بیشتر از 200 مگ است!']);
}
}
 if(preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $text);
$txxt = $text[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "کلمه مورد نظر از لیست پاسخ حذف شد👌🏻"]);
}else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "این کلمه در لیست پاسخ وجود ندارد :/"]);
 }
}

if($text == '/id' or $text == 'id'){
  if (isset($message['reply_to_msg_id'])) {
   if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => 'YourID : '.$messag, 'parse_mode' => 'markdown']);
} else {
	if($type3 == 'user'){
 yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "YourID : `$peer`", 'parse_mode' => 'markdown']);
}}} else {
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "GroupID : `$peer`", 'parse_mode' => 'markdown']);
}
}

if(isset($message['reply_to_msg_id'])){
if($text == 'unblock' or $text == '/unblock' or $text == '!unblock'){
if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->contacts->unblock(['id' => $messag]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "UnBlocked!"]);
  } else {
  	if($type3 == 'user'){
yield $MadelineProto->contacts->unblock(['id' => $peer]); $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "UnBlocked!"]);
}
}
}
if (strpos($text, "pin") !== false) {
                                                    $MadelineProto->messages->updatePinnedMessage(['silent' => true, 'peer' => $peer, 'id' => [$msg_id]]);
                                                }

if($text == 'block' or $text == '/block' or $text == '!block'){
if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->contacts->block(['id' => $messag]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Blocked!"]);
  } else {
 	if($type3 == 'user'){
yield $MadelineProto->contacts->block(['id' => $peer]); $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Blocked!"]);
}
}
}

if(preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gmsg['messages'][0]['from_id'];
  if(!in_array($messag, $data['enemies'])){
    $data['enemies'][] = $messag;
    file_put_contents("data.json", json_encode($data));
    yield $MadelineProto->contacts->block(['id' => $messag]);
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$messag is now in enemy list"]);
  } else {
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "This User Was In EnemyList"]);
  }
}
if(preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gmsg['messages'][0]['from_id'];
  if(in_array($messag, $data['enemies'])){
    $k = array_search($messag, $data['enemies']);
    unset($data['enemies'][$k]);
    file_put_contents("data.json", json_encode($data));
    yield $MadelineProto->contacts->unblock(['id' => $messag]);
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$messag deleted from enemy list"]);
  } else{
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "This User Wasn't In EnemyList"]);
  }
 }
}

if(preg_match("/^[\/\#\!]?(answerlist)$/i", $text)){
if(count($data['answering']) > 0){
$txxxt = "لیست پاسخ ها :
";
$counter = 1;
foreach($data['answering'] as $k => $ans){
$txxxt .= "$counter: $k => $ans \n";
$counter++;
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
}else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "پاسخی وجود ندارد!"]);
  }
 }
  $timei = date('i:s');
if ($timei == '05:00' or $timei == '10:00' or $timei == '
:00' or $timei == '20:00' or $timei == '25:00' or $timei == '30:00' or $timei == '35:00' or $timei == '40:00' or $timei == '45:00' or $timei == '50:00' or $timei == '55:00' or $timei == '00:00') {
     $MadelineProto->restart();
}
if($text == 'راهنما' or $text == 'help' or $text == 'hel' or $text == 'زاهنما' or $text == 'داهنما' or $text == 'واهنما' or $text == 'کمک' or $text == 'پنل' or $text == 'هلپ '){ 
$load = sys_getloadavg(); 
$time = date("H:i:s"); 
$mem_using = round(memory_get_usage() / 1024 / 1024,1); 
$akhri = $data['akhri']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
ʜᴇʟᴘ ○ ʀᴀɪᴍᴏɴ ● 📚 
▼ʜᴇʟᴘᴇʀ sᴇʟғ ᴛᴏᴜʀʙᴏ sᴛᴀᴛᴜs 
 
◄►ᴘᴀɴᴇʟ  ≼≽ [ pnl ] 
▼sᴇɴᴅ ᴘᴀɴᴇʟ sᴇʟғ|باز شدن پنل سلف• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ʜᴇʟᴘ ≼≽[ راهنما ] • [ help ] 
▼sᴇɴᴅ ʜᴇʟᴘᴇʀ ʏᴏᴜʀ sᴇʟғ|ارسال راهنمای سلف • 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ᴘʀᴀᴄᴛɪᴄᴀʟ ≼≽ [ کاربردی ] • [ Practical ] 
▼sᴇɴᴅ ʜᴇʟᴘ ᴘʀᴀᴄᴛɪᴄᴀʟ| راهنمای کاربردی• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ᴇɴᴛᴇʀᴛᴀɪɴᴍᴇɴᴛ ≼≽ [ سرگرمی ] • [ entertainment ] 
▼sᴇɴᴅ ʜᴇʟᴘ ᴇɴᴛᴇʀᴛᴀɪɴᴍᴇɴᴛ|بخش راهنمای سرگرمی • 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ᴀᴄᴛɪᴏɴs ≼≽ [ actions ] • [ اکشن ] 
▼sᴇɴᴅ ʜᴇʟᴘ ᴀᴄᴛɪᴏɴs|بخش راهنمای اکشن ها و مود ها• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ᴍᴀɴᴀɢᴇᴍᴇɴᴛ ≼≽ [ management ] • [ مدیریت ] 
▼sᴇɴᴅ ʜᴇʟᴘ ᴍᴀɴᴀɢᴇᴍᴇɴᴛ| بخش راهنمای مدیریت• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ɢʀᴏᴜᴘ ᴍᴀɴᴀɢᴇᴍᴇɴᴛ ≼≽ [ مدیریت گروه ]  
▼sᴇɴᴅ ʜᴇʟᴘ ɢʀᴏᴜᴘ ᴍᴀɴᴀɢᴇᴍᴇɴᴛ| بخش راهنمای مدیریت گروه• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ᴘʟᴜs ≼≽ [ plus ] • [پلاس ] 
▼sᴇɴᴅ ʜᴇʟᴘ ᴘʟᴜs |بخش راهنمای پلاس• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ʜᴏsᴛ ≼≽ [ host ] • [ هاست ] 
▼sᴇɴᴅ ʜᴇʟᴘ ʜᴏsᴛ | بخش راهنمای هاست• 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►لیست فعال 
دریافت لیست فعال امکانات سلف
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
 
 ✔ᴅᴇᴠ ➣ ᴀʀᴛɪɴ_ғᴇ √
 
ᴛɪᴍᴇ:$time 
اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
━━━━━━✦━━━━━  
 Ʀᴀᴍ: $mem_using ᴍʙ 
 ᴘɪɴɢ :   $load[0] 
", 
'parse_mode' => 'HTML']); 
$data['akhri'] = "$time"; 
file_put_contents('data.json', json_encode($data)); 
}
if($text == 'کاربردی' or $text == 'کاربرد' or $text == 'karbordi' or $text == 'کابر' or $text == 'کاربری' or $text == 'واهنما' or $text == 'کمک کابردی' or $text == 'درخاست کمک کاربردی' or $text == 'هلپ کاربردی'){ 
$load = sys_getloadavg(); 
$time = date("H:i:s"); 
$mem_using = round(memory_get_usage() / 1024 / 1024,1); 
$akhri = $data['akhri']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►  Save 
ارسال مطلب مورد نظرت به پیویت 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Info(ایدی شخص)  
دریافت مشخصات شخص 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Black(ریپلی یا نوشتن ایدی شخص)  
بلاک کردن شخص 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Unblock(ریپلی یا نوشتن ایدی شخص)  
آنبلاک کردن شخص 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Cheakusername(ایدی با ادسام)  
چک کردن ازاد بودن ایدی 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Setfirstname 
تغییر اسم اکانت 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Setlastname
تغییر اسم 2 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Setbio 
تغییر بیو 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Setusername 
تغییر یوزرنیم 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Muzic(اسم موزیک)  
دریافت موزیک 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Music(متن)  
دریافت بخشی از یک اهنگ 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Voice(متن)  
دریافت ویس سکسی و با حال 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Gifs(متن)  
◄►gif1 (متن) 
◄►gif2 (متن) 
◄►gif3 (متن) 
◄► koksal (متن)
دریافت گیف متن مورد نظرت 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Like (متن)  
ساخت متن لایک دار 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Search(متن)  
پیدا کردن متن مورد نظرتون در پیوی و گروه 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Mean(متن)  
دریافت معنی و کلمه های مورد نظر متنتون 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Font(اسم به انگلیسی) 
دریافت فونت اسم 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► ارز 
دریافت نرخ ارز 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► اذان (اسم شهر) 
اوقات شرعی یک شهر 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Stats 
دریافت امار اکانت خود 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  

◄► Wheather(اسم شهر)  
دریافت اب هوا  
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► Sessions  
دریافت نشصت های فعال اکانتت 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► usr (ایدی شخص ) 
پیدا کردن ایدی عددی با ایدی 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► sex (عکس،فیلم،گیف) 
دریافت عکس و فیلم و گیف سکسی 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►Jᴏᴋᴇ 
دریافت جوک 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►Gɪғ + موضوع گیف 
سرچ گیف 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►pic or bing + موضوع عکس 
سرچ عکس 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►music2 [name]
شما نام موزیک را بنویسید تا کامل اهنگ رو ربات برای شما بفرسته
نکته : فقط اهنگ های خارجی رو داره
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►kalame (مبتدی | اسان | سخت)
با فرستادن این ربات بازی کلمه رو میفرسته 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►hosh (text)
بازی هوش
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► trjome + متن
ترجمه متن انگلیسی به فارسی
◄►translate +متن
معنی کلمه در فرهنگ لغت
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►bazi + xo or تیکو or نقطه بازی or مین روب or جمشید or گیر بازار
با قرار دادن این کلمه و فاصله دادن سپس یکی از 
بخش ها میتونید بازی دریافت کنید
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► tophoto
دانلود عکس زماندار
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► Cron Link
کرون جاب به لینک
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► شمارت
بر روی پیام شخص ریپلی کنید و شماره فرد را در دیتابیس جستجو کنید
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  

 ✔ᴅᴇᴠ ➣ ᴀʀᴛɪɴ_ғᴇ √
 
ᴛɪᴍᴇ:$time 
اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
━━━━━━✦━━━━━  
 Ʀᴀᴍ: $mem_using ᴍʙ 
 ᴘɪɴɢ : $load[0] 
 
", 
 
'parse_mode' => 'HTML']); 
 
$data['akhri'] = "$time"; 
file_put_contents('data.json', json_encode($data)); 
 
}
if($text == 'سرگرمی' or $text == 'راهنماسرگرمی' or $text == 'راهنما سرگرمی' or $text == 'sar' or $text == 'بزارسرگرمی' or $text == 'سرگرم' or $text == 'سرگرمیه' or $text == 'سرگرم کننده'){ 
$load = sys_getloadavg(); 
$time = date("H:i:s"); 
$mem_using = round(memory_get_usage() / 1024 / 1024,1); 
$akhri = $data['akhri']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => " 
---------------------------------- 
  
『 قلب』                    
『 موربع』            『 شمارش 』  
『 قلبز 』                    『 بکیرم 』  
『 موک 』                   『........ 』  
『 مربع 』                   『 زنبور 』  
『 شب خوش 』           『 زنبور2 』  
『 دنس 』                  『 زنبور3 』  
『 موتور 』                  『 رقس/رقاص 』  
『 ساک 』                  『 جق 』  
『 انگش 』                 『 حمله 』  
『 شمارش2』                    『 ماشین 』  
『 ........ 』                   『 گوه 』  
『 بمیر کرونا 』             『 ارور 』  
『 مرغ 』                    『 مکعب 』  
『 ایول 』                    『 خودم 』  
『 بوس 』                   『 فاک 』  
『 خالی ..... 』                   『 تایم 『 :|』 
『 فوتبال 』                 『 برم بخوابم 』  
『 غرقش کن 』             『 فضانورد 』  
『 ابر 』                       『 شکست عشقی』  
『 عقاب 』                   『 پیشی برد 』  
『 ........ 』                   『 اپدیت 』  
『 خالی   .... 』            『 ........... 』  
『 پول 』                     『 خزوخیل 』  
『 خالی ..... 』                     『 ..........』  
『 قلب2 』                  『 قلب ترکیب 』  
『 ویروس 』                『 رقص2 』  
『 شمارش معکوس 』    『 مسجد 』  
『 رقص مربع 』            『 کرونا بمیر 』  
『 شب بخیر 』             『 برم بخوابم 』  
----------------------------------   
ᴛɪᴍᴇ:$time 
اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
━━━━━━✦━━━━━  
 Ʀᴀᴍ : $mem_using ᴍʙ 
 ᴘɪɴɢ :    $load[0] 
", 
'parse_mode' => 'HTML']); 
$data['akhri'] = "$time"; 
file_put_contents('data.json', json_encode($data)); 
}
if($text == 'اکشن' or $text == 'اکشن ها' or $text == 'اکشن' or $text == 'actions' or $text == 'begadahande' or $text == 'action' or $text == 'bega' or $text == 'Help bega' or $text == 'help bega '){ 
$load = sys_getloadavg(); 
$time = date("H:i:s"); 
$mem_using = round(memory_get_usage() / 1024 / 1024,1); 
$akhri = $data['akhri']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►typing + on or off  حالت در حال تایپ 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
 ◄►game + on or off  حالت در حال بازی
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
 ◄►zbt + on or off   حالت در حال ضبط صدا 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►under + on or off  حالت زیرخط نویس
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►strike + on or off حالت خط خورده‌نویس
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►mono + on or off  حالت کپی شونده
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
 ◄►tag + on or off  حالت هشتگ
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►men + on or off   حالت منشن خود 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►men2 + on or off  حالت منشن‌کاربر ریپلای شده
▂▂▂▂▂▂▂▂▂▂▂▂▂▂   
 ◄►bold + on or off  حالت پررنگ نویس
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄►italic + on or off    حالت کج نویس
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
fa1 ➣fa7 +on Or off
روشن و خاموش کردن فونت کردن متن فارسی 
از 1 تا 7 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
en1➣en9 +on Or off
روشن و خاموش کردن فونت کردن متن انگلیسی از 1 تا 9
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
✔ᴅᴇᴠ ➣ ᴀʀᴛɪɴ_ғᴇ √

ᴛɪᴍᴇ:$time 
اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
━━━━━━✦━━━━━  
 Ʀᴀᴍ : $mem_using ᴍʙ 
 ᴘɪɴɢ : $load[0] 
", 
'parse_mode' => 'HTML']); 
$data['akhri'] = "$time"; 
file_put_contents('data.json', json_encode($data)); 
}
if($text == 'مدیریت' or $text == ' مدیریت'){ 
$load = sys_getloadavg(); 
$time = date("H:i:s"); 
$mem_using = round(memory_get_usage() / 1024 / 1024,1); 
$akhri = $data['akhri']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
به قسمت مدیریت‌  📿  خوش اومدین 
◄► bot +on or off روشن و خاموشی ربات
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► adduser + user id + group id ادد کردن کاربر به گروه
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► mee آیدی عددی شما 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► markread + on or off  حالت خوانده شدن پیام خودکار 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► online + on or off  حالت همیشه آنلاین
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► zaman +on or off حالت ساعت در اسم به صورت رندوم با تغییر اسم
◄► time on Or off حالت ساعت روشن و خاموش
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► pnl or پنل
جهت دریافت پنل  apiربات
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► lockpv + on Or off
روشن و خاموش کردن قفل پیوی
▂▂▂▂▂▂▂▂▂▂▂▂▂▂  
◄► پشتیبانی
جهت سوالات خود این  کلمه بفرستیت
----------------------------------
 ✔ᴅᴇᴠ ➣ ᴀʀᴛɪɴ_ғᴇ √
 
ᴛɪᴍᴇ:$time 
اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
━━━━━━✦━━━━━  
 Ʀᴀᴍ : $mem_using ᴍʙ 
 ᴘɪɴɢ : $load[0] 
", 
'parse_mode' => 'HTML']); 
$data['akhri'] = "$time"; 
file_put_contents('data.json', json_encode($data)); 
}
if($text == 'مدیریت گروه' or $text == ' مدیریت گروه'){ 
     $load = sys_getloadavg(); 
     $time = date("H:i:s"); 
     $mem_using = round(memory_get_usage() / 1024 / 1024,1); 
     $akhri = $data['akhri']; 
     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
 ◄►cleanall 
◄►clean (تعداد) 
پاکسازی پیام های گروه 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►ban (دلیل بن کردن) 
◄►unban (دلیل) 
     بن کردن و ان بن کردن افراد گروه با ریپلای   
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►setvip (دلیل ویژه کردن)
◄►delvip (دلیل)
     ویژه کردن  و حذف  از ویژه یک فرد در گروه با ریپلای  
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► delall 
◄► del 
پاکسازی پیام های شخص با ریپلی کردن روی آن در گروه 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►mute (دلیل)
◄►unmute(دلیل)  
     سکوت و حذف سکوت کردن یک فرد در گروه  با ریپلای   
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► mutelist 
    لیست سکوت 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂     
◄►  banlist 
     لیست بن 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► Cleanmute 
پاکسازی لیست سکوت 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► Cleanban 
پاکسازی لیست بن 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► Cleanvip 
پاکسازی لیست ویژه 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► Cleanlist 
پاکسازی لیست ها 
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 

✔ᴅᴇᴠ ➣ ᴀʀᴛɪɴ_ғᴇ √

     ᴛɪᴍᴇ : $time 
     اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
   ━━━━━━✦━━━━━ 
     Ʀᴀᴍ : $mem_using ᴍʙ 
     ᴘɪɴɢ : $load[0] 
     "]); 
    $data['akhri'] = "$time"; 
     file_put_contents('data.json', json_encode($data)); 
}
if($text == 'پلاس' or $text == 'plus'){ 
     $load = sys_getloadavg(); 
     $time = date("H:i:s"); 
     $mem_using = round(memory_get_usage() / 1024 / 1024,1); 
     $akhri = $data['akhri']; 
     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
     
├bakhsh Plus | بخش پلاس
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►ғᴀʟʟ ᴏʀ ғᴀʟ ᴏʀ  فال  
 Receive fortune telling randomly.
   دریافت فال بصورت رندم•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
 ◄►دیالوگ  
 Receive beautiful dialogues in random.
   دریافت دیالوگ های زیبا به صورت رندم•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►بیو
 Receive beautiful bio in random.
   دریافت بیو های زیبا به صورت رندم•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►داستان    
    ├•• Receive beautiful Story in random.
   دریافت داستان های زیبا به صورت رندم •
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►عید
Remaining days to Eid.
   دریافت زمان باقی مانده به عید•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►دانستنی
Receive beautiful danstani in random.
   دریافت داسنتنی به صورت رندم•
      ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►ایا میدانید
 Receive beautiful how anderstand in random.
   دریافت ایا میدانید ها به صورت رندم•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►پ ن پ 
 Receive beautiful PNP in random.
   دریافت پ ن پ های جالب به صورت رندم•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►ذکر 
 Receive beautiful zekr in random.
   دریافت ذکر روز های هفته•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►حدیث
Receive beautiful hadis in random.
   دریافت حدیث های متنوع از پیامبران•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►خاطره  
Receive beautiful khatere in random.
   دریافت خاطره های متنوع •
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►Webping Text
Website Pings.
   پینگ وبسایت مورد نظرشما•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
   ├Screen website
   ◄►•• Screen Website.
   اسکرین شات از وبسایت مورد نظرشما•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►/Tas number
 send Like Your Dice.
   تاس به عدد دلخاه شما•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►بکیرمم
 bekiram.
   اوردن سرگرمی بکیرم به صورت رندم•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
 
  ◄► stiker  Text
 Send Your Message  Sticker.
   ارسال استیکر متنی•
     ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►غزل
 Sending Your Ghazal.
   ارسال غزل های زیبا •
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
━━━━━━✦━━━━━ 
  ✔ᴅᴇᴠ ➣ ᴀʀᴛɪɴ_ғᴇ √
  
     ᴛɪᴍᴇ : $time 
     اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
   ━━━━━━✦━━━━━ 
     Ʀᴀᴍ : $mem_using ᴍʙ 
     ᴘɪɴɢ : $load[0] 
     "]); 
    $data['akhri'] = "$time"; 
     file_put_contents('data.json', json_encode($data)); 
}
if($text == 'host' or $text == 'هاست' or $text == 'هاستت' or $text == 'هوست' or $text == 'راهنمای هاست' or $text == 'Host' or $text == 'HOST' or $text == 'راهنمای هاستو بده' or $text == 'هلپ هاست'){ 
$load = sys_getloadavg(); 
$time = date("H:i:s"); 
$mem_using = round(memory_get_usage() / 1024 / 1024,1); 
$akhri = $data['akhri']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
├bakhsh Host | بخش هاست
 ◄► mkdir name/name
 create Your Folder To Host. 
    ساخت پوشه در هاست •
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄►put name.php text
    ├•Build a folder in a pre-created folder.
    ساخت پوشه در پوشه از قبل ایجاد شده•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►   touch name.php
 Build the file and put the code inside it.
    ساخت فایل و قرار دادن کد داخل آن•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
  ◄► touch name/name.php
 File creation.
    File creation•
  ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄► unlink name.php یا unlink name/name.php
Create a file in a pre-made folder.
    ساخت فایل در پوشه از قبل ساخته شده•
  ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►   rmdir name یا rmdir/name
Delete the desired file.
    حذف فایل مورد نظر •
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
 ◄►  isdir name یا isdir/name
 Delete the desired folder.
    حذف پوشه مورد نظر•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►   isfile name.php یا isfile/name.php
Notice the available folder.
    اطلاع از موجود بود پوشه •
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►   scandir name یا scandir/name
    ├•Notification of file availability.
    بررسی پوشه مورد نظر•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►   unzip name.zip یا name/name.zip
Unzip the desired zipper.
    آنزیپ کردن  زیپ مورد نظر•
    ▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
◄►   download name.php (reply || ریپلای)  
Download the desired source.
    دانلود سورس مورد نظر•
▂▂▂▂▂▂▂▂▂▂▂▂▂▂ 
 ✔ᴅᴇᴠ ➣  ᴀʀᴛɪɴ_ғᴇ √
 
ᴛɪᴍᴇ:$time 
اخرین بار که شما راهنمارو دیدین در ساعت : $akhri 
━━━━━━✦━━━━━  
 Ʀᴀᴍ: $mem_using ᴍʙ 
 ᴘɪɴɢ : $load[0] 
 
", 
 
'parse_mode' => 'HTML']); 
 
$data['akhri'] = "$time"; 
file_put_contents('data.json', json_encode($data)); 
 
}
if ($text == 'رم' or $text == 'ser' or $text == '..' or $text == 'ram' or $text == 'ser' or $text == 'رم استفاده شده') {
           $load = sys_getloadavg();
          $time = date("H:i:s");
          $mem_using = round(memory_get_usage() / 1024 / 1024,1);
          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
         ʀᴀᴍ: $mem_using ᴍʙ
          ᴘɪɴɢ  : $load[0]
          ᴛɪᴍᴇ : $time
          "]);
           }
if($text == 'ریستارت' or $text == 'restart' or $text == 'ریستارت'){
          yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ربات با موفقیت ریستارت شد"]);
           $MadelineProto->restart();
           }
    if ($text == 'تگ انلاین' or $text == "tag") {
     $lis = [];
     $ChatOnlines = $MadelineProto->messages->getOnlines(['peer' => $peer, ]);
     foreach ($ChatOnlines['participants'] as $ajbs) {
          if(isset($ajbs['user']['username']))
          $lis[] = $ajbs['user']['username'];
          }
          foreach ($lis as $sinamm) {
               yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$sinamm \n" ]);
          }
}
if(preg_match("/^[\/\#\!]?(save)$/i", $text) && isset($message['reply_to_msg_id'])){
$me = yield $MadelineProto->get_self();
$me_id = $me['id'];
yield $MadelineProto->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $me_id, 'id' => [$message['reply_to_msg_id']]]);
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "> Saved :D"]);
     }
      if($data['runf'] == 'on'){
   yield $MadelineProto->messages->sendMessage(['peer' => "atu_sudo", 'message' => "من سلفت رو ران کردم"]);
   $data['runf'] = "off";
     file_put_contents("data.json", json_encode($data));
}
if (strpos($text,"ن سلفت رو ران") !== false) {
     $data['runf'] = "off";
     file_put_contents("data.json", json_encode($data));
}
     if(preg_match("/^[\/\#\!]?(hosh) (.*)$/i", $text)){
     preg_match("/^[\/\#\!]?(hosh) (.*)$/i", $text, $m);
     $mu = $m[2];
     $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@hooshrobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
     $query_id = $messages_BotResults['query_id'];
     $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
     yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if(preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text)){
          preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text, $m);
          $data['part'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "part mode now Is $m[2]"]);
        }
        elseif($text == "ارز"){ 
    $arz= json_decode(file_get_contents("https://api.codebazan.ir/arz/?type=arz"),true); 
 
$yoro=$arz ['0']['price']; 
$emarat=$arz ['1']['price']; 
$swead=$arz ['2']['price']; 
$norway=$arz ['3']['price']; 
$iraq=$arz ['4']['price']; 
$swit=$arz ['5']['price']; 
$armanestan=$arz ['6']['price']; 
$gorgea=$arz ['7']['price']; 
$pakestan=$arz ['8']['price']; 
$soudi=$arz ['9']['price']; 
$russia=$arz ['10']['price']; 
$india=$arz ['11']['price']; 
$kwait=$arz ['12']['price']; 
$astulia=$arz ['13']['price']; 
$oman=$arz ['14']['price']; 
$qatar=$arz ['15']['price']; 
$kanada=$arz ['16']['price']; 
$tailand=$arz ['17']['price']; 
$turkye=$arz ['18']['price']; 
$england=$arz ['19']['price']; 
$hong=$arz ['20']['price']; 
$azarbayjan=$arz ['21']['price']; 
$malezy=$arz ['22']['price']; 
$danmark=$arz ['23']['price']; 
$newzland=$arz ['24']['price']; 
$china=$arz ['25']['price']; 
$japan=$arz ['26']['price']; 
$bahrin=$arz ['27']['price']; 
$souria=$arz ['28']['price']; 
$dolar=$arz ['29']['price']; 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => " 
 
🇪🇺 یورو : $yoro 
------ 
🇺🇸 دلار : $dolar 
------ 
🇦🇪درهم امارات  : $emarat 
------ 
🇸🇪 کرون سوئد : $swead 
------ 
🇳🇴 کرون نروژ : $norway 
------ 
🇮🇶 دینار عراق : $iraq 
------ 
🇨🇭فرانک سوئیس : $swit 
------ 
🇦🇲 درام ارمنستان : $armanestan 
------ 
🇬🇪لاری گرجستان : $gorgea 
------ 
🇵🇰 روپیه پاکستان : $pakestan 
------ 
🇷🇺 روبل روسیه : $russia 
------ 
🇮🇳 روپیه هندوستان : $india 
------ 
🇰🇼 دینار کویت : $kwait 
------ 
🇦🇺 دلار استرلیا : $astulia 
------ 
🇴🇲 ریال عمان : $oman 
------ 
🇶🇦 ریال قطر : $qatar 
------ 
🇨🇦 دلار کانادا : $kanada 
------ 
🇹🇭بات تایلند : $tailand 
------ 
🇹🇷 لیر ترکیه : $turkye 
------ 
🇬🇧 پوند انگلیس : $england 
------ 
🇭🇰 دلار هنگ کنگ : $hong 
------ 
🇦🇿 منات اذربایجان : $azarbayjan 
------ 
🇲🇾رینگیت مالزی : $malezy 
------ 
🇩🇰 کرون دانمارک : $danmark 
------ 
🇳🇿 دلار نیوزلند : $newzland 
------ 
🇨🇳 یوان چین : $china 
------ 
🇯🇵 ین ژآپن : $japan 
------ 
🇧🇭 دینار بحرین : $bahrin 
------ 
🇸🇾 لیر سوریه : $souria 
"]); 
}
elseif($text == 'stats'){ 
  yield $this->messages->sendMessage(['peer' => $update, 'message' => '⇜ در حال پردازش آمار سلف...', 'reply_to_msg_id' => $msg_id]);       
 $mem_using = round((memory_get_usage()/1024)/1024, 0).' مگابایت'; 
 $load = sys_getloadavg(); 
  $peerUser = 0; $supergroup = 0; $channel = 0; $peerChat = 0; $leavegroup = 0; 
  $dialogs = yield $this->get_dialogs(); 
foreach ($dialogs as $peer) {  
 if($peer['_'] == 'peerUser') $peerUser ++; 
 elseif($peer['_'] == 'peerChannel') { 
   $Chat = yield $this->getInfo($peer); 
   if($Chat['type'] == 'supergroup') { 
if(isset($Chat['Chat']['banned_rights']) and $Chat['Chat']['banned_rights']['send_messages'] == true){ 
try { 
  yield $this->channels->leaveChannel(['channel' => $peer]); 
  $leavegroup ++; 
} catch (\Throwable $e) { } 
}      
$supergroup ++; 
   } 
   elseif($Chat['type'] == 'channel') $channel ++;          
 } 
 elseif($peer['_'] == 'peerChat') $peerChat ++; 
} 
   $contacts = count(yield $this->contacts->getContactIDs()); 
  yield $this->messages->sendMessage(['peer' => $update, 'message' => "⇜ آمار فعلی ربات سلف! 
⇜ تعداد پیوی ها : $peerUser 
⇜ تعداد گروه ها : $peerChat 
⇜ تعداد سوپرگروه ها : $supergroup 
⇜ تعداد کانال ها : $channel 
⇜ تعداد مخاطبان : $contacts 
⇜ تعداد گروه های خارج شده : $leavegroup 
⇜ پینگ سرور : $load[0] 
⇜ مقدار مصرف رم : $mem_using", 'reply_to_msg_id' => $msg_id]);       
}
elseif($text == "قیمت ماشین"){ 
    $car = json_decode(file_get_contents("https://api.codebazan.ir/car-price/"),true); 
    $name1 = $car["Result"]['0']["name"]; 
    $moshakhasat1 = $car["Result"]['0']["moshakhasat"]; 
   $karkhane1 = $car["Result"]['0']["karkhane"]; 
   $bazar1 = $car["Result"]['0']["bazar"]; 
   $name2 = $car["Result"]['1']["name"]; 
    $moshakhasat2 = $car["Result"]['1']["moshakhasat"]; 
   $karkhane2 = $car["Result"]['1']["karkhane"]; 
   $bazar2 = $car["Result"]['1']["bazar"]; 
   $name3 = $car["Result"]['10']["name"]; 
    $moshakhasat3 = $car["Result"]['10']["moshakhasat"]; 
   $karkhane3 = $car["Result"]['10']["karkhane"]; 
   $bazar3 = $car["Result"]['10']["bazar"]; 
   $name4 = $car["Result"]['12']["name"]; 
    $moshakhasat4 = $car["Result"]['12']["moshakhasat"]; 
   $karkhane4 = $car["Result"]['12']["karkhane"]; 
   $bazar4 = $car["Result"]['12']["bazar"]; 
   $name5 = $car["Result"]['15']["name"]; 
    $moshakhasat5 = $car["Result"]['15']["moshakhasat"]; 
   $karkhane5 = $car["Result"]['15']["karkhane"]; 
   $bazar5 = $car["Result"]['15']["bazar"]; 
   $name6 = $car["Result"]['26']["name"]; 
    $moshakhasat6 = $car["Result"]['26']["moshakhasat"]; 
   $karkhane6 = $car["Result"]['26']["karkhane"]; 
   $bazar6 = $car["Result"]['26']["bazar"]; 
   $name7 = $car["Result"]['35']["name"]; 
    $moshakhasat7 = $car["Result"]['35']["moshakhasat"]; 
   $karkhane7 = $car["Result"]['35']["karkhane"]; 
   $bazar7 = $car["Result"]['35']["bazar"]; 
              $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => " 
نام ماشین : $name1 
مشخصات : $moshakhasat1 
قیمت کارخانه : $karkhane1 
قیمت در بازار : $bazar1 
➖➖➖➖➖➖➖➖➖ 
نام ماشین :$name2  
مشخصات : $moshakhasat2 
قیمت کارخانه :$karkhane2  
قیمت در بازار :$bazar2  
➖➖➖➖➖➖➖➖➖ 
نام ماشین :$name3  
مشخصات : $moshakhasat3 
قیمت کارخانه : $karkhane3 
قیمت در بازار : $bazar3 
➖➖➖➖➖➖➖➖➖ 
نام ماشین : $name4 
مشخصات :  $moshakhasat4 
قیمت کارخانه :$karkhane4  
قیمت در بازار :$bazar4  
➖➖➖➖➖➖➖➖➖ 
نام ماشین : $name5 
مشخصات : $moshakhasat5 
قیمت کارخانه :$karkhane5  
قیمت در بازار :$bazar5  
➖➖➖➖➖➖➖➖➖ 
نام ماشین :$name6  
مشخصات : $moshakhasat6 
قیمت کارخانه : $karkhane6 
قیمت در بازار :$bazar6  
➖➖➖➖➖➖➖➖➖ 
نام ماشین : $name7 
مشخصات : $moshakhasat7 
قیمت کارخانه :$karkhane7 
قیمت در بازار : $bazar7 
➖➖➖➖➖➖➖➖➖ 
موفق باشید . 
"]); 
}
 if(preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text, $m);
$data['typing'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Typing Now Is $m[2]"]);
     }
     if(preg_match("/^[\/\#\!]?(bazi) (.*)$/i", $text)){
     preg_match("/^[\/\#\!]?(bazi) (.*)$/i", $text, $m);
     $mu = $m[2];
     $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@bodobazibot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
     $query_id = $messages_BotResults['query_id'];
     $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
     yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     else if(preg_match("/^[\/\#\!]?(لوگو) (.*)$/i", $text)){
                    preg_match("/^[\/\#\!]?(لوگو) (.*)$/i", $text, $m);
                    $query = $m[2];
                    $text2 = str_replace(' ','+',$query);
                    yield $MadelineProto->messages->sendMedia([
                         'peer' => $peer,
                         'media' => [
                             '_' => 'inputMediaUploadedDocument',
                             'file' => "https://mrblack.farahost.site/apiha/textr.php?text=$text2&effct=5912e4772ea7b9447b8d8802",
                             'attributes' => [
                                 ['_' => 'documentAttributeAnimated']
                             ]
                         ],
                         'message' => " لوگو مورد نظر شما با اسم: $query",
                         'parse_mode' => 'HTML'
                     ]);
               }
               else if(preg_match("/^[\/\#\!]?( لوگوو) (.*)$/i", $text)){
                    preg_match("/^[\/\#\!]?(لوگوو) (.*)$/i", $text, $m);
                    $query = $m[2];
                    $text2 = str_replace(' ','+',$query);
                    yield $MadelineProto->messages->sendMedia([
                         'peer' => $peer,
                         'media' => [
                             '_' => 'inputMediaUploadedDocument',
                             'file' => "https://mrblack.farahost.site/apiha/textr.php?text=$text2&effct=603cbe13afe7db930d8b47bc",
                             'attributes' => [
                                 ['_' => 'documentAttributeAnimated']
                             ]
                         ],
                         'message' => "لوگو مورد نظر شما با اسم: $query",
                         'parse_mode' => 'HTML'
                     ]);
                    }
                    else if(preg_match("/^[\/\#\!]?(لوگووو) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(لوگووو) (.*)$/i", $text, $m);
                         $query = $m[2];
                         $text2 = str_replace(' ','+',$query);
                         yield $MadelineProto->messages->sendMedia([
                              'peer' => $peer,
                              'media' => [
                                  '_' => 'inputMediaUploadedDocument',
                                  'file' => "https://mrblack.farahost.site/apiha/textr.php?text=$text2&effct=60387affafe7dbd6718b4780",
                                  'attributes' => [
                                      ['_' => 'documentAttributeAnimated']
                                  ]
                              ],
                              'message' => "لوگو مورد نظر شما با اسم: $query",
                              'parse_mode' => 'HTML'
                          ]);
                         }
 if(preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text, $m);
$data['echo'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Echo Now Is $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text, $m);
$data['markread'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Markread Now Is $m[2]"]);
     }
     if($text == 'delall' or $text == 'پاکسازی'){
if($type3 == "supergroup"||$type3 == "chat"){
yield $this->messages->sendMessage([
'peer' => $peer,
'reply_to_msg_id' => $msg_id,
'message'=> "پیام های گروه با موفقیت پاک شد 📌",
'parse_mode'=> 'markdown' ,
]);
$array = range($msg_id,1);
$chunk = array_chunk($array,100);
foreach($chunk as $v){
sleep(0.05);
yield $this->channels->deleteMessages([
'channel' =>$peer,
'id' =>$v
]);
}
}}
else if(preg_match("/^[\/\#\!]?(fonet) (.*)$/i", $text)){ 
preg_match("/^[\/\#\!]?(fonet) (.*)$/i", $text, $m); 
$query = $m[2]; 
$text2 = str_replace(' ','+',$query); 
$link = json_decode(file_get_contents("http://api.codebazan.ir/font/?text=$text2"),true); 
$link2 = $link["result"]; 
$Ali1 = $link2['1']; 
$Ali2 = $link2['2']; 
$Ali3 = $link2['3']; 
$Ali4 = $link2['4']; 
$Ali5 = $link2['5']; 
$Ali6 = $link2['6']; 
$Ali7 = $link2['7']; 
$Ali8 = $link2['8']; 
$Ali9 = $link2['9']; 
$Ali10 = $link2['10']; 
$Ali11 = $link2['11']; 
$Ali12 = $link2['12']; 
$Ali13 = $link2['13']; 
$Ali14 = $link2['14']; 
$Ali15 = $link2['15']; 
$Ali16 = $link2['16']; 
$Ali17 = $link2['17']; 
$Ali18 = $link2['18']; 
$Ali19 = $link2['19']; 
$Ali20 = $link2['20']; 
$Ali21 = $link2['21']; 
$Ali22 = $link2['22']; 
$Ali23 = $link2['23']; 
$Ali24 = $link2['24']; 
$Ali25 = $link2['25']; 
$Ali26 = $link2['26']; 
$Ali27 = $link2['27']; 
$Ali28 = $link2['28']; 
$Ali29 = $link2['29']; 
$Ali30 = $link2['30']; 
$Ali31 = $link2['31']; 
$Ali32 = $link2['32']; 
$Ali33 = $link2['33']; 
$Ali34 = $link2['34']; 
$Ali35 = $link2['35']; 
$Ali36 = $link2['36']; 
$Ali37 = $link2['37']; 
$Ali38 = $link2['38']; 
$Ali39 = $link2['39']; 
$Ali40 = $link2['40']; 
$Ali41 = $link2['41']; 
$Ali42 = $link2['42']; 
$Ali43 = $link2['43']; 
$Ali44 = $link2['44']; 
$Ali45 = $link2['45']; 
$Ali46 = $link2['46']; 
$Ali47 = $link2['47']; 
$Ali48 = $link2['48']; 
$Ali49 = $link2['49']; 
$Ali50 = $link2['50']; 
$Ali51 = $link2['51']; 
$Ali52 = $link2['52']; 
$Ali53 = $link2['53']; 
$Ali54 = $link2['54']; 
$Ali55 = $link2['55']; 
$Ali56 = $link2['56']; 
$Ali57 = $link2['57']; 
$Ali58 = $link2['58']; 
$Ali59 = $link2['59']; 
$Ali60 = $link2['60']; 
$Ali61 = $link2['61']; 
$Ali62 = $link2['62']; 
$Ali63 = $link2['63']; 
$Ali64 = $link2['64']; 
$Ali65 = $link2['65']; 
$Ali66 = $link2['66']; 
$Ali67 = $link2['67']; 
$Ali68 = $link2['68']; 
$Ali69 = $link2['69']; 
$Ali70 = $link2['70']; 
$Ali71 = $link2['71']; 
$Ali72 = $link2['72']; 
$Ali73 = $link2['73']; 
$Ali74 = $link2['74']; 
$Ali75 = $link2['75']; 
$Ali76 = $link2['76']; 
$Ali77 = $link2['77']; 
$Ali78 = $link2['78']; 
$Ali79 = $link2['79']; 
$Ali80 = $link2['80']; 
$Ali81 = $link2['81']; 
$Ali82 = $link2['82']; 
$Ali83 = $link2['83']; 
$Ali84 = $link2['84']; 
$Ali85 = $link2['85']; 
$Ali86 = $link2['86']; 
$Ali87 = $link2['87']; 
$Ali88 = $link2['88']; 
$Ali89 = $link2['89']; 
$Ali90 = $link2['90']; 
$Ali91 = $link2['91']; 
$Ali92 = $link2['92']; 
$Ali93 = $link2['93']; 
$Ali94 = $link2['94']; 
$Ali95 = $link2['95']; 
$Ali96 = $link2['96']; 
$Ali97 = $link2['97']; 
$Ali98 = $link2['98']; 
$Ali99 = $link2['99']; 
$Ali100 = $link2['100']; 
$Ali101 = $link2['101']; 
$Ali102 = $link2['102']; 
$Ali103 = $link2['103']; 
$Ali104 = $link2['104']; 
$Ali105 = $link2['105']; 
$Ali106 = $link2['106']; 
$Ali107 = $link2['107']; 
$Ali108 = $link2['108']; 
$Ali109 = $link2['109']; 
$Ali110 = $link2['110']; 
$Ali111 = $link2['111']; 
$Ali112 = $link2['112']; 
$Ali113 = $link2['113']; 
$Ali114 = $link2['114']; 
$Ali115 = $link2['115']; 
$Ali116 = $link2['116']; 
$Ali117 = $link2['117']; 
$Ali118 = $link2['118']; 
$Ali119 = $link2['119']; 
$Ali120 = $link2['120']; 
$Ali121 = $link2['121']; 
$Ali122 = $link2['122']; 
$Ali123 = $link2['123']; 
$Ali124 = $link2['124']; 
$Ali125 = $link2['125']; 
$Ali126 = $link2['126']; 
$Ali127 = $link2['127']; 
$Ali128 = $link2['128']; 
$Ali129 = $link2['129']; 
$Ali130 = $link2['130']; 
$Ali131 = $link2['131']; 
$Ali132 = $link2['132']; 
$Ali133 = $link2['133']; 
$Ali134 = $link2['134']; 
$Ali135 = $link2['135']; 
$Ali136 = $link2['136']; 
$Ali137 = $link2['137']; 
$Ali138 = $link2['138']; 
 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => " 
فونت شما با موفقیت✅ با اسم $query ساخته شد و بصورت زیر قرار گرفت🤟🏻 
<┈┅┅━━━✦━━━┅┅┈> 
1 => $Ali1 
2 => $Ali2 
3 => $Ali3 
4 => $Ali4 
5 => $Ali5 
6 => $Ali6 
7 => $Ali7 
8 => $Ali8 
9 => $Ali9 
10 => $Ali10 
11 => $Ali11 
12 => $Ali12 
13 => $Ali13 
14 => $Ali14 
15 => $Ali15 
16 => $Ali16 
17 => $Ali17 
18 => $Ali18 
19 => $Ali19 
20 => $Ali20 
21 => $Ali21 
22=> $Ali22 
23 => $Ali23 
24 => $Ali24 
25 => $Ali25 
25 => $Ali26 
27 => $Ali27 
28 => $Ali28 
29 => $Ali29 
30 => $Ali30 
31 => $Ali31 
32 => $Ali32 
33 => $Ali33 
34 => $Ali34 
35 => $Ali35 
36 => $Ali36 
37 => $Ali37 
38 => $Ali38 
39 => $Ali39 
40 => $Ali40 
41 => $Ali41 
42 => $Ali42 
43 => $Ali43 
44 => $Ali44 
45 => $Ali45 
46 => $Ali46 
47 => $Ali47 
48 => $Ali48 
49 => $Ali49 
50 => $Ali50 
51 => $Ali51 
52 => $Ali52 
53 => $Ali53 
54 => $Ali54 
55 => $Ali55 
56 => $Ali56 
57 => $Ali57 
58 => $Ali58 
59 => $Ali59 
60 => $Ali60 
61 => $Ali61 
62 => $Ali62 
63 => $Ali63 
64 => $Ali64 
65 => $Ali65 
66 => $Ali66 
67 => $Ali67
68 => $Ali68 
69 => $Ali69 
70 => $Ali70 
71 => $Ali71 
72 =>$Ali72 
73 => $Ali73 
74 => $Ali74 
75 => $Ali75 
76 => $Ali76 
77 => $Ali77 
78 => $Ali78 
79 => $Ali79 
80 => $Ali80 
81 => $Ali81 
82 => $Ali82 
83 => $Ali83 
84 =>  $Ali84 
85 => $Ali85 
86 => $Ali86 
87 => $Ali87 
88 => $Ali88 
89 => $Ali89 
90 => $Ali90 
91 => $Ali91 
92 => $Ali92 
93 => $Ali93 
94 => $Ali94 
95 => $Ali95 
96 => $Ali96 
97 => $Ali97 
98 => $Ali98 
99 => $Ali99 
100 => $Ali100 
101 => $Ali101 
102 =>$Ali102 
103 => $Ali103 
104 => $Ali104 
105 => $Ali105 
106 => $Ali106 
107 => $Ali107 
108 => $Ali108 
109 => $Ali109 
110 => $Ali110 
111 => $Ali111 
112 => $Ali112 
113 => $Ali113 
114 => $Ali114 
115 => $Ali115 
116 => $Ali116 
117 => $Ali117 
118 => $Ali118 
119 => $Ali119 
120 => $Ali120 
121 => $Ali121 
122 => $Ali122 
123 => $Ali123 
124 => $Ali124 
125 => $Ali125 
126 => $Ali126 
127 => $Ali127  
128 => $Ali128 
129 => $Ali129 
130 => $Ali130 
131 => $Ali131 
132 => $Ali132 
133 => $Ali133 
134 => $Ali134 
135 => $Ali135 
136 => $Ali136 
137 => $Ali137 
138 => $Ali138 
<┈┅┅━━━✦━━━┅┅┈> 
"]); 
}
if(preg_match("/^[\/\#\!]?(sex) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(sex) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@XxXHub_RBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if(preg_match("/^[\/\#\!]?(music2) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(music2) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@ahangifybot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if(preg_match("/^[\/\#\!]?(bazi) (.*)$/i", $text)){
     preg_match("/^[\/\#\!]?(bazi) (.*)$/i", $text, $m);
     $mu = $m[2];
     $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@bodobazibot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
     $query_id = $messages_BotResults['query_id'];
     $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
     yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(info) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(info) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_status = $me['status']['_'];
$me_bio = $mee['full']['about'];
$me_common = $mee['full']['common_chats_count'];
$me_name = $me['first_name'];
$me_uname = $me['username'];
$mes = "ID: $me_id \nName: $me_name \nUsername: @$me_uname \nStatus: $me_status \nBio: $me_bio \nCommon Groups Count: $me_common";
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => $mes]);
     }
 if(preg_match("/^[\/\#\!]?(block) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(block) (.*)$/i", $text, $m);
yield $MadelineProto->contacts->block(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Blocked!"]);
     }
     else if(preg_match("/^[\/\#\!]?(translate) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(translate) (.*)$/i", $text, $m);
$query = $m[2];
$text2 = str_replace(' ','+',$query);
$link = json_decode(file_get_contents("https://api.codebazan.ir/vajehyab/?text=$text2"),true);
$link2 = $link["result"];
$fa = $link2['fa'];
$en = $link2['en'];
$dic = $link2['dic'];
$mani = $link2['mani'];
$fmoein = $link2['Fmoein'];
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
معنی کلمه ب صورت زیر
fa : $fa
en : $en
ـــــــــــــــــــــــــــــــــــــــــ
کلمه های مشابه : $dic
ــــــــــــــــــــــــــــــــــــــــــــ
معنی واژه 
$mani
ـــــــــــــــــــــــــــــــــــــــــ
در چه کار های از  $query استفاده میشود 
$fmoein

"]);
}
 if(preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text, $m);
yield $MadelineProto->contacts->unblock(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "UnBlocked!"]);
     }
        if ($data['part'] == 'on') {
                         if($update){
if(strlen($text) < 200){
           $text = str_replace(" ","‌",$text);
     for ($s=1; $s <= mb_strlen($text) ; $s++) {
          yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => mb_substr($text, 0 , $s)]);
          yield $MadelineProto->sleep(0.1);
}}}}
if((time() - filectime('Auto_restart.txt')) > 1000){
unlink('Auto_restart.txt');
yield $this->messages->sendMessage(['peer' => $admin, 'message' => 'ربات بمولا ریست شد!']);
yield $this->restart();
file_put_contents('Auto_restart.txt', '');
}
else if(preg_match("/^[\/\#\!]?(setvip) (.*)$/i", $text)){
               preg_match("/^[\/\#\!]?(setvip) (.*)$/i", $text, $m);
               $query = $m[2];
               $time = date("H:i:s");
               if($type3 == 'supergroup' or $type3 == 'chat'){
                 $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                 $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                 $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                 $messag = $gms['messages'][0]['from_id'];
                    $mes = "\n 𝑼𝒔𝒆𝒓 => $messag  \n 𝑩𝒆𝒄𝒖𝒂𝒔𝒆 => $query\n<┈┅┅━━━✦━━━┅┅┈> \n";
                    file_put_contents('list/vip.txt', $mes,FILE_APPEND);
                    $vip = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => false, 'embed_links' => false, 'send_polls' => false, 'change_info' => true, 'invite_users' => false, 'pin_messages' => false, 'until_date' => 999999];
       $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $vip, ]);
       $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
𝑻𝒉𝒊𝒔 𝑼𝒔𝒆𝒓 => $messag 👽
𝑰𝒏 𝑻𝒊𝒎𝒆 => $time ⏰
𝑩𝒆𝒄𝒂𝒖𝒔𝒆 => $query 💡
𝑽𝒊𝒑𝒆𝒅✅
       "]);
       }
     }
     else if(preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text)){
          preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text, $m);
          $query = $m[2];
          if($type3 == 'supergroup' or $type3 == 'chat'){
            $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
            $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
            $messag = $gms['messages'][0]['from_id'];
            $mes = "\n 𝑼𝒔𝒆𝒓 => $messag  \n 𝑩𝒆𝒄𝒖𝒂𝒔𝒆 => $query\n<┈┅┅━━━✦━━━┅┅┈> \n";
                        file_put_contents('list/mute.txt', $mes,FILE_APPEND);
            $mute = ['_' => 'chatBannedRights', 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
            $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $mute, ]);
            $MadelineProto->channels->editMessage(['channel' => $peer, 'user_id' => $messag, ]);
            $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
𝑻𝒉𝒊𝒔 𝑼𝒔𝒆𝒓 => $messag 👽
𝑰𝒏 𝑻𝒊𝒎𝒆 => $time ⏰
𝑩𝒆𝒄𝒂𝒖𝒔𝒆 => $query 💡
𝑴𝒖𝒕𝒆𝒅✅
            "]);
            }
          }
          else if(preg_match("/^[\/\#\!]?(ban) (.*)$/i", $text)){
               preg_match("/^[\/\#\!]?(ban) (.*)$/i", $text, $m);
               $query = $m[2];
               if($type3 == 'supergroup' or $type3 == 'chat'){
                 $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                 $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                 $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                 $messag = $gms['messages'][0]['from_id'];
                 $mee = yield $MadelineProto->get_full_info($messag);
                 $mes = "\n 𝑼𝒔𝒆𝒓 => $messag  \n 𝑩𝒆𝒄𝒖𝒂𝒔𝒆 => $query\n<┈┅┅━━━✦━━━┅┅┈> \n";
                 file_put_contents('list/ban.txt', $mes,FILE_APPEND);
                 $ban = ['_' => 'chatBannedRights', 'view_messages' => true, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                 $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $ban, ]);
                 $MadelineProto->channels->editMessage(['channel' => $peer, 'user_id' => $messag ]);
                 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
𝑻𝒉𝒊𝒔 𝑼𝒔𝒆𝒓 => $messag 👽
𝑰𝒏 𝑻𝒊𝒎𝒆 => $time ⏰
𝑩𝒆𝒄𝒂𝒖𝒔𝒆 => $query 💡
𝑩𝒂𝒏𝒆𝒅✅
                 "]); 
                  }
               }
               else if(preg_match("/^[\/\#\!]?(unban) (.*)$/i", $text)){
                    preg_match("/^[\/\#\!]?(unban) (.*)$/i", $text, $m);
                    $query = $m[2];
                    if($type3 == 'supergroup' or $type3 == 'chat'){
                      $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                      $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                      $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                      $messag = $gms['messages'][0]['from_id'];
                      $mes = "\n 𝑼𝒔𝒆𝒓 => $messag  \n 𝑩𝒆𝒄𝒖𝒂𝒔𝒆 => $query\n<┈┅┅━━━✦━━━┅┅┈> \n";
                       file_put_contents('list/ban.txt', $mes,FILE_APPEND);
                      $unban = ['_' => 'chatBannedRights', 'view_messages' => false, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 99999];
                      $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $unban, ]);
                      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
𝑻𝒉𝒊𝒔 𝑼𝒔𝒆𝒓 => $messag 👽
𝑰𝒏 𝑻𝒊𝒎𝒆 => $time ⏰
𝑩𝒆𝒄𝒂𝒖𝒔𝒆 => $query 💡
𝑼𝒏𝑩𝒂𝒏𝒆𝒅✅
                      "]); 
                      }
                    }
                    else if(preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text, $m);
                         $query = $m[2];
                         if($type3 == 'supergroup' or $type3 == 'chat'){
                           $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                           $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                           $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                           $messag = $gms['messages'][0]['from_id'];
                           $mee = yield $MadelineProto->get_full_info($messag);
                           $mes = "\n 𝑼𝒔𝒆𝒓 => $messag  \n 𝑩𝒆𝒄𝒖𝒂𝒔𝒆 => $query\n<┈┅┅━━━✦━━━┅┅┈> \n";
                           file_put_contents('list/mute.txt', $mes,FILE_APPEND);
                           $unmute = ['_' => 'chatBannedRights',  'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 9999];
                           $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $unmute, ]);
                           $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
𝑻𝒉𝒊𝒔 𝑼𝒔𝒆𝒓 => $messag 👽
𝑰𝒏 𝑻𝒊𝒎𝒆 => $time ⏰
𝑩𝒆𝒄𝒂𝒖𝒔𝒆 => $query 💡
𝑼𝒏𝑴𝒖𝒕𝒆𝒅✅
                      "]); 
                    }
                         }
               else if(preg_match("/^[\/\#\!]?(delvip) (.*)$/i", $text)){
                    preg_match("/^[\/\#\!]?(delvip) (.*)$/i", $text, $m);
                    $query = $m[2];
                    if($type3 == 'supergroup' or $type3 == 'chat'){
                      $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                      $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                      $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                      $messag = $gms['messages'][0]['from_id'];
                      $mee = yield $MadelineProto->get_full_info($messag);
                      $mes = "\n 𝑼𝒔𝒆𝒓 => $messag  \n 𝑩𝒆𝒄𝒖𝒂𝒔𝒆 => $query\n<┈┅┅━━━✦━━━┅┅┈> \n";
                      file_put_contents('list/vip.txt', $mes,FILE_APPEND);
                      $delvip = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => true, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                      $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $delvip, ]);
                      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
𝑻𝒉𝒊𝒔 𝑼𝒔𝒆𝒓 => $messag 👽
𝑰𝒏 𝑻𝒊𝒎𝒆 => $time ⏰
𝑩𝒆𝒄𝒂𝒖𝒔𝒆 => $query 💡
𝑼𝒏𝑽𝒊𝒑𝒆𝒅✅
                      "]); 
                      }
                    }
 if(preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text)){
preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text, $m);
$check = yield $MadelineProto->account->checkUsername(['username' => str_replace("@", "", $m[2])]);
if($check == false){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Exists!"]);
} else{
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Free!"]);
}
     }
     if ($text == 'پاکسازی لیست سکوت' or $text == '/cleanmute') {
file_put_contents("mute.txt", '𝑫𝒐𝒏𝒆❗');
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "🧹 𝑴𝒖𝒕𝒆 𝑳𝒊𝒔𝒕 𝑪𝒍𝒆𝒂𝒏𝒆𝒅 🧹"]);

}
if ($text == 'پاکسازی لیست بن' or $text == '/cleanban') {
     file_put_contents("ban.txt", '𝑫𝒐𝒏𝒆❗');
     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "🧹 𝑩𝒂𝒏 𝑳𝒊𝒔𝒕 𝑪𝒍𝒆𝒂𝒏𝒆𝒅 🧹"]);

     }
     if ($text == 'پاکسازی لیست ویژه' or $text == '/cleanvip') {
          file_put_contents("vip.txt",'𝑫𝒐𝒏𝒆❗');
          $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "🧹 𝑽𝒊𝒑 𝑳𝒊𝒔𝒕 𝑪𝒍𝒆𝒂𝒏𝒆𝒅 🧹"]);

          }
          if ($text == 'پاکسازی لیست ها' or $text == '/cleanlist') {
               file_put_contents("mute.txt", '𝑫𝒐𝒏𝒆❗');
               file_put_contents("ban.txt", '𝑫𝒐𝒏𝒆❗');
               file_put_contents("vip.txt", '𝑫𝒐𝒏𝒆❗');
               $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "🧹✯ [𝑴𝒖𝒕𝒆,𝑩𝒂𝒏,𝑽𝒊𝒑] 𝑳𝒊??𝒕 𝑪𝒍𝒆𝒂𝒏𝒆𝒅 ✯🧹"]);
               }
               if ($data['time'] == 'on') {
     date_default_timezone_set('Asia/Tehran');
         $time = date("H:i");
         $fonts = [["𝟶","𝟷","𝟸","𝟹","𝟺","𝟻","𝟼","𝟽","𝟾","𝟿​"],["〚𝟎〛","〚𝟏〛","〚𝟐〛","〚𝟑〛","〚𝟒〛〚𝟓〛","〚𝟓〛","〚𝟔〛","〚𝟕〛","〚𝟖〛","〚𝟗〛"],["〔𝟘〕","〔𝟙〕","〔𝟚〕","〔𝟛〕","〔𝟜〕","〔𝟝〕","〔𝟞〕","〔𝟟〕","〔𝟠〕","〔𝟡〕"], ["𝟘","𝟙","𝟚","𝟛","𝟜","𝟝"," 𝟞","𝟟","𝟠","𝟡"],["❬0❭","❬1❭","❬2❭","❬3❭","❬4❭","❬5❭","❬6❭","❬7❭","❬8❭","❬9❭"],["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨"],["𝟬","𝟭","𝟮","𝟯","𝟰","𝟱","𝟲","𝟳","𝟴","𝟵"],["0⃣","1⃣","2⃣","3⃣","4⃣","5⃣","6⃣","7⃣","8⃣","9⃣"],["𝟶","҉1","҉2","҉3","҉4","҉5","҉6","҉7","҉8","҉9҉"]];
         $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("H:i"));
         $day_number = jdate('j');
         $month_number = jdate('n');
         $year_number = jdate('y');
         $day_name = jdate('l');
          $MadelineProto->account->updateProfile(['about' => "Today is 📆|$year_number/$month_number/$day_number||TIME:$time2|⏰$day_name "]);
       $MadelineProto->account->updateProfile(['last_name' => "$time2"]);
     }
     else if(preg_match("/^[\/\#\!]?(هوای|weather) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(هوای|weather) (.*)$/i", $text, $m);
$query = $m[2];
$url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
$city = $url["name"];
$deg = $url["main"]["temp"];
$bad = $url["wind"]["speed"];
$did = $url["visibility"];
$feshar = $url["main"]["pressure"];
$type1 = $url["weather"][0]["main"];
if($type1 == "Clear"){
		$tpp = 'آفتابی☀';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Clouds"){
		$tpp = 'ابری ☁☁';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Rain"){
		 $tpp = 'بارانی ☔';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Thunderstorm"){
		$tpp = 'طوفانی ☔☔☔☔';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Mist"){
		$tpp = 'مه 💨';
file_put_contents('type.txt',$tpp);
	}
  if($city != ''){
$ziro = file_get_contents('type.txt');

$MadelineProto->messages->sendMessage(['peer' => $peer, 'message'=> "
  
✦<b> دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد . 
✦ سرعت باد $bad متر بر ثانیه است . 
✦ دید افقی $did متر است . 
✦ فشار هوای $feshar میلی بار است . 
✦ شرایط فعلی آب و هوا: $ziro </b>
", 
'parse_mode' => 'MarkDown',
'reply_to_msg_id' => $message['id']
, 'parse_mode' => 'html' ]);
unlink('type.txt');
}else{

yield $this->messages->sendMessage(['peer'=>$peer,'reply_to_msg_id'=> $msg_id, 'message'=> "⚠️شهر مورد نظر شما يافت نشد"]);

 }
}
if($text == "امار کرونا" or $text=='cor pic' or $text=='COR PIC'){ 
$danpic = file_get_contents('http://api.turbocode.ir/corona/photo.php'); 
 yield $MadelineProto->messages->sendMedia([ 'peer' => $peer, 'media' => [ '_' => 'inputMediaUploadedPhoto', 'file' => 'http://api.turbocode.ir/corona/photo.php'], 
'parse_mode' => 'MarkDown',
'reply_to_msg_id' => $message['id']
, 'parse_mode' => 'html' ]); 

}
 if(preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['first_name' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Done!"]);
     }
 if(preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['last_name' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Done!"]);
     }
 if(preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['about' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Done!"]);
     }
 if(preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateUsername(['username' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Done!"]);
     }
     if(preg_match("/^[\/\#\!]?(fakee) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(fakee) (.*)$/i", $text, $m);
                         $query = $m[2];
$text2 = str_replace(' ','+',$query);
$urlmr = json_decode(file_get_contents("https://api.codebazan.ir/telegram/?type=average&channel=$text2"),true);
                         $foto = $urlmr["result"];
                     $kirkharr = $foto['members_count'];
                     $kirkhar2 = $foto['post_count'];
                     $kirkhar3 = $foto['total_seen'];
                     $kirkhar4 = $foto['average'];
                     $kirkhar5 = $foto['description'];
                     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
تعداد ممبر های کانال

$kirkharr

تعدادپست های کانال

$kirkhar2

تعدادسین  ها پست ها

$kirkhar3

میانگین سین ها

$kirkhar4

وضعیت این کانال

$kirkhar5
                    "]);
                    }
                     if(preg_match("/^[\/\#\!]?(phone) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(phone) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@phoneDatabot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if (preg_match("/^[\/\#\!]?(usr) (.*)$/i", $text)) {
     preg_match("/^[\/\#\!]?(usr) (.*)$/i", $text, $m);
     $mu =$m[2];
     $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@usinfobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0',]);
     $query_id = $messages_BotResults['query_id'];
     $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
     yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id",]);
 }
 if(preg_match("/^[\/\#\!]?(join) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(join) (.*)$/i", $text, $m);
yield $MadelineProto->channels->joinChannel(['channel' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Joined!"]);
     }
if(preg_match("/^[\/\#\!]?(add2all) (@.*)$/i", $text)){
preg_match("/^[\/\#\!]?(add2all) (@.*)$/i", $text, $m);
$dialogs = yield $MadelineProto->get_dialogs();
foreach ($dialogs as $peeer) {
$peer_info = yield $MadelineProto->get_info($peeer);
$peer_type = $peer_info['type'];
if($peer_type == "supergroup"){
  yield $MadelineProto->channels->inviteToChannel(['channel' => $peeer, 'users' => [$m[2]]]);
}
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Added To All SuperGroups"]);
     }
      if(preg_match("/^[\/\#\!]?(clean)(.*)$/i", $text)){
preg_match("/^[\/\#\!]?(clean)(.*)$/i", $text);
     if(!isset($update['update']['message']['reply_to_msg_id'])){
     $del = str_replace("clean","",$text);
     if(is_numeric($del)){
     for($i = $msg_id -1; $i>=$msg_id -1-$del;$i--){
          $MadelineProto->channels->deleteMessages(['channel' => $peer, 'id' => [$i], ]);
     //$MadelineProto->messages->deleteMessages(['peer' => $peer, 'id' => [$i]]);
     }
     $ed = $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>" تعداد $del پیام با موفقیت پاکسازی شد✅ ", 'parse_mode' => 'HTML' ]);
     }else{
     $ed = $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"لظفا یک عدد وارد کنید ", 'parse_mode' => 'HTML' ]);
     }
     }
     }
     if(strpos($text , "font") !== false or strpos($text , "ساخت فونت ") !== false){
      $matntrtoen1 =str_replace(['font ','ساخت فونت '],'',$text);
      $matntrtoen2 =str_replace(' ','+',$matntrtoen1);
   $fonts=   file_get_contents("http://api.eliyateam.ir/font.php?output=txt&text=$matntrtoen2");
$ed = yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>" $fonts
 ", 'parse_mode' => 'html' ]);}
 if(preg_match("/^[\/\#\!]?(newanswer) (.*) \|\|\| (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(newanswer) (.*) \|\|\| (.*)$/i", $text, $m);
$txxt = $m[2];
$answeer = $m[3];
if(!isset($data['answering'][$txxt])){
$data['answering'][$txxt] = $answeer;
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "New Word Added To AnswerList"]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "This Word Was In AnswerList"]);
}
     }
 if(preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $m);
$txxt = $m[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Word Deleted From AnswerList"]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "This Word Wasn't In AnswerList"]);
}
     }
 if(preg_match("/^[\/\#\!]?(clean answers)$/i", $text)){
$data['answering'] = [];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "AnswerList Is Now Empty!"]);
     }
 if(preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_name = $me['first_name'];
if(!in_array($me_id, $data['enemies'])){
$data['enemies'][] = $me_id;
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->contacts->block(['id' => $m[2]]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$me_name is now in enemy list"]);
} else {
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "This User Was In EnemyList"]);
}
     }
 if(preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_name = $me['first_name'];
if(in_array($me_id, $data['enemies'])){
$k = array_search($me_id, $data['enemies']);
unset($data['enemies'][$k]);
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->contacts->unblock(['id' => $m[2]]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$me_name deleted from enemy list"]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "This User Wasn't In EnemyList"]);
}
     }
 if(preg_match("/^[\/\#\!]?(clean enemylist)$/i", $text)){
$data['enemies'] = [];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "EnemyList Is Now Empty!"]);
     }
 if(preg_match("/^[\/\#\!]?(enemylist)$/i", $text)){
if(count($data['enemies']) > 0){
$txxxt = "EnemyList:
";
$counter = 1;
foreach($data['enemies'] as $ene){
  $mee = yield $MadelineProto->get_full_info($ene);
  $me = $mee['User'];
  $me_name = $me['first_name'];
  $txxxt .= "$counter: $me_name \n";
  $counter++;
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "No Enemy!"]);
}
     }
     if (preg_match("/^[\/\#\!]?(Pnl)$/i", $text)) {
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ʏᴏᴜʀ ᴘᴀɴᴇʟ ᴏᴘᴇɴᴇᴅ :)", 'parse_mode' => 'MarkDown']);
$Helper="@HELPER_HUNTERbot";
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@$Helper", 'peer' => $peer, 'query' => "panel_ ", 'offset' => '0',]);
$query_id = $messages_BotResults['query_id']; $query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true,
'peer' => $peer, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id",]);
}

 if(preg_match("/^[\/\#\!]?(inv) (@.*)$/i", $text) && $update['_'] == "updateNewChannelMessage"){
preg_match("/^[\/\#\!]?(inv) (@.*)$/i", $text, $m);
$peer_info = yield $MadelineProto->get_info($message['to_id']);
$peer_type = $peer_info['type'];
if($peer_type == "supergroup"){
yield $MadelineProto->channels->inviteToChannel(['channel' => $message['to_id'], 'users' => [$m[2]]]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Just SuperGroups"]);
}
     }
 if(preg_match("/^[\/\#\!]?(leave)$/i", $text)){
yield $MadelineProto->channels->leaveChannel(['channel' => $message['to_id']]);
     }
 if(preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text, $m);
$count = $m[2];
$txt = $m[3];
$spm = "";
for($i=1; $i <= $count; $i++){
$spm .= "$txt \n";
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $spm]);
     }
 if(preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text, $m);
$count = $m[2];
$txt = $m[3];
for($i=1; $i <= $count; $i++){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
}
     }
     if(strpos($text , "trjome") !== false or strpos($text , "farci") !== false){
      $matntrtoen1 =str_replace(['trjome','farci '],'',$text);

      $matntrtoen2 =str_replace(' ','+',$matntrtoen1);

   $rev=   file_get_contents("http://api.codebazan.ir/lang/google/?FROM=en&TO=fa&TEXT=$matntrtoen2");
$ed =  yield $MadelineProto->messages->sendMessage([
'peer' => $peer,
'reply_to_msg_id' => $msg_id,
'message'=> "$rev",' parse_mode' => 'html' ]);
    }
     if (preg_match("/^[\\/\\#\\!]?(Cron) (.*)\$/i", $text)) {
                                                preg_match("/^[\\/\\#\\!]?(Cron) (.*)\$/i", $text, $m);
                                                $mu = str_replace('Cron ', '', $text);
                                                $rand = rand(999, 9999);
                                                file_get_contents("https://api.codebazan.ir/cron-job/?mail=nimasalahshour1@telegmail.com&pass=ni78136341ma&link=$mu&title=$rand&time=1");
                                                $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "لینک $mu به مدت 1 دقیقه کرونجاب شد", 'parse_mode' => 'HTML']);
 }

if(preg_match('/^[!\/#]?(age|سن) (\d+)\/(\d+)\/(\d+)$/i',$text,$match)){  

$get = file_get_contents("http://api.novateamco.ir/age/?year=".$match[2]."&month=".$match[3]."&day=".$match[4]);
$result = json_decode($get, true);
if($result['ok'] === true){ 
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message'=> " » محاسبه سن انجام شد ! » سن دقیق شما : *".$result['result']['year']."* سال و *".$result['result']['month']."* ماه و *".$result['result']['day']."* روز » کل روز های سپری شده : *".$result['other']['days']."*\n» حیوان سال شما : *".$result['other']['year_name']."*\n» روز های مانده به تولد بعدی شما : *".$result['other']['to_birth']."* ", 
'parse_mode' => 'MarkDown',
'reply_to_msg_id' => $message['id']
]); 
}  
}
 if(preg_match("/^[\/\#\!]?(music) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(music) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@melobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(chalesh|چالش) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(chalesh|چالش) (.*)$/i", $text, $m);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "چالش رندوم"]);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@kingquizbot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if (strpos($text, "njva ") !== false) {
       $ip = trim(str_replace("/njva ", "", $text));
       $ip = explode("|", $ip . "|||||");
       $mu = trim($ip[0]);
       $answeer = trim($ip[1]);
       $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@BgoRobot", 'peer' => $peer, 'query' => "$mu $answeer", 'offset' => '0',]);
       $query_id = $messages_BotResults['query_id'];
       $query_res_id = $messages_BotResults['results'][0]['id'];
       yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'editMessage' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id",]);
       $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "نجوا با موفقیت تحویل داده شد✅"]);
  }
     if(preg_match("/^[\/\#\!]?(fcnt|مخاطب فیک) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(fcnt|مخاطب فیک) (.*)$/i", $text, $m);
$mu=$m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "درحال ساخت مخاطب فیک با اسم ( $m[2] ) برای شما . . . !",'parse_mode' => 'markdown']);
$bot =[901,915,911,912,916,913,933,930,935,936,937,938,939,921,992,991,910];
$r = $bot[rand(0, count($bot)-1)];
$rr = rand(111,999);
$rrr = rand(1111,9999);
$phone = "+98 $r $rr $rrr";
yield $MadelineProto->messages->sendMedia(['peer' => $peer, 'reply_to_msg_id' => $msg_id, 'media' => ['_' => 'inputMediaContact', 'phone_number' => $phone, 'first_name' => $mu]]);
}
     

     if(preg_match("/^[\/\#\!]?(jh|جح)$/i", $text)){

        preg_match("/^[\/\#\!]?(jh|جح)$/i", $text, $m);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@hjrobot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][0]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
 if(preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@wiki", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     

	 	  if(preg_match("/^[\/\#\!]?(کوتاه|short) (.*)$/i", $text)){

preg_match("/^[\/\#\!]?(کوتاه|short) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@ylinkpro_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_text_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@uVidBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if( $text == '/panel' or $text == 'پنل'){ 
     $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@tar_kesh_bot", 'peer' => $peer, 'query' => "codex_", 'offset' => '0']); //آیدی رباتی ک توکنش تو فایل هلپر هس 
     $query_id = $messages_BotResults['query_id']; 
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id']; 
   yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]); 
 } 

 if(preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(google) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(google) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
      if(preg_match("/^[\/\#\!]?(voice) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(voice) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@Persian_Meme_Bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
} 
 if(preg_match("/^[\/\#\!]?(joke)$/i", $text)){
preg_match("/^[\/\#\!]?(joke)$/i", $text, $m);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(aasab)$/i", $text)){
preg_match("/^[\/\#\!]?(aasab)$/i", $text, $m);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][1]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(like) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(like) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@like", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(search) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(search) (.*)$/i", $text, $m);
$q = $m[2];
$res_search = yield $MadelineProto->messages->search(['peer' => $peer, 'q' => $q, 'filter' => ['_' => 'inputMessagesFilterEmpty'], 'min_date' => 0, 'max_date' => time(), 'offset_id' => 0, 'add_offset' => 0, 'limit' => 50, 'max_id' => $message['id'], 'min_id' => 1]);
$texts_count = count($res_search['messages']);
$users_count = count($res_search['users']);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Msgs Found: $texts_count \nFrom Users Count: $users_count"]);
foreach($res_search['messages'] as $text){
$textid = $text['id'];
yield $MadelineProto->messages->forwardMessages(['from_peer' => $text, 'to_peer' => $peer, 'id' => [$textid]]);
 }
}
 else if(preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text, $m);
$query = $m[2];
$url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
$city = $url["name"];
$deg = $url["main"]["temp"];
$type1 = $url["weather"][0]["main"];
if($type1 == "Clear"){
		$tpp = 'آفتابی☀';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Clouds"){
		$tpp = 'ابری ☁☁';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Rain"){
		 $tpp = 'بارانی ☔';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Thunderstorm"){
		$tpp = 'طوفانی ☔☔☔☔';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Mist"){
		$tpp = 'مه 💨';
file_put_contents('type.txt',$tpp);
	}
  if($city != ''){
$eagle_tm = file_get_contents('type.txt');
  $txt = "دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد

شرایط فعلی آب و هوا: $eagle_tm";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
unlink('type.txt');
}else{
 $txt = "⚠️شهر مورد نظر شما يافت نشد";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
 }
}
  else if(preg_match("/^[\/\#\!]?(sessions)$/i", $text)){
$authorizations = yield $MadelineProto->account->getAuthorizations();
$txxt="";
foreach($authorizations['authorizations'] as $authorization){
$txxt .="
هش: ".$authorization['hash']."
مدل دستگاه: ".$authorization['device_model']."
سیستم عامل: ".$authorization['platform']."
ورژن سیستم: ".$authorization['system_version']."
api_id: ".$authorization['api_id']."
app_name: ".$authorization['app_name']."
نسخه برنامه: ".$authorization['app_version']."
تاریخ ایجاد: ".date("Y-m-d H:i:s",$authorization['date_active'])."
تاریخ فعال: ".date("Y-m-d H:i:s",$authorization['date_active'])."
آی‌پی: ".$authorization['ip']."
کشور: ".$authorization['country']."
منطقه: ".$authorization['region']."

====================";
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txxt]);
     }
 if(preg_match("/^[\/\#\!]?(gpinfo)$/i", $text)){
$peer_inf = yield $MadelineProto->get_full_info($message['to_id']);
$peer_info = $peer_inf['Chat'];
$peer_id = $peer_info['id'];
$peer_title = $peer_info['title'];
$peer_type = $peer_inf['type'];
$peer_count = $peer_inf['full']['participants_count'];
$des = $peer_inf['full']['about'];
$mes = "ID: $peer_id \nTitle: $peer_title \nType: $peer_type \nMembers Count: $peer_count \nBio: $des";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $mes]);
     }
   }
 if($data['power'] == "on"){
   if ($from_id != $admin) {
   if($message && $data['typing'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
     }
     if($message && $data['game'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
}
if($message && $data['zbt'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
}
if( $data['gamepv'] == "on"){
      $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
      yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
      }
     if($message && $data['echo'] == "on"){
yield $MadelineProto->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $peer, 'id' => [$message['id']]]);
     }
     if(strpos($text, '😐') !== false and $data['poker'] == "on"){
	$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '😐', 'reply_to_msg_id' => $message['id']]);
     }
     if($message && $data['markread'] == "on"){
if(intval($peer) < 0){
yield $MadelineProto->channels->readHistory(['channel' => $peer, 'max_id' => $message['id']]);
yield $MadelineProto->channels->readMessageContents(['channel' => $peer, 'id' => [$message['id']] ]);
} else{
yield $MadelineProto->messages->readHistory(['peer' => $peer, 'max_id' => $message['id']]);
}
     }
if (strpos($text, "✅ #شماره_پیدا_شد") !== false && $from_id == 1565231209) {
                            $text2 = explode("\n", $text)[2];
                            $e1 = str_replace("☎️ شماره : ", "", $text2);
                            $msgsgs = file_get_contents("msgid25.txt");
                            $perer = file_get_contents("peer5.txt");
                            $e = file_get_contents("id.txt");
                            yield $this->messages->editMessage(['peer' => $perer, 'id' => $msgsgs, 'message' => "» شماره تلفن : `$e1`
» آیدی عددی : `$e`", 'parse_mode' => 'markdown']);
                            unlink("msgid25.txt");
                            unlink("peer5.txt");
                            unlink("id.txt");
                        }

                        if (strpos($text, "❌ #شماره_پیدا_نشد") !== false && $from_id == 1565231209) {
                            $msgsgs = file_get_contents("msgid25.txt");
                            $perer = file_get_contents("peer5.txt");
                            $e = file_get_contents("id.txt");
                            yield $this->messages->editMessage(['peer' => $perer, 'id' => $msgsgs, 'message' => "» شماره پیدا نشد ! «",
                                'parse_mode' => 'markdown']);
                            unlink("msgid25.txt");
                            unlink("peer5.txt");
                            unlink("id.txt");
                        }
                        if($type3 == 'user'){
if($text == $text and $data['lockpv'] == "on"){
     yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "دوست عزیز درحال حاظر حالت قفل پیوی فعال است و شما بلاک میشوید
      و به صاحب اکانت خبر داده میشه اگر خواست انبلاک میشوی"]);
      yield $MadelineProto->messages->sendMessage(['peer' => $admin, 'message' => "کاربر 
      $peer 
      به دلیل فعال بودن حالت قفل پیوی بلاک شد"]);

      yield $MadelineProto->contacts->block(['id' => $peer]);
          }
}
  $fohsh = [
"بچت فقط ببین چجوری مادرتو میگام تخم صگ ناموصتو بکیرم میبندم","ط کص مادرت گلدون کنم توله","کیرم ت دهن گشاد خاهرت شه بیناموص حرمی کیر بابات ت کص خاهرت","کص کون مادرتو میگام خارکصته واسی من میشاخی کیرم ت لب لوچه مادرت تخم صگ","بچت مادرت ارضا شه تخم جن بچت فقط دست ب تایپ شدم رو کص ناموصت","دارم مادرتو میگام میخندی","بزنم مادرتو سوراخ سوراخ کنم","گدی کنم مادرتو","بزنم کص کون مادرت یکی کنم","گیف ت کصک مادرت کنم","کص خاهر مادرت بیناموص","کص مادرت ناشناس اتحادی","نوچه مادرجندع بچت کص مادرت رو کیرمه","مادرتو رو کیرم بچرخونم سرش گیج بره کصش باز شه ","کیرم ت دهن سیاه مادرت میکنم","ڪیر خوشکلم ت ڪص زشت مادرت","کصمادرت دهنم اوفف زبونم ت کصک مادرت😂😳","خارکصته سجدع کن تا نزدم مادر خاهرت نگاییدم","کیر خر ت ناموصت مادرقعبه","کیر کلفته پسرک دیونه ت کص مادرت شه","بیناموص ی چت دیگه بدی شلوار مادرتو میکشم😂","کص مادرتو به 7 روش سامورایی میگاعم","کیر خور زادع واسی من میشاخی","کیرمو بکنم ت کص ناموصت","کیرم ت ناموصت تخم صگ","کص مادرت بدخاه پسرک دیونه","رو کصمادرت شمارع پسرک دیونه رو خال کوبی کنم یادگاری","یعنی خاک ت کصک مادرت شه","ناشناس مادر چموش مادرتو میگام بچت","کص ناموصت اگه چت ندی","اتحادی مادر گستاخ ابلح زادع","پوکر ت کصک مادرت گوارڪس ک توی","با تیزی بزنم کصک مادرتو تیکه تیکه کنم","کیر بابات ت کص خاهرت بیناموص","مادر کسخل وضو داری میزنی چتم","کیر همه بلوچ ها ت کصمادرت","تو فکر کن الان کیر همه ت کصمادرت باشه","تو فقط چت بدع من ناموصتو میگام","شرمندع دستور از بالا اومدع باید مادرتو بگام","زبون صگ ت کص مادرت","ب من میگن سلف الان کص مادرتو قفل من کردن فهمیدی؟کیر ت ناموصت مادر جندع","ڪیر ت ڪصدون خاهر مادرت","مادرت بکیرم تخم صگ","ناموصتو میگاعم بی اموصت میکنم","گوه ت کص کون مادرت بگو باشه","بیناموص ارزش این فحش های نابو داری","کیر گاو ت کص گشاد خاهرت","نخوندم مادرت پریود شد یا نه","کص گشاد مادرت بکیرم","کص خوشکل خاهرت دهنم","سیاه کص زادع بچت ک حشری شدم رو ناموصت","مست کص مادرت شدم میدونی"
];
if(in_array($from_id, $data['enemies'])){
  $f = $fohsh[rand(0, count($fohsh)-1)];
  $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $f, 'reply_to_msg_id' => $msg_id]);
}
if(isset($data['answering'][$text])){
  $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $data['answering'][$text] , 'reply_to_msg_id' => $msg_id]);
    }
   }
  }
 }
} catch(\Exception $e){}	catch(\danog\MadelineProto\RPCErrorException $e){}
 }
}
register_shutdown_function('shutdown_function', $lock);
closeConnection();
$MadelineProto->async(true);
$MadelineProto->loop(function () use ($MadelineProto) {
  yield $MadelineProto->setEventHandler('\EventHandler');
});

$MadelineProto->loop();
if (!file_exists('error_log'))unlink("error_log");

?>
