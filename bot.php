<?php
system ("clear");
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
/*
\033[1;90m Abu Gelap
\033[1;91m Merah
\033[1;92m Hijau
\033[1;93m Kuning
\033[1;94m Biru Gelap
\033[1;95m Ungu
\033[1;96m Biru Telor Asin
\033[1;97m Putih
*/
$ab="\033[1;90m";
$m="\033[1;91m";
$h="\033[1;92m";
$k="\033[1;93m";
$bg="\033[1;94m";
$u="\033[1;95m";
$bta="\033[1;96m";
$p="\033[1;97m";
function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_COOKIE,TRUE);
  curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
  if($post){
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  }
  if($httpheader){
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
  }
  if($proxy){
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
  }
  curl_setopt($ch, CURLOPT_HEADER, true);
  $response = curl_exec($ch);
  $httpcode = curl_getinfo($ch);
  if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    curl_close($ch);
    return array($header, $body);
  }
}
function get($url,$host){
  return curl($url,'',head($host))[1];
}
function post($url,$data,$host){
  return curl($url,$data,head($host))[1];
}
function loading($str){
  echo "\n";
  $a = 100;
  echo "\033[1;91m $str [\033[1;32m0%\033[1;97m] ████████████████████\r";
  for($i=0;$i<$a;$i++){
    $kon = intval($i/$a*100);
    $kont = col(str_repeat('█',$kon/5),"rand");
    echo "\033[1;91m $str [\033[1;32m".$kon."%\033[1;97m]\033[1;32m $kont\r";
    usleep(55555);
  }
    echo "\033[1;97m $str [\033[1;32m100%\033[1;97m]\033[1;32m ████████████████████\r";
}
function Sav($namadata){
  if(file_exists($namadata)){
    $data = file_get_contents($namadata);
  }else{
    system("clear");
    ban1();
    $data = readline("\033[1;32m Input ".$namadata." :  ");
    file_put_contents($namadata,$data);
  }
    return $data;
}
function multisave($namadata){
$add=readline("\033[1;92m Input".$namadata." : \033[1;97m");
$save=fopen($namadata,"a");
fwrite($save, $add."\n");
fclose($save);
sleep(1);
echo slow("\033[1;92m Succsess add ".$namadata."\n");
}
function Col($str,$color){
  if($color=="rand"){
    $color=['h','k','p','k','m'][array_rand(['h','k','b','u','m'])];
  }
  $war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;97m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");
  return $war[$color].$str."\033[0m";
}
function timer($timer){
  date_default_timezone_set('UTC');
  $tim = time()+$timer;
  while(true):
    echo "\r                          \r";$wsl=$wrn[$i];
    $tm = $tim-time();
    $date=date("H:i:s",$tm);
    if($tm<1){
      break;
    }
    echo col("p","rand").col("l","rand").col("e","rand").col("a","rand").col("s","rand").col("e","rand").col(" w","rand").col("a","rand").col("i","rand").col("t","rand").col(" $date ","rand").col("•","rand").col("•","rand").col("•","rand").col("•","rand").col("•","rand");
    sleep(1);
  endwhile;
}
function Slow($msg){
  $slow = str_split($msg);
  foreach( $slow as $slowmo ){ 
    echo $slowmo; 
    usleep(555);
  }
}
function load($data, $file){$handle = fopen($file, 'w');fwrite($handle, $data);fclose($handle); }

