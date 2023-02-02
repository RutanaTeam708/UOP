 <?php
 /*
BY@MROaN8
CH@php88
*/
class tamtam{
function __construct($token,$user_id) {
$token = iZ_7ndKMtqpQLVrbtSASTIKNMdSQUcwS-fVY9dVC5eg//هنا ايدي البوت تاخذه من التوكن//
$this->token = $token;
$this->user_id = $user_id; }
 public function Mroan($chat,$meh,$data){
 $url = "https://botapi.tamtam.chat/".$meh."?access_token=".$this->token."&chat_id=".$chat;
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));
 $res = curl_exec($ch);
 return $res;}}
$tamtam = new tamtam($token,$user_id);
$update = json_decode(file_get_contents('php://input'));
if($update != null){
 $message = $update->message;
 $id = $message->sender->user_id;
 $name = $message->sender->name;
 $chat_id = $message->recipient->chat_id;
 $text = $message->body->text;
 $CH="@KKKK-B";//هنا معرف قناتك//
 $USRE="@B2-2B";//هنا معرفك//
if($text=="/start")
$tamtam->Mroan(
$chat_id,'messages',
[
'text'=>"
﹌ ﹌ ﹌ ﹌ ﹌ ﹌ ﹌ 
مرحبا بك في اقوه بوت زخرفه في تام تام🎖
قم بأرسال اسمك بالعربيه ❗️
وسيتم زخرفته باحتراف 🏴
لاتنسى مشاركه البوت مع اصدقائك 🙆🏿‍♂

$CH

$USRE

﹌ ﹌ ﹌ ﹌ ﹌ ﹌ ﹌  ",
]);
}
if($text !="/start"){
$zhrfa = json_decode(file_get_contents("http://abowatan-api.aba.cx/Zkhrafa/?zh=".urlencode($text)))->Zhrfa;
for($i = 0; $i <count($zhrfa); $i++){
$tamtam->Mroan($chat_id,'messages',[ 'text'=>" - ".$zhrfa[$i],'chat_id'=>$chat_id]); }}
