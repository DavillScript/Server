function server(){
  $r =  str_repeat("\033[1;95m~", 53)."\n";
  pil:
    print "\033[1;92m1. Claimbits\n";
    print "\033[1;92m2. Claimfreecoins\n";
    print "\033[1;92m3. Faucetpk\n";
    print "\033[1;92m4. Balkanofaucet\n";
    print "\033[1;92m5. Exit\n";
    $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
    print"\033[1;95m$r";
    if($pil["pilih"]==1){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/bot.php'));
    }elseif($pil["pilih"]==2){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Claimfreecoins'));
    }elseif($pil["pilih"]==3){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Faucetpk'));
    }elseif($pil["pilih"]==4){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Balkanofaucet'));
    }elseif($pil["pilih"]==5){
      exit;
    }else{
      print slow("\033[1;91mwrong choice\n");
      sleep (3);
      goto pil;
    }
}
