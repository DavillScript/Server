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
function server(){
  pil:
    print "\033[1;92m1. Claimbits\n";
    print "\033[1;92m2. Claimfreecoins\n";
    print "\033[1;92m3. Coinpayz\n";
    print "\033[1;92m4. Balkanofaucet\n";
    print "\033[1;92m5. Exit\n";
    $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
    print"\033[1;95m$r";
    if($pil["pilih"]==1){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/bot.php'));
    }elseif($pil["pilih"]==2){
      //goto ptc;
    }elseif($pil["pilih"]==3){
      //goto ma;
    }elseif($pil["pilih"]==4){
      //goto auto;
    }elseif($pil["pilih"]==5){
      exit;
    }else{
      print slow("\033[1;91mwrong choice\n");
      sleep (3);
      goto pil;
    }
}
