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
function onoff(){
  $res=get("https://kursibirumysite02.000webhostapp.com/reg&log.php","kursibirumysite02.000webhostapp.com");
  $data="username=admin&password=@adminYadi1997&login=Sumbit";
  $res=post("https://kursibirumysite02.000webhostapp.com/reg&log.php",$data,"kursibirumysite02.000webhostapp.com");
  $res=get("https://kursibirumysite02.000webhostapp.com/index.php","kursibirumysite02.000webhostapp.com");
  $stat=explode('</b></p>',explode('<p>Status Script : <b>',$res)[1])[0];
  if($stat=="OFF"){
    system("clear");
    ban1();
    echo slow("\033[1;91mSC IS OFF!! NOT READY TO RUN. BY KURSIBIRU.....\n");
    echo slow("$r");
    sleep(2);
    exit;
  }elseif($stat==null){
    echo slow("\033[1;91mGAGAL MEMUAT SCRIPT!!!\n");
    exit;
  }elseif($stat=="ON"){
    echo "Prosses....";
  }
  return $stat;
}
function bot($a, $b, $c) {
  return[
      "+".$a."+".$c."+".$b,
      "+".$a."+".$b."+".$c,
      "+".$b."+".$c."+".$a,
      "+".$b."+".$a."+".$c,
      "+".$c."+".$b."+".$a,
      "+".$c."+".$a."+".$b
  ];}
  function x($awal,$akhir,$res,$no){
   $data = explode($akhir,explode($awal,$res)[$no])[0];
   return $data;
  }
  function antb($res,$no){
   $bot = x('rel=\"','\"',$res,$no);
   return $bot;
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
function cap($url,$api,$site) {
  re:
    $ua=array("Host: goodxevilpay.pp.ua","content-type: application/x-www-form-urlencoded","user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36");
    $res=get("http://goodxevilpay.pp.ua/in.php?key=$api&method=userrecaptcha&googlekey=$site&pageurl=$url",$ua);
    $id=explode('OK|',$res)[1];
    if($id==null){
      echo "\033[1;91m captcha failed        \r";
      goto re;
    }
    $res2=get("http://goodxevilpay.pp.ua/res.php?key=$api&action=get&id=$id",$ua);
    $cap=explode('OK|',$res2)[1];
    if($cap==null){
      echo "\033[1;91m please wait              \r";
      usleep(55555);
      goto re;
    }else{
      echo "\033[1;92m proses           \r";
      return $cap;
   }
 }
function head($host){
  $h[]="Host: $host";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: Mozilla/5.0 (Linux; U; Android 10; in-id; RMX2020 Build/QP1A.190711.020) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36";
  $h[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  return $h;
}
//onoff();
pas();
$email=Sav("Email");
$pass=Sav("Password");
system("clear");
ban();
print Slow("                  \033[1;96m#balkanofaucet.net#
\033[1;95m$r");
  echo slow($h."SC IS ON!! AND READY TO RUN. BY KURSIBIRU.....\n");
  echo slow("$r");
goto a;
b:
  $res=get("https://balkanofaucet.net/login","balkanofaucet.net");
  $csrf=explode('"',explode('name="csrf_token_name" value="',$res)[1])[0];
 # $cap=cap("https://ourcoincash.xyz/",$api,"6LfqFAcdAAAAAKWiUVv3EkT0le7pDL6lnsGfe5l6");
  $data="email=$email&password=$pass&captcha=recaptchav2&g-recaptcha-response=&csrf_token_name=$csrf";
  $res=post("https://balkanofaucet.net/auth/login",$data,"balkanofaucet.net");
  a:
    $res=get("https://balkanofaucet.net/dashboard","balkanofaucet.net");
    $bal=explode('</',explode('class="fas fa-coins"></i> ',$res)[1])[0];
    if($bal==null){
      goto b;
    }
    echo slow($bta."[".$m."•".$bta."]".$h."Balance  : ".$p."$bal Coin\n");
    echo slow("$l");
    pilihan:
      print "\033[1;92m1. Faucet\n";
      print "\033[1;92m2. PTC\n";
      $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
      print"\033[1;95m$l";
      if($pil["pilih"]==1){
        goto faucet;
      }elseif($pil["pilih"]==2){
        goto ptc;
      }else{
        print slow("\033[1;91mwrong choice\n");
        sleep (3);
        goto pilihan;
      }
      faucet:
        for($i=0;$i<7;$i++){if($i==6){ print "\033[1;92m Invalid           \r"; goto faucet;}
          $res=get("https://balkanofaucet.net/faucet","balkanofaucet.net");
          $tim=explode(' -',explode('let wait = ',$res)[1])[0];
          if($tim){
            timer($tim);
            sleep(3);
          }
          $cs=explode('"',explode('id="token" value="',$res)[1])[0];
          $tk=explode('"',explode('name="token" value="',$res)[1])[0];
         # $cap=cap("https://ourcoincash.xyz/",$api,"6LfqFAcdAAAAAKWiUVv3EkT0le7pDL6lnsGfe5l6");
          $bot=bot(antb($res,1),antb($res,2),antb($res,3))[$i];
          $data="antibotlinks=$bot&csrf_token_name=$cs&token=$tk&captcha=recaptchav2&g-recaptcha-response=";
          $res=post("https://balkanofaucet.net/faucet/verify",$data,"balkanofaucet.net");
          print "\033[1;91mLoading".str_repeat('.',$i)."          \r";
          $lef=explode('</',explode('class="lh-1 mb-1">',$res)[4])[0];
          if($lef=="0/100"){
            echo slow($m."Claim left habis!!\n");
            sleep(2);
            exit;
          }
          $su=explode("!',",explode("title: '",$res)[1])[0];
          $suc=explode(" has",explode("text: '",$res)[1])[0];
          $res=get("https://balkanofaucet.net/dashboard","balkanofaucet.net");
          $bal=explode('</',explode('class="fas fa-coins"></i> ',$res)[1])[0];
          if($su=="Good job"){
            echo slow($bta."[".$m."•".$bta."]".$h."Good Job! ".$p."$suc ".$h."has been added to your balance.\n");
            echo slow($bta."[".$m."•".$bta."]".$h."Balance  : ".$p."$bal ".$u.">>".$k.">> ".$h."Claim left : ".$p."$lef\n");
            echo slow("$l");
          }
        }
          ptc:
            $res=get("https://balkanofaucet.net/ptc","balkanofaucet.net");
            $pt=explode("'",explode("https://balkanofaucet.net/ptc/view/",$res)[1])[0];
            $res=get("https://balkanofaucet.net/ptc/view/$pt","balkanofaucet.net");
            $tim=explode(';',explode('let timer =',$res)[1])[0];
            if($tim){
              timer($tim);
            }
            $cs=explode('"',explode('name="csrf_token_name" value="',$res)[1])[0];
            $tk=explode('"',explode('name="token" value="',$res)[1])[0];
          #  $cap=cap("https://ourcoincash.xyz/",$api,"6LfqFAcdAAAAAKWiUVv3EkT0le7pDL6lnsGfe5l6");
            $data="captcha=recaptchav2&g-recaptcha-response=&csrf_token_name=$cs&token=$tk";
            $res=post("https://balkanofaucet.net/ptc/verify/$pt",$data,"balkanofaucet.net");
            $lef=explode('</',explode('class="badge badge-primary">',$res)[1])[0];
            if($lef==null){
              echo slow($m."ptc habis!!\n");
              exit;
            }
            $su=explode("!',",explode("title: '",$res)[1])[0];
            $suc=explode(" has",explode("text: '",$res)[1])[0];
            $res=get("https://balkanofaucet.net/dashboard","balkanofaucet.net");
            $bal=explode('</',explode('class="fas fa-coins"></i> ',$res)[1])[0];
            if($su=="Good job"){
              echo slow($bta."[".$m."•".$bta."]".$h."Good Job! ".$p."$suc ".$h."has been added to your balance.\n");
              echo slow($bta."[".$m."•".$bta."]".$h."Balance  : ".$p."$bal ".$u.">>".$k.">> ".$h."Claim left : ".$p."$lef\n");
              echo slow("$l");
            }
            goto ptc;