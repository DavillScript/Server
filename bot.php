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
function post($link,$data,$ua){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  return curl_exec($ch);
}
function get($link,$ua){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_HEADER,0);
  return curl_exec($ch);
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
function solve(){
  global $user;
  $ua=array("Host: api-secure.solvemedia.com","user-agent: $user","accept: */*");
  $res=get("https://api-secure.solvemedia.com/papi/_challenge.js?k=wd1aAAqnwuzQ7RBpq8ZKi7DWaMC3x3xe;f=_ACPuzzleUtil.callbacks%5B0%5D;l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/h264,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome117,os/android,os/android10,fwv/AWv6EA.zknn21,jslib/jquery,htmlplus;am=IRbsd60-Pi4gfRb-rT4-Lg;ca=ajax;ts=1696505461;ct=1696505580;th=white;r=0.3190512508994039",$ua);
  $challenge=explode('"',explode('"challenge":"',$res)[1])[0];
  $sol=get("https://api-secure.solvemedia.com/papi/media?c=$challenge;w=300;h=150;fg=000000;bg=f8f8f8",$ua);
  $img="image.png";
  $file=fopen($img,"w");
  fwrite($file,$sol);
  fclose($file);
  $gmbar=file_get_contents("image.png");
  $base=base64_encode($gmbar);
  $ua2=array("Host: api.imagetext.xyz","user-agent: $user","content-type: application/json","accept: */*");
  $data='{"image":"'.$base.'"}';
  $res=post("https://api.imagetext.xyz/ocr",$data,$ua2);
  $pro=explode('"text":"Enter the following:\n',$res);
  $ses = explode('\n"', $pro[1]);
  $proses = $ses[0];
  $capcha = preg_replace("/[^a-zA-Z]/", "", $proses);
  if($capcha){
    echo "\033[1;92mproses                       \r";
    return "challenge=".$challenge."&response=".$capcha;
  }else{
    echo "\033[1;91mplease wait                  \r";
  }
 }
/*system("clear");
ban1();
echo ("\033[1;97m Please Subscribe🙏\r");
sleep(2);
system('termux-open https://youtube.com/c/DavillCreative');
echo ("\033[1;97m Thanks🙏                    \r");
sleep(2);
echo ("                        \r");*/
//onoff();
//pas();
$user=Sav("User_agent");
$cook=Sav("Cookie");
b:
system("clear");
ban();
print Slow("                \033[1;96m#claimfreecoins.cc#
\033[1;95m$r");
echo slow($h."SC IS ON!! AND READY TO RUN. BY KURSIBIRU.....\n");
echo slow("$r");
$ua=array("Host: claimfreecoins.cc","X-Requested-With: XMLHttpRequest","user-agent: $user","cookie: $cook");
$res=get("https://claimfreecoins.cc/faucet.html",$ua);
$use=explode('</',explode('class="text-success">',$res)[1])[0];
$bal=explode('</',explode('class="text-primary"><b>',$res)[1])[0];
$bal2=explode('</',explode('class="text-success"><b>',$res)[1])[0];
echo slow($bta."[".$m."•".$bta."]".$h."Username : ".$p."$use\n");
echo slow($bta."[".$m."•".$bta."]".$h."Balance : ".$p."$bal ".$u.">>".$k.">> ".$p."$bal2\n");
echo slow("$l");
pilihan:
      print "\033[1;92m1. Faucet\n";
      print "\033[1;92m2. Update Cookie\n";
      $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
      print"\033[1;95m$l";
      if($pil["pilih"]==1){
        goto faucet;
      }elseif($pil["pilih"]==2){
        goto up;
      }else{
        print slow("\033[1;91mwrong choice\n");
        sleep (3);
        goto pilihan;
      }
      faucet:
        $res=get("https://claimfreecoins.cc/faucet.html",$ua);
        $tk=explode("'",explode("var token = '",$res)[1])[0];
        $cap=solve();
        $data="a=getFaucet&token=$tk&captcha=0&$cap";
        $res=post("https://claimfreecoins.cc/system/ajax.php",$data,$ua);
        $tim=explode('.<\/div>',explode('fa-exclamation-triangle fa-fw\"><\/i> ',$res)[1])[0];
        if($tim=="You already claimed your coins this hour"){
          goto tim;
        }
        $suc=explode('<\/div>',explode('fa-check-circle fa-fw\"><\/i> Congratulations, ',$res)[1])[0];
        $su1=explode(' and',explode('Congratulations, your lucky number was ',$res)[1])[0];
        $su2=explode('<\/div>',explode('and you won ',$res)[1])[0];
        $res=get("https://claimfreecoins.cc/faucet.html",$ua);
        $bal=explode('</',explode('class="text-primary"><b>',$res)[1])[0];
        $bal2=explode('</',explode('class="text-success"><b>',$res)[1])[0];
        if($suc==null){
          goto faucet;
        }else{
          echo slow($bta."[".$m."√".$bta."]".$h."Congrats! lucky number ".$p."$su1 ".$h."you won ".$p."$su2\n");
          echo slow($bta."[".$m."•".$bta."]".$h."Balance : ".$p."$bal ".$u.">>".$k.">> ".$p."$bal2\n");
          echo slow("$l");
        }
        tim:
        timer(300);
        goto faucet;
        up:
          if(file_exists("Cookie")){
            system("rm Cookie");
            $cook=Sav("Cookie");
            sleep(2);
            goto b;
          }