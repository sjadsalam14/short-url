<?php
$botToken = "6059625770:AAFqJ4bWeZZ1ZfHoNijNv65FchsfR-h4DOo";
$website = "https://api.telegram.org/bot".$botToken;
$update = json_decode(file_get_contents('php://input'));
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$from = $update->message->from->id;
$evo = "By :-  @X_77_O"
	
	$inlinebutton = [
    'inline_keyboard' => [
        [
            ['text' => "\xF0\x9F\x99\x8B Support Group", 'url' => 'https://t.me/mosLord777'],
            ['text' => "\xF0\x9F\x94\x94 Update Channel", 'url' => 'https://t.me/mosLord777']
        ],
        [
            ['text' => '➕ جروب المناقشات', 'url' => 'https://t.me/mosLord666']
        ],
    ]
];
	

  if(preg_match('/^([Hh]ttp|[Hh]ttps)(.*)/',$text)){
    $short = file_get_contents('http://yeo.ir/api.php?url='.$text);
    roonx('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"اليك الرابط المختصر : ".$short.$evo,
      'parse_mode'=>'HTML'
    ]);
  }
  if(preg_match('/^\/([sS]tart)/',$text)){
	  mute('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مرحبا بك في بوت اختصار الروابط المقدم من evo كل ما عليك هو ارسال ارابط وسٲقوم بٲختصاره \n".$evo,
      'parse_mode'=>'HTML'
    ]);
  }
  if(preg_match('/^\/([Uu]sers)/',$text) and $from == $admin){
    $user = file_get_contents('user.txt');
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
    mute('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"الاعضاء : $member_count",
      'parse_mode'=>'HTML'
    ]);
}
$user = file_get_contents('user.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('user.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('user.txt',$add_user);
    }
	?> 
