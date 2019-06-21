<?php
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}

date_default_timezone_set('Asia/Jakarta');
$date = date('d~M~Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$nick = "XerXez7 Gans";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
pilih:
    system($bersih);
echo "$lightcyan HALO KAMU MASUK PADA $date $darkgray
___________________________________________________
|╦ ╦┌─┐┬  ┌─┐┌─┐┌┬┐┌─┐┬─┐╔═╗┬ ┬┌─┐┬  ┬ 		  |
|║ ║├─┘│$lightgreen  │ │├─┤ ││├┤ ├┬┘╚═╗├─┤├┤ │  │ 	  	  |
|╚═╝┴  ┴─┘└─┘┴ ┴─┴┘└─┘┴└─╚═╝┴$darkgray ┴└─┘┴─┘┴─┘ 	  |
___________________________________________________
╚══════╝╚══════╝╚═╝  ╚═╝╚══════╝   ╚═╝        ╚═╝$lightred
	██████╗ ███████╗██╗  ██╗██╗  ██╗
	╚════██╗██╔════╝██║  ██║██║  ██║
	 █████╔╝█████╗$darkgray  ███████║███████║
	██╔═══╝ ██╔══╝  ╚════██║██╔══██║
	███████╗███████╗     ██║██║  ██║
	╚══════╝╚══════╝     ╚═╝╚═╝  ╚═╝$lightred
-$lightgreen XerXez7 CUMA BISA.MENGHUJAT MATI AJA BANGSAT ^-^
    $lightgreen ($darkgray +$lightgreen )$darkgray CUMA BUAT SC DEFACE+UPLOADER ^^
    $lightgreen ($darkgray -$lightgreen )$darkgray KALO GA SUKA/BILANG GA GUMA JANGAN INSTALL ;)
    $lightgreen ($darkgray !$lightgreen )$darkgray INFO$lightgreen
           - MASUKAN TITLE/JUDUL SCRIPT
           - MASUKAN NICK KAMU
           - MASUKAN KATA ONANIMOUS MU/ HACKED orr TAUCED
           - MASUKAN LINK LAGU$lightgray
";