function pas(){

  awalan:$d = date('D');
  switch($d){
    case "Sat":
    $pw = "sKzVGw1T8wyHqBZ01h1kOZ36Y";
    $link = "4Zed9A";
    break;
    case "Thu":
    $pw = "8vUkt0amvWVsnyuuJudQ0oIuk";
    $link = "yW33zh";
    break;
    case "Fri":
    $pw = "PqLDaUsZ93puSiy5LWv5amMWR";
    $link = "fQIs9o";
    break;
    case "Mon":
    $pw = "dtuWhN3MO8TSKwPa0UqiJJEuY";
    $link = "jGh1SF";
    break;
    case "Tue":
    $pw = "0Uc9iCmb9BltIhTLwCoDhj9KQ";
    $link = "yn5EQZ";
    break;
    case "Wed":
    $pw = "eBokpKcLaYRlq8uiJffciaS2X";
    $link = "gdu1QD";
    break;
    case "Sun":
    $pw = "ICx0dth9f2IOz8i2aoKXTyKRz";
    $link = "xVEd6b";
    break;
    default:
    $pw = "g3wHyJCGdYwZJ0fr1qFhlVWKv";
    $link = "P3O8j8";
    break;
  }
  $read = file_get_contents('key.txt');
  if($read != $pw){
    system ("clear");
    ban1();
    echo " \033[1;32mCode Password  \033[1;32m: \033[1;97m$link\n";
    echo "\033[1;32m Link Password  : \033[1;97mhttps://kursibirumysite.000webhostapp.com/\n";
    $p = readline(" \033[1;32mInput Password \033[1;32m: \033[1;97m");
    if($p == $pw){
      system ("clear");
      ban1();
      load($p, 'key.txt');
      loading ("Ceking Password");
      echo " \033[1;32mSuccessful Login To Script✓✓ \n";
      sleep(1);
      goto awalan;
    }else{
      system ("clear");
      ban1();
      loading ("Ceking Password");
      echo " \033[1;31mWrong Password, Please Input again!\n";
      sleep(1);
      goto awalan;
    }
  }
}
function ban1(){
  echo Slow("  \033[1;91mDate :".date(" D m Y "));
  echo Slow("              \033[1;91mTime :".date(" H:i:s "));
  echo Slow("\033[1;95m\n──────────────────────────────────────────────────\n");
  echo Slow("     \033[1;91m__ ____     ___  _   _  _  ___  _   ____ __\n");
  echo Slow("     \033[1;91m\ V /  \   | __|/ \ | \| ||_ _|/ \ / _\ V /\n");
  echo Slow("     \033[1;97m ) (| o )_ | _|| o || \\ | | || o |\_ \\ / \n");
  echo Slow("     \033[1;97m/_n_\__/__||_| |_n_||_|\_| |_||_n_||__/|_|\n");
  echo Slow("\033[1;95m\n──────────────────────────────────────────────────\n");}
  $r =  str_repeat("\033[1;95m~", 53)."\n";
  $l =  str_repeat("\033[1;95m_", 53)."\n";
  $t =  str_repeat("\033[1;91m◼", 53)."\n";
  function ban(){
    $u =  "\033[1;91mTime : ".date("H:i:s");
    $v=0.1;
    echo $ban=Slow("\033[1;92m    ==============================================
      \033[1;91m██╗  ██╗██████╗  ||  \033[1;91mCREATOR    :] YADI.S
      \033[1;91m██║ ██╔╝██╔══██╗ ||  YOUTUBE    :] KURSIBIRU
      \033[1;91m█████╔╝ ██████╔╝ ||  DONASI FP  :] Sugih07
      \033[1;97m██╔═██╗ ██╔══██╗ ||  SUPORT     :] XD-FANTASY
      \033[1;97m██║  ██╗██████╔╝ ||  GROUP TELE :] KURSIBIRU
      \033[1;97m╚═╝  ╚═╝╚═════╝  ||  THANKS FOR :] ALL MEMBER
  \033[1;92m  ==============================================
       $u             version: \033[1;97m$v 
    \033[1;92m==============================================
  \033[1;91m                 please don't edit
                       \033[1;93mWARNING!!!
            \033[1;91millegal program all at own risk 
                    dont't for sell\n");
  echo Slow( str_repeat("\033[1;91m◼",53)."\n");
  print Slow("     \033[1;96m😘TIDAK ADA PROSES YANG MENGKHIANATI HASIL😘\n");
  echo Slow( str_repeat("\033[1;91m◼",53)."\n");
  }
system("clear");
ban1();
echo ("\033[1;97m Please Subscribe🙏\r");
sleep(2);
system('termux-open https://youtube.com/c/DavillCreative');
echo ("\033[1;97m Thanks🙏                    \r");
sleep(2);
echo ("                        \r");
function head($host){
    global $csrf;
    $h[]="Host: $host";
    $h[]="accept: text/html, application/xhtml+xml";
    $h[]="x-csrf-token: $csrf";
    $h[]="user-agent: Mozilla/5.0 (Linux; U; Android 10; in-id; RMX2020 Build/QP1A.190711.020) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36";
    $h[]="content-type: application/json";
    $h[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
    return $h;
 }
 pas();
 b:
system("clear");
ban();print Slow("                   \033[1;96m#trxfarms.com#
\033[1;95m$r");
  echo slow($h."SC IS ON!! AND READY TO RUN. BY KURSIBIRU.....\n");
  echo slow("$r");
if(file_exists("wallet")){
    $tkn = count(file("wallet"));
  }else{
    $tkn = 0;
  }
  pilihan:
    print "\033[1;92m1. Tambah wallet + daftar".$bta."[".$m."$tkn".$bta."]\n";
    print "\033[1;92m2. Mining\n";
    $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
    print"\033[1;95m$l";
    if($pil["pilih"]==1){
      goto tambah;
    }elseif($pil["pilih"]==2){
      goto loog;
    }else{
      print slow("\033[1;91mwrong choice\n");
      sleep (3);
      goto pilihan;
    }
    tambah:
      system ("clear");
      ban1();
      multisave("wallet");
      $res=get("https://trxfarms.com/","trxfarms.com");
      $csrf=explode("'",explode("livewire_token = '",$res)[1])[0];
      $id=explode('"',explode('<div wire:id="',$res)[1])[0];
      $has=explode('&',explode('htmlHash&quot;:&quot;',$res)[1])[0];
      $sum=explode('&',explode('checksum&quot;:&quot;',$res)[1])[0];
      $data='{"fingerprint":{"id":"'.$id.'","name":"login","locale":"en","path":"/","method":"GET"},"serverMemo":{"children":[],"errors":[],"htmlHash":"'.$has.'","data":{"wallet":null,"response":null,"referral":null},"dataMeta":[],"checksum":"'.$sum.'"},"updates":[{"type":"syncInput","payload":{"id":"lfop","name":"wallet","value":"'.file("wallet").'"}},{"type":"callMethod","payload":{"id":"hdpv","method":"start","params":[]}}]}';
      $res=post("https://trxfarms.com/livewire/message/login",$data,"trxfarms.com");
      $res=get("https://trxfarms.com/account","trxfarms.com");
      $bal=explode('</',explode('id="miningBalance">',$res)[1])[0];
      print slow($bta."[".$m."•".$bta."] ".$h."Balance : ".$p."$bal\n");
      print slow("$l");
      if(file_exists("cookie.txt")){
          system("rm cookie.txt");
        }
      piliha:
        print "\033[1;92m1. Tambah lagi\n";
        print "\033[1;92m2. Mining\n";
        $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
        print"\033[1;95m$l";
        if($pil["pilih"]==1){
          goto mod;
        }elseif($pil["pilih"]==2){
          goto b;
        }else{
          print slow("\033[1;91mwrong choice\n");
          sleep (3);
          goto piliha;
        }
        mod:
          $pil["pilih"]=readline("\033[1;97mPlease Mode Pesawat & enter\033[1;92m");
          print"\033[1;95m$l";
          if($pil["pilih"]==null){
            goto tambah;
          }
          loog:
          $wa = file("wallet");
          foreach( $wa as $ud ){
            $token = trim($ud);
            $res=get("https://trxfarms.com/","trxfarms.com");
            $csrf=explode("'",explode("livewire_token = '",$res)[1])[0];
            $id=explode('"',explode('<div wire:id="',$res)[1])[0];
            $has=explode('&',explode('htmlHash&quot;:&quot;',$res)[1])[0];
            $sum=explode('&',explode('checksum&quot;:&quot;',$res)[1])[0];
            $data='{"fingerprint":{"id":"'.$id.'","name":"login","locale":"en","path":"/","method":"GET"},"serverMemo":{"children":[],"errors":[],"htmlHash":"'.$has.'","data":{"wallet":null,"response":null,"referral":null},"dataMeta":[],"checksum":"'.$sum.'"},"updates":[{"type":"syncInput","payload":{"id":"lfop","name":"wallet","value":"'.$token.'"}},{"type":"callMethod","payload":{"id":"hdpv","method":"start","params":[]}}]}';
            $res=post("https://trxfarms.com/livewire/message/login",$data,"trxfarms.com");
            $res=get("https://trxfarms.com/account","trxfarms.com");
            $bal=explode('</',explode('id="miningBalance">',$res)[1])[0];
            print slow($bta."[".$m."•".$bta."] ".$h."Wallet  : ".$p."$token\n");
            print slow($bta."[".$m."•".$bta."] ".$h."Balance : ".$p."$bal\n");
            print slow("$l");
            timer(10);
            bo:
              $res=get("https://trxfarms.com/account","trxfarms.com");
              $csrf=explode("'",explode("livewire_token = '",$res)[1])[0];
              $id=explode('"',explode('<div wire:id="',$res)[4])[0];
              $has=explode('&',explode('htmlHash&quot;:&quot;',$res)[4])[0];
              $max=explode(',',explode('max_withdraw&quot;:',$res)[1])[0];
              $sum=explode('&',explode('checksum&quot;:&quot;',$res)[4])[0];
              $bal=explode('</',explode('id="miningBalance">',$res)[1])[0];
              if($bal>0.00000010){
                d:
                  $data='{"fingerprint":{"id":"'.$id.'","name":"withdrawal","locale":"en","path":"account","method":"GET"},"serverMemo":{"children":[],"errors":[],"htmlHash":"'.$has.'","data":{"amount":null,"withdrawal_error_message":null,"min_withdraw":"0.00000010","max_withdraw":'.$max.',"final_amount":0},"dataMeta":[],"checksum":"'.$sum.'"},"updates":[{"type":"callMethod","payload":{"id":"gssy","method":"setMax","params":[]}}]}';
                  $res=post("https://trxfarms.com/livewire/message/withdrawal",$data,"trxfarms.com");
                  $max=explode('"',explode('data":{"amount":"',$res)[1])[0];
                  $sum=explode('"',explode('checksum":"',$res)[1])[0];
                  $amo=explode('"',explode('amount":"',$res)[1])[0];
                  $data='{"fingerprint":{"id":"'.$id.'","name":"withdrawal","locale":"en","path":"account","method":"GET"},"serverMemo":{"children":[],"errors":[],"htmlHash":"'.$has.'","data":{"amount":"'.$amo.'","withdrawal_error_message":null,"min_withdraw":"0.00000010","max_withdraw":"'.$max.'","final_amount":'.$max.'},"dataMeta":[],"checksum":"'.$sum.'"},"updates":[{"type":"callMethod","payload":{"id":"hpk7","method":"withdrawal","params":[]}}]}';
                  $res=post("https://trxfarms.com/livewire/message/withdrawal",$data,"trxfarms.com");
                  $lim=explode('."},',explode('withdrawal_error_message":"',$res)[1])[0];
                  if($lim){
                    echo slow($m."$lim\n");
                    echo slow("$l");
                    sleep(1);
                    exit;
                  }
                  $res=get("https://trxfarms.com/my-withdrawals","trxfarms.com");
                  $suc=explode(' Account',explode('Your Payment Sent! Please Check Your ',$res)[1])[0];
                  if($suc==""){
                    print slow($m."trying wd           \r");
                    sleep (5);
                    goto bo;
                  }
                  if($suc=="FaucetPay"){
                    print slow($bta."[".$m."√".$bta."]".$p."$max ".$h."was sent to your ".$k."Faucet".$bta."Pay.".$m."io\n");
                    print slow("$l");
                  }
                }
               if(file_exists("cookie.txt")){
                  system("rm cookie.txt");
                }
          }
          goto loog;
        
      
    
  